@extends('frontend.master')

@section('title')

@section('contant')
 <header class="page-heading clearfix">
     <h1 class="heading-title pull-left">
    <span id="MainContent_lbletitle"> ফিস ও পেমেন্টস </span>
     </h1>           
      <div class="breadcrumbs pull-right">                       
          <ul>
              <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
              <li> একাডেমিক  <i class="fa fa-angle-right"></i> </li>
              <li class="current">  একাডেমিক ফিস</li>
               
          </ul>  
     </div>
</header>

<div class="section-content">                     
     <div class="entry-content">
       <div class="details col-md-9 col-sm-8 col-xs-12">
         <span id="MainContent_lblbcontent"> </span>   
           <div class="panel panel-tab rounded shadow">
              <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">একাডেমিক ফিস</h3>
                </div>
              <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">                                          
                <table class="table table-striped table-lilac" border="1" role="grid" aria-describedby="datatable-dom_info">
                      <tr>
                        <td rowspan="2" style="width:95.75pt;border:solid windowtext 1.0pt;
                        mso-border-alt:solid windowtext .5pt;padding:20px;" width="128" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">শ্রেনী<o:p></o:p></span></p>
                        </td>
                        <td colspan="2" style="width:191.5pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                        solid windowtext .5pt;padding:6px 0;" width="255" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">সকল ছাত্র-ছাত্রী<o:p></o:p></span></p>
                        </td>
                        <td colspan="2" style="width:191.55pt;border:solid windowtext 1.0pt;
                        border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                        solid windowtext .5pt;padding:6px 0;" width="255" valign="top">
                        <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                        text-align:center;line-height:normal" align="center">
                        <span style="font-size:10.0pt;
                        font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                        mso-fareast-theme-font:minor-latin" lang="BN">নতুন ভর্তি ছাত্র-ছাত্রী<o:p></o:p></span></p>
                        </td>
                       </tr>
                      <tr>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center">
                      <span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">মাসিক বেতন<o:p></o:p></span></p>
                      </td>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">সেশন ফি<o:p></o:p></span></p>
                      </td>
                      <td style="width:95.75pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">ভর্তি ফরম</span><span style="font-size:
                      10.0pt;font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                      </td>
                      <td style="width:95.8pt;border-top:none;border-left:
                      none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                      mso-border-alt:solid windowtext .5pt;padding:5px 0;" width="128" valign="top">
                      <p class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
                      text-align:center;line-height:normal" align="center"><span style="font-size:10.0pt;
                      font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin" lang="BN">ভর্তি ফি</span><span style="font-size:
                      10.0pt;font-family:&quot;Nirmala UI&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Calibri;
                      mso-fareast-theme-font:minor-latin;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                      </td>
                     </tr>
                <!-- this variable get welcomecontroller      -->
                  @if(!empty($feesInfo))  
                    @foreach($feesInfo as $fees) 
                    <tr>
                      <td>{{$fees->class_name}}</td>
                      <td>{{$fees->month_fees}}</td>
                      <td>{{$fees->session_fees}}</td>
                      <td>{{$fees->form_fees}}</td>
                      <td>{{$fees->admission_fees}}</td>
                    </tr>
                  @endforeach
                @else  
                  <tr class="text-center">
                    <td colspan="5"><strong>No Records found</strong></td>
                  </tr>
                @endif  
              </table> 
                
            </div>
        </div>
      </div>

    </div><!-- .entry-content -->
    
 <!-- right sitebar here -->
 <div class="details col-md-3 col-sm-4 col-xs-12">
  @include('frontend.layouts.includes.importenLink')
</div>
   </div><!--//page-row-->
@endsection