@extends('admin.layouts.master')
@section('title', 'Managing Committee')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading admin-bold-title admin-center-title">
                      Managing Committee (Joining date & Last date)
                    </header>

                    <div class="panel-body">
                        <form role="form" id="govMember-request">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  name="managing_title" id="page-title" class="form-control" required="">
                            </div>
                             <div class="form-group">
                              <label>Active Time</label>
                              <input type="text"  name="memberin_date" id="in-date" class="form-control date" data-date-format="dd.mm.yyyy">
                          </div>
                             <div class="form-group">
                                <label>Last time</label>
                                <input type="text"  name="memberout_date" id="out-date" class="form-control date" data-date-format="dd.mm.yyyy">
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
     //alert('alert ok');
  // ajax request
         $.ajax({
             url: '/admin/governing/page/title-store',
             type: 'post',
             cache: false,
             data: $('form#govMember-request').serialize(),
             datatype: 'json',
             beforeSend: function() {
                 
             },

             success:function(data){
              // 
              if(data.status=='success') {
                     swal({
                    title: "Success",
                    text: "Data Posted Successfully",
                    icon: "success",
                    button: "Close",
                  });
              }
              //for empty field
              $('#page-title').val('');
              $('#in-date').val('');
              $('#out-date').val('');
             },

             error:function(data){
               alert(JSON.stringify(data));
             }
         });
  });

  //date picker
    $('.form-control.date').datepicker({format: "dd.mm.yyyy"});

</script>

@endsection
