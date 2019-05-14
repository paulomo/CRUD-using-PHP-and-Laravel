@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col"></div>
      <div class="col mt-3">

       <form class="form-signin" method="POST" action="/records/{{$record->id}}/delete">
           <div class="text-center mb-4">
               <h1 class="h3 mb-3 font-weight-normal">Delete Records Here</h1>
           </div>
           
           <div class="form-group">
                <input type="text" id="inputPassword" class="form-control" name="region" value="{{$record->id}}" placeholder="Region. e.g Toronto" required readonly>
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="region" value="{{$record->Bldg_Ministry_Official_Name}}" placeholder="Region. e.g Toronto" required readonly>
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="fy" value="{{$record->Bldg_City}}" placeholder="FY. e.g FY200806" required readonly>
                    <div class="error"></div>
                </div>
     
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="home_studies" value="{{$record->Bldg_Postal_Code}}" placeholder="Home Studies. e.g 198" required readonly>
                    <div class="error"></div>
                </div>
    
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="home_studies" value="{{$record->Bldg_Latitude}}" placeholder="Home Studies. e.g 198" required readonly>
                    <div class="error"></div>
                </div>
    
                <div class="form-group">
                    <input type="text" id="inputPassword" class="form-control" name="home_studies" value="{{$record->Bldg_Longitude}}" placeholder="Home Studies. e.g 198" required readonly>
                    <div class="error"></div>
                </div>

           <button class="mt-4 btn btn-lg btn-block btn-danger" name="submit" type="submit">DELETE</button>

           <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
           
           @csrf
       </form>
   </div>
<div class="col"></div>
  </div>
  </div>
@endsection