<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources;
use App\Http\Requests\NewHouseRequest;

class AdminController extends Controller{

    protected $_adminModel;

    public function __construct(){
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }
    public function index(){
        return view('admin');
    }

}