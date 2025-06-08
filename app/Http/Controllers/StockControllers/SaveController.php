<?php

namespace App\Http\Controllers\StockControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveController extends Controller
{
    public function save(array $data)
    {
        foreach ($data as $item) {
            DB::table('stocks')->insert([
                'date' => $item['date'] ?? null,
                'last_change_date' => $item['last_change_date'] ?? null,
                'supplier_article' => $item['supplier_article'] ?? null,
                'tech_size' => $item['tech_size'] ?? null,
                'barcode' => $item['barcode'] ?? null,
                'quantity' => $item['quantity'] ?? null,
                'is_supply' => $item['is_supply'] ?? null,
                'is_realization' => $item['is_realization'] ?? null,
                'quantity_full' => $item['quantity_full'] ?? null,
                'warehouse_name' => $item['warehouse_name'] ?? null,
                'in_way_to_client' => $item['in_way_to_client'] ?? null,
                'in_way_from_client' => $item['in_way_from_client'] ?? null,
                'nm_id' => $item['nm_id'] ?? null,
                'subject' => $item['subject'] ?? null,
                'category' => $item['category'] ?? null,
                'brand' => $item['brand'] ?? null,
                'sc_code' => $item['sc_code'] ?? null,
                'price' => $item['price'] ?? null,
                'discount' => $item['discount'] ?? null,
            ]);
        }
        return '200';
    }
}
