@extends('layouts.homelayout')

@section('content')
    <div class="slid ">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="../img/first.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
               <div class="slid-text">
                <h1>تطبيق أنا مريض</h1>
                <p>قم بتسجيل حالات المرض المزمنه لك والاشخاص القريبين منك </p>
                </div>
                <p><a class="btn btn-lg btn-success" href="../public/AddNewPatient.php" role="button">أضافه مريض</a></p>
              </div>
            </div>
          </div>
            
          <div class="carousel-item">
            <img class="second-slide" src="../img/second.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               <div class="slid-text">
                <h1>تطبيق أنا مريض</h1>
                <p>لتجنب اعطاء المرضى الأدوية الخاطئة عند توجههم الى العيادات الطبيه</p>
               </div>                
                <p><a class="btn btn-lg btn-success" href="../public/AddNewPatient.php" role="button">أضافه مريض</a></p>
              </div>
            </div>
          </div>
            
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div></div>
        
    <section class="about-us text-center">
        <div class="container">
            <h1><b>About Us</b></h1>
            <p class="lead">Code For Iraq is about more than Application & Network. it's about citizens,
            culture, community, sharing and cooperation .</p>
            <hr>
            <div class="row text-center">
                <div class="col-sm-4">
                    <i class="fa fa-code fa-5x"></i>
                    <h3>We Love Coding</h3>
                    <p><span>Code for Iraq</span> is a free service from the people and to the people we
                    are doing projects that serve the Iraqi society in particular free of charge</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-users fa-5x"></i>
                    <h3>We Are Social</h3>
                    <p>We help each other and communicate with others to learn the latest
                    programming techniques and publish them to others</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-child fa-5x"></i>
                    <h3>Join Us</h3>
                    <p>Join us by sending your CV to E-mail <span>{{'info@codeforirag.org'}}</span> for free learning and publishing knowledge</p>
                </div>
            </div>
        </div>
    </section>

@endsection
