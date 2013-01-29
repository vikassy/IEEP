<?php
//For security reasons, don't display any errors or warnings. Comment out in DEV.
error_reporting(0);
//start session
session_start();
class logmein {
    //database setup
       //MAKE SURE TO FILL IN DATABASE INFO
    
//---------------------Coomment this file while deploying ---------------------------//
   // var $hostname_logon = 'localhost';      //Database server LOCATION
   // var $database_logon = 'IEEP';       //Database NAME
   // var $username_logon = 'root';       //Database USERNAME
   // var $password_logon = 'root';       //Database PASSWORD
    var $hostname_logon = 'IEEP.db.9351214.hostedresource.com';      //Database server LOCATION
    var $database_logon = 'IEEP';       //Database NAME
    var $username_logon = 'IEEP';       //Database USERNAME
    var $password_logon = 'Random123!@#';       //Database PASSWORD
//---------------------Coomment this file while deploying -----------------------/
    //table fields
    var $email_column = 'email';
    var $user_table = 'student';          //Users table name
    var $user_column = 'username';     //USERNAME column (value MUST be valid email)
    var $pass_column = 'password';      //PASSWORD column
    //var $user_level = 'userlevel';      //(optional) userlevel column
    
    //encryption
    var $encrypt = false;       //set to true to use md5 encryption for the password
    
    var $user = array(); 

    //connect to database
    function dbconnect(){
        $connections = mysql_connect($this->hostname_logon, $this->username_logon, $this->password_logon) or die ('Unabale to connect to the database');
        mysql_select_db($this->database_logon) or die ('Unable to select database!');
        return;
    }
 
    //login function
    function login($table, $username, $password){
        //conect to DB
        $this->dbconnect();
        //make sure table name is set
        if($this->user_table == ""){
            $this->user_table = $table;
        }
        //check if encryption is used
        if($this->encrypt == true){
            $password = md5($password);
        }
        //echo $username."  ".$password."  ";
        //execute login via qry function that prevents MySQL injections
        $result = $this->qry("SELECT * FROM ".$this->user_table." WHERE ".$this->user_column."='?' AND ".$this->pass_column." = '?';" , $username, $password);
        //$result=$this->qry("SELECT * FROM logon WHERE usermail='abc' and password='xyz'");
        $row=mysql_fetch_assoc($result);
        //echo $row;
        if($row != "Error"){
            if($row[$this->user_column] !="" && $row[$this->pass_column] !=""){
                //register sessions
                //you can add additional sessions here if needed
                $_SESSION['loggedin'] = $row[$this->pass_column];
                //userlevel session is optional. Use it if you have different user levels
                //$_SESSION['userlevel'] = $row[$this->user_level];
                return true;
            }else{
                session_destroy();
                return false;
            }
        }else{
            return false;
        }
 
    }
 
    //prevent injection
    function qry($query) {
      
      $this->dbconnect();
      $args  = func_get_args();
      $query = array_shift($args);
      $query = str_replace("?", "%s", $query);
      $args  = array_map('mysql_real_escape_string', $args);
      array_unshift($args,$query);
      $query = call_user_func_array('sprintf',$args);
      //echo $query;
      $result = mysql_query($query) or die(mysql_error());
          if($result){
            return $result;
          }else{
             $error = "Error";
             return $result;
          }
    }
 
    //logout function
    function logout(){
        session_destroy();
        return;
    }
 
