<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;

use App\Http\Controllers\Controller;
use App\Models\Authentication;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Support\Facades\Validator;

class Report extends Controller
{
  public function view(Request $request)
  {
         $data=Admin::select('*');
           if($request->ajax())
           {
               return DataTables::of($data)
               ->addIndexColumn()
               ->addColumn(function($row){
                   $btn="<a href='".route('',$row->id)."' class='edit btn btn-primary'>Edit</a>";
                   $btn=$btn."<a href='".route('',$row->id)."' class='delete btn btn-danger'>Danger</a>";

                   return $btn;
               })
               ->rawColumns(['action'])
               ->make(true);
           }
           return view('Admin.report.view');
  }

  public function editform($id)
  {
        $report=Admin::select('*')->where(['id'=>$id])->get();

        return view('Admin.report.edit',['report'=>$report[0]]);
  }


  public function edit(Request $request)
  {

      $validator=Validator::make($request->all(),[
          'Report_Type'=>'required',
          'Title'=>'required',
          'Slug'=>'required',
          'Meta_Title'=>'required',
          'Single_User_Amount'=>'required',
          'Multi_User_Amount'=>'required',
          'Enterprise_Amount'=>'required',
          'Data_Pack_Amount'=>'required',
          'Date_Published'=>'required'
      ]);

      if($validator->fails())
      {
          $errors=json_decode(json_encode($validator->errors()));

          return response()->json(['status'=>0,'Message'=>$errors]);
      }
      else{

        //$report=Admin::find($request->id);

       $updated=Admin::where('id',$request->id)->update(['Report_Type'=>$request->Report_Type,'Title'=>$request->Title,'Slug'=>$request->Slug,'Meta_Title'=>$request->Meta_Title,'Single_User_Amount'=>$request->Single_User_Amount,'Multi_User_Amount'=>$request->Multi_User_Amount,'Enterprise_Amount'=>$request->Enterprise_Amount,'Data_Pack_Amount'=>$request->Data_Pack_Amount,'Date_Published'=>$request->Date_Published]);
      // return response()->json(['status'=>1,'Message'=>'Report Updated','reportid'=>$request->id]);
         if($updated)
        {
            return response()->json(['status'=>1,'Message'=>'Report Updated',]);
        }
        else{
            return response()->json(['status'=>0,'Message'=>'Report Updated failed']);
        }



      }


  }
  public function delete(Request $request)
  {
      if($request->id)
      {
          Admin::where(['id'=>$request->id])->delete();
      }

  }
  public function addform()
  {
      $report=Admin::select('*')->get();
        return view('Admin.report.add',['report'=>$report]);
  }

  public function add(Request $request)
  {
    $validator=Validator::make($request->all(),[
    "Category_Id"=>"required",
    "Publisher_Id"=>"required",
    "Report_Type"=>"required",
    "Title"=>"required",
    "Slug"=>"required",
    "Total_Page"=>"required",
    "Table_of_Content"=>"required",
    "Description"=>"required",
    "Segmentation"=>"required",
    "key_player"=>"required",
    "Summary"=>"required", "Currency"=>"required",
    "Single_User_Amount"=>"required",
    "Multi_User_Amount"=>"required",
    "Enterprise_Amount"=>"required",
    "Data_Pack_Amount"=>"required",
    "Meta_Title"=>"required",
    "Meta_Description"=>"required",
    "Meta_Canonical"=>"required",
    "Date_Published"=>"required",
    ]);
    if($validator->fails())
    {
        $errors=json_decode(json_encode($validator->errors()));

        return response()->json(['status'=>0,'Message'=>$errors]);
    }
    else{

        $report=new Admin();
        $report->Category_Id=$request->Category_Id;
        $report->Publisher_Id=$request->Publisher_Id;
        $report->Report_Type=$request->Report_Type;
        $report->Title=$request->Title;
        $report->Slug=$request->Slug;
        $report->Total_Page=$request->Total_Page;
        $report->Table_of_Content=$request->Table_of_Content;
        $report->Description=$request->Description;
        $report->Segmentation=$request->Segmentation;
        $report->key_player=$request->key_player;
        $report->Summary=$request->Summary;
        $report->Currency=$request->Currency;
        $report->Single_User_Amount=$request->Single_User_Amount;
        $report->Multi_User_Amount=$request->Multi_User_Amount;
        $report->Enterprise_Amount=$request->Enterprise_Amount;
        $report->Data_Pack_Amount=$request->Data_Pack_Amount;
        $report->Meta_Title=$request->Meta_Title;
        $report->Meta_Description=$request->Meta_Description;
        $report->Meta_Canonical=$request->Meta_Canonical;
        $report->Date_Published=$request->Date_Published;

        $report->save();

        return response()->json(['status'=>1,'Message'=>'Report successfully Added']);

    }



  }
}
