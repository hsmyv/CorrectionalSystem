<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class HomePage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslations;

    protected $guarded = [];
    public $translatable = ['first_slide_first_word'];

    protected $table = 'home_page';
    public function registerMediaCollections(): void
    {

        $this->addMediaCollection('image')->singleFile()
            ->acceptsMimeTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif']);
    }
}
