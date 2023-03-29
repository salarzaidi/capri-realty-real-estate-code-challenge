<?php
namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

trait Users {

    public function getData(){
        if (!Cache::has('users')){
            $this->refresh();
        }
        $data = Cache::get('users');
        return $data;
    }

    public function refresh(){
        $data = $this->getData();
        Cache::put('users',$data,now()->addHour(1));
        return $data;
    }

    public function getLiveData(){
        $response = Http::get("https://cspf-dev-challenge.herokuapp.com/");
        if (!$response->ok()){
            return [];
        }

        $data = $response->object();
        return $data;
    }
}
