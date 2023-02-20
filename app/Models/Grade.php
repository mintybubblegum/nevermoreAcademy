<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'maths1',
        'maths2',
        'maths3',
        'maths4',
        'maths5',
        'maths6',
        'maths7',
        'maths8',
        'maths9',
        'history1',
        'history2',
        'history3',
        'history4',
        'history5',
        'history6',
        'history7',
        'history8',
        'history9',
        'geography1',
        'geography2',
        'geography3',
        'geography4',
        'geography5',
        'geography6',
        'geography7',
        'geography8',
        'geography9',
        'english1',
        'english2',
        'english3',
        'english4',
        'english5',
        'english6',
        'english7',
        'english8',
        'english9',
        'lenguage1',
        'lenguage2',
        'lenguage3',
        'lenguage4',
        'lenguage5',
        'lenguage6',
        'lenguage7',
        'lenguage8',
        'lenguage9',
        
        
        'user_id',
        /*'user_name',*/
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
