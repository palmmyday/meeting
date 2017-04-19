<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Agenda extends Model {
 
 protected $table = 'agenda'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'content',
     'date',
     'time'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'agendaId';

 public function agenda_has_agendaType(){
    return $this->hasMany('App\agenda_has_agendaType','agendaId');
 }
}