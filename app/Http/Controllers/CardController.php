<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardOtherImage;
use Illuminate\Http\Request;

class CardController extends Controller
{
    private $card;
    public function index()
    {
        return view('admin.card.index');
    }
    public function create( Request $request)
    {

        $this->card = card::newcard($request);
        CardOtherImage::storeCardOtherImages($request->file('card_other_image'), $this->card->id);
        return back()->with('message', 'Card info create successfully.');

    }

    public function manage()
    {
        $cards = Card::orderBy('created_at', 'desc')->get();
        return view('admin.card.manage', compact('cards'));
    }

    public function edit($id)
    {
        $card = Card::find($id);
        return view('admin.card.edit', compact('card'));

    }

    public function update(Request $request, $id)
    {

        Card::updateCard($id,$request);
        if ($request->file('card_other_image'))
        {
            CardOtherImage::updateOtherImage($request->file('card_other_image'), $id);
        }
        return redirect('/card/manage')->with('message','Card Updated Successfully');

    }

    public function delete($id)
    {
        Card::deleteCard($id);
        return redirect('/card/manage')->with('message','Card Deleted Successfully');
    }
}
