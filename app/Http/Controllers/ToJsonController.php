<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToJsonController extends Controller
{
    public function toJson($response)
    {
        if ($response->successful()) {
            $data = $response->json();
            if (!isset($data['data']) || !is_array($data['data'])) {
                return response()->json(['error' => 'Некорректные данные от API'], 500);
            }
            else {
                return $data['data'];
            }
        } else {
            return response()->json(['error' => $response->body()], $response->status());
        }
    }
}
