<?php

use App\Http\Controllers\AnnouncementManager;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageManager;
use App\Http\Controllers\PersonalManager;
use App\Http\Controllers\WarehouseManager;

Route::get('/', function () {
    return view('home');
    })->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/admin/panel', function () {
        return view('admin_panel');
    })->name('admin.panel');

    Route::get('/Personal/panel', function () {
        return view('user_panel');
    })->name('user.panel');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/forgot_my_password', [AuthManager::class, 'forgot_my_password'])->name('forgot_my_password');
Route::post('/forgot_my_password', [AuthManager::class, 'forgot_my_passwordPost'])->name('forgot_my_password.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/addPersonal', [PersonalManager::class, 'addPersonal'])->name('addPersonal');
Route::post('/addPersonal', [PersonalManager::class, 'addPersonalPost'])->name('addPersonal.post');
Route::get('/Personalupdate', [PersonalManager::class, 'updatePersonal'])->name('updatePersonal');
Route::post('/Personalupdate', [PersonalManager::class, 'updatePersonalPost'])->name('updatePersonal.post');
Route::get('/deletePersonal', [PersonalManager::class, 'deletePersonal'])->name('deletePersonal');
Route::post('/deletePersonal', [PersonalManager::class, 'deletePersonalPost'])->name('deletePersonal.post');
Route::get('/showallPersonals', [PersonalManager::class, 'showAllPersonals'])->name('showAllPersonals');

Route::get('/addWarehouse', [WarehouseManager::class, 'addWarehouse'])->name('addWarehouse');
Route::post('/addWarehouse', [WarehouseManager::class, 'addWarehousePost'])->name('addWarehouse.post');
Route::get('/Warehouseupdate', [WarehouseManager::class, 'updateWarehouse'])->name('updateWarehouse');
Route::post('/Warehouseupdate', [WarehouseManager::class, 'updateWarehousePost'])->name('updateWarehouse.post');
Route::get('/deleteWarehouse', [WarehouseManager::class, 'deleteWarehouse'])->name('deleteWarehouse');
Route::post('/deleteWarehouse', [WarehouseManager::class, 'deleteWarehousePost'])->name('deleteWarehouse.post');
Route::get('/showallWarehouses', [WarehouseManager::class, 'showAllWarehouses'])->name('showAllWarehouses');

Route::get('/addannouncement', [AnnouncementManager::class, 'addAnnouncement'])->name('addAnnouncement');
Route::post('/addannouncement', [AnnouncementManager::class, 'addAnnouncementPost'])->name('addAnnouncement.post');
Route::get('/editlastannouncement', [AnnouncementManager::class, 'editLastAnnouncement'])->name('editLastAnnouncement');
Route::post('/editlastannouncement', [AnnouncementManager::class, 'editLastAnnouncementPost'])->name('editLastAnnouncement.post');
Route::get('/showallannouncements', [AnnouncementManager::class, 'showAllAnnouncements'])->name('showAllAnnouncements');


Route::get('/messages', [MessageManager::class, 'messages'])->name('messages');
Route::post('/messages', [MessageManager::class, 'messagesPost'])->name('messages.post');
Route::get('/chat', [MessageManager::class, 'messageChat'])->name('messageChat');
Route::post('/chat', [MessageManager::class, 'messageChatPost'])->name('messageChat.post');
