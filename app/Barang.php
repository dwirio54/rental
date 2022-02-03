<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use AutoNumberTrait;
    protected $table = 'barangs';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_barang' => [
                'format' => function () {
                    return 'BRG' . date('Ymd') . '/?';
                }, 'length' => 5
            ]
        ];
    }
}
