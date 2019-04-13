<?php

namespace App\Shop\Shipping\MaxShipping;


use App\Shop\Addresses\Address;

use App\Shop\Products\Product;
use App\Shop\Addresses\Repositories\Interfaces\AddressRepositoryInterface;
use App\Shop\Addresses\Transformations\AddressTransformable;
use App\Shop\Couriers\Courier;
use App\Shop\Couriers\Repositories\CourierRepository;
use App\Shop\Couriers\Repositories\Interfaces\CourierRepositoryInterface;
use App\Shop\Customers\Customer;
use App\Shop\Customers\Repositories\CustomerRepository;
use App\Shop\Customers\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Shop\Orders\Order;
use App\Shop\Orders\Repositories\Interfaces\OrderRepositoryInterface;
use App\Shop\Orders\Repositories\OrderRepository;
use App\Shop\OrderStatuses\OrderStatus;
use App\Shop\OrderStatuses\Repositories\Interfaces\OrderStatusRepositoryInterface;
use App\Shop\OrderStatuses\Repositories\OrderStatusRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class MaxShipping extends Controller
{
	protected $url,$serviceID, $priv, $pub, $addr;
	public function __construct(){
			$this->url = env('MAX_URL');
			$this->serviceID = env('MAX_SERVICEID');
			$this->priv = env('MAX_PRIV');
			$this->pub = env('MAX_PUB');
	}

    public function pricing_estimates($customer, $products, $addr=0){
									
									$customerRepo = new CustomerRepository($customer);
									//return $customerRepo->findAddresses()->first();
									if ($customerRepo->findAddresses()->count() > 0) {
										$deliveryAddress = $customerRepo->findAddresses()->first();			
									}		 
									if($addr==0){
									$deliveryAddress = $customerRepo->findAddresses()->first();
									$dAddress = $deliveryAddress->address_1.' '.$deliveryAddress->address_2.','.$deliveryAddress->city.' '.$deliveryAddress->state;		
									}
									else{
										$deliveryAddress = $customerRepo->findAddresses()->find($addr);
									$dAddress = $deliveryAddress->address_1.' '.$deliveryAddress->address_2.','.$deliveryAddress->city.' '.$deliveryAddress->state;	
										
									}

							$URL = env('MAX_URL')."pricings/estimate"; // "http://private-anon-a1778751b6-maxv1.apiary-mock.com";     https://private-anon-a1778751b6-maxv1.apiary-proxy.com/v1/
							$curl = curl_init($URL);

							curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
							curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
							$jsonData = ["origin"=>["lat"=>env('shop_lat'),"lng"=>env('shop_lng')],"destination"=>["lat"=>$deliveryAddress->lat,"lng"=>$deliveryAddress->lng],"service_id"=>env("MAX_SERVICEID")]; 

							$jsonDataEncoded = json_encode($jsonData);

							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonDataEncoded);

							curl_setopt($curl, CURLOPT_HTTPHEADER, array(
							  "Content-Type: application/json",
							  "Authorization: ".env('MAX_PUB')
							));
							$response=curl_exec($curl);
							return json_decode($response, true);
	}
	public function pickup_window($date){
		
							$curl = curl_init();

							curl_setopt_array($curl, array(
							  CURLOPT_URL => $this->url."orders/windows",
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => "",
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 30,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => "POST",
							  CURLOPT_POSTFIELDS => "{\"pickup_datetime\":\"".$date."\",\r\n\"service_id\":\"".$this->serviceID."\"}",
							  CURLOPT_HTTPHEADER => array(
								"Authorization: ".$this->priv,
								"Cache-Control: no-cache",
								"Content-Type: application/json",
								"Postman-Token: 83246eb3-7cc4-4e29-8fd7-214f7ad271ab"
							  ),
							));

							$response = curl_exec($curl);
							$err = curl_error($curl);

							curl_close($curl);

							if ($err) {
							  return "cURL Error #:" . $err;
							} else {
							  return json_decode($response);
							}
		
	}
	public function orderRequest(Request $req){
							$order = order::find($req->order);
							$cust = customer::find($req->cust);
							$customerRepo = new CustomerRepository($cust);
							$deliveryAddress = $customerRepo->findAddresses()->find($order->address_id);
							$dAddress = $deliveryAddress->address_1.' '.$deliveryAddress->address_2.','.$deliveryAddress->city.' '.$deliveryAddress->state;	
							$jsonData = ["origin"=>["lat"=>env('shop_lat'),"lng"=>env('shop_lng')],"destination"=>["lat"=>$deliveryAddress->lat,"lng"=>$deliveryAddress->lng],"pickup_window"=>["date"=>$req->date,"start"=>$req->start,"end"=>$req->end],"service_id"=>env("MAX_SERVICEID"),"sender_name"=>"Agropark Foods & Spices",
							"sender_phone"=>"+2348143490431",
							"recipient_name"=>$cust->name,
							"pickup_instruction"=>"Pick up at Agropark office - Akiode bus stop ojodu",
							"delivery_instruction"=>"Drop off at recipient",
							"is_cash"=>true,
							"payee"=>"sender"]; 
							$jsonDataEncoded = json_encode($jsonData);
							$curl = curl_init();

						  curl_setopt_array($curl, array(
						  CURLOPT_URL => env('MAX_URL')."orders",
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => "",
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 30,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => "POST",
						  CURLOPT_POSTFIELDS => $jsonDataEncoded,
						  CURLOPT_HTTPHEADER => array(
							"Authorization: sk_ac04f9da5efe5b599e7c9ae90db11c7548dd9ecdf281c62857bfede73e3d0126",
							"Cache-Control: no-cache",
							"Content-Type: application/json",
							"Postman-Token: 7ba1425f-31be-49af-90f6-abdf314540fd"
						  ),
						));

						$response = curl_exec($curl);
						$err = curl_error($curl);

						curl_close($curl);

						if ($err) {
						  echo "cURL Error #:" . $err;
						} else {
						  echo $response;
						}
		
	}
    
}
