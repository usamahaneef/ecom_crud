{{-- include master file there --}}
@extends('master')
{{-- include section for other file there --}}
@section('content')    
<div class="container my-3">
    
    <div class="row">
        <div class="col-sm-4 offset-md-4">
            <h3>Login Page</h3>
            <form action="{{url('login')}}" method="POST" >
                <div class="form-group">
                    @csrf
                  <label for="email">Email address:</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="password" class="form-control" id="pwd">
                </div>
                {{-- <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div> --}}
                <button type="submit" class="btn btn-success my-3">Log In</button>
              </form>
        </div>
    </div>
</div>
@endsection