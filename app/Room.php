<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    public function getAvailableRooms($start, $end)
	{
		$availableRooms =  DB::table('rooms as r')
								->select('r.id', 'r.name')
								->whereRaw("
									r.id NOT IN(
											SELECT b.room_id FROM reservations b
											WHERE NOT(
												b.date_out < '{$start}' OR
												b.date_in > '{$end}'
											)
									)
								")
								->orderBy('r.id')
								->get();
		return $availableRooms;
	}
}
