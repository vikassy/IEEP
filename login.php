  <?php include_once('include/unauthorize.php'); ?>   
<?php include_once("include/header.php"); ?> 
 <h3>Interactive Environmental Education Portal</h3>
  </div>



  <div class="row">

    
    <div style="text-align:center" class="span12">
      
  <div class="row">
    <div class="span6 offset3">
         <?php
              if(isset($_REQUEST['failed']))
              {
                echo "<div class='alert alert-error'> Username Or Password is Wrong </div>";
              }
              elseif(isset($_REQUEST['retry']))
              {
                echo"<div class='alert alert-success'> Email sent successfully, Please Login again with the new Password </div> ";
              }
              elseif(isset($_REQUEST['xyz']))
              {
                echo "<div class='alert alert-error'> Email ID not found, Please <a href='signup.html'>Sign up</a> </div>";
              }
              elseif(isset($_REQUEST['success']))
              {
                echo "<div class='alert alert-success'>You have successfully been registered for The Green Playground, please check your mail (if entered)
                        for your account details and Login Here</div>";
              }
              elseif(isset($_REQUEST['change']))
              {
                echo "<div class='alert alert-success'>You have successfully changed your password. Login Here</div>";
              }
              elseif(isset($_REQUEST['invalid']))
              {
                echo "<div class='alert alert-error'> Invalid Email ID, Mail not sent </div>";
              }
              elseif(isset($_REQUEST['unauthorized']))
              {
                echo "<div class='alert alert-error'>Please Sign in</div>";
              }
         ?>
        <form class="well form-search" method="post" action="form_action.php" name="login">
          <legend>Login</legend>
          <input type="text" class="input-small" placeholder="Username" name="username">&nbsp;&nbsp;
          <input type="password" class="input-small" placeholder="Password" name="password">&nbsp;&nbsp;
          <input name="action" id="action" value="login" type="hidden">
          <button type="submit" class="btn">Go</button>
        </form>
    <a href="reset_password.php">Forgot Password?</a>

      </div>
  </div>
  
    </div>

    

  </div>
  
  
</section>


<?php include("include/footer.php"); ?>

</body>
</html>
