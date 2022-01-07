<?php

namespace App\Http\Controllers;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use App\CoffeeBreakPreference\Repositories\Contract\CoffeeBreakPreferenceRepositoryInterface;
use GuzzleHttp\Psr7\Request;
use function PHPUnit\Framework\isEmpty;

class CoffeeBreakPreferenceController extends Controller
{
    public function index(CoffeeBreakPreferenceRepositoryInterface $coffeeBreakPreferenceRepository)
    {
        try {
            $items = $coffeeBreakPreferenceRepository->all();

            return response()->json(empty($items)?
                ['error'=>false,
                'There Are No Preferences For Today']:['items'=>$items]);

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
            return view('show-html-preferences')->with(['coffeeBreakPreferenceRepository'=> $coffeeBreakPreferenceRepository->all()]);
        }catch (\Exception $e){
            return response($e->getMessage());
        }
    }

    public function showXmlPreferences(CoffeeBreakPreferenceRepositoryInterface $coffeeBreakPreferenceRepository)
    {
        try{
            $items = $coffeeBreakPreferenceRepository->all();

                return response()->xml(empty($items)?
                'There Are No Preferences For Today':['items'=>$items]);

        }catch (\Exception $e){
            return response($e->getMessage());
        }
    }
}

