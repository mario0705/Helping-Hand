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
<form>
<!-- Card -->
</center>
<div class="row">
	<div class="col-md-6 col-lg-5 mb-4">
        <div class="card">
            <div class="card-body">
               	<form class="form-inline mr-auto">
	    			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"><br>
    				<button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search</button>
				</form> 
            </div>
        </div>
        <!--/.Card-->
    </div><br>
    <!--Grid column-->
    <div class="col-md-7">
        <!--Card-->
        <div class="card">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Upload link</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               
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
    				
				<br><br>
               <input type="text" placeholder="Add link...">&nbsp;<button style="cursor: pointer;" class="btn btn-cyan">Upload link</button>
            </div>
        </div>
        <!--/.Card-->
    </div>
</div>
    <!--Grid column-->
    <!--Grid column-->
    
    <!--Grid column-->
<br><br>
<center>
<div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Questions for you</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               
            </div>
        </div></center><br><br>
<center>
<div class="card" style="width: 80%">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Uploaded link</h3>
            </div>
        </div>
            <div class="card-body mx-4">
               
            </div>
        </div></center><br><br>
<center>
<div class="card" style="width: 80%">
    <div class="header peach-gradient">
        <div class="row d-flex justify-content-center">
            <h3 class="white-text mb-0 py-5 font-weight-bold">NGO Request's</h3>
        </div>
    </div>
    <div class="card-body mx-4">
               
    </div>
</div></center>
</form>
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
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->