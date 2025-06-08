<?php

namespace App\Http\Controllers\SaleControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveController extends Controller
{
    public function save(array $data)
    {
        foreach ($data as $item) {
            DB::table('sales')->insert([
                'g_number' => $item['g_number'] ?? null,
                'date' => $item['date'] ?? null,
                'last_change_date' => $item['last_change_date'] ?? null,
                'supplier_article' => $item['supplier_article'] ?? null,
                'tech_size' => $item['tech_size'] ?? null,
                'barcode' => $item['barcode'] ?? null,
                'total_price' => $item['total_price'] ?? null,
                'discount_percent' => $item['discount_percent'] ?? null,
                'is_supply' => $item['is_supply'] ?? null,
                'is_realization' => $item['is_realization'] ?? null,
                'promo_code_discount' => $item['promo_code_discount'] ?? null,
                'warehouse_name' => $item['warehouse_name'] ?? null,
                'country_name' => $item['country_name'] ?? null,
                'oblast_okrug_name' => $item['oblast_okrug_name'] ?? null,
                'region_name' => $item['region_name'] ?? null,
                'income_id' => $item['income_id'] ?? null,
                'sale_id' => $item['sale_id'] ?? null,
                'odid' => $item['odid'] ?? null,
                'spp' => $item['spp'] ?? null,
                'for_pay' => $item['for_pay'] ?? null,
                'finished_price' => $item['finished_price'] ?? null,
                'price_with_disc' => $item['price_with_disc'] ?? null,
                'nm_id' => $item['nm_id'] ?? null,
                'subject' => $item['subject'] ?? null,
                'category' => $item['category'] ?? null,
                'brand' => $item['brand'] ?? null,
                'is_storno' => $item['is_storno'] ?? null,
            ]);
        }
        return '200';
    }
}
