<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Profile extends Model {
 
 protected $table = 'conclusion_has_person'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 
}