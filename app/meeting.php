<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Meeting extends Model {
 
 protected $table = 'meeting'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'meetingName',
     'meetingDate',
     'meetingTimeStart',
     'meetingTimeEnd',
     'meetingAdd',
     'purpose'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'meetingId';

 public function conclusion(){
    return $this->hasMany('App\conclusion','meetingId');
 }
 public function attendence(){
    return $this->hasMany('App\attendence','meetingId');
 }
}