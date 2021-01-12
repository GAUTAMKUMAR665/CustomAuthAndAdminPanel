<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentication;

use Yajra\DataTables\Facades\DataTables;

class Userscontroller extends Controller
{
    public function data(Request $request)
    {
        $data=Authentication::select('*');
        if($request->ajax())
        {

            return DataTables::of($data)

            ->addIndexColumn()
            ->addColumn('action',function($row)
            {
                 //$btn="<a href='javascript:void(0)' class='view btn-info btn-sm'>View</a>";
                 $btn="<a href='javascript:void(0)' class='edit btn-primary btn-sm' onclick='editdata()' id='".$row->id."'>Edit</a>";
                 $btn=$btn."<a href='javascript:void(0)' class='delete btn-danger btn-sm' onclick='deletedata()' id='".$row->id."'>Delete</a>";

                 return $btn;
            })
            ->addColumn('extra',function($row)
            {
                 //$btn="<a href='javascript:void(0)' class='view btn-info btn-sm'>View</a>";
                 $btn="<a href='javascript:void(0)' class='edit btn-primary btn-sm' onclick='editdata(".$row->id.")' id='".$row->id."'>Edit</a>";
                 $btn=$btn."<a href='javascript:void(0)' class='delete btn-danger btn-sm' onclick='deletedata(".$row->id.")' id='".$row->id."'>Delete</a>";

                 return $btn;
            })
            ->rawColumns(['action','extra'])
            ->make(true);
        }
        return view('Admin.Users/users');
    }
}
