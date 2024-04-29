<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodOtherImage;

class FoodController extends Controller
{
    private $food;
    public function index()
    {
        return view('admin.food.index');
    }
    public function create( Request $request)
    {

        $this->food = food::newfood($request);
        FoodOtherImage::storeFoodOtherImages($request->file('food_other_image'), $this->food->id);
        return back()->with('message', 'Catering info create successfully.');

    }

    public function manage()
    {
        $foods = Food::orderBy('created_at', 'desc')->get();
        return view('admin.food.manage', compact('foods'));
    }

    public function edit($id)
    {
        $food = Food::find($id);
        return view('admin.food.edit', compact('food'));

    }

    public function update(Request $request, $id)
    {

        Food::updateFood($id,$request);
        if ($request->file('food_other_image'))
        {
            FoodOtherImage::updateOtherImage($request->file('food_other_image'), $id);
        }
        return redirect('/food/manage')->with('message','Catering Updated Successfully');

    }

    public function delete($id)
    {
        Food::deleteFood($id);
        return redirect('/food/manage')->with('message','Food Deleted Successfully');
    }
}
