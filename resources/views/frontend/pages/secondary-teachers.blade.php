@extends('frontend.master')

@section('title')

@section('contant')
    <header class="page-heading clearfix">
        <h1 class="heading-title pull-left">
            <span id="MainContent_lbletitle">শিক্ষক পরিচিতি</span>
        </h1>
        <div class="breadcrumbs pull-right">
            <ul>
                <li class="breadcrumbs-label">আপনি এখানে আছেন:</li>
                <li>  ভর্তি কার্যক্রম <i class="fa fa-angle-right"></i> </li>
                <li class="current"> শিক্ষক পরিচিতি</li>

            </ul>
        </div>
    </header>

    <div class="section-content">
        <div class="entry-content">
            <div class="details col-md-9 col-xs-12">
	  <span id="MainContent_lblecontent">

          <div class="panel panel-tab rounded shadow">
            <div class="panel-heading teacher-title">
                    <h3 class="institute-title text-center">মাধ্যমিক শাখা </h3>
                </div>
            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline table-responsive">
                <table class="table table-striped table-lilac" role="grid" aria-describedby="datatable-dom_info" border="1">
                  <thead>
                      <tr>

                          <th>SL.</th>
                          <th width="65px;">Photo</th>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Department</th>
                          <th>Contact No.</th>

                      </tr>
                  </thead>

                      <tbody>
                         <tr>
                            <td>01</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W1.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>ফা: লাজারুশ রোজারিও</td>
                          <td>অধ্যক্ষ</td>
                          <td></td>
                          <td></td>

                    </tr>

                    <tr>
                            <td>02</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W2.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মিঃ বেনেডিক্ট গমেজ</td>
                          <td>সহকারী প্রধান শিক্ষক</td>
                          <td>Logic</td>
                          <td>01713771687</td>

                    </tr>

                    <tr>
                            <td>03</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W3.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>ফা: প্রবাস পিউশ রোজারিও </td>
                          <td>শিক্ষক </td>
                          <td>English</td>
                          <td>01732-875690</td>

                    </tr>

                    <tr>
                          <td>04</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W4.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>ফা: রোহিত ডমিনিক মৃ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01930026637 </td>

                    </tr>

                    <tr>
                          <td>05</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W5.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>ফা: নবীন পিউশ কস্তা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01743-027785</td>

                    </tr>

                    <tr>
                          <td>06</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W6.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>ফা: মিন্টু জের্ভাস রোজারিও </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01798144606 </td>

                    </tr>

                    <tr>
                          <td>07</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W7.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>আঞ্জেলুস বিশ্বাস</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01724669429</td>

                    </tr>

                    <tr>
                          <td>08</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W8.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শিবদাস সান্যাল</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>0171460601883 </td>

                    </tr>

                    <tr>
                          <td>09</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W9.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>অনিমা সরকার </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01715975238 </td>

                    </tr>

                    <tr>
                          <td>10</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W10.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সুব্রত রোজারিও </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01718192918 </td>

                    </tr>

                    <tr>
                          <td>11</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W11.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মতি বিশ্বাস </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01855956485 </td>

                    </tr>

                    <tr>
                          <td>12</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W12.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: আব্দুস সালাম </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01719866110 </td>

                    </tr>

                    <tr>
                          <td>13</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W13.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>বাবলু রেনাতোস কোড়াইয়া </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01743946195 </td>

                    </tr>

                    <tr>
                          <td>14</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W14.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সি. বেরোনিকা কস্তা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01726846478 </td>

                    </tr>

                    <tr>
                          <td>15</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W15.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>পারুল আক্তার</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01710138400</td>

                    </tr>

                    <tr>
                          <td>16</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W16.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>পলি রাণী সরকার</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01722856531</td>

                    </tr>

                    <tr>
                          <td>17</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W17.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মহাবীর গমেজ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01712422258 </td>

                    </tr>

                    <tr>
                          <td>18</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W18.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: জিয়াউর রহমান </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01714918676 </td>

                    </tr>

                    <tr>
                          <td>19</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W19.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মিন্টু কুমার সরকার </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01723308344 </td>

                    </tr>

                    <tr>
                          <td>20</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W20.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোসা: ফরিদা ইয়াসমিন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01724391403 </td>

                    </tr>

                    <tr>
                          <td>21</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W21.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: রুবেল হোসেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01719105908</td>

                    </tr>

                    <tr>
                          <td>22</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W22.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সুচিত্রা সুমনা কস্তা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1721694508</td>

                    </tr>

                    <tr>
                          <td>23</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W23.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সুফলা ক্রশ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01728-038650</td>

                    </tr>

                    <tr>
                          <td>24</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W24.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>দিপংকর এক্কা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01728244452 </td>

                    </tr>

                    <tr>
                          <td>25</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W25.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোছা: সালমা খাতুন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01764900665 </td>

                    </tr>

                    <tr>
                          <td>26</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W26.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মিসেস সুফলা ক্রশ  </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01857421980 </td>

                    </tr>

                    <tr>
                          <td>27</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W27.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মি: সুমন গ্রেগরী </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01719-748100 </td>

                    </tr>

                    <tr>
                          <td>28</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W28.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: জামাল উদ্দিন</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01754-552095</td>

                    </tr>

                    <tr>
                          <td>29</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W29.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: মহসীন আলী </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01716509936</td>

                    </tr>

                    <tr>
                          <td>30</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W30.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শুভ্র কুমার সাহা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01717298385</td>

                    </tr>

                    <tr>
                          <td>31</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W31.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: মোশারফ হোসেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01733868994 </td>

                    </tr>

                    <tr>
                          <td>32</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W32.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোছা: নিশাত জাফরাণী </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01719168051 </td>

                    </tr>

                    <tr>
                          <td>33</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W33.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: শাহীন হোসেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01727227955 </td>

                    </tr>

                    <tr>
                          <td>34</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W34.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সঞ্চিতা সরকার </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01726853800 </td>

                    </tr>

                    <tr>
                          <td>35</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W35.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>অরুণ কুমার বিশ্বাস </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01727213784 </td>

                    </tr>

                    <tr>
                          <td>36</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W36.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মানিক গমেজ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01719668958 </td>

                    </tr>

                    <tr>
                          <td>37</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W37.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: কামাল হোসেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01717671207 </td>

                    </tr>

                    <tr>
                          <td>38</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W38.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সি: লিন্ডা, এসএমআরএ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td></td>

                    </tr>

                    <tr>
                          <td>39</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W39.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>শিখা প্রামানিক শুক্লা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01781974212 </td>

                    </tr>

                    <tr>
                          <td>40</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W40.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>আলবেনুস সরেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01726-192538 </td>

                    </tr>

                    <tr>
                          <td>41</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W41.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: করিম আলী মৃধা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01722-456033 </td>

                    </tr>

                    <tr>
                          <td>42</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W42.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সি: শিলা নির্মলা গমেজ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1773550518 </td>

                    </tr>

                    <tr>
                          <td>43</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W43.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>যোসেফ রায় </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01716-068134 </td>

                    </tr>

                    <tr>
                          <td>44</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W44.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: জাকির হোসেন </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1717424660 </td>

                    </tr>

                    <tr>
                          <td>45</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W45.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>রিপন কুমার সরকার </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1722405636</td>

                    </tr>

                    <tr>
                          <td>46</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W46.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মলি রাণী বসাক</td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01781-036163 </td>

                    </tr>

                    <tr>
                          <td>47</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W47.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>পিন্টু গজমজ </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01718-827457 </td>

                    </tr>

                    <tr>
                          <td>48</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W48.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>অরুণ সিলভেষ্টার কোড়াইয়া </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1771149920 </td>

                    </tr>

                    <tr>
                          <td>49</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W49.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মো: গোলাম মোস্তাফা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>01715-324760 </td>

                    </tr>

                    <tr>
                          <td>50</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W50.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>আলেকজান্ডার বিশ্বাস </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1706059146 </td>

                    </tr>

                    <tr>
                          <td>51</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/W51.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>সীমা পালমা </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1772382703 </td>

                    </tr>

                    <tr>
                          <td>52</td>
                          <td>
                            <img src="{{URL::to('frontend')}}/images/secondary/.jpg" alt="image" width="65" height="65">
                          </td>
                          <td>মোছা: মনোয়ারা বেগম </td>
                          <td>শিক্ষক </td>
                          <td></td>
                          <td>1786854996</td>

                    </tr>


                     </tbody>
                </table>
            </div>
        </div>
          <!-- .// panel-tab -->
      </span>
            </div>

        </div><!-- .entry-content -->
        <div id="MainContent_UsefulLinksDiv" class="col-md-3 col-xs-12" style="padding-right: 0px;">
            <div style=" background: #f5f5f5 none repeat scroll 0 0 !important; padding-bottom:20px; "><h1 class="section-heading text-highlight"> <span class="line">প্রয়োজনীয় লিংক </span></h1>
                <div id="QuickLinksDiv" class="section-content" style="min-height: 140px;">

                    <p style="padding-left:5px;"><a href="http://www.ntrca.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> বেসরকারি শিক্ষক নিবন্ধন ও প্রত্যয়ন কর্তৃপক্ষ (এনটিআরসিএ) </i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.banbeis.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস)  </i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.nctb.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড (এনসিটিবি)   </i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.moedu.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> শিক্ষা মন্ত্রণালয়  </i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.shed.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> মাধ্যমিক ও উচ্চ শিক্ষা বিভাগ  </i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.mopme.gov.bd" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়    </i></a></p>
                    <!--old link-->
                    <p style="padding-left:5px;"><a href="http://dhakaeducationboard.gov.bd/" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> ঢাকা শিক্ষাবোর্ড</i></a></p>

                    <p style="padding-left:5px;"><a href="http://xiclassadmissionbd.com/" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> কলেজ ভর্তি</i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.dpe.gov.bd/" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> প্রাথমিক শিক্ষা অধিদপ্তর</i></a></p>

                    <p style="padding-left:5px;"><a href="http://www.nu.ac.bd/" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> জাতীয় বিশ্ববিদ্যালয়</i></a></p>

                    <p style="padding-left:5px;"><a href="http://app1.nu.edu.bd/" target="_blank">   <i class="fa fa-caret-right" style="padding-left:5px;"> জাতীয় বিশ্ববিদ্যালয় ভর্তি</i></a></p>


                </div>
            </div>
        </div>

    </div><!--//page-row-->

@stop