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
  

<!-- Section: form gradient -->
<!-- Section: form dark -->
<!-- Section: form dark -->
<!--Grid row-->
<!-- <div class="row"> -->

    <!--Grid column-->
    <div class="col-md-6 row">
        <div class="card float-left" style="width: 50%;">
            <div class="card-body">
                <form class="form-inline mr-auto">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"><br><br><br>
                  <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search</button>
                </form> 
            </div>
        </div>
    </div><br>
    <div class="col-md-6 row">
        <div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Ask a Question</h3>
            </div>
          </div>
          <div class="card-body mx-4">
            <div class="md-form">
              <i class="fa fa-tag prefix grey-text float-left"></i>
              <input type="text" id="form106" class="form-control">
              <label for="form106">Subject</label>
            </div>
            <div class="md-form">
              <i class="fa fa-pencil prefix grey-text"></i>
              <textarea type="text" id="form107" class="md-textarea form-control" rows="4"></textarea>
              <label for="form107">Your message</label>
            </div>
            <div class="row d-flex align-items-center mb-3 mt-4">
              <div class="col-md-12">
                <div class="text-center">
                  <button type="button" class="btn btn-grey btn-rounded z-depth-1a">Send</button>
                </div>
              </div>
            </div>  
          </div>
        </div>
    </div>
    <!--Grid column-->
    <!--Grid column-->
    
    <!--Grid column-->
<!-- </div> -->
<br><br><br><br>
<!--Grid row-->
<div class="row">
    <div class="col-sm-4 col-lg-3">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column mt-4">
            <a class="navbar-brand" href="#">Recent Questions</a>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link active" href="#item-1">Question 1</a>
                <a class="nav-link" href="#item-2">Question 2</a>
                <a class="nav-link" href="#item-3">Question 3</a>
            </nav>
        </nav>
    </div>
    <div class="col-sm-8 col-lg-9">
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
            <h4 id="item-1">Question 1</h4>
            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
            <h4 id="item-2">Question 2</h4>
            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
            <h4 id="item-3">Question 3</h4>
            <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
        </div>
    </div>
</div><br><br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->