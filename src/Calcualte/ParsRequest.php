<?php


namespace App\Calcualte;


use Symfony\Component\HttpFoundation\Request;

class ParsRequest
{


    public static function parsRequest(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $firstValue = $request->request->get('firstValue', '0');
        $secondValue = $request->request->get('secondValue', '0');
        $thirdValue = $request->request->get('thirdValue', null);
        return $array = [
            "firstValue" => "$firstValue",
            "secondValue" => "$secondValue",
            "thirdValue" => "$thirdValue",
        ];
    }
}