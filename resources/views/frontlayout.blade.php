<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet"  type="text/css" href="{{asset('library')}}/bs4/bootstrap.min.css" />
    <link rel="stylesheet"  type="text/css" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" />
    
     <!--  css -->
     <link rel="stylesheet"  type="text/css" href="{{asset('library')}}/front.css" />
    <!--  Jquery -->
    <script type="text/javascript" src="{{asset('library')}}/bs4/jquery-3.6.0.min.js"></script>
    <!--  BS4 Js -->
    <script type="text/javascript" src="{{asset('library')}}/bs4/bootstrap.bundle.min.js"></script>

    <!--claendar fetching -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            events: '/pfe_laravel_lebisser/public/calendarEvent'
        });
        calendar.render();
        });

        </script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    

</head>
<body>
    <header>
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-white" href="{{url('/')}}"><img width="150rem" height="50rem" src="{{asset('/imgs/fmag.png')}}"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nvbCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active pl-1">
                            <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home fa-fw mr-1"></i>home</a>
                        </li> 
                        <div class="dropdown">
                            <button class="btn btn-warnning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Posts
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item " href="{{url('/offers')}}" >offers</a>
                                <a class="dropdown-item " href="{{url('/planing')}}" >exams</a>
                                <a class="dropdown-item " href="{{url('/events')}}" >events</a>
                            </div>
                        </div>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="{{url('/calendar')}}"><i class="fa fa-calendar-alt fa-fw fa-rotate-180 mr-1"></i>Calendar</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="{{url('/contact-us')}}"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
                        </li>
                        <li class="nav-item pl-1">
                            <a class="nav-link" href="{{url('/about-us')}}"><i class="fa fa-info-circle fa-fw mr-1"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><br />
       
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
							<p class="d-inline lead"> © 2022 all rights reserved  <br />
							<a href="#" class="text-light d-block lead"><img height="40rem" src="{{asset('/imgs/fmag.png')}}">FssmMAG</a>
							</p>
	
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cizgi">
						<div class="card bg-secondary border-0">
							<div class="card-body text-center">
								<h5 class="card-title text-white display-4" style="font-size:30px">Contcter l'admin</h5>
								<a class="text-light d-block lead" href="#"><i class="fa fa-envelope mr-2"></i>fssmmag@gmail.com</a>
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
    @yield('js')
</body>
</html>
