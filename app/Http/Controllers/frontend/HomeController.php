<?php

namespace App\Http\Controllers\frontend;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SchoolHelperController;
use App\HomeSlide;
use App\Topper;
use App\PreviousTeachers;
use App\PublicJob;
use App\Scholarship;
use App\VideoGallery;
use App\PublicResult;
use App\FeesModel;


class HomeController extends Controller
{
	 private $schoolHelper;

    // constructor
    public function __construct(SchoolHelperController $schoolHelper)
    {
        $this->schoolHelper = $schoolHelper;
    }

 	public function index(){
 		// Home slider load header
 		$homeSlides =HomeSlide::orderBy('id' ,'ASC')->get();
        // get academic class topper list using API call
        $academicTopper =(object) $this->schoolHelper->getAcademicClassTopperList(); 
        //return view with all variable
        return view('frontend.home.index', compact('homeSlides','academicTopper'));
 		// return view('frontend.home.index');
 	}

    // principal message
    public function headMasterMessage(){
        return view('frontend.pages.headMasterMessage');
    }

    // college teacher info
    public function collegeTeachers(){
        return view('frontend.pages.college-teachers');
    }

    // policies Guidelines
    public function policiesGuidelines(){
        return view('frontend.pages.policies-guidelines');
    }

    // high school teacher info
    public function highSchoolTeachers(){
        return view('frontend.pages.secondary-teachers');
    }

	// primary school teacher info
 	public function primarySchoolTeachers(){
 		return view('frontend.pages.primary-teachers');
 	}

 	// Director message
 	public function fromDirectorMessage(){
 		return view('frontend.pages.director-message');
 	}

 	// last 3year result
 	public function publicExamResul(){
 		return view('frontend.pages.public-exam-result');
 	}
 	// academic success result 
 		public function successResult(){
 		return view('frontend.pages.success');
 	}
 	//
 	public function VisionAndObjective(){
 		return view('frontend.pages.VisionAndObjective');
 	}	

    //HistoryWebForm
    public function HistoryWebForm(){
        return view('frontend.pages.HistoryWebForm');
    }

 	//instituteIn frastructure
 	public function instituteInfrastructure(){
 		return view('frontend.pages.institute-infrastructure');
 	}

 	//school Infrastructure
 	public function methInfrastructure(){
 		return view('frontend.pages.infrastructure-page');
 	}

 	//school Dress Code Web Form
 	public function studentDressCode(){
 		return view('frontend.pages.DressCodeWebForm-page');
 	}

 	//school lesson plan syllabus
 	public function lessonPlanSyllabus(){
 		return view('frontend.pages.lesson-plan-syllabus');
 	}
 	
 	//content Upload Class Leacture
 	public function contentUploadClassLeacture(){
 		return view('frontend.pages.content-upload-class-leacture');
 	} 	
 	//Acadamic Calendar Web Form
 	public function AcadamicCalendarWebForm(){
 		return view('frontend.pages.AcadamicCalendarWebForm');
 	}
 	//Acadamic Routine Web Form
 	public function ClassRoutineListView(){
        // academic level calss routine
        $academicLevelList = $this->schoolHelper->getAcademicLevelList();
        // return with variable
 		return view('frontend.pages.class-routine', compact('academicLevelList'));
 	}
 	 	//Acadamic Routine Web Form
 	public function ClassRoutineList(Request $request){
        // find academic year and checking
        if($year = $this->schoolHelper->getAcademicYear()){
            // json body information
            $json = [
                'institute'=>$this->schoolHelper->getInstituteId(),
                'campus'=>$this->schoolHelper->getCampusId(),
                'year'=>$year->id,
                'level'=>$request->input('academic_level'),
                'batch'=>$request->input('batch'),
                'section'=>$request->input('section'),
                'shift'=>$request->input('shift'),
                'return_type'=>'json',
            ];
            // batch section time table details
            $timeTableDetails = $this->schoolHelper->getBatchSectionClassRoutine($json);
            // checking
            if(!empty($timeTableDetails)){
                $dayList = $timeTableDetails->day_list;
                $periodList = $timeTableDetails->period_list;
                $timeTableList = $timeTableDetails->timetable_list;
            }else{
                $dayList = null;
                $periodList = null;
                $timeTableList = null;
            }
        }else{
            $dayList = null;
            $periodList = null;
            $timeTableList = null;
        }
        // return view with variables
        return view('frontend.layouts.includes.class-routine-list', compact('dayList', 'periodList', 'timeTableList'));
 	}	

 	//Acadamic ExamScedule Web Form
 	public function ExamSceduleWebForm(){
 		return view('frontend.pages.ExamSceduleWebForm-page');
 	}

 	//Acadamic result Web Form
 	public function acadamicExamResult(){
        // academic exam year 
        $academicYearList = $this->schoolHelper->getAcademicYearList();

 		return view('frontend.pages.academic-exam-result',compact('academicYearList'));
 	}

 	// Academic exam resulr list acadamicExamResultList
 		public function acadamicExamResultList(Request $request){

       // json body information
        $json = [
            'institute'=>$this->schoolHelper->getInstituteId(),
            'campus'=>$this->schoolHelper->getCampusId(),
            'year'=>$request->input('academic_year'),
            'level'=>$request->input('academic_level'),
            'batch'=>$request->input('batch'),
            'section'=>$request->input('section'),
            'semester'=>$request->input('semester'),
            'gr_no'=>$request->input('gr_no'),
            'return_type'=>'json',
        ];
        // return student semester result details
        $resultDetails = $this->schoolHelper->getSingleStudentSemesterResult($json);
        // checking
        if(!empty($resultDetails) AND $resultDetails->result_sheet !=null){
            $resultSheet = $resultDetails->result_sheet;
            $assessmentList = $resultDetails->assessment_list;
        }else{
            $resultSheet = null;
            $assessmentList = null;
        }
        // return view with variables
 		return view('frontend.pages.includes.academic-exam-result-list', compact('resultSheet', 'assessmentList'));
 	}

