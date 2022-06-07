<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet"  type="text/css" href="{{asset('library')}}/bs4/bootstrap.min.css" />
    <!--  Jquery -->
    <script type="text/javascript" src="{{asset('library')}}/bs4/jquery-3.6.0.min.js"></script>
    <!--  BS4 Js -->
    <script type="text/javascript" src="{{asset('library')}}/bs4/bootstrap.bundle.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style>
        .navbar { background-color: #ffa366; }
        .navbar .navbar-nav .nav-link { color: #fff; }
        .navbar .navbar-nav .nav-link:hover { color: #475a3b; }
        .navbar .navbar-nav .active > .nav-link { color: #475a3b; }

        footer a.text-light:hover { 
            color: #fed136!important;
             text-decoration: none; 
        }
        footer .cizgi { 
            border-right: 1px solid #535e67; 
        }
        @media (max-width: 992px) {
             footer .cizgi { border-right: none; } 
        }
        .searchbar{
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

            .search_input{
                color: white;
                border: 0;
                outline: 0;
                background: none;
                width: 0;
                caret-color:transparent;
                line-height: 40px;
                transition: width 0.4s linear;
            }

            .searchbar:hover > .search_input{
                padding: 0 10px;
                width: 450px;
                caret-color:red;
                transition: width 0.4s linear;
            }

            .searchbar:hover > .search_icon{
                background: white;
                color: #e74c3c;
            }

            .search_icon{
                height: 40px;
                width: 40px;
                float: right;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                color:white;
                text-decoration:none;
            }
            hr {
                border: none;
                height: 3px;
                background-color: #353b48; 
                background-image: -webkit-linear-gradient(left, rgba(66,133,244,.8), rgba(66, 133, 244,.6), rgba(0,0,0,0));
            }
           
    </style>

</head>
<body>
    <header>
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-white" href="{{url('/')}}"><i class="fa fa-graduation-cap fa-lg mr-2"></i>FssmMAg</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nvbCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active pl-1">
                            <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home fa-fw mr-1"></i>home</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="{{url('/contact-us')}}"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="#"><i class="fa fa-info-circle fa-fw mr-1"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><br />
        <form action="{{url('/')}}">
            <div class="d-flex justify-content-center h-10">
                <div class="searchbar">
                <input class="search_input" type="text" name="q" placeholder="Rechercher">
                    <button class="search_icon"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form><br>
        <!--# Navbar #-->
            
        <main class="my-5">
        <div class="container">
            @yield('content')
        </div>
        </main>
	<footer>
		<div class="jumbotron jumbotron-fluid bg-secondary p-4 mt-5 mb-0">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-light text-center">
							<p class="d-inline lead"> © 2022 all rights reserved  <br>
							<a href="#" class="text-light d-block lead">FssmMAG</a>
							</p>
	
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Contcter le développeur</h5>
								<a class="text-light d-block lead" style="margin-left: -20px" href="#"><i class="fa fa-phone mr-2"></i>+212 641086366</a>
								<a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>zakariae.lebisser01@edu.uca.ma</a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
							<h5 class="card-title text-white display-4" style="font-size:30px">Réseaux Sociaux </h5>
                            <a href="https://www.linkedin.com/in/zakariae-lebisser-7a67061a3/" class="btn btn-warning m-1" role="button"
                            rel="nofollow" target="_blank">
                            <i class="fab fa-linkedin"></i>
                          </a>
                          <a href="https://www.facebook.com/profile.php?id=100005471749060" class="btn btn-warning m-1" role="button" rel="nofollow"
                            target="_blank">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                          <a href="https://twitter.com/ZLebisser" class="btn btn-warning m-1" role="button" rel="nofollow"
                            target="_blank">
                            <i class="fab fa-twitter"></i>
                          </a>
                          <a href="https://github.com/dzeQo" class="btn btn-warning m-1" role="button" rel="nofollow"
                            target="_blank">
                            <i class="fab fa-github"></i>
                          </a>							
                        </div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</footer>
	<!--# Footer #-->
</body>
</html>
