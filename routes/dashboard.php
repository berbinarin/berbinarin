<?php

use App\Http\Controllers\Dashboard\ClassPM\BerbinarPlusController;
use App\Http\Controllers\Dashboard\CounselingPM\PeerCounselorController;
use App\Http\Controllers\Dashboard\CounselingPM\PeerCounselorScheduleController;
use App\Http\Controllers\Dashboard\CounselingPM\BerbinarForUController;
use App\Http\Controllers\Dashboard\CounselingPM\PsychologistController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\HR\ajaxInternship;
use App\Http\Controllers\Dashboard\HR\DivisionController;
use App\Http\Controllers\Dashboard\HR\InternshipController;
use App\Http\Controllers\Dashboard\HR\KeluargaBerbinarController;
use App\Http\Controllers\Dashboard\HR\PositionController;
use App\Http\Controllers\Dashboard\HR\PositionDescriptionController;
use App\Http\Controllers\Dashboard\HR\PositionRequirementController;
use App\Http\Controllers\Dashboard\Marketing\Arteri\ArticleController;
use App\Http\Controllers\Dashboard\Marketing\Arteri\AuthorController;
use App\Http\Controllers\Dashboard\Marketing\Arteri\CategoryController;
use App\Http\Controllers\Dashboard\CounselingPM\CodeVoucherController;
use App\Http\Controllers\Dashboard\ClassPM\BerbinarPlusDashboardController;
use App\Http\Controllers\Dashboard\ClassPM\BerbinarClassController;
use App\Http\Controllers\Dashboard\ManagerCPM\PsycologistStaffController;
use App\Http\Controllers\Dashboard\ManagerCPM\PeerStaffController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {

    // Dashbaord Index
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Couseling PM |  Counseling Product Management
    Route::middleware('role:counseling-pm')->group(function () {

        // Data
        Route::get('/data', [PsychologistController::class, 'dataIndex'])->name('data.index');

        // Psychologis
        Route::resource('/data/psychologists', PsychologistController::class);

        // Peer Counselor
        Route::resource('/data/peer-counselors', PeerCounselorController::class);

        // Peer Counselor Schedule
        Route::resource('/peer-counselor-schedules', PeerCounselorScheduleController::class)->except('create', 'show', 'edit');

        // Berbinar For U
        Route::resource('/data/berbinar-for-u', BerbinarForUController::class);

        Route::resource('/code-voucher',CodeVoucherController::class);

        // // Kode Voucher
        // Route::resource('/code-voucher', CodeVoucherController::class);

    });

    Route::middleware('role:manager-cpm')->group(function () {

        // Psychologis Staff
        Route::resource('/psychologists-staff',PsycologistStaffController::class);

        // Peer Counselor Staff
        Route::resource('/peer-staff',PeerStaffController::class);
    });

    // Class Product Management
    Route::middleware('role:class-pm')->group(function () {
        // Berbinar Plus Class
        Route::resource('/berbinar-class', BerbinarClassController::class);
        // Berbinar Plus
        Route::resource('/berbinar-plus', BerbinarPlusController::class);
    });


    // HR - Recruitment |  Human Resource - Recruitment
    Route::middleware('role:hr_recruitment')->group(function () {

        // Position
        Route::resource('/positions', PositionController::class)->except('show');
        Route::patch('/positions/{id}/active', [PositionController::class, 'setActive'])->name('positions.set_active');

        // Position Description
        Route::resource('/position-descriptions', PositionDescriptionController::class)->except('show');

        // Position Requirement
        Route::resource('/position-requirements', PositionRequirementController::class)->except('show');

        // Internship
        Route::resource('/internships', InternshipController::class)->except('cretae', 'store');
        Route::post('/dashboard/admin/internship/update-status', [ajaxInternship::class, 'updateStatus'])->name('internships.update_status');
    });

    // HR - Data Analyst | Humar Resource - Data Analyst
    Route::middleware('role:hr_data-analyst')->group(function () {
        // Keluarga Berbinar
        Route::resource('/keluarga-berbinar', KeluargaBerbinarController::class);

        // Divison
        Route::resource('/divisions', DivisionController::class);
    });

    // marketing |  Marketing Strategist and Sales
    Route::middleware('role:marketing')->group(function () {

        Route::prefix('arteri')->name('arteri.')->group(function () {

            // ArteRi Author
            Route::resource('/authors', AuthorController::class)->except('create', 'edit', 'show');

            // // ArteRi Category
            Route::resource('/categories', CategoryController::class)->except('create', 'edit', 'show');

            // // Aretri Article
            Route::resource('/articles', ArticleController::class);
        });
    });

});

