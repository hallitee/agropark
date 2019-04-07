<?php

namespace App\Shop\PaymentMethods\Stripe;

use App\Shop\Checkout\CheckoutRepository;
use App\Shop\Couriers\Courier;
use App\Shop\Couriers\Repositories\CourierRepository;
use App\Shop\Customers\Customer;
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

			$shipping = intval($payStatus['data']['metadata']['shippingFee']);
			return $shipping;
            $totalComputed =  intval($total) + $shipping;
			echo $totalComputed;
         //   $customerRepo = new CustomerRepository($this->customer);
            //$options['source'] = $data['stripeToken'];
            //$options['currency'] = config('cart.currency');

          //  if ($charge = $customerRepo->charge($totalComputed, $options)) {
                $checkoutRepo = new CheckoutRepository;
                $checkoutRepo->buildCheckoutItems([
                    'reference' => Uuid::uuid4()->toString(),
                    'courier_id' => 1,
                    'customer_id' => $this->customer->id,
                    'address_id' => $payStatus['data']['metadata']['selected_address'],
                    'order_status_id' => 1,
                    'payment' => strtolower(config('paystack.name')),
                    'discounts' => 0,
                    'total_products' => $total,
                    'total' => $totalComputed,
                    'total_paid' => intval($payStatus['data']['amount'])/100,
					'total_shpping'=>$shipping,
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
