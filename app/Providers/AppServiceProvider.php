<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema; // At the top of your file
use App\Http\Controllers\SchoolHelperController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $this->loadAcademicNotice();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

        // load academic general notice
    // 28.05.3.13 server problem
    public function loadAcademicNotice(){
        // json body information
        // $json = [
        //     'institute'=>SchoolHelperController::getInstituteId(),
        //     'campus'=>SchoolHelperController::getCampusId(),
        //     'user'=>1, // general notice type
        //     'return_type'=>'json'
        // ];
        // result url
        // $url = SchoolHelperController::getEmsUrl().'/api/get-academic-notice-list';
        // return academic level list
        // $noticeList = SchoolHelperController::myGuzzleRequest('POST', $url, $json);
        // share notice with view
        // view()->share('noticeList', $noticeList);
    }
}
