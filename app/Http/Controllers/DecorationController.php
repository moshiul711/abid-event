<?php

namespace App\Http\Controllers;
use App\Models\Decoration;
use App\Models\OtherImage;
use Illuminate\Http\Request;

class DecorationController extends Controller
{
    private $decoration;
    public function index()
    {
        return view('admin.decoration.index');
    }
    public function create( Request $request)
    {

        $this->decoration = decoration::newdecoration($request);
        OtherImage::storeOtherImages($request->file('decoration_other_image'), $this->decoration->id);
        return back()->with('message', 'Decoration info create successfully.');

    }

    public function manage()
    {
        $decorations = Decoration::orderBy('created_at', 'desc')->get();
        return view('admin.decoration.manage', compact('decorations'));
    }

    public function edit($id)
    {
        $decoration = Decoration::find($id);
        return view('admin.decoration.edit', compact('decoration'));

    }

    public function update(Request $request, $id)
    {

        Decoration::updateDecoration($id,$request);
        if ($request->file('decoration_other_image'))
        {
            OtherImage::updateOtherImage($request->file('decoration_other_image'), $id);
        }
        return redirect('/decoration/manage')->with('message','Decoration Updated Successfully');

    }

    public function delete($id)
    {
        Decoration::deleteDecoration($id);
        return redirect('/decoration/manage')->with('message','Decoration Deleted Successfully');
    }
}
