<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Attendence extends Model {
 
 protected $table = 'attendence'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'member_Committee_committeeId',
     'member_Position_positionId',
     'member_Person_personId',
     'Meeting_meetingId'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'id';

 public function meeting(){
    return $this->belongsTo('App\meeting','Meeting_meetingId');
 }
 public function member(){
     return $this->belongsTo('App\member','member_Committee_committeeId','member_Position_positionId','member_Person_personId');
 }
}