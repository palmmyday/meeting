<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Committee extends Model {
 
 protected $table = 'committee'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'committeeName'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'committeeId';

 public function member(){
    return $this->hasMany('App\member','committeeId');
 }
 
}