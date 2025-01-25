<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /** @property bool published */  //в контроллере будут подсказки при вызове свойства

    /** @property Carbon published_at */

    protected $fillable = [

        'user_id',

        'title', 'content',

        'published', 'published_at',

    ];

    protected $casts = [

        'user_id' => 'integer',

        'published' => 'boolean',

        'published_at' => 'datetime',  //вернет Carbon

    ];

    //можно в моделях писать какие то свои кастомные методы. в небольших пределах
    public function isPublished(): bool
    {

        return $this->published && $this->published_at;

    }


}
