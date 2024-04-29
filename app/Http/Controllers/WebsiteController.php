<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use App\Models\photographer;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\OtherImage;
use App\Models\CardOtherImage;
use App\Models\PhotographerOtherImage;
use App\Models\FoodOtherImage;
use App\Models\Venue;
use App\Models\Food;
use App\Http\Controllers\CardController;

class WebsiteController extends Controller
{
    private $card, $photographer, $venue, $decoration, $food, $cards, $photographers, $venues, $decorations, $foods;
    public function index(){
        return view('website.home.index');
    }
    public function weedingCard(){
        $this->cards = Card::all();
        return view('website.card.index',['cards'=>$this->cards]);
    }
    public function weedingDecoration(){
        $this->decorations = Decoration::all();
        return view('website.decoration.index',['decorations'=>$this->decorations]);

    }
    public function venue(){
        $this->venues = Venue::all();
        return view('website.venue.index',['venues'=>$this->venues]);

    }
    public function food(){
        $this->foods = Food::all();
        return view('website.food.index',['foods'=>$this->foods]);

    }
    public function photography(){
        $this->photographers = photographer::all();
        return view('website.photography.index',['photographers'=>$this->photographers]);

    }
    public function venueDetail($id){
        $this->venue = Venue::find($id);
        return view('website.detail.venuedetail',['venue'=>$this->venue]);
    }
    public function cardDetail($id){
        $this->card = Card::find($id);
        return view('website.detail.carddetail',['card'=>$this->card]);
    }
    public function decorationDetail($id){
        $this->decoration = Decoration::find($id);
        return view('website.detail.decorationdetail',['decoration'=>$this->decoration]);
    }
    public function photographerDetail($id){
        $this->photographer = photographer::find($id);
        return view('website.detail.photographerdetail',['photographer'=>$this->photographer]);
    }
    public function foodDetail($id){
        $this->food = Food::find($id);
        return view('website.detail.fooddetail',['food'=>$this->food]);
    }
}
