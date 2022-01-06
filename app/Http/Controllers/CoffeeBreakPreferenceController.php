<?php

namespace App\Http\Controllers;

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
}
