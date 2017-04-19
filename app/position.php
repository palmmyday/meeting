<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Position extends Model {
 
 protected $table = 'position'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'positionName'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'positionId';

 public function member(){
    return $this->hasMany('App\member','positionId');
 }
}