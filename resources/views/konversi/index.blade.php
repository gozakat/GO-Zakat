@extends('layouts.template')

@section('conversi')
<head>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/konversi.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/bootstrap-4.0.0.css') !!}">
  <title>Kalkulator Zakat</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script>



eval(function(p,a,c,k,e,d){
	e=function(c){
		return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))
	};
	if(!''.replace(/^/,String)){
		while(c--){d[e(c)]=k[c]||e(c)}
	k=[function(e){return d[e]}];
	e=function(){return'\\w+'};c=1};
	while(c--){
		if(k[c]){
			p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])
		}
	}return p
}('l p(x){S x.V(2).z(/(\\d)(?=(\\d{3})+\\.)/g,"$1,")}l r(){5.6.h.4=O(5.6.H.4)+O(5.6.B.4);5.6.W.4=5.6.h.4}l Y(){7 v=9(5.6.X.4);7 k=v*18;5.6.k.4=k}l 1a(){7 P=9(5.6.16.4.f(\'.\').e(""));7 Q=P*13;5.6.C.4=Q}l 14(){5.6.E.4=9(5.6.15.4.f(\'.\').e(""))+9(5.6.11.4.f(\'.\').e(""));7 8=9(5.6.E.4);7 k=5.6.k.4;o(8<=k){m=0;5.6.G.4="w"}q{m=8;5.6.G.4="s"}5.6.17.4=8;7 h=0.t*m;5.6.H.4=p(h);r()}l 10(){7 u=9(5.6.19.4.f(\'.\').e(""))+9(5.6.1b.4.f(\'.\').e(""));7 y=9(5.6.T.4.f(\'.\').e(""));7 8=u-y;5.6.U.4=u;5.6.Z.4=y;7 R=5.6.C.4.f(\'.\').e("");o(u<=R){m=0;5.6.A.4="w"}q{m=8;5.6.A.4="s"}5.6.1g.4=8;7 h=0.t*m;5.6.B.4=p(h);5.6.1o.4=p(h*12);r()}l 1n(){7 v=9(5.6.1p.4.f(\'.\').e(""));7 J=9(5.6.1q.4.f(\'.\').e(""));7 8=v*J;5.6.1s.4=8;7 k=5.6.k.4;7 h;o(8<=k){h=0;5.6.D.4="w"}q{h=0.t*8;5.6.D.4="s"}5.6.1t.4=p(h);r()}l 1r(){7 F=9(5.6.1l.4.f(\'.\').e(""))+9(5.6.1c.4.f(\'.\').e(""))+9(5.6.1f.4.f(\'.\').e(""));7 I=9(5.6.1e.4.f(\'.\').e(""))+9(5.6.1d.4.f(\'.\').e(""));7 8=F-I;5.6.K.4=8;7 k=5.6.k.4;o(8<=k){m=0;5.6.M.4="w"}q{m=8;5.6.M.4="s"}5.6.K.4=8;7 h=0.t*m;5.6.1m.4=p(h);r()}l 1h(n){a=n.4;b=a.z(/[^\\d]/g,\'\');c=\'\';L=b.1k;j=0;1j(i=L;i>0;i--){j=j+1;o(((j%3)==1)&&(j!=1)){c=b.N(i-1,1)+\'.\'+c}q{c=b.N(i-1,1)+c}}n.4=c}l 1i(n){a=n.4;o(a!=0){n.4=a.z(/^0+/,\'\')}q{n.4=0}}',62,92,'||||value|document|Kalkulator|var|zakatable|parseInt|||||join|split||zakat|||nisab|function|zakatnya|obj|if|numberWithDots|else|calc_total|Ya|025|pendapatan|emas|Tidak||hutang|replace|wajibzp|z2|nisabgj|wajibze|ff|modal|wajibzs|z1|utang|harga|fu|lengthchar|wajibzu|substr|parseFloat|beras|nisabgaji|nisabgajinya|return|fm|fl|toFixed|disp_zakat|fz|calc_nisab|fo|calc_profesi|fg||520|calc_simpanan|fa|br|fh|85|fj|calc_nisab_gaji|fk|fke|fkrg|fhj|fpd|fp|Angka|Nol|for|length|fmod|fzu|calc_emas|z3|ems|hms|calc_usaha|tms|zems'.split('|'),0,{}))
</script>
<style>
  /* Make the image fully responsive */
.carousel-inner img {
    width: 100%;
    height: 100%;
}
</style>
</head>
<body>

<div class="tab">
	<div class="containerkonversi text-center text-light ">
	<h3>MENU KONVERSI ZAKAT</h3>
	</div>
