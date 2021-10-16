<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class ShopComponent extends Component
{
    public $sku;
    public $quantity=[];

    public function mount($sku){
        $this->sku = $sku;
    }

    public function render()
    {
        $product = Product::where('sku',$this->sku)->first();
        return view('livewire.shop-component',['product'=>$product])->layout('layouts.base');
    }

    public function store($id,$name,$price)
    {
        $qty = $this->quantity[$id];
        Cart::add($id,$name,$qty,$price)->associate('App\Models\Product');
        session()->flash('success_message','Product added to cart');
        return redirect()->route('product.cart');
    }
}
