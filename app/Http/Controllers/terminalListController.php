<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class terminalListController extends Controller
{
    public function postCheckIfMallAccred (){
        $response = Http::withHeaders([
            'Authorization' => 'Basic bmVsc29mdDoxMjE1ODY=',
            'Content-Type' => 'application/json'
        ])->post('localhost:91/api/v1/posManagerApi/check_if_mall_accred', [
            "clientGroupId"=>"1209",
            "clientNetworkId"=>"10085",
            "clientBranchId"=>"16",
            "posType"=>"3",
            "terminalNo"=>"51"
        ]);
        $isMallAccred = str_replace('"', "", $response);
        $isMallAccred = $isMallAccred ? "true" : "false";
        
        $response2 = Http::withHeaders([
            'Authorization' => 'Basic bmVsc29mdDoxMjE1ODY=',
            'Content-Type' => 'application/json'
        ])->post('localhost:91/api/v1/posManagerApi/check_if_mall_accred', [
            "clientGroupId"=>"1209",
            "clientNetworkId"=>"10085",
            "clientBranchId"=>"16",
            "posType"=>"3",
            "terminalNo"=>"52"
        ]);
        $isMallAccred2 = str_replace('"', "", $response2);
        $isMallAccred2 = $isMallAccred2 ? "true" : "false";
        return view('terminalListView', compact('isMallAccred', 'isMallAccred2'));
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('POST', 'localhost:91/api/v1/posManagerApi/check_if_mall_accred');

        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
    }
}
