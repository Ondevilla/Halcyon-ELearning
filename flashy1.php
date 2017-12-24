<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Modal Full Screen</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css'>


  
</head>

<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400);
.font-roboto {
  font-family: 'roboto condensed';
}
* {
  box-sizing: border-box;
}
body {
  font-family: 'roboto condensed';
}
.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #6598d9;
  border: 0;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
}
.modal-dialog {
  position: fixed;
      margin: 0;
  width: 100%;
  height: 100%;

}
.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border: 2px solid #3c7dcf;
  border-radius: 0;
  box-shadow: none;
}

.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}
.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
}
.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 50px;
 background: #6598d9;
   padding: 0;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}

.btn {
  height: 40px;
  border-radius: 0;
}
.btn:focus,
.btn:active,
.btn:active:focus {
  box-shadow: none;
  outline: none;
}
.btn-modal {
  position: absolute;
  top: 50%;
  left: 50%;

  width: 200px;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
  font-weight: 300;
  font-size: 1.6rem;
  color: #767b93;
  color: #fff;
  text-align: center;
  background: #60cc69;
  border: 1px solid #36a940;
  border-bottom: 3px solid #36a940;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
}
.btn-primary:active,
.btn-primary:hover:active,
.btn-primary:focus:active,
.btn-primary:active:active {
  border-bottom: 1px solid #36a940;
}
.btn-default,
.btn-default:hover,
.btn-default:focus,
.btn-default:active {
  font-weight: 300;
  font-size: 1.6rem;
  color: #fff;
  text-align: center;
  background: #bfc5ce;
  border: 1px solid #a2aab8;
  border-bottom: 3px solid #a2aab8;
}
.btn-default:active,
.btn-default:hover:active,
.btn-default:focus:active,
.btn-default:active:active {
  border-bottom: 1px solid #a2aab8;
}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus,
.btn-secondary:active {
  color: #FFFFFF;
  background: transparent;
  border: 0;
}
h1,
h2,
h3 {
  color: #60cc69;
  line-height: 1.5;
}
h1:first-child,
h2:first-child,
h3:first-child {

p {
  font-size: 1.4em;
  line-height: 1.5;
  color: #9397a9;
}
p:last-child {

}
::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid #d3d9e0;
}
::-webkit-scrollbar-thumb {
  background: #b5c0cb;
}
</style>

<body>
  <!-- view modal -->


 
 <?php
  include("dbcon.php");
  $Flashid = '2';
?>
<h4><p align="left">Flash Title :</p></h4>
          <?php             
            $table2 = "select * from flashtable WHERE flashid ='$Flashid'";
            $run_query2b = mysqli_query($dbcon,$table2);
         $row = mysqli_fetch_array($run_query2b)

             //   {  
              //  ?> 
              <h5><?php echo $row["flashtitle"];?></h5>
             

 <button class="btn btn-primary btn-modal"
        data-toggle="modal"
        data-target="#fsModal">
          <?php echo $row['flashtitle'];?>
</button>         
<!-- view modal -->

<!-- modal -->
<div id="fsModal"
     class="modal animated bounceIn"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

  <!-- dialog -->
  <div class="modal-dialog">

    <!-- content -->
    <div class="modal-content">
  <div class="modal-header">
        <h1 id="myModalLabel"
            class="modal-title">
         <Center> MY PAYROLL </Center>
        </h1>
      </div>
    
      <!-- body -->
      <div class="modal-body">
     
            <embed style="height: 100%; width: 100%;" src="<?php echo $row['flashname'];?>">
    
      </div>
      <!-- body -->

      <!-- footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary"
                data-dismiss="modal">
          CLOSE
        </button>
      </div>
      <!-- footer -->

    </div>
    <!-- content -->

  </div>
  <!-- dialog -->

</div>
<!-- modal -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>

  
</body>
</html>