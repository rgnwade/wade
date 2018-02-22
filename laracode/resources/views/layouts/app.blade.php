<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/pace.css') }}" rel="stylesheet">
     <link href="{{ url('public/css/sweetalert.css') }}" rel="stylesheet">
     <link href="{{ url('public/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
     <link href="{{ url('public/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
     <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
   <style>
            html, body {
                background:url("{{ url('hail/x/gaze/original/symphony.png') }}");
               /* background-color: #f7f7f7;*/
                color: #636b6f;
                font-family: 'Montserrat', sans-serif;
          
                margin: 0;
            }
            .back-arrow{
	background:red;
	color:#ffffff;
	height:30px;
	width:80px;
	position:relative;
	margin-left:20px;
	text-align:center;
	padding:5px;
}
.home-image{
	margin-top: -90px;
position: relative;
z-index: 0;
width:auto;
}

.homepage{
	width: 100%;
}

.back-arrow > a
{
	color:#ffffff;
	font-weight:bold;

}
.back-arrow:before{
	content:"";
	position:absolute;
	top:0px;
	right: 100%;
	 border-top: 15px solid transparent;
  border-bottom: 15px solid transparent; 
  border-right: 15px solid red;
	
	
}	
.logoku{
	width: 250px;
}

.package-popular{	
 
height:30px;
background:#76ef4e; 
width: 63%;
    color: white;
    text-align: center;
    font-weight: bold;
    padding: 5px;
    position: absolute;
    top: 10%;	
    z-index: 999999;
}	
.package-popular:after{
	
	content: '';
    display: block;
    height: 0;
    width: 0;
    border-style: solid;
    border-width: 15px;
    border-color: #76ef4e;
    border-right-color: transparent;
    position: absolute;
    right: -15px;
    top: 0;	
}
.package-new{	
 
height:30px;
background:#e5ef4e; 
width: 63%;
    color: white;
    text-align: center;
    font-weight: bold;
    padding: 5px;
    position: absolute;
    top: 10%;	
     z-index: 999999;
}	
.package-new:after{
	
	content: '';
    display: block;
    height: 0;
    width: 0;
    border-style: solid;
    border-width: 15px;
    border-color: #e5ef4e;
    border-right-color: transparent;
    position: absolute;
    right: -15px;
    top: 0;	
}

.package-verified{	
 
height:30px;
background:#ff7600; 
width: 63%;
    color: white;
    text-align: center;
    font-weight: bold;
    padding: 5px;
    position: absolute;
    top: 10%;
     z-index: 999999;	
}	
.package-verified:after{
	
	content: '';
    display: block;
    height: 0;
    width: 0;
    border-style: solid;
    border-width: 15px;
    border-color:#ff7600;
    border-right-color: transparent;
    position: absolute;
    right: -15px;
    top: 0;	
}
  .featured{
       
    top: 5%;  	
    font-size:14px;
    	      	
            }	
      .another{
       
    top: 10%;  	
    font-size:9px;
    padding-top:10px;
            }
            .caro-details{
 	
 	border:1px solid white;
 	padding:5px 10px;
 	color:white;
 	border-radius:3px;
 }
  img.lazy {
      
        /* optional way, set loading as background */
        background-image: url('<?php echo url('uploads/loader.gif');?>');
        background-repeat: no-repeat;
        background-position: 50% 50%;
        width:100%;
        min-height:120px;
    }



            @media (max-width: 768px) {
            	
            	.caro-title{
            		font-size: 12px;
            		padding-top:10px;
            	}
            	.caro-description{
            		
            		display:none;
            	}
            	.caro-details{
            		
            	font-size:9px;	
            	}
            	.caro-price{
            	font-size:9px;		
            	}
            	
            	.tour-title{
	
			font-size:9px !important;	
	
					}
            	
            	.owl-price{
            	font-size:9px !important;	
            		
            	}
            	.owl-title{
            	min-height:35px !important;	
            		
            	}
            	
            	  img.lazy {
      
        /* optional way, set loading as background */
         background-image: url('<?php echo url('uploads/loading.png');?>');
        background-repeat: no-repeat;
        background-position: 50% 50%;
        width:100%;
        min-height:50px;
    }
            	
            	.back-arrow{
            		
            	margin-top:10px;
            	width:120px;
            	margin-left:10px;
            	margin-bottom:-10px;	
            		
            	}
            	
            .featured{
            width: 63%;
            	font-size:9px;
            }
            .another{
       
    top: 10%;  	
    font-size:14px;
    padding-top:5px;
     	      	
            }
			.app-height{
				
			min-height:auto !important;	
				padding-top:30px !important;
			}
			.logoku{
	width: 90px;
}
.no-gap{
	
	padding:0 !Important;
	margin:0 !important;
}

}
           </style>
    @section('css')
	@show

    <!-- Scripts -->
   
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>   
    
    
</head>
<body>
    <div id="app">
       
    
  
        @include('layouts/inc/header')
	<div class="app-height" style="min-height:970px; padding-top:70px;">
		<br>
        @yield('content')
     </div>   
        @include('layouts/inc/footer')
        

    </div>
  
     <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('public/js/pace.min.js')}}"></script> 
    <script src="{{ url('public/js/sweetalert.min.js')}}"></script>
    <script src="{{ url('public/js/fileinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/js/lazy.min.js') }}" type="text/javascript"></script>
    <script>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
