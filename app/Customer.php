<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function awal(){

        $customer = App\Customer::all();
        return $customer;
}
}
