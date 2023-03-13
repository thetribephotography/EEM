<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Maklad\Permission\Traits\HasRoles;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Expense extends Model
{
    use HasFactory, HasRoles, SoftDeletes;

    protected $guard_name = 'web';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'category_id',
        'date',
        'description',
        'receipt',
        'status',
        'price',

    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(category::class, 'catgory_id');
    }
}
