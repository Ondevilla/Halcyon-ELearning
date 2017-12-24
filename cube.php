<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>mousemove demo</title>
  <style>
  div {
    width: 220px;
    height: 170px;
   
    background: yellow;
    border: 2px groove;
    float: right;
  }
  p {
    margin: 0;
    margin-left: 10px;
    color: red;
    width: 220px;
    height: 120px;
    padding-top: 70px;
    float: left;
    font-size: 14px;
  }
  span {
    display: block;
  }
  .i{
  	background-color: black;
  	height: 1em;
  	width: 1em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p>
  <span>Move the mouse over the div.</span>
  <span>&nbsp;</span>
</p>
<div></div>

  <div style="position:absolute; " id="two"><p>world</p></div>


<script>
$( "div" ).mousemove(function( event ) {
  var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
  var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

  var two = document.querySelector( "#two" );



  two.style.top = event.pageX + "px";
  two.style.left = event.pageY + "px";


  $( "span:first" ).text( "( event.pageX, event.pageY ) : " + pageCoords );
  $( "span:last" ).text( "( event.clientX, event.clientY ) : " + clientCoords );
	

$( ".i" ).text( "( event.pageX, event.pageY ) : " + pageCoords );


});

</script>

 
</body>
</html>