@extends('frontend.master')

@section('title')

@section('contant')
<header class="page-heading clearfix">
    <h1 class="heading-title pull-left">
        <span id="MainContent_lblbtitle">অ্যাডমিশন  </span>
    </h1>
    <div class="breadcrumbs pull-right">
        <ul>
            <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
            <li>  ভর্তি কার্যক্রম <i class="fa fa-angle-right"></i> </li>
            <li class="current">অ্যাডমিশন   </li>

        </ul>
    </div>
</header>
<div class="details col-md-10 col-md-offset-1 col-xs-12 form-inner-bg">
    <div class="admison-heade-section">
        <div class="col-sm-2 form-logo-inner">
           @if(settingsInfo()->institute_logo)
           <img class="admision-form-logo" src="{{url('assets/settings/'.settingsInfo()->institute_logo)}}" alt="logo" width="90" height="90">
           @endif
       </div>
       @if(!empty(settingsInfo())) 
       <div class="col-sm-10">

        <h2 class="admission-scl-name">{{settingsInfo()->institute_name}} </h2>

        <h3 class="admission-scl-adderss">{{settingsInfo()->institute_address}} </h3>
        <p><span><strong>e-mail:</strong>{{settingsInfo()->email}} </span>
            <span><strong>Phone:</strong> {{settingsInfo()->phone_number}} </span>
        </p>

    </div>
    @endif
    <div class="clear-fix"></div>

</div>
<span id="MainContent_lblbcontent">ভর্তির আবেদন ফরম</span>

