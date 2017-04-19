<?php 
namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Conclusion extends Model {
 
 protected $table = 'conclusion'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
    protected $fillable = [
     'conclusionId',
     'conclusionAgendaType',
     'conclusionContent',
     'status',
     'dataNextMeeting',
     'timeNextMeeting',
     'Meeting_meetingId',
     'Agenda_agendaId'] ;// ข้อมูลที่จะแสดง
    protected $primaryKey = 'conclusionId';

    public function tracking(){
        return $this->hasMany('App\tracking','conclusionId','Meeting_meetingId','Agenda_agendaId');
    }

    public function meeting(){
        return $this->beLongTo('App\meeting','Meeting_meetingId');
    }

    public function agenda(){
        return $this->beLongTo('App\agenda','Agenda_agendaId');
    }
    public function conclusion_has_person(){
        return $this->hasMany('App\conclusion_has_person','conclusionId','Meeting_meetingId','Agenda_agendaId');
    }
}