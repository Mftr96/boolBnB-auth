<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Message;
use App\Models\Statistic;

class Apartment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'rooms',
        'beds',
        'bathrooms',
        'dimension_mq',
        'image',
        'latitude',
        'longitude',
        'address_full',
        'is_visible',
        //METTO IL TYPE ID PER COLLEGARLO ALLA TABELLA TYPE
        "service_id",
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function messages(){
        return $this->belongsToMany(Message::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function sponsorships()
    {
        return $this->belongsToMany(Sponsorship::class)
            ->withPivot('starting_date', 'ending_date')
            ->withTimestamps();
    }

    public function statistics(){
        return $this->belongsToMany(Statistic::class);
    }

}
