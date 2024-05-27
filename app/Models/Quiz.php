<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'quiz_type', //JS ou PHP
        'score', // Score obtenue 
        'played_count',// Pour voir le  nbr de fois joueee
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

