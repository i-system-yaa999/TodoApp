<?php

use App\Http\Controllers\TodoContentController;
use Illuminate\Support\Facades\Route;


route::get('/', [TodoContentController::class, 'index']);
route::prefix('/todo')->group(function () {
  route::get('/create', [TodoContentController::class, 'create']);
  route::post('/update', [TodoContentController::class, 'update']);
  route::post('/delete', [TodoContentController::class, 'delete']);
});