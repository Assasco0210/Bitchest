<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include_once 'cotation_generator.php';
include_once app_path('Helpers/cotation_generator.php');

class CryptoController extends Controller
{
    public function getCotations()
    {
        $cryptos = ['Bitcoin', 'Ethereum', /* autres crypto-monnaies */];
        $cotations = [];

        foreach ($cryptos as $crypto) {
            $firstCotation = getFirstCotation($crypto);
            $cotations[$crypto][] = $firstCotation;

            for ($i = 0; $i < 30; $i++) {
                $variation = getCotationFor($crypto);
                $lastCotation = end($cotations[$crypto]);
                $newCotation = max(0, $lastCotation + $variation); // Assurez-vous que la cotation n'est pas négative
                $cotations[$crypto][] = $newCotation;
            }
        }

        return view('cryptos', ['cotations' => $cotations]);
    }
}
