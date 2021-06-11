
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
          <th class="text-capitalize">Last Update Time</th>
          <th class="text-capitalize">State</th>
          <th class="text-capitalize">Confirmed</th>
          <th class="text-capitalize">Active</th>
          <th class="text-capitalize">Recovered</th>
          <th class="text-capitalize">Deaths</th>
        </tr>
        <button class="btn btn-success" ><a class="text-white list-unstyled " href="index.php">Back</a></button>
<?php 
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);
$statescount = count($coronalive['statewise']);

$i = 1 ;

while ( $i < $statescount) {

	?>

	<tr>
		<td><?php
         echo $coronalive['statewise'][$i]['lastupdatedtime']
		?></td>
	
		<td><?php
         echo $coronalive['statewise'][$i]['state']."<br>";
		?></td>
	
		<td><?php
	echo $coronalive['statewise'][$i]['active']."<br>";
		?></td>
	
		<td><?php
       
	echo $coronalive['statewise'][$i]['confirmed']."<br>";
		?></td>
	
		<td><?php
         echo $coronalive['statewise'][$i]['recovered']."<br>";
		?></td>

		<td><?php
   echo $coronalive['statewise'][$i]['deaths']."<br>"; 
		?></td>
	</tr>
	


	<?php
	$i++;
}
 ?>
    </table>
    </div>
</section>
    
<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" id="myBtn" onclick="topFunction()"></i>
</div>
<footer class="mt-5">
 <div class="footer_style text-white text-center container-fluid"><p>CopyRight by Satvik</p></div>   
</footer>
<script type="text/javascript">

   mybutton = document.getElementById("myBtn");
   window.onscroll = function (){
       scrollFunction()
   };

   function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }

   }

   function topFunction() {
       document.body.scrollTop = 0;
       document.documentElement.scrollTop = 0;
   }

 
</script>
</body>
</html>
