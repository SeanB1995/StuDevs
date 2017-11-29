<?php


include_once 'lib/config.php';


$statement = $conn->prepare("SELECT title, sum(rec_price), sum(price) FROM project where project_id!=? group by title");
$statement->bind_param("s", $projIdPrep);//this must be "s" !
$projIdPrep = '0';
$statement->execute();
$res = $statement->get_result();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>StuDevs | Stats</title>
	<?php include_once 'lib/metalinks.php'; ?>
	


	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            
             ['Title', 'Rec.Price', 'Price'], 
             
           <?php 
          
          while($row=$res->fetch_assoc()){
              
        echo"['".$row['title']."','".$row['sum(rec_price)']."','".$row['sum(price)']."'],";
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
<div class="loader-bg"></div>
<div id="wrapper">

<!-- Page header -->	
	<header>
		<?php include_once 'lib/navbar.php'; ?>
    </header>
  		
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="black-text-pro subtitle-margin second-color"></h5>
					<h1 class="black-text-pro second-color">Statistics &amp; Analytics</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<h5 class="subtitle-margin">Our</h5>

							<h1>Stats<span class="special-color">.</span></h1>
							<div class="title-separator-primary"></div>
						</div>
					</div>	

					
						<div class="row margin-top-60"></div>
						

					<div class="row margin-top-30">
						<div class="col-xs-12">
							 <div id="barchart_material" style="width: 900px; height: 500px;"></div>
						</div>
						<div class="col-xs-12">
							
						</div>
					</div>
					

					<div class="row margin-top-30">
						
					</div>


					<div class="row margin-top-60"></div>
				</div>			
				
			</div>
		</div>
	</section>
</div>

    <?php 
    include_once 'lib/footer.php'; 
    ?>

	</body>
</html>