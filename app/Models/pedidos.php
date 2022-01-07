<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

    protected $fillable = array(
        'name',

    );

    public function user(){
        return $this->belongsTo(User::class);
    }
}
