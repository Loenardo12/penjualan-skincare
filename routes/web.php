<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\CheckOngkirController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/transaction', function () {
    return view('transaction.transaction');
});
Route::get('/admin', function () {
    return view('admin');
});


Route::get('/admin', function () {
    return view('admin',['nama' => 'admin']);
});
Route::get('/bukti', function () {
    return view('bukti');
});

Route::get('/editcount', function () {
    return view('editcount');
});
Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/logoutadmin', function () {
    return view('loginadmin');
});
Route::get('/loginuser', function () {
    return view('loginuser');
});
Route::get('/mybag', function () {
    return view('mybag');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/registeruser', function () {
    return view('registeruser');
});
Route::get('/transaction', function () {
    return view('admin/transaction/transaction');
});

Route::get('/product',  [productController::class, 'index']);
Route::get('/product/tambah', [productController::class, 'create']);
Route::post('/product/store', [productController::class, 'store']);
Route::get('/product/edit/{id}', [productController::class, 'edit']);
Route::put('/product/update/{id}', [productController::class, 'update']);
Route::get('/product/hapus/{id}', [productController::class, 'delete']);
Route::get('/product/destroy/{id}', [productController::class, 'destroy']);

Route::post('/Order', [WelcomeController::class, 'CreateTransaction'])->name('transaction');
Route::get('/transaksi', [TransactionController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/transaction/cetak', [TransactionController::class, 'cetak']);

Route::post('/mybag/add', [BagController::class, 'addToBag']);

Route::get('/admin', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


route::get('/registrasi', [AuthController::class, 'tampilregistrasi'])->name('registrasi.tampil');
route::get('/registrasi/submit', [AuthController::class, 'submitregistrasi'])->name('registrasi.submit');

route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
route::get('/login/submit', [AuthController::class, 'submitlogin'])->name('login.submit');

// Route::get('register', [RegisterController::class, 'register'])->name('register');
// Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');


// Admin routes
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin');
//     });
// });

// // User routes
// Route::middleware(['auth', 'user'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });

// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');


//raja ongkir
Route::get('/ongkir', [CheckOngkirController::class, 'index'])->name('ongkir.index');
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir'])->name('ongkir.check');
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getCities'])->name('ongkir.cities');
