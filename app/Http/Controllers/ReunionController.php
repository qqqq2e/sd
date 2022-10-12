<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regester;
use App\Reunion;
use App\Onlines;
use MacsiDigital\Zoom\Facades\Zoom;

class ReunionController extends Controller
{
    //
    public function to_home(Request $req,$id){
   
                Reunion::where('id',$id)->update(
                    [
                        'expire' => 'yes',
                        // 'participants' => $i
                    ]);
                    return Redirect('/d');
         
    }
    public function reunion(Request $req){

        $categorie=$req->get('categorie');
        $title=$req->get('name');
        $language=$req->get('lan');
        $users = Regester::all();
        foreach ($users as $user){
            if($user['email'] == session('user')['email']){
                $host_id=$user['id'];
                break;
            }
        }
        Reunion::create([
            'host_id'=>$host_id,
            'categorie'=>$categorie,
            'title'=>$title,
            'language'=>$language,
            'participants'=>'',
            'expire'=>'non'
        ]);
    }

    public function statistics(){
        if(!session('user')){
            return Redirect('/log');
           } 
        $users = Regester::all();
        foreach ($users as $user){
            if($user['email'] == session('user')['email']){
                $id_user=$user['id'];
                $image = $user['image'];
                break;
            }
        }
        $Jan=0;$Feb=0;$Mar=0;$Apr=0;$May=0;$Jun=0;$Jul=0;$Aug=0;$Sep=0;$Oct=0;$Nov=0;$Dec=0;
        $i=0;$j=0;
        $name_last_reunion = 'Aucun';
        $date_last_reunion = 'Aucun';
        $last_participants = 'Aucun';
        $this_month=0;$this_year=0;
        $name_room=[];
        $name_room_participant=[];
        $date_created=[];
        $date_created_participant=[];
        $parts=[];
        $minutes=0;$minutes_y=0;
        $cat1=0;$cat2=0;$cat3=0;$cat4=0;$total=0;
        $reunions = Reunion::all();
        foreach ($reunions as $reunion){
            if($reunion['host_id'] == $id_user){
                $name_last_reunion = $reunion['title'];
                $date = $reunion['created_at'];
                $last_date = strtotime($date);
                $date_last_reunion = date('d/M/Y h:i a',$last_date);

                $last_participants = sizeof(explode(',',$reunion['participants']));
              
                if($reunion['categorie'] == 'E-Learning'){
                    $cat1++;
                    $total++;
                }elseif($reunion['categorie'] == 'Business'){
                    $cat2++;
                    $total++;
                }if($reunion['categorie'] == 'Communications'){
                    $cat3++;
                    $total++;
                }else{
                    $cat4++;
                    $total++;
                }



                if($date->format('M') == 'Jan'){
                    $Jun++;
                    $i++;
                }
                if($date->format('M') == 'Feb'){
                    $Feb++;
                    $i++;
                }
                if($date->format('M') == 'Mar'){
                    $Mar++;
                    $i++;
                }
                if($date->format('M') == 'Apr'){
                    $Apr++;
                    $i++;
                }
                if($date->format('M') == 'May'){
                    $May++;
                    $i++;
                }
                if($date->format('M') == 'Jun'){
                    $Jun++;
                    $i++;
                }
                if($date->format('M') == 'Jul'){
                    $Jul++;
                    $i++;
                }
                if($date->format('M') == 'Aug'){
                    $Aug++;
                    $i++;
                }
                if($date->format('M') == 'Sep'){
                    $Sep++;
                    $i++;
                }
                if($date->format('M') == 'Oct'){
                    $Oct++;
                    $i++;
                }
                if($date->format('M') == 'Nov'){
                    $Nov++;
                    $i++;
                }
                if($date->format('M') == 'Dec'){
                    $Dec++;
                    $i++;
                }
                $date_now = strtotime($date);
                if( date('M',$date_now) == date('M')){
                    $this_month++;
                    $difference =strtotime( $reunion['updated_at'])- strtotime($reunion['created_at']); 
                    $minutes += $difference/60;
                }

                $name_room[sizeof($name_room)] = $reunion['title'];
                $date_created[sizeof($date_created)] = date('d/M/Y h:i a',$date_now);
                $participe = explode(',',$reunion['participants']);
                if(!$reunion['participants']) $parts[sizeof($parts)] = 0;
                else
                $parts[sizeof($parts)] = sizeof($participe);

                $differences =strtotime($reunion['updated_at']  )- strtotime($reunion['created_at']); 

                $minutes_y += $differences/60;

                

            }

            $participe = explode(',',$reunion['participants']);
            $date = $reunion['created_at'];
            $date_now = strtotime($date);
            if(in_array($id_user,$participe)){
                $j++;
                $name_room_participant[sizeof($name_room_participant)] = $reunion['title'];
                $date_created_participant[sizeof($date_created_participant)] = date('d/M/Y h:i a',$date_now);
            }

        }
        $minutes=(int)($minutes);
        $minutes_y=(int)($minutes_y);
        if($total==0){
            $total = 1;
        }
        return view('dashboard')->with('Jan',$Jan)->with('Feb',$Feb)->with('Mar',$Mar)->with('Apr',$Apr)->with('May',$May)->with('Jun',$Jun)->with('Jul',$Jul)->with('Aug',$Aug)->with('Sep',$Sep)->with('Oct',$Oct)->with('Nov',$Nov)->with('Dec',$Dec)->with('count',$i)->with('participant',$j)->with('name_room',$name_room)->with('date_created',$date_created)->with('name_room_participant',$name_room_participant)->with('date_created_participant',$date_created_participant)->with('image',$image)->with('minutes',$minutes)->with('minutes_y',$minutes_y)->with('parts',$parts)->with('name_last_reunion',$name_last_reunion)->with('date_last_reunion',$date_last_reunion)->with('last_participants',$last_participants)->with('cat1',$cat1/$total)->with('cat2',$cat2/$total)->with('cat3',$cat3/$total)->with('cat4',$cat4/$total);
    }

