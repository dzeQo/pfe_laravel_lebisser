<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Comment;

class AdminController extends Controller
{
    //login view 
    public function login(){
        return view('backend.login');
    }

    // submit login 

    public function submit_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $uCheck=Admin::where(['username'=>$request->username , 'password'=>$request->password])->count();
        if($uCheck>0){
            $adminData = Admin::where(['username'=>$request->username , 'password'=>$request->password])->first();
            session(['admindata'=>$adminData]);
                return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('error' , 'Invalid username or password !!');
        }
    }

    public function dashboard(){
        return view('backend.dashboard');
    }

    function all_comments(){
        $data=Comment::all();
        return view('backend.comments.index',['data'=>$data]);
    }

    public function edit($id)
    {
        $data=Comment::find($id);
        return view('backend.comments.update' , [ 'data'=>$data ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status'=>'required'
        ]);
        $cmnt=Comment::find($id);
        $cmnt->status=$request->status;
        $cmnt->save();
        return redirect('admin/comments/'.$id.'/edit')->with('success' , 'comment status  has been updated successfully !!');
    }
    public function delete_comment($id)
    {
        Comment::where('id',$id)->delete();
        return redirect('admin/comment');
    }


    public function logout(){
        session()->forget(['admindata']);
        return redirect('admin/login');
    }
}
