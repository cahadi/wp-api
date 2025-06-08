<?php

namespace App\Http\Controllers\IncomeControllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ToJsonController;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class GetController extends Controller
{
    public function getdata()
    {
        try
        {
            $response = Http::get('http://109.73.206.144:6969/api/incomes?dateFrom=1900-01-01&dateTo=2100-01-01&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie');
            $toJson = new ToJsonController();
            $data = $toJson->toJson($response);
            $saveCont = new SaveController();
            return $saveCont->save($data);

        }
        catch (RequestException $e)
        {
            return response()->json(['error' => 'Запрос не удался: ' . $e->getMessage()], 500);
        }
    }
}
