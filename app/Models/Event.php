<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function getStartDate() {

        return date('Y-m-d', strtotime($this->start_date));
    }
    public function getStartTime() {

        return date('H:i', strtotime($this->start_date));
    }

    public function getEndDate() {

        return date('Y-m-d', strtotime($this->end_date));
    }
    public function getEndTime() {

        return date('H:i', strtotime($this->end_date));
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function tags(){
        return $this -> belongsToMany(Tag::class);
    }


}