<form method="post" action="">
    <div class="col-sm-12 amission-form-bg">
        <div class="row">
            <div class="col-md-12">
                <legend style="margin-top: 15px;">
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-user"></i>
                        শিক্ষার্থীর তথ্য
                    </abbr>
                </legend>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>বাংলায়</label>
                <input type="text" name="std_name_bn" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>ইংরেজী</label>
                <input type="text" name="std_name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>জন্ম তারিখ (জন্ম সনদ অনুযায়ী) </label>
                <input type="text" readonly name="birth_date" class="form-control datepicker" required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="control-label">লিঙ্গ</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="" disabled selected>---Select Gender---</option>
                    <option value="0" >Male</option>
                    <option value="1">Female</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-user"></i>
                        পিতার নাম
                    </abbr>
                </legend>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>বাংলায়</label>
                <input type="text" name="father_name_bn" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>ইংরেজী</label>
                <input type="text" name="father_name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>পেশা</label>
                <input type="text" name="father_occupation" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>শিক্ষাগত যোগ্যতা</label>
                <input type="text" name="father_education" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-user"></i>
                        মাতার নাম
                    </abbr>
                </legend>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>বাংলায়</label>
                <input type="text" name="mother_name_bn" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>ইংরেজী</label>
                <input type="text" name="mother_name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>পেশা</label>
                <input type="text" name="mother_occupation" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>শিক্ষাগত যোগ্যতা</label>
                <input type="text" name="mother_education" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-map-marker"></i>
                        স্থায়ী ঠিকানা
                    </abbr>
                </legend>
            </div>
            <div class="col-sm-6 form-group">
                <label>গ্রাম/মহল্লা</label>
                <input type="text" name="add_per_address" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>ডাকঘর</label>
                <input type="text" name="add_per_post" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 form-group">
                <label>মোবাইল</label>
                <input type="number" name="add_per_phone" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="per_state" class="control-label">জেলা </label>
                <select class="form-control state" id="permanent" name="add_per_state" required>
                    <option value="" disabled selected>---Select One---</option>

                    <option value=""></option>

                </select>
            </div>
            <div class="col-md-4">
                <label for="per_city" class="control-label">উপজেলা </label>
                <select class="form-control" id="city_permanent" name="add_per_city" required>
                    <option value="" selected>---Select One---</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-map-marker"></i>
                        বর্তমান ঠিকানা
                    </abbr>
                </legend>
            </div>
            <div class="col-sm-6 form-group">
                <label>গ্রাম/মহল্লা</label>
                <input type="text" name="add_pre_address" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>ডাকঘর</label>
                <input type="text" name="add_pre_post"  class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 form-group">
                <label>মোবাইল</label>
                <input type="number" name="add_pre_phone" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="present" class="control-label">জেলা </label>
                <select class="form-control state" id="present" name="add_pre_state" required>
                    <option value="" disabled selected>---Select One---</option>

                    <option value=""></option>

                </select>
            </div>
            <div class="col-md-4">
                <label for="pre_city" class="control-label">উপজেলা </label>
                <select class="form-control" id="city_present" name="add_pre_city" required>
                    <option value="" selected>---Select One---</option>
                </select>

            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-home"></i>
                        অভিভাবকের তথ্য

                    </abbr>
                </legend>
            </div>

            <div class="col-sm-6 form-group">
                <label>অভিভাবকের নাম (যদি প্রয়োজন হয়)</label>
                <input type="text" name="gud_name" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>মোবাইল</label>
                <input type="number" name="gud_phone" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 form-group">
                <label>পিতা/মাতা/অভিভাবকের বাৎসরিক আয়(টাকা)</label>
                <input type="text" name="gud_income" class="form-control" required>
            </div>
            <div class="col-sm-6 form-group">
                <label>পিতা/মাতা/অভিভাবকের বাৎসরিক আয়(কথায়)</label>
                <input type="text" name="gud_income_bn" class="form-control" required>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like">
                        <i class="fa fa-home"></i>
                        যে শ্রেণীতে ভর্তি হতে চায়

                    </abbr>
                </legend>
            </div>
            <div class="col-md-4">
                <label for="academic_year" class="control-label">প্রাতিষ্ঠানিক বৎসর </label>
                <select class="form-control academicYear" id="academic_year" name="academic_year" required>
                    <option disabled selected value="">---Select Year---</option>

                    <option value=""></option>

                </select>

            </div>
            <div class="col-md-4">
                <label for="academic_level" class="control-label">প্রাতিষ্ঠানিক লেভেল</label>
                <select class="form-control academicLevel" id="academic_level" name="academic_level" required>
                    <option value="" disabled selected="">---Select Level---</option>

                </select>

            </div>
            <div class="col-md-4">
                <label for="batch" class="control-label">শ্রেণী</label>
                <select class="form-control academicBatch" id="batch" name="batch" required>
                    <option value="" disabled selected="">---Select class---</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <legend>
                    <abbr title="" data-toggle="tooltip" data-original-title="Enter your personal information like. First name, Middle name, Last name, Gender, DOB, etc.">
                        <i class="fa fa-home"></i>
                        অনান্য তথ্য
                    </abbr>
                </legend>
            </div>
            <div class="col-sm-4 form-group">
                <label>সমাপনী পরীক্ষায় প্রাপ্ত (জি পি এ)</label>
                <input type="text" name="psc_gpa" class="form-control" required>
            </div>
            <div class="col-sm-4 form-group">
                <label>সমাপনী পরীক্ষার রোল নম্বর </label>
                <input type="text" name="psc_roll" class="form-control" required>
            </div>
            <div class="col-sm-4 form-group">
                <label>পাসের সন</label>
                <input type="text" name="psc_year" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group">
                <label>বিদ্যালয়ের নাম </label>
                <input type="text" name="psc_school" class="form-control" required>
            </div>
            <div class="col-sm-4 form-group">
                <label>প্রশংসাপত্র/ছাড়পত্র নম্বর</label>
                <input type="text" name="psc_tes_no" class="form-control" required>
            </div>
            <div class="col-sm-4 form-group">
                <label>তারিখ</label>
                <input type="text" readonly name="psc_tes_date" class="form-control datepicker" required>
            </div>
        </div>
        <div class="form-group student-panel">
            <div class="routine-btn">
                <button type="submit" class="p-color-bg themehover">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>

@stop