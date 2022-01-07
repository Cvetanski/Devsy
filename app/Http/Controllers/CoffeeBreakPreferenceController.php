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
            if(empty($coffeeBreakPreferenceRepository->all()))
            return response()->json([
                'error'=>false,
                'message'=>'There are no preferences for today',
                'list'=>'empty'
            ]);else{
                return response()->json([
                    'error'=>false,
                    'message'=>'Here is the all Preferences for today Coffee Break',
                    'list'=>$coffeeBreakPreferenceRepository->all()
                ]);
            }
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
            if (empty($coffeeBreakPreferenceRepository->all())){
                return response()->xml('There are no preferences for today');
            }
            else{
                return response()->xml(['coffeeBreakPreferenceRepository' => $coffeeBreakPreferenceRepository->all()]);
            }
        }catch (\Exception $e){
            return response($e->getMessage());
        }
    }
}

