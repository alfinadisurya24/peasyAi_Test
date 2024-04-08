<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestingController extends Controller
{
    public function getDataUser() : string {
        try {
            $response = Http::get('https://randomuser.me/api/?results=20');
        } catch (\Throwable $th) {
            return 'Failed get data.';
        }

        return $response;
    }
}