</div>
<div class="tab">
	<div class="containerkonversi text-center ">
	<button class="tablinks" onclick="openCity(event, 'penghasilan')">Zakat Penghasilan</button>
	<button class="tablinks" onclick="openCity(event, 'perdagangan')">Zakat Perdagangan</button>
	<button class="tablinks" onclick="openCity(event, 'emas')">Zakat Emas	</button>
	<button class="tablinks" onclick="openCity(event, 'tabungan')">Zakat Tabungan   </button></a>
	</div>
</div>
	<form action="" method="post" name="Kalkulator" id="Kalkulator">
		<div class="main">	
			<div class="container">
			<div id="penghasilan" class="tabcontent">
				<div class="table-responsive-sm">          
					<table class="table">
						<thead>
							<tr>
								<center><b>ZAKAT PENGHASILAN</b></center>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="od">Penghasilan per Bulan</td>
								<td><input type="text" name="fj" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Bonus Pendapatan dan Lain-lain (per Bulan)</td>
								<td><input type="text" name="fk" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td>
								<input type="hidden" name="fl" class="fieldzakat" readonly="readonly" value="52000000">
							</tr>
							<tr>
								<td class="od">Pengeluaran Kebutuhan Pokok (termasuk hutang jatuh tempo) per Bulan</td>
								<td><input type="text" name="fm" onkeyup="Angka(this);Nol(this);calc_profesi()" class="isian" value="0" placeholder="0"></td>
							
							</tr>
							<tr>
							<td class="od">Harga Beras Saat Ini (per kg) <font color="#ed710f">*</font></td>
								<td><input type="text" name="br" onkeyup="calc_nisab_gaji();Angka(this);calc_profesi()" class="isian" value="12.500" readonly="readonly"></td>
							</tr>
							<tr>
							<td class="totallabel">NISHAB (520 kg beras)</td>
								<td><input type="text" name="nisabgj" value="6.500.000" class="isian" readonly="readonly"></td>
							</tr><tr>
							<td class="totallabel">WAJIB MEMBAYAR ZAKAT PENGHASILAN</td>
								<td><input type="text" name="wajibzp" class="isian" readonly="readonly"></td>
							</tr>
							<tr>
							<td class="totallabel">JUMLAH ZAKAT PENGHASILAN PERBULAN</td>
								<input type="hidden" name="fo" class="fieldzakat" value="15000000" readonly="readonly">
								<input type="hidden" name="fp" class="fieldzakat" value="37000000" readonly="readonly">
								<td><input type="text" name="z2" class="fieldzakat isian" value="0" readonly="readonly"></td>
							</tr>
							<tr>
							<td class="totallabel">JUMLAH ZAKAT PENGHASILAN PERTAHUN</td>
								<td><input type="text" name="z3" class="fieldzakat isian" value="0" readonly="readonly"></td>

							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
			
			<div id="perdagangan" class="tabcontent">
			<div class="container">
				<div class="table-responsive-sm">          
					<table class="table">
						<thead>
							<tr>
								<center><b>ZAKAT PERDAGANGAN</b></center>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="od">Modal yang Diputar Selama 1 Tahun</td>

								<td><input type="text" name="fmod" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Keuntungan Selama 1 Tahun</td>
								<td><input type="text" name="fke" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Piutang Dagang</td>
								<td><input type="text" name="fpd" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Hutang Jatuh Tempo</td>
								<td><input type="text" name="fhj" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Kerugian Selama 1 Tahun</td>							
								<input type="hidden" name="fu" class="fieldzakat" value="0" readonly="readonly">
								<td><input type="text" name="fkrg" onkeyup="Angka(this);Nol(this);calc_usaha()" class="isian" value="0" placeholder="0"></td>
							</tr>
							<tr>
								<td class="od">Harga Emas Saat Ini</td>
								<td><input type="text" class="isian" value="598.166" onchange="calc_emas()" readonly="readonly"></td>
							</tr>
							<tr>
								<td class="totallabel">NISHAB (85 gram)</td>
								<td><input type="text" onchange="calc_emas()" value="50.844.143" class="isian" readonly="readonly"></td>
							</tr>
							<tr>
								<td class="totallabel">WAJIB MEMBAYAR ZAKAT PERDAGANGAN</td>
								<td><input type="text" name="wajibzu" class="isian" readonly="readonly"></td>
							</tr>
							<tr>
								<td class="totallabel">JUMLAH ZAKAT PERDAGANGAN</td>
								<td><input type="text" name="fzu" class="isian" value="0" size="12" readonly="readonly">
								<input name="zakat" value="925" type="hidden"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
			
			
			<div id="emas" class="tabcontent">
			<div class="container">
				<div class="table-responsive-sm">          
					<table class="table">
						<thead>
						  <tr>
							<center><b>ZAKAT EMAS</b></center>
						  </tr>
						</thead>		
						<tbody>
						<tr><td class="od">Jumlah Emas yang Dimiliki dalam Gram</td>
							<td><input type="text" name="ems" class="isian" onkeyup="Angka(this);Nol(this);calc_emas()" value="0" placeholder="0"></td>
							</tr>
						<tr><td class="od">Harga Emas Saat Ini</td>
							<td><input type="text" name="hms" class="isian" value="598.166" onchange="calc_emas()" readonly="readonly"></td>
							<input type="hidden" name="tms" class="fieldzakat" value="0" readonly="readonly">
						</tr>
						<tr><td class="totallabel">NISHAB (85 gram)</td>
							<td><input type="text" name="nise" onchange="calc_emas()" value="50.844.143" class="isian" readonly="readonly"></td>
						</tr>
						<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT EMAS</td>
							<td><input type="text" name="wajibze" class="isian" readonly="readonly"></td>
						</tr>
						<tr><td class="totallabel">JUMLAH ZAKAT EMAS</td>
							<td><input type="text" name="zems" class="isian" value="0" readonly="readonly"></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>		
			</div>
		
			
			<div id="tabungan" class="tabcontent">
			<div class="container">
				<div class="table-responsive-sm">          
					<table class="table">
						<thead>
						  <tr>
							<center><b>ZAKAT TABUNGAN</b></center>
						  </tr>
						</thead>
						<tbody>
						<tr><td class="od">Saldo Tabungan</td>
							<td><input type="text" name="fa" onkeyup="Angka(this);Nol(this);calc_simpanan()" class="isian" value="0" placeholder="0"></td>
						</tr>
							<input type="hidden" name="ff" class="fieldzakat" value="0" readonly="readonly">
						<tr><td class="od">Bagi Hasil <font color="#ed710f">*)</font></td>
							<td><input type="text" name="fg" onkeyup="Angka(this);Nol(this);calc_simpanan()" class="isian" value="0" placeholder="0"></td>
						</tr>
							<input type="hidden" name="fh" class="fieldzakat" value="0" readonly="readonly">
						</tr>
						<tr><td class="od">Harga Emas Saat Ini</td>
							<td><input type="text" class="isian" value="598.166" onchange="calc_emas()" readonly="readonly"></td>
						</tr>
						<tr><td class="totallabel">NISHAB (85 gram)</td>
							<td><input type="text" onchange="calc_emas()" value="50.844.143" class="isian" readonly="readonly"></td>
						</tr>
						<tr><td class="totallabel">WAJIB MEMBAYAR ZAKAT TABUNGAN</td>
							<td><input type="text" name="wajibzs" class="isian" readonly="readonly"></td>
						</tr>
						<tr><td class="totallabel">JUMLAH ZAKAT TABUNGAN</td>
							<td><span class="total"><input type="text" name="z1" class="fieldzakat isian" value="0" readonly="readonly"></span></td>
						</tr>
						<tr><td><font color="#ed710f">*) Zakat hanya bisa dikeluarkan dari hasil investasi yang halal</font></td></tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
			<input type="hidden" name="fz" value="598.166">
			<input type="hidden" name="nisab" value="50844143.197811">
		</div>
	</form>
	<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script type="text/javascript">
