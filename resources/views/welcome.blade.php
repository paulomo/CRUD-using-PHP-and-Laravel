<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>School Project</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <style>

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>

        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Admin</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container" style="margin-top: 100px">
                @if(isset($records))
                <div class="container">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search records"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search">GO</span>
                                    </button>
                                </span>
                            </div>
                        </form>
                        @if(isset($details))
                            <p>The Seaech result for your query <b> {{$query}}</b> are: </p>
                            <table class="table table-striped mt-3">
                                <thead>
                                <tr>
                                     <th>ID</th>
                                     <th>Bldg Ministry Official Name</th>
                                     <th>Bldg City</th>
                                     <th>Bldg Postal Code</th>
                                     <th>Bldg Latitude</th>
                                     <th>Bldg Longitude</th>
                                </tr>
                                </thead>
                                <tbody>
                                     @foreach ($details as $record)
                                   <tr>
                                         <td>{{$record->id}}</td>
                                         <td>{{$record->Bldg_Ministry_Official_Name}}</td>
                                         <td>{{$record->Bldg_City}}</td>
                                         <td>{{$record->Bldg_Postal_Code}}</td>
                                         <td>{{$record->Bldg_Latitude}}</td>
                                         <td>{{$record->Bldg_Longitude}}</td>
                                   </tr>
                                   @endforeach
                                </tbody>
                             </table>
                             {{ $details->links() }}
                          </div>
                          @elseif(isset($message))
                          <p>{{ $message }}</p>
                        @endif
                </div>
                    <table class="table table-striped mt-3">
                       <thead>
                       <tr>
                            <th>ID</th>
                            <th>Bldg Ministry Official Name</th>
                            <th>Bldg City</th>
                            <th>Bldg Postal Code</th>
                            <th>Bldg Latitude</th>
                            <th>Bldg Longitude</th>
                       </tr>
                       </thead>
                       <tbody>
                            @foreach ($records as $record)
                          <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->Bldg_Ministry_Official_Name}}</td>
                                <td>{{$record->Bldg_City}}</td>
                                <td>{{$record->Bldg_Postal_Code}}</td>
                                <td>{{$record->Bldg_Latitude}}</td>
                                <td>{{$record->Bldg_Longitude}}</td>
                          </tr>
                          @endforeach
                       </tbody>
                    </table>
                    {{ $records->links() }}
                 </div>

                 @endif
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </body>
</html>
