<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publisher as AdminPublisher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class Publisher extends Controller
{
    public function view(Request $request)
    {
        $data=AdminPublisher::select('*');
        if($request->ajax())
        {

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row)
            {
              $btn="<a class='btn btn-primary btn-sm' href='".route('edit/publiser',$row->id)."'><i class='glyphicon glyphicon-edit'></i>Edit</a>";
              $btn=$btn."<a class='btn btn-danger btn-sm' href='javascript:void(0)'><i class='glyphicon glyphicon-delete'></i>Delete</a>";
              return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
           return view('Admin.publisher.view');

    }
    public function editform($id)
    {
        $publiser=AdminPublisher::where('id',$id)->get();
        return view('Admin.publisher.edit',['publiser'=>$publiser[0]]);

    }
    public function edit(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'publisher_id'=>"required",
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'url'=>'required'
        ]);

        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));
            //return response()->json(['status'=>0,'Message'=>$errors]);
            return redirect()->back()->withErrors($errors);
        }
        else{
            $pub=new AdminPublisher();
            $pub->publisher_id=$request->publisher_id;
            $pub->name=$request->name;
            $pub->email=$request->email;
            $pub->phone=$request->phone;
            $pub->url=$request->url;
            $pub->save();
           return redirect()->back()->with("success","Publisher Updated");
            //return response()->json(['status'=>0,'Message'=>'Publisher Added']);
        }
    }

    public function addform()
    {
        return view('Admin.publisher.add');
    }

    public function add(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'publisher_id'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'url'=>'required'
        ]);

        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));
            //return response()->json(['errors'=>$errors]);
            return redirect()->back()->withErrors($errors);
        }
        else{
            $pub=new AdminPublisher();
            $pub->publisher_id=$request->publisher_id;
            $pub->name=$request->name;
            $pub->email=$request->email;
            $pub->phone=$request->phone;
            $pub->url=$request->url;
            $pub->save();
            return redirect()->back()->with("success","Pulisher Added");
            //return response()->json(['status'=>0,'Message'=>'Publisher Added']);
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
        }
        else{
            AdminPublisher::where('id',$request->id)->delete();
        }

    }
}
