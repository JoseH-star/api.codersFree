<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    const BOORADOR =1; 
    const PUBLICADO =1;

    //relacion uno a muchos inversa
    
    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function category(){
        return $this->BelongsTo(Category::class); 
    }

    //relacion muchos a muchos

    public function tags(){
        return $this->BelongsTo(Tag::class);
    }

    //relacion uno a muchos polimorfica
    public function images(){
        return $this->BelongsTo(Images::class, 'imageable');
    }
}
