<div class="tab-rutne">
    <div class="panel panel-info ">
        <div class="panel-heading result-title">
            <h3 class="class-routine-title"> এস.এস.সি পরীক্ষার ফলাফল</h3>
        </div>
        <div class="table-overflow result-tab">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="10%">পাশের বছর</th>
                        <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                        <th width="20%">কৃতকার্যের সংখ্যা</th>
                        <th width="20%">জি.পি.এ-5</th>
                        <th width="15%">জি.পি.এ-4</th>
                        <th width="15%">পাশের হার</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty(sscPublicexamResult()))    
                    @foreach(sscPublicexamResult() as $resultInfo)
                    <tr>
                        <td>{{$resultInfo->pass_year}}</td>
                        <td>{{$resultInfo->total_std}}</td>
                        <td>{{$resultInfo->total_pass}}</td>
                        <td>{{$resultInfo->gread_aplus}}</td>
                        <td>{{$resultInfo->gread_a}}</td>
                        <td>{{$resultInfo->pass_presen}}</td>
                    </tr>
                    @endforeach
                @endif    

                </tbody>
            </table>
        </div>
    </div>
</div><!--//tab-rutne-->

<div class="tab-rutne">
    <div class="panel panel-info ">
        <div class="panel-heading result-title">
            <h3 class="class-routine-title"> এস.এস.সি ভোকেশনাল পরীক্ষার ফলাফল</h3>
        </div>
        <div class="table-overflow result-tab">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="10%">পাশের বছর</th>
                        <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                        <th width="20%">কৃতকার্যের সংখ্যা</th>
                        <th width="20%">জি.পি.এ-5</th>
                        <th width="15%">জি.পি.এ-4</th>
                        <th width="15%">পাশের হার</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty(vocationalExamResult()))    
                    @foreach(vocationalExamResult() as $resultInfo)
                    <tr>
                        <td>{{$resultInfo->pass_year}}</td>
                        <td>{{$resultInfo->total_std}}</td>
                        <td>{{$resultInfo->total_pass}}</td>
                        <td>{{$resultInfo->gread_aplus}}</td>
                        <td>{{$resultInfo->gread_a}}</td>
                        <td>{{$resultInfo->pass_presen}}</td>
                    </tr>
                    @endforeach
                @endif    

                </tbody>
            </table>
        </div>
    </div>
</div><!--//tab-rutne-->

<div class="tab-rutne">
    <div class="panel panel-info">
        <div class="panel-heading result-title">
            <h3 class="class-routine-title">জে.এস.সি পরীক্ষার ফলাফল</h3>
        </div>
        <div class="table-overflow result-tab">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th width="10%">পাশের বছর</th>
                        <th width="20%">পরীক্ষার্থীর সংখ্যা</th>
                        <th width="20%">কৃতকার্যের সংখ্যা</th>
                        <th width="20%">জি.পি.এ-5</th>
                        <th width="15%">জি.পি.এ-4</th>
                        <th width="15%">পাশের হার</th>
                    </tr>
                </thead>
                <tbody>
            @if(!empty(jscPublicexamResult()))        
                @foreach(jscPublicexamResult() as $resultInfo)        
                    <tr>
                        <td>{{$resultInfo->pass_year}}</td>
                        <td>{{$resultInfo->total_std}}</td>
                        <td>{{$resultInfo->total_pass}}</td>
                        <td>{{$resultInfo->gread_aplus}}</td>
                        <td>{{$resultInfo->gread_a}}</td>
                        <td>{{$resultInfo->pass_presen}}</td>
                    </tr>
                @endforeach  
            @endif    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--//tab-rutne-->