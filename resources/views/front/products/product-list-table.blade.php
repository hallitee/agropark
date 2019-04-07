@if(!$products->isEmpty())
    <table class="table table-striped">
        <thead>
        <th class="col-md-2 col-lg-2">Cover</th>
        <th class="col-md-2 col-lg-5">Name</th>
        <th class="col-md-2 col-lg-2">Quantity</th>
        <th class="col-md-2 col-lg-1"></th>
        <th class="col-md-2 col-lg-1">Price</th>
		<th class="col-md-2 col-lg-1">Total</th>
        </thead>
        <tfoot>
        <tr>
            <td class="bg-warning">Subtotal</td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
			<td class="bg-warning"></td>
            <td class="bg-warning">&#8358;{{ number_format($subtotal, 2, '.', ',') }}</td>
        </tr>
        <tr>
            <td class="bg-warning">Shipping</td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
			 <td class="bg-warning"></td>
            <td class="bg-warning">&#8358; <span id="shippingFee">{{ number_format(0, 2) }}</span></td>
        </tr>
        <tr>
            <td class="bg-warning">Tax</td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
            <td class="bg-warning"></td>
			 <td class="bg-warning"></td>
            <td class="bg-warning">&#8358; {{ number_format($tax, 2) }}</td>
        </tr>
        <tr>
            <td class="bg-success">Total</td>
            <td class="bg-success"></td>
            <td class="bg-success"></td>
            <td class="bg-success"></td>
			  <td class="bg-success"></td>
            <td class="bg-success">&#8358; <span id="grandTotal" data-total="{{ $total }}">{{ number_format($total, 2, '.', ',') }}</span></td>
        </tr>
        </tfoot>
        <tbody>
        @foreach($cartItems as $cartItem)
            <tr>
                <td>
                    <a href="{{ route('front.get.product', [$cartItem->product->slug]) }}" class="hover-border">
                        @if(isset($cartItem->cover))
                            <img src="{{$cartItem->cover}}" style="width:120px;height:120px" alt="{{ $cartItem->name }}" class="img-responsive img-thumbnail">
                        @else
                            <img src="https://placehold.it/120x120" style="width:120px;height:120px" alt="" class="img-responsive img-thumbnail">
                        @endif
                    </a>
                </td>
                <td>
                    <p>
                        <strong>{{ $cartItem->name }}</strong> <br />
                        @if($cartItem->options->has('combination'))
                            @foreach($cartItem->options->combination as $option)
                                <small class="label label-primary">{{$option['value']}}</small>
                            @endforeach
                        @endif
                    </p>
                    <hr>
                    <div class="product-description">
                        {!! $cartItem->product->description !!}
                    </div>
                </td>
                <td>
                    <form action="{{ route('cart.update', $cartItem->rowId) }}" class="form-inline" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="input-group">
                            <input type="text" name="quantity" value="{{ $cartItem->qty }}" class="form-control" />
                            <span class="input-group-btn"><button class="btn-sm btn-default">Update</button></span>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{ route('cart.destroy', $cartItem->rowId) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button onclick="return confirm('Are you sure?')" class="btn-sm btn-danger"><i class="fa fa-times"></i></button>
                    </form>
                </td>
                <td>&#8358;{{ number_format($cartItem->price, 2) }}</td>
				<td>&#8358;{{ number_format(($cartItem->qty*$cartItem->price),2)  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
<script type="text/javascript">
    $(document).ready(function () {
        let courierRadioBtn = $('input[name="rate"]');
        courierRadioBtn.click(function () {
            $('#shippingFee').text($(this).val());
			$("input[name='shippingFee']").val($(this).val());
            let totalElement = $('span#grandTotal');
            let shippingFee = $(this).val();
            let total = totalElement.data('total');
            let grandTotal = parseFloat(shippingFee) + parseFloat(total);
			$("input[name='amount']").val(total);
            totalElement.html(grandTotal.toFixed(2));
			$("#pay_row").show();
        });
    });
</script>