<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolHelperController extends Controller
{
    // get school information
    public function getSchoolInfo()
    {
        // return school information
        return ['campus'=>$this->getCampusId(), 'institute'=>$this->getInstituteId()];
    }

    // get school academic year
    public function getAcademicYear(){
        // academic level list url
        $url = $this->getEmsUrl().'/api/get-academic-year/'.$this->getInstituteId().'/'.$this->getCampusId();
        // return academic year profile
        return $this->myGuzzleRequest('GET', $url,  null);
    }

    // get school academic year list
    public function getAcademicYearList(){
        // academic year list url
        $url = $this->getEmsUrl().'/api/get-academic-year-list/'.$this->getInstituteId().'/'.$this->getCampusId();
        // return academic year list
        return $this->myGuzzleRequest('GET', $url,  null);
    }

    // get school academic level list
    public function getAcademicLevelList(){
        // get academic year profile
        if($year = $this->getAcademicYear()){
            // json body information
            $json = ['institute'=>$this->getInstituteId(), 'campus'=>$this->getCampusId(), 'id'=>$year->id];
            // academic level list url
            $url = $this->getEmsUrl().'/api/get-academic-level-list';
            // return academic level list
            return $this->myGuzzleRequest('POST', $url,  $json);
        }else{
            // return null
            return null;
        }
    }

    // get school batch section student list
    public function getBatchSectionStudentList($json){
        // checking json
        if(!empty($json) AND count($json)>0){
            // student list url
            $url = $this->getEmsUrl().'/api/get-student-list';
            // return student list
            return $this->myGuzzleRequest('POST', $url,  $json);
        }else{
            // return null
            return null;
        }
    }

    // get school employee list
    public function getEmployeeList($json){
        // checking json
        if(!empty($json) AND count($json)>0){
            // employee list url
            $url = $this->getEmsUrl().'/api/get-employee-list';
            // return employee list
            return $this->myGuzzleRequest('POST', $url,  $json);
        }else{
            // return null
            return null;
        }
    }

    // get school batch section class routine
    public function getBatchSectionClassRoutine($json){
        // checking json
        if(!empty($json) AND count($json)>0){
            // timetable url
            $url = $this->getEmsUrl().'/api/get-academic-batch-section-timetable';
            // return academic level list
            return $this->myGuzzleRequest('POST', $url,  $json);
        }else{
            // return null
            return null;
        }
    }

    // get single student semester result
    public function getSingleStudentSemesterResult($json){
        // checking json
        if(!empty($json) AND count($json)>0){
            // result url
            $url = $this->getEmsUrl().'/api/get-academic-single-student-result';
            // return academic level list
            return $this->myGuzzleRequest('POST', $url,  $json);
        }else{
            // return null
            return null;
        }
    }

    // get academic notice list
    // public function getAcademicNoticeList($json){
    //     // checking json
    //     if(!empty($json) AND count($json)>0){
    //         // result url
    //         $url = $this->getEmsUrl().'/api/get-academic-notice-list';
    //         // return academic level list
    //         return $this->myGuzzleRequest('POST', $url,  $json);
    //     }else{
    //         // return null
    //         return null;
    //     }
    // }


    // get academic class topper list
    public function getAcademicClassTopperList(){
        // get academic year profile
        if($this->getAcademicYear()){
            // academic level list url
            $url = $this->getEmsUrl().'/api/get-class-topper-list/'.$this->getInstituteId().'/'.$this->getCampusId();
            // return academic level list
            return $this->myGuzzleRequest('GET', $url, null);
        }else{
            // return null
            return null;
        }
    }

    // guzzle client request
    public static function myGuzzleRequest($method, $url, $json)
    {
        // call guzzle http client request
        $client = new Client();
        // checking method
        if($method=='GET'){
            // request response
            $response = json_decode($client->request('GET', $url)->getBody()->getContents());
        }else{
            // request response
            $response = json_decode($client->request('POST', $url, ['json' => $json])->getBody()->getContents());
        }
        // checking status
        if($response->status=='success'){
            // request data
            $requestData = $response->data;
        }else{
            // request data
            $requestData = null;
        }
        // return request data
        return $requestData;
    }

    // get institute id
    public static function getInstituteId()
    {
        // institute id
        $instituteId = env('INSTITUTE_ID');
        // return institute id
        return $instituteId;
    }

    // get institute id
    public static function getCampusId()
    {
        // campus id
        $campusId = env('CAMPUS_ID');
        // return campus id
        return $campusId;
    }

    // get institute id
    public static function getEmsUrl()
    {
        // ems url
        $url = env('EMS_URL');
        // return ems url
        return $url;
    }
}
