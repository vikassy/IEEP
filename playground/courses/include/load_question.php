<? 
echo "hello";
class question{
    //database setup
       //MAKE SURE TO FILL IN DATABASE INFO
    
//---------------------Coomment this file while deploying ---------------------------//
   var $hostname_logon = 'localhost';      //Database server LOCATION
   var $database_logon = 'IEEP';       //Database NAME
   var $username_logon = 'root';       //Database USERNAME
   var $password_logon = 'root';       //Database PASSWORD
    // var $hostname_logon = 'IEEP.db.9351214.hostedresource.com';      //Database server LOCATION
    // var $database_logon = 'IEEP';       //Database NAME
    // var $username_logon = 'IEEP';       //Database USERNAME
    // var $password_logon = 'Random123!@#';       //Database PASSWORD
//---------------------Coomment this file while deploying -----------------------/
    //table fields
    // var $email_column = 'email';
    // var $user_table = 'student';          //Users table name
    // var $user_column = 'username';     //USERNAME column (value MUST be valid email)
    // var $pass_column = 'password';      //PASSWORD column
    //var $user_level = 'userlevel';      //(optional) userlevel column
    
    //encryption
    // var $encrypt = false;       //set to true to use md5 encryption for the password
    
    // var $user = array(); 

    //connect to database
    function dbconnect(){
        $connections = mysql_connect($this->hostname_logon, $this->username_logon, $this->password_logon) or die ('Unabale to connect to the database');
        mysql_select_db($this->database_logon) or die ('Unable to select database!');
        return;
    }
 
    //login function
    function load_question($level_id,$course_id){
        //conect to DB
        echo "Hello";
        $this->dbconnect();
        $result = $this->qry("SELECT * FROM question WHERE course_id = '?' AND  level_id = '?' " , $course_id, $level_id);
        echo "<form action='load_question.php' method='post'>";
        while ($ques=mysql_fetch_row($result)) {
        	echo $ques[2];
        	echo $ques[3];
        	echo "<input type='radio' name='".$ques[2]."' />".$ques[5];
        	echo "<input type='radio' name='".$ques[2]."' />".$ques[6];
        	echo "<input type='radio' name='".$ques[2]."' />".$ques[7];
        }
        echo "</form>";
        //make sure table name is set
        // if($this->user_table == ""){
        //     $this->user_table = $table;
        // }
        // //check if encryption is used
        // if($this->encrypt == true){
        //     $password = md5($password);
        // }
?>