<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

//    protected $table = 'foobar';

//    protected $primaryKey = 'uuid';

    public $incrementing = false;

//    protected $connection = 'second_mysql';

    // Придут через форму только свойства указанные здесь
    protected $fillable = [

        'id', 'name', 'price',

        'active', 'sort',

    ];

//    protected $data = request()->all();

//    Currency::create(['name' => 'RUB', 'price' => 1, 'foo' => 'bar']);
//    Currency::create($this->data);

    protected $hidden = [

//        'price',

//        'secret'

    ];

    protected $casts = [

        'price' => 'float',

        'active' => 'boolean',

        'secret' => 'encrypted', // напр при добалении значений в бд - зашифрует и расшифрует (при получении) автоматически

    ];


    // Завернет дату в Carbon library и будут доступны ее методы - для кастомных дат
    protected $date = [

        'active_at'

    ];


}


