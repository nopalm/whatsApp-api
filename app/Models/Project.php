<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomerPro',
        'tglPro',
        'statusPro',
        'revPro'
    ];

    public function userPostProject(){
        return $this->hasMany(User::class);
    }
}
