<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LabRequestController;
use App\Http\Controllers\LabResultController;
use App\Http\Controllers\LabTechnicianController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\NursingLogController;
use App\Http\Controllers\OperationTechnicianController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RadiologyRequestController;
use App\Http\Controllers\RadiologyResultController;
use App\Http\Controllers\RadiologyTechnicianController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\SurgeryLogController;
use App\Http\Controllers\VisitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//  المرضى
Route::controller(PatientController::class)->group(function () {
    Route::get('/patients', 'index');
    Route::get('/patient/{id}', 'show');
    Route::post('/patient/store', 'store');
    Route::put('/patient/update/{id}', 'update');
    Route::delete('/patient/delete/{id}', 'destroy');
});

//  الأطباء
Route::controller(DoctorController::class)->group(function () {
    Route::get('/doctors', 'index');
    Route::get('/doctor/{id}', 'show');
    Route::post('/doctor/store', 'store');
    Route::put('/doctor/update/{id}', 'update');
    Route::delete('/doctor/delete/{id}', 'destroy');
});

//  المواعيد
Route::controller(AppointmentController::class)->group(function () {
    Route::get('/appointments', 'index');
    Route::get('/appointment/{id}', 'show');
    Route::post('/appointment/store', 'store');
    Route::put('/appointment/update/{id}', 'update');
    Route::delete('/appointment/delete/{id}', 'destroy');
});

// ممرضين الجناح
Route::controller(NurseController::class)->group(function () {
    Route::get('/nurses', 'index');
    Route::get('/nurse/{id}', 'show');
    Route::post('/nurse/store', 'store');
    Route::put('/nurse/update/{id}', 'update');
    Route::delete('/nurse/delete/{id}', 'destroy');
});

// موظفي الاستقبال
Route::controller(ReceptionistController::class)->group(function () {
    Route::get('/receptionists', 'index');
    Route::get('/receptionist/{id}', 'show');
    Route::post('/receptionist/store', 'store');
    Route::put('/receptionist/update/{id}', 'update');
    Route::delete('/receptionist/delete/{id}', 'destroy');
});

// فنيي العمليات
Route::controller(OperationTechnicianController::class)->group(function () {
    Route::get('/operation-technicians', 'index');
    Route::get('/operation-technician/{id}', 'show');
    Route::post('/operation-technician/store', 'store');
    Route::put('/operation-technician/update/{id}', 'update');
    Route::delete('/operation-technician/delete/{id}', 'destroy');
});

// فنيي الأشعة
Route::controller(RadiologyTechnicianController::class)->group(function () {
    Route::get('/radiology-technicians', 'index');
    Route::get('/radiology-technician/{id}', 'show');
    Route::post('/radiology-technician/store', 'store');
    Route::put('/radiology-technician/update/{id}', 'update');
    Route::delete('/radiology-technician/delete/{id}', 'destroy');
});

// فنيي المختبر
Route::controller(LabTechnicianController::class)->group(function () {
    Route::get('/lab-technicians', 'index');
    Route::get('/lab-technician/{id}', 'show');
    Route::post('/lab-technician/store', 'store');
    Route::put('/lab-technician/update/{id}', 'update');
    Route::delete('/lab-technician/delete/{id}', 'destroy');
});

// الأقسام
Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments', 'index');
    Route::get('/department/{id}', 'show');
    Route::post('/department/store', 'store');
    Route::put('/department/update/{id}', 'update');
    Route::delete('/department/delete/{id}', 'destroy');
});

// المناوبات (shifts)
Route::controller(ShiftController::class)->group(function () {
    Route::get('/shifts', 'index');
    Route::get('/shift/{id}', 'show');
    Route::post('/shift/store', 'store');
    Route::put('/shift/update/{id}', 'update');
    Route::delete('/shift/delete/{id}', 'destroy');
});

// العمليات الجراحية
Route::controller(SurgeryController::class)->group(function () {
    Route::get('/surgeries', 'index');
    Route::get('/surgery/{id}', 'show');
    Route::post('/surgery/store', 'store');
    Route::put('/surgery/update/{id}', 'update');
    Route::delete('/surgery/delete/{id}', 'destroy');
});

// طلبات المختبر
Route::controller(LabRequestController::class)->group(function () {
    Route::get('/lab-requests', 'index');
    Route::get('/lab-request/{id}', 'show');
    Route::post('/lab-request/store', 'store');
    Route::put('/lab-request/update/{id}', 'update');
    Route::delete('/lab-request/delete/{id}', 'destroy');
});

// طلبات الأشعة
Route::controller(RadiologyRequestController::class)->group(function () {
    Route::get('/radiology-requests', 'index');
    Route::get('/radiology-request/{id}', 'show');
    Route::post('/radiology-request/store', 'store');
    Route::put('/radiology-request/update/{id}', 'update');
    Route::delete('/radiology-request/delete/{id}', 'destroy');
});

// نتائج المختبر
Route::controller(LabResultController::class)->group(function () {
    Route::get('/lab-results', 'index');
    Route::get('/lab-result/{id}', 'show');
    Route::post('/lab-result/store', 'store');
    Route::put('/lab-result/update/{id}', 'update');
    Route::delete('/lab-result/delete/{id}', 'destroy');
});

// نتائج الأشعة
Route::controller(RadiologyResultController::class)->group(function () {
    Route::get('/radiology-results', 'index');
    Route::get('/radiology-result/{id}', 'show');
    Route::post('/radiology-result/store', 'store');
    Route::put('/radiology-result/update/{id}', 'update');
    Route::delete('/radiology-result/delete/{id}', 'destroy');
});

// سجلات العمليات الجراحية
Route::controller(SurgeryLogController::class)->group(function () {
    Route::get('/surgery-logs', 'index');
    Route::get('/surgery-log/{id}', 'show');
    Route::post('/surgery-log/store', 'store');
    Route::put('/surgery-log/update/{id}', 'update');
    Route::delete('/surgery-log/delete/{id}', 'destroy');
});

// سجلات التمريض
Route::controller(NursingLogController::class)->group(function () {
    Route::get('/nursing-logs', 'index');
    Route::get('/nursing-log/{id}', 'show');
    Route::post('/nursing-log/store', 'store');
    Route::put('/nursing-log/update/{id}', 'update');
    Route::delete('/nursing-log/delete/{id}', 'destroy');
});

// الزيارات (visits)
Route::controller(VisitController::class)->group(function () {
    Route::get('/visits', 'index');
    Route::get('/visit/{id}', 'show');
    Route::post('/visit/store', 'store');
    Route::put('/visit/update/{id}', 'update');
    Route::delete('/visit/delete/{id}', 'destroy');
});

// الوصفات الطبية
Route::controller(PrescriptionController::class)->group(function () {
    Route::get('/prescriptions', 'index');
    Route::get('/prescription/{id}', 'show');
    Route::post('/prescription/store', 'store');
    Route::put('/prescription/update/{id}', 'update');
    Route::delete('/prescription/delete/{id}', 'destroy');
});

//  الموظفين
Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employees', 'index');
    Route::get('/employee/{id}', 'show');
    Route::post('/employee/store', 'store');
    Route::put('/employee/update/{id}', 'update');
    Route::delete('/employee/delete/{id}', 'destroy');
});
