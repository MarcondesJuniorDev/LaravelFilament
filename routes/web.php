<?php

use App\Livewire\Site\About\History;
use App\Livewire\Site\About\OrgChart;
use App\Livewire\Site\About\Partners;
use App\Livewire\Site\About\Projects;
use App\Livewire\Site\Contact\ContactUs;
use App\Livewire\Site\Lessons\Adult\AdultEducation;
use App\Livewire\Site\Lessons\Adult\Elementary\AdultElementaryEducation;
use App\Livewire\Site\Lessons\Adult\High\AdultHighEducation;
use App\Livewire\Site\Lessons\Elementary\ElementarySchool;
use App\Livewire\Site\Lessons\High\HighSchool;
use App\Livewire\Site\Principal\Home;
use App\Livewire\Site\Stayin\Events;
use App\Livewire\Site\Stayin\News;
use App\Livewire\Site\Stayin\Publications;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Home::class)->name('home');
Route::get('/quem-somos/historico', History::class)->name('about.history');
Route::get('/quem-somos/organograma', OrgChart::class)->name('about.orgchart');
Route::get('/quem-somos/projetos', Projects::class)->name('about.projects');
Route::get('/quem-somos/parceiros', Partners::class)->name('about.partners');

Route::get('/aulas/ensino-fundamental', ElementarySchool::class)->name('lessons.elementary');
Route::get('/aulas/ensino-medio', HighSchool::class)->name('lessons.highschool');
Route::get('/aulas/ensino-fundamental-eja', AdultElementaryEducation::class)->name('lessons.adult.elementary');
Route::get('aulas/ensino-medio-eja', AdultHighEducation::class)->name('lessons.adult.high');

//Rotas para premiações

Route::get('/fique-por-dentro/eventos', Events::class)->name('stayin.events');
Route::get('/fique-por-dentro/noticias', News::class)->name('stayin.news');
Route::get('/fique-por-dentro/publicacoes', Publications::class)->name('stayin.publications');

Route::get('/entre-em-contato', ContactUs::class)->name('contact');


Route::get('/principal', function () {
    return redirect()->to('/admin');
})->name('admin');

