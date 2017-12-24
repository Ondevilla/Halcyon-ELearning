<?php

include("dbcon.php");
session_start();


?>








    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

<?php

            $moduleid = $_POST["employee_id"];
            $_SESSION["module_id"] = $moduleid;
            $table2 = "select * from modules WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  
                    echo "<br><h2><b>";
                    echo $row["modulename"];
                    $_SESSION["modid"] = $row["modulename"];
                    echo "</b></h2>";
                }
?>

<script type="text/javascript">


function dolog(value)
  {

v=value;

destination="ajaxlog.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
    
      }
     }



      }

    </script>


<br>


<?php

            $moduleid = $_POST["employee_id"];
          
            $table2 = "select * from modules WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  

?>

<button  name="view" value="View"   id="<?php echo $row["id"]; ?>"  class="btn btn-info btn-xs view_edit"> 

<i class="fa fa-edit" aria-hidden="true"> Edit Module</i>

</button>



<button  name="view" value="View" id="<?php echo $row["id"]; ?>"  class="btn btn-danger btn-xs view_remove"> 

<i class="fa fa-remove" aria-hidden="true"> Delete Module</i>

</button>
<?php
}
?>
<br><br>



<!-- Nav tabs -->
<ul class="nav nav-tabs tabs-3 info" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" style="color: black;" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-book"></i> Contents</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: black;" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-edit"></i> Quiz</a>
    </li>

</ul>





<!-- Tab panels -->
<div class="tab-content">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
        <br>
        










<?php

            $moduleid = $_POST["employee_id"];
            $_SESSION["forcontents"] = $moduleid // MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS  MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS MODULE ID USED FOR CONTENTS
   
?>



<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        <div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0">
                <i class="fa fa-info"></i> Text Content <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
            </a>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">


<?php

  
          
            $table2 = "select * from texttable WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  
            ?>
<div class="row ">
<button style="width: 60%;" name="viewcontenttext" value="View" id="<?php echo $row['textid']; ?>"  class="btn btn-info btn-xs view_text">
<i class="fa fa-info" aria-hidden="true"> <?php echo $row["texttitle"]; ?></i>
</button>


<button  style="width: 30%;" name="removecontenttext" value="View" id="<?php echo $row['textid']; ?>"  class="btn btn-danger btn-xs remove_text">
<i class="fa fa-remove" aria-hidden="true"></i>

</button>
</div>

            <?php

}


?>



            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                <i class="fa fa-image"></i> Image Content <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
            </a>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">






<?php

  
          
            $table2 = "select * from imagetable WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  
            ?>
            
<div class="row ">
<button style="width: 60%;" name="viewcontentimage1" value="View" id="<?php echo $row['imageid']; ?>"  class="btn btn-info btn-xs view_image1">
<i class="fa fa-image" aria-hidden="true"> <?php echo $row["imagetitle"]; ?></i>
</button> 


<button  style="width: 30%;" name="viewcontentimage1" value="View" id="<?php echo $row['imageid']; ?>"  class="btn btn-danger btn-xs remove_image1">
<i class="fa fa-remove" aria-hidden="true"></i>

</button>
</div>
            <?php

}


?>







            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" role="tab" id="headingThree">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                <i class="fa fa-video-camera"></i> Video Content <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
            </a>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block">


<?php

  
          
            $table2 = "select * from videotable WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  
            ?>
            
<div class="row ">
<button style="width: 60%;" name="viewcontent2" value="View" id="<?php echo $row['videoid']; ?>"  class="btn btn-info btn-xs view_video">
<i class="fa fa-video-camera" aria-hidden="true"> <?php echo $row["videotitle"]; ?></i>
</button>


<button  style="width: 30%;" name="viewcontent2" value="View" id="<?php echo $row['videoid']; ?>"  class="btn btn-danger btn-xs remove_video">
<i class="fa fa-remove" aria-hidden="true"></i>

</button>
</div>
            <?php

}


?>


            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingFour">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h5 class="mb-0">
                <i class="fa fa-flash"></i> Flash Content <i class="fa fa-angle-down rotate-icon"></i>
            </h5>
            </a>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-block">


<?php

  
          
            $table2 = "select * from flashtable WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  
            ?>
            
<div class="row ">
<button style="width: 60%;" name="viewcontent2" value="View" id="<?php echo $row['flashid']; ?>"  class="btn btn-info btn-xs view_flash1">
<i class="fa fa-flash" aria-hidden="true"> <?php echo $row["flashtitle"]; ?></i>
</button>


<button  style="width: 30%;" name="viewcontent2" value="View" id="<?php echo $row['flashid']; ?>"  class="btn btn-danger btn-xs remove_flash1">
<i class="fa fa-remove" aria-hidden="true"></i>

</button>
</div>
            <?php

}


?>


            </div>
        </div>
    </div>




</div>
<br><br>









<?php

            $table2 = "select * from modules WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  
?>

    <button  name="addcontent" value="View" id="<?php echo $row['id']; ?>"  class="btn btn-info btn-xs view_data2">
