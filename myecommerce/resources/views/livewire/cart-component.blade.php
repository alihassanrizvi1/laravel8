<div id="templatemo_main">    
    <div id="content">
        <h1>Shopping Cart</h1>
        @if(Session::has('success_message'))
            <div class="alert alert-success">
                <strong>Success</strong> {{Session::get('success_message')}}
            </div>
        @endif
        @if(Cart::count() > 0)
        <table width="680px" cellspacing="0" cellpadding="5">
            <tr bgcolor="#ddd">
                <th width="220" align="left">Image </th> 
                <th width="180" align="left">Description </th> 
                <th width="100" align="center">Quantity </th> 
                <th width="60" align="right">Price </th> 
                <th width="60" align="right">Total </th> 
                <th width="90"> </th>
            </tr>
            @foreach(Cart::content() as $item)
            <tr>
                <td><img src="{{ asset('public/images/product/') }}/{{$item->model->image}}" alt="{{$item->model->name}}" /></td> 
                <td>{{$item->model->name}}</td> 
                <td align="center"><input type="text" value="{{$item->qty}}" style="width: 20px; text-align: right" /> </td>
                <td align="right">${{$item->model->price}} </td> 
                <td align="right">${{$item->subtotal}} </td>
                <td align="center"> <a href="#">Remove</a> </td>
            </tr>

            @endforeach
            <tr>
                <td colspan="3"></td>
                <td align="right" style="background:#ddd; font-weight:bold"> Total </td>
                <td align="right" style="background:#ddd; font-weight:bold">${{Cart::subtotal()}} </td>
                <td style="background:#ddd; font-weight:bold"> </td>
            </tr>
        </table>
        @else
        <p>No Items</p>
        @endif
        <div style="float:right; width: 215px; margin-top: 20px;">
        <p><a href="/checkout">Proceed to checkout</a></p>
        <p><a href="/">Continue shopping</a></p>
        </div>
    </div> 
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->