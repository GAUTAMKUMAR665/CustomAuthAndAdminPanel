<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class PressRelese extends Controller
{

   public function view(Request $request)
    {
      $data=Admin::select('*');
      if($request->ajax())
      {
          return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action',function($row)
         {
              //$btn="<a href='javascript:void(0)' class='view btn-info btn-sm'>View</a>";
              $btn="<a href='".route("edit/pressrelese",$row->id)."' class='edit btn-primary btn-sm'  id='".$row->id."'><i class='glyphicon glyphicon-edit'></i>Edit</a>";
              $btn=$btn."<a href='javascript:void(0)' class='delete btn-danger btn-sm' onclick='deleteData(".$row->id.")' id='".$row->id."'>Delete</a>";

              return $btn;
         })
          ->rawColumns(['action'])
          ->make(true);
      }
      return view('Admin.pressrelese.view');
    }
    public function editform($id)
    {
        $report=Admin::where('id',$id)->get();
           return view('Admin.pressrelese.edit',['report'=>$report[0]]);
    }
    public function edit(Request $request)
    {
        $validator=Validator::make($request->all(),[
              'Meta_Title'=>'required',
              'created_at'=>'required',
              'updated_at'=>'required',
        ]);

        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$validator->errors()]);
        }
        else{

            Admin::where('id',$request->id)->update(['Meta_Title'=>$request->Meta_Title,'created_at'=>$request->created_at,'updated_at'=>$request->updated_at]);

            return response()->json(['status'=>0,'Message'=>'pressrelese Update sucessful']);

        }
    }

    public function addform()
    {
        return view('Admin.pressrelese.add');
    }

    public function add(Request $request)
    {
         $validator=Validator::make($request->all(),[
        "Title"=>"required",
        "Slug"=>"required",
        "Description"=>"required",
        "Meta_Title"=>"required",
        "Meta_Description"=>"required",
        ]);
        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$errors]);
        }
        else{

            $report=new Admin();
            $report->Title=$request->Title;
            $report->Slug=$request->Slug;
            $report->Description=$request->Description;
            $report->Meta_Title=$request->Meta_Title;
            $report->Meta_Description=$request->Meta_Description;
            $report->Meta_Canonical=$request->Meta_Canonical;
            $report->save();

            return response()->json(['status'=>1,'Message'=>'Report successfully Added']);

    }
}

    public function delete(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'id'=>'required'
        ]);

        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$errors]);
        }
        else{
            admin::where('id',$request->id)->delete();
        }

    }
}
