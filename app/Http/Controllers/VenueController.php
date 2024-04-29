<?php

namespace App\Http\Controllers;
use App\Models\Venue;
use Illuminate\Http\Request;
use App\Models\VenueOtherImage;


class VenueController extends Controller
{
    private $venue;
    public function index()
    {
        return view('admin.venue.index');
    }
    public function create( Request $request)
    {

        $this->venue = venue::newvenue($request);
        VenueOtherImage::storeVenueOtherImages($request->file('venue_other_image'), $this->venue->id);
        return back()->with('message', 'Venue info create successfully.');

    }

    public function manage()
    {
        $venues = Venue::orderBy('created_at', 'desc')->get();
        return view('admin.venue.manage', compact('venues'));
    }

    public function edit($id)
    {
        $venue = Venue::find($id);
        return view('admin.venue.edit', compact('venue'));

    }

    public function update(Request $request, $id)
    {

        Venue::updateVenue($id,$request);
        if ($request->file('venue_other_image'))
        {
            VenueOtherImage::updateOtherImage($request->file('venue_other_image'), $id);
        }
        return redirect('/venue/manage')->with('message','Venue Updated Successfully');

    }

    public function delete($id)
    {
        Venue::deleteVenue($id);
        return redirect('/venue/manage')->with('message','Venue Deleted Successfully');
    }
}
