 
@extends('layout')
@section('title','All Comments')
@section('content')

<div class="container-fluid">
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i> Comments
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Post N</th>
              <th>Commented By</th>
              <th>Comment</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Post</th>
              <th>Commented By</th>
              <th>Comment</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach($data as $comment)
              <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->post_id}}</td>
                <td> {{$comment->email}} </td>
                <td>{{$comment->comment}}</td>
                <th>{{$comment->status}}</th>
                <td>
                <a class="btn btn-info btn-sm" href="{{url('admin/comments/'.$comment->id.'/edit')}}">Update</a>
                  <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm" href="{{url('admin/comment/delete/'.$comment->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection