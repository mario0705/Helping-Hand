<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
?>
<?php
include("head.php")
?>
<style type="text/css">
  .form-gradient .header {
  border-top-left-radius: .3rem;
  border-top-right-radius: .3rem; }

.form-gradient input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #fd9267;
  box-shadow: 0 1px 0 0 #fd9267; }

.form-gradient input[type=text]:focus:not([readonly]) + label {
  color: #4f4f4f; }

.form-gradient textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #fd9267;
    box-shadow: 0 1px 0 0 #fd9267; }


.form-dark .md-form label {
  color: #fff; }

.form-dark input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #00C851;
  -webkit-box-shadow: 0 1px 0 0 #00C851;
  box-shadow: 0 1px 0 0 #00C851; }

.form-dark input[type=text]:focus:not([readonly]) + label {
  color: #fff; }

.form-dark textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #00C851;
    box-shadow: 0 1px 0 0 #00C851;
    color: #fff; }

.form-dark textarea.md-textarea  {
    color: #fff;
}

.form-dark .form-control, .form-dark .form-control:focus {
    color: #fff;
}
</style>
<!--Main layout-->

<main>
  <center>
<!-- Section: form gradient -->
<section class="form-gradient mb-5">

    <!--Form with header-->
    <div style="width: 40%" class="card">

        <!--Header-->
        <div class="header peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Ask a Question</h3>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4">

            <div class="md-form">
                <i class="fa fa-tag prefix grey-text float-left"></i>
                <input type="text" id="form106" class="form-control">
                <label for="form106">Subject</label>
            </div>

            <div class="md-form">
                <i class="fa fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form107" class="md-textarea form-control" rows="5"></textarea>
                <label for="form107">Your message</label>
            </div>


            <!--Grid row-->
            <div class="row d-flex align-items-center mb-3 mt-4">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="button" class="btn btn-grey btn-rounded z-depth-1a">Send</button>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>

    </div>
    <!--/Form with header-->

</section>
</center>
<!-- Section: form gradient -->
<!-- Section: form dark -->
<!-- Section: form dark -->
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->