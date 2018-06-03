<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nike;
use App\Women;
use App\Kids;
class FrontEndController extends Controller
{
    public function items(){



    	return view('men')
        
    	->with('first_post',Nike::orderBy('created_at','desc')->first())
    	->with('second_post',Nike::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    	->with('third_post',Nike::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
    	->with('four_post',Nike::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
    	->with('five_post',Nike::orderBy('created_at','desc')->skip(4)->take(1)->get()->first())
    	->with('six_post',Nike::orderBy('created_at','desc')->skip(5)->take(1)->get()->first());




    }

    public function checkout($id){


    	return view('.checkout.checkout')->with('products',Nike::Find($id));
       // ->with('products',Women::find($id));

    }
    public function checkoutwomen($id){

return view('checkout.checkoutwomen')->with('womenproduct',Women::Find($id));




    }
    public function checkoutkids($id){




        return view('checkout.checkoutkids')->with('kidsproduct',Kids::find($id));
        
    }
    public function women(){


        return view('women');
    }
    public function womenitems(){

return view('women')

->with('first_post',Women::orderBy('created_at','desc')->first())
    ->with('second_post',Women::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post',Women::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('four_post',Women::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
        ->with('five_post',Women::orderBy('created_at','desc')->skip(4)->take(1)->get()->first())
        ->with('six_post',Women::orderBy('created_at','desc')->skip(5)->take(1)->get()->first());

    }
    public function kidsitems(){


return view('kids')

->with('first_post',Kids::orderBy('created_at','desc')->first())
    ->with('second_post',Kids::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post',Kids::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('four_post',Kids::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
        ->with('five_post',Kids::orderBy('created_at','desc')->skip(4)->take(1)->get()->first())
        ->with('six_post',Kids::orderBy('created_at','desc')->skip(5)->take(1)->get()->first());


    }

}
