
@extends('layout')
@section('content')
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">posts /update</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> update Post
              <a href="{{url('admin/post')}}" class="float-right btn btn-sm btn-dark">All Post</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{url('admin/post/'.$data->id)}}" enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <table class="table table-bordered">
                      <tr>
                          <th>Category<span class="text-danger">*</span></th>
                          <td>
                            <select class="form-control" name="category">
                              @foreach($cats as $cat)
                              @if($cat->id == $data->date_interval_create_from_date_string)
                              <option selected value="{{$cat->id}}">{{$cat->title}}</option>
                              @else
                              <option  value="{{$cat->id}}">{{$cat->title}}</option>
                              @endif
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <th>Title</th>
                          <td><input type="text" value="{{ $data->title }}" name="title" class="form-control" /></td>
                      </tr>
                      <tr>
                      <th>Thumb</th>
                        <td>
                          <p class="my-2"><img width="80" src="{{asset('imgs/thumb')}}/{{$data->thumb}}" /></p>
                          <input type="hidden" value="{{$data->thumb}}" name="post_thumb" />
                          <input type="file" name="post_thumb" />
                        </td>
                      </tr>
                      <th>Full image</th>
                        <td>
                          <p class="my-2"><img width="80" src="{{asset('imgs/full')}}/{{$data->image}}" /></p>
                          <input type="hidden" value="{{$data->image}}" name="post_image" />
                          <input type="file" name="post_image" />
                        </td>
                      </tr>
                      <tr>
                          <th>Detail<span class="text-danger">*</span></th>
                          <td>
                            <textarea class="form-control"  name="detail">{{ $data->detail }}</textarea>
                          </td>
                      </tr>
                      <tr>
                          <th>Tags</th>
                          <td>
                            <textarea class="form-control"  name="tags">{{ $data->tags }}</textarea>
                          </td>
                      </tr>
                      <tr>
                          <th>Start at <span class="text-danger">*</span></th>
                          <td><input type="datetime-local" name="start_at" value="{{$data->start_at}}" class="form-control" /></td>
                      </tr>
                      <tr>
                          <th>End at <span class="text-danger">*</span></th>
                          <td><input type="datetime-local" name="end_at" value="{{$data->end_at}}" class="form-control" /></td>
                      </tr>

                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-primary" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

      