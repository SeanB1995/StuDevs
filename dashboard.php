<?php
include_once 'lib/config.php';

/*$query = "SELECT title, sum(project_id), sum(rec_price), sum(price) FROM project group by title";
$res = $conn->query($query);*/


$statement = $conn->prepare("SELECT title, sum(project_id), sum(rec_price), sum(price) FROM project where project_id!=? group by title");
$statement->bind_param("s", $projIdPrep);//this must be "s" !
$projIdPrep = '0';
$statement->execute();
$res = $statement->get_result();

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            
             ['Title', 'ID', 'Rec.Price', 'Price'], 
             
           <?php 
          
          while($row=$res->fetch_assoc()){
              
        echo"['".$row['title']."','".$row['sum(project_id)']."','".$row['sum(rec_price)']."','".$row['sum(price)']."'],";
          }
          ?>
    
        ]);

      var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        title: 'Gantt Chart: Completion Time for Major Objectives',
        bars: 'horizontal',
        isStacked: true
       
        
      
      };
     

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>