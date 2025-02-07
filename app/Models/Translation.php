<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $fillable = ['language_id', 'phrase_id', 'translation'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function phrase()
    {
        return $this->belongsTo(Phrase::class);
    }
}
