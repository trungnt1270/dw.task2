<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodolistController extends BaseController
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);
        $task = new todolist();
        $task->name = $request->name;
        $task->details = $request->details;
        $task->save();

        return Redirect::route('home');
    }


    public function read($id)
    {
        // Tìm đến đối tượng muốn update
        //dd($id);
        $task = todolist::findOrFail($id);

        // điều hướng đến view edit và truyền sang dữ liệu về task muốn sửa đổi
        return view('read', compact('task'));
    }

    public function edit($id)
    {
        // Tìm đến đối tượng muốn update
        //dd($id);
        $task = todolist::findOrFail($id);

        // điều hướng đến view edit và truyền sang dữ liệu về task muốn sửa đổi
        return view('edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        // Tìm đến đối tượng muốn update
        //$task = todolist::findOrFail($id);

        // gán dữ liệu gửi lên vào biến data
        //$data = $request->all();
        // dd($data);

        $task = todolist::find($id);
        $task->name = $request->name;
        $task->details = $request->details;
        $task->save();
        // Update user
        //todolist::where('id', $id)->update($request->all());
        //echo "success update task";
        return Redirect::route('home');
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $task = todolist::findOrFail($id);

        $task->delete();
        return Redirect::route('home');
    }

}
