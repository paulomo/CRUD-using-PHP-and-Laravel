<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adorption_record;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = adorption_record::paginate(7);
        return view('home', compact('records'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('create');

    }

    public function addRecord(Request $request)
    {
        $record = new adorption_record();
        $record->Bldg_Ministry_Official_Name = $request->name;
        $record->Bldg_City = $request->city;
        $record->Bldg_Postal_Code = $request->postal_code;
        $record->Bldg_Latitude = $request->lat;
        $record->Bldg_Longitude = $request->long;
        $record->save();
        return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $record = adorption_record::find($id);
        return view('update', [
            'record' => $record
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = adorption_record::find($id);
        $record->Bldg_Ministry_Official_Name = $request->name;
        $record->Bldg_City = $request->city;
        $record->Bldg_Postal_Code = $request->postal_code;
        $record->Bldg_Latitude = $request->lat;
        $record->Bldg_Longitude = $request->long;
        $record->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = adorption_record::find($id);
        return view('delete', [
            'record' => $record
        ]);
    }

    public function delete($id)
    {
        $record = adorption_record::find($id);
        $record->delete();
        return redirect('/home');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'min:6'],
            'lat' => ['required', 'string', 'max:255'],
            'long' => ['required', 'string', 'min:6'],
        ]);
    }
}
