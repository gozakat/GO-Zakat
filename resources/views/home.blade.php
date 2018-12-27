@extends('layouts.appblack')
@section('content')

            @if (auth::user()->adminganteng=='ADMIN')
         
                <div class=" panel-body" style="padding-left: 500px; padding-top: 200px;">
                <h1>Selamat datang </h1>
                <a class="text-primary">{{ Auth::user()->email }} </a>
                </div> 




                    @else (auth::user()->adminganteng=='MEMBER')
                        <div class="panel-body">
                            <div class="row">
                                <div class="card-body">
                                    <table class="container table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jenis Zakat</th>
                                        <th>Jumlah</th>
                                        <th>Transfer via</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        @foreach ($zakatt as $zakatt)
                                        <tr>
                                            <td>{{$zakatt->namaa}}</td>
                                            <td>{{$zakatt->alamatuserr}}</td>
                                            <td>{{$zakatt->jenis_zakatt}}</td>
                                            <td>{{$zakatt->jumlah_Rpp}}</td>
                                            <td>{{$zakatt->transferr}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
@endsection

