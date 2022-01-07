<?php

namespace App\Http\Controllers;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use GuzzleHttp\Psr7\Request;

class CoffeeBreakPreferenceController extends Controller
{
    public function index(CoffeeBreakPreferenceRepositoryInterface $coffeeBreakPreferenceRepository)
    {
        try {
            return response()->json([
                'error'=>false,
                'message'=>'Here is the all Preferences for today Coffee Break',
                'list'=>$coffeeBreakPreferenceRepository->all()
            ]);
        }catch (\Exception $e){
            return response()->json([
                'error'=>true,
                'message'=>$e->getMessage()
            ]);
        }
    }

    public function showHtmlPreferences(CoffeeBreakPreferenceRepositoryInterface $coffeeBreakPreferenceRepository)
    {
        try{
            return view('show-html-preferences',compact('coffeeBreakPreferenceRepository',$coffeeBreakPreferenceRepository));
        }catch (\Exception $e){
            return response($e->getMessage());
        }
    }

    public function showXmlPreferences(CoffeeBreakPreferenceRepositoryInterface $coffeeBreakPreferenceRepository)
    {
        try{
            return response()->xml(['coffeeBreakPreferenceRepository',$coffeeBreakPreferenceRepository]);
        }catch (\Exception $e){
            return response($e->getMessage());
        }
    }
}

