<?php namespace App; // การกำหนดที่อยู่ของ Model
use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel
class Tracking extends Model {
 
 protected $table = 'tracking'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
 protected $fillable = [
     'trackingTopic',
     'trackingDeadline',
     'trackingSender',
     'trackingReceiver',
     'TrackingDateAccept',
     'TrackingDescription',
     'conclusion_conclusionId',
     'conclusion_Meeting_meetingId',
     'conclusion_Agenda_agendaId',
     'trackStatus_trackStatusId',
     'Tracking_trackingId',
     'member_Committee_committeeId',
     'member_Position_positionId',
     'member_Person_personId'] ;// ข้อมูลที่จะแสดง
 protected $primaryKey = 'trackingId';

 public function conclusion(){
    return $this->belongsTo('App\Conclusion','conclusion_conclusionId','conclusion_Meeting_meetingId','conclusion_Agenda_agendaId');
 }

 public function trackstatus(){
    return $this->belongsTo('App\trackstatus','trackStatus_trackStatusId');

 }

 public function tracking(){
    return $this->belongsTo('App\tracking','Tracking_trackingId');
            $this->hasMany('App\tracking','trackingId');
 }
 
 public function member(){
    return $this->belongsTo('App\member','member_Committee_committeeId','member_Position_positionId','member_Person_personId');
}
 


}