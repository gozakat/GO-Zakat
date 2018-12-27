@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="namamasjid" class="col-md-4 col-form-label text-md-right">{{ __('Nama Masjid') }}</label>

                            <div class="col-md-6">
                                <input id="namamasjid" type="text" class="form-control{{ $errors->has('namamasjid') ? ' is-invalid' : '' }}" name="namamasjid" value="{{ old('namamasjid') }}" required autofocus>

                                @if ($errors->has('namamasjid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('namamasjid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nostat" class="col-md-4 col-form-label text-md-right">{{ __('No Statistik') }}</label>

                            <div class="col-md-6">
                                <input id="nostat" type="text" class="form-control{{ $errors->has('nostat') ? ' is-invalid' : '' }}" name="nostat" value="{{ old('nostat') }}" required autofocus>

                                @if ($errors->has('nostat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nostat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamatmasjid" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Masjid') }}</label>

                            <div class="col-md-6">
                                <input id="alamatmasjid" type="text" class="form-control{{ $errors->has('alamatmasjid') ? ' is-invalid' : '' }}" name="alamatmasjid" value="{{ old('alamatmasjid') }}" required autofocus>

                                @if ($errors->has('alamatmasjid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamatmasjid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="namaamil" class="col-md-4 col-form-label text-md-right">{{ __('Nama Amil') }}</label>

                            <div class="col-md-6">
                                <input id="namaamil" type="text" class="form-control{{ $errors->has('namaamil') ? ' is-invalid' : '' }}" name="namaamil" value="{{ old('namaamil') }}" required autofocus>

                                @if ($errors->has('namaamil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('namaamil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nikamil" class="col-md-4 col-form-label text-md-right">{{ __('Nik Amik') }}</label>

                            <div class="col-md-6">
                                <input id="nikamil" type="text" class="form-control{{ $errors->has('nikamil') ? ' is-invalid' : '' }}" name="nikamil" value="{{ old('nikamil') }}" required autofocus>

                                @if ($errors->has('nikamil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nikamil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label text-md-right">{{ __('No Hp') }}</label>

                            <div class="col-md-6">
                                <input id="nohp" type="text" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="nohp" value="{{ old('nohp') }}" required autofocus>

                                @if ($errors->has('nohp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nohp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adminganteng" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                               <select name="adminganteng" class="form-control">
                                   <option value="MEMBER">Member</option>
                                   <option value="ADMIN">Admin</option>
                               </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