 	//Acadamic Curricular Web Form
 	public function CoCurricularActivities(){
 		return view('frontend.pages.CoCurricularActivitiesWebForm');
 	}

 	//Acadamic Notice Web Form
 	public function NoticeWebForm(){
 		return view('frontend.pages.notice-board-page');
 	}

 	//Acadamic Events Web Form
 	public function ShowEventsWebForm(){
 		return view('frontend.pages.ShowEventsWebForm-page');
 	} 

 		//Acadamic News Web Form
 	public function NewsWebForm(){

 		return view('frontend.pages.academic-success-news');
 	}
 		//Acadamic ListofHoliday Web Form
 	public function ListofHolidaysWebForm(){
 		return view('frontend.pages.ListofHoliday');
 	} 		

 	//Teacher Info WebForm
 	public function academicTeachers(){
        // json body information
        $json = ['institute'=>$this->schoolHelper->getInstituteId(), 'campus'=>$this->schoolHelper->getCampusId(), 'category'=>1, 'return_type'=>'json'];
        // academic employee list
        $teacherList = $this->schoolHelper->getEmployeeList($json);
        //return with variable
 		return view('frontend.pages.academic-teachers', compact('teacherList'));
 	}
 	
 	//studentDatabase
 	public function studentDatabase(){
 		// school info
        $schoolInfo = (object)$this->schoolHelper->getSchoolInfo();
        // academic year list
        $academicYearList = $this->schoolHelper->getAcademicYearList();
 		return view('frontend.pages.student-database', compact('academicYearList', 'schoolInfo'));
 	} 
 	//student list		
 	public function studentDataList(){
 		return view('frontend.pages.student-list');
 	}
 	//Policies And Guidelines
 	public function PoliciesAndGuidelines(){
 		return view('frontend.pages.PoliciesAndGuidelinesWebForm-page');
 		
 	}

 	//FacilitiesWebForm
 	public function FacilitiesWebForm(){
 		return view('frontend.pages.FacilitiesWebForm-page');
 		
 	}	
 	 	
 	//PublicationsWebForm
 	public function PublicationsWebForm(){
 		return view('frontend.pages.PublicationsWebForm-page');

 	}

 	
 	//HealthEnviAwarnessInfo
 	public function HealthEnviAwarnessInfo(){
 		return view('frontend.pages.HealthEnviAwarnessInfoWebForm-page');

 	}

 	
 	//online admission view page
 	public function ApplyNowWebForm(){
 		return view('frontend.pages.admission-online');

 	}
 	 	
 	//Admission Result WebForm page
 	public function AdmissionResultWebForm(){
 		return view('frontend.pages.admission-exam-result');

 	} 	 	

 	//Fast Facts Admission
 	public function FeesAndPayments(){
 		$feesInfo = FeesModel::all();
 		return view('frontend.pages.fees-catagory', compact('feesInfo'));

 	}

 	//Fast Facts Admission
 	public function ScholarshipsWebForm(){
 		// $scholarshipInfo = Scholarship::all();
 		return view('frontend.pages.ScholarshipsWebForm-page');
 	}


 	//Transfer Procedures WebForm
 	public function TransferProceduresWebForm(){
 		return view('frontend.pages.TransferProceduresWebForm-page');
 	}

 	//Transfer Procedures WebForm
 	public function DownloadWebForm(){
 		return view('frontend.pages.DownloadWebForm-page');
 	}

 	//ContactUsWebForm-page
 	public function ContactUsWebForm(){
 		return view('frontend.pages.contact-us');
 	}
 	
 	//ContactUsWebForm-page
 	public function EmploymentCirculerWebForm(){
 		return view('frontend.pages.EmploymentCirculerWebForm-page');
 	}
    //public Job Circuler view page
    //ContactUsWebForm-page
    public function publicJobCirculer(){

        //job circuler view page
        return view('frontend.pages.employment-circulars');
    }
 	
 	//job published ExamResult-page
 	public function RecruitmentExamResult(){
 		$applicantMeritList = PublicJob::where('position', 0)->get();
 		$applicantWiatingList = PublicJob::where('position', 1)->get();
 		return view('frontend.pages.job-published-results', compact('applicantMeritList','applicantWiatingList'));
 	}

 	

 	//previous teachers
 	public function previousTeachers(){
 		$allTeachers = PreviousTeachers::paginate(15);
 		return view('frontend.pages.previous-teachers', compact('allTeachers'));
 	}


 	//class topper route
 	public function MeritoriousStudents(){
 		$toppers = Topper::paginate(15);
 		return view('frontend.pages.student-achievement', compact('toppers'));
 	}

 	 // find class section student list
    public function findStudentList(Request $request){
        // json body information
        $json = [
            'institute'=>$this->schoolHelper->getInstituteId(),
            'campus'=>$this->schoolHelper->getCampusId(),
            'academic_year'=>$request->input('academic_year'),
            'academic_level'=>$request->input('academic_level'),
            'batch'=>$request->input('batch'),
            'section'=>$request->input('section'),
            'return_type'=>'json',
        ];
        // return academic level list
        $studentList = $this->schoolHelper->getBatchSectionStudentList($json);
        // return view with variables
        return view('frontend.layouts.includes.student-list', compact('studentList'));
    }



}
