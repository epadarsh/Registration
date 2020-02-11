<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class SearchController extends Controller
{
    public function index()
    {

    }

    public function search(Request $request)
    {
        $mobileNumber = $request->input("mobile");

        $query = DB::table('searches')->select('name', 'mobile', 'email', 'post', 'street', 'adults', 'children', 'donations', 'amount')
            ->where('mobile', "LIKE", "%$mobileNumber%")->first();
        return (view('search-form', compact('query')));
    }

    public function showTable()
    {
    }
}
