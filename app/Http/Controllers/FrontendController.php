<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use App\Models\Summer;
use App\Models\Winter;
use App\Models\Admincontact;
use App\Models\About;
use App\Models\Panjabi;
use App\Models\Cshirt;
use App\Models\Fshirt;
use App\Models\Tshirt;
use App\Models\Polo;
use App\Models\Menpent;
use App\Models\Blazer;
use App\Models\Menshoe;
use App\Models\Bag;
use App\Models\Juwalari;
use App\Models\Cosmetic;
use App\Models\Dresse;
use App\Models\Kameez;
use App\Models\Womenpent;
use App\Models\Womenshoe;
use App\Models\Womentop;
use App\Models\Clothing;
use App\Models\Food;
use App\Models\Newborn;
use App\Models\Stroller;
use App\Models\Category;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(12);
        $summers = Summer::all();
        $winters = Winter::all();
        $heroes = Hero::all();
        return view('frontend.index', compact('heroes', 'summers','winters','categories'));
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
        $blazers = Blazer::paginate(8);
        return view('frontend.page.men.men_blazer',compact('blazers'));
    }

    public function men_bottom()
    {
        $menpents = Menpent::paginate(8);
        return view('frontend.page.men.men_bottom',compact('menpents'));
    }

    public function men_casul_shirt()
    {
        $cshirts = Cshirt::all();
        return view('frontend.page.men.men_casul_shirt',compact('cshirts'));
    }

    public function men_formal_shirt()
    {
        $fshirts = Fshirt::paginate(8);
        return view('frontend.page.men.men_formal_shirt',compact('fshirts'));
    }

    public function men_panjabi()
    {
        $panjabis = Panjabi::paginate(8); // Show 8 products per page
        return view('frontend.page.men.men_panjabi', compact('panjabis'));
    }


    public function men_polo()
    {
        $polos = Polo::paginate(8);
        return view('frontend.page.men.men_polo',compact('polos'));
    }

    public function men_shoes()
    {
        $menshoes = Menshoe::paginate(8);
        return view('frontend.page.men.men_shoes',compact('menshoes'));
    }

    public function men_t_shirt()
    {
        $tshirts = Tshirt::paginate(8);
        return view('frontend.page.men.men_t_shirt',compact('tshirts'));
    }

    public function women_bag()
    {
        $bags = Bag::paginate(8);
        return view('frontend.page.women.women_bag',compact('bags'));
    }

    public function women_bottom()
    {
        $womenpents = Womenpent::paginate(8);
        return view('frontend.page.women.women_bottom',compact('womenpents'));
    }

    public function women_cosmetic()
    {
        $cosmetics = Cosmetic::paginate(8);
        return view('frontend.page.women.women_cosmetic',compact('cosmetics'));
    }

    public function women_kameez()
    {
        $kameezs = Kameez::paginate(8);
        return view('frontend.page.women.women_kameez',compact('kameezs'));
    }

    public function women_dress()
    {
        $dresses = Dresse::paginate(8);
        return view('frontend.page.women.women_dress',compact('dresses'));
    }

    public function women_shoes()
    {
        $womenshoes = Womenshoe::paginate(8);
        return view('frontend.page.women.women_shoes',compact('womenshoes'));
    }

    public function women_tops()
    {
        $womentops = Womentop::paginate(8);
        return view('frontend.page.women.women_tops',compact('womentops'));
    }

    public function juwalari()
    {
        $juwalaris = Juwalari::paginate(8);
        return view('frontend.page.women.juwalari',compact('juwalaris'));
    }

    public function baby_strollers()
    {
        $strollers = Stroller::paginate(8);
        return view('frontend.page.baby.baby_strollers',compact('strollers'));
    }

    public function baby_clothing()
    {
        $clothings = Clothing::paginate();
        return view('frontend.page.baby.baby_clothing',compact('clothings'));
    }

    public function baby_foods()
    {
        $foods = Food::paginate(8);
        return view('frontend.page.baby.baby_foods',compact('foods'));
    }

    public function baby_newborn()
    {
        $newborns = Newborn::paginate(8);
        return view('frontend.page.baby.baby_newborn',compact('newborns'));
    }

    public function offer()
    {
        return view('frontend.page.offer');
    }


    // public function product_details($id)
    // {
    //     // Check if the product is a Punjabi
    //     $product = Panjabi::find($id);

    //     // If not found, check if it's a Casual Shirt
    //     if (!$product) {
    //         $product = Cshirt::find($id);
    //     }

    //     // If still not found, abort with 404
    //     if (!$product) {
    //         abort(404);
    //     }

    //     return view('frontend.page.product_details', compact('product'));
    // }


}
