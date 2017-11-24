<?php
/**
 * Created by PhpStorm.
 * User: r.ron
 * Date: 11/23/2017
 * Time: 2:49 PM
 */

namespace App\Http\Controllers;


use App\Order;
use App\Productitem;
use App\Staff;
use Faker\Provider\Person;
use Illuminate\Routing\Controller as BaseController;

class Test extends BaseController
{
    function addProduct(){
        /*$order=new Order();
        $order->order_date='2017-10-10';
        $order->save();
        echo "Done add";*/
        $item1 = new Productitem();
        $item1->name='Coca';
        $item1->description='Coca is good one';
        $item1->order_id=1;
        $item1->save();
        echo "Done add product";
    }
    function manytomay(){
        $staff = new Staff();
        $person = new Person();
    }
}