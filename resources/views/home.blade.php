@extends('layouts.appblack')
@section('content')

            @if (auth::user()->adminganteng=='ADMIN')
         
                <div class=" panel-body" style="padding-left: 500px; padding-top: 200px;">
                <h1>Selamat datang </h1>
                <a class="text-primary">{{ Auth::user()->email }} </a>
                </div>




            @else (auth::user()->adminganteng=='MEMBER')
            <div class="panel-body">
                <h1>HALAMAN MEMBER !!</h1>
            </div>
            @endif

            

@endsection

