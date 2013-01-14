<?php include("include/header.php"); ?>
<?php include 'include/unauthorize.php'; ?> 
 <h3>Interactive Environmental Education Portal</h3>
  </div>


<?php
     if(isset($_REQUEST['err']))
     {
         echo "<div class='alert alert-error' ><center>Entered User Name does not exist</div>";
     }
?>
  
<?php
     if(isset($_REQUEST['error']))
     {
         echo "<div class='alert alert-error' ><center>Securtiy Questions Answered Incorrectly</div>";
     }
?>
  <div class="row">

    
    <div style="text-align:center" class="span12">
      
  <div class="row">
    <div class="span6 offset3">
          
          <form class="well form-search" method="post" action="verify_acct.php" name="login">
          <legend>Forgot Password</legend>
          <input type="email" class="input-small span4" placeholder="Email-ID" name="email">&nbsp;&nbsp;
          <input type="hidden" name='type' value='email'>
          <button type="submit" class="btn">Send Email</button>
        </form>
        <form class="well form-search" method="post" action="verify_acct.php" name="login">
          <legend>Or Answer your Security Questions</legend>
          <input type="hidden" name='type' value='user_name'>
          <input type="text" class="input-small span3" placeholder="Username" name="username">&nbsp;&nbsp;
          <button type="submit" class="btn">Get Security Questions</button>
        </form>

      </div>
      
    
    
  </div>
  
    </div>

    

  </div>
  
  
</section>



<?php include("include/footer.php"); ?>
    


  

</body>
</html>
