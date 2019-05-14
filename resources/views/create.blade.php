@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col"></div>
       <div class="col mt-5">
 
        <form class="form-signin" method="POST" action="/addRecord">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Add Records Here</h1>
            </div>
            
            <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="name" value="" placeholder="Address e.g  440 Kent St W - Picton Courthouse" required>
                <div class="error"></div>
            </div>
 
            <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="city" value="" placeholder="City e.g  Picton" required>
                <div class="error"></div>
            </div>
 
            <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="postal_code" value="" placeholder="Postal Code e.g  K0K 2T0" required>
                <div class="error"></div>
            </div>
 
            <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="lat" value="" placeholder="Latitude e.g  44.00718033" required>
                <div class="error"></div>
            </div>

            <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="long" value="" placeholder="Longtitude e.g  -77.1343859" required>
                <div class="error"></div>
            </div>
            @csrf
 
            <button class="mt-4 btn btn-lg btn-block btn-primary" name="submit" type="submit">ADD</button>
            
 
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
        </form>
    </div>
 <div class="col"></div>
   </div>
   </div>
@endsection