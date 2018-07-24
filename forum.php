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
if (isset($_GET["qsearch"])) {
$_SESSION['qsearch']=$_GET["qsearch"];
# code...
echo "<style>
#result1
{
display: block;
}
#reee
{
display: none;
}
#answer
{
display: none;
}
</style>";
}
else {
echo "<style>
#result1
{
display: none;
}
#reee
{
display: block;
}
#answer
{
display: none;
}
</style>";
# code...
}
if (isset($_GET["id"])) {
$_SESSION['id']=$_GET["id"];
# code...
echo "<style>
#result1
{
display: none;
}
#reee
{
display: none;
}
#answer
{
display: block;
}
</style>";
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
        <form method="get" action="forum.php" class="form-inline mr-auto">
          <input class="form-control mr-sm-4" type="text" name ="qsearch" placeholder="Search Question" aria-label="Search">
          <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Search  </button>
        </form>
      </div>
    </div>
  </div>
  <div id="answer" class="col-md-7 col-lg-12 mb-4">
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
          <div class="float-left" style="visibility: visible; animation-name: fadeIn;">
            
            <?php
            if (isset($_GET["id"])) {
            $search=$_GET["id"];
            # code...
            }
            else  {
            $search="";
            # code...
            }
            $sql = "SELECT question,student,subject,flag FROM question where id='$search'";
            mysqli_select_db($mysqli,'secure_login');
            $retval = mysqli_query($mysqli,$sql);
            if(! $retval)
            {
            die('Could not get data :'.mysqli_error());
            }
            $row =mysqli_fetch_array($retval , MYSQLI_BOTH);
            
            ?>
            <h3><?php echo $row['question'];
            $flag=$row['flag'];?></h3>
            <?php if ($flag == '1'){
              echo "<style>
            #32
            {
            display: none;
            }
           
            </style>";
            $sql = "SELECT answer,volunteer FROM answer where qid='$search'";
            mysqli_select_db($mysqli,'secure_login');
            $retval = mysqli_query($mysqli,$sql);
            if(! $retval)
            {
            die('Could not get data :'.mysqli_error());
            }
            while($row =mysqli_fetch_array($retval , MYSQLI_BOTH)){
            echo "<p style=\"text-align:left\" >".$row['answer']."</p>";
            echo "<br>";
            echo "<p style=\"text-align:right\"><i>by&nbsp;".$row['volunteer']."<i></p>";
            echo "<hr>";
           } }
            elseif ($flag == '0') {
            echo "<style>
            #32
            {
            display: block;
            }
           
            </style>";
            # code...
            }
            ?>
            <div id="32" class="md-form ">
              <i class="fa fa-pencil prefix grey-text"></i>
              <form action="includes/process_answer.php" method="post">
                <input type="hidden" name="id" value="<?php echo $search;  ?>">
              <textarea type="text" name="answer" id="form107" class="md-textarea  form-control" rows="2"></textarea>
              <label for="form107">Your answer</label>

              <button class="btn btn-cyan" type="submit"> Submit</button>
            </form>
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="result1" class="col-md-7 col-lg-12 mb-4">
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
          $sql = "SELECT id,question,student,subject,flag FROM question where question LIKE '%".$search."%'";
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
                  open
                </td>
                
              </tr>
              <?php $i=1;
              while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
              {
              ?>
              <tr>
                <td>
                  <?php $id=$row['id'];
                  echo' <form action="forum.php" method="get">
                    <input type="hidden" name="id"  value="'.$id.'">';
                    
                    echo '<button type="submit" class="btn btn-flat btn-lg" id="item-';
                    
                    echo '">';
                    
                    echo $row['question'];?>
                  </form>
                  </button>
                  <p>By
                    <?php
                    echo $row['student'];
                    ?>
                    
                    <?php
                    $flag=$row['flag'];
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
                    echo $row['subject'];
                    ?>
                  </p>
                </td>
                
                
              </tr>
              <?php $i++;} ?>
            </table>
            
            
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

<div id="reee" class="col-md-7 col-lg-12 mb-4">
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
          $sql = "SELECT id,question,student,subject,flag FROM question where question LIKE '%".$search."%'";
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
                  open
                </td>
                
              </tr>
              <?php $i=1;
              while($row =mysqli_fetch_array($retval , MYSQLI_BOTH))
              {
              ?>
              <tr>
                <td>
                  <?php $id=$row['id'];$flag=$row['flag'];
                  if ($status=='student') {
                  # code...
                  
                  if ($flag == '1') {
                  # code...
                  
                  echo' <form action="forum.php" method="get">
                    <input type="hidden" name="id"  value="'.$id.'">';
                    
                    echo '<button type="submit" class="btn btn-flat btn-lg" id="item-';
                    
                    echo '">';
                    
                    echo $row['question'];
                    }
                    else
                    {
                    echo' <form action="forum.php" method="get">
                      <input type="hidden" name="id"  value="'.$id.'">';
                      
                      echo '<button disabled type="submit" class="btn btn-flat btn-lg" id="item-';
                      
                      echo '">';
                      
                      echo $row['question'];
                      }
                      }
                      elseif ($status == 'volunteer') {
                      echo' <form action="forum.php" method="get">
                        <input type="hidden" name="id"  value="'.$id.'">';
                        
                        echo '<button type="submit" class="btn btn-flat btn-lg" id="item-';
                        
                        echo '">';
                        
                        echo $row['question'];
                        }
                        ?>
                      </form>
                      </button>
                      <p>By
                        <?php
                        echo $row['student'];
                        ?>
                        
                        <?php
                        $flag=$row['flag'];
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
                        echo $row['subject'];
                        ?>
                      </p>
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
      </div>
    </div>
  </main>
  <?php
  include("foot.php")
  ?>
  <!--/Main layout-->
  <!--Footer-->