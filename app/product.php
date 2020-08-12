<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class product extends Model
{
    protected $table='products';
    protected $guarded =['id'];
    protected $fillable=['name','description','price','status_in_stock','quantity','status','userid'];
    protected $statu=[
        0=>[
            'name'=>'private',
            'class'=>'badge-danger '
            ],
            1=>[
                'name'=>'public',
                'class'=>'badge-success'
            ]
        ];
        public function getStatus()
        {
            return Arr::get($this->statu,$this->status,' ');
        }
}
