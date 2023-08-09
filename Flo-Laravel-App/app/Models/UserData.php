<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    
    
    protected $table = 'user_data';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','fullName', 'address', 'email'];   

    use HasFactory;
    /*public function Commerce(){
        return $this->belongsTo(CommerceData::class,'comm_id','id');
    }*/
}
