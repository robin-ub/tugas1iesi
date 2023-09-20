@extends('layouts.app') {{-- Jika Anda menggunakan layout --}}

@section('content')
<div class="verifikasi">
     
    <!DOCTYPE html>
    <html>
      <head>
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="style.css" />
      </head>
      <body>
        <div class="verifikasi">
          <div class="div">
            <div class="overlap-group">
              <img class="frame" src="img/frame-3454.svg" />
              <div class="text-wrapper">Pembayaran telah berhasil</div>
            </div>
            <div class="group-wrapper">
              <div class="group">
                <img class="line" src="img/line-6.svg" />
                <img class="img" src="img/line-6.svg" />
                <img class="line-2" src="img/line-6.svg" />
                <div class="text-wrapper-2">Nomor Transaksi</div>
                <div class="text-wrapper-3">Metode Pembayaran</div>
                <div class="text-wrapper-4">Total Pembayaran</div>
                <div class="text-wrapper-5">Waktu Pembayaran</div>
                <div class="text-wrapper-6">#19357274679</div>
                <div class="text-wrapper-7">Gopay</div>
                <div class="text-wrapper-8">Rp 20.000,00</div>
                <div class="text-wrapper-9">18-05-23 15.30</div>
              </div>
            </div>
            <div class="primary-large"><div class="default">Print file-mu!</div></div>
          </div>
        </div>
      </body>
    </html>
    

</div>
@endsection
