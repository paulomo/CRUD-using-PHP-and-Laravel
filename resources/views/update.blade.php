@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col"></div>
       <div class="col mt-5">
 
       <form class="form-signin" method="POST" action="/records/{{$record->id}}/update">
                 
            <div class="text-center mb-4">
                    <h1 class="h3 mb-3 font-weight-normal">Update Records Here</h1>
                </div>
                
                <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="id" value="{{$record->id}}" placeholder="" required readonly>
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="name" value="{{$record->Bldg_Ministry_Official_Name}}" placeholder="" required >
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="city" value="{{$record->Bldg_City}}" placeholder="" required >
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="postal_code" value="{{$record->Bldg_Postal_Code}}" placeholder="" required >
                    <div class="error"></div>
                </div>
    
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="lat" value="{{$record->Bldg_Latitude}}" placeholder="" required >
                    <div class="error"></div>
                </div>
    
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="long" value="{{$record->Bldg_Longitude}}" placeholder="" required >
                    <div class="error"></div>
                </div>
     
                <button class="mt-4 btn btn-lg btn-block btn-primary" name="submit" type="submit">UPDATE</button>
                
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
                @csrf
        </form>
    </div>
 <div class="col"></div>
   </div>
   </div>
@endsection