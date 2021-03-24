<?php


namespace App\Http\Controllers;

use App\PodService;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Dejurin\GoogleTranslateForFree;


class ServiceController extends Controller
{

    public function oneService($id)
    {
        $tr = new GoogleTranslateForFree();
        $podService = PodService::all()->where('idService', $id);
        $service = Service::findOrFail($id);
        return view('oneservice', compact('podService', 'service', 'tr'));
    }
    public function oneServiceLang($locale, $id)
    {
        App::setLocale($locale);
        $podService = PodService::all()->where('idService', $id);
        $tr = new GoogleTranslateForFree();
        $service = Service::findOrFail($id);
        return view('oneservice', compact('podService', 'service', 'tr'));
    }

    public function onePodService($id)
    {
        $podItem = PodService::findOrFail($id);
        $tr = new GoogleTranslateForFree();
        return view('one_pod_service', compact('podItem', 'tr'));
    }

    public function onePodServiceLang($locale, $id)
    {
        App::setLocale($locale);
        $tr = new GoogleTranslateForFree();
        $podItem = PodService::findOrFail($id);
        return view('one_pod_service', compact('podItem',  'tr'));
    }

    public function AllService()
    {
        $tr = new GoogleTranslateForFree();
        $podService = PodService::all();
        $service = Service::all();
        return view('service', compact('podService', 'service', 'tr'));
    }
    public function AllServiceLang($locale)
    {
        App::setLocale($locale);
        $tr = new GoogleTranslateForFree();
        $podService = PodService::all();
        $service = Service::all();
        return view('service', compact('podService', 'service', 'tr'));
    }
}
