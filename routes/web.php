<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Http;

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


Auth::routes();

Route::prefix('')->group(function () {
    Route::get('/', function () {
        // $responses = Http::get('https://api.quotable.io/quotes?maxLength=166');
        return view('users.home');
    });
Route::get('/mulai-test-mbti', function () {
$question = Question::all();
return view('users.dashboard',['questions' => $question]);
});
Route::post('/hasil', [QuestionController::class, 'calculate']);
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
Route::get('/', function () {
        return redirect('admin/login');
});
Route::get('/login', [AdminController::class, 'index'])->name('login')->withoutMiddleware('auth');
Route::post('/login', [AdminController::class, 'login'])->withoutMiddleware('auth');
Route::post('/register', [AdminController::class, 'register']);
Route::get('/register', function () {
        return redirect()->route('admin.dashboard');
});
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/post', function () {
        return view('admin.post');
})->name('post');
Route::get('/post/add', function () {
        return view('admin.post');
})->name('post.add');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/edit/{id}', [PostController::class, 'update']);
Route::post('/post/add', [PostController::class, 'store']);
Route::get('/report', function () {
        return view('admin.report');
})->name('report');
Route::get('/questions', function () {
        return view('admin.questions');
    })->name('questions');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::get('/personality-type', function () {
        return view('personality-type');
});

Route::get('/kepribadian-intj', function () {
        return view('kepribadian-intj');
});

Route::get('/kepribadian-intp', function () {
        return view('kepribadian-intp');
});

Route::get('/kepribadian-entp', function () {
        return view('kepribadian-entp');
});

Route::get('/kepribadian-entj', function () {
        return view('kepribadian-entj');
});

Route::get('/kepribadian-infj', function () {
        return view('kepribadian-infj');
});

Route::get('/kepribadian-infp', function () {
        return view('kepribadian-infp');
});

Route::get('/kepribadian-enfj', function () {
        return view('kepribadian-enfj');
});

Route::get('/kepribadian-enfp', function () {
        return view('kepribadian-enfp');
});

Route::get('/kepribadian-istj', function () {
        return view('kepribadian-istj');
});

Route::get('/kepribadian-isfj', function () {
        return view('kepribadian-isfj');
});

Route::get('/kepribadian-estj', function () {
        return view('kepribadian-estj');
});

Route::get('/kepribadian-esfj', function () {
        return view('kepribadian-esfj');
});

Route::get('/kepribadian-istp', function () {
        return view('kepribadian-istp');
});

Route::get('/kepribadian-isfp', function () {
        return view('kepribadian-isfp');
});

Route::get('/kepribadian-estp', function () {
        return view('kepribadian-estp');
});

Route::get('/kepribadian-esfp', function () {
        return view('kepribadian-esfp');
});

Route::get('/guide', function () {
        return view('guide');
});

Route::get('/login', function () {
        return view('auth.login');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
        return view('auth.register');
});

// Route::get('/user-dashboard', function () {
//     return view('user-dashboard');
// });

Route::get('/user-dashboard', function () {
        return view('user-dashboard');
    })->middleware('auth')->name('user-dashboard');
    

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
