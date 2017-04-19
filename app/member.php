<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Member extends Model {
 
 protected $table = 'member'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้้
 protected $fillable = [
     'Committee_committeeId',
     'Position_positionId',
     'Person_personId'
     ] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'Id';

 public function committee(){
     return $this->beLongTo('App\committee','Committee_committeeId');
 }

 public function position(){
    return $this->beLongTo('App\position','Position_positionId');
 }

 public function person(){
    return $this->beLongTo('App\person','Person_personId');
 }

 public function tracking(){
    return $this->hasMany('App\tracking','Committee_committeeId','Position_positionId','Person_personId');
 }

 

}