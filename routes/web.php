<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Response;


// Portfolio Routes

// Route::fallback(function () {
//     return redirect('/error')->with('error', 'Page not found.')->setStatusCode(404);
// });

// Route::get('/sitemap.xml', function () {
//     $sitemap = Sitemap::create()
//         ->add(Url::create('/'))
//         ->add(Url::create('/about'))
//         ->add(Url::create('/portfolio'))
//         ->add(Url::create('/blog'))
//         ->add(Url::create('/contact'))
//         ->add(Url::create('/testimonial'))
//         ->add(Url::create('/faq'))
//         ->add(Url::create('/error'))
//         ->add(Url::create('/blog-details'));

//     return $sitemap->toResponse(request());
// });


Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/portfolio'))
        ->add(Url::create('/blog'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/testimonial'))
        ->add(Url::create('/faq'))
        ->add(Url::create('/blog-details'))
        ->add(Url::create('/privacy-policy'))
        ->add(Url::create('/refund-policy'))
        ->add(Url::create('/terms-conditions'));

    return response($sitemap->render(), 200)
        ->header('Content-Type', 'application/xml')
        ->header('X-Robots-Tag', 'index, follow');
});



// Route::get('/robots.txt', function () {
//     return response()->view('robots')->header('Content-Type', 'text/plain');
// });

Route::get('/robots.txt', function () {
    return response()
        ->view('robots')
        ->header('Content-Type', 'text/plain')
        ->header('X-Robots-Tag', 'index, follow');
});


Route::get('/', [PortfolioController::class, 'index'])->name('index');
Route::get('/index', [PortfolioController::class, 'index']);
Route::get('/about', [PortfolioController::class, 'about']);

Route::get('/portfolio', [ProjectController::class, 'portfolioIndex'])->name('portfolio.index');

Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('portfolio.details');

// Route::get('/portfolio-details', [PortfolioController::class, 'portfolio_details']);

Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/testimonial', [PortfolioController::class, 'testimonial']);
Route::get('/faq', [PortfolioController::class, 'faq']);
Route::get('/error', [PortfolioController::class, 'error']);
Route::get('/blog', [PortfolioController::class, 'blog']);
Route::get('/blog-details', [PortfolioController::class, 'blog_details']);
// Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::post('/faq/store', [FAQController::class, 'store'])->name('faq.store');



Route::get('/privacy-policy', [LegalController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/refund-policy', [LegalController::class, 'refundPolicy'])->name('refund.policy');
Route::get('/terms-conditions', [LegalController::class, 'termsConditions'])->name('terms.conditions');

// Dashboard Route
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes (Only for Authenticated Users)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Define routes for all other pages
    Route::get('/generate/theme', [PageController::class, 'theme'])->name('generate.theme');
    Route::get('/widgets/small-box', [PageController::class, 'smallBox'])->name('widgets.small-box');
    Route::get('/widgets/info-box', [PageController::class, 'infoBox'])->name('widgets.info-box');
    Route::get('/widgets/cards', [PageController::class, 'cards'])->name('widgets.cards');

    Route::get('/layout/unfixed-sidebar', [PageController::class, 'unfixedSidebar'])->name('layout.unfixed-sidebar');
    Route::get('/layout/fixed-sidebar', [PageController::class, 'fixedSidebar'])->name('layout.fixed-sidebar');
    Route::get('/layout/custom-area', [PageController::class, 'customArea'])->name('layout.custom-area');
    Route::get('/layout/sidebar-mini', [PageController::class, 'sidebarMini'])->name('layout.sidebar-mini');
    Route::get('/layout/collapsed-sidebar', [PageController::class, 'collapsedSidebar'])->name('layout.collapsed-sidebar');
    Route::get('/layout/logo-switch', [PageController::class, 'logoSwitch'])->name('layout.logo-switch');
    Route::get('/layout/layout-rtl', [PageController::class, 'layoutRtl'])->name('layout.rtl');

    Route::get('/UI/general', [PageController::class, 'generalUI'])->name('ui.general');
    Route::get('/UI/icons', [PageController::class, 'icons'])->name('ui.icons');
    Route::get('/UI/timeline', [PageController::class, 'timeline'])->name('ui.timeline');

    Route::get('/forms/general', [PageController::class, 'generalForms'])->name('forms.general');
    Route::get('/tables/simple', [PageController::class, 'simpleTables'])->name('tables.simple');

    Route::get('/examples/login', [PageController::class, 'login'])->name('examples.login');
    Route::get('/examples/register', [PageController::class, 'register'])->name('examples.register');
    Route::get('/examples/login-v2', [PageController::class, 'loginV2'])->name('examples.login-v2');
    Route::get('/examples/register-v2', [PageController::class, 'registerV2'])->name('examples.register-v2');
    Route::get('/examples/lockscreen', [PageController::class, 'lockscreen'])->name('examples.lockscreen');

    Route::get('/docs/introduction', [PageController::class, 'docsIntroduction'])->name('docs.introduction');
    Route::get('/docs/color-mode', [PageController::class, 'docsColorMode'])->name('docs.color-mode');
    Route::get('/docs/components/main-header', [PageController::class, 'mainHeader'])->name('docs.main-header');
    Route::get('/docs/components/main-sidebar', [PageController::class, 'mainSidebar'])->name('docs.main-sidebar');
    Route::get('/docs/javascript/treeview', [PageController::class, 'treeView'])->name('docs.treeview');
    Route::get('/docs/browser-support', [PageController::class, 'browserSupport'])->name('docs.browser-support');
    Route::get('/docs/how-to-contribute', [PageController::class, 'howToContribute'])->name('docs.how-to-contribute');
    Route::get('/docs/faq', [PageController::class, 'faq'])->name('docs.faq');
    Route::get('/docs/license', [PageController::class, 'license'])->name('docs.license');



    Route::get('/admin/contact', [PageController::class, 'contact'])->name('admin.contact');
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');

    Route::get('/admin/faq', [FAQController::class, 'index'])->name('admin.faq');

    Route::resource('/projects', ProjectController::class)->names([
        'index' => 'admin.projects.index',
        'create' => 'admin.projects.create',
        'store' => 'admin.projects.store',
        'edit' => 'admin.projects.edit',
        'update' => 'admin.projects.update',
        'destroy' => 'admin.projects.destroy',
    ]);
    Route::delete('/admin/projects/remove-image/{id}', [ProjectController::class, 'removeImage'])->name('admin.projects.removeImage');
Route::get('admin/projects/toggle-status/{id}', [ProjectController::class, 'toggleStatus'])->name('admin.projects.toggleStatus');


});




// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__ . '/auth.php';