<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function getDateOnly() {

        return date('Y-m-d', strtotime($this->start_date));
    }
    public function getTimeOnly() {

        return date('H:i', strtotime($this->start_date));
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function tags(){
        return $this -> belongsToMany(Tag::class);
    }


}
