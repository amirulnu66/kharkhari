<div class="details">
 <span id="MainContent_lblbcontent"></span>   
 <div class="panel panel-tab rounded shadow">
  <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline ">    
    <h3 class="exam-result">ক্লাস রুটিন</h3>                                      
    <div class="table-overflow">
     @if(!empty($dayList) AND !empty($periodList))
     <table class="table table-bordered table-hover">
       <thead>
         <tr>
           <th class="text-center" width="12%">#</th>
           {{--period looping--}}
           @foreach($periodList as $periodId=>$periodName)
           <th class="text-center">{{$periodName}}</th>
           @endforeach
         </tr>
       </thead>
       <tbody>
         {{--day looping--}}
         @foreach($dayList as $dayId=>$dayName)
         <tr>
           <td>{{$dayName}}</td>
           {{--day timetable list--}}
           @php $dayTimeTableList = $timeTableList->$dayId; @endphp
           {{--day timetable array list--}}
           @php $dayTimeTableArrayList = []; @endphp
           {{--checking day timetable--}}
           @if(!empty($dayTimeTableList))
           {{--day timetable looping--}}
           @foreach($dayTimeTableList as $periodId=>$timetableDetails)
           {{--day timetable array list making--}}
           @php $dayTimeTableArrayList[$periodId] = $timetableDetails; @endphp
           @endforeach
           @endif

           {{--period looping--}}
           @foreach($periodList as $periodId=>$periodName)
           {{--checking day timetable--}}
           @if(array_key_exists($periodId, $dayTimeTableArrayList)==true)
           {{--period time table detiail--}}
           @php $periodTimeTable = $dayTimeTableList->$periodId; @endphp
           {{--timetable info--}}
           @if($periodTimeTable)
           <td>
             {{$periodTimeTable->subject_code}}<br/>
             ({{$periodTimeTable->teacher_alias}})
           </td>
           @else
           <td> - </td>
           @endif
           @else
           <td> - </td>
           @endif
           @endforeach
         </tr>
         @endforeach
       </tbody>
     </table>
     @else
     <br/>
     <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in text-center" style="opacity: 423.642; margin: 10px;">
       <h4><i class="fa fa-warning"></i> No result found. </h4>
     </div>
     @endif
   </div> 
   
 </div>
</div> 
</div>

