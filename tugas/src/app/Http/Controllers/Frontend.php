<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Table;

class Frontend extends Controller
{
    //
    public function home(){
        $modelfooter = New Profile;
        $datafooter = $modelfooter->get();

        $modelabout = New About;
        $dataabout = $modelabout->get();

        $modeltable = New Table;
        $datatable = $modeltable->get();

        return view ('frontend.index', compact('datafooter','dataabout','datatable'));
    }

    public function about(){
        $modelfooter = New Profile;
        $datafooter = $modelfooter->get();
        return view ('frontend.about', compact('datafooter'));
    }

    public function service(){
        $modelfooter = New Profile;
        $datafooter = $modelfooter->get();

        $modelservice = New Gallery;
        $dataservice = $modelservice->get();

        $modelproduct = New Product;
        $dataproduct = $modelproduct->get();

        return view ('frontend.service', compact('datafooter', 'dataservice', 'dataproduct'));
    }
}
