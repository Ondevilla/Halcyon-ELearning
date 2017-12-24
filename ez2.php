<html>
<head>
<?php include 'import.css.js.php' ?>
<?php include 'connect.php' ?>
<script type="text/javascript">

function fetch_select(val)
{


				$.ajax({  
                url:"part.php",  
                method:"POST",  
                data:{get_option:val},  
                success:function(data){  
                     $('#roar').html(data);  
                }  
       


 });
}



function fetch_input(val)
{


				$.ajax({  
                url:"part.php",  
                method:"POST",  
                data:{get_input:val},  
                success:function(data){  
                     $('#input_box').html(data);  
                }  
       


 });



}

</script>

</head>

<body>
<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>Select state</option>
  <?php

  $realtimeoption="SELECT * from $table1";
  $selectoption = mysqli_query($conn, $realtimeoption) or die (mysqli_error());
  while($so=mysqli_fetch_array($selectoption))
  {
   echo "<option>".$so['recordId']."</option>";
  }
 ?>
 </select>




 <div id="roar"></div>

	  <div id="input_box">
	   <input type='text' onchange="fetch_select(this.value);">

	  </div>
</div>     


</center>
</body>
</html>