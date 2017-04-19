<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Person extends Model {
 
 protected $table = 'person'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'personFirstName',
     'personLastName',
     'password',
     'personEmail',
     'personTel',
     'personPicture'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'personId';

 public function member(){
    return $this->hasMany('App\member','personId');
 }
 public function conclusion_has_person(){
     return $this->hasMany('App\conclusion_has_person','personId');
 }
}