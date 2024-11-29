<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "body",
    ];

    protected $cast = [
        "created_at" => "datetime",
        "updated_at"=> "datetime",
    ];

    protected $dates = ["created_at","updated_at"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
