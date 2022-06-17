@extends('frontlayout')
@section('title' , 'Home Page')
@section('content') 

                <div id="carouselExampleControls"  class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{asset('imgs/uca.jpg')}}" height="70%" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('imgs/f.jpg')}}" height="70%" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('imgs/amphix.jpeg')}}" height="70%" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><br/>
            

            <!-- latest offers-->
            <form action="{{url('/')}}">
                <div class="d-flex justify-content-center h-10">
                    <div class="searchbar">
                        <input class="search_input" type="text" name="q" placeholder="Rechercher">
                        <button class="search_icon"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form><br>
            <h4 class="mt-4 ">les  publications  plus visités  </h4> <hr>
             <!--Popular Post-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="projcard-container">
                            <div class="projcard projcard-blue">
                                <div class="projcard-innerbox">
                                    @if($popular_posts)
                                        @foreach($popular_posts as $p)
                                        <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($p->title).'/'.$p->id)}}" role="button">
                                        <img class="projcard-img" src="{{asset('imgs/thumb/'.$p->thumb)}}" /></a>
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">{{$p->title}}</div>
                                            <div class="projcard-subtitle"><i class="far fa-clock"></i> ajouté á : {{$p->created_at->format('d-m-y')}}</div>
                                            <div class="projcard-bar"></div>

                                            <div class="projcard-description">
                                                postuler entre : {{$p->start_at}} - {{$p->end_at}}
                                            </div>                               
                                            <a class="btn btn-outline-dark float-right" href="{{url('detail/'.Str::slug($p->title).'/'.$p->id)}}" role="button">voir details...</a>

                                            <div class="projcard-tagbox">
                                                <span class="projcard-tag">{{$p->tags}}</span>
                                                <span class="projcard-tag">visites : {{$p->views}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div> 
                   </div>
                    <div class="carousel-item">
                        <div class="projcard-container">
                            <div class="projcard projcard-blue">
                                <div class="projcard-innerbox">
                                    @if($popular_plans)
                                        @foreach($popular_plans as $pln)
                                        <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($pln->title).'/'.$pln->id)}}" role="button">
                                        <img class="projcard-img" src="{{asset('imgs/thumb/'.$pln->thumb)}}" /></a>
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">{{$pln->title}}</div>
                                            <div class="projcard-subtitle"><i class="far fa-clock"></i> ajouté á : {{$pln->created_at->format('d-m-y')}}</div>
                                            <div class="projcard-bar"></div>

                                            <div class="projcard-description">
                                                postuler entre : {{$pln->start_at}} - {{$pln->end_at}}
                                            </div>                               
                                            <a class="btn btn-outline-dark float-right" href="{{url('detail/'.Str::slug($pln->title).'/'.$pln->id)}}" role="button">voir details...</a>

                                            <div class="projcard-tagbox">
                                                <span class="projcard-tag">{{$pln->tags}}</span>
                                                <span class="projcard-tag">visites : {{$pln->views}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projcard-container">
                            <div class="projcard projcard-blue">
                                <div class="projcard-innerbox">
                                    @if($popular_events)
                                        @foreach($popular_events as $pv)
                                        <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($pv->title).'/'.$pv->id)}}" role="button">
                                        <img class="projcard-img" src="{{asset('imgs/thumb/'.$pv->thumb)}}" /></a>
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">{{$pv->title}}</div>
                                            <div class="projcard-subtitle"><i class="far fa-clock"></i> ajouté á : {{$pv->created_at->format('d-m-y')}}</div>
                                            <div class="projcard-bar"></div>

                                            <div class="projcard-description">
                                                postuler entre : {{$pv->start_at}} - {{$pv->end_at}}
                                            </div>                               
                                            <a class="btn btn-outline-dark float-right" href="{{url('detail/'.Str::slug($pv->title).'/'.$pv->id)}}" role="button">voir details...</a>

                                            <div class="projcard-tagbox">
                                                <span class="projcard-tag">{{$pv->tags}}</span>
                                                <span class="projcard-tag">visites : {{$pv->views}}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
               
           

          <section class="text-center">
            <h4 class="mt-4 ">les offres de stages les plus récentes  </h4> 
            <hr>
            <a href="{{url('/offers')}}" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>   
            <div class="container mb-4">
                <div class="row ">
                    @if(count($posts)>0)
                        @foreach($posts as $post)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">
                                    <img style="max-width: 10rem;  "  class="card-img-top" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="{{ $post->title }}">
                                </a>
                                <ul class="list-inline mt-3">
                                    <li class="list-inline-item"><i class="far fa-clock"></i> ajouté le : {{ $post->created_at->format('d-m-y') }} </li>
                                </ul>
                                <hr>
                                <p class="lead">{{ $post->title }}</p>
                                <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" role="button">Voir détails...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No post found</p>
                    @endif
                </div> <br />
                <!-- pagination -->
            </div>
             <!--Footer-->
          </section>
            <!-- latest plans-->
          <section class="text-center">
            <h4 class=" mt-4 ">les plannings les plus récentes </h4>    
            <hr>
            <a href="{{url('/planing')}}" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>
            <div class="container mb-4">
                <div class="row ">
                    @if(count($plans)>0)
                        @foreach($plans as $plan)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                        <div class="card shadow">
                            <div class="card-body text-center"><br />
                                <a href="{{url('detail/'.Str::slug($plan->title).'/'.$plan->id)}}">
                                    <img style="max-width: 10rem;  "  class="card-img-top" src="{{asset('imgs/thumb/'.$plan->thumb)}}" alt="{{ $plan->title }}">
                                </a>
                                <ul class="list-inline mt-3">
                                    <li class="list-inline-item"><i class="far fa-clock"></i> ajouté le : {{ $plan->created_at->format('d-m-y') }} </li>
                                </ul>
                                <hr>
                                <p class="lead">{{ $plan->title }}</p>
                                <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($plan->title).'/'.$plan->id)}}" role="button">Voir détails...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No post found</p>
                    @endif
                </div> <br />
            </div>
          </section>
                 <!-- latest plans-->
          <section class="text-center">
            <h4 class=" mt-4 ">les évenements  plus récentes </h4>
            <hr>
            <a href="{{url('/events')}}" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>    
            <div class="container mb-4">
                <div class="row ">
                    @if(count($events)>0)
                        @foreach($events as $event)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-4">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <a href="{{url('detail/'.Str::slug($event->title).'/'.$event->id)}}">
                                    <img style="max-width: 10rem;  "  class="card-img-top" src="{{asset('imgs/thumb/'.$event->thumb)}}" alt="{{ $event->title }}">
                                </a>
                                <ul class="list-inline mt-3">
                                    <li class="list-inline-item"><i class="far fa-clock"></i> ajouté le :{{ $event->created_at->format('d-m-y') }} </li>
                                </ul>
                                <hr>
                                <p class="lead">{{ $event->title }}</p>
                                <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($event->title).'/'.$event->id)}}" role="button">Voir détails...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No post found</p>
                    @endif
                </div> <br />
                <!-- pagination -->
            </div>
             <!--Footer-->
          </section>
@endsection('content')      
</body>
</html>