<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductyongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productyong')->insert([
            [
            'product_code' => 8850280000000,
            'name' => 'ตะกร้อมาราธอน No.201J',
            'type' => 'กีฬา,ดนตรี',
            'purchase_price' => 185,
            'available_amount' => 0,
            'purchase_unit' => 'ลูก',
            'packing_purchase' => '1*1',
            'retail_price' => 299,
            'retail_unit' => 'ลูก',
            'retail_packing' => 'กล่อง',
            ],
      
        ]);
    }
}