    public function store(Request $req){
              
        // $user = Zoom::user()->first();

        // $meeting = Zoom::meeting()->make([
        //     'topic' => 'said mbisd666',
        //     // 'type' => 8,
        //     'start_time' => '2022-09-19T13:18:38Z', // best to use a Carbon instance here.
        //     'duration'=>'21',
        //     'password'=>'12345678',
        //     'timezone'=>'Africa\/Casablanca'
        //   ]);

        //   $meeting->settings()->make([
        //     'join_before_host' => true,
        //     'host_video'=>false,
        //     'participant_video'=>false,
        //     'mute_upon_entry'=>true,
        //     'approval_type' => 1,
        //     'registration_type' => 2,
        //     'enforce_login' => false,
        //     'waiting_room' => false,
        //     'auto_recording' =>config('zoom.auto_recording'),
        //     'audio' => config('zoom.audio'),
        //     'meeting_invitees' => [
        //         ['email' => 'sd@domain.com'],
        //       ]
        //   ]);


        //   return $user->meetings()->all();

        //   return $user->meetings()->save($meeting);

         
        // $user = Zoom::user()->first();
// return $user;
        // $webinar = Zoom::webinar();
        // return $webinar;
        // $webinar = Zoom::webinar()->make([
        //     'topic' => 'New webinar',
            // 'type' => 8,
        //     'start_time' => '2022-09-19T13:18:38Z' 
        //   ]);
// return $webinar;
        //   $webinar->recurrence()->make([
        //     'type' => 2,
        //     'repeat_interval' => 1,
        //     'weekly_days' => '2',
        //     'end_times' => 5
        //   ]);
      
        //   $webinar->settings()->make([
        //     'approval_type' => 1,
        //     'registration_type' => 2,
        //     'enforce_login' => false,
        //   ]);
      
        //   return $user->webinars()->save($webinar);




        $user = Zoom::user()->first();

        $meeting = Zoom::meeting()->make([
            'topic' => $req->name,
            // 'type' => 8,
            'start_time' => $req->start_time, // best to use a Carbon instance here.
            'duration'=>$req->duration,
            'password'=>$req->password,
            'timezone'=>'Africa\/Casablanca'
          ]);

          $meeting->settings()->make([
            'join_before_host' => true,
            'host_video'=>false,
            'participant_video'=>false,
            'mute_upon_entry'=>true,
            'approval_type' => 1,
            'registration_type' => 2,
            'enforce_login' => false,
            'waiting_room' => false,
            'auto_recording' =>config('zoom.auto_recording'),
            'audio' => config('zoom.audio'),
            'meeting_invitees' => [
                ['email' => 'sd@domain.com'],
              ]
          ]);


          $info = $user->meetings()->save($meeting);


return $info;









    }

