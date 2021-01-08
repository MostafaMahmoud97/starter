<?php

namespace App\Http\Controllers\Offers;


use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getOffers(){
        return Offer::select('id','name')->get();
    }

    public function create(){
        return view('Offers.offer');
    }

    public function store(OfferRequest $request){

        /*
        $rules =[
            'name'=>'required|max:100|unique:offers,name',
            'price'=>'required|numeric',
            'detail'=>'required'
        ];

        $messages =[
          'name.required' => __("messages.Offer Name is Required"),
          'name.max'=> __('messages.Offer Length must be 100 Char'),
          'name.unique' => __('messages.Offer Name must be Unique'),
          'price.required'=> __('messages.Offer Price is Required'),
          'price.numeric'=> __('messages.Offer Price must be Numeric'),
          'detail.required'=> __('messages.Offer Detail is Required')
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        */

        Offer::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'detail' => $request->detail
            ]
        );

        return redirect()->back()->with(['success'=>'this Offer is Added']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
