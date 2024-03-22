<?php
include 'header.php';
$user_id=$_SESSION['user']['user_id'];
?>
<div class="container">
  <!--  Row 1 -->
  <div class="row ">
          <div  class="col-lg-4 col-md-4  mt-5">
            <div class="card bg-dark  mt-5">
              <!-- <div class="card-header">
                  <h5 class="text-white">No.of contacts</h5>
              </div> -->
              <div class="card-body">
                  <a href="#"><h4 class="text-white">Contacts</h4></a>
                  
                   <?php
                     if(isset($_REQUEST['search-item'])){
                      $search=$_REQUEST['search-item'];
                      $q_search="select * from user where name='$search'";
                      $res_search=mysqli_query($conn,$q_search);
                      if($res_search){
                        while($contact=mysqli_fetch_array($res_search)){
                          echo $contact['name'];
                        }
                      } 
                     }
                   ?>       
              <hr>
                
                <?php           
                $q="select * from users where user_id!=$user_id";
                $result=mysqli_query($conn,$q);
                        while($contact=mysqli_fetch_array($result)){
                          echo "<a class=' nav-icon-hover' href='javascript:void(0)' id='drop2' data-bs-toggle='dropdown'
                          aria-expanded='false'>
                          <img src='./assets/images/profile/user-1.jpg' alt='' width='35' height='35' class='rounded-circle'>
                        </a><a style='color:white;' href='index.php?rid=".$contact['user_id']."'>";
                          echo ucfirst($contact['name']);
                          echo "</a><hr>";
                        }
                ?>
               </div>
            </div>       
         </div>    
            <div  class="col-lg-6 col-md-8 mt-5">
            <?php
                  if(isset($_REQUEST['rid'])){
                    $to_id=$_REQUEST['rid'];
                    $from_id=$user_id;
                    $q_to="select * from users where user_id=$to_id";
                    $res_to=mysqli_query($conn,$q_to);
                    $to_user=mysqli_fetch_assoc($res_to);
                    $to_name=ucfirst( $to_user['name']); 
                 
              ?>
            <div  class="card w-100 bg-dark  mt-5">             
              <div class="card-header">
                  <h5 class="text-white"><?php  echo $to_name;?></h5>
              </div>
               <div id="myDIV">
                   <div id="content">
                      <div class="card-body" id="chat-display" >  
                   
  
                       </div>
                     </div>                   
                  </div>
                 <div class="card-footer">
                    <form action="msg-save.php" class="form-inline" method="post">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="hidden" name="to_id" value="<?php  echo $to_id; ?>">
                                <input type="hidden" name="from_id" value="<?php  echo $from_id; ?>">
                                <input type="text" name="msg" class="form-control text-white" placeholder="please enter message">
                                <div class="col-md-4" style="display: block;">
                                <button type="submit" class="form-control" name="send"> Send</button>
                                </div>                          
                            </div>
                        </div>
                    </form>             
                  </div>
             </div>
          </div>
        </div>
      </div>                   
                   <?php
                  } else {
                    echo "Please select contact";
                  }
                    ?>
          </div>
    </div> 
    <script>
    
      function dataLoad(){
        var to_id='<?php echo $to_id; ?>';
        var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("chat-display").innerHTML = this.responseText;
      setTimeout("dataLoad()",'2000');
    }
  };
  xhttp.open("POST", "ajax-data.php?to_id="+to_id, true);
  xhttp.send();
  }
  dataLoad();
  $("#myDIV").animate({
    scrollTop:1410},"slow");
  console.log($('#chat-display.card-body')[0].scrollHeight);

  

    </script>
    </body>
</html>

<?php
include 'footer.php';
?>