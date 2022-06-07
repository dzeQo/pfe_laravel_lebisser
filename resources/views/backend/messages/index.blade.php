@extends('layout')

@section('title' , 'all messages ')

@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  
<div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <th>#</th>
              <th>name</th>
              <th>sent BY</th>
              <th>message</th>
          </thead>
          <tfoot>
          <tr>
              <th>#</th>
              <th>name</th>
              <th>sent BY</th>
              <th>Messages</th>
            </tr>
          </tfoot>
          <tbody>
          @foreach($messages as $msg)
              <tr>
                <td>{{$msg->id}}</td>
                <td>{{$msg->name}}</td>
                <td>{{$msg->email}}</td>
                <td>{{$msg->message}}</td>

                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>

@endsection