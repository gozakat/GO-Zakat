
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap-4.0.0.css') !!}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
    width: 100%;
    height: 100%;
    }
    </style>
  </head>
  <body>
    
    <!--  MASIH PERCOBAAN
    <div class="containernav ">
      <div class="triangle demo-arrow-down"></div>
      
    </div>
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="/"><img class="image" border="0" src="{{asset('assets/images/logo.png')}}"  width="122px" height="45px" style="margin-bottom:-10px; margin-top:-15px; padding: : 0px "></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse containernav1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link " href="/" ><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/konversi" target="_blank"><b>Konversi Zakat </b><span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link text-info" href="#kontakus"><b>Contac Us</b> <span class="sr-only">(current)</span></a>
          </li>
          
         
        </li>
        
        </ul>
      </div>
    </nav>
    <!--
    <nav class="navbar navbar-fixed-top" style="background-color: #ee7614;">
      <div class="container-fluid " style="position: absolute;">
        <ul class="nav navbar-nav">
          <li><img class="image" border="0" src="image/dule.png"  width="42px" style="margin: 1px;padding: 0px color:white;">S-dule</li>
        </ul></b>
      </div>
    </nav>
    -->
    @yield('page')
    @yield('conversi')
    @yield('daftarMasjid')
    @yield('form')
    @yield('model')
    
    <footer class="section footer-classic context-dark bg-image" style="background: #ffffff; " id="kontakus">
      <div class="container23">
        <div class="row row-30">
          <div class="col-md-4 col-xl-5">
            <div class="pr-xl-4"><a class="brand" href="home"><img class="brand-logo-light" src="{{asset('assets/images/agency/logo-inverse-140x37.png')}}" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
            <a class="navbar-brand" href="/"><img class="image" border="0" src="{{asset('assets/images/logo.png')}}"  width="250px" height="70px" style="margin-bottom:-10px; margin-top:-15px; padding-top: 15px; "></a>
            <!-- Rights-->
            <br>
            <br>
            <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>. </span><span>GO Zakat Bandung-Indonesia</span></p>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Contacts</h5>
          <dl class="contact-list">
            <dt>Address:</dt>
            <dd>Jl. A.H. Nasution No.105, Cipadung, Cibiru, Bandung, Jawa Barat 40614 </dd>
          </dl>
          <dl class="contact-list">
            <dt>email:</dt>
            <dd><a href="mailto:#" class="text-info">moh.ramdani22@gmail.com</a></dd>
          </dl>
          <dl class="contact-list">
            <dt>phones:</dt>
            <dd><a href="tel:#" class="text-info">089612944086 </a>
            </dd>
          </dl>
        </div>
        <div class="col-md-4 col-xl-3">
          <h5>Links</h5>
          <ul class="nav-list">
            <li><a href="#" class="text-info">About</a></li>
            <li><a href="#" class="text-info">Projects</a></li>
            <li><a href="#" class="text-info">Blog</a></li>
            <li><a href="#" class="text-info">Contacts</a></li>
            <li><a href="#" class="text-info">Pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{!! asset('assets/js/jquery-3.2.1.min.js')!!}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{!! asset('assets/js/popper.min.js')!!}"></script>
  <script src="{!! asset('assets/js/bootstrap-4.0.0.js')!!}"></script>
</body>
</html>