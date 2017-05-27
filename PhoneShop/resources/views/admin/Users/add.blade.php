@extends('admin.layouts.master')
@section('title','Thêm Thành Viên')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
          @include('admin.errors.error')
            <form action="{{route('user.postadd')}}" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
                </div>
                <div class="form-group">
                    <label>RePassword</label>
                    <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="txtUser" placeholder="Please Enter Username" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="txtPhone" placeholder="Please Enter Phone" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="txtAddress" placeholder="Please Enter Address" />
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <label class="radio-inline">
                        <input name="gender" value="1" checked="" type="radio">Male
                    </label>
                    <label class="radio-inline">
                        <input name="gender" value="0" type="radio">Female
                    </label>
                </div>
                <div class="form-group">
                    <label>User Level</label>
                    <label class="radio-inline">
                        <input name="level" value="1" checked="" type="radio">Admin
                    </label>
                    <label class="radio-inline">
                        <input name="level" value="0" type="radio">Member
                    </label>
                </div>
                <button type="submit" class="btn btn-default">User Add</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@stop