<i class="fa fa-info" aria-hidden="true"> Text</i>

    </button>



    <button  name="addcontent" value="View" id="<?php echo $row['id']; ?>"  class="btn btn-info btn-xs view_Image2">
<i class="fa fa-camera" aria-hidden="true"> Video</i>

    </button>


        <button  name="addcontent" value="View" id="<?php echo $row['id']; ?>"  class="btn btn-info btn-xs view_image">
<i class="fa fa-image" aria-hidden="true"> Image</i>

    </button>


        <button  name="flash" value="View" id="<?php echo $row['id']; ?>"  class="btn btn-info btn-xs view_flash">
<i class="fa fa-flash" aria-hidden="true"> Flash</i>

    </button>

<?php
}
?>












<br>
<br>


    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->











     <div class="tab-pane fade in show " id="panel6" role="tabpanel">
        <br>




<?php

            $table2 = "select * from questions WHERE moduleid = '$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  
?>
<div class="row">
                <button style="width: 60%;" name="addcontent" value="View" id="<?php echo $row['questionid']; ?>"  class="btn btn-info btn-xs view_question1 buttstyle">
<i class="fa fa-question" aria-hidden="true"> <?php echo $row["questioncap"]; ?> </i>

    </button>


<button  style="width: 20%;" name="removecontenttext" value="View" id="<?php echo $row['questionid']; ?>"  class="btn btn-danger btn-xs remove_question">
<i class="fa fa-remove" aria-hidden="true"></i>

</button>

    <br>
      
</div>
    <!--/.Panel 2-->

<?php

                }
?>











<br><br>

<?php

            $table2 = "select * from modules WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  
?>

                <button name="addcontent" value="View" id="<?php echo $row['id']; ?>"  class="btn btn-info btn-xs view_question">
<i class="fa fa-question" aria-hidden="true"> Add Question</i>

    </button>
    <br><br>
   
    <!--/.Panel 2-->

<?php

                }
?>
    </div>
 </div>




<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||MODAL NA TINATAWAG THROUGH AJAX||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||SA BBA MODAL NA PANG VIEW NG CONTENT|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||SA BBA MODAL NA PANG VIEW NG CONTENT|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||SA BBA MODAL NA PANG VIEW NG CONTENT|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||SA BBA MODAL NA PANG VIEW NG CONTENT|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- ||||||||||||||||||||||||||||||||SA BBA MODAL NA PANG VIEW NG CONTENT|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


<script>
    

$(document).on('click', '.view_text', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewtext.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_vdetail2TEXT').html(data);  
                          $('#vdataModal2TEXT').modal('show');  
                     }  
                });  
           }            
      });   


$(document).on('click', '.remove_text', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"deletetext.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#removetext').html(data);  
                          $('#rtextModal').modal('show');  
                     }  
                });  
           }            
      });   

</script>





<script>
    

$(document).on('click', '.view_image1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewimage.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#viewimage').html(data);  
                          $('#vimageModal').modal('show');  
                     }  
                });  
           }            
      });   


$(document).on('click', '.remove_image1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"removeimage.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#removeimage').html(data);  
                          $('#rimageModal').modal('show');  
                     }  
                });  
           }            
      });   

</script>


<script>
    

$(document).on('click', '.view_video', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewvideo.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#video_detail').html(data);  
                          $('#viewvideo').modal('show');  
                     }  
                });  
           }            
      });   


$(document).on('click', '.remove_video', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"deletevideo.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#removevideo').html(data);  
                          $('#rvideoModal').modal('show');  
                     }  
                });  
           }            
      });   

</script>









<script>
    

$(document).on('click', '.view_flash1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewflash1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#flash_detail').html(data);  
                          $('#viewflash').modal('show');  
                     }  
                });  
           }            
      });   


$(document).on('click', '.remove_flash1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"removeflash.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#removeflash').html(data);  
                          $('#rflashModal').modal('show');  
                     }  
                });  
           }            
      });   

</script>






<script>
    



$(document).on('click', '.remove_question', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"removeques.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#removeques').html(data);  
                          $('#rquesModal').modal('show');  
                     }  
                });  
           }            
      });   

</script>






























































<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||MODAL NA TINATAWAG THROUGH AJAX|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->

<form action="emodule.php" method="post">
<div id="vimageModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="viewimage">  



                </div>  

            


                <div class="modal-footer">  

               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<form action="emodule.php" method="post" enctype="multipart/form-data">
<div id="rtextModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="removetext">  



                </div>  

 


                <div class="modal-footer">  

                               <button type="submit" class="btn btn-info" name="remove_text">Yes</button>  
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW TEXT AND REMOVE TEXT||||||||||||||||||||||||||||| -->


<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->

<form action="emodule.php" method="post">
<div id="vdataModal2TEXT" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="employee_vdetail2TEXT">  



                </div>  

 


                <div class="modal-footer">  

               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<form action="emodule.php" method="post">
<div id="rimageModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="removeimage">  



                </div>  

 


                <div class="modal-footer">  
                               <button type="submit" class="btn btn-info" name="remove_image">Yes</button> 
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW IMAGE AND REMOVE IMAGE||||||||||||||||||||||||||||| -->
























<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->

