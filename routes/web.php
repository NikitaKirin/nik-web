<?php

use App\Models\Project;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $workExperiences = WorkExperience::where('hidden', false)->get();
    $projects = Project::all();
    return view('pages.mainPage.main', ['workExperiences' => $workExperiences, 'projects' => $projects]);
});
