
       <div class="details col-md-12">
         <span id="MainContent_lblbcontent"></span>   
         <div class="panel panel-tab rounded shadow">
              <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">    
                <h3 class="exam-result">পরীক্ষার ফলাফল</h3>  
              <!--This variabale get $resultSheet & $assessmentList frontend\HomeController-->

          @if(!empty($resultSheet) AND count($resultSheet)>0 AND !empty($assessmentList) AND count($assessmentList)>0)  
              {{--assessment array list--}}
              @php $assessmentArrayList = array(); @endphp
              {{--assessment table--}}
                  <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    {{--student Name and id th--}}
                    <th width="180px">
                        <table class="table-bordered" cellpadding="10">
                            <tbody>
                            <tr>
                                {{--Subject Name--}}
                                <td>
                                    <div class="input-group">
                                        <input type="text" readonly class="form-control text-center" value="Subject">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </th>
                    {{--assessement list looping--}}
                    @foreach($assessmentList as $categoryId=>$categoryDetails)
                        {{-- Category All Asssessments list--}}
                        @php $assessmentList = $categoryDetails->ass_list; @endphp
                        {{--checking--}}
                        @if(count($assessmentList)>0)
                            <th class="text-center">
                                {{--category name--}}
                                {{$categoryDetails->cat_name}}
                                <table class="table-bordered" cellpadding="10">
                                    <tbody>
                                    <tr>
                                        @foreach($assessmentList as $assessmentId=>$assessmentDetails)
                                            <td style="width: 200px">
                                                <div class="input-group">
                                                    <input type="text" readonly class="form-control text-center" value="{{$assessmentDetails->ass_name}}">
                                                </div>
                                            </td>
                                            {{--assessment array list maker--}}
                                            @php $assessmentArrayList[$categoryId][$assessmentId] = $assessmentDetails->ass_points; @endphp
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </th>
                        @endif
                    @endforeach
                    <th width="150px">
                        <table class="table-bordered" cellpadding="10" width="100%">
                            <tbody>
                            <tr>
                                <td style="width: 250px">
                                    <div class="input-group">
                                        <input type="text" readonly class="form-control text-center" value="%">
                                    </div>
                                </td>
                                <td style="width: 250px">
                                    <div class="input-group">
                                        <input type="text" readonly class="form-control text-center" value="Grade">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </th>
                </tr>
                </thead>
                <tbody>
                {{--find grdde sheet--}}
                @php $subjectGradeList = $resultSheet->grade; @endphp
                {{--checking--}}
                @if(!empty($subjectGradeList) AND count($subjectGradeList)>0)
                    {{--subject grade sheet looping--}}
                    @foreach($subjectGradeList as $index=>$subjectGradeDetails)
                        <tr>
                            <td>{{$subjectGradeDetails->has_group==0?$subjectGradeDetails->sub_name:$subjectGradeDetails->sub_group_name}}</td>
                            {{--find subject mark list--}}
                            @php $subjectMarkList = $subjectGradeDetails->mark; @endphp
                            {{--checking subject mark list--}}
                            @if(!empty($subjectMarkList) AND count($subjectMarkList)>0)
                                {{-- mark category list--}}
                                @php $markCategoryArrayList = array(); @endphp
                                {{--mark category list looping--}}
                                @foreach($subjectMarkList->cat_list as $markCatIndex=>$markCatId)
                                    {{--mark categroy array list maker--}}
                                    @php $markCategoryArrayList[$markCatId] = $markCatIndex; @endphp
                                @endforeach


                                {{--now assessment array category list looping--}}
                                @foreach($assessmentArrayList as $assCatId=>$assAssList)
                                    {{--checking assCatId in the markCategoryArrayList --}}
                                    @if(array_key_exists($assCatId, $markCategoryArrayList)==true)
                                        {{--$myCatId--}}
                                        @php $myCatId = 'cat_'.$assCatId; @endphp
                                        {{--find mark assemmsent list--}}
                                        @php $markAssessmentList = $subjectMarkList->$myCatId; @endphp
                                        {{-- mark assessment array list--}}
                                        @php $markAssessmentArrayList = array(); @endphp
                                        {{--mark category list looping--}}
                                        @foreach($markAssessmentList->ass_list as $markAssIndex=>$markAssId)
                                            {{--mark assessment array list maker--}}
                                            @php $markAssessmentArrayList[$markAssId] = $markAssIndex; @endphp
                                        @endforeach
                                        <td>
                                            <table>
                                                <tbody>
                                                <tr>
                                                    {{--now assessment array assessment list looping--}}
                                                    @foreach($assAssList as $assAssId=>$assAssPoint)
                                                        {{--checking assCatId in the markCategoryArrayList --}}
                                                        @if(array_key_exists($assAssId, $markAssessmentArrayList)==true)
                                                            {{--$myCatId--}}
                                                            @php $myAssId = 'ass_'.$assAssId; @endphp
                                                            {{--find mark assemmsent--}}
                                                            @php $markAssessment = $markAssessmentList->$myAssId; @endphp
                                                            <td style="width: 250px" class="text-center">
                                                                {{$markAssessment->ass_mark." / ". $markAssessment->ass_points}}
                                                            </td>
                                                        @else
                                                            <td style="width: 250px" class="text-center">
                                                                {{" / ". $assAssPoint}}
                                                            </td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    @else
                                        <td>
                                            <table>
                                                <tbody>
                                                <tr>
                                                    {{--now assessment array assessment list looping--}}
                                                    @foreach($assAssList as $assAssId=>$assAssPoint)
                                                        <td style="width: 250px" class="text-center">{{" / ". $assAssPoint}}</td>
                                                    @endforeach
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    @endif
                                @endforeach
                            @endif
                            <td width="100px">
                                <table width="100%">
                                    <tbody>
                                    <tr>
                                        <td style="width: 250px">{{$subjectGradeDetails->percentage}}</td>
                                        <td style="width: 250px">{{$subjectGradeDetails->letterGradePoint}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                @else
                    {{'grade sheet not found'}}
                @endif
                </tbody>
            </table>
          @else
            <br/>
            <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in text-center" style="opacity: 423.642; margin: 10px;">
                <h4><i class="fa fa-warning"></i> No Records found. </h4>
            </div>
        @endif      
            </div>
        </div> 
      </div>
