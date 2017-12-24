<?php


 include 'import.css.js.php' ?>

<script type="text/javascript">





                  
 $(document).ready(function(){  

                



       $("#export").click(function(){
               window.location.href="exportXLS.php";
      });

  

 
      
     
 });  




</script>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||||||||||||                                      logg.php                                             ||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<script type="text/javascript" language="javascript" >
      $(document).ready(function() {
      
        var dataTable =  $('#grid-data').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "loggg.php", // json datasource

        } );
        
        $("#grid-data_filter").css("display","none");  // hiding global search box
        
        $('.employee-search-input').on( 'change', function () {   
          var i =$(this).attr('id');  // getting column index
          var v =$(this).val();  // getting search input value
          dataTable.columns(i).search(v).draw();
        } );

        var x ='';
        $('.date1').on( ' change', function () {   
          

              var date1 = document.getElementById('date1');
               var date2 = document.getElementById('date2');
              if(date1.value =='')
              {
                date2.disabled=true;
              }
              if(date1.value != '')
              {   
                date2.disabled=false;
              }
              
                date2.value='';
               x = date1.value;
               document.getElementById('x').value=x;
                dataTable.columns(3).search(x).draw();

        } );

        $('.date2').on( 'change', function () {   
                       var date1 = document.getElementById('date1');
                var date2 = document.getElementById('date2');

              x = date1.value + " to " + date2.value;
                 document.getElementById('x').value=x;
              dataTable.columns(3).search(x).draw();

        } );

        $('#clear').on( 'click', function () {   
                      var date1 = document.getElementById('date1');
               var date2 = document.getElementById('date2');
              x = "";
                date1.value='';
              date2.value='';

                if(date1.value =='')
              {
                date2.disabled=true;
              }
              if(date1.value != '')
              {   
                date2.disabled=false;
              }
              
                 document.getElementById('x').value=x;
              dataTable.columns(3).search(x).draw();

        } );




        
      } );




    </script>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||||||||||||                                      log.php                                              ||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
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


<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||||||||||||                                      startquiz.php                                        ||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<script type="text/javascript">


function strrr()
  {


destination="phpfunction.php";
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
                            window.location.href="rand2.php";
      }
     }



      }

    </script>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||||||||||||                                      rand.php finish                                      ||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<script type="text/javascript">


function finisho()
  {


destination="finisho.php";
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      window.location.href="main.php";
      }
     }



      }

    </script>


<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- ||||||||||||                                      startquiz.php retake                                 ||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


<script type="text/javascript">



    </script>