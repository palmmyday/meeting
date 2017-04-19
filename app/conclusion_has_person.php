<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class conclusion_has_person extends Model {
 
 protected $table = 'conclusion_has_person'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'conclusion_conclusionId',
     'conclusion_Meeting_meetingId',
     'conclusion_Agenda_agendaId',
     'Person_personId'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'id';

 public function conclusion(){
    return $this->belogsTo('App\conclusion','conclusion_conclusionId','conclusion_Meeting_meetingId','conclusion_Agenda_agendaId');
 }
 public function person(){
    return $this->belongTo('App\person','Person_personId');
 }

}