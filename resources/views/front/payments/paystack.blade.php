<tr>
    <td>
        @if(isset($payment['name']))
            {{ ucwords($payment['name']) }}
        @else
            <p class="alert alert-danger">You need to have <strong>name</strong> key in your config</p>
        @endif
    </td>
    <td>
        @if(isset($payment['description']))
            {{ $payment['description'] }}
        @endif
    </td>
    <td>
        <form action="{{ route('checkout.execute') }}" method="post" class="pull-right">
            {{ csrf_field() }}
            <input type="hidden" name="payment" value="{{ config('paystack.name') }}">
            <input type="hidden" name="email" value="{{$customer->email}}"> {{-- required --}}
            <input type="hidden" name="shippingFee" value="">
			<input type="hidden" name="sel_addr" value="">
            <input type="hidden" name="amount" value=""> {{-- required in kobo --}}
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > 
			{{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <button type="submit" class="btn btn-success pull-right">Pay with {{ ucwords($payment['name']) }} <i class="fa fa-paypal"></i></button>
        </form>
    </td>
</tr>


@section('js')

    <script type="text/javascript">
	 $(document).ready(function(){		 
            let clicked = false;
			let totalElement = $('span#grandTotal');
				
            $('#sameDeliveryAddress').on('change', function () {
                clicked = !clicked;
                if (clicked) {
                    $('#sameDeliveryAddressRow').hide();
                } else {
                    $('#sameDeliveryAddressRow').show();
                }
            });

            let billingAddress = 'input[name="billing_address"]';
            $(billingAddress).on('change', function () {
                let chosenAddressId = $(this).val();
                $('.address_id').val(chosenAddressId);
                $('.delivery_address_id').val(chosenAddressId);
            });

            let deliveryAddress = 'input[name="delivery_address"]';
            $(deliveryAddress).on('change', function () {
                let chosenDeliveryAddressId = $(this).val();
				$.ajax({
  					type: 'GET',
					url: "/getaddr",
					dataType: 'JSON',
					beforeSend: function(xhr)
					{xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))},
					data: {
					"addr":chosenDeliveryAddressId,
					},                                                                                             
					error: function( xhr ){ 
					// alert("ERROR ON SUBMIT");
					console.log("error on submit"+xhr);
					},
					success: function( data ){ 
						//console.log(data);
						$("#maxinput").attr('data-fee', data.delivery_fee);
						$("#maxinput").val(data.delivery_fee);
						$("#maxrate").text(data.delivery_fee);
						$("#shippingFee").text("0.00");
						$("#maxinput").attr('data-fee', data.delivery_fee);
						let shippingFee = $("#shippingFee").text("0.00");
						let total = totalElement.data('total');
						let grandTotal =  parseFloat(total);
						totalElement.html(grandTotal.toFixed(2));
						$("#courier_row").show();
						if($("#maxinput").prop('checked')){
							 $("#maxinput").prop('checked', false);	
							 $("input[name='rate']").prop('checked', false);
						}else{
							 $("#maxinput").prop('checked', false);						
							 $("input[name='rate']").prop('checked', false);
						}
						$("#pay_row").hide();
					}
				}); 			
				
                $('.delivery_address_id').val(chosenDeliveryAddressId);
				$("input[name='sel_addr']").val(chosenDeliveryAddressId);
				console.log( chosenDeliveryAddressId);
            });
		/* 
		 $("body").on('hover, mouseover', '#paystack_btn', function(){
			 $("input[name='shippingFee']").val($("#shippingFee").text());
			 console.log("hovered");
			  console.log('selected address '+$("input[name='sel_addr']").val());
			  console.log('Shipping fee ' + $("input[name='shippingFee']").val());
			  console.log('Sub total ' + $("input[name='amount']").val());
		 });
				*/
		 
		 function setTotal(total, shippingCost) {
            let computed = +shippingCost + parseFloat(total);
            $('#total').html(computed.toFixed(2));
        }

        function setShippingFee(cost) {
            el = '#shippingFee';
            $(el).html(cost);
            $('#shippingFee').val(cost);
        }


		 
	 });
/*	
	function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_86d32aa1nV4l1da7120ce530f0b221c3cb97cbcc',
      email: 'hallitee_2005@yahoo.com',
      amount: 100000,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 100000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }  */
	/*
	console.log("stripe checkout initiated");
        function setTotal(total, shippingCost) {
            let computed = +shippingCost + parseFloat(total);
            $('#total').html(computed.toFixed(2));
        }

        function setShippingFee(cost) {
            el = '#shippingFee';
            $(el).html(cost);
            $('#shippingFee').val(cost);
        }

        function setCourierDetails(courierId) {
            $('.courier_id').val(courierId);
        }

        $(document).ready(function () {

            let clicked = false;

            $('#sameDeliveryAddress').on('change', function () {
                clicked = !clicked;
                if (clicked) {
                    $('#sameDeliveryAddressRow').show();
                } else {
                    $('#sameDeliveryAddressRow').hide();
                }
            });

            let billingAddress = 'input[name="billing_address"]';
            $(billingAddress).on('change', function () {
                let chosenAddressId = $(this).val();
                $('.address_id').val(chosenAddressId);
                $('.delivery_address_id').val(chosenAddressId);
            });

            let deliveryAddress = 'input[name="delivery_address"]';
            $(deliveryAddress).on('change', function () {
                let chosenDeliveryAddressId = $(this).val();
                $('.delivery_address_id').val(chosenDeliveryAddressId);
            });

            let courier = 'input[name="courier"]';
            $(courier).on('change', function () {
                let shippingCost = $(this).data('cost');
                let total = $('#total').data('total');

                setCourierDetails($(this).val());
                setShippingFee(shippingCost);
                setTotal(total, shippingCost);
            });

            if ($(courier).is(':checked')) {
                let shippingCost = $(courier + ':checked').data('cost');
                let courierId = $(courier + ':checked').val();
                let total = $('#total').data('total');

               console.log(setShippingFee(shippingCost));
               console.log( setCourierDetails(courierId));
               console.log( setTotal(total, shippingCost));
            }

            let handler = StripeCheckout.configure({
                key: "{{ config('stripe.key') }}",
                locale: 'auto',
                token: function(token) {
                    // You can access the token ID with `token.id`.
                    // Get the token ID to your server-side code for use.
                    console.log(token.id);
                    $('input[name="stripeToken"]').val(token.id);
                    $('#stripeForm').submit();
                }
            });

            document.getElementById('paywithstripe').addEventListener('click', function(e) {
                let total = parseFloat("{{ $total }}");
                let shipping = parseFloat($('#shippingFee').val());
                let amount = total + shipping;
                // Open Checkout with further options:
                handler.open({
                    name: "{{ config('stripe.name') }}",
                    description: "{{ config('stripe.description') }}",
                    currency: "{{ config('cart.currency') }}",
                    amount: amount * 100,
                    email: "{{ $customer->email }}"
                });
                e.preventDefault();
            });

            // Close Checkout on page navigation:
            window.addEventListener('popstate', function() {
                handler.close();
            });
        });
		*/
    </script>

@endsection