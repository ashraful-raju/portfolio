<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'value'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function (Setting $item) {
            if (is_array($item->value)) {
                $item->value = json_encode($item->value);
            }

            return $item;
        });
    }

    public function getValue()
    {
        if (json_validate($this->value)) {
            return json_decode($this->value, true);
        }

        return $this->value;
    }

    public static function addItems($data = [])
    {
        foreach ($data as $key => $value) {
            Setting::updateOrCreate([
                'name' => $key
            ], [
                'value' => $value
            ]);
        }
    }

    public static function getItem($name, $default = null)
    {
        return Setting::where('name', $name)->value('value') ?? $default;
    }
}
