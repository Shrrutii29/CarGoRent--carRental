<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']);
$confirmPassword=md5($_POST['confirmPassword']);
$sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required onblur="validateName()" autocomplete="off">
		  <span id="nameError" style="color: red; display: none;">Please enter a valid name (only alphabets).</span>
                </div>

<script>
function validateName() {
  var name = document.getElementsByName("fullname")[0].value;
  var pattern = /^[a-zA-Z]+$/;

  if (!pattern.test(name)) {
    document.getElementById("nameError").style.display = "block";
    document.getElementsByName("fullname")[0].value = "";
  } else {
    document.getElementById("nameError").style.display = "none";
  }
}
</script>
                      <div class="form-group">
  <input type="tel" class="form-control" name="mobileno" placeholder="Mobile Number" pattern="[0-9]{10}" required onblur="validateMobile()" autocomplete="off">
  <span id="mobileError" style="color: red; display: none;">Please enter a valid 10-digit mobile number.</span>
</div>

<script>
function validateMobile() {
  var mobile = document.getElementsByName("mobileno")[0].value;
  var pattern = /^[0-9]{10}$/;

  if (!pattern.test(mobile)) {
    document.getElementById("mobileError").style.display = "block";
    document.getElementsByName("mobileno")[0].value = "";
  } else {
    document.getElementById("mobileError").style.display = "none";
  }
}
</script>

                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required" autocomplete="off">
                   <span id="user-availability-status";></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password"  required onblur="validatePass()">
		  <span id="passError" style="color: red; display: none;">Confirm password must match password.</span>
                </div>

		<script>
function validatePass() {
  var passwordd = document.getElementById('password').value;
  var confirmPasswordd = document.getElementsByName('confirmPassword')[0].value;
  
  if (passwordd === confirmPasswordd) {
    document.getElementById("passError").style.display = "none";
  } else {
    document.getElementById("passError").style.display = "block";
    document.getElementsByName("confirmPassword")[0].value = "";
  }
}

</script>

                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
