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

    <div class="main-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/eksath.png" width="300" height="300">
                </div>
            </div>
             <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                 <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                     <h1><span>Let's stay safe and fight together against Cor</span>
                        <img class="nautanki" src="images/corona.png">
                        <span>na virus</span></h1>
                 </div>
             </div>
        </div>
    </div>

<section class="covid_update container-fluid">
    <div class="mb-3">
        <h3 class="text-center text-capitalize">covid-19 live updates of the world</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>Total Confirmed</th>
          <th>Total Recovered</th>
          <th>TotalDeaths</th>
          <th>New Confirmed</th>
          <th>New Recovered</th>
          <th>New Deaths</th>
        </tr>
      </table>
    </div>
</section>

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>About Covid-19</h1>
    </div>
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
            <img src="images/aboutcorona.jpg" class="img-fluid">
        </div> 

        <div class="col-lg-6 col-md-6 col-12">
            <h2>What is Covid-19(Corona-Virus)</h2>
            <p>Covid-19 is a infectious disease caused by the most recently discovered corona virus. This new virus and disease was unknown before the outbreak began in Wuhan,China, in December 2019.</p>
            <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
        </div>
    </div>
</div>

<div class="container-fluid  pt-5 pb-5" id="coronaid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>CoronaVirus Symptoms</h1>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/cough.png" class="img-fluid" width="120" height="120">
                <figcaption>Cough</figcaption></figure>
            
        </div>
         <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/runnynose.png" class="img-fluid" width="120" height="120">
                <figcaption>runny nose</figcaption></figure>
            
        </div>
         <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/fever.png" class="img-fluid" width="120" height="120">
                <figcaption>Fever</figcaption></figure>
            
        </div>
     <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/sick.png" class="img-fluid" width="120" height="120">
                <figcaption>Cold</figcaption></figure>
            
        </div>
         <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/week.png" class="img-fluid" width="120" height="120">
                <figcaption>Tiredness</figcaption></figure>
            
        </div>
         <div class="col-lg-4 col-md-4 lg-12 mt-5">
            <figure class="text-center"><img src="images/breath.png" class="img-fluid" width="120" height="120">
                <figcaption>difficulty in breath(severe cases)</figcaption></figure>
            
        </div>

    </div>
    </div>


</div>  
<div class="container-fluid  pt-5 pb-5" id="previd">
    <div class="section_header text-center mb-5 mt-4">
        <h1>6 Steps Prevention against Corona virus</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <img src="images/handwash.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
           <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hands</p>
            </div>
               <div class="col-lg-2 col-md-2 col-12">
                <img src="images/mask.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
               <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
            </div>
               <div class="col-lg-2 col-md-2 col-12">
                <img src="images/quarantine.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
 <p>Avoid close contact(1 meter or 3 feet) with people who are unwell</p>
            </div>

           
        </div>
    </div>  <div class="container"> <div class=" row mt-5">
        <div class="col-lg-2 col-md-2 col-12">
                <img src="images/home.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
           <p>Stay home and self-isolate from others in the household if you feel unwell</p>
            </div>
               <div class="col-lg-2 col-md-2 col-12">
                <img src="images/news.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
               <p>Stay informed by watching news & follow the recommended practices</p>
            </div>
               <div class="col-lg-2 col-md-2 col-12">
                <img src="images/medical.png" class="img-fluid" width="120" height="120">
            </div>
               <div class="col-lg-2 col-md-2 col-12">
 <p>If you have fever, cough or difficulty in breathing, seek medical care at the earliest</p>
            </div></div></div>
</div>

<div class="container-fluid  pt-5 pb-5" id="conid">
    <div class="section_header text-center mb-5 mt-4">
        <h1>Contact Us ASAP</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <form method="POST" action="">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="name" autocomplete="off" name="username" required></div>

                    <div class="form-group">
                    <label>Email</label>
                    <input type="Email" class="form-control" placeholder="name@example.com" autocomplete="off" name="email" required></div>
                     <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="number" class="form-control" placeholder="Mobile No." autocomplete="off" name="Mobile" required></div>

                     <div class="form-group">
                    <label>Select Symptoms</label><br>
                  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                      <label class="custom-control-label" for="customcheckbox1">Cold</label>
                  </div>
                     <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                      <label class="custom-control-label" for="customcheckbox2">Fever</label>
                  </div>
                     <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="difficultyinbreath">
                      <label class="custom-control-label" for="customcheckbox3">Difficulty in Breathing</label>
                  </div>
                     <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="feelingweak">
                      <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
                  </div>
                  </div>

                     <div class="form-group">
                    <label for="exampleformcontroltextarea1">More Detailed</label>
                    <textarea placeholder="Describe what you are feeling" class="form-control" id="exampleformcontroltextarea1" rows="3" name="msg"></textarea></div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>
    </div>


<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" id="myBtn" onclick="topFunction()"></i>
</div>
<footer class="mt-5">
 <div class="footer_style text-white text-center container-fluid"><p>CopyRight by Satvik</p></div>   
</footer>
<script type="text/javascript">
   $('.count').counterUp({
       delay:  10,
        time:3000
    })  ;
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

  function fetch(){
    $.get('https://api.covid19api.com/summary',
        function(data){
          console.log(data['Countries'].length);

          var tbval = document.getElementById('tbval');

          for (var i = 1; i<(data['Countries'].length); i++) {
            var x = tbval.insertRow();
            x.insertCell(0);

            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

            tbval.rows[i].cells[0].style.background = "#7a4a91";

            tbval.rows[i].cells[0].style.color = "#fff";

                x.insertCell(1);

            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];

            tbval.rows[i].cells[1].style.background = "#4bb7d8";

             x.insertCell(2);

            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

            tbval.rows[i].cells[2].style.background = "#4bb7d8";

                 x.insertCell(3);

            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];

            tbval.rows[i].cells[3].style.background = "#f36e23";

              x.insertCell(4);

            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

            tbval.rows[i].cells[4].style.background = "#4bb7d8";

              x.insertCell(5);

            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

            tbval.rows[i].cells[5].style.background = "#9cc850";

              x.insertCell(6);

            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];

            tbval.rows[i].cells[6].style.background = "#f36e23";

            var date = document.getElementById("date");

          
          }
        }
      )
   }
</script>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
 ?>
 <script type="text/javascript">swal({
  title: "Please Take care",
  text: "  please contact a doctor or call on the emergency number 102",
  
});
</script>
  <?php
}
?>