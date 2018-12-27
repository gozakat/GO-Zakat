@extends('layouts.template')

@section('page')
<title>GO Zakat</title>
<div class="container24">
      <div id="demo" class="carousel slide " data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="daftarmasjid">
              <img src="assets/images/3.png" alt="Los Angeles" >
              <div class="carousel-caption">
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <img src="assets/images/4.png" >
            
          </div>
          <div class="carousel-item">
            <a href="/login">
            <img src="assets/images/1.png">
            </a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>


    <div class="containermid">
      <!-- Page Content -->
      <div class="container">
        <!-- Portfolio Item Heading -->
        <h1 class="my-4">GO Zakat
        <small>( GO زكاة   )</small>
        </h1>
        <!-- Portfolio Item Row -->
        <div class="row">
          <div class="col-md-8">
            <img class="img-fluid" src="assets/images/zakatlogo.png" alt="">
          </div>
          <div class="col-md-4">
            <h2 class="my-3">Introduction</h2>
            <p>GO Zakat adalah sebuah Website yang menjembatani antara Muzaki (Pemberi Zakat) dan Amil (Penerima Zakat), sehingga Muzaki dapat melangsungkan kewajibannya dengan lebih mudah dan begitupun sebaliknya Amil dapat dipermudah dengan adanya Website ini.  </p>
            <h3 class="my-3">Tutorial Zakat</h3>
            <ul>
              <li>Pilih Masjid </li>
              <li>Isi Form Data diri</li>
              <li>Pilih Jenis Zakat</li>
              <li>Metode Pembayaran</li>
              <br><br>
              <div class="containerbutton">
                  <a href="daftarmasjid" class="cta btn-outline-info border-info">Zakat Sekarang</a>
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                  <script  src="{!! asset('assets/js/index.js')!!}"></script>
                </div> 
            </ul>
          </div>
        </div>
        <!-- /.row -->
        <!-- Related Projects Row -->
        <h3 class="my-4">Tahapan Zakat</h3>
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <video autoplay muted loop id="myVideo" >
      <source src="{{asset('assets/1.mp4')}}" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    
    <div class="containervideo">
      <div class="container" >
        <br><br>
        <div class="container text-center ">
          <h1> <div div id="kontakus" class="container text-center text-light">OUR TEAM</div></h1>
          <br>
          
          <div class="row container">
            <div class="col-lg-4 col-sm-6 text-center mb-4">
              <img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/Dani.png" alt="">
              <br>
              <h3>Moh Ramdani Yusman
              <h5><small>"Man Proposes, God Disposes"</small></h5>
              </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
              <img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/idrus1.png" alt="">
              <br>
              <h3>Rifki Mohammad Idrus
              <h5><small>"No Udud No Life"</small></h5>
              </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
              <img class="rounded-circle img-fluid d-block mx-auto" src="assets/images/habibi.png" alt="">
              <br>
              <h3>Habibi Alnino
              <br>
              <h5><small>"My Beautiful world is Beautiful word"</small></h5>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection