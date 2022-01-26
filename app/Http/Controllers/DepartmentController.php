<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepartmentController extends Controller
{
    public function create(Request $req)
    {
        $req->validate([
            'txt-code' => 'required | max:10',
            'txt-name' => 'required | min:3'
        ]);
        $validator = $req->input();
        $status = DB::table('departments')->insert([
            'code'  => $validator['txt-code'],
            'name'  => $validator['txt-name']
        ]); 
        return $status;
    }

    public function getList()
    {
        $list = DB::table('departments')->get('*');
        return view('department.list', ['data' => $list]);
    }

    public function getInfoById($id)
    {
        $info = DB::table('departments')->find($id);
        return view('department.update', ['data' => $info]);
    }

    public function updateInfoById(Request $req, $id)
    {
        $status = DB::table('departments')
                    ->where('id', $id)
                    ->update([
                        'name'       => $req['txt-name'],
                        'created_at' => $req['create_at']
                    ]);
        return redirect('0/1/2');
                
    }
}
