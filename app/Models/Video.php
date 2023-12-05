<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $perPage = 12;
    protected $fillable = [
        'name', 'url', 'thumbnail', 'slug', 'length', 'description', 'category_id'
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
        return $this->category->getRandomVideos($count)->except($this->id);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }

    public function getOwnerNameAttribute()
    {
        return $this->user?->name;
    }

    public function getOwnerAvatarAttribute()
    {
        return $this->user?->gravatar;
    }
}
