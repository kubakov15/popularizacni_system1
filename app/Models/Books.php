<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;


    public function autoris()
    {
        return $this->belongsTo('App\Models\Autoris', 'autor_id', 'id'); // prolinkuje nám to tyto dvě databáze cizí a primární klíč tady z books do autori
    }


}
