@extends('layouts.app')


@section('css')

@endsection

@section('content')
	<div class="home-image no-gap">
   <img class="homepage"  src="{{url('public/uploads/homepage6.jpg')}}" />
   
   <div class="intro-pict">
   	Temukan supplier terpercaya untuk segala kebutuhan konstruksi Anda
   </div>
   
   <button class="button-masuk button-besar">Mulai Sekarang</button>
   
   </div>




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
