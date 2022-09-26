<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
     public function payment(Request $request)
    {
        $request_params = array (
          	'METHOD' => 'DoDirectPayment',
          	'USER' => 'laracode101_api1.gmail.com',
          	'PWD' => 'BQJBSMHVP8WCEETS',
          	'SIGNATURE' => 'AyVuUcpetZUWCXV.EHq.qRhxEb6.AChQnxfoM9w6UJXXRBh2cH1GUawh',
          	// 'VERSION' => '85.0',
          	// 'PAYMENTACTION' => 'Sale',
          	// 'IPADDRESS' => '127.0.0.1',
          	// 'CREDITCARDTYPE' => 'Visa',
          	// 'ACCT' => '4032032452071167',
          	// 'EXPDATE' => '072023',
          	// 'CVV2' => '123',
          	// 'FIRSTNAME' => 'Yang',
          	// 'LASTNAME' => 'Ling',
          	// 'STREET' => '1 Main St',
          	// 'CITY' => 'San Jose',
          	// 'STATE' => 'CA',
          	// 'COUNTRYCODE' => 'US',
          	// 'ZIP' => '95131',
          	// 'AMT' => '100.00',
          	// 'CURRENCYCODE' => 'USD',
          	// 'DESC' => 'Testing Payments Pro'
       );     
     
       $nvp_string = '';     
       foreach($request_params as $var=>$val)
       {
          $nvp_string .= '&'.$var.'='.urlencode($val);
       }
     
       	$curl = curl_init();     
       	curl_setopt($curl, CURLOPT_VERBOSE, 0);     
       	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);     
       	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);     
       	curl_setopt($curl, CURLOPT_TIMEOUT, 30);     
       	curl_setopt($curl, CURLOPT_URL, 'https://api-3t.sandbox.paypal.com/nvp');     
       	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);     
       	curl_setopt($curl, CURLOPT_POSTFIELDS, $nvp_string); 

       	$result = curl_exec($curl);     
       	curl_close($curl);   

       	$data = $this->NVPToArray($result);

       	if($data['ACK'] == 'Success') {
       		# Database integration...
       		echo "Your payment was processed success.";
       	} if ($data['ACK'] == 'Failure') {
       		# Database integration...
       		echo "Your payment was declined/fail.";
       	} else {
       		echo "Something went wront please try again letter.";
       	}
    }

    public function  NVPToArray($NVPString)
    {
       $proArray = array();
       while(strlen($NVPString)) {
            // key
            $keypos= strpos($NVPString,'=');
            $keyval = substr($NVPString,0,$keypos);
            //value
            $valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
            $valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);

            $proArray[$keyval] = urldecode($valval);
            $NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
        }
        return $proArray;
    }

}
