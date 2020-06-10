<?php

namespace App\Imports;

use App\Productyong;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProductyong implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {



        if($row[3] == null || $row[3] == 'NULL'){
            $row[3] = 'null';
        } if($row[4] == null|| $row[4] == 'NULL'){
            $row[4] = 0;
        }
         if($row[5] == null|| $row[5] == 'NULL'){
            $row[5] = 0;
        }
         if($row[6] == null|| $row[6] == 'NULL'){
            $row[6] = 'อัน';
        }
         if($row[7] == null|| $row[7] == 'NULL'){
            $row[7] = '1*1';
        }
         if($row[8] == null|| $row[8] == 'NULL'){
            $row[8] = 0;
        }
         if($row[9] == null|| $row[9] == 'NULL'){
            $row[9] = 'อัน';
        }
        if($row[10] == null|| $row[10] == 'NULL'){
            $row[10] = '1*1';
        }


        return new Productyong([
            'product_code' => $row[1],
            'name' => $row[2],
            'type' => $row[3],
            'purchase_price' => $row[4],
            'available_amount' => $row[5],
            'purchase_unit' => $row[6],
            'packing_purchase' => $row[7],
            'retail_price' => $row[8],
            'retail_unit' => $row[9],
            'retail_packing' => $row[10],
        ]);
    }
}
