<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Munrofootnote extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'mfnid';

    protected $fillable = ['mfnnumber', 'mfninfo','mfnchap','mfnpage'];

    public function toSearchableArray(): array
    {
        return [
            'mfninfo' => $this->mfninfo,
        ];
    }
   
}
