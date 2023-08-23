<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddNhanvienRequest;
use App\Models\Nhanvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NhanvienController extends Controller
{
    public function index(Request $request)
    {
        $nhanvien = Nhanvien::paginate(3);
        if ($request->post() && $request->searchNhanvien) {
            $nhanvien = DB::table('nhanvien')
                ->where('ten', 'like', '%' . $request->searchNhanvien . '%')
                ->get();
//            if ($nhanvien) {
//                Session::flash('success', 'tìm thành công');
//            } else {
//                Session::flash('success', 'ko tồn tại nhân viên');
//                redirect()->route('list-nhanvien');
//            }
        }
        return view('nhanvien.list', compact('nhanvien'));
    }

    public function add(AddNhanvienRequest $request)
    {
        if ($request->isMethod('POST')) {
            $name = htmlspecialchars($request->input('name'));
            $params = $request->except('_token');
//            dd($params);
            $nhanvien = Nhanvien::create($params);
            if ($nhanvien) {
                Session::flash('success', 'thêm thành công');
                redirect()->route('list-nhanvien');

            }
        }
        return view('nhanvien.add');

    }

    public function edit(AddNhanvienRequest $request, $id)
    {
        $nhanvien = DB::table('nhanvien')->where('id', $id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $result = Nhanvien::where('id', $id)->update($params);
            if ($result) {
                Session::flash('success', 'sửa khách hàng thành công');
                //chuyển trang sau khi thành công
                return redirect()->route('edit-nhanvien', ['id' => $id]);
            }
        }
        return view('nhanvien.edit',compact('nhanvien'));
    }
}
