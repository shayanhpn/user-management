<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait generateUUidv4{
    public static function generateUUIDv4()
    {
        static::creating(function($model) {
            do {
                $uuid = $model->id = Str::uuid();
            } while(self::where('id', $uuid)->exists());
            return $uuid;
    });
    }

}
