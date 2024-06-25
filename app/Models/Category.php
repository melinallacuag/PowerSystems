<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

         /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    protected $table = 'categories';

    public function videos()
    {
        return $this->hasMany(Video::class, 'category_id');
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'category_id');
    }
}
