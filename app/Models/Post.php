<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    //Mutators
    public function setNameAttribute($value){
        $this->attributes['name'] = Str::lower($value);
    }

    //Accesors
    public function getSlugAttribute(){
        return Str::slug($this->attributes['name']);
    }

    //route blog validation
    public function href()
    {
        return Str::of($this->slug)->prepend('blog/');
    }
}