    public function add_conferance(Request $req){
// return $req->start_time.':'.date('s',strtotime($req->start_time)).'Z';
// return date('s',strtotime($req->start_time));
        $user = Zoom::user()->first();

        $meeting = Zoom::meeting()->make([
            'topic' => $req->name,
            // 'type' => 8,
            'start_time' => $req->start_time.':'.date('s',strtotime($req->start_time)).'Z', // best to use a Carbon instance here.
            'duration'=>$req->duration,
            'password'=>$req->password,
            'timezone'=>'Africa\/Casablanca'
          ]);
// return $meeting;
          $meeting->settings()->make([
            'join_before_host' => true,
            'host_video'=>false,
            'participant_video'=>false,
            'mute_upon_entry'=>true,
            'approval_type' => 1,
            'registration_type' => 2,
            'enforce_login' => false,
            'waiting_room' => false,
            'auto_recording' =>config('zoom.auto_recording'),
            'audio' => config('zoom.audio'),
            'meeting_invitees' => [
                ['email' => 'sd@domain.com'],
              ]
          ]);


          $info = $user->meetings()->save($meeting);

// return $info->topic;
          Onlines::create([
            'meeting_id'=>$info->id,
            'host_id'=>session('user')['id'],
            'name'=>$req->name,
            // 'start_time'=>$req->start_time,
            'start_time' =>  $req->start_time.':'.date('s',strtotime($req->start_time)).'Z', // best to use a Carbon instance here.

            
            'duration'=>$req->duration,
            'start_url'=>$info->start_url,
            'join_url'=>$info->join_url,
            'password'=>$req->password,
            'permission'=>$req->permission,
            'capacity'=>$req->capacity,
            'description'=>$req->description,
            'participants'=>0,
            'etat'=>'wait',
            'join'=>'',
            'category'=>$req->category

        ]);

          return Redirect('/getInfo');

    }







public function getInfo(){

        $meetings = Onlines::where('host_id',session('user')['id'])->get();
        return view('conferance')->with('meetings',$meetings);


}



public function delete(Request $req){

    $meeting = Zoom::meeting()->find($req->id_delete);
    $meeting->delete();

    Onlines::where('meeting_id',$req->id_delete)->delete();

    return Redirect('/getInfo');

}


public function aa(){
    return date('Y-m-d').'T'.date('h:i:s').'Z';
}
public function update(Request $req){

    $meeting = Zoom::meeting()->find($req->id_meeting_e);
    // return $meeting;
    // return $meeting->invitation;
    $meeting->update([
        'topic' => $req->name_e,
        'start_time' => $req->start_time_e.':'.date('s',strtotime($req->start_time)).'Z', // best to use a Carbon instance here.
        'duration'=>$req->duration_e,
        'password'=>$req->password_e,

    ]);

    Onlines::where('meeting_id',$req->id_meeting_e)->update([
        'name'=>$req->name_e,
        'start_time'=>$req->start_time_e.':'.date('s',strtotime($req->start_time)).'Z',
        'duration'=>$req->duration_e,
        'password'=>$req->password_e,
        'permission'=>$req->permission_e,
        'description'=>$req->description_e,
        'capacity'=>$req->capacity_e,
        'category'=>$req->category_e

    ]);

    return Redirect('/getInfo');

}

public function edit1($id){


    $meet = Onlines::where('meeting_id',$id)->first();
    return response()->json([
        'status' => 200,
        'meet' => $meet,
    ]);

}


public function delete1($id){


    $meet = Onlines::where('meeting_id',$id)->first();
    return response()->json([
        'status' => 200,
        'meet' => $meet,
    ]);

}


public function delete_all(Request $req){

    $str = $req->del_all;

    $info = explode(',',$str);
    // return $info;
    foreach($info as $meet){
        $meeting = Zoom::meeting()->find($meet);
        $meeting->delete();
  


    Onlines::where('meeting_id',$meet)->delete();
}
    return Redirect('/getInfo');

}


public function delete_all1($str){

    // $info = implode(',',$str);
    // $meet = Onlines::whereIn('meeting_id',$info);
    // console.log($meet);
    return response()->json([
        'status' => 200,
        'meet' => $str,
    ]);

}


public function admin(){

    if(!session('admin')){
        return view('/admin_login');
    }
    $Jan=0;$Feb=0;$Mar=0;$Apr=0;$May=0;$Jun=0;$Jul=0;$Aug=0;$Sep=0;$Oct=0;$Nov=0;$Dec=0;

    $meetings = Onlines::all();
    $user_t = array();
    foreach($meetings as $meet){

        $date=$meet['created_at'];

        if($date->format('M') == 'Jan'){
            $Jun++;
            
        }
        if($date->format('M') == 'Feb'){
            $Feb++;
            
        }
        if($date->format('M') == 'Mar'){
            $Mar++;
            
        }
        if($date->format('M') == 'Apr'){
            $Apr++;
            
        }
        if($date->format('M') == 'May'){
            $May++;
            
        }
        if($date->format('M') == 'Jun'){
            $Jun++;
            
        }
        if($date->format('M') == 'Jul'){
            $Jul++;
            
        }
        if($date->format('M') == 'Aug'){
            $Aug++;
            
        }
        if($date->format('M') == 'Sep'){
            $Sep++;
            
        }
        if($date->format('M') == 'Oct'){
            $Oct++;
            
        }
        if($date->format('M') == 'Nov'){
            $Nov++;
            
        }
        if($date->format('M') == 'Dec'){
            $Dec++;
            
        }
        $user_id = $meet['host_id'];
        $user = Regester::find($user_id);
        $username = $user['username'];
        $user_t[sizeof($user_t)] = $username;

    }

// return $user_t;
    $data1_t=array(); 
                        $data2_t=array();
                        $data3_t=array();
                        $total_final=array();

                        $data1 = Onlines::orderBy('created_at','DESC')->get();
                        $data2 = Reunion::orderBy('created_at','DESC')->get();
                        $data3 = Regester::orderBy('created_at','DESC')->get();

                        foreach($data1 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data1_t[sizeof($data1_t)] = $data->created_at;


                        }
                        foreach($data2 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data2_t[sizeof($data2_t)] = $data->created_at;

                        }
                        foreach($data3 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data3_t[sizeof($data3_t)] = $data->created_at;

                        }

                        $total_r = array();
                        $totat_r = rsort($total_final);
                        $n= 0;
                        $total_m=[];
                        if(sizeof($total_final) > 4){
                            $n = 4;
                        }else {
                            $n = sizeof($total_final);
                        }
                        for($i = 0 ;$i<$n;$i++){
                            if(in_array($total_final[$i], $data1_t)){
                                $total_m[sizeof($total_m)] = 'new webinar';
                            }elseif(in_array($total_final[$i], $data2_t)){
                                $total_m[sizeof($total_m)] = 'new fast meeting';
                            }elseif(in_array($total_final[$i], $data3_t)){
                                $total_m[sizeof($total_m)] = 'new user added';
                            }
                        }

                        $difference = array();
                        
                        // return $s_e;

                        // return gettype($y_e);
                        // return date('Y-m-d h:m:s');

                        
                        for($j = 0 ;$j<sizeof($total_final);$j++){
                            $time1 = date('Y-m-d h:m:s');
                            $y = (int)date('Y');
                            $m = (int)date('m');
                            $d = (int)date('d');
                            $h = (int)date('h');
                            $i = (int)date('i');
                            $time2 = $total_final[$j];
                            $y_e = (int)$time2->format('Y');
                            $m_e = (int)$time2->format('m');
                            $d_e = (int)$time2->format('d');
                            $h_e = (int)$time2->format('h');
                            $i_e = (int)$time2->format('i');
                            $s = ($y - $y_e)*365*24 + ($m - $m_e)*30*24 + ($d - $d_e)*24 + ($h - $h_e);
                            $s_t = $s;
                            $s_e = $s_t.' Hours ago';
                          
                            if($s<1){
                                $s_t = ($i - $i_e);
                                $s_e = $s_t.' Minutes ago';
                            }
                            if($s>24){
                                $s_t = (int)($s/24);
                                $s_e = $s_t.' Days ago';
                            }
                            if($s>24*30){
                                $s_t = (int)($s/(24*30));
                                $s_e = $s_t.' Months ago';
                            }
                            $difference[sizeof($difference)] = $s_e;
                        }

                        // return $difference;

    return view('admin')->with('meetings',$meetings)->with('Jan',$Jan)->with('Feb',$Feb)->with('Mar',$Mar)->with('Apr',$Apr)->with('May',$May)->with('Jun',$Jun)->with('Jul',$Jul)->with('Aug',$Aug)->with('Sep',$Sep)->with('Oct',$Oct)->with('Nov',$Nov)->with('Dec',$Dec)->with('total_m',$total_m)->with('difference',$difference)->with('user_t',$user_t);


}


public function accept_etat($id){

    $meetings = Onlines::where('meeting_id',$id)->update(
        [
            'etat'=>'accept',
        ]
    );

    return response()->json([
        'status' => 200,
        'etat' => 'accept',
    ]);

}



public function refuse_etat($id){

    $meetings = Onlines::where('meeting_id',$id)->update(
        [
            'etat'=>'refuse',
        ]
    );

    return response()->json([
        'status' => 200,
        'etat' => 'refuse',
    ]);

}




public function search(Request $request){

//      $meetings = Onlines::all();

//     if($value !='')
//     {
//     $meetings=Onlines::where('name','LIKE','%'.$value."%")->get();

// }


if($request->ajax())
     {
      $output = '';
      $test='';
      $query = $request->get('query');
      $data = Onlines::all();
      if($query != '')
      {
       $data = Onlines::where('name','LIKE','%'.$query."%")->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        $i=0;
       foreach($data as $meet)
       {
        $user_id = $meet['host_id'];
        $user = Regester::find($user_id);
        $username = $user['username'];
        $user_t[sizeof($user_t)] = $username;
        $test='';
        if($meet->etat=="refuse")
            $test.='<td>
                <label class="label label-danger">'.$meet->etat.'</label>
            </td>';
            elseif($meet->etat=="accept")
            $test.='<td>
                <label class="label label-success">'.$meet->etat.'</label>
            </td>';
            else
            $test.='<td>
                <button class="btn bg-transparent" href="accept_etat" id="accept_etat"  value="'.$meet->meeting_id.'">                                            
                    <img src="images/accept.png" width="20px" height="20px" alt="">
                <button class="btn bg-transparent" href="refuse_etat" id="refuse_etat"  value="'.$meet->meeting_id.'">                                            
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="20" height="20"
                        viewBox="0 0 24 24"
                        style=" fill:#000000;"><path d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 17.390625 15.429688 L 15.429688 17.390625 L 12 13.960938 L 8.570313 17.390625 L 6.609375 15.429688 L 10.039063 12 L 6.609375 8.570313 L 8.570313 6.609375 L 12 10.039063 L 15.429688 6.609375 L 17.390625 8.570313 L 13.960938 12 Z"></path>
                    </svg>                                                
                </button>
            </td>';
        $output .= '
        <tr>
            <td>'.$meet->meeting_id.'</td>
            <td>'.$user_t[$i].'</td>
            <td>'.$meet->name.'</td>
            <td><label class="label label-danger">'.$meet->created_at.'</label></td>
            <td>'.$meet->start_time.'</td>
            <td>'.$meet->duration.' min'.'</td>
            <td>'.substr($meet["start_url"],0,17).'</td>
            <td>'.substr($meet["join_url"],0,17).'</td>
            <td id="text1" hidden style="display:hidden">'.$meet['start_url'].'</td>
            <td id="text2" hidden style="display:hidden">'.$meet['join_url'].'</td>
            <td>
                <label class="label label-primary">'.$meet->permission.'</label>
            </td>
            <td>'.$test.'</td>
        </tr>
        ';
        $i++;
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }






    




    public function order_by_permission(Request $request){
        
        if($request->ajax())
             {
              $output = '';
              $test='';
              $query = $request->get('query');
              $query2 = $request->get('query2');
              $data = Onlines::all();
              if($query2 == 'all' ){
                $data = Onlines::where('permission',$query)->get();
              }elseif($query == 'all' ){
                $data = Onlines::where('etat',$query2)->get();
              }
              elseif($query == 'private' || $query == 'public'  )
              {
               $data = Onlines::where('permission',$query)->where('etat',$query2)->get();
            //    echo $data;
              }               
              if($query == 'all' && $query2 == 'all' ){
                $data = Onlines::all();
              }
              $total_row = $data->count();
              if($total_row > 0)
              {
               foreach($data as $meet)
               {
                $user_id = $meet['host_id'];
                $user = Regester::find($user_id);
                $username = $user['username'];
                $test='';
                if($meet->etat=="refuse")
                    $test.='<td>
                        <label class="label label-danger">'.$meet->etat.'</label>
                    </td>';
                    elseif($meet->etat=="accept")
                    $test.='<td>
                        <label class="label label-success">'.$meet->etat.'</label>
                    </td>';
                    else
                    $test.='<td>
                        <button class="btn bg-transparent" href="accept_etat" id="accept_etat"  value="'.$meet->meeting_id.'">                                            
                            <img src="images/accept.png" width="20px" height="20px" alt="">
                        <button class="btn bg-transparent" href="refuse_etat" id="refuse_etat"  value="'.$meet->meeting_id.'">                                            
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="20" height="20"
                                viewBox="0 0 24 24"
                                style=" fill:#000000;"><path d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 17.390625 15.429688 L 15.429688 17.390625 L 12 13.960938 L 8.570313 17.390625 L 6.609375 15.429688 L 10.039063 12 L 6.609375 8.570313 L 8.570313 6.609375 L 12 10.039063 L 15.429688 6.609375 L 17.390625 8.570313 L 13.960938 12 Z"></path>
                            </svg>                                                
                        </button>
                    </td>';
                $output .= '
                <tr>
                    <td>'.$meet->meeting_id.'</td>
                    <td>'.$username.'</td>
                    <td>'.$meet->name.'</td>
                    <td><label class="label label-danger">'.$meet->created_at.'</label></td>
                    <td>'.$meet->start_time.'</td>
                    <td>'.$meet->duration.' min'.'</td>
                    <td>'.substr($meet["start_url"],0,17).'</td>
                    <td>'.substr($meet["join_url"],0,17).'</td>
                    <td id="text1" hidden style="display:hidden">'.$meet['start_url'].'</td>
                    <td id="text2" hidden style="display:hidden">'.$meet['join_url'].'</td>
                    <td>
                        <label class="label label-primary">'.$meet->permission.'</label>
                    </td>
                    <td>'.$test.'</td>
                </tr>
                ';
               }
              }
              else
              {
               $output = '
               <tr>
                <td align="center" colspan="5">No Data Found</td>
               </tr>
               ';
              }
              $data = array(
               'table_data'  => $output,
               'total_data'  => $total_row
              );
        
              echo json_encode($data);
             }
            }

            public function order_by_etat(Request $request){
        
                if($request->ajax())
                     {
                      $output = '';
                      $test='';
                      $query = $request->get('query');
                      $query2 = $request->get('query2');

                      $data = Onlines::all();
                      if($query2 == 'all'){
                        $data = Onlines::where('etat',$query)->get();
                      }elseif($query == 'all' ){
                        $data = Onlines::where('permission',$query2)->get();
                      }
                      elseif($query == 'accept' || $query == 'refuse' || $query == 'wait' )
                      {
                       $data = Onlines::where('etat',$query)->where('permission',$query2)->get();
                    //    echo $data;
                      }               
                      if($query == 'all' && $query2 == 'all' ){
                        $data = Onlines::all();
                      }
                      $total_row = $data->count();
                      if($total_row > 0)
                      {
                       foreach($data as $meet)
                       {
                        $user_id = $meet['host_id'];
                        $user = Regester::find($user_id);
                        $username = $user['username'];
                        $test='';
                        if($meet->etat=="refuse")
                            $test.='<td>
                                <label class="label label-danger">'.$meet->etat.'</label>
                            </td>';
                            elseif($meet->etat=="accept")
                            $test.='<td>
                                <label class="label label-success">'.$meet->etat.'</label>
                            </td>';
                            else
                            $test.='<td>
                                <button class="btn bg-transparent" href="accept_etat" id="accept_etat"  value="'.$meet->meeting_id.'">                                            
                                    <img src="images/accept.png" width="20px" height="20px" alt="">
                                <button class="btn bg-transparent" href="refuse_etat" id="refuse_etat"  value="'.$meet->meeting_id.'">                                            
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="20" height="20"
                                        viewBox="0 0 24 24"
                                        style=" fill:#000000;"><path d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 17.390625 15.429688 L 15.429688 17.390625 L 12 13.960938 L 8.570313 17.390625 L 6.609375 15.429688 L 10.039063 12 L 6.609375 8.570313 L 8.570313 6.609375 L 12 10.039063 L 15.429688 6.609375 L 17.390625 8.570313 L 13.960938 12 Z"></path>
                                    </svg>                                                
                                </button>
                            </td>';
                        $output .= '
                        <tr>
                            <td>'.$meet->meeting_id.'</td>
                            <td>'.$username.'</td>
                            <td>'.$meet->name.'</td>
                            <td><label class="label label-danger">'.$meet->created_at.'</label></td>
                            <td>'.$meet->start_time.'</td>
                            <td>'.$meet->duration.' min'.'</td>
                            <td>'.substr($meet["start_url"],0,17).'</td>
                            <td>'.substr($meet["join_url"],0,17).'</td>
                            <td id="text1" hidden style="display:hidden">'.$meet['start_url'].'</td>
                            <td id="text2" hidden style="display:hidden">'.$meet['join_url'].'</td>
                            <td>
                                <label class="label label-primary">'.$meet->permission.'</label>
                            </td>
                            <td>'.$test.'</td>
                        </tr>
                        ';
                       }
                      }
                      else
                      {
                       $output = '
                       <tr>
                        <td align="center" colspan="5">No Data Found</td>
                       </tr>
                       ';
                      }
                      $data = array(
                       'table_data'  => $output,
                       'total_data'  => $total_row
                      );
                
                      echo json_encode($data);
                     }
                    }


                    public function feed(){
                        $data1_t=array(); 
                        $data2_t=array();
                        $data3_t=array();
                        $total_final=array();

                        $data1 = Onlines::orderBy('created_at','DESC')->get();
                        $data2 = Reunion::orderBy('created_at','DESC')->get();
                        $data3 = Regester::orderBy('created_at','DESC')->get();

                        foreach($data1 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data1_t[sizeof($data1_t)] = $data->created_at;


                        }
                        foreach($data2 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data2_t[sizeof($data2_t)] = $data->created_at;

                        }
                        foreach($data3 as $data){
                            $total_final[sizeof($total_final)] = $data->created_at;
                            $data3_t[sizeof($data3_t)] = $data->created_at;

                        }

                        $total_r = array();
                        $totat_r = rsort($total_final);
 
                        $total_m=[];
                        for($i = 0 ;$i<4;$i++){
                            if(in_array($total_final[$i], $data1_t)){
                                $total_m[sizeof($total_m)] = 'new webinar';
                            }elseif(in_array($total_final[$i], $data2_t)){
                                $total_m[sizeof($total_m)] = 'new fast meeting';
                            }elseif(in_array($total_final[$i], $data3_t)){
                                $total_m[sizeof($total_m)] = 'new user added';
                            }
                        }
                        return $total_m;
                    }

// return $meetings;
// return response()->json([
//     'status' => 200,
//     'meetings' => $output
//  ]);



public function webinar(){

    $webinars = Onlines::where('permission','public')->where('etat','accept')->get();
    $user_t = array();
    $difference = array();
    $image = array();
    foreach($webinars as $webinar){
        $user_id = $webinar['host_id'];
        $user = Regester::find($user_id);
        $username = $user['username'];
        $user_t[sizeof($user_t)] = $username;
        $img = $user['image'];
        $image[sizeof($image)] = $img;
        $time1 = date('Y-m-d h:m:s');
        $y = (int)date('Y');
        $m = (int)date('m');
        $d = (int)date('d');
        $h = (int)date('h');
        $i = (int)date('i');
        $time2 = strtotime($webinar['created_at']);
        $y_e = (int)date('Y', $time2);
        $m_e = (int)date('m', $time2);
        $d_e = (int)date('d', $time2);
        $h_e = (int)date('h', $time2);
        $i_e = (int)date('i', $time2);
        $s = ($y - $y_e)*365*24 + ($m - $m_e)*30*24 + ($d - $d_e)*24 + ($h - $h_e);
        $s_t = $s;
        $s_e = $s_t.' Hours ago';
        
        if($s<1){
            $s_t = ($i - $i_e);
            $s_e = $s_t.' Minutes ago';
        }
        if($s>24){
            $s_t = (int)($s/24);
            $s_e = $s_t.' Days ago';
        }
        if($s>24*30){
            $s_t = (int)($s/(24*30));
            $s_e = $s_t.' Months ago';
        }
        $difference[sizeof($difference)] = $s_e;



    }
    // return date("Y-m-d H:i:s" ,mktime(date("H")+1,date("i")+59,0,date("m"),date("d"),date("Y")));
    // return date("Y-m-d H:i:s" ,mktime(date("H")+1,date("i")+59,0,date("m"),date("d"),date("Y")));
    // return date("Y-m-d H:i:s" ,mktime(date("H")+1,date("i")-5,0,date("m"),date("d"),date("Y")));
    $str = date("Y-m-d").'T'.date("H:i:s" ,mktime(date("H"),date("i")+59,0,date("m"),date("d"),date("Y"))).'Z';
    // return $webinars[0]['start_time']>strlen($str);
    // return $str;
    $web_first = Onlines::where('permission','public')->where('etat','accept')->orderBy('created_at','DESC')->where('start_time','>',$str)->get();
    // return $web_first;

    return view('webinar')->with('webinars',$webinars)->with('difference',$difference)->with('user_t',$user_t)->with('image',$image);
}





public function search_conferance(){

    $meetings = Onlines::where('etat','accept')->where('permission','public')->get();

    $user_t = array();
    $meets = array();

    foreach($meetings as $meet){
        $test2 = $meet['join'];
        $test1 = explode(',',$test2);
        if(!in_array(session('user')['id'],$test1)){

            $user_id = $meet['host_id'];
            $user = Regester::find($user_id);
            $username = $user['username'];
            $user_t[sizeof($user_t)] = $username;
            $meets[sizeof($meets)] = $meet;
        }
    }

return view('search')->with('meetings',$meets)->with('user_t',$user_t);
}








public function search_conf(Request $request){



if($request->ajax())
{
 $output = '';
 $test='';
 $query = $request->get('query');
 $data = Onlines::where('etat','accept')->where('permission','public')->get();
 if($query != '')
 {
  $data = Onlines::where('name','LIKE','%'.$query."%")->where('etat','accept')->where('permission','public')->get();
 }
 $total_row = $data->count();
 if($total_row > 0)
 {
  foreach($data as $meet)
  {
    $test2 = $meet['join'];
    // unset($test1[sizeof($test1)-1]); 
    $test1 = explode(',',$test2);
    if(!in_array(session('user')['id'],$test1)){
    $user_id = $meet['host_id'];
    $user = Regester::find($user_id);
    $username = $user['username'];
    $test='';
    $output .= '
   <tr>
   <th scope="row">'.$meet->meeting_id.'</th>
   <td>'.$username.'</td>
   <td>'.$meet->name.'</td>
   <td>'.$meet->created_at.'</td>
   <td>'.$meet->start_time.'</td>
   <td>'.$meet->duration.'</td>
   <td><button value="'.$meet->meeting_id.'" id="join">+</button></td>
   </tr>
   ';
    }
  }
 }
 else
 {
  $output = '
  <tr>
   <td align="center" colspan="5">No Data Found</td>
  </tr>
  ';
 }
 $data = array(
  'table_data'  => $output,
  'total_data'  => $total_row
 );

 echo json_encode($data);
}
}






public function join_conf($id){
    $meetings = Onlines::where('meeting_id',$id)->first();
    $val = $meetings['join'];
    $val2 = $meetings['participants']+1;

    $val .= session('user')['id'];
    $val .= ',';
    $meetings = Onlines::where('meeting_id',$id)->update(
        [
            'join'=>$val,
            'participants'=>$val2,
        ]
    );
    // return $val;
    return response()->json([
        'status' => 200,
        'etat' => 'accept',
    ]);

}




public function myConf(){

    $webinars = Onlines::where('permission','public')->where('etat','accept')->where('host_id',session('user')['id'])->get();
    $user_t = array();
    $difference = array();
    $image = array();
    foreach($webinars as $webinar){
        $user_id = $webinar['host_id'];
        $user = Regester::find($user_id);
        $username = $user['username'];
        $user_t[sizeof($user_t)] = $username;
        $img = $user['image'];
        $image[sizeof($image)] = $img;
        $time1 = date('Y-m-d h:m:s');
        $y = (int)date('Y');
        $m = (int)date('m');
        $d = (int)date('d');
        $h = (int)date('h');
        $i = (int)date('i');
        $time2 = strtotime($webinar['created_at']);
        $y_e = (int)date('Y', $time2);
        $m_e = (int)date('m', $time2);
        $d_e = (int)date('d', $time2);
        $h_e = (int)date('h', $time2);
        $i_e = (int)date('i', $time2);
        $s = ($y - $y_e)*365*24 + ($m - $m_e)*30*24 + ($d - $d_e)*24 + ($h - $h_e);
        $s_t = $s;
        $s_e = $s_t.' Hours ago';
        
        if($s<1){
            $s_t = ($i - $i_e);
            $s_e = $s_t.' Minutes ago';
        }
        if($s>24){
            $s_t = (int)($s/24);
            $s_e = $s_t.' Days ago';
        }
        if($s>24*30){
            $s_t = (int)($s/(24*30));
            $s_e = $s_t.' Months ago';
        }
        $difference[sizeof($difference)] = $s_e;



    }
    return view('myConf')->with('webinars',$webinars)->with('difference',$difference)->with('user_t',$user_t)->with('image',$image);

}





public function more($id){
    $meet = Onlines::where('meeting_id',$id)->first();
    return response()->json([
        'status' => 200,
        'meet' => $meet,
    ]);

}


public function allEmail($id){
    $meet = Onlines::where('meeting_id',$id)->first(); 
    $infos = explode(',',$meet['join']);
    // return sizeof($infos);
    unset($infos[sizeof($infos)-1]);
    $users=[];
    foreach($infos as $info){
        $users[sizeof($users)] = Regester::find($info)['email'];
    }
    $output='';
    // $imge = 'images/icon8-send.gif';
    if($users){
        foreach($users as $user){
        $output .= '
            <tr>
            <td>'.$user.'</td>
            <td>
                <form action="https://formsubmit.co/'.$user.'" method="POST">
                    <input type="text" name="id" hidden value="'.$id.'">
                    <input type="text" name="password" hidden value="'.$meet["password"].'">
                    <input type="text" name="Link" hidden value="'.$meet["join_url"].'">
                    <input type="text" name="start time" hidden value="'.$meet["start_time"].'">
                    <input type="text" name="message" hidden value="Thank you have a nice.">


                    <button type="submit">                                                    
                    <img src="images/icons8-send.gif" width="20px" height="20px" alt="">
                    </button>
                </form>
            </td>
            </tr>
            ';
        }
    }
 
 else
 {
  $output .= '
  <tr>
   <td align="center" colspan="5">No Data Found</td>
  </tr>
  ';
 }
    return response()->json([
        'status' => 200,
        'meet' => $output,
    ]);

}














}

