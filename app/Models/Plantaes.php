<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Plantaes extends Model
{
    use HasFactory;

    public function fiche() {
        // SELECT * FROM users WHERE id = $this->user_id
        return $this->hasMany("App\Models\Plantea", "id");
    }
}
