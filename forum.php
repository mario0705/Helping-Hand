<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
  if ($status == "ngo") {
                     # code...
    header('Location: redirect.php');
               
               
}

}
else {
  # code...
  header('Location: redirect.php');
}


if ($status =="volunteer") {

echo " <style>
 #aq{
    display: none;
  }
    </style>";
  # code...
}
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


<?php

if (isset($_POST["qsearch"])) {

 $_SESSION['qsearch']=$_POST["qsearch"];

  # code...
}






?>



<!--Main layout-->

<main>
  

<!-- Section: form gradient -->
<!-- Section: form dark -->
<!-- Section: form dark -->
<!--Grid row-->
<!-- <div class="row"> -->

    <!--Grid column-->
    <div class="col-md-7 col-lg-12 mb-4">
        <div class="card" >
            <div class="card-body">
                <form method="get" action="material.php" class="form-inline mr-auto">

                  <input class="form-control mr-sm-4" type="text" name ="search" placeholder="Search Question" aria-label="Search">
                  <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search  </button>
                </form> 
            </div>
        </div>
    </div>

 <div id="aq" class="col-md-7 col-lg-12 mb-4">
        <div class="card" ">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Ask a Question</h3>
            </div>
          </div>
         <div class="form-inline">
                                    
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline4" value="computerscience">
                                                    <label class="form-check-label" for="exampleRadiosInline4">
                                                        Computer Science
                                                    </label>
                                                </div>
                                            
                                            <div class="form-check float-left">
                                                <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline5" value="mathematics">
                                                <label class="form-check-label" for="exampleRadiosInline5">
                                                    Mathematics&emsp;&nbsp;
                                                </label>
                                            </div>
                                            
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline6" value="physics">
                                                    <label class="form-check-label" for="exampleRadiosInline6">
                                                        Physics
                                                    </label>
                                                </div>
                                            
                                        
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline7" value="chemistry">
                                                    <label class="form-check-label" for="exampleRadiosInline7">
                                                        Chemistry&emsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline8" value="biology">
                                                    <label class="form-check-label" for="exampleRadiosInline8">
                                                        Biology&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline9" value="accounts">
                                                    <label class="form-check-label" for="exampleRadiosInline9">
                                                        Accounts
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline10" value="history">
                                                    <label class="form-check-label" for="exampleRadiosInline10">
                                                        History&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline11" value="english">
                                                    <label class="form-check-label" for="exampleRadiosInline11">
                                                        English&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline12" value="management">
                                                    <label class="form-check-label" for="exampleRadiosInline12">
                                                        Management
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline13" value="finance">
                                                    <label class="form-check-label" for="exampleRadiosInline13">
                                                        Finance&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                                                    </label>
                                                </div>
                                            
                                                <div class="form-check float-left">
                                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline14" value="electronics">
                                                    <label class="form-check-label" for="exampleRadiosInline14">
                                                        Electronics
                                                    </label>
                                                </div>
                                            
                                </div>
                            </div>
            <div class="md-form">
              <i class="fa fa-pencil prefix grey-text"></i>
              <textarea type="text" id="form107" class="md-textarea form-control" rows="2"></textarea>
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

    <div class="col-md-7 col-lg-12 mb-4">
            <div class="card">
                <div class="header peach-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Search <?php if (isset($_GET["qsearch"])) {

 $search=$_GET["qsearch"];
 echo "results for : ";
 echo $search;

  # code...
}?></h3>
                    </div>
                </div>
                <div class="card-body text-center">
                    <!--Title-->
                    <div class="container-fluid text-center">
                        <!--Card-->
                        <!--Card image-->
                        <div class="" style="visibility: visible; animation-name: fadeIn;">
                            <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                            <?php
                            if (isset($_GET["qsearch"])) {

                            $search=$_GET["qsearch"];

  # code...
                            }
                            else  {
                              $search="";
                              # code...
                            }
                            $sql = "SELECT date,subject,link,materialdesc FROM material where materialdesc LIKE '%".$search."%'";
                            mysqli_select_db($mysqli,'secure_login');
                            $retval = mysqli_query($mysqli,$sql);
                            if(! $retval)
                            {
                            die('Could not get data :'.mysqli_error());
                            }
                            ?>
                            <style type="text/css">
                            .table-dark{
                            background-color: #82B6AD;
                            }
                            </style>
                            <div style="padding-top: 2%;" class="table-responsive">
                                <table class=" table table-striped" border="1" style="width: 90%;" align="center">
                                    <tr>
                                        <td class="table-dark">
                                            No.
                                        </td>
                                        <td class="table-dark">
                                            Date
                                        </td>
                                        <td class="table-dark">
                                            Subject
                                        </td>
                                        <td class="table-dark">
                                            Material Description
                                        </td>
                                        <td class="table-dark">
                                            link
                                        </td>
                                    </tr>
                                    <?php $i=1;
                                    while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                                    {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["date"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["subject"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["materialdesc"]; ?>
                                        </td>
                                        <td >
                                            <form action="https://<?php echo $row["link"]?>" method="get">
                                                <button style="z-index: 2;" value="" class="btn btn-cyan" type="submit">Open Link</button>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php $i++;} ?>
                                </table>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/Card image-->
                        <!--Card content-->
                        <!--/.Card content-->
                    </div>

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
</div>



</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->