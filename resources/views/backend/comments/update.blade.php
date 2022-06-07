@extends('layout')
@section('title' , 'approvements' )

@section('content')

<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> update comment
              <a href="{{url('admin/comments')}}" class="float-right btn btn-sm btn-dark">All comments</a>
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
                <form method="POST" action="{{url('admin/comments/'.$data->id)}}" enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>email</th>
                          <td><input type="text" value="{{ $data->email }}" name="email" class="form-control" disabled /></td>
                      </tr>
                      <tr>
                      <th>Comment</th>
                        <td>
                          <input type="hidden" value="{{$data->comment}}" name="comment"  disabled/>{{$data->comment}}
                        </td>
                      </tr>
                      <th>Status</th>
                        <td>
                          <input type="text" value="{{$data->status}}" name="status" />
                        </td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-primary" />
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div></div>
@endsection