@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container">
        <div class="container" style="margin-top: 10px">
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
                </div>
        <table class="table table-striped">
           <thead>
           <tr>
                <th>ID</th>
                <th>Bldg Ministry Official Name</th>
                <th>Bldg City</th>
                <th>Bldg Postal Code</th>
                <th>Bldg Latitude</th>
                <th>Bldg Longitude</th>
                <th>Action</th>
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
                    <td>
                        <a href="/records/{{$record->id}}/edit">UPDATE</a>
                        <a href="/records/{{$record->id}}/destroy">DELETE</a>
                    </td>
              </tr>
              @endforeach
           </tbody>
        </table>
        {{ $records->links() }}
     </div>
@endsection
