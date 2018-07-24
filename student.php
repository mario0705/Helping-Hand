<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include("head1.php");


if (login_check($mysqli) == true) 
{
  if ($type != "student") {
                     # code...
    header('Location: redirect.php');
               
               
}

}
else {
  # code...
  header('Location: redirect.php');
}
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
    <br>
    <div class="col-md-7 col-lg-12 mb-4">
        <div class="card">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Ask a Question</h3>
            </div>
          </div>
          <form action="includes/process_ask.php" method="post">
          <div class="card-body mx-4">
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
              <textarea type="text" name="question" id="form107" class="md-textarea form-control" rows="2"></textarea>
              <label for="form107">Your message</label>
            </div>
            <div class="row d-flex align-items-center mb-3 mt-4">
              <div class="col-md-12">
                <div class="text-center">
                  <button  type="submit" class="btn btn-grey btn-rounded z-depth-1a">Send</button>
                </div>
              </form>
              </div>
            </div>  
          </div>
        </div>
    </div>
    <!--Grid column-->
    <!--Grid column-->
<div class="col-md-7 col-lg-12 mb-4">
        <div class="card">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Your Questions that have been answerd</h3>
            </div>
          </div>
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
           <?php
              $name=$_SESSION['teamname'];
              $sql1 = "SELECT id,question,student,subject,flag from question where flag='1' and student='$name'";
                mysqli_select_db($mysqli,'secure_login');
                $retval1 = mysqli_query($mysqli,$sql1);

                
             
        

        ?>
           
           <?php 




              $i=1;

                                    while($row1 =mysqli_fetch_array($retval1 , MYSQLI_BOTH))
                                    {
                                      $id=$row1['id'];
                               echo' <form action="forum.php" method="get">
            <input type="hidden" name="id"  value="'.$id.'">';
                                    
                                 echo '<button type="submit" class="btn btn-flat btn-lg" id="item-';
                                 
                                 echo '">';
                                 
                                 echo $row1['question'];?>
                               </form>
                                  </button>
                                 <p>is answered by 
                                   <?php 
                                   $id=$row1['id'];

                                   $sql2 = "SELECT volunteer from answer where qid='$id'";
                                       mysqli_select_db($mysqli,'secure_login');
                                      $retval2 = mysqli_query($mysqli,$sql2);
                                      $row2=mysqli_fetch_array($retval2 , MYSQLI_BOTH);

                                      echo "<b>";
                                   echo $row2['volunteer'];
                                   echo "</b>";
                                   ?>
                                   
                                    
                                     of subject
                                     <?php
                                     echo $row1['subject'];
                                     ?>
                                 </p>
                                        
                               
                                    <hr>
                                       <?php $i++;} ?>  
            
        </div>
    </div>
  </div>
</div>
<!--Grid row-->
 
   <div class="col-md-7 col-lg-12 mb-4">
        <div class="card">
          <div class="header peach-gradient">
            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-0 py-5 font-weight-bold">Recently Asked</h3>
            </div>
          </div>
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
           <?php

              $sql1 = "SELECT id,question,subject,flag,student from question";
                mysqli_select_db($mysqli,'secure_login');
                $retval1 = mysqli_query($mysqli,$sql1);
             
        

        ?>
           
           <?php 




              $i=1;

                                    while($row1 =mysqli_fetch_array($retval1 , MYSQLI_BOTH))
                                    {
                                      $id=$row1['id'];
                               echo' <form action="forum.php" method="get">
            <input type="hidden" name="id"  value="'.$id.'">';
                                    
                                 echo '<button type="submit" class="btn btn-flat btn-lg" id="item-';
                                 
                                 echo '">';
                                 
                                 echo $row1['question'];?>
                               </form>
                                  </button>
                                 <p>By 
                                   <?php 
                                   echo $row1['student'];
                                   ?>
                                   
                                    <?php
                                    $flag=$row1['flag'];
                                     if ($flag == '1') {
                                      echo " is <b>Answered<b>";
                                      # code...
                                    }
                                    else {
                                      echo " is <b>Unanswered</b>"; 
                                       # code...
                                     } ?>
                                     of subject
                                     <?php
                                     echo $row1['subject'];
                                     ?>
                                 </p>
                                        
                               
                                    <hr>
                                       <?php $i++;} ?>  
            
        </div>
    </div>
  </div>
</div><br><br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->