@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Email Anda sedang di Verifikasi, Tunggu Beberapa Saat Kami akan menghubung Email ') }} <a class="text-primary">{{ Auth::user()->email }}</a> Atau No Hp Anda <a class="text-primary" >({{ Auth::user()->nohp }})</a>
                    <br>
                    <br>
                    {{ __('Jika Anda belum mendapatkan Verifikasi ') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik disini untuk mengirim ulang Verifikasi Anda ') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
