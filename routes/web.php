<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\MyParentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BasicuiController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\GradeController;

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



////////////////////////////////////
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [DashboardsController::class, 'index']);
    Route::resource('grades', GradeController::class);
    Route::resource('classrooms',ClassroomController::class);
    Route::resource('sections',SectionController::class);
    Route::resource('students',StudentController::class);
    Route::resource('promotion', \App\Http\Controllers\PromotionController::class);

    Route::view('/add_parent', 'livewire.show_Form');
    Route::get('/classes/{id}', [SectionController::class,'getclasses']);
    Route::get('/Get_classrooms/{id}', [StudentController::class,'Get_classrooms']);
    Route::get('/Get_Sections/{id}',[StudentController::class,'Get_Sections']);


    //find sections classes
    Route::get('/sections/grade/{id}',[SectionController::class,'getSectionInGrade'])->name('sections.grade');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



    /////////////////////////////////////////
    Route::get('index', [DashboardsController::class, 'index']);
    Route::get('index2', [DashboardsController::class, 'index2']);
    Route::get('index3', [DashboardsController::class, 'index3']);
    Route::get('index4', [DashboardsController::class, 'index4']);
    Route::get('index5', [DashboardsController::class, 'index5']);
    Route::get('index6', [DashboardsController::class, 'index6']);
    Route::get('index7', [DashboardsController::class, 'index7']);
    Route::get('index8', [DashboardsController::class, 'index8']);
    Route::get('index9', [DashboardsController::class, 'index9']);
    Route::get('index10', [DashboardsController::class, 'index10']);
    Route::get('index11', [DashboardsController::class, 'index11']);
    Route::get('index12', [DashboardsController::class, 'index12']);

    Route::get('rangeslider', [AdvanceduiController::class, 'rangeslider']);
    Route::get('calendar', [AdvanceduiController::class, 'calendar']);
    Route::get('carousel', [AdvanceduiController::class, 'carousel']);
    Route::get('gallery', [AdvanceduiController::class, 'gallery']);
    Route::get('sweetalert', [AdvanceduiController::class, 'sweetalert']);
    Route::get('ratings', [AdvanceduiController::class, 'ratings']);
    Route::get('draggable', [AdvanceduiController::class, 'draggable']);
    Route::get('notifications', [AdvanceduiController::class, 'notifications']);
    Route::get('treeview', [AdvanceduiController::class, 'treeview']);
    Route::get('filemanager', [AdvanceduiController::class, 'filemanager']);
    Route::get('filemanager-list', [AdvanceduiController::class, 'filemanager_list']);
    Route::get('file-details', [AdvanceduiController::class, 'file_details']);

    Route::get('signin', [AuthenticationController::class, 'signin']);
    Route::get('signin-cover', [AuthenticationController::class, 'signin_cover']);
    Route::get('signin-cover2', [AuthenticationController::class, 'signin_cover2']);
    Route::get('signup', [AuthenticationController::class, 'signup']);
    Route::get('signup-cover', [AuthenticationController::class, 'signup_cover']);
    Route::get('signup-cover2', [AuthenticationController::class, 'signup_cover2']);
    Route::get('createpassword', [AuthenticationController::class, 'createpassword']);
    Route::get('createpassword-cover', [AuthenticationController::class, 'createpassword_cover']);
    Route::get('createpassword-cover2', [AuthenticationController::class, 'createpassword_cover2']);
    Route::get('forgot', [AuthenticationController::class, 'forgot']);
    Route::get('forgot-cover', [AuthenticationController::class, 'forgot_cover']);
    Route::get('forgot-cover2', [AuthenticationController::class, 'forgot_cover2']);
    Route::get('reset', [AuthenticationController::class, 'reset']);
    Route::get('reset-cover', [AuthenticationController::class, 'reset_cover']);
    Route::get('reset-cover2', [AuthenticationController::class, 'reset_cover2']);
    Route::get('lockscreen', [AuthenticationController::class, 'lockscreen']);
    Route::get('lockscreen-cover', [AuthenticationController::class, 'lockscreen_cover']);
    Route::get('lockscreen-cover2', [AuthenticationController::class, 'lockscreen_cover2']);
    Route::get('verfication', [AuthenticationController::class, 'verfication']);
    Route::get('verfication-cover', [AuthenticationController::class, 'verfication_cover']);
    Route::get('verfication-cover2', [AuthenticationController::class, 'verfication_cover2']);
    Route::get('maintenance', [AuthenticationController::class, 'maintenance']);
    Route::get('construction', [AuthenticationController::class, 'construction']);
    Route::get('comingsoon', [AuthenticationController::class, 'comingsoon']);
    Route::get('error404', [AuthenticationController::class, 'error404']);
    Route::get('error500', [AuthenticationController::class, 'error500']);


    Route::get('dropdown', [BasicuiController::class, 'dropdown']);
    Route::get('modal', [BasicuiController::class, 'modal']);
    Route::get('offcanvas', [BasicuiController::class, 'offcanvas']);
    Route::get('tooltip-popovers', [BasicuiController::class, 'tooltip_popovers']);
    Route::get('tables', [BasicuiController::class, 'tables']);
    Route::get('datatables', [BasicuiController::class, 'datatables']);
    Route::get('edittable', [BasicuiController::class, 'edittable']);

    Route::get('apex-charts', [ChartsController::class, 'apex_charts']);
    Route::get('chartjs', [ChartsController::class, 'chartjs']);
    Route::get('echartjs', [ChartsController::class, 'echartjs']);

    Route::get('accordion', [ComponentsController::class, 'accordion']);
    Route::get('alerts', [ComponentsController::class, 'alerts']);
    Route::get('avatars', [ComponentsController::class, 'avatars']);
    Route::get('badges', [ComponentsController::class, 'badges']);
    Route::get('blockquotes', [ComponentsController::class, 'blockquotes']);
    Route::get('buttons', [ComponentsController::class, 'buttons']);
    Route::get('cards', [ComponentsController::class, 'cards']);
    Route::get('collapse', [ComponentsController::class, 'collapse']);
    Route::get('list-group', [ComponentsController::class, 'list_group']);
    Route::get('list-page', [ComponentsController::class, 'list_page']);
    Route::get('indicators', [ComponentsController::class, 'indicators']);
    Route::get('progress', [ComponentsController::class, 'progress']);
    Route::get('skeleton', [ComponentsController::class, 'skeleton']);
    Route::get('spinners', [ComponentsController::class, 'spinners']);
    Route::get('toast', [ComponentsController::class, 'toast']);

    Route::get('navbar', [ElementsController::class, 'navbar']);
    Route::get('mega-menu', [ElementsController::class, 'mega_menu']);
    Route::get('tabs', [ElementsController::class, 'tabs']);
    Route::get('scrollspy', [ElementsController::class, 'scrollspy']);
    Route::get('breadcrumb', [ElementsController::class, 'breadcrumb']);
    Route::get('pagination', [ElementsController::class, 'pagination']);
    Route::get('grid', [ElementsController::class, 'grid']);
    Route::get('columns', [ElementsController::class, 'columns']);

    Route::get('form-elements', [FormsController::class, 'form_elements']);
    Route::get('advanced-forms', [FormsController::class, 'advanced_forms']);
    Route::get('form-inputgroup', [FormsController::class, 'form_inputgroup']);
    Route::get('file-upload', [FormsController::class, 'file_upload']);
    Route::get('form-checkbox', [FormsController::class, 'form_checkbox']);
    Route::get('form-radio', [FormsController::class, 'form_radio']);
    Route::get('form-switch', [FormsController::class, 'form_switch']);
    Route::get('form-select', [FormsController::class, 'form_select']);
    Route::get('form-layouts', [FormsController::class, 'form_layouts']);
    Route::get('form-validations', [FormsController::class, 'form_validations']);
    Route::get('quil-editor', [FormsController::class, 'quil_editor']);

    Route::get('tabler-icons', [IconsController::class, 'tabler_icons']);
    Route::get('remix-icons', [IconsController::class, 'remix_icons']);

    Route::get('google-maps', [MapsController::class, 'google_maps']);
    Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
    Route::get('vector-maps', [MapsController::class, 'vector_maps']);

    Route::get('profile', [PagesController::class, 'profile']);
    Route::get('profile-settings', [PagesController::class, 'profile_settings']);
    Route::get('invoice', [PagesController::class, 'invoice']);
    Route::get('invoice-list', [PagesController::class, 'invoice_list']);
    Route::get('blog', [PagesController::class, 'blog']);
    Route::get('blog-details', [PagesController::class, 'blog_details']);
    Route::get('blog-edit', [PagesController::class, 'blog_edit']);
    Route::get('mail-inbox', [PagesController::class, 'mail_inbox']);
    Route::get('chat', [PagesController::class, 'chat']);
    Route::get('mail-settings', [PagesController::class, 'mail_settings']);
    Route::get('products', [PagesController::class, 'products']);
    Route::get('product-list', [PagesController::class, 'product_list']);
    Route::get('add-product', [PagesController::class, 'add_product']);
    Route::get('edit-product', [PagesController::class, 'edit_product']);
    Route::get('products-details', [PagesController::class, 'products_details']);
    Route::get('cart', [PagesController::class, 'cart']);
    Route::get('checkout', [PagesController::class, 'checkout']);
    Route::get('orders', [PagesController::class, 'orders']);
    Route::get('order-details', [PagesController::class, 'order_details']);
    Route::get('wishlist', [PagesController::class, 'wishlist']);
    Route::get('about', [PagesController::class, 'about']);
    Route::get('contacts', [PagesController::class, 'contacts']);
    Route::get('pricing', [PagesController::class, 'pricing']);
    Route::get('timeline', [PagesController::class, 'timeline']);
    Route::get('teams', [PagesController::class, 'teams']);
    Route::get('landing', [PagesController::class, 'landing']);
    Route::get('todo', [PagesController::class, 'todo']);
    Route::get('tasks', [PagesController::class, 'tasks']);
    Route::get('reviews', [PagesController::class, 'reviews']);
    Route::get('faqs', [PagesController::class, 'faqs']);
    Route::get('contactus', [PagesController::class, 'contactus']);
    Route::get('terms', [PagesController::class, 'terms']);
    Route::get('empty-page', [PagesController::class, 'empty_page']);

    Route::get('widgets', [WidgetsController::class, 'widgets']);
    Route::get('navbar', [ElementsController::class, 'navbar']);
});




require __DIR__ . '/auth.php';
