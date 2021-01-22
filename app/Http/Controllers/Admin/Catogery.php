<?php

Namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use App\Models\Admin\Catogery as Catogerylist;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;

class Catogery extends Controller
{
    public function searchs(Request $request)
    {
        $data=Catogerylist::select('*');

      if($request->ajax())
      {
         return DataTables::of($data)
         ->filter(function ($instance) use ($request) {
            if (!empty($request->get('Catogery_Name'))) {
                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                    return Str::contains($row['Catogery Name'], $request->get('Catogery_Name')) ? true : false;
                });
            }

            if (!empty($request->get('Added_Data'))) {
                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                    return Str::contains($row['Added_Data'], $request->get('Added_Data')) ? true : false;
                });
            }
        })
         ->make(true);
      }
    }
    public function view(Request $request)
    {
        $data=Catogerylist::select('*');

      if($request->ajax())
      {
         return DataTables::of($data)
         ->addIndexColumn()
         ->addColumn('action',function($row)
         {
              //$btn="<a href='javascript:void(0)' class='view btn-info btn-sm'>View</a>";
              $btn="<a href='".route("edit/catogery",$row->id)."' class='edit btn-primary btn-sm' onclick='editdata()' id='".$row->id."'><i class='glyphicon glyphicon-edit'></i>Edit</a>";
              $btn=$btn."<a href='javascript:void(0)' class='delete btn-danger btn-sm' onclick='deletedata()' id='".$row->id."'>Delete</a>";

              return $btn;
         })
         ->filter(function ($instance) use ($request) {
            if ($request->get('Catogery_Name')) {
                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                    return Str::contains($row['Catogery_Name'], $request->get('Catogery_Name')) ? true : false;
                });
            }

            if ($request->get('Added_Data')) {
                $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                    return Str::contains($row['Added_Data'], $request->get('Added_Data')) ? true : false;
                });
            }
        })
         ->rawColumns(['action'])
         ->make(true);
      }


      return view('Admin.catogery.view');
    }
    public function editform($id)
    {
        $report=Catogerylist::where('id',$id)->get();
           return view('Admin.catogery.edit',['report'=>$report[0]]);
    }
    public function edit(Request $request)
    {
        $validator=Validator::make($request->all(),[
            "catogery_id"=>"required|unique:catogeries,catogery_id",
            "catogery_name"=>"required|unique:catogeries,catogery_name",
            "catogery_slug"=>"required|unique:catogeries,catogery_slug",
              'created_at'=>'required',
              'updated_at'=>'required',
        ]);

        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$validator->errors()]);
        }
        else{

            Catogerylist::where('id',$request->id)->update(['catogery_id'=>$request->catogery_id,'catogery_Catogery_Name'=>$request->catogery_Catogery_Name,'catogery_slug'=>$request->catogery_slug,'created_at'=>$request->created_at,'updated_at'=>$request->updated_at]);

            return response()->json(['status'=>0,'Message'=>'Catogery Update sucessful']);

        }
    }

    public function addform()
    {
        return view('Admin.catogery.add');
    }

    public function add(Request $request)
    {
         $validator=Validator::make($request->all(),[
            "catogery_id"=>"required|unique:catogeries,catogery_id",
            "catogery_name"=>"required|unique:catogeries,catogery_name",
            "catogery_slug"=>"required|unique:catogeries,catogery_slug",

        ]);
        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$errors]);
        }
        else{

            $catogery=new Catogerylist();
            $catogery->catogery_id=$request->catogery_id;
            $catogery->catogery_name=$request->catogery_name;
            $catogery->catogery_slug=$request->catogery_slug;
            $catogery->save();

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
            Catogerylist::where('id',$request->id)->delete();
        }

    }
}
