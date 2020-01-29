<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class Customercontroller extends Controller
{
    public function awal(){
        $customer=Customer::all();
        return $customer;
}
public function show($id){
    $customer=Customer::find($id);
    return $customer;
}
public function delete($id){
    $customer=Customer::find($id);
    $customer->delete();
    return $customer;
}
public function store($code=null,$nama=null,$email=null, $country=null,$city=null,$address=null,$contact_number=null){
$customer=new Customer();
$customer->code=$code;
$customer->nama=$nama;
$customer->email=$email;
$customer->country=$country;
$customer->city=$city;
$customer->address=$address;
$customer->contact_number=$contact_number;
$customer->save();
return $customer;
}
public function edit($id=null,$code=null,$nama=null,$email=null, $country=null,$city=null,$address=null,$contact_number=null){
    $customer=Customer::find($id);
    $customer=new Customer();
    $customer->code=$code;
    $customer->nama=$nama;
    $customer->email=$email;
    $customer->country=$country;
    $customer->city=$city;
    $customer->address=$address;
    $customer->contact_number=$contact_number;
    $customer->save();
    return $customer;
    }
}
