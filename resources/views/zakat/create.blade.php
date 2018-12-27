@extends('layouts.template')

@section('form')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-7">
            <div class="container24">
                <div id="demo" class="carousel slide " data-ride="carousel">
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    </ul>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--WARNING UKURAN GAMBAR 1450x600-->
                        <img src="{{asset('assets/images/alhasan.png')}}">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/images/alhasan2.png')}}" >
                        
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
            <h3>Masjid Al-Hasan Raya</h3>
            <p>JL. Bumi Panyileukan, Blok 7 E/16, Ujungberung, Cipadung Kidul, Panyileukan, Kota Bandung, Jawa Barat 40614</p>
        </div>

        <div class="col-lg-5 ">
            <div class="card">
                <div class="card-header" align="center">
                ISI DATA UNTUK BERZAKAT</div>
                <div class="card-body">
                    <form  method="post"action="/zakat">
                        
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label for="alamatuser">Alamat:</label>
                            <input type="text" name="alamatuser" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Zakat</label> 
                                <select name="jenis_zakat" class="form-control">
                                    <option value="Fitrah">Fitrah</option>
                                    <option value="Penghasilan">Penghasilan</option>
                                    <option value="Emas">Emas</option>
                                </select>
                            
                        </div>
                        <div class="form-group">
                            <label for="jumlah Rp">Jumlah Rp:</label>
                            <input type="text" name="jumlah_Rp" class="form-control"  >
                        </div>
                        <h5 align="center">Metode Pembayaran</h5>
                        <div class="form-group">
                            <input type="radio" class="cust-radio" name="transfer" value="bca" >
                            <label for="19"><font style="vertical-align: inherit;">
                                Transfer BCA                                                
                            </font></label><br>
                            <input type="radio" class="cust-radio" name="transfer" value="bni" >
                            <label for="4"><font style="vertical-align: inherit;">
                                Transfer BNI                                                
                            </font></label><br>
                            <input type="radio" class="cust-radio" name="transfer"value="bni_syariah">
                            <label for="17"><font style="vertical-align: inherit;">
                                Transfer BNI Syariah                                                
                            </font></label><br>
                        
                            <input type="radio" class="cust-radio" name="transfer"value="bri">
                            <label for="6"><font style="vertical-align: inherit;">
                                Transfer BRI                                                
                            </font></label><br>
                        </div>
                        <button type="submit" name="submit"class="btn btn-primary float-right" >Submit</button>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection