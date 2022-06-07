@extends('frontlayout')
@section('title' , 'Home Page')
@section('content')  
            <!-- latest offers-->
          <section class="text-center">
            <h4 class="mt-4 ">les offres de stages les plus récentes  </h4> 
            <hr>
            <a href="" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>   
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
            <a href="" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>
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
            <a href="" style="margin-right: -900px;" class="btn btn-outline-dark  my-2">Voir Tous</a>    
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