<?php
   
    include("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
    //$a =  $log->passwordreset($_POST['email'],"logon","password","email");
    if($_POST['type']=='email')
    {
        if ($log->passwordreset($_POST['email'],"student","password","email")== 1)
        {
            header("location: login.php?retry=1");
        }
        else
        {
            header("location: login.php?xyz=1");
        }
    }
    else
    {
      include("include/header.php");
      ?>
      
 <h3>Interactive Environmental Education Portal</h3>
  </div>


  <div class="row">

    
    <div style="text-align:center" class="span12">
      
  <div class="row">
    <div class="span6 offset3">  
      <form class="well form-search" method="post" action="acct_verifier.php" name="login">
          <legend>Security Question 1:</legend>
          <?php
              $username=$_POST['username'];
              //echo $username;
              $result=$log->qry("SELECT * FROM student WHERE name='?'",$username);
              //echo $result;
              $row=mysql_fetch_assoc($result);
              if(!$row)
              {
                header("location: reset_password.php?err=1");
              }
              else
              {
                $q1=$row['q1'];
                $q2=$row['q2'];
              }
          
          echo "<h4>".$q1."</h4>";
          echo "<input type='hidden' name='username' value=".$username.">"
          ?>
          <input type="text" class="input-small span4" placeholder="Answer 1" name="a1">&nbsp;&nbsp;
          <br/><br/>
          <legend>Security Question 2</legend>
          <?php echo "<h4>".$q2."</h4>";  ?>
          <input type="text" class="input-small span3" placeholder="Answer 2" name="a2">&nbsp;&nbsp;
          <br/><br/><button type="submit" class="btn">Answer Questions</button>
      </form>
            
</div>
  
    </div>

    

  </div>
  
  
</section>



<?php include("include/footer.php"); ?>
    


</body>
</html>

<?php } ?>