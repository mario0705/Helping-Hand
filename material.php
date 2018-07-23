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

if (isset($_POST["search"])) {

 $_SESSION['search']=$_POST["search"];

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

                  <input class="form-control mr-sm-4" type="text" name ="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search  </button>
                </form> 
            </div>
        </div>
    </div>


    <div class="col-md-7 col-lg-12 mb-4">
            <div class="card">
                <div class="header peach-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Search <?php if (isset($_GET["search"])) {

 $search=$_GET["search"];
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
                        <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                            <?php
                            if (isset($_GET["search"])) {

                            $search=$_GET["search"];

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
                            <div style="padding-top: 2%;">
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



</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->