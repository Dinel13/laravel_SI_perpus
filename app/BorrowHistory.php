<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table = 'borrow_history';

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function admin() {
        return $this->belongsTo(User::class, 'id' ,'admin');
    }

    public function scopeisborrowed($queery){
        return $queery->where('dikembalikan', null);
    }
}
