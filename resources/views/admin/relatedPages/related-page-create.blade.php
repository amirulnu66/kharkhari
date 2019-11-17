@extends('admin.layouts.master')
@section('title', 'Related Pages')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
               @if(Session::has('success'))
                 <div id="w0-success-0" class="alert-success alert-auto-hide alert fade in" style="opacity: 423.642;">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     <h4><i class="icon fa fa-check"></i> {{ Session::get('success') }} </h4>
                 </div>
                 @elseif(Session::has('feiled'))
                     <div id="w0-success-0" class="alert-warning alert-auto-hide alert fade in" style="opacity: 423.642;">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         <h4><i class="icon fa fa-check"></i> {{ Session::get('feiled') }} </h4>
                     </div>
                 @endif
                <section class="panel">
                    <header class="panel-heading">
                      Create Pages here..
                    </header>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{URL::to('/admin/related/page/store')}}">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Page Slug</label>
                                <input type="text"  name="page_slug" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"  name="menu_name" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  name="page_title" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Sub Title</label>
                                <input type="text"  name="sub_title" class="form-control" required="">
                            </div>  
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="textarea" name="page_desc" style="width: 100%; height: 220px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px;"></textarea>
                            </div>                              

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop
@section('js-script')

 <script type="text/javascript">
    // text area editor function
    $(function () {
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });
  </script>

@endsection
