

<html>
<head>
  <title>EZ</title>

  <?php include 'import.css.js.php' ?>
<?php include 'connect.php' ?>


<style type="text/css">
  table {
  box-sizing: border-box;
  overflow: hidden;

  border-collapse: collapse;
  
  width: 100%;

  border-radius: .5em;
  box-shadow: 0 0 .5em #000;
   font-family: 'Agency FB';


}
select {

  /* styling */

  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;

  padding: 0em 1.5em 0em 0.5em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}


/* arrows */

select{
  background:url(images/sort_desc.png) 40px 5px #fcfcfc;
  border-color: blue;
  background-repeat: no-repeat;
  font-family: 'Agency FB';
}


label
{
  font-family: 'Agency FB';
  font-size: 1.5em;
}

select:focus {
  background:url(images/sort_asc.png) 40px 15px #fcfcfc;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}






select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}




input[type=search] {
  background:url(images/search.png) no-repeat 10px 10px #fcfcfc;
    color:black;
    background-color:#00bfa5;

 
    padding-left: 30px;
    width: 150px;
    transition: ease-in-out, width .35s ease-in-out;
    border-radius:10px;
    border-color:2px solid #00bfa5 ;
 text-shadow:0px 2px 2px black;
    
  }

input[type=search]:focus{
    background:url(images/search.png) no-repeat 10px 10px #fcfcfc;
    color:#6a6f75;
    width:200px;
 
    padding-left: 30px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
    text-shadow: 0 2px 3px rgba(0,0,0,0.1);
    content:"search";
    outline:0;
     border-radius:10px;
       border-color:2px solid #00bfa5 ;
}

input::placeholder {
  color: red;
}


th {
  text-align: center;
  color:white;
  padding: 0px;
  font-size: 1em;

}

td 
{
  text-align: center;
    padding: 0px;
      font-size: 0.9em;
}
a
{
  font-family: 'Agency FB';

}
#logtbl_info
{
    font-family: 'Agency FB';
}







</style>
<script type="text/javascript">


$( document ).ready(function() {
$('#logtbl').DataTable({
         "bProcessing": true,
         "serverSide": true,
         "ajax":{
            url :"livesearch.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE

            error: function(){
              $("#logtbl_processing").css("display","none");
            }
          }
        });   






});
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[0] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#logtbl').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );




</script>

</head>
<body>




<div class="container">

  <table border="0" cellspacing="5" cellpadding="5">
    <tbody><tr>
        <td>Minimum age:</td>
        <td><input type="text" id="min" name="min"></td>
    </tr>
    <tr>
        <td>Maximum age:</td>
        <td><input type="text" id="max" name="max"></td>
    </tr>
</tbody></table>    


		<table id="logtbl" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
            	  <th class="teal">ID</th>
                <th class="teal">USER</th>
                <th class="teal">REMARKS</th>
			         	<th class="teal">DATE</th>
                <th class="teal">TIME</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
               <th>blank</th> 
               <th>blank</th>
               <th>blank</th>
               <th>blank</th>
               <th>blank</th>
            
            </tr>
        </tfoot>
    </table>
    </div>


</body>
</html>