<form action="emodule.php" method="post">
<div id="viewvideo" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="video_detail">  



                </div>  

 


                <div class="modal-footer">  

               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<form action="emodule.php" method="post">
<div id="rvideoModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="removevideo">  



                </div>  

 


                <div class="modal-footer">  

                    <button type="submit" class="btn btn-info" name="remove_video">Yes</button>               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW VIDEOS AND REMOVE VIDEOS||||||||||||||||||||||||||||| -->










<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->

<form action="emodule.php" method="post">
<div id="viewflash" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="flash_detail">  



                </div>  

 


                <div class="modal-footer">  

               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<form action="emodule.php" method="post">
<div id="rflashModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="removeflash">  



                </div>  

 


                <div class="modal-footer">  

                    <button type="submit" class="btn btn-info" name="remove_flash">Yes</button>               
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>



<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW FLASH AND REMOVE FLASH||||||||||||||||||||||||||||| -->









<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->






<form action="emodule.php" method="post" enctype="multipart/form-data">
<div id="rquesModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title"></h4>  
                </div>  



                <div class="modal-body" id="removeques">  



                </div>  

 


                <div class="modal-footer">  

                               <button type="submit" class="btn btn-info" name="remove_ques">Yes</button>  
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>







<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||VIEW QUES AND REMOVE QUES||||||||||||||||||||||||||||| -->































<form action="aemodule.php" method="post" enctype="multipart/form-data">
<div id="quesModal" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Question Content</h4>  
                </div>  



                <div class="modal-body" id="view_question1">  



                </div>  

 


                <div class="modal-footer">  


                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>





<form action="aemodule.php" method="post" enctype="multipart/form-data">
<div id="idataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add Image Content</h4>  
                </div>  



                <div class="modal-body" id="employee_idetail2">  



                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="addimage" >Add</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>




<form action="aemodule.php" method="post" enctype="multipart/form-data">
<div id="flashdataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add Flash Content</h4>  
                </div>  



                <div class="modal-body" id="employee_flash">  



                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="addflash" >Add</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>











<form action="aemodule.php" method="post">
<div id="tdataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add Text Content</h4>  
                </div>  



                <div class="modal-body" id="temployee_detail2">  



                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="addtext" >Add</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>




<form action="aemodule.php" method="post" enctype="multipart/form-data">
<div id="vdataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add Video Content</h4>  
                </div>  



                <div class="modal-body" id="employee_vdetail2">  



                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="addvideo" >Add</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>


<form action="aemodule.php" method="post">
<div id="rdataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Remove Module</h4>  
                </div>  



                <div class="modal-body" id="employee_retail2">  








                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="removemod" >Remove</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>




<form action="aemodule.php" method="post"  enctype="multipart/form-data">
<div id="qdataModal2" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Add Question</h4>  
                </div>  



                <div class="modal-body" id="employee_qdetail2">  





                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="addques" >Add</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>




<form action="aemodule.php" method="post">
<div id="edataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit Module</h4>  
                </div>  



                <div class="modal-body" id="employee_eetail2">  

                <?php

                





                ?>







                </div>  

 


                <div class="modal-footer">  

                     <button type="submit" class="btn btn-info" name="savemod" >Save</button>    
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>








<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||SCRIPT NA MAG DDISPLAY NG MODAL PARA MAG ADD OR DELETE NG MODULE||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||PWEDE KA DIN MAG ADD VIDEO IMAGE PATI TEXT SA MISMOND MODULE|||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||SEE ADDCONTENT.PHP ADDCONTENT1.PHP ADDCONTENT2.PHP AT ADDQUESTION.PHP||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!--- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


<script>
$(document).on('click', '.view_data2', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"addcontent.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#temployee_detail2').html(data);  
                          $('#tdataModal2').modal('show');  
                     }  
                });  
           }            
      });   





$(document).on('click', '.view_Image2', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"addcontent1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_vdetail2').html(data);  
                          $('#vdataModal2').modal('show');  
                     }  
                });  
           }            
      }); 


$(document).on('click', '.view_question', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"addquestion.php", 
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_qdetail2').html(data);  
                          $('#qdataModal2').modal('show');  
                     }  
                });  
           }            
      }); 



$(document).on('click', '.view_question1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewquestion.php", 
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#view_question1').html(data);  
                          $('#quesModal').modal('show');  
                     }  
                });  
           }            
      }); 


$(document).on('click', '.view_edit', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"editmodule.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_eetail2').html(data);  
                          $('#edataModal2').modal('show');  
                     }  
                });  
           }            
      }); 





$(document).on('click', '.view_remove', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"removemodule.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_retail2').html(data);  
                          $('#rdataModal2').modal('show');  
                     }  
                });  
           }            
      }); 

$(document).on('click', '.view_image', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"addcontent2.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_idetail2').html(data);  
                          $('#idataModal2').modal('show');  
                     }  
                });  
           }            
      }); 




$(document).on('click', '.view_flash', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"addflash.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_flash').html(data);  
                          $('#flashdataModal2').modal('show');  
                     }  
                });  
           }            
      }); 


 </script>


 




<?php














?>