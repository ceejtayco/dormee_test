<?php

namespace App\Http\Controllers;
use App\Dorm;
use App\Attribute;
use App\SpecificDormFilter;
use App\DormAttribute;
use App\UserDormAttributeRating;
use App\DormPhoto;
use App\UserDormReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;
class DormController extends Controller
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
        //
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
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'business_permit' => 'required|string|min:6',
            'description' => 'required|string|max:255',
            'price' => 'required|max:255',
            'curfew' => 'required|string|max:255',
            'rooms' => 'required',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'photo' => 'required',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $dorm = new Dorm();
        $dorm->landlord_id=$request->input('landlord_id');
        $dorm->status=0;
        $dorm->name=Input::get('name');
        $dorm->genders=$request->input('gender');
        $dorm->curfew=$request->input('curfew');
        $dorm->rooms=$request->input('rooms');
        $dorm->address=$request->input('address');
        $dorm->business_permit=$request->input('business_permit');
        $dorm->description=$request->input('description');
        $dorm->price=$request->input('price');
        $dorm->lat = $request->input('lat');
        $dorm->lng = $request->input('lat');
       $dorm->save();

       foreach ($request->input('filters') as $filter) {
           $dorm_filter = new SpecificDormFilter();
           $dorm_filter->dorm_id = $dorm->id;
           $dorm_filter->filter_id = $filter;
           $dorm_filter->save();
       }
       
       $sliders = array("slider1", "slider2", "slider3", "slider4", "slider5");
       $attribute_id = 1;
       $i = 0;
       foreach($sliders as $slider) {
            $dorm_attribute = new DormAttribute();
            $dorm_attribute->dorm_id = $dorm->id;
            $dorm_attribute->attribute_id = $attribute_id;
            $dorm_attribute->save();
            $dorm_attribute_rating = new UserDormAttributeRating();
            $dorm_attribute_rating->user_id = $request->input('landlord_id');
            $dorm_attribute_rating->dorm_attribute_id = $dorm_attribute->id;
            $dorm_attribute_rating->rating = Input::get($sliders[$i]);
            $dorm_attribute_rating->save();
            $attribute_id++;
            $i++;
       }


        $dorm_photo = new DormPhoto();
        $dorm_photo->dorm_id = $dorm->id;
        $image = $request->file('photo');
        $name = date('Y-m-d') . "-" . $image->getClientOriginalName();
        $save_path = public_path() . '\images\dorms\\' . $name;
        Image::make($image->getRealPath())->resize(200, 200)->save($save_path);
        $dorm_photo->photo='public\images\dorms'. '\\' . $name;
        $dorm_photo->save();

        return redirect()->route('add_dorm')->with([
            'success' => true,
            'username' => Input::get('username')
        ]);
    }

    public function verify($id)
    {
        Dorm::find($id)->update(["status" => 1]);
        return view('pages.dorms.show')->with(["dorm" => Dorm::find($id)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.dorms.show')->with(["dorm" => Dorm::find($id)]);
    }

    public function browse()
    {

        return view('pages.dorms.browse')->with(["dorm" => Dorm::all()->where("status", 1)]);
    }

       public function review (Request $request)
    {

        $dorm_review = new UserDormReview();
        $dorm_review->user_id = $request->input('uid');
        $dorm_review->dorm_id = $request->input('did');
        $dorm_review->review = $request->input('review');
        $dorm_review->save();
        return view('pages.dorms.show')->with(["dorm" => Dorm::find($request->input('did'))]);
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
