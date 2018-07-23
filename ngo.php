<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
$status=$_SESSION['type'];
if (login_check($mysqli) == true) {
if ($status != "ngo") {
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
        <form method="post" action="includes/process_request.php">
            <div class="row">
            <!-- Card -->
           <div class="col-md-6 col-lg-5 mb-4">
 <div class="header peach-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Request for Volunteering</h3>
                    </div>
                </div>
            <!--Card-->
            <div class="card">

                <!--Card image-->
                

                <!--Card content-->
                <div class="card-body ">
                    <!--Title-->
                   <div class="row">
                        <div class="col-md-6">
                            <label for="date" class="">Enter date:</label>
                            <input type="text" id="date" class="form-control" name="date" placeholder="DD/MM/YY" style="width: 8em;">
                        </div>
                        <div class="col-md-6">
                            
                            
                            <div class="form">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline4" value="computerscience">
                                    <label class="form-check-label" for="exampleRadiosInline4">
                                        Computer Science
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline5" value="mathematics">
                                    <label class="form-check-label" for="exampleRadiosInline5">
                                        Mathematics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline6" value="physics">
                                    <label class="form-check-label" for="exampleRadiosInline6">
                                        Physics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline7" value="chemistry">
                                    <label class="form-check-label" for="exampleRadiosInline7">
                                        Chemistry
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline8" value="biology">
                                    <label class="form-check-label" for="exampleRadiosInline8">
                                        Biology
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline9" value="accounts">
                                    <label class="form-check-label" for="exampleRadiosInline9">
                                        Accounts
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline10" value="history">
                                    <label class="form-check-label" for="exampleRadiosInline10">
                                        History
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline11" value="english">
                                    <label class="form-check-label" for="exampleRadiosInline11">
                                        English
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline12" value="management">
                                    <label class="form-check-label" for="exampleRadiosInline12">
                                        Management
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline13" value="finance">
                                    <label class="form-check-label" for="exampleRadiosInline13">
                                        Finance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline14" value="electronics">
                                    <label class="form-check-label" for="exampleRadiosInline14">
                                        Electronics
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class=""><label for="name" class="">From</label>
                                <input type="text" id="name" name="from" class="form-control">
                                
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <br>
                        <div class="col-md-6">
                            <div class=""><label for="email" class="">Till</label>
                            <input type="text" id="email" name="till" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                 <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Enter address:</label>
                    <textarea class="form-control rounded-0" id="address" name="address" rows="3" placeholder="Address..."></textarea>
                </div>
                <div class="md-form">
                    <button style="cursor: pointer;" type="Submit" class="btn btn-cyan">Submit</button>
                </div>
            </div>
            </div>
                </div>

            </div>
            <!--/.Card-->
</form>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7">

            <!--Card-->
            <div class="card ">

                <div class="header blue-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Requests</h3>
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
            <div class="container-fluid text-center">
        <!--Card-->
     
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                
                <?php
                $ngoname=$_SESSION['ngoname'];
                
                $sql = "SELECT date,subject,address,flag,volunteer FROM requests where ngoname='$ngoname'";
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
                                status
                            </td>
                            <td class="table-dark">
                                Volunteer
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
                                <?php 
                                if($row["flag"] ==1){
                                    $staus="alloted";
                                }
                                elseif($row["flag"] ==2){
                                    $staus="completed";
                                }
                                elseif($row["flag"] ==0){
                                    $staus="pending";
                                }
                                echo $staus; 
                                ?>
                            </td>
                            <td>
                                <?php echo "" .$row["volunteer"]; ?>
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
    <!--/.Card-->
    
</div>

                </div>

            </div>
            <!--/.Card-->

        </div>
        <div class="col-md-6 col-lg-7">

            <!--Card-->
            <div class="card ">

                <div class="header blue-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Mark completed</h3>
                    </div>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
            <div class="container-fluid text-center">
        <!--Card-->
     
            <!--Card image-->
            <div class="view overlay rgba-white-slight wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h4 style="padding-top: 2%; color: #E3468C;"><strong></strong></h4>
                
                <?php
                $ngoname=$_SESSION['ngoname'];
                
                $sql = "SELECT id,date,subject,address,flag,volunteer FROM requests where ngoname='$ngoname' and flag='1'";
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
                        
                        <tr >
                            
                            <td class="table-dark">
                                Date
                            </td>
                            <td class="table-dark">
                                Subject
                            </td>
                            <td class="table-dark">
                                Volunteer Name
                            </td>
                            <td class="table-dark">
                                Approve
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
                                <?php echo "" .$row["volunteer"]; ?>
                            </td>
                            <td>
                                <form action="includes/process_approve.php" method="post">
                                    <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                                <button style="z-index: 2;" value="" class="btn btn-cyan" type="submit">Approve</button>
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
    <!--/.Card-->
    
</div>

                </div>

            </div>
            <!--/.Card-->

        </div>
    </div>
    </form>
    <br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->