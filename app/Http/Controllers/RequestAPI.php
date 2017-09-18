<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestAPI extends Controller
{
    public function showPages(){
    	return view('pages.request');
    }
    public function requestToAPI(Request $request){

		$origin = $request->input('origin');
		$destination = $request->input('destination');
		$departure_date = $request->input('departure_date');
		$return_date = $request->input('return_date');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?apikey=9ayCYeVIATeYLQMsbp8zbU436IQvrloV&origin=".$origin."&destination=".$destination."&departure_date=".$departure_date."&return_date=".$return_date."&number_of_results=10",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET"
			// CURLOPT_HTTPHEADER => array(
			// 	"cache-control: no-cache",
			// 	"postman-token: 83bce5dc-c000-1cd7-ce1b-b925b0708edf"
			// 	),
			));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$pr = json_decode($response);
			/*print_r($result);*/
			$result = $pr->results;

			foreach ($result as $resultkey => $resultvalue) {
				$itineraries = $resultvalue->itineraries;
				foreach ($itineraries as $itinerarieskey => $itinerariesvalue) {
					$outbound = $itinerariesvalue->outbound;
					foreach ($outbound as $outboundkey => $outboundvalue) {
						echo "Departs at: ".$outboundvalue[0]->origin->airport."<br>";
						echo "Arrives at: ".$outboundvalue[0]->destination->airport."<br>";
						echo "-----------------<br>";
					}
					$inbound = $itinerariesvalue->inbound;
					foreach ($inbound as $inboundkey => $inboundvalue) {
						echo "Departs at: ".$inboundvalue[0]->origin->airport."<br>";
						echo "Arrives at: ".$inboundvalue[0]->destination->airport."<br>";
						echo "-----------------<br>";
					}
				}
				echo "PRICE: ".$resultvalue->fare->total_price."$<br>";
				echo "============================<br>";
			}
				/*<div class="card card-body card-return-body">
					<div class="row element-body">
						<div class="col-md-2">Airl</div>
						<div class="col-md-1">Ori</div>
						<div class="col-md-2">Time</div>
						<div class="col-md-1">Des</div>
						<div class="col-md-1">Nonstop</div>
						<div class="col-md-1">CLASS</div>
						<div class="col-md-3">Price</div>
						<div class="col-md-1">Button</div>
					</div>
					<div class="row element-body line-seperate-return">
						<div class="col-md-2">Airl</div>
						<div class="col-md-1">Ori</div>
						<div class="col-md-2">Time</div>
						<div class="col-md-1">Des</div>
						<div class="col-md-1">Nonstop</div>
						<div class="col-md-1">CLASS</div>
						<div class="col-md-3">Price</div>
						<div class="col-md-1">Button</div>
					</div>
				</div>*/


		}
	}
}

