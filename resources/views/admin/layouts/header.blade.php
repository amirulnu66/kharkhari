  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Venus IT Ltd">
    <meta name="keyword" content="Venus It Ltd, best it company in bangladesh">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{URL::to('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Fevi-icon -->
    @if(settingsInfo()->institute_logo)
     <link rel="shortcut icon" href="{{URL::to('assets/settings/'.settingsInfo()->institute_logo)}}" />
     @endif
     
    <!--right slidebar-->
    <link href="{{URL::to('admin/css/slidebars.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/assets/summernote/dist/summernote.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{URL::to('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('admin/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/css/sweetalert.min.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/css/bootstrap-iso.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
    <link href="{{URL::to('admin/css/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://thevectorlab.net/flatlab/assets/bootstrap-datetimepicker/css/datetimepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('stylesheet')

  </head>