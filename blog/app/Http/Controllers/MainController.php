<?php

namespace App\Http\Controllers;

use App\PodService;
use App\Post;
use App\Service;
use App\Principle;
use Dejurin\GoogleTranslateForFree;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(){
        $service = Service::all();
        $podService = PodService::all();
        $tr = new GoogleTranslateForFree();
        $principle = Principle::all();
        return view('mainpage', compact('service','podService','principle','tr'));
    }

    public function indexLang($locale){
        App::setLocale($locale);
        $service = Service::all();
        $podService = PodService::all();
        $tr = new GoogleTranslateForFree();
        $principle = Principle::all();
        return view('mainpage', compact('service','podService','principle','tr'));
    }

    public function AboutCompany(){
        $tr = new GoogleTranslateForFree();
        return view('aboutcompany', compact('tr'));
    }



}
