<?php

namespace App\Shop\PaymentMethods\Stripe;

use App\Shop\Checkout\CheckoutRepository;
use App\Shop\Couriers\Courier;
use App\Shop\Couriers\Repositories\CourierRepository;
use App\Shop\Customers\Customer;
use App\Shop\Orders\Order;
use App\Shop\Customers\Repositories\CustomerRepository;
use App\Shop\PaymentMethods\Stripe\Exceptions\StripeChargingErrorException;
use Gloudemans\Shoppingcart\Facades\Cart;
use Ramsey\Uuid\Uuid;
use Stripe\Charge;

class StripeRepository
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * StripeRepository constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @param array $data Cart data
     * @param $total float Total items in the cart
     * @param $tax float The tax applied to the cart
     * @return Charge Stripe charge object
     * @throws StripeChargingErrorException
     */
    public function execute($payStatus, array $data, $total, $tax) 
    {
        try {
			$courier='';
			$shipping = intval($payStatus['data']['metadata']['shippingFee']);
			if($shipping!=0){
				$courier  = courier::where('is_free', 0)->first();
			}else{
				$courier  = courier::where('is_free', 1)->first();				
			}
			//return $shipping;
            $totalComputed =  intval($total) + $shipping;
			echo $totalComputed;
			$uuid = strtoupper(explode('-', Uuid::uuid4()->toString())[0]);
			$order = order::where('reference', 'LIKE', '%'.$uuid.'%')->first();
			if(!is_null($order)){
			$uuid = strtoupper(explode('-', Uuid::uuid4()->toString())[0]);
			}
         //   $customerRepo = new CustomerRepository($this->customer);
            //$options['source'] = $data['stripeToken'];
            //$options['currency'] = config('cart.currency');

          //  if ($charge = $customerRepo->charge($totalComputed, $options)) {
                $checkoutRepo = new CheckoutRepository;
                $checkoutRepo->buildCheckoutItems([
                    'reference' => $uuid, //Uuid::uuid4()->toString(),
                    'courier_id' => $courier->id,
					'courier'=> $courier->name,
                    'customer_id' => $this->customer->id,
                    'address_id' => $payStatus['data']['metadata']['selected_address'],
                    'order_status_id' => 1,
                    'payment' => strtolower(config('paystack.name')),
                    'discounts' => 0,
                    'total_products' => $total,
                    'total' => $totalComputed,
                    'total_paid' => intval($payStatus['data']['amount'])/100,
					'total_shipping'=>$shipping,
                    'tax' => $tax
                ]);

                Cart::destroy();
           // }

         //   return $checkoutRepo;
        } catch (\Exception $e) {
            throw new StripeChargingErrorException($e);
        }
    }
}
