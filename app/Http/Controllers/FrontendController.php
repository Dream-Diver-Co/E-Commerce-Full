<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Summer;
use App\Models\Winter;
use App\Models\Admincontact;
use App\Models\About;
use App\Models\Panjabi;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $summers = Summer::all();
        $winters = Winter::all();
        $heroes = Hero::all();
        return view('frontend.index', compact('heroes', 'summers','winters'));
    }


    public function about()
    {
        $abouts = About::all();
        return view('frontend.page.about', compact('abouts'));
    }

    public function contact()
    {
        $admincontacts = Admincontact::all();
        return view('frontend.page.contact', compact('admincontacts'));
    }


    public function shop()
    {
        return view('frontend.page.shop');
    }

    public function cart()
    {
        return view('frontend.page.cart');
    }

    public function checkout()
    {
        return view('frontend.page.checkout');
    }

    public function women()
    {
        return view('frontend.page.women');
    }

    public function baby()
    {
        return view('frontend.page.baby');
    }


    public function men()
    {
        return view('frontend.page.men');
    }

    public function men_blazer()
    {
        return view('frontend.page.men_blazer');
    }

    public function men_bottom()
    {
        return view('frontend.page.men_bottom');
    }

    public function men_casul_shirt()
    {
        return view('frontend.page.men_casul_shirt');
    }

    public function men_formal_shirt()
    {
        return view('frontend.page.men_formal_shirt');
    }

    public function men_panjabi()
    {
        $panjabis = Panjabi::all();
        return view('frontend.page.men_panjabi',compact('panjabis'));
    }

    public function men_polo()
    {
        return view('frontend.page.men_polo');
    }

    public function men_shoes()
    {
        return view('frontend.page.men_shoes');
    }

    public function men_t_shirt()
    {
        return view('frontend.page.men_t_shirt');
    }

    public function women_bag()
    {
        return view('frontend.page.women_bag');
    }

    public function women_bottom()
    {
        return view('frontend.page.women_bottom');
    }

    public function women_cosmetic()
    {
        return view('frontend.page.women_cosmetic');
    }

    public function women_kameez()
    {
        return view('frontend.page.women_kameez');
    }

    public function women_dress()
    {
        return view('frontend.page.women_dress');
    }

    public function women_shoes()
    {
        return view('frontend.page.women_shoes');
    }

    public function women_tops()
    {
        return view('frontend.page.women_tops');
    }

    public function juwalari()
    {
        return view('frontend.page.juwalari');
    }

    public function baby_strollers()
    {
        return view('frontend.page.baby_strollers');
    }

    public function baby_clothing()
    {
        return view('frontend.page.baby_clothing');
    }

    public function baby_foods()
    {
        return view('frontend.page.baby_foods');
    }

    public function baby_newborn()
    {
        return view('frontend.page.baby_newborn');
    }

    public function offer()
    {
        return view('frontend.page.offer');
    }
}
