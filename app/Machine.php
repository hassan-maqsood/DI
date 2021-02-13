<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Machine extends Model
{
    public function getMachinesByFilters($performance)
    {
        return DB::table('machines')
            ->Where('spindel_speed', $performance['spindle'])
            ->where(function($query) use ($performance) {
                $query->whereBetween('max_x_axis_travel', [$performance['travel']['min'], $performance['travel']['max']]);
                $query->orWhereBetween('max_y_axis_travel', [$performance['travel']['min'], $performance['travel']['max']]);
                $query->orWhereBetween('max_z_axis_travel', [$performance['travel']['min'], $performance['travel']['max']]);
            })->get();
    }

    public function getMachinesByIds($ids)
    {
        return DB::table('machines')
            ->where('id', $ids)
            ->first();
    }

    public function getAllMachines()
    {
        return DB::table('machines')
                ->get();
    }
}
