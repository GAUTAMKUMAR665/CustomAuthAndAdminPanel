<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class Userscontroller extends Controller
{
    public function view(Request $request)
    {
        $data=Authentication::select('*');

        if($request->ajax())
        {

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row)
            {
                 //$btn="<a href='javascript:void(0)' class='view btn-info btn-sm'>View</a>";
                 $btn="<a href='".route('edit/user',$row->id)."' class='edit btn-primary btn-sm'  id='".$row->id."'>Edit</a>";
                 $btn=$btn."<a href='javascript:void(0)' class='delete btn-danger btn-sm' onclick='deletedata(".$row->id.")' id='".$row->id."'>Delete</a>";

                 return $btn;
            })
            ->filters(function ($instance) use ($request) {
                if ($request->has('name')) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return Str::contains($row['name'], $request->get('name')) ? true : false;
                    });
                }

                if ($request->has('email')) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return Str::contains($row['email'], $request->get('email')) ? true : false;
                    });
                }
            })
            ->rawColumns(['action'])
            ->make(true);

        }
        return view('Admin.Users/users');
    }

    public function addform()
    {
       return view('/Admin/Users/add');
    }

    public function add(Request $request)
    {
       $validator=Validator::make($request->all(),[
           'name'=>'required',
           'email'=>'required|email',
           'phone'=>'required',
           'password'=>'required',
           'confirmpassword'=>'required',
           'verfication_method'=>'required',
           'is_verified'=>'required'
       ]);

       if($validator->fails())
       {
           $errors=json_decode(json_encode($validator->errors()));

           return response()->json(['status'=>0,'Message'=>$errors]);
       }
       else{

          $user=new Authentication();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->phone=$request->phone;
          $user->password=bcrypt($request->password);
          $user->confirmpassword=bcrypt($request->confirmpassword);
          $user->verification_method=$request->verification_method;
          $user->is_verified=$request->is_verified;
          $user->save();
          return response()->json(['status'=>1,'message'=>'user added Successfuly']);

       }
    }

    public function editform($id)
    {
        $user=Authentication::where(['id'=>$id])->get();
        $users=json_decode(json_encode($user));
      return view('Admin/Users/edit',['users'=>$users[0]]);
    }

    public function edit(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'is_verified'=>'required',
            'verification_method'=>'required'
        ]);
        if($validator->fails())
        {
            $errors=json_decode(json_encode($validator->errors()));

            return response()->json(['status'=>0,'Message'=>$errors]);
        }
        else{
 Authentication::where(['id'=>$request->id])->update([
 'name'=>$request->name,
 'email'=>$request->email,
  'phone'=>$request->phone,
  'is_verified'=>$request->is_verified,
  'verification_method'=>$request->verification_method]);
  return response()->json(['message'=>'user updated successfully']);
        }



    }
    public function delete(Request $request)
    {
        if($request->id)
        {
            Authentication::where(['id'=>$request->id])->delete();
        }
    }
}
