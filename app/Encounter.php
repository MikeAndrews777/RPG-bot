<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Encounter extends Model
{
    //

    use Sortable;

    protected $fillable = ['name'];

    public $sortable = ['id', 'name', 'created_at', 'updated_at'];


    public function characters()
    {
        //

        return $this->belongsToMany(Character::class);

    }


}
