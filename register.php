<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>
<?php
include("head.php")
?>
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/JavaScript" src="js/forms2.js"></script>
<style type="text/css">
#ngo
{
  display: none;
}
#user{
  display: none;
}
.form-gradient .font-small {
font-size: 0.8rem; }
.form-gradient .header {
border-top-left-radius: .3rem;
border-top-right-radius: .3rem; }
.form-gradient input[type=text]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=text]:focus:not([readonly]) + label {
color: #4f4f4f; }
.form-gradient input[type=password]:focus:not([readonly]) {
border-bottom: 1px solid #fd9267;
-webkit-box-shadow: 0 1px 0 0 #fd9267;
box-shadow: 0 1px 0 0 #fd9267; }
.form-gradient input[type=password]:focus:not([readonly]) + label {
color: #4f4f4f; }
</style>
<main>
  
  <div class="container-fluid text-center">
    <!--Card-->
    <div class="card card-cascade wider reverse my-4 pb-5">
      
      
      
      <section class="form-gradient d-flex" style="align-self: center;" >
        <!--Form with header-->
        <div class="card ">
          <!--Header-->
          <div class="header pt-1 aqua-gradient">
            <div class="row d-flex justify-content-center">
              <h3 class="white-text mb-3 pt-3 font-weight-bold">Sign Up</h3>
            </div>
            
          </div>
          <div class="card-body mx-5 mt-5">
              <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample" onclick="document.getElementById('ngo').style.display = 'none';document.getElementById('user').style.display = 'block'">
  <label class="custom-control-label" for="defaultInline1">Student</label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample" onclick="document.getElementById('ngo').style.display = 'none';document.getElementById('user').style.display = 'block'">
  <label class="custom-control-label" for="defaultInline3">Volunteer</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample" onclick="document.getElementById('ngo').style.display = 'block';document.getElementById('user').style.display = 'none'">
  <label class="custom-control-label" for="defaultInline2">NGO</label>
</div>
          </div><br>
          <div class="card-body mx-8 mt-5" id="user">
            <?php
  if (!empty($error_msg)) {
  echo $error_msg;
  }
  ?>

            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form" >
              <div class="md-form ">
                <input   class="form-control" type="text" name="teamname">
                <label for="Form-email3">Your Name</label>
              </div>
              <div class="md-form ">
                <input type="text"  class="form-control" type="text" name="email">
                <label for="Form-email3">Your email</label>
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control"  type="password"
                name="password">
                <label for="Form-pass3">Your password</label>
                
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control" name="confirmpwd">
                <label for="Form-pass3">Confirm password</label>
                
              </div>
              <div class="md-form ">
                <input type="text" class="form-control"  name="mobile">
                <label for="Form-email3">Your mobile</label>
              </div>
              <div class="md-form ">
                <input type="text"  class="form-control"  name="age">
                <label for="age">Your Age</label>
              </div>
              <!-- Form inline with radios -->
              <div class="form-inline">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadiosInline2" value="Male">
        <label class="form-check-label" for="exampleRadiosInline2">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadiosInline3" value="Female">
        <label class="form-check-label" for="exampleRadiosInline3">
            Female
        </label>
    </div>
    <br>
      <button type="button" class="btn aqua-gradient btn-primary z-depth-1a"  onclick="return regformhash(this.form,
                    this.form.teamname,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd,
                    this.form.mobile,
                    this.form.age);">Signup</button>
</div>
</form>




              <!--Grid column-->
              <!--Grid column-->
              
              <!--Grid column-->
              <div class="col-md-7">
                <p class="font-small grey-text d-flex justify-content-end mt-3">Already have an account? <a href="login.php" class="dark-grey-text ml-1 font-weight-bold"> Sign in</a></p>
              </div>
              <!--Grid column-->
            </div>


<div class="card-body mx-8 mt-5" id="user">
            <?php
  if (!empty($error_msg)) {
  echo $error_msg;
  }
  ?>

            <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form" >
              <div class="md-form ">
                <input   class="form-control" type="text" name="teamname">
                <label for="Form-email3">Your Name</label>
              </div>
              <div class="md-form ">
                <input type="text"  class="form-control" type="text" name="email">
                <label for="Form-email3">Your email</label>
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control"  type="password"
                name="password">
                <label for="Form-pass3">Your password</label>
                
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control" name="confirmpwd">
                <label for="Form-pass3">Confirm password</label>
                
              </div>
              <div class="md-form ">
                <input type="text" class="form-control"  name="mobile">
                <label for="Form-email3">Your mobile</label>
              </div>
              <div class="md-form ">
                <input type="text"  class="form-control"  name="age">
                <label for="age">Your Age</label>
              </div>
              <!-- Form inline with radios -->
              <div class="form-inline">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadiosInline2" value="Male">
        <label class="form-check-label" for="exampleRadiosInline2">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadiosInline3" value="Female">
        <label class="form-check-label" for="exampleRadiosInline3">
            Female
        </label>
    </div>
    <br>
      <button type="button" class="btn aqua-gradient btn-primary z-depth-1a"  onclick="return regformhashvolunteer(this.form,
                    this.form.teamname,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd,
                    this.form.mobile,
                    this.form.age);">Signup</button>
</div>
</form>




              <!--Grid column-->
              <!--Grid column-->
              
              <!--Grid column-->
              <div class="col-md-7">
                <p class="font-small grey-text d-flex justify-content-end mt-3">Already have an account? <a href="login.php" class="dark-grey-text ml-1 font-weight-bold"> Sign in</a></p>
              </div>
              <!--Grid column-->
            </div>







<div class="card-body mx-8 mt-5" id="ngo">
            <?php
  if (!empty($error_msg)) {
  echo $error_msg;
  }
  ?>
        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" name="registration_form" >
              <div class="md-form ">
                <input  id="ngoname" class="form-control" type="text" name="ngoname">
                <label for="Form-email3">Name</label>
              </div>
              <div class="md-form ">
                <input  id="coordinator" class="form-control" type="text" name="coordinator">
                <label for="Form-email3">Coordinator</label>
              </div>
              <div class="md-form ">
                <input type="text" id="email" class="form-control" type="text" name="email">
                <label for="Form-email3">Email</label>
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control"  type="password"
                name="password"
                id="password">
                <label for="Form-pass3">Password</label>
                
              </div>
              <div class="md-form pb-1 pb-md-3">
                <input type="password" class="form-control" name="confirmpwd" id="confirmpwd">
                <label for="Form-pass3">Confirm password</label>
                
              </div>
              <div class="md-form ">
                <input type="text" id="mobile" class="form-control"  name="mobile">
                <label for="Form-email3">Phone no.</label>
              </div>
              <div class="md-form ">
                <input type="text" id="address" class="form-control"  name="address">
                <label for="address">Address</label>
              </div>
            
  
<!-- Form inline with radios -->
              <!--Grid row-->
              <div class="row d-flex align-items-center mb-4">
                <!--Grid column-->
                <div class="col-md-1 col-md-5 d-flex align-items-start">
                  <div class="text-center">
                    <br>
                    <button type="button" class="btn aqua-gradient btn-primary z-depth-1a"  onclick="return regformhashngo(this.form,
                    this.form.ngoname,
                    this.form.coordinator,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd,
                    this.form.mobile,
                    this.form.address);">Signup</button>
                  </div>
                </div>
              </form>




              <!--Grid column-->
              <!--Grid column-->
              
              <!--Grid column-->
              <div class="col-md-7">
                <p class="font-small grey-text d-flex justify-content-end mt-3">Already have an account? <a href="login.php" class="dark-grey-text ml-1 font-weight-bold"> Sign in</a></p>
              </div>
              <!--Grid column-->
            </div>

          </div>
          
          <!--/Form with header-->
        </section>
        
        
        
        <!-- <a class="btn btn-secondary btn-lg waves-effect waves-light">Secondary button</a>
        <a class="btn btn-default btn-lg waves-effect waves-light">Default button</a> -->
      </div>
      <!--/.Card content-->
    </div>
    <!--/.Card-->
    
  </div>
  
</main>
<?php
include("foot.php")
?>