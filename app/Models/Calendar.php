<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
    ];

    public function work_times()
    {
        return $this->hasMany(Work_time::class);
    }

    public function work_times_by_day($day)
    {
        $data = $this->work_times->where('day', '=', $day);
        

        $times_array = [];
        $html_code = "";
        foreach ($data as $element){
            for ($i = $element->start; $i < $element->end; $i++) {
                array_push ( $times_array , $i);
              }
        }
        foreach ($times_array as $time){
            $html_code .= '<option value="'.$time.'">'.$time.':00</option>';
        }

        return $html_code;
        
    }
    

}
