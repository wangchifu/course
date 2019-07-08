<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class SimulationController extends Controller
{

    public function index()
    {
        $users = User::orderBy('group_id')->paginate('30');
        $all_groups = config('course.all_groups');

        $data = [
            'users'=>$users,
            'all_groups'=>$all_groups,
        ];
        return view('sims.index',$data);
    }

    public function impersonate(User $user)
    {
        Auth::user()->impersonate($user);
        return redirect()->route('index');

    }

    public function impersonate_leave()
    {
        Auth::user()->leaveImpersonation();
        return redirect()->route('index');
    }

}