eval(function(p,a,c,k,e,d){
	e=function(c){
		return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))
	};
	if(!''.replace(/^/,String)){
		while(c--){
			d[e(c)]=k[c]||e(c)
		}
		k=[function(e){return d[e]}];
		e=function(){return'\\w+'};
		c=1
	};
	while(c--){
		if(k[c]){
			p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])
		}
	}return p
}('6 w(){0 k=7(b.9.r.5.4(\',\').1(""));0 l=2.3("a://d.g/h/i/t-e-x?c="+k,\'f\');l.8()}6 u(){0 o=7(b.9.s.5.4(\',\').1(""));0 m=2.3("a://d.g/h/i/v-e-G?c="+o,\'f\');m.8()}6 E(){0 j=7(b.9.F.5.4(\',\').1(""));0 n=2.3("a://d.g/h/i/D-e-y?c="+j,\'f\');n.8()}6 C(){0 q=7(b.9.z.5.4(\',\').1(""));0 p=2.3("a://d.g/h/i/B-e-A?c="+q,\'f\');p.8()}',43,43,'var|join|window|open|split|value|function|parseInt|focus|Kalkulator|http|document|refnominal|sharinghappiness|zakat|_blank|org|kampanye|show|kk2|kirimna|win|win1|win2|kk1|win3|kk3|z2|fzu|32|doDagang|20|doSend|profesi|emas|z1|tabungan|79|doNabung|22|doEmas|zems|perdagangan'.split('|'),0,{}))
</script>
@endsection