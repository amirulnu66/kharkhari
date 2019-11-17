<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	// $var= select alal;
// 	// $var=select two;
//     return view('welcome');
// });


Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index');
// Route::get('/test', 'HomeController@test');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//User Route
Route::get('/admin/users/create', 'UserController@create');
Route::post('/admin/users/store', 'UserController@store');
Route::get('/admin/users/show', 'UserController@userList');
Route::get('/admin/users/delete/{id}', 'UserController@delete');
Route::get('/admin/users/edit/{id}', 'UserController@userById');
Route::post('/admin/users/update', 'UserController@UserUpdate');

// admin Teachers Message routes
Route::get('/admin/teachers/message-create', 'admin\TeacherMessageController@create');
Route::post('/admin/teachers/message-store', 'admin\TeacherMessageController@teacherMessageInsert');
Route::get('/admin/teachers/message-show', 'admin\TeacherMessageController@teacherMessageList');
Route::get('/admin/teachers/message-edit/{id}', 'admin\TeacherMessageController@teachersMessageEdit');
Route::post('/admin/teachers/message/update', 'admin\TeacherMessageController@teachersMessageUpdate');
Route::get('/admin/teachers/message/delete/{id}', 'admin\TeacherMessageController@MessagesDelete');

//home slider route
Route::get('/admin/home/sliders/create', 'admin\HomeSlideController@homeSlideCreate');
Route::post('/admin/home/sliders/store', 'admin\HomeSlideController@homeSlideInsert');
Route::get('/admin/home/sliders/show', 'admin\HomeSlideController@homeSlideList');
Route::get('/admin/home/sliders/edit/{id}', 'admin\HomeSlideController@homeSlideEdit');
Route::post('/admin/home/sliders/update', 'admin\HomeSlideController@homeSlideUpdate');
Route::get('/admin/home/sliders/delete/{id}', 'admin\HomeSlideController@homeSlideDelete');

//admin Institute History route
Route::get('/admin/institute/history/create', 'admin\InstituteHistoryController@historyCreate');
Route::post('/admin/institute/history/store', 'admin\InstituteHistoryController@historyInsert');
Route::get('/admin/institute/history/show', 'admin\InstituteHistoryController@historyShow');
Route::post('/admin/institute/history/update', 'admin\InstituteHistoryController@historyUpdate');

//governing members 
Route::get('/admin/governing/member/create', 'admin\GoverningMemberController@governingBodyCreate');
Route::post('/admin/governing/member/store', 'admin\GoverningMemberController@governingBodyInsert');
Route::get('/admin/governing/member/show', 'admin\GoverningMemberController@govMembersList');
Route::get('/admin/governing/member/edit/{id}', 'admin\GoverningMemberController@govMembersedit');
Route::post('/admin/governing/member/update', 'admin\GoverningMemberController@govMembersUpdate');
Route::get('/admin/governing/member/delete/{id}', 'admin\GoverningMemberController@govMembersDelete');

//
Route::get('/admin/governing/page/title-create', 'admin\GoverningMemberController@governingPagetitle');
Route::post('/admin/governing/page/title-store', 'admin\GoverningMemberController@governingTitleInsert');
Route::get('/admin/governing/page/title-show', 'admin\GoverningMemberController@governingTitleShow');
Route::post('/admin/governing/page/title-update', 'admin\GoverningMemberController@governingTitleUpdate');

//public exam result route
Route::get('/admin/public/result/create','admin\PublicExamResultController@index');
Route::post('/admin/public/result/store','admin\PublicExamResultController@publicResultInsert');
Route::get('/admin/public/result/ssc/list','admin\PublicExamResultController@sscPublicResultList');
Route::get('/admin/public/result/vocational/list','admin\PublicExamResultController@vocationalResultList');
Route::get('/admin/public/result/vocational/edit/{id}','admin\PublicExamResultController@vocationalResultEdit');
Route::get('/admin/public/result/jsc/list','admin\PublicExamResultController@JscpublicResultList');
Route::get('/admin/public/result/ssc/edit/{id}','admin\PublicExamResultController@sscResultEdit');
Route::get('/admin/public/result/jsc/edit/{id}','admin\PublicExamResultController@jsclicResultEdit');
Route::post('/admin/public/result/update','admin\PublicExamResultController@publicExamUpdate');
Route::get('/admin/public/result/delete/{id}','admin\PublicExamResultController@dateDelete');

//class topper route
Route::get('/admin/class/topper/create','admin\ClassTopperController@create');
Route::post('/admin/class/topper/store','admin\ClassTopperController@classToppersInsert');
Route::get('/admin/class/topper/show','admin\ClassTopperController@classToppersList');
Route::get('/admin/class/topper/edit/{id}','admin\ClassTopperController@classToppersEdit');
Route::post('/admin/class/topper/update','admin\ClassTopperController@classToppersUpdate');
Route::get('/admin/class/topper/delete/{id}','admin\ClassTopperController@toppersDelete');

//photp gallery
Route::get('/admin/photo/gallery/create','admin\PhotoGalleryController@albumCreate');
Route::post('/admin/photo/gallery/store','admin\PhotoGalleryController@photosInsert');
Route::get('/admin/photo/gallery/list','admin\PhotoGalleryController@galleryPhotosList');
Route::get('/admin/photo/gallery/edit/{id}','admin\PhotoGalleryController@galleryPhotosEdit');
Route::post('/admin/photo/gallery/update','admin\PhotoGalleryController@PhotoGalleryUpdate');
Route::get('/admin/photo/gallery/delete/{id}','admin\PhotoGalleryController@photoGalleryDelete');
//all related page
Route::get('/admin/related/page/create','admin\RelatedPageController@pageCreate');
Route::post('/admin/related/page/store','admin\RelatedPageController@pageInfoInsert');
Route::get('/admin/related/page/list','admin\RelatedPageController@relatedPageList');
Route::get('/admin/related/page/edit/{id}','admin\RelatedPageController@relatedPageEdit');
Route::post('/admin/related/page/update','admin\RelatedPageController@relatedPageUpdate');
Route::get('/admin/related/page/delete/{id}','admin\RelatedPageController@relatedPageDelete');

//school library
Route::get('/admin/school/library/create','admin\LibraryController@libraryCreate');
Route::post('/admin/school/library/store','admin\LibraryController@libraryInfoInsert');
Route::get('/admin/school/library/list','admin\LibraryController@libraryList');
Route::get('/admin/school/library/edit/{id}','admin\LibraryController@libraryEdit');
Route::post('/admin/school/library/update','admin\LibraryController@libraryUpdate');
Route::get('/admin/school/library/delete/{id}','admin\LibraryController@libraryDelete');

//Previous Teacher route
Route::get('/admin/previous/teachers/create','admin\PreviousTeacherController@teachersCreate');
Route::post('/admin/previous/teachers/store','admin\PreviousTeacherController@teachersInsert');
Route::get('/admin/previous/teachers/list','admin\PreviousTeacherController@previousTeachersList');
Route::get('/admin/previous/teachers/edit/{id}','admin\PreviousTeacherController@teachersEdit');
Route::post('/admin/previous/teachers/update','admin\PreviousTeacherController@teachersInfoUpdate');
Route::get('/admin/previous/teachers/delete/{id}','admin\PreviousTeacherController@teachersDelete');

//institute settings route
Route::get('/institute/settings/create','admin\SettingsController@settingsCreate');
Route::post('/institute/settings/store','admin\SettingsController@settingsInfoInsert');
Route::get('/institute/settings/edit','admin\SettingsController@settingsInfoedit');
Route::post('/institute/settings/update','admin\SettingsController@settingsInfoUpdate');

//video gallery route
Route::get('/admin/video/gallery/create','admin\VideoGalleryController@createVideo');
Route::post('/admin/video/gallery/store','admin\VideoGalleryController@videoGalleryInsert');
Route::get('/admin/video/gallery/list','admin\VideoGalleryController@videoGalleryList');
Route::get('/admin/video/gallery/edit/{id}','admin\VideoGalleryController@videoGalleryEdit');
Route::post('/admin/video/gallery/update','admin\VideoGalleryController@galleryVideoUpdate');
Route::get('/admin/video/gallery/delete/{id}','admin\VideoGalleryController@galleryVideoDelete');

//job applicant result route
Route::get('/job/applicant/result/create','admin\PublicJobController@create');
Route::post('/job/applicant/result/store','admin\PublicJobController@jobResultInsert');
Route::get('/job/applicant/merit/list','admin\PublicJobController@applicationMeritList');
Route::get('/job/applicant/waiting/list','admin\PublicJobController@applicationWaitingList');
Route::get('/job/applicant/result/edit/{id}','admin\PublicJobController@applicationResultEdit');
Route::post('/job/applicant/result/update','admin\PublicJobController@applicationResultUpdate');
Route::get('/job/applicant/result/delete/{id}','admin\PublicJobController@applicantResultDelete');

//student scholarships 
Route::get('/student/scholarships/create','admin\ScholarshipController@create');
Route::post('/student/scholarships/store','admin\ScholarshipController@studentScholarshipInsert');
Route::get('/student/scholarships/list','admin\ScholarshipController@studentScholarshipList');
Route::get('/student/scholarships/edit/{id}','admin\ScholarshipController@studentScholarshipEdit');
Route::post('/student/scholarships/update','admin\ScholarshipController@studentScholarshipUpdate');
Route::get('/student/scholarships/delete/{id}','admin\ScholarshipController@delete');

//Notice route
Route::get('/academic/notice/create','admin\NoticeController@NoticeCreate');
Route::post('/academic/notice/store','admin\NoticeController@NoticeInsert');
Route::get('/academic/notice/list','admin\NoticeController@NoticeList');
Route::get('/academic/notice/edit/{id}','admin\NoticeController@NoticeEdit');
Route::post('/academic/notice/update','admin\NoticeController@NoticeUpdate');
Route::get('/academic/notice/delete/{id}','admin\NoticeController@noticeDelete');

//fees & payement route
Route::get('/academic/fees/create','admin\FeesController@create');
Route::post('/academic/fees/store','admin\FeesController@feesInsert');
Route::get('/academic/fees/list','admin\FeesController@feesList');
Route::get('/academic/fees/edit/{id}','admin\FeesController@feesEdit');
Route::post('/academic/fees/update','admin\FeesController@feesUpdate');
Route::get('/academic/fees/delete/{id}','admin\FeesController@feesDelete');

// Route::get('/{page_name}', 'PageController@getPage');

// Authentication Routes...



// frontene all page contoller
Route::get('/', 'frontend\HomeController@index');
// Route::get('/home', 'frontend\HomeController@home');
Route::get('/message/head/teacher-message', 'frontend\HomeController@headMasterMessage');
Route::get('/message/from/director-message', 'frontend\HomeController@fromDirectorMessage');
Route::get('/achievements/public/exam/result', 'frontend\HomeController@publicExamResul');

//all related page
Route::get('/Achievements/WebForm/VisionAndObjective/{page_slug}','frontend\RelatedPageController@allRelatedPages');
Route::get('/student/dress/code/{page_slug}', 'frontend\RelatedPageController@allRelatedPages');
Route::get('/student/lesson/plan/{page_slug}', 'frontend\RelatedPageController@allRelatedPages');
Route::get('/policies/guidelines/{page_slug}', 'frontend\RelatedPageController@allRelatedPages');
Route::get('/transfer/procedures/{page_slug}', 'frontend\RelatedPageController@allRelatedPages');
// related all pages
Route::get('/pages/{page_slug}', 'frontend\RelatedPageController@allRelatedPages');

Route::get('/student/content/class-leacture', 'frontend\RelatedPageController@classLeactureDocument');
Route::post('/student-list/search','frontend\HomeController@findStudentList'); // by akm islam
Route::get('/academic/booklist/syllabus','frontend\RelatedPageController@bookListSyllabus'); // by akm islam
//holiday rpute
Route::get('/gov/holiday/holiday-list', 'frontend\RelatedPageController@holydayList');


