<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'birthdate' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $user = new User();
        $user->user_type_id=(int)Input::get('user_type_id');
        $user->username=$request->input('username');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->first_name=$request->input('first_name');
        $user->last_name=$request->input('last_name');
        $user->gender=$request->input('gender');
        $user->occupation_id=(int)$request->input('occupation_id');
        $user->birthdate=$request->input('birthdate');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        $user->about=$request->input('about');
        $image = $request->file('photo');
        $name = date('Y-m-d') . "-" . $image->getClientOriginalName();
        $save_path = public_path() . '\images\users\\' . $name;
        Image::make($image->getRealPath())->resize(200, 200)->save($save_path);
        $user->photo='public\images\users'. '\\' . $name;
        $user->save();

        return redirect()->route('register')->with([
            'success' => true,
            'username' => Input::get('username')
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
