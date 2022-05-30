<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'categoria_id', 'title', 'description', 'image', 'status',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function categorias()
    {
        //permitir que um post acesse sua categoria mãe com - pertence a
        return $this->belongsTo(Categoria::class);
    }
}
