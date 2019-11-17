<section class="links">
         <h1 class="section-heading text-highlight rightbar-link-bg">
       <span class="line">নোটিশবোর্ড</span> </h1>
      <div id="MainContent_NoticeDiv" class="section-content" style="min-height:200px;">
        <marquee id="MainContent_topnewss" style="color: Black; font-weight: bold;" scrollamount="2" onmouseover="this.setAttribute(&#39;scrollamount&#39;, 0, 0);" onmouseout="this.setAttribute(&#39;scrollamount&#39;, 2, 0);" direction="up">
         <div class="row page-row">
            <div class="events-wrapper col-md-12" style="margin:10px "> 
                    
          {{--checking notice list--}}
<!-- .//This variable get App\Providers\AppServiceProvider -->
          @if(!empty($noticeList) AND count($noticeList)>0)
              {{--notice list looping--}}

            @foreach($noticeList as $notice)
                <article class="news-item page-row has-divider clearfix row">       
                  <div class="col-md-12">
                    <i class="fa fa-newspaper-o"> </i>
                    </div>
                    <div class="details col-md-8 col-sm-12 col-xs-8" style="padding-top:0; margin-top:-38px;margin-left:25px">
                  <!-- This togel have master.php  -->
                        
                   <h4 class="Event_news_aside" > 
                    <a id="{{$notice->id}}" style="cursor: pointer;" class="notice" data-toggle="modal" data-target="#myModal" data-id="{{date('d M, Y', strtotime($notice->date))}}" data-key="{{$notice->file}}" data-title="{{$notice->file_path}}" data-content="{{$notice->description}}">

                  {{$notice->title}}

                </a>

                 </h4> 
                   
                    </div>
               </article>
  
            @endforeach

        @endif
            </div>
          </div>

        </marquee>
         </div>
         

    <!--//section-content-->
        </section>
 <script>

  $(document).ready(function () {

      // notice click event

    $('.notice').click(function () {
        
        // notice date and title, description

            var title= $(this).text();

            var date = $(this).attr('data-id');

            var description = $(this).attr('data-content');



            // notice header and body

            var notice_date = $('#notice_date');

            var notice_header = $('#notice_header');

            var notice_body = $('#notice_body');



            var notice_file = $('#notice_file');

            var notice_file_container = $('#notice_file_container');





            var file = $(this).attr('data-key');

            if(file==1){

                var file_path = $(this).attr('data-title');

        // remove hidden class

                notice_file_container.removeClass('hidden');

                notice_file.attr('href', file_path);

            }else{

                notice_file.removeAttr('href');

                notice_file_container.addClass('hidden');

      }





      // replace modal header and body

            notice_date.html('');

            notice_date.html(date);

            notice_header.html('');

            notice_header.html(title);

            notice_body.html('');

            notice_body.html(description);

        });

    });



</script>       