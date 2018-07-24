<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
if ($status != "volunteer") {
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
<!--Main layout-->
<main>
    <body>
        
        <!-- Card -->
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form method="get" action="material.php" class="form-inline mr-auto">

                  <input class="form-control mr-sm-4" type="text" name ="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search  </button>
                </form>
                    </div>
                </div>
                <!--/.Card-->
            </div><br>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form class="form mr-auto">
                            <?php
                            $volunteer=$_SESSION['volunteer'];
                            $sql = "SELECT jobs from volunteer WHERE volunteer='$volunteer'";
                            mysqli_select_db($mysqli,'secure_login');
                            $retval = mysqli_query($mysqli,$sql);
                            $row =mysqli_fetch_array($retval , MYSQLI_BOTH);
                            $jobs=$row['jobs'];
                            $_SESSION['jobs'] =$jobs;
                            ?>
                            <label class="btn btn-unique btn-rounded btn-sm my-0">No. of sessions</label>
                            <h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $jobs;?></h2>
                            
                        </form>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            
             <div class="col-md-6 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <?php
                            if ($jobs < '5') {
                                # code... 
                                echo '<button style="cursor: pointer; " type="submit" class="btn btn-cyan disabled">Generate certificate</button></center>';
                            }
                           else {
                            echo "<button style=\"cursor: pointer; \" type=\"submit\" class=\"btn btn-cyan \" onclick=\"window.location.href='./certificate.php'\">Generate certificate</button></center>";
                           }
                       ?>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
           </div> 
          <center> <div class="col-md-6 col-lg-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        
                  <button class="btn btn-cyan" type="submit" style="cursor: pointer;">Answer questions</button>
                
                    </div>
                </div>
                <!--/.Card-->
            </div></center>

            <div class="col-md-7 col-lg-12 mb-4">
                <!--Card-->
                
                <div class="card">
                    <div class="header peach-gradient">
                        <div class="row d-flex justify-content-center">
                            <h3 class="white-text mb-0 py-5 font-weight-bold">Upload link</h3>
                        </div>
                    </div>
                    <div class="card-body mx-4">
                        
                        <div class="col-md-6">
                            <form method="post" action="includes/process_submat.php" >
                                
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
                            <br>
                            <textarea class="form-control rounded-0" id="materialdesc" name="materialdesc" rows="3" placeholder="Description..."></textarea>
                            <br>
                            <input type="text" class="form-control mr-sm-2" name="link" placeholder="Add link..."><br>
                            <button style="cursor: pointer;" type="submit" class="btn btn-cyan">Upload link</button>
                        </form>
                    </div>
                </div>
                
                <!--/.Card-->
            </div>
            <!-- </div> -->
            <!--Grid column-->
            <!--Grid column-->
            <!--Grid column-->
            <br><br>
            <!-- <center> -->

            <!-- <div class="card" style="width: 80%">
                <div class="header peach-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Questions for you</h3>
                    </div>
                </div>
                <div class="card-body mx-4">
                </div>
             </div> --><!-- </center> --><br><br>
            
    <div class="row">
        <div class="col-md-6 col-lg-5.5 mb-4">
            <div class="card">
                <div class="header peach-gradient">
                    <div class="d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Uploaded link</h3>
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
                            $volunteer=$_SESSION['volunteer'];
                            $sql = "SELECT date,subject,link,materialdesc FROM material where volunteer='$volunteer'";
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
                                <table class=" table table-striped" border="1" style="width: 100%;" align="center">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-6 col-lg-6 mb-4">
            <div class="card">
                <div class="header peach-gradient">
                    <div class="d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Upcoming Sessions</h3>
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
                            $volunteer=$_SESSION['volunteer'];
                            $sql = "SELECT date,from1,till,address,subject,id FROM requests where volunteer='$volunteer'";
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
                            <div class="table-responsive" style="padding-top: 2%;">
                                <table class=" table table-striped" border="1" style="width: 100%;" align="center">
                                    <tr>
                                       
                                        <td class="table-dark">
                                            Date
                                        </td>
                                        <td class="table-dark">
                                            Subject
                                        </td>
                                        <td class="table-dark">
                                           Address
                                        </td>
                                        <td class="table-dark">
                                            From
                                        </td><td class="table-dark">
                                            Till
                                        </td><td class="table-dark">
                                            Action
                                        </td>
                                    </tr>
                                    <?php $i=1;
                                    while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
                                    {
                                    ?>
                                    <tr>
                                        
                                        <td>
                                            <?php echo "" .$row["date"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["subject"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["address"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["from1"]; ?>
                                        </td>
                                        <td>
                                            <?php echo "" .$row["till"]; ?>
                                        </td>
                                        <td >
                                            <form action="includes/process_select.php" method="post">
                                                <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                                                <input type="hidden" value="cancel" name="cancel">

                                                <button style="z-index: 2;" value="" class="btn btn-cyan" type="submit">Cancel</button>
                                             </form></td>
                                           
                                       
                                    </tr>
                                    <?php $i++;} ?>
                                </table></div>
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/Card image-->
                        <!--Card content-->
                        <!--/.Card content-->
                    </div>

                    <!--/.Card-->
                </div>
            </div>
      </div>  


<br>
<br>
    
        <div class="col-md- col-lg-12 mb-4">
    <div class="card" >
        <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Volunteering Vacancy</h3>
            </div>
        </div>
        <div class="card-body mx-4">
            <div class="container-fluid text-center">
                <!--Card-->
                <!--Card image-->
                <div class="" style="visibility: visible; animation-name: fadeIn;">
                    <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                    <?php
                    $volunteer=$_SESSION['volunteer'];
                    $sql = "SELECT date,subject,address,from1,till,id FROM requests where flag='0'";
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
                    <div style="padding-top: 2%; z-index: 3;" class="table-responsive" >
                        <table class=" table table-striped" border="1" style="width: 100%;" align="center">
                            <tr >
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
                                    Address
                                </td>
                                <td class="table-dark">
                                    From
                                </td><td class="table-dark">
                                Till
                            </td><td class="table-dark">
                            Choose
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
                            <?php echo "" .$row["address"]; ?>
                        </td>
                        <td>
                            <?php echo "" .$row["from1"]; ?>
                        </td>
                        <td>
                            <?php echo "" .$row["till"]; ?>
                        </td>
                        <td>
                            <form action="includes/process_select.php" method="post">
                                <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                                <button style="z-index: 2;" value="" class="btn btn-cyan" type="submit">Select</button>
                            </form>
                        </td>
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
</div>
    <!--/.Card-->
</div>
</div>
</div>
<!--/.Card-->
</div>
</div>
<!-- <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
<span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
<br><br>
<span style="font-size:25px"><i>This is to certify that</i></span>
<br><br>
<span style="font-size:30px"><b>$student.getFullName()</b></span><br/><br/>
<span style="font-size:25px"><i>has completed the required task</i></span> <br/><br/>
<span style="font-size:30px">$course.getName()</span> <br/><br/>
-->       <!-- <span style="font-size:20px">with score of <b>$grade.getPoints()%</b></span> <br/><br/><br/><br/> -->
<!-- <span style="font-size:25px"><i>dated</i></span><br>
#set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy"))
<span style="font-size:30px">$dt</span> -->
<!-- </div>
</div> -->
</body>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->