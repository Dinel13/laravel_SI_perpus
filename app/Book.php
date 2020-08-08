<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function getCover() {
        if(substr($this->cover,0,5) == 'https'){
            return $this->cover;
        }

        if($this->cover) {
            return asset($this->cover);
        }

        return 'https://picsum.photos/id/14/200/300';
    }

    public function borrowed()
    {
        return $this->belongsToMany(User::class, 'borrow_history')                      ->withTimestamps();
    }
}
