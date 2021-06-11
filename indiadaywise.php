
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links/links.php';  ?>
    <?php include 'css/style.php';  ?>

</head>
<body onload="fetch()">
    <nav class="navbar navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler done" type="button" data-toggle="collapse" data-target = "#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label = "Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars count-down"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5">
            <li class="nav-item active">
                <a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
            </li>
              <li class="nav-item ">
                <a href="#aboutid" class="nav-link">About</a>
            </li>
              <li class="nav-item ">
                <a href="#coronaid" class="nav-link">Symptoms</a>
            </li>
              <li class="nav-item ">
                <a href="#previd" class="nav-link">Prevention</a>
            </li>
            <li class="nav-item ">
                <a href="IndiaCoronaLive.php" class="nav-link">IndiaCoronaLive</a>
            </li>
            <li class="nav-item ">
                <a href="indiadaywise.php" class=nav-link>IndiaDayWiseCoronaLive</a>
            </li>
              <li class="nav-item ">
                <a href="#conid" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
    </nav>

<section class="covid_update container-fluid">
    <div class="my-5">
        <h3 class="text-center text-capitalize">covid-19 live updates of india</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th class="text-capitalize">Date And Month</th>
          <th class="text-capitalize">daily confirmed</th>
          <th class="text-capitalize">daily recovered</th>
          <th class="text-capitalize">daily deceased</th>
          <th class="text-capitalize">total confirmed</th>
          <th class="text-capitalize">total recovered</th>
           <th class="text-capitalize">total deceased</th>
        </tr>
        <button class="btn btn-success" ><a class="text-white list-unstyled " href="index.php">Back</a></button>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data,true);
$count = count($daywise['cases_time_series']);

echo "<pre>";
echo "</pre>";

$i = 1 ;

while ( $i < $count) {

	?>

	<tr>
		<td><?php
         echo $daywise['cases_time_series'][$i]['dateymd']."<br>";
		?></td>

		<td><?php
 echo $daywise['cases_time_series'][$i]['dailyconfirmed']."<br>" 
		?></td>
		
	<td><?php
      echo   $daywise['cases_time_series'][$i]['dailyrecovered']."<br>"
		?></td>


		<td><?php
 echo $daywise['cases_time_series'][$i]['dailydeceased']."<br>" 
		?></td>

		<td><?php
         echo $daywise['cases_time_series'][$i]['totalconfirmed']."<br>"
		?></td>

		<td><?php
       
	echo $daywise['cases_time_series'][$i]['totalrecovered']."<br>"
		?></td>
	
		<td><?php
	echo $daywise['cases_time_series'][$i]['totaldeceased']."<br>"
		?></td>
	
		
	
	</tr>
	


	<?php
	$i++;
}
 ?>
    </table>
    </div>
</section>

</body>
</html>
