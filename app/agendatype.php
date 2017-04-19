<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Agendatype extends Model {
 
 protected $table = 'agendatype'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'agendaTypeName'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'agendaTypeId';

 public function agenda_has_agendaType(){
    return $this->belogsTo('App\agenda_has_agendatype','agendeTypeId');
 }

}