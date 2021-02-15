<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/j5g04PMm2Knozpyresg91KwA9WQvxpWf7Qwp4VYm.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
