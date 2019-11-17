@extends('admin.layouts.master')
@section('title', 'Managing Committee')
@section('content')
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading admin-bold-title admin-center-title">
                      Managing Committee
                    </header>

                    <div class="panel-body">
                        <form role="form" id="govtitle-request">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{$pageTitle->id}}">
 
                            <div class="form-group">
                                <label>Main Page Title</label>
                                <input type="text"  name="managing_title" class="form-control" value="{{$pageTitle->managing_title}}">
                            </div>
                             <div class="form-group">
                              <label>Active Time</label>
                              <input type="text"  name="memberin_date" class="form-control date" data-date-format="dd.mm.yyyy" value="{{$pageTitle->memberin_date}}">
                          </div>
                             <div class="form-group">
                                <label>Last time</label>
                                <input type="text"  name="memberout_date" class="form-control date" data-date-format="dd.mm.yyyy" value="{{$pageTitle->memberout_date}}">
                            </div>
                            <button type="button" id="submitBtn" class="btn btn-info">Submit</button>
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
  $('#submitBtn').click(function(){
     //alert('alert ok');
  // ajax request
         $.ajax({
             url: '/admin/governing/page/title-update',
             type: 'post',
             cache: false,
             data: $('form#govtitle-request').serialize(),
             datatype: 'json',
             beforeSend: function() {
                 
             },

             success:function(data){
              // 
              if(data.status=='success') {
                     swal({
                    title: "Success",
                    text: "Data updated successfully",
                    icon: "success",
                    button: "Close",
                  });
              }
              //for empty field
              // $('#page-title').val('');
              // $('#in-date').val('');
              // $('#out-date').val('');
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
