<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Agenda_has_agendatype extends Model {
 
 protected $table = 'agenda_has_agendatype'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'Agenda_agendaId',
     'agendaType_agendaTypeId'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'id';

 public function agenda(){
    return $this->belongsTo('App\agenda','Agenda_agendaId');
 }
 public function agendaType(){
     return $this->belongsTo('App\agendaType','agendaType_agendaTypeId');
 }
}