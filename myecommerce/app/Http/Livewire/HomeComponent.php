<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    use withPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.home-component',['products'=>$products])->layout('layouts.base');
    }

    public function store($id,$name,$price)
    {
        Cart::add($id,$name,1,$price)->associate('App\Models\Product');
        session()->flash('success_message','Product added to cart');
        return redirect()->route('product.cart');
    }
}
