 @extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            যোগাযোগের তথ্য
            
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li>যোগাযোগ </li>
            </ul>
        </div>
    </header>

    <article class="contact-form col-md-12 col-xs-12  page-row">
        <div class="col-md-8 col-md-offset-2">
            <div class="designAside content-info">
                @if(!empty(settingsInfo())) 
                <h5>
                    <span id="MainContent_lblSchoolName">  {{settingsInfo()->institute_name}}</span>
                </h5>
                
                <div>
                    <i style="padding-right: 15px" class="fa fa-home"></i>
                    <span id="MainContent_lblContactNumber">{{settingsInfo()->institute_address}} </span><br />
                    
                    <i style="padding-right: 15px" class="fa fa-phone-square"></i>
                    <span id="MainContent_lblContactNumber">{{settingsInfo()->phone_number}} </span><br />
                    
                    <i style="padding-right: 15px" class="fa fa-envelope-o"></i><a href="#">
                        <span id="MainContent_lblEmail">{{settingsInfo()->email}}</span></a><br />
                    
                    <br />

                </div>
                @endif
            </div>
        </div>
        <div class="goolge-map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.678249724483!2d88.64781257807502!3d24.39465904645383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbf1c1664d65fb%3A0x96f90ca0a9f5c9c5!2sKharkhari+High+school!5e0!3m2!1sen!2sbd!4v1553681452162" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </article>
    
    <!-- right site bar -->

@stop
