<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'type', 'category_id', 'thumbnail', 'user_id', 'is_published'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function files()
    {
        return $this->hasMany(PostFile::class);
    }


    public function getTypeLabel()
    {
        switch ($this->type) {
            case 'news':
                return 'Berita';
            case 'announcement':
                return 'Pengumuman';
            case 'community_service':
                return 'Pengabdian Masyarakat';
            default:
                return 'Tidak Diketahui';
        }
    }

    public function getTypeLabelSlug()
    {
        switch ($this->type) {
            case 'news':
                return 'berita';
            case 'announcement':
                return 'pengumuman';
            case 'community_service':
                return 'pengabdian-masyarakat';
            default:
                return 'Tidak Diketahui';
        }
    }

    
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::saved(function ($post) {
            Artisan::call('sitemap:generate');
        });
    
        static::deleted(function ($post) {
            Artisan::call('sitemap:generate');
        });
    }

    
}
