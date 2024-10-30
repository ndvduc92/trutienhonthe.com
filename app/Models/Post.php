<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const CATEGORIES = [
        'tintuc' => "Tin Tức",
        'huongdan' => "Hướng Dẫn",
        'sukien' => "Sự Kiện",
    ];

    public const COLORES = [
        'tintuc' => "new-tintuc",
        'huongdan' => "new-huongdan",
        'sukien' => "new-sukien",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
