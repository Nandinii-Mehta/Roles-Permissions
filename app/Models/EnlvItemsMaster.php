<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnlvItemsMaster extends Model
{
    protected $table = 'enlv_items_master';

    protected $fillable = [
        'item_id',
        'item_name',
        'version',
        'category',
        'color',
        'image_thumbnail_link',
        'license_update'
    ];
}
