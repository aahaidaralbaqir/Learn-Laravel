<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Auth;
use Illuminate\Http\Request;

class MailistController extends Controller
{

    private $api_key = '6a91bb4f5730209a9ebe8cb8d1d5825d-f7910792-d10e4c13';
    private $address = 'mailist@sandbox6c39582c14324a69981309253e698262.mailgun.org';
    /*
    * @method get
    * @return void
    */
    public function index()
    {
        $user = Auth::user();
        return view('mail.index');
    }

    /*
    * @method send
    * @param user and status
    * @return response
    */

    private function toggleSubscribe($user,$status){
      $client = new Client();
      $res = $client->post('https://api.mailgun.net/v3/lists/'.$this->address.'/members',[
        'auth' => [
          'api', $this->api_key
        ],
        'form_params' => [
          'subscribed' => $status,
          'address' => $user->email,
          'name' => $user->name,
          'upsert' => 'yes'
        ]
      ]);
      return $res->getBody()->getContents();
    }

    /*
    * @method send
    * @param Request
    * @return void
    */


    public function store(Request $request)
    {
        $user = Auth::user();
        $subscribed  = $user->mailist;
        $res = 'nothing';
        // subscribe
        if($request->mailist == 'subscibed' && $subscribed != 1) {
          $user->mailist = 1;
          $user->save();
          $res = $this->toggleSubscribe($user,'yes');
        }

        //unsbscribe
        if($request->mailist != 'subscibed' && $subscribed == 1) {
          $user->mailist = 0;
          $user->save();
          $res = $this->toggleSubscribe($user,'no') ;
        }
        dd($res);
    }
}
