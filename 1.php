   <div class="col-sm-8 col-lg-9">
        <div data-spy="scroll" class="scrollspy-example z-depth-1 mt-4" data-target="#navbar-example3" data-offset="0">
           <form action="forum.php" method="get">
            <input type="hidden" name="id"  value="<?php $id=$row['id'];
             echo $id; ?>">
           <?php 



                                
                                    
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
                                        
                                    <?php $i++;} ?>
                                    <hr>
            
        </div>
    </div>
