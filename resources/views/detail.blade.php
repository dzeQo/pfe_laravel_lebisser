@extends('frontlayout')
@section('title' , $detail->title)
@section('content')

           <div  class=" detail">
           <div class="card shadow">
                <div class="card-body text-center">
                @if(Session::has('success'))
					<p class="alert alert-success">{{session('success')}}</p>
				@endif
                <h4 class="card-header">{{$detail->title}}</h4>
               <a href="{{url('detail/'.Str::slug($detail->title).'/'.$detail->id)}}">
                    <img style="max-width: 7rem;  "  class="card-img-top" src="{{asset('imgs/thumb/'.$detail->thumb)}}" alt="{{ $detail->title }}">
                </a>
                    <ul class="list-inline mt-3">
                        <li class="list-inline-item"><i class="far fa-clock"></i> ajouté le : {{ $detail->created_at->format('d-m-y') }} </li>
                    </ul>
                     <hr>
                    <img  style="max-width:50%;"  class="card-img-top ml-4  my-4" src="{{asset('imgs/full/'.$detail->image)}}" alt="{{$detail->title}}">
                    <p class="alert alert-info"> tags : {{ $detail->tags }}</p><br />
                    <p class="lead">{{ $detail->detail }}</p><br />
                </div>
            </div><br />
            <div class="card shadow  mt-2 mb-4">
                <h5 class="card-header text-center" >Ajouter un commentaire</h5>
                <div  class="card-body text-center" >
                    <form method="POST" action="{{url('save-comment/'.Str::slug($detail->title).'/'.$detail->id)}}">
                        @csrf
                        <input class="form-control mt-2" type="email" name="email" placeholder="Entrez votre email"><br/>
                        <textarea class="form-control mt-2" name="comment" placeholder="Entrez votre commentaire" rows="3"></textarea>
                        <input type="submit" value="Ajouter" class="btn btn-outline-dark mt-2 my-2">
                    </form>
                </div>
            </div>
            <div class="card my-4">
					<h5 class="card-header">Comments <span class="badge badge-dark">{{count($detail->comments)}}</span></h5>
					<div class="card-body">
						@if($detail->comments)
							@foreach($detail->comments as $comment)
								<blockquote class="blockquote">
								  <p class="mb-0">{{$comment->comment}}</p>
								  <footer class="blockquote-footer">{{$comment->email}}</footer>								  
								</blockquote>
								<hr/>
							@endforeach
						@endif
					</div>
				</div>
            </div>         
            </div>
          </section>
@endsection
</body>
</html>