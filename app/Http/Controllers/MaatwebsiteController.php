<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use App\adorption_record;
use DB;
use Session;
use Excel;

class MaatwebsiteController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }
    public function downloadExcel($type)
    {
        $data = adorption_record::get()->toArray();
        return Excel::create('my_adorption_record', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    public function importExcel(Request $request)
    {

        $request->validate([
            'import_file' => 'required'
        ]);
 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
 
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['Bldg_Ministry_Official_Name' => $value->Bldg_Ministry_Official_Name, 
                          'Bldg_City' => $value->Bldg_City,
                          'Bldg_Postal_Code' => $value->Bldg_Postal_Code,
                          'Bldg_Latitude' => $value->Bldg_Latitude,
                          'Bldg_Longitude' => $value->Bldg_Longitude
                        ];
            }
 
            if(!empty($arr)){
                adorption_record::updateOrCreate($arr);
            }
        }
 
        return back()->with('success', 'Insert Record successfully.');
    }
}