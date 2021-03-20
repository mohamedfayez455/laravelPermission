<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:read_users'])->only('index');
        $this->middleware(['permission:create_users'])->only('create');
        $this->middleware(['permission:update_users'])->only('edit');
        $this->middleware(['permission:delete_users'])->only('destroy');

    }

    public function index(){

        return view('users.index' , ['users' => User::all()]);
    }

    public function create(){
        $models = ['users' , 'products' , 'clients' , 'orders'];
        $maps = ['read' , 'create' , 'update' , 'delete'];
        return view('users.create' , compact('models' , 'maps'));
    }

    public function store(Request $request){
        $request->validate([
           'name'=>'required|alpha',
           'email'=>'required|email',
           'password'=>'required|min:6|confirmed',
        ]);
        $data = $request->except('password' , 'password_confirmation', 'permissions');
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);
        session()->flash('success','Added Successfully');
        return redirect()->route('users.index');
    }

    public function edit(User $user){
        $models = ['users' , 'products' , 'clients' , 'orders'];
        $maps = ['read' , 'create' , 'update' , 'delete'];
        return view('users.edit' , compact('user') , compact('models' , 'maps'));
    }

    public function show(User $user){
        return view('users.show' , compact('user'));
    }

    public function update(Request $request , User $user){
        dd($request->all());
    }

    public function delete(User $user){
        $user->delete();
    }



}
