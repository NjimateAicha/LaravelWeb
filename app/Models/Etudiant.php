<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'cne', 'note1', 'note2', 'langitude', 'latitude'];
    protected $casts = [
        'note1' => 'float',
        'note2' => 'float',
    ];
    public function moyenne()
    {
        return ($this->note1 + $this->note2) / 2;
    }
}
