@extends('layouts.template')

@section('model')
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="card text-center">
    <div class="card-header">
    Jazakumullah Khair
    </div>
    <div class="card-body">
        @foreach ($no_rek as $no_rek)
        Nama Bank       :{{$no_rek->nama_bank}}<br>
        Nomor Rekening  :{{$no_rek->norek}}<br>
        Atas Nama       :{{$no_rek->atas_nama}}<br>
        @endforeach
    </div>
    <div class="card-footer text-muted"> Terimakasih telah berzakat melalui website kami </div>
</div>
</div>
</div>
@endsection