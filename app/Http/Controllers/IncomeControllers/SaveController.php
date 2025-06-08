<?php

namespace App\Http\Controllers\IncomeControllers;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveController extends Controller
{
    public function save(array $data)
    {
        foreach ($data as $item) {
            if (isset($item['income_id']) && $item['income_id'] !== null) {
                DB::table('incomes')->insert([
                    'income_id' => $item['income_id'],
                    'number' => $item['number'] ?? null,
                    'date' => $item['date'] ?? null,
                    'last_change_date' => $item['last_change_date'] ?? null,
                    'supplier_article' => $item['supplier_article'] ?? null,
                    'tech_size' => $item['tech_size'] ?? null,
                    'barcode' => $item['barcode'] ?? null,
                    'quantity' => $item['quantity'] ?? null,
                    'total_price' => $item['total_price'] ?? null,
                    'date_close' => $item['date_close'] ?? null,
                    'warehouse_name' => $item['warehouse_name'] ?? null,
                    'nm_id' => $item['nm_id'] ?? null,
                ]);
            } else {
                \Log::warning('Пропущена запись из-за отсутствия income_id', $item);
                return 'error';
            }
        }
        return '200';
    }
}
