<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MainController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'uname'   => 'required',
            'pw'  => 'required'
        ]);

        $user = DB::table('info_users')->where([
            ['username', '=', $request->uname],
            ['user_pw', '=', md5($request->pw)],
            ['status', '1']
        ])->first();

        if ($user) {
            $last_login = date("Y-m-d\TH:i:s\Z", strtotime(Carbon::now()));

            DB::table('info_users')
                ->where('id', $user->id)
                ->update([
                    'last_login' => $last_login
                ]);

            session(['f_id'     => $user->id]);
            session(['f_email'     => $user->email]);
            session(['f_currency'     => $user->currency]);
            session(['u_username'    => $user->username]);

            return "success";
        }
    }

    public function session()
    {
        session(['f_username'     => $_POST['username']]);
        session(['f_nick'     => $_POST['nick']]);
        session(['f_balance'     => $_POST['balance']]);
        session(['f_point'     => $_POST['point']]);
        session(['f_agent_id'     => $_POST['agent_id']]);
        session(['f_user_id'     => $_POST['user_id']]);
    }

    public function logout(Request $request)
    {
        if ($request->session()->has('f_username')) {
            $request->session()->flush();
            return redirect('/');
        }
    }
}
