 @extends('frontend.master')

@section('title')

@section('contant')
<header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
	   
       ব্যবস্থাপনা কমিটি
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              
              <li class="current">	ব্যবস্থাপনা কমিটি</li>
               
          </ul>
     </div>
</header>

         <div class="section-content">
          <div class="entry-content">
        <div class="details col-md-12 col-xs-12">
            <div class="row">
            <div id="MainContent_ImageGalleryListView_lstProducts"s>
                @foreach($govMembers as $Member)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="managing-inner">
                    @if(!empty($Member->member_image))
                        <img class="img-thumb" src="{{url('/assets/members/'.$Member->member_image)}}" alt="photo" width="100%" height="250px">
                    @else
                        <img class="img-thumbnail" src="{{url('/frontend/default/img.jpg')}}" alt="photo" width="320" height="250">
                    @endif
                    <div class="members-text">
                        <h4>{{$Member->member_name}}</h4>
                        <h6 style="">{{$Member->member_desi}}</h6>
                        <p style="">মোবাইলঃ&nbsp;{{$Member->phone}}</p>
                  </div>
                </div>
                {{--.//managing-inner--}}
              </div><!--.//col-md-3-->
              <!--.//col-md-3-->
             @endforeach
            </div>
           </div>
        </div>

         </div>

          </div>

@stop