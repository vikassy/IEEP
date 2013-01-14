<?php
    
    include("class.login.php");
    $log=new logmein();
    $username=$_POST['username'];
    $a1=$_POST['a1'];
    $a1=strtolower($a1);
    $a2=$_POST['a2'];
    $a2=strtolower($a2);
    $result=$log->qry("SELECT * FROM student WHERE name='?'",$username);
    $row=mysql_fetch_assoc($result);
    if($a1==$row['a1'] && $a2==$row['a2'])
    {
        include("include/header.php");
        ?>
   
 <h3>Interactive Environmental Education Portal</h3>
  </div>

  <div class="row">

    <div style="text-align:center" class="span12">
      
  <div class="row">
    <div class="span6 offset3">
          
          <form class="well form-search" method="post" action="update_acct.php" name="login">
          <legend>Change Password</legend>
          <div class="control-group">
            <label class="control-label" for="input01">New Password*</label>
            <div class="controls">
              <input data-validation-required-message="Please enter new password" type="password" class="input-xlarge" name = 'password' id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="input01">Confirm New Password*</label>
            <div class="controls">
              <input type="password" data-validation-matches-match="password" data-validation-matches-message="Passwords do not match" class="input-xlarge" name="c_password" id="input01">
              <p class="help-block"></p>
            </div>
          </div>
          <?php echo "<input type='hidden' name='username' value='".$username."'>";    ?>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
      
    
    
  </div>
  
    </div>

    

  </div>
  
  
</section>


<?php include("include/footer.php"); ?>
    <script src="js/jQuery-1.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/prettify.js"></script>
    
    <script>
            $(function() {

                prettyPrint();

                $("input,textarea,select").jqBootstrapValidation(
                    {
                        preventSubmit: true,
                        submitError: function($form, event, errors) {
                            // Here I do nothing, but you could do something like display 
                            // the error messages to the user, log, etc.
                        },
                        submitSuccess: function($form, event) {
                           
                        },
                        filter: function() {
                            return $(this).is(":visible");
                        }
                    }
                );

                $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
                });

            });
        </script>



  

</body>
</html>





<?php
    }
    else
    {
        header("location: reset_password.php?error=1");
    }
?>