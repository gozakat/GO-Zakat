<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'GO Zakat') }}</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-4.0.0.css')}}" rel="stylesheet">

    <style>
      body{
        background-color: rgba(101,199,236,0.80);
      }
    </style>

  </head>

  <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="/"><img class="image" border="0" src="assets/images/logo.png"  width="122px" height="45px" style="margin-bottom:-10px; margin-top:-15px; padding: : 0px "></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse containernav1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link " href="/" ><b>Home </b><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="konversi" target="_blank"><b>Konversi Zakat </b><span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link text-info" href="#kontakus"><b>Contac Us</b> <span class="sr-only">(current)</span></a>
          </li>
          
        </ul>
      </div>
    </nav>
    <br>

    @yield('content')
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>