Route::get('/infrastructure/institute-infrastructure', 'frontend\HomeController@instituteInfrastructure');

//policies-guidelines
Route::get('/policies/guidelines', 'frontend\HomeController@policiesGuidelines');
// HistoryWebForm
Route::get('/institute/history', 'frontend\InstituteHistoryController@index');

//gallery page
Route::get('/school/photo/photo-gallery', 'frontend\PhotoGalleryController@photoGallery');
Route::get('/school/videos/video-gallery', 'frontend\PhotoGalleryController@videoGallery');

//Acadamic Calendar WebForm
Route::get('/academic/academic-calendar', 'frontend\HomeController@AcadamicCalendarWebForm');



//Acadamic class routine
Route::get('/academic/class-routine', 'frontend\HomeController@ClassRoutineListView');
Route::post('/academic/class/routine-list', 'frontend\HomeController@ClassRoutineList');


//academic exam result
Route::get('/academic/result/exam-result', 'frontend\HomeController@acadamicExamResult');
Route::post('/academic/exam/result-list', 'frontend\HomeController@acadamicExamResultList');


Route::get('/academic/notice-web-form', 'frontend\HomeController@NoticeWebForm');
//Show Events WebForm


//NewsWebForm-page
Route::get('/academic/news-web-form', 'frontend\HomeController@NewsWebForm');

Route::get('/academic/success-web-form', 'frontend\HomeController@successResult');


//TeacherInfoWebForm
Route::get('/academic/teachers-list', 'frontend\HomeController@academicTeachers');

//college teachers info
Route::get('/academic/college/teacherInfo-web-form', 'frontend\HomeController@collegeTeachers');

// high school teacher info
Route::get('/secondary/school/teacherInfo-web-form', 'frontend\HomeController@highSchoolTeachers');

// prothomic school teacher info
Route::get('/academic/school/teacherInfo', 'frontend\HomeController@primarySchoolTeachers');


//student data base
Route::get('/academic/student/student-database', 'frontend\HomeController@studentDatabase');
//student data List
Route::get('/academic/student/student-data-list', 'frontend\HomeController@studentDataList');

//Policies And Guidelines WebForm-page

Route::get('/school/library-web-form', 'frontend\LibraryController@libraryInstrument');

//online admission form view route
Route::get('/admission/online/apply-now-web-form', 'frontend\HomeController@ApplyNowWebForm');


//acadamic admission-result view route
Route::get('/academic/admission-result', 'frontend\HomeController@AdmissionResultWebForm');


//FeesAndPaymentsWebForm
Route::get('/academic/fees-payments-web-form', 'frontend\HomeController@FeesAndPayments');

//Scholars hipsWebForm-page
Route::get('/academic/student-scholarship', 'frontend\HomeController@ScholarshipsWebForm');

//Download Web Form
Route::get('/download/download-web-form', 'frontend\HomeController@DownloadWebForm');

//contact/contact
Route::get('/contact/contact-Us-web-form', 'frontend\HomeController@ContactUsWebForm');

//public job circuler
Route::get('/employment/job-circuler', 'frontend\HomeController@publicJobCirculer');

//Recruitment Exam ResultWebForm
Route::get('/recruitment/exam/result-web-form', 'frontend\HomeController@RecruitmentExamResult');

//teachers route
Route::get('/institute/instituteHeads-web-form', 'frontend\HomeController@FormerInstituteHeads');

//previous teachers route
Route::get('/institute/previous/teachers', 'frontend\HomeController@previousTeachers');

//OurMeritoriousStudentsWebForm
Route::get('ourmeritorious/students-web-form', 'frontend\HomeController@MeritoriousStudents');

//Governing member
Route::get('/academic/managing-committee', 'frontend\GoverningMemberController@index');

//mission-vision route
// Route::get('/academic/mission-vision', 'frontend\RelatedPageController@missionVision');















