
@extends('base')
@section('content')
<form  method="post" action="{{URL::to('/register')}}"  style="background:#DCE7EC; height:700px;">
  @csrf
<div class="container mb-3 py-4 col-5">
    <h1 align="center">Registration Page</h1>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required="">
  </div>
 <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required="">
  </div>
    <div class="form-group">
    <label for="mobile">Phone Number</label>
    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Contact No." required="">
  </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address" required="">
  </div>
    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required="">
  </div>
    <div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control" id="state" name="state" placeholder="Enter Your State" required="">
  </div>
    <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Your Country" required="">
  </div>
    <div class="form-group">
    <label for="zip">Zip Code</label>
    <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Your Zip code"  required="">
  </div>
<div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Your Password" required="" m>
</div>
<div align="center">
    <br><button class="btn btn-primary " type="submit">Submit</button>
   </div>
</div>

  </form>
@endsection
