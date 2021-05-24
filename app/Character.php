<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Character extends Model
{
    //

    use Sortable;

    protected $fillable = ['name'];

    public $sortable = ['id', 'name', 'initiative', 'hit_points', 'stat_1', 'stat_2', 'created_at', 'updated_at'];

    public function encounters()
    {
        //

        return $this->belongsToMany(Encounter::class);

    }


}
