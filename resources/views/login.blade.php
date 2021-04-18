@extends('base')
@section('content')        
<form method="post" action="{{URL::to('/loged')}}"  style="background:#DCE7EC; height:700px;">
  @csrf
<div class="container mb-3 py-4 col-6">
    <h1 align="center">Login</h1>
   
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
  </div>
    
<div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Your Password" required="">
</div>
   
<div align="center">
    <br><button class="btn btn-primary " type="submit" >Submit</button>
   </div>
</div>

</form>
@endsection
