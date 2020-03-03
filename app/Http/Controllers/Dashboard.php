<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account as account;
use Illuminate\Support\Facades\DB;
class Dashboard extends Controller
{
    public function index(){
        $acc = new Account;
        // $acc->department = 'It';
        // $acc->name = 'Suman Dutta';
        //$acc->save();
        $data = DB::connection('mongodb')->table('Accounts')->get();//account::all();
        $data = $data->toArray();
            echo '<pre>';
            print_r($data);
        return view('dashboard');
    }
}
