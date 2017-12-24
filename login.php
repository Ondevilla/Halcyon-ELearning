<html  lang="en">
<head>
<title>EZ</title>
</head>
<body >

<?php include 'import.css.js.php' ?>
<?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
<style type="text/css">
	.container4 {
	top:25%;
    height: 50%;
    position: relative;

	border-radius:20px;


	}
	.container111
	{
		 height: 100%;
	}
.container4 button {
    margin: 0;
 
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}
</style>

<center>





<div class="container111">
<div class="col-md-5 container4" ;>



<button type="button" data-toggle="modal" data-target="#modal-login" class="btn btn-outline-default waves-effect"><h1 style="color:#2BBBAD;">LOGIN   NOW</h1></button>

</div>
</div>
</center>


<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="top:20%;">
    <div class="modal-dialog " role="document">
        <!--Content-->
        <div class="modal-content " style="border-radius:20px;">
            <!--Header-->
            <div class="modal-header  btn-default" style="border-radius: 20px 20px 0px 0px;" >
                
                <h4 class="modal-title" style="color:white;font-family:'impact'" id="myModalLabel"><strong>Login Now!</strong></h4><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->



            <div class="modal-body">

<div class="form-group">

<form action="login.php"  method="post">
<div class="col-md-12">




<input type="text" class="form-control" name="user" placeholder="Enter Your Username . . ." required>

</div>
<div class="col-md-12">



<input type="text" class="form-control" name="pass" placeholder="Enter Your Password . . ." required>

</div>





</div>



         
            <!--Footer-->
            <div class="modal-footer">
             <button type="submit" class="btn btn-default " name="submit">Login</button>
                <button type="button" class="btn btn-default  " data-dismiss="modal">Close</button>
            </div>
        </div>   </form>
        <!--/.Content-->
    </div>
</div>

      











<?php




if (isset($_POST['submit']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];

$user=stripslashes($user);
$pass=stripslashes($pass);





if($user=='' && $pass=='')
{
			echo'<script>swal({
			  title: "Logged in Failed !",
			  text: "You enter your Username and Password !",
			  type: "error",
			  confirmButtonText: "Okay"
			});</script>';
}

elseif($user=='')
{
			echo'<script>swal({
			  title: "Logged in Failed !",
			  text: "You enter your Username !",
			  type: "error",
			  confirmButtonText: "Okay"
			});</script>';
}
elseif($pass=='')
{
			echo'<script>swal({
			  title: "Logged in Failed !",
			  text: "You enter your Password !",
			  type: "error",
			  confirmButtonText: "Okay"
			});</script>';
}
else
{


$sqllog = "SELECT * FROM $table2 WHERE user='$user' and pass='$pass'";
$login = mysqli_query($connaccount, $sqllog) or die (mysqli_error());
$find = mysqli_fetch_assoc($login);

		if (isset($find['access']))
		{
			echo "found";
		
			$access=$find['access'];
			$_SESSION['user']=$user;
			$fd=$find['flog_date'];
			if ($access==1)
			{
						?>
						

						
				
						<script >
									var userlog = "<?php echo $user; ?>";
									swal({
								  title: "Logged in Successful !",
								  text: "Welcome " + userlog + " !",
								  type: "success",
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								     window.location.href="admin.php";
								  }, 2000);
								});
		 
							</script>;

							<?php

				if($fd=='')
				{
					  date_default_timezone_set('Asia/manila');
						$flogD=date("Y-m-d");
			$flogT=date("H:i:s");
					$sqldatetime = "UPDATE $table2 SET flog_date='$flogD', flog_time='$flogT'  WHERE user='$user' ";
					$sqlfdate = mysqli_query($connaccount, $sqldatetime) or die (mysqli_error());
				}
				else
				{
				}
			}
			if ($access==2)
			{
						?>
					
						<script>
								var userlog = "<?php echo $user; ?>";
									swal({
								  title: "Logged in Successful !",
								    text: "Welcome " + userlog + " !",
								  type: "success",
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								     window.location.href="hr.php";
								  }, 2000);
								});

							</script>;

							<?php	
				if($fd=='')
				{

					  date_default_timezone_set('Asia/manila');
 
				$flogD=date("Y-m-d");
			$flogT=date("H:i:s");
					$sqldatetime = "UPDATE $table2 SET flog_date='$flogD', flog_time='$flogT'  WHERE user='$user' ";
					$sqlfdate = mysqli_query($connaccount, $sqldatetime) or die (mysqli_error());
				}
				else
				{
				}
			}
			if ($access==3)
			{
						?>

					
						<script>
									var userlog = "<?php echo $user; ?>";
									swal({
								  title: "Logged in Successful !",
								   text: "Welcome " + userlog + " !",
								  type: "success",
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								     window.location.href="employee.php";
								  }, 2000);
								});

							</script>;

							<?php
				if($fd=='')
				{
					 date_default_timezone_set('Asia/manila');
						$flogD=date("Y-m-d");
		$flogT=date("H:i:s");
					$sqldatetime = "UPDATE $table2 SET flog_date='$flogD', flog_time='$flogT'  WHERE user='$user' ";
					$sqlfdate = mysqli_query($connaccount, $sqldatetime) or die (mysqli_error());
				}
				else
				{
				}
			}
			if ($access==4)
			{
						?>
						<script>
								var userlog = "<?php echo $user; ?>";
									swal({
								  title: "Logged in Successful !",
								  text: "Welcome " + userlog + " !",
								  type: "success",
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								     window.location.href="guest.php";
								  }, 2000);
								});

							</script>;

							<?php
				if($fd=='')
				{
					 date_default_timezone_set('Asia/manila');
						$flogD=date("Y-m-d");
			$flogT=date("H:i:s");
					$sqldatetime = "UPDATE $table2 SET flog_date='$flogD', flog_time='$flogT'  WHERE user='$user' ";
					$sqlfdate = mysqli_query($connaccount, $sqldatetime) or die (mysqli_error());
				}
				else
				{
				}
			}				
		}	
			else
			{
			echo'<script>swal({
			  title: "Logged in Failed !",
			  text: "Wrong Username or Password !",
			  type: "error",
			  confirmButtonText: "Okay"
			});</script>';
			}

}	
}
else
{

}


?>
</body>
</html>