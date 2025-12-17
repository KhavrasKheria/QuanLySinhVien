<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Cho phép fill dữ liệu vào các cột này
    protected $fillable = [
        'name',
        'gender',
        'birthday',
        'email',
        'phone',
        'address'
    ];

    // Tắt timestamps vì bảng không có created_at, updated_at
    public $timestamps = false;

    // Quan hệ: 1 sinh viên có nhiều điểm
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