    //check if loggedin
    function logincheck($logincode, $user_table, $pass_column, $user_column){
        //conect to DB
        $this->dbconnect();
        //make sure password column and table are set
        if($this->pass_column == ""){
            $this->pass_column = $pass_column;
        }
        if($this->user_column == ""){
            $this->user_column = $user_column;
        }
        if($this->user_table == ""){
          $this->user_table = $user_table;
        }
        //exectue query
        $result = $this->qry("SELECT * FROM ".$this->user_table." WHERE ".$this->pass_column." = '?';" , $logincode);
        $details=mysql_fetch_row($result);
        $total_column=mysql_num_fields($result);
        $i=0;
        while($i < $total_column)
        {
          $columns_key = mysql_field_name($result,$i);
          $this->user[$columns_key] = $details[$i];
            $i++;
        }
        $rownum = mysql_num_rows($result);
        //return true if logged in and false if not
        if($row != "Error"){
            if($rownum > 0){
                return true;
            }else{
                return false;
            }
        }
    }
    function composeMail($email_id,$msg,$subject)
    {
        $to = stripslashes($email_id);
        //echo $to;
        //some injection protection
        $illegals=array("%0A","%0D","%0a","%0d","bcc:","Content-Type","BCC:","Bcc:","Cc:","CC:","TO:","To:","cc:","to:");
        $to = str_replace($illegals, "", $to);
        $getemail = explode("@",$to);
 
        //send only if there is one email
        if(sizeof($getemail) > 2){
            return $success=3;
        }
        else
        {
            //send email
            $from = $_SERVER['SERVER_NAME'];
            //now we need to set mail headers
            $headers = "MIME-Version: 1.0 rn" ;
            $headers .= "Content-Type: text/html; \r\n" ;
            $headers .= "From: $from  \r\n" ;
            //now we are ready to send mail
            $sent = mail($to, $subject, $msg, $headers);
           if($sent)
           {
               $oput="Email msg sent to ".$to;
               $success=1;
           }
           else
           {
                $oput="Email msg not sent to ".$to;
                $success=2;
            }
            $d=date("y-m-d");
            $t=date("H:i:s");
            $oput="[".$d." ".$t."]".$oput."\n";
            $fh=fopen("log.txt",'a');
            fwrite($fh,$oput);
            fclose($fh);
            return $success;
        }
    }   
    
 
    //reset password
    function passwordreset($email_id,$user_table, $pass_column,$email_column){
        //conect to DB
        $this->dbconnect();
        //generate new password
        $newpassword = $this->createPassword();
 
        //make sure password column and table are set
        if($this->pass_column == ""){
            $this->pass_column = $pass_column;
        }
        if($this->user_table == ""){
            $this->user_table = $user_table;
        }
        if($this->email_column == ""){
            $this->email_column=$email_column;
        }
        //check if encryption is used
        if($this->encrypt == true){
            $newpassword_db = md5($newpassword);
        }else{
            $newpassword_db = $newpassword;
        }
 
        //update database with new password
        //echo stripslashes($email_id);
       // echo $this->user_table." ".$this->pass_column." ".$newpassword_db." ".$this->email_column." ".$email_id."<br/>";
        $qry = "UPDATE ".$this->user_table." SET ".$this->pass_column."='".$newpassword_db."' WHERE ".$this->email_column."='".stripslashes($email_id)."'";
        //$qry="UPDATE logon SET password='bc' WHERE email='abc.xyz@gmail.cm'";
        mysql_query($qry);
        if( mysql_affected_rows()==0){
            return 0;
        }
        $subject="TheGreenPlayground Password change request";
        $msg="Hello User,\n
              Your account password has been reset as requested.
              Your new password is:".$newpassword."\nYou may visit the http://link www.thegreenplayground.org//login.php and login with this password
              and change your password in your Profile settings page.\nThank You, \n TheGreenPlayground Team";
        return $this->composeMail($email_id,$msg,$subject);
    }
 
    //create random password with 8 alphanumerical characters
    function createPassword() {
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
        return $pass;
    }
 
    //login form
    /*function loginform($formname, $formclass, $formaction){
        //conect to DB
        $this->dbconnect();
        echo'<html>
<form name="'.$formname.'" method="post" id="'.$formname.'" class="'.$formclass.'" enctype="application/x-www-form-urlencoded" action="'.$formaction.'">
<div><label for="username">Username</label>
<input name="username" id="username" type="text"></div>
<div><label for="password">Password</label>
<input name="password" id="password" type="password"></div>
<input name="action" id="action" value="login" type="hidden">
<div>
<input name="submit" id="submit" value="Login" type="submit"></div>
</form></html>
 
';
    }*/
    //reset password form
    /*function resetform($formname, $formclass, $formaction){
        //conect to DB
        $this->dbconnect();
        echo'
<form name="'.$formname.'" method="post" id="'.$formname.'" class="'.$formclass.'" enctype="application/x-www-form-urlencoded" action="'.$formaction.'">
<div><label for="username">Username</label>
<input name="username" id="username" type="text"></div>
<input name="action" id="action" value="resetlogin" type="hidden">
<div>
<input name="submit" id="submit" value="Reset Password" type="submit"></div>
</form>
 
';
    }
    //function to install logon table
    function cratetable($tablename){
        //conect to DB
        $this->dbconnect();
        $qry = "CREATE TABLE IF NOT EXISTS ".$tablename." (
              userid int(11) NOT NULL auto_increment,
              useremail varchar(50) NOT NULL default '',
              password varchar(50) NOT NULL default '',
              userlevel int(11) NOT NULL default '0',
              PRIMARY KEY  (userid)
            )";
        $result = mysql_query($qry) or die(mysql_error());
        return;
    }*/
}
?>
