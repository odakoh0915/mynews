<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//以下を追記する事で指定しModelが使用できる
use App\Profile;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profiles;
        $form = $request->all();
        unset($form['_token']);
        $profile->fill($form)->save();
        
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        //Profile Modelからデータを取得する
        $profile = Profiles::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit');
    }

    public function update()
    {
        $this->validate($request, Profiles::$rules);
        $profile = Profiles::find($request->id);
        $profile_form = $request->all();
        unset($profile_form['_token']);
        $profile->fill($profile_form)->save();
        
        return redirect('admin/profile/edit');
    }
}
