<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'url', 'thumbnail', 'slug', 'length', 'description'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getLengthInHumanAttribute()
    {
        return gmdate("i:s", $this->value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta())->formatDifference(verta($value));
    }
    public function relatedVideos(int $count = 6)
    {
        return Video::all()->random($count);
    }
}
