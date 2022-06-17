@extends('frontlayout')
@section('title' , 'FssMag - About')
@section('content')

<style>
        body{
            color: whitesmoke;
        
        }
        .devcontainer{
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 3rem;
            margin-top: 4rem;
            text-align: center;
        }
        .img {
            border-radius: 50%;
            margin-top: 5rem;
            margin-bottom: 5rem;
            opacity:0.5;
        }
        .card{
            border:none;

            position:relative;
            overflow:hidden;
            border-radius:8px;
            cursor:pointer;
        }

        .card:before{
            
            content:"";
            position:absolute;
            left:0;
            top:0;
            width:4px;
            height:100%;
            background-color:#E1BEE7;
            transform:scaleY(1);
            transition:all 0.5s;
            transform-origin: bottom
        }

        .card:after{
            
            content:"";
            position:absolute;
            left:0;
            top:0;
            width:4px;
            height:100%;
            background-color:#8E24AA;
            transform:scaleY(0);
            transition:all 0.5s;
            transform-origin: bottom
        }

        .card:hover::after{
            transform:scaleY(1);
        }
        .fonts{
            font-size:14px;
            color: darkslategray;
        }

        .social-list{
            display:flex;
            list-style:none;
            justify-content:center;
            padding:0;
        }

        .social-list li{
            padding:10px;
            color:#8E24AA;
            font-size:19px;
        }


</style>
    
<section class="text-center">
    <div class="devcontainer">
        <h4 class="mt-4 text-dark ">Informations sur FSSMag </h4> 
        <hr>
    </div>
    
    <div class="bg-light">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <p class="lead text-muted mb-0">cette page a crée par l'etudiant : zakariae lebisser , cette page sert a aider le staff de la faculté des 
                    sciences as-samlalia a informer les etudiants sur les nouvauté des offres de stage , les planings 
                    des examens et les évenements organisée par les differents clubs de cette faculté .</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block"><img width="300px" src="{{ asset('imgs/fmag.png')}}" alt="fssmmpic"  alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>

   
    <div class="bg-light py-5">
        <div class="container py-5">
           
                <h2 align="center" class="alert text-secondary">Notre Services </h2>
            

            <div class="row px-5 text-center">
            <!-- Team item-->
            <div class="card col-xl-3  col-xl-4 mb-5">
                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="{{asset('imgs/thumb/os.png')}}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">les offres de stage</h5><br/>
                <a href="{{url('/offers')}}"  class="btn btn-outline-light">Voir Tous</a>   
                </div>
            </div>

            <div class=" card col-xl-3 col-xl-4 mb-5">
                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="{{asset('imgs/thumb/cal.png')}}" alt="" width="75" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">les planings des exams </h5><br/>
                <a href="{{url('/planing')}}"  class="btn btn-outline-light">Voir Tous</a>   
                </div>
            </div>

            <div class="card col-xl-3  col-xl-4 mb-5">
                <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="{{asset('imgs/thumb/ev.png')}}" alt="" width="200" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">les évenements</h5><br/>
                <a href="{{url('/events')}}"  class="btn btn-outline-light">Voir Tous</a>   
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="{{asset('imgs/photo.JPG')}}" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <h3 class="mt-2  text-warning mb-0"> lebisser zakariae</h3>
                    <span class="mt-2  text-warning mb-0" >Etudiant - Developpeur </span>
                    
                    <div class="px-4 mt-1">
                        <br/><p class="fonts"> c'est un etudint marocain agé de 22 ans  , satagire en AIKINI WEB &TECH .</p>
                        <p class="fonts"> etudiant de la faculté des sciences as-samlalia  .</p>

                    </div>
                    
                     <ul class="social-list">
                        <li><a href="https://web.facebook.com/profile.php?id=100005471749060"><i class="fab fa-facebook"></a></i></li>
                        <li><a href="https://dribbble.com/dzeqo"><i class="fab fa-dribbble"></i></li></a>
                        <li><a href="https://github.com/dzeQo"><i class="fab fa-github"></i></li></a>
                        <li><a href="https://www.linkedin.com/in/zakariae-lebisser-7a67061a3/"><i class="fab fa-linkedin"></a></i></li>
                    </ul>
                    
                    
                </div>  
            </div>
            
        </div>
        
    </div>
    
</div>
</section>

@endsection