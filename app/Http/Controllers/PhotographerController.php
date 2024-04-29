<?php

namespace App\Http\Controllers;

use App\Models\photographer;
use Illuminate\Http\Request;
use App\Models\PhotographerOtherImage;


class PhotographerController extends Controller
{
    private $photographer;
    public function index()
    {
        return view('admin.photographer.index');
    }
    public function create( Request $request)
    {

        $this->photographer = photographer::newphotographer($request);
        PhotographerOtherImage::storePhotographerOtherImages($request->file('photographer_other_image'), $this->photographer->id);
        return back()->with('message', 'Photographer info create successfully.');

    }

    public function manage()
    {
        $photographers = photographer::orderBy('created_at', 'desc')->get();
        return view('admin.photographer.manage', compact('photographers'));
    }

    public function edit($id)
    {
        $photographer = photographer::find($id);
        return view('admin.photographer.edit', compact('photographer'));

    }

    public function update(Request $request, $id)
    {

        photographer::updatePhotographer($id,$request);
        if ($request->file('photographer_other_image'))
        {
            PhotographerOtherImage::updateOtherImage($request->file('photographer_other_image'), $id);
        }
        return redirect('/photographer/manage')->with('message','Photographer Updated Successfully');

    }

    public function delete($id)
    {
        photographer::deletePhotographer($id);
        return redirect('/photographer/manage')->with('message','Photographer Deleted Successfully');
    }
}
