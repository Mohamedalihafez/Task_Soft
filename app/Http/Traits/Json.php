<?php

namespace App\Http\Traits;


trait Json {

    public function result($status_code ,$payload)
    {
        return ['status_code' =>$status_code, 'payload' => $payload];
    }

}