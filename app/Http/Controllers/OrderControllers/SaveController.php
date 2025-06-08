<?php

namespace App\Http\Controllers\OrderControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveController extends Controller
{
    public function save(array $data)
    {
        foreach ($data as $item)
        {
            DB::table('orders')->insert([
                    'g_number' => $item['g_number'] ?? null,
                    'date' => $item['date'] ?? null,
                    'last_change_date' => $item['last_change_date'] ?? null,
                    'supplier_article' => $item['supplier_article'] ?? null,
                    'tech_size' => $item['tech_size'] ?? null,
                    'barcode' => $item['barcode'] ?? null,
                    'total_price' => $item['total_price'] ?? null,
                    'discount_percent' => $item['discount_percent'] ?? null,
                    'warehouse_name' => $item['warehouse_name'] ?? null,
                    'oblast' => $item['oblast'] ?? null,
                    'income_id' => $item['income_id'] ?? null,
                    'odid' => $item['odid'] ?? null,
                    'nm_id' => $item['nm_id'] ?? null,
                    'subject' => $item['subject'] ?? null,
                    'category' => $item['category'] ?? null,
                    'brand' => $item['brand'] ?? null,
                    'is_cancel' => $item['is_cancel'] ?? null,
                    'cancel_dt' => $item['cancel_dt'] ?? null,
                ]);
        }
        return '200';
    }
}
