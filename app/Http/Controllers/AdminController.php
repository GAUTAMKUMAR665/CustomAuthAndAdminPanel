<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;

$GLOBALS['colname']=[];
$GLOBALS['header']=null;
$GLOBALS['tablename']=null;
class AdminController extends Controller
{

    public function home()
    {
        return view('Admin.home');
    }






    public function csvToArray($filename='', $delimiter=',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        $data=[];
        $headers=null;

        if (($handle=fopen($filename, 'r'))!==false) {
            while (($row=fgetcsv($handle, 1000, $delimiter))!==false) {
                if (!$GLOBALS['header']) {
                    $GLOBALS['header']=$row;
                } else {
                    $data[]=array_combine($GLOBALS['header'], $row);
                }
            }
            fclose($handle);
        }
        //return $GLOBAL['tablename'];
        return $data;
    }
    public function importCSV(Request $request)
    {
        $file=$request->csvfile;
        //dd($request);
        $filename=$file->getClientOriginalName();

        $extension=$file->getClientOriginalExtension();
        ///dd($extension);
        $tmppath=$file->getRealPath();
        $filesize=$file->getsize();
        $mimetpye=$file->getMImeType();

        $valid_extension=array('csv');

        if (in_array(strtolower($extension), $valid_extension)) {
            $location='uploads/CSV';

            $csvs=$file->move($location, $filename);
            //dd($csvs);

            $filepath=public_path($location."/".$filename);

            //dd($filepath);
            $column=[];
            //array_push($column,$GLOBALS['colname']);
            $details=$this->csvToArray($filepath);

            $nfilename=stripslashes($filepath);
            $find=array(".csv","_","D:","xampp","htdocs","gym","public","uploads","CSV",'/'," ","newfolder(2)","UsersgautamDesktoplaravelnewrepo3-","CUSTOMAUTHADMIN");
            $GLOBAL['tablename']=str_ireplace($find, "", $nfilename);

            /* for ($i=0; $i <count($GLOBALS['header']); $i++) {
             $find=array(" ");
             $GLOBALS['header'][$i]=str_ireplace($find, "_", $GLOBALS['header'][$i]);
            } */
            Schema::create($GLOBAL['tablename'], function (Blueprint $table) {
                for ($i=0; $i <count($GLOBALS['header']) ; $i++) {
                    array_push($GLOBALS['colname'], $GLOBALS['header'][$i]);
                }
                $table->bigIncrements('id');

                for ($i=0; $i <count($GLOBALS['colname']) ; $i++) {
                    $table->longText($GLOBALS['colname'][$i]);
                }
                $table->timestamps();
            });

            for ($i=0; $i <count($details) ; $i++) {
                DB::table($GLOBAL['tablename'])->insert([$details[$i]]);
            }

            dd($GLOBALS['header']);
        }
    }

    public function export()
    {
        return view('Admin.Import.importreport');
    }
    public function import()
    {
        $location='uploads/CSV';
        //dd($filename);
        $filepath=public_path($location);

        $files=File::files($filepath);

        dd($files);
        $tablename="newfolder(2)importfileupload";
        $data=DB::table($tablename)->get();
        // dd($data);
        //return view('csvs.csvlist');
    }
}
