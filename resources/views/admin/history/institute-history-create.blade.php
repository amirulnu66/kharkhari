@extends('admin.layouts.master')
@section('title', 'Institute History here')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading admin-bold-title admin-center-title">
                      Create Institute History here..
                    </header>

                    <div class="panel-body">
                        <form role="form" id="history-request">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>History Title</label>
                                <input type="text"  name="history_title" id="history-title" class="form-control" required="">
                            </div>

                            <div class="form-group">
                                <label>History Description</label>
                                 <textarea  name="history_desc" id="history-desc" class="form-control" rows="8"></textarea>
                            </div>
                            <button type="button" id="submit-btn" class="btn btn-info">Submit</button>
                        </form>

                    
                    </div>
                </section>
            </div>

        </div>
</section>
@stop
@section('js-script')
<script>
//Institute history data insert here
  $('#submit-btn').click(function(){
     //alert('djklfjaskdjfk');
  // ajax request
         $.ajax({
             url: '/admin/institute/history/store',
             type: 'post',
             cache: false,
             data: $('form#history-request').serialize(),
             datatype: 'json',
             beforeSend: function() {
                 
             },

             success:function(data){
              // 
              if(data.status=='success') {
                     swal({
                    title: "Success",
                    text: "Institute History Posted Successfully",
                    icon: "success",
                    button: "Close",
                  });
              }
              //for empty field
              $('#history-title').val('');
              $('#history-desc').val('');
             },

             error:function(data){
               alert(JSON.stringify(data));
             }
         });
  });




</script>

@endsection
