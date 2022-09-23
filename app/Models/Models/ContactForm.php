<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
      ];

    public static function getAllOrderByUpdated_at()
        {
        return self::orderBy('updated_at', 'desc')->get();
        }

}
