<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goonj</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  {{-- <link href="css/home.css" rel="stylesheet"> --}}
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">
  {{-- <script src="{{ asset('js/maindashboard.js') }}" defer></script> --}}

</head>
<body>
<nav class="navbar navbar-default navbar-expand-xl navbar-light">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#"><i ></i><b>Goonj</b></a>     
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="input-group-addon">
       <img src="goonj-icon.png">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <ul class="nav navbar-nav">
      {{-- <li class="nav-item "><a href="/maindashboard" class="nav-link">Dashboard</a></li> --}}
      <li class="nav-item "><a href="/login" class="nav-link">Login</a></li>
      <li class="nav-item "><a href="/register" class="nav-link">Register</a></li>
      <li class="nav-item"><a href="https://goonj.org/knowing-goonj/" class="nav-link">About Us</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
    
</div>  
</nav>
<main role="main">
<div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      <img class="img-responsive" src="{{asset('img/relief1.jpg')}}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="{{asset('img/relief2.jpg')}}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
      <img class="img-responsive" src="{{asset('img/relief4.jpg')}}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br><br><br>
<h3 align="center">OUR IMPACT</h3>
<br><br>
<div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img  class="rounded-circle" src="{{asset('img/heading1.jpeg')}}" alt="Generic placeholder image" width="230" height="230">
            <h2>Goonj connects with Kerala Weavers</h2>
            <p>Stacks of white Mundus and Thorthu were ready for the Onam festivals when floods swept over the lives of the weavers.Looms and raw material lie destroyed in their weaving units today. Loads of finished goods was also spoilt beyond use.Supporting sustenance, Goonj reached comprehensive Goonj Relief Material Kits with Tool Kits to 140 women weavers.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img  class="rounded-circle" src="{{asset('img/heading2.jpg')}}" alt="Generic placeholder image" width="275" height="230">
            <h2>Happy feet and the daily puddles of life !</h2>
            <p>The word dignity means different things to different people.A child probably won’t understand or be able to express it but wearing shiny black shoes to school is a universal metaphor of happiness that we are all familiar with. Shoes are an integral part of Goonj’s kits -be it Family Kit, Winter Kit, Labour Kit or School / Aanganwadi Kit.In  the  Financial  years  2014-2017 alone,  Goonj  has  sent  out  over 1 million pairs of new and old shoes in the schools, aanganwadis and directly to the communities, as a part of our Family Kits.</p>
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/heading3.jpg')}}" alt="Generic placeholder image" width="230" height="230">
            <h2>Drain Cleaning</h2>
            <p>Goonj’s work on neglected issues is often about sanitation as rural communities self-identify that as a priority issue.. People from Agunkumari, Jharbardoba, Jiabandhi, Pachadahara villages in Bankura (West Bengal) weren’t perturbed by the unpleasant job of cleaning their sewage drain. It took hard labour to remove plastic wraps and other filthy contaminations from their village drains. The clean drain has a direct link to stopping mosquito breeding and dirty water going to nearby ponds. The proud participants received carefully made Goonj ‘Family kits’ under our #ClothForWork initiative.</p>
            
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Allepy residents revive their scenic backwaters..<span class="text-muted">Goonj rewarded their efforts with comprehensive Goonj Family Kits.</span></h2>
            <p class="lead">The People of Kalyalpuram, Kuttanad in the backwaters of Allepy (Kerala) need no introduction.. Allepy is after all the true representation of Kerala, God’s Own Country.. BUT it was also one of the worst affected by the recent floods.The boatmen families who use these waterways like we use roads were finding it tough to move as weeds (pola) were choking their canals. Goonj motivated the locals to solve this problem and brought together more than 100 villagers to clean a 1000 ft × 25 ft canal connected to the backwaters.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/heading4.jpg')}}" alt="Generic placeholder image" height="630">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Building resilience against winters..<span class="text-muted">Odha Do Zindgai.</span></h2>
            <p class="lead">When the United Nations (UN) launched the 17 Sustainable Development Goals, Goonj was starting to rev up its preparations for the upcoming winters especially in north India.One of the targets of the first goal charted out by the UN says- “By 2030, build the resilience of the poor and those in vulnerable situations and reduce their exposure and vulnerability to climate-related extreme events and other economic, social and environmental shocks and disasters.” The fact remains that here we are talking about extreme situations but for millions of homeless people the falling temperature to even 8-10 degrees without adequate clothing is also a struggle for survival..</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/heading5.jpg')}}" alt="Generic placeholder image" height="600" width="580">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Coir makers of Kerala’s Vaikom Village take on to <span class="text-muted">cleaning.</span></h2>
            <p class="lead">The hands that know hard work, will never be happy with charity.Goonj team recently spoke to people of Vaikom village (Kottayam, Kerala) about dignity vs charity to receive relief material as reward for solving their own problem. Most families here are into coir making, fishing and farming. Goonj motivated everyone to clean their flood damaged road, temple and school compound.All the 315 participants were rewarded with Goonj’s carefully made Rahat relief material Kit for their family’s basic needs.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/heading6.jpeg')}}" alt="Generic placeholder image" height="600" width="580">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

</body>
</html>