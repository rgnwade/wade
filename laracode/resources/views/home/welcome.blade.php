@extends('layouts.app')


@section('css')
<link href="{{ url('plugins/carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet">
<link href="{{ url('plugins/carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet">
<style>
.location-title{
	transition: all .2s ease-in-out;
	position:absolute;
	 z-index: 999;
	  top:5%; 
	  left:30px;
	  font-size:22px;
	  padding:5px;
	   color:#ffffff;
	   border:1px solid #ffffff;
	    
	    background:rgba(0,0,0,0.4);	
}


.searchForm {
	width:99%;
	margin:0 auto;
	border:1px solid rgb(75, 217, 190);
	box-shadow: 0 0 5px #9ecaed;
}
	
@media (max-width: 768px) {
.searchForm{
	display:none;
}
	
.location-title{	
position:absolute;	
	 z-index: 99999;
	  top:15%; 
	  left:18px;
	  font-size:9px;
	  padding:3px; 
	  width:60%;
	
}
	
}
.location-wrap img{
transition: all .2s ease-in-out;	

	
}

.location-wrap:hover .location-title{
	
color:#777;
border:1px solid #ffffff;
background:#ffffff;	
	
}
.location-wrap:hover img{
	
transform: scale(1.01);
	
}


          	/* Carousel Fading slide */
.carousel-fade .carousel-inner { background: #000; }
.carousel-fade .carousel-control { z-index: 2; }  
.carousel-fade .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  }

  .carousel-fade .next.left,
  .carousel-fade .prev.right,
  .carousel-fade .item.active { opacity: 1; }

  .carousel-fade .active.left,
  .carousel-fade .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
    }


/* Safari Fix */
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}




/* Carousel Control custom */
.carousel-control .control-icon {
  font-size: 48px;
  height: 30px;
  margin-top: -15px;
  width: 30px;
  display: inline-block;
  position: absolute;
  top: 50%;
  z-index: 5;
  }
  .carousel-control .prev { margin-left:  -15px;  left: 50%; } /* Prev */
  .carousel-control .next { margin-right: -15px; right: 50%; } /* Next */


/* Removing BS background */
.carousel .control-box { opacity: 0; }
a.carousel-control.left  { left: 0; background: none; border: 0;}
a.carousel-control.right { right: 0; background: none; border: 0;}


/* Animation */
.control-box, a.carousel-control, .carousel-indicators li {
  -webkit-transition: all 250ms ease;
  -moz-transition: all 250ms ease;
  -ms-transition: all 250ms ease;
  -o-transition: all 250ms ease;
  transition: all 250ms ease;   
  /* hardware acceleration causes Bootstrap carousel controlbox margin error in webkit */
  /* Assigning animation to indicator li will make slides flicker */
  } 


/* Hover animation */
.carousel:hover .control-box { opacity: 1; }
.carousel:hover a.carousel-control.left { left: 15px; }
.carousel:hover a.carousel-control.right { right: 15px; }  


/* Carouse Indicator */
.carousel-indicators li.active,
.carousel-indicators li { border: 0; }

.carousel-indicators li {
  background: #666;
  margin: 0 3px;
  width: 12px;
  height: 12px;
  }

.carousel-indicators li.active {
  background: #fff;
  margin: 0 3px;
  }

	
</style>

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


<div class=" ads container ads-title" style="margin-top: 50px;">
	IKLAN BERANDA

</div>
<div class="no-gap" style="margin-top: -180px;;">


   <img class="ad col-md-12" style="margin-top: 18%; height: 300px; position:static;" src="{{url('public/uploads/lfs.jpg')}}" />
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
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


<div class="kat-title">
	TOP SUPPLIER

</div>

<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>


<div class="kat-title">
	TESTIMONI CUSTOMER

</div>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>





@endsection
