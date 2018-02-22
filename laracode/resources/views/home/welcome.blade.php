@extends('layouts.app')


@section('css')

@endsection

@section('content')
	<div class="home-image no-gap">
   <img class="homepage"  src="{{url('public/uploads/homepage6.jpg')}}" />
   
   <div class="intro-pict">
   	Temukan supplier terpercaya untuk segala kebutuhan konstruksi Anda
   </div>
   
   <button class="button-masuk button-besar">Pasang Iklan Gratis</button>
   
   </div>



<div class="container">
<div class="row ">
	<div class="ads-home-title">
	BARANG dan JASA TERPOPULER

</div>

<div class="ads container no-gap" style="margin-top: -140px;;">
   <img class="ad col-md-12" style="margin-top: 13%; height: 300px;" src="{{url('public/uploads/lfs.jpg')}}" />
	</div>


<div class="mini-corusel container"></div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	<div class="ads ">
   <img class="ad col-md-2 no-gap" style="margin-top: 10px; height: 150px;" src="{{url('public/uploads/ads.jpg')}}" />
	</div>
	
	
	</div>
</div>
</div>

<div class="banner no-gap">
   <img class="banner" style="margin-top: 50px;" src="{{url('public/uploads/banner-ex.png')}}" />



<!--kategori-->

   <div class="kategori container">

   	<div class="kat-title">
	KATEGORI

</div>

<div class="kat-img">

   	<div class="kat-img-1 col-md-4 no-gap">
   <img class="katimg-1"  src="{{url('public/uploads/kat-1.jpg')}}" />
	</div>

<div class="kat-img-1 col-md-4 no-gap">
   <img class="katimg-2"  src="{{url('public/uploads/kat-2.jpg')}}" />
	</div>

<div class="kat-img-1 col-md-4 no-gap">
   <img class="katimg-3"  src="{{url('public/uploads/kat-3.jpg')}}" />
	</div>

   </div>
</div>

@endsection
