<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $group_id = ($request->input('group_id'))?$request->input('group_id'):'3';
        $groups = config('course.groups');

        $users = User::where('group_id',$group_id)
            ->orderBy('disable')
            ->get();

        $data = [
            'group_id'=>$group_id,
            'groups'=>$groups,
            'users'=>$users,
        ];
        return view('users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group_id)
    {
        $groups = config('course.groups');
        $data = [
            'group_id'=>$group_id,
            'groups'=>$groups,
        ];
        return view('users.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|regex:/^[a-zA-Z]{1}/|min:4|unique:users,username',
        ]);

        $att['username'] = $request->input('username');
        $att['name'] = $request->input('name');
        $att['title'] = $request->input('title');
        $att['email'] = $request->input('email');
        $att['password'] = bcrypt(env('DEFAULT_PWD'));
        $att['group_id'] = $request->input('group_id');
        $att['login_type'] = "local";

        User::create($att);

        return redirect()->route('users.index',['group_id'=>$att['group_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $groups = config('course.groups');

        $data = [
            'user'=>$user,
            'groups'=>$groups,
        ];
        return view('users.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $att['name'] = $request->input('name');
        $att['title'] = $request->input('title');
        $att['email'] = $request->input('email');

        $user->update($att);

        return redirect()->route('users.index',['group_id'=>$user->group_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable(User $user)
    {
        $att['disable'] = 1;
        $user->update($att);
        return redirect()->route('users.index',['group_id'=>$user->group_id]);
    }

    public function able(User $user)
    {
        $att['disable'] = null;
        $user->update($att);
        return redirect()->route('users.index',['group_id'=>$user->group_id]);
    }

    public function reset(User $user)
    {
        $att['password'] = bcrypt(env('DEFAULT_PWD'));
        $user->update($att);
        return redirect()->route('users.index');
    }
}
