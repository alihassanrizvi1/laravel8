<div id="templatemo_main">
    <div id="content" class="float_l">
        <h1>New Products</h1>
        @foreach ($products as $product)
        <div class="product_box">
            <a href="{{route('product.details',['sku'=>$product->sku])}}"><img src="{{ asset('public/images/product/') }}/{{$product->image}}" alt="Image 01" /></a>
            <h3>{{ $product->name }}</h3>
            <p class="product_price">$ {{ $product->price }}</p>
            <a href="#" class="add_to_card" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})">Add to Cart</a>
            <a href="{{route('product.details',['sku'=>$product->sku])}}" class="detail">Detail</a>
        </div>
        @endforeach
    </div> 
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->