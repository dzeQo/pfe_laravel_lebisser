@extends('frontlayout')
@section('title' , 'all events')
@section('content')
<section class="text-center">
            <h4 class="mt-4 ">les événements organisé  </h4> 
            <hr>
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
                                    <li class="list-inline-item"><i class="far fa-clock"></i> ajouté le : {{ $event->created_at->format('d-m-y') }} </li>
                                </ul>
                                <hr>
                                <p class="lead">{{ $event->title }}</p>
                                <a class="btn btn-outline-dark my-2" href="{{url('detail/'.Str::slug($event->title).'/'.$event->id)}}" role="button">Voir détails...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No event found</p>
                    @endif
                </div> <br />
                <!-- pagination -->
                <div class="row">
                    <div class="col-12">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
             <!--Footer-->
          </section>

@endsection