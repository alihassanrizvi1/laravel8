<div id="templatemo_main">
    <div id="content">
        <h1>{{$product->name}}</h1>
        <div class="content_half float_l">
        <a rel="lightbox[portfolio]" href="{{ asset('public/images/product/') }}/{{$product->image}}"><img src="{{ asset('public/images/product/') }}/{{$product->image}}" alt="Image 01" /></a>
        </div>
        <div class="content_half float_r">
            <table>
                <tr>
                    <td height="30" width="160">Price:</td>
                    <td>${{$product->price}}</td>
                </tr>
                <tr>
                    <td height="30">Model:</td>
                    <td>{{$product->sku}}</td>
                </tr>
                <tr><td height="30">Quantity</td><td><input type="text" placeholder="1" style="width: 20px; text-align: right" wire:model="quantity.{{$product->id}}"/></td></tr>
            </table>
            <div class="cleaner h20"></div>
            <a href="#" class="add_to_card" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})">Add to Cart</a>
        </div>
        <div class="cleaner h30"></div>
        
        <h5>Product Description</h5>
        <p>{{$product->description}}</p>
        <div class="cleaner h50"></div>
    </div> 
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->