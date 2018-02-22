 <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                      <img class="logoku"  src="{{url('public/uploads/logo3.png')}}" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                       
                    <li>  <div class="cat-head">
                        <i class="fa fa-bars"> Kategori </i>
                        </div></li> 
                       <li>  <div class="search-bar" style="margin:5px 5px;">
    		
    		<input class="form-control" id="searchTour" placeholder="Masukan kata kunci pencarian" value="{{ Request::input('search')}}">
    	</div></li> 
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
     
                    	
                        @if (Route::has('login'))
                <div class="top-right links" style="border: 1px;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">MASUK</a>
                        <a href="{{ route('register') }}">DAFTAR</a>
                    @endauth
                </div>
            @endif

                                   
                                </ul>
                           
                            
                     
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                margin-right: 5%;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 5px 35px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: solid 1px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .search-bar{
            width: 500px;
padding-top: 3px;
padding-left:15px;
            }
            
            .cat-head{
            padding-left:15px;
            color:white;
           padding-top: 12px;
font-size: 20px;
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

        </style>