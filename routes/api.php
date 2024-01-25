<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\Editor\ProjectController;
use App\Http\Controllers\Editor\DesignerEditorController;
use App\Http\Controllers\Editor\GeneratePDFController;
use App\Http\Controllers\Editor\StudioController;



Route::post('/store', [EditorController::class, 'store'])->name('store');
Route::post('/studio/validate-key', [StudioController::class, 'validateKey']);
//Route::get('/studio/get-google-fonts', [StudioController::class, 'getGoogleFonts']);
//Route::get('/studio/get-basic-shapes', [StudioController::class, 'getBasicShapes']);
Route::any('/studio/{any}', [StudioController::class, 'anyUrl'])->where('any','.*');

Route::get('/design/{id}/{userid}/{designType?}', [EditorController::class, 'show']);


// Customer Projects


Route::post('project', [ProjectController::class, 'store']);
Route::patch('project/id/update', [ProjectController::class, 'update']);


// Designer Designs

Route::get('/designer/{id}/{designerid}', [DesignerEditorController::class, 'design']);

Route::post('/designerupdate', [DesignerEditorController::class, 'store']);

Route::post('/pdf',[GeneratePDFController::class, 'index'] );