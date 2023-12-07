<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoris extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany('App\Models\Books', 'autor_id', 'id'); // prolinkuje nám to tyto dvě databáze cizí a primární klíč
    }


}
