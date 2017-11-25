<?php
/**
 * Created by PhpStorm.
 * User: r.ron
 * Date: 11/25/2017
 * Time: 11:55 AM
 */

namespace App\Http\Controllers;


class LearnController extends Controller
{
    public function index(){
        return view('users');
    }
}