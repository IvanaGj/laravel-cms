<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helper\ImageStore;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        if(!$settings) {
            return view('dashboard.settings.create');
        }
        $data = ['settings' => $settings];

        return view('dashboard.settings.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'        => 'required|max:255',
            'url'          => 'required',
            'email'        => 'required|unique:users|max:255',
            'description'  => 'required',
            'logo'         => 'required',
            'address'      => 'required',
            'phone'        => 'required',
            'twitter'      => 'required',
            'facebook'     => 'required',
            'skype'        => 'required',
            'linkedin'     => 'required',
            'youtube'      => 'required',
            'lat'          => 'required',
            'lng'          => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageObj = new ImageStore($request, 'settings', 'logo');
        $logo = $imageObj->imageStore();

        Setting::create([
            'title'       => $request->get('title'),
            'url'         => $request->get('url'),
            'email'       => $request->get('email'),
            'description' => $request->get('description'),
            'address'     => $request->get('address'),
            'phone'       => $request->get('phone'),
            'twitter'     => $request->get('twitter'),
            'facebook'    => $request->get('facebook'),
            'skype'       => $request->get('skype'),
            'linkedin'    => $request->get('linkedin'),
            'youtube'     => $request->get('youtube'),
            'logo'        => $logo,
        ]);

        return redirect()->route('settings.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::FindOrFail($id);
        $data = ['settings' => $settings];

        return view('dashboard.settings.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $settings = Setting::first();
        $input = $request->all();
        $settings->fill($input)->save();

        return redirect()->route('settings.index');
    }
}
