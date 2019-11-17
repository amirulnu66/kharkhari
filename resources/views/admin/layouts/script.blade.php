
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{URL::to('admin/js/jquery.js')}}"></script>
    <script src="{{URL::to('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.nicescroll.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.sparkline.js')}}"></script>
    <script src="{{URL::to('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{URL::to('admin/js/owl.carousel.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{URL::to('admin/js/respond.min.js')}}"></script>
    <script src="{{URL::to('admin/js/slidebars.min.js')}}"></script>
    <script src="{{URL::to('admin/js/common-scripts.js')}}"></script>
    <script src="{{URL::to('admin/js/sparkline-chart.js')}}"></script>
    <script src="{{URL::to('admin/js/easy-pie-chart.js')}}"></script>
    <script src="{{URL::to('admin/js/js/count.js')}}"></script>
    <script src="{{URL::to('admin/assets/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{URL::to('admin/js/jquery.tagsinput.js')}}"></script>
    <script src="{{URL::to('admin/js/form-component.js')}}"></script>
    <script src="{{URL::to('admin/js/bootstrap-switch.js')}}"></script>
    <script src="{{URL::to('admin/js/sweetalert.min.js')}}"></script>
    <script src="{{URL::to('admin/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::to('admin/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script src="http://thevectorlab.net/flatlab/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    @yield('js-script')
  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true

          });

          $('.summary').summernote({
            height: 150
        });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>