<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HistoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\ManagementController;
use App\Http\Controllers\Front\RegulationController;
use App\Http\Controllers\Front\TermsController;
use App\Http\Controllers\Front\DisclaimerController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\PhotoController;
use App\Http\Controllers\Front\VideoController;
use App\Http\Controllers\Front\ResearchController;
use App\Http\Controllers\Front\MainController;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\VocationalController;
use App\Http\Controllers\Admin\VocDepartmentController;
use App\Http\Controllers\Admin\VocPostController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\FacultyPostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\SenateController;
use App\Http\Controllers\Admin\SenateDecisionController;
use App\Http\Controllers\Admin\AccessController;
use App\Http\Controllers\Admin\CouncilController;
use App\Http\Controllers\Admin\AdvisorController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\SecretaryController;
use App\Http\Controllers\Admin\ResearchCenterController;
use App\Http\Controllers\Admin\AdminSocialItemController;


/* Front End */
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/kurumsal/misyon-ve-vizyon', [AboutController::class, 'index'])->name('about');
Route::get('/kurumsal/tarihce', [HistoryController::class, 'index'])->name('history');
Route::get('/kurumsal/fotograflar', [PhotoController::class, 'index'])->name('photo_gallery');
Route::get('/kurumsal/videolar', [VideoController::class, 'index'])->name('video_gallery');

Route::get('/yonetim/rektor', [ManagementController::class, 'rector'])->name('rector');
Route::get('/yonetim/rektor-yardimcilari', [ManagementController::class, 'advisor'])->name('advisor');
Route::get('/yonetim/genel-sekreter', [ManagementController::class, 'secretary'])->name('secretary');
Route::get('/yonetim/senato', [ManagementController::class, 'senate'])->name('senate');
Route::get('/yonetim/yonetim-kurulu', [ManagementController::class, 'council'])->name('council');

Route::get('/mevzuat/senato-kararlari', [RegulationController::class, 'senatedecision'])->name('senatedecision');
Route::get('/mevzuat/senato-kararlari/{id}', [RegulationController::class, 'senatedecision_show'])->name('senatedecision_show');
Route::get('/mevzuat/stratejik-plan', [RegulationController::class, 'plan'])->name('plan');
Route::get('/mevzuat/kalite-politikasi', [RegulationController::class, 'quality_policy'])->name('quality_policy');

Route::get('/arastirma/arastirma-merkezleri', [ResearchController::class, 'research'])->name('research');

Route::get('/haberler', [MainController::class, 'news'])->name('news');
Route::get('/haberler/{id}', [MainController::class, 'news_show'])->name('news_show');

Route::get('/etkinlikler', [MainController::class, 'event'])->name('event');
Route::get('/etkinlikler/{id}', [MainController::class, 'event_show'])->name('event_show');

Route::get('/duyurular', [MainController::class, 'announcement'])->name('announcement');
Route::get('/duyurular/{id}', [MainController::class, 'announcement_show'])->name('announcement_show');

Route::get('/fakulteler', [MainController::class, 'faculty'])->name('faculty');
Route::get('/fakulteler/{id}', [MainController::class, 'faculty_show'])->name('faculty_show');

Route::get('/bolumler', [MainController::class, 'department'])->name('department');
Route::get('/bolumler/{id}', [MainController::class, 'department_show'])->name('department_show');

Route::get('/meslek-yuksekokullari', [MainController::class, 'vocational'])->name('vocational');
Route::get('/meslek-yuksekokullari/{id}', [MainController::class, 'vocational_show'])->name('vocational_show');

Route::get('/programlar', [MainController::class, 'voc_department'])->name('voc_department');
Route::get('/programlar/{id}', [MainController::class, 'voc_department_show'])->name('voc_department_show');

Route::get('/iletisim', [ContactController::class, 'index'])->name('contact');
Route::post('/iletisim/email-gonder', [ContactController::class, 'send_email'])->name('contact_form_submit');
Route::get('/sikca-sorulan-sorular', [FaqController::class, 'index'])->name('faq');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-submit', [LoginController::class, 'login_submit'])->name('login_submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forget-password', [LoginController::class, 'forget_password'])->name('forget_password');
Route::post('/forget-password-submit', [LoginController::class, 'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset-password/{token}/{email}', [LoginController::class, 'reset_password'])->name('reset_password');
Route::post('/reset-password-submit', [LoginController::class, 'reset_password_submit'])->name('reset_password_submit');


/* Admin */
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

Route::get('/admin/faculty/show', [FacultyController::class, 'show'])->name('admin_faculty_show')->middleware('admin:admin');
Route::get('/admin/faculty/create', [FacultyController::class, 'create'])->name('admin_faculty_create')->middleware('admin:admin');
Route::post('/admin/faculty/store', [FacultyController::class, 'store'])->name('admin_faculty_store');
Route::get('/admin/faculty/edit/{id}', [FacultyController::class, 'edit'])->name('admin_faculty_edit')->middleware('admin:admin');
Route::post('/admin/faculty/update/{id}', [FacultyController::class, 'update'])->name('admin_faculty_update');
Route::get('/admin/faculty/delete/{id}', [FacultyController::class, 'delete'])->name('admin_faculty_delete')->middleware('admin:admin');

Route::get('/admin/department/show', [DepartmentController::class, 'show'])->name('admin_department_show')->middleware('admin:admin');
Route::get('/admin/department/create', [DepartmentController::class, 'create'])->name('admin_department_create')->middleware('admin:admin');
Route::post('/admin/department/store', [DepartmentController::class, 'store'])->name('admin_department_store');
Route::get('/admin/department/edit/{id}', [DepartmentController::class, 'edit'])->name('admin_department_edit')->middleware('admin:admin');
Route::post('/admin/department/update/{id}', [DepartmentController::class, 'update'])->name('admin_department_update');
Route::get('/admin/department/delete/{id}', [DepartmentController::class, 'delete'])->name('admin_department_delete')->middleware('admin:admin');

Route::get('/admin/facpost/show', [FacultyPostController::class, 'show'])->name('admin_facpost_show')->middleware('admin:admin');
Route::get('/admin/facpost/create', [FacultyPostController::class, 'create'])->name('admin_facpost_create')->middleware('admin:admin');
Route::post('/admin/facpost/store', [FacultyPostController::class, 'store'])->name('admin_facpost_store');
Route::get('/admin/facpost/edit/{id}', [FacultyPostController::class, 'edit'])->name('admin_facpost_edit')->middleware('admin:admin');
Route::post('/admin/facpost/update/{id}', [FacultyPostController::class, 'update'])->name('admin_facpost_update');
Route::get('/admin/facpost/delete/{id}', [FacultyPostController::class, 'delete'])->name('admin_facpost_delete')->middleware('admin:admin');

Route::get('/admin/vocational/show', [VocationalController::class, 'show'])->name('admin_vocational_show')->middleware('admin:admin');
Route::get('/admin/vocational/create', [VocationalController::class, 'create'])->name('admin_vocational_create')->middleware('admin:admin');
Route::post('/admin/vocational/store', [VocationalController::class, 'store'])->name('admin_vocational_store');
Route::get('/admin/vocational/edit/{id}', [VocationalController::class, 'edit'])->name('admin_vocational_edit')->middleware('admin:admin');
Route::post('/admin/vocational/update/{id}', [VocationalController::class, 'update'])->name('admin_vocational_update');
Route::get('/admin/vocational/delete/{id}', [VocationalController::class, 'delete'])->name('admin_vocational_delete')->middleware('admin:admin');

Route::get('/admin/voc-department/show', [VocDepartmentController::class, 'show'])->name('admin_voc_department_show')->middleware('admin:admin');
Route::get('/admin/voc-department/create', [VocDepartmentController::class, 'create'])->name('admin_voc_department_create')->middleware('admin:admin');
Route::post('/admin/voc-department/store', [VocDepartmentController::class, 'store'])->name('admin_voc_department_store');
Route::get('/admin/voc-department/edit/{id}', [VocDepartmentController::class, 'edit'])->name('admin_voc_department_edit')->middleware('admin:admin');
Route::post('/admin/voc-department/update/{id}', [VocDepartmentController::class, 'update'])->name('admin_voc_department_update');
Route::get('/admin/voc-department/delete/{id}', [VocDepartmentController::class, 'delete'])->name('admin_voc_department_delete')->middleware('admin:admin');

Route::get('/admin/voc-post/show', [VocPostController::class, 'show'])->name('admin_voc_post_show')->middleware('admin:admin');
Route::get('/admin/voc-post/create', [VocPostController::class, 'create'])->name('admin_voc_post_create')->middleware('admin:admin');
Route::post('/admin/voc-post/store', [VocPostController::class, 'store'])->name('admin_voc_post_store');
Route::get('/admin/voc-post/edit/{id}', [VocPostController::class, 'edit'])->name('admin_voc_post_edit')->middleware('admin:admin');
Route::post('/admin/voc-post/update/{id}', [VocPostController::class, 'update'])->name('admin_voc_post_update');
Route::get('/admin/voc-post/delete/{id}', [VocPostController::class, 'delete'])->name('admin_voc_post_delete')->middleware('admin:admin');

Route::get('/admin/setting', [SettingController::class, 'index'])->name('admin_setting')->middleware('admin:admin');
Route::post('/admin/setting/update', [SettingController::class, 'update'])->name('admin_setting_update');

Route::get('/admin/slider/show', [SliderController::class, 'show'])->name('admin_slider_show')->middleware('admin:admin');
Route::get('/admin/slider/create', [SliderController::class, 'create'])->name('admin_slider_create')->middleware('admin:admin');
Route::post('/admin/slider/store', [SliderController::class, 'store'])->name('admin_slider_store');
Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('admin_slider_edit')->middleware('admin:admin');
Route::post('/admin/slider/update/{id}', [SliderController::class, 'update'])->name('admin_slider_update');
Route::get('/admin/slider/delete/{id}', [SliderController::class, 'delete'])->name('admin_slider_delete')->middleware('admin:admin');

Route::get('/admin/photo/show', [AdminPhotoController::class, 'show'])->name('admin_photo_show')->middleware('admin:admin');
Route::get('/admin/photo/create', [AdminPhotoController::class, 'create'])->name('admin_photo_create')->middleware('admin:admin');
Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store');
Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit')->middleware('admin:admin');
Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update');
Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin_photo_delete')->middleware('admin:admin');

Route::get('/admin/video/show', [AdminVideoController::class, 'show'])->name('admin_video_show')->middleware('admin:admin');
Route::get('/admin/video/create', [AdminVideoController::class, 'create'])->name('admin_video_create')->middleware('admin:admin');
Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin_video_store');
Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin_video_edit')->middleware('admin:admin');
Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin_video_update');
Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin_video_delete')->middleware('admin:admin');

Route::get('/admin/page/about', [PageController::class, 'about'])->name('admin_page_about')->middleware('admin:admin');
Route::post('/admin/page/about/update', [PageController::class, 'about_update'])->name('admin_page_about_update');
Route::get('/admin/page/history', [PageController::class, 'history'])->name('admin_page_history')->middleware('admin:admin');
Route::post('/admin/page/history/update', [PageController::class, 'history_update'])->name('admin_page_history_update');
Route::get('/admin/page/faq', [PageController::class, 'faq'])->name('admin_page_faq')->middleware('admin:admin');
Route::post('/admin/page/faq/update', [PageController::class, 'faq_update'])->name('admin_page_faq_update');
Route::get('/admin/page/login', [PageController::class, 'login'])->name('admin_page_login')->middleware('admin:admin');
Route::post('/admin/page/login/update', [PageController::class, 'login_update'])->name('admin_page_login_update');
Route::get('/admin/page/contact', [PageController::class, 'contact'])->name('admin_page_contact')->middleware('admin:admin');
Route::post('/admin/page/contact/update', [PageController::class, 'contact_update'])->name('admin_page_contact_update');

Route::get('/admin/management/rector', [AdminManagementController::class, 'rector'])->name('admin_management_rector')->middleware('admin:admin');
Route::post('/admin/management/rector/update', [AdminManagementController::class, 'rector_update'])->name('admin_management_rector_update');

Route::get('/admin/senate/show', [SenateController::class, 'show'])->name('admin_senate_show')->middleware('admin:admin');
Route::get('/admin/senate/create', [SenateController::class, 'create'])->name('admin_senate_create')->middleware('admin:admin');
Route::post('/admin/senate/store', [SenateController::class, 'store'])->name('admin_senate_store');
Route::get('/admin/senate/edit/{id}', [SenateController::class, 'edit'])->name('admin_senate_edit')->middleware('admin:admin');
Route::post('/admin/senate/update/{id}', [SenateController::class, 'update'])->name('admin_senate_update');
Route::get('/admin/senate/delete/{id}', [SenateController::class, 'delete'])->name('admin_senate_delete')->middleware('admin:admin');

Route::get('/admin/senate-decision/show', [SenateDecisionController::class, 'show'])->name('admin_senate_decision_show')->middleware('admin:admin');
Route::get('/admin/senate-decision/create', [SenateDecisionController::class, 'create'])->name('admin_senate_decision_create')->middleware('admin:admin');
Route::post('/admin/senate-decision/store', [SenateDecisionController::class, 'store'])->name('admin_senate_decision_store');
Route::get('/admin/senate-decision/edit/{id}', [SenateDecisionController::class, 'edit'])->name('admin_senate_decision_edit')->middleware('admin:admin');
Route::post('/admin/senate-decision/update/{id}', [SenateDecisionController::class, 'update'])->name('admin_senate_decision_update');
Route::get('/admin/senate-decision/delete/{id}', [SenateDecisionController::class, 'delete'])->name('admin_senate_decision_delete')->middleware('admin:admin');

Route::get('/admin/access/show', [AccessController::class, 'show'])->name('admin_access_show')->middleware('admin:admin');
Route::get('/admin/access/create', [AccessController::class, 'create'])->name('admin_access_create')->middleware('admin:admin');
Route::post('/admin/access/store', [AccessController::class, 'store'])->name('admin_access_store');
Route::get('/admin/access/edit/{id}', [AccessController::class, 'edit'])->name('admin_access_edit')->middleware('admin:admin');
Route::post('/admin/access/update/{id}', [AccessController::class, 'update'])->name('admin_access_update');
Route::get('/admin/access/delete/{id}', [AccessController::class, 'delete'])->name('admin_access_delete')->middleware('admin:admin');

Route::get('/admin/council/show', [CouncilController::class, 'show'])->name('admin_council_show')->middleware('admin:admin');
Route::get('/admin/council/create', [CouncilController::class, 'create'])->name('admin_council_create')->middleware('admin:admin');
Route::post('/admin/council/store', [CouncilController::class, 'store'])->name('admin_council_store');
Route::get('/admin/council/edit/{id}', [CouncilController::class, 'edit'])->name('admin_council_edit')->middleware('admin:admin');
Route::post('/admin/council/update/{id}', [CouncilController::class, 'update'])->name('admin_council_update');
Route::get('/admin/council/delete/{id}', [CouncilController::class, 'delete'])->name('admin_council_delete')->middleware('admin:admin');

Route::get('/admin/advisor/show', [AdvisorController::class, 'show'])->name('admin_advisor_show')->middleware('admin:admin');
Route::get('/admin/advisor/create', [AdvisorController::class, 'create'])->name('admin_advisor_create')->middleware('admin:admin');
Route::post('/admin/advisor/store', [AdvisorController::class, 'store'])->name('admin_advisor_store');
Route::get('/admin/advisor/edit/{id}', [AdvisorController::class, 'edit'])->name('admin_advisor_edit')->middleware('admin:admin');
Route::post('/admin/advisor/update/{id}', [AdvisorController::class, 'update'])->name('admin_advisor_update');
Route::get('/admin/advisor/delete/{id}', [AdvisorController::class, 'delete'])->name('admin_advisor_delete')->middleware('admin:admin');

Route::get('/admin/secretary/show', [SecretaryController::class, 'show'])->name('admin_secretary_show')->middleware('admin:admin');
Route::get('/admin/secretary/create', [SecretaryController::class, 'create'])->name('admin_secretary_create')->middleware('admin:admin');
Route::post('/admin/secretary/store', [SecretaryController::class, 'store'])->name('admin_secretary_store');
Route::get('/admin/secretary/edit/{id}', [SecretaryController::class, 'edit'])->name('admin_secretary_edit')->middleware('admin:admin');
Route::post('/admin/secretary/update/{id}', [SecretaryController::class, 'update'])->name('admin_secretary_update');
Route::get('/admin/secretary/delete/{id}', [SecretaryController::class, 'delete'])->name('admin_secretary_delete')->middleware('admin:admin');

Route::get('/admin/research-center/show', [ResearchCenterController::class, 'show'])->name('admin_researchcenter_show')->middleware('admin:admin');
Route::get('/admin/research-center/create', [ResearchCenterController::class, 'create'])->name('admin_researchcenter_create')->middleware('admin:admin');
Route::post('/admin/research-center/store', [ResearchCenterController::class, 'store'])->name('admin_researchcenter_store');
Route::get('/admin/research-center/edit/{id}', [ResearchCenterController::class, 'edit'])->name('admin_researchcenter_edit')->middleware('admin:admin');
Route::post('/admin/research-center/update/{id}', [ResearchCenterController::class, 'update'])->name('admin_researchcenter_update');
Route::get('/admin/research-center/delete/{id}', [ResearchCenterController::class, 'delete'])->name('admin_researchcenter_delete')->middleware('admin:admin');

Route::get('/admin/news/show', [NewsController::class, 'show'])->name('admin_news_show')->middleware('admin:admin');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin_news_create')->middleware('admin:admin');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('admin_news_store');
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('admin_news_edit')->middleware('admin:admin');
Route::post('/admin/news/update/{id}', [NewsController::class, 'update'])->name('admin_news_update');
Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete'])->name('admin_news_delete')->middleware('admin:admin');

Route::get('/admin/event/show', [EventController::class, 'show'])->name('admin_event_show')->middleware('admin:admin');
Route::get('/admin/event/create', [EventController::class, 'create'])->name('admin_event_create')->middleware('admin:admin');
Route::post('/admin/event/store', [EventController::class, 'store'])->name('admin_event_store');
Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('admin_event_edit')->middleware('admin:admin');
Route::post('/admin/event/update/{id}', [EventController::class, 'update'])->name('admin_event_update');
Route::get('/admin/event/delete/{id}', [EventController::class, 'delete'])->name('admin_event_delete')->middleware('admin:admin');

Route::get('/admin/announcement/show', [AnnouncementController::class, 'show'])->name('admin_announcement_show')->middleware('admin:admin');
Route::get('/admin/announcement/create', [AnnouncementController::class, 'create'])->name('admin_announcement_create')->middleware('admin:admin');
Route::post('/admin/announcement/store', [AnnouncementController::class, 'store'])->name('admin_announcement_store');
Route::get('/admin/announcement/edit/{id}', [AnnouncementController::class, 'edit'])->name('admin_announcement_edit')->middleware('admin:admin');
Route::post('/admin/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('admin_announcement_update');
Route::get('/admin/announcement/delete/{id}', [AnnouncementController::class, 'delete'])->name('admin_announcement_delete')->middleware('admin:admin');

Route::get('/admin/faq/show', [AdminFaqController::class, 'show'])->name('admin_faq_show')->middleware('admin:admin');
Route::get('/admin/faq/create', [AdminFaqController::class, 'create'])->name('admin_faq_create')->middleware('admin:admin');
Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit')->middleware('admin:admin');
Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete')->middleware('admin:admin');

Route::get('/admin/social-item/show', [AdminSocialItemController::class, 'show'])->name('admin_social_item_show')->middleware('admin:admin');
Route::get('/admin/social-item/create', [AdminSocialItemController::class, 'create'])->name('admin_social_item_create')->middleware('admin:admin');
Route::post('/admin/social-item/store', [AdminSocialItemController::class, 'store'])->name('admin_social_item_store');
Route::get('/admin/social-item/edit/{id}', [AdminSocialItemController::class, 'edit'])->name('admin_social_item_edit')->middleware('admin:admin');
Route::post('/admin/social-item/update/{id}', [AdminSocialItemController::class, 'update'])->name('admin_social_item_update');
Route::get('/admin/social-item/delete/{id}', [AdminSocialItemController::class, 'delete'])->name('admin_social_item_delete')->middleware('admin:admin');
