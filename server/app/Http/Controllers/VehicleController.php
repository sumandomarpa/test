<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
  public function index()
  {
    $client = new Client();
    $res = $client->get(env('VEHICLES_API_URL'));
    return $res->getBody();
  }
}
