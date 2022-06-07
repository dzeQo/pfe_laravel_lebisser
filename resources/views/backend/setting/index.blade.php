<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting - Admin</title>
</head>
<body>
    
@extends('layout')
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
              <i class="fas fa-table"></i> Manage settings 
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

                <form method="post" action="{{url('admin/setting')}}" enctype="multipart/form-data">
                  @csrf
                  <table class="table table-bordered">
                      <tr>
                          <th>User auto Approve</th>
                          <td>
                              <input type="text" @if($setting) value="{{ $setting->user_auto }}" @endif name="UAP" class="form-control">
                          </td>
                      </tr>
                      <tr>
                          <th>Recent Post Limit</th>
                          <td>
                            <input type="text" @if($setting) value="{{ $setting->recent_limit }}" @endif name="RPL" class="form-control">
                          </td>
                      </tr>
                      <tr>
                          <th>Popular Post Limit</th>
                          <td>
                            <input type="text" @if($setting) value="{{ $setting->popular_limit }}" @endif  name="PPL" class="form-control">
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
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

      
</body>
</html>