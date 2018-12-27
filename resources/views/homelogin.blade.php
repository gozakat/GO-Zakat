@extends('layouts.appblack')
@section('content')

        <!--                     @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        Kamu Berhasil Masuk
        -->

            @if (auth::user()->adminganteng=='ADMIN')
         
                <h2>Daftar Member GO Zakat</h2>
                

                
                <table class="container table table-bordered ">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Masjid</th>
                    <th>No Statistik</th>
                    <th>Alamat Masjid</th>
                    <th>Email</th>
                    <th>Nama Amil</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                @foreach($user as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        <td>{{ $users->namamasjid }}</td>
                        <td>{{ $users->nostat }}</td>
                        <td>{{ $users->alamatmasjid }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->namaamil }}</td>
                        <td>{{ $users->nohp }}</td>
                        
                    </tr>

                @endforeach
                </tbody>
            </table>
        




            @else (auth::user()->adminganteng=='MEMBER')
            <div class="panel-body">
                <h1>HALAMAN MEMBER !!</h1>
            </div>
            @endif

            

@endsection

