<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/index-seo', 'HomeController@index_seo');
Route::get('/newimg', 'HomeController@newimg');
//Route::get('/{addr}', 'HomeController@get_routes');

Route::get('/about-us.php', 'HomeController@about_us');
Route::get('/about-us0.php', 'HomeController@about_us0');

Route::get('/career0.php', 'HomeController@career0');
Route::get('/career.php', 'HomeController@career');

Route::get('/contact-us.php', 'HomeController@contact_us');

Route::get('/privacy-policy.php', 'HomeController@privacy_policy');
Route::get('/terms-and-conditions.php', 'HomeController@terms_and_conditions');
Route::get('/disclaimer.php', 'HomeController@disclaimer');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog1', 'HomeController@blog1');
Route::post('/blog/search', 'HomeController@blogsearch');
Route::post('blog/Post_comment', 'HomeController@PostComment');
Route::get('/blog/{id}', 'HomeController@blogdetail');
Route::get('/blog/category/{id}', 'HomeController@blogcategory');
Route::get('/blog/tag/{id}', 'HomeController@blogtag');


Route::get('/portfolio/category/{id}', 'HomeController@portfoliocategory');
Route::get('/portfolio.php', 'HomeController@portfolio_1');
Route::get('/portfolio/{slug}', 'HomeController@portfolioSingle');
Route::post('/portfolio/search', 'HomeController@portfoliosearch');

//----------------------
Route::get('/mission-and-vision.php', 'HomeController@mission_and_vision');

/*========================================================================*/
/*||                        SERVICES ROUTES                               */
/*========================================================================*/
// Route::get('/mobile-app-development.php', 'HomeController@mobileAppDevelopment');
Route::get('/mobile-app-development-in-jaipur.php', 'HomeController@mobileAppDevelopmentInJaipur');
Route::get('/web-app-development.php', 'HomeController@webAppDevelopment');
Route::get('/web-development.php', 'HomeController@webDevelopment');
Route::get('/software-development.php', 'HomeController@softwareDevelopment');
Route::get('/website-design.php', 'HomeController@websiteDesign');
Route::get('/services.php', 'HomeController@services');
Route::get('/seo-services.php', 'HomeController@seo_services');
Route::get('/social-media-marketing-services.php', 'HomeController@social_media_marketing_services');
// //----------------------------------
Route::get('/pay-per-click-services.php', 'HomeController@pay_per_click');
Route::get('/app-store-optimization-services.php', 'HomeController@app_store_optimization');
Route::get('/long-tail-seo-keyword.php', 'HomeController@long_tail_seo_keyword');
Route::get('/long-tail-seo-keyword-research.php', 'HomeController@long_tail_seo_keyword');
Route::get('/regular-blog-posts.php', 'HomeController@regular_blog_posts');
Route::get('/competitor-analysis.php', 'HomeController@competitor_analysis');
Route::get('/link-building-services.php', 'HomeController@link_building_service');

 //  New Pages 
Route::get('/website-designing-company-in-alwar.php', 'HomeController@website_designing_company_in_alwar');


Route::get('/web-development-company-in-alwar.php', 'HomeController@web_development_company_in_alwar');
Route::get('/web-development-company-in-jaipur.php', 'HomeController@web_development_company_in_jaipur');
Route::get('/web-development-company-in-delhi.php', 'HomeController@web_development_company_in_delhi');

Route::get('/mobile-app-development-company-in-alwar.php', 'HomeController@mobile_app_development_company_in_alwar');
Route::get('/mobile-app-development-company-in-jaipur.php', 'HomeController@mobile_app_development_company_in_jaipur');
Route::get('/mobile-app-development-company-in-delhi.php', 'HomeController@mobile_app_development_company_in_delhi');

Route::get('/ecommerce-development-company-in-alwar.php', 'HomeController@ecommerce_development_company_in_alwar'); 
Route::get('/ecommerce-development-company-in-jaipur.php', 'HomeController@ecommerce_development_company_in_jaipur'); 
Route::get('/ecommerce-development-company-in-delhi.php', 'HomeController@ecommerce_development_company_in_delhi'); 

Route::get('/ecommerce-website-development-company-in-alwar.php', 'HomeController@ecommerce_website_development_company_in_alwar'); 



Route::get('/ecommerce-website-development-1.php', 'HomeController@ecommerce_website_development_1');
// Route::get('/portfolio-1.php', 'HomeController@portfolio_1');

// Route::get('/android-application-development-company.php', 'HomeController@android_application_development_company');
// Route::get('/ios-app-development-company.php', 'HomeController@ios_app_development_company');
Route::get('/react-native-app-development.php', 'HomeController@react_native_app_development');
// Route::get('/flutter-app-development-company-1.php', 'HomeController@flutter_app_development_company_1');

Route::get('/hire-android-app-developers.php', 'HomeController@hire_android_app_developers');
Route::get('/hire-ios-app-developers.php', 'HomeController@hire_ios_app_developers');
Route::get('/hire-react-native-app-developers.php', 'HomeController@hire_react_native_app_developers');
Route::get('/hire-flutter-app-developers.php', 'HomeController@hire_flutter_app_developers');
Route::get('/hire-reactjs-developers.php', 'HomeController@hire_reactjs_developers');
Route::get('/hire-nodejs-developers.php', 'HomeController@hire_nodejs_developers');
Route::get('/hire-java-developers.php', 'HomeController@hire_java_developers');
Route::get('/hire-php-developers.php', 'HomeController@hire_php_developers');
Route::get('/hire-web-designers.php', 'HomeController@hire_web_designer');
Route::get('/hire-angular-developers.php', 'HomeController@hire_angular_developers');
Route::get('/hire-python-developers.php', 'HomeController@hire_python_developers');


Route::get('/hire-full-stack-developers.php', 'HomeController@hire_full_stack_developers');
Route::get('/hire-web-developers.php', 'HomeController@hire_web_developers');
Route::get('/hire-mean-stack-developers.php', 'HomeController@hire_mean_stack_developers');
Route::get('/hire-mern-stack-developers.php', 'HomeController@hire_mern_tack_developers');
Route::get('/hire-mobile-app-developers.php', 'HomeController@hire_mobile_app_developers');
Route::get('/hire-ui-ux-developers.php', 'HomeController@hire_ui_ux_developers');

Route::get('/hire-dedicated-developers.php', 'HomeController@hire_dedicated_developers');

Route::get('/casestudy.php', 'HomeController@casestudy');
Route::get('/casestudy-1.php', 'HomeController@casestudy_1');
Route::get('/casestudy-2.php', 'HomeController@casestudy_2');
Route::get('/casestudy-3.php', 'HomeController@casestudy_3');
Route::get('/casestudy-4.php', 'HomeController@casestudy_4');
Route::get('/ready-to-move.php', 'HomeController@ready_to_move');

Route::get('/realestate-demo.php', 'HomeController@real_estate_demo');


Route::get('/solution.php', 'HomeController@solution');


Route::get('/solution-1.php', 'HomeController@solution_1');

Route::get('/dating.php', 'HomeController@dating');

Route::get('/solution-list.php', 'HomeController@solution_list');

// Route::get('/grocery-app-development-company.php', 'HomeController@grocery_app_development_company');
// Route::get('/food-delivery-app-development-company.php', 'HomeController@food_delivery_app_development_company');
// Route::get('/healthcare-app-development-company.php', 'HomeController@healthcare_app_development_company');
Route::get('/pharmacy-app-development.php', 'HomeController@pharmacy_app_development');
Route::get('/fashion-app-development.php', 'HomeController@fashion_app_development');
Route::get('/jewellery-app-development.php', 'HomeController@jewellery_app_development');
Route::get('/doctor-on-demand-app-development.php', 'HomeController@doctor_on_demand_app_development');
Route::get('/diet-and-nutrition-app-development.php', 'HomeController@diet_and_nutrition_app_development');
Route::get('/fitness-app-development.php', 'HomeController@fitness_app_development');

Route::get('/hospital-erp-solution.php', 'HomeController@hospital_erp_solution');
Route::get('/b2b-app-development-company.php', 'HomeController@b2b_app_development_company');
Route::get('/b2c-app-development-company.php', 'HomeController@b2c_app_development_company');




//landing page
Route::get('/fantasy-sports-app-development-company.php', 'HomeController@fantasy_sports_app_development_company');
Route::get('/mobile-app-development.php', 'HomeController@mobile_app_development');

Route::get('/landing-ads.php', 'HomeController@landing_ads');
Route::get('/mobile-app-development-company.php', 'HomeController@mobile_app_development_company');

// Route::get('/fantasy-sports-app-development-company-1.php', 'HomeController@fantasy_sports_app_development_company_1');

//pending
Route::get('/digital-marketing-services.php', 'HomeController@digital_marketing_services');
Route::get('/on-page-optimization.php', 'HomeController@on_page_optimization');
Route::get('/brand-awareness.php', 'HomeController@brand_awareness');
Route::get('/biometric-attendance-software.php', 'HomeController@biometric_attendance_software');
Route::get('/digital-marketing-agency-in-jaipur.php', 'HomeController@digital_marketing_agency_in_jaipur');
Route::get('/digital-marketing-agency-in-india.php', function () {
    return redirect('/digital-marketing-services.php');
});
Route::get('/customer-relationship-management-software.php', 'HomeController@CRM_software');
Route::get('/corporate-website-design.php', 'HomeController@corporate_website_design');
Route::get('/api-development.php', 'HomeController@api_development');
Route::get('/gps-tracking-software.php', 'HomeController@gps_tracking_software');
Route::get('/third-party-integration.php', 'HomeController@third_party_integration');
Route::get('/product-reviews.php', 'HomeController@product_review');
Route::get('/lead-generation.php', 'HomeController@lead_generation');
Route::get('/matrimonial-portal-development.php', 'HomeController@matrimonial_portal_development');
Route::get('/news-portal-development.php', 'HomeController@news_portal_development');
Route::get('/property-portal-development.php', 'HomeController@property_portal_development');
Route::get('/financial-portal-development.php', 'HomeController@financial_portal_development');
Route::get('/education-portal-development.php', 'HomeController@education_portal_development');
Route::get('/opencart-website-development.php', 'HomeController@opencart_website_development');
Route::get('/wordpress-website-development.php', 'HomeController@wordpress_website_development');
Route::get('/static-website-designing.php', 'HomeController@static_website_designing');
Route::get('/dynamic-website-designing.php', 'HomeController@dynamic_website_designing');
Route::get('/parallax-web-designing.php', 'HomeController@parallax_web_designing');
Route::get('/website-redesigning.php', 'HomeController@website_redesigning');
Route::get('/responsive-web-designing.php', 'HomeController@responsive_web_designing');
Route::get('/ecommerce-website-design-services.php', 'HomeController@ecommerce_website_design_services');
Route::get('/local-business-listing-services.php', 'HomeController@local_business_listing_services');
Route::get('/online-reputation-management.php', 'HomeController@online_reputation_management');
Route::get('/paid-advertising.php', 'HomeController@paid_advertising');
Route::get('/user-engagement.php', 'HomeController@user_engagement');
Route::get('/custom-software-development.php', 'HomeController@custom_software_development');
Route::get('/custom-erp-development.php', 'HomeController@custom_erp_development');
Route::get('/woocommerce-website-development.php', 'HomeController@woocommerce_website_development');
Route::get('/industrial-erp-development.php', 'HomeController@industrial_erp_development');
Route::get('/mlm-software-development-company.php', 'HomeController@mlm_software_development_company');
Route::get('/mlm-software-development-company-new.php', 'HomeController@mlm_software_development_company_new');
Route::get('/material-management.php', 'HomeController@material_management');
Route::get('/financial-management.php', 'HomeController@financial_management');
Route::get('/college-management-software.php', 'HomeController@college_management_software');
Route::get('/institute-management-software.php', 'HomeController@institute_management_software');
Route::get('/credit-cooperative-society-software.php', 'HomeController@credit_cooperative_society_software');
Route::get('/nidhi-company-software.php', 'HomeController@nidhi_company_software');
Route::get('/nbfc-software.php', 'HomeController@nbfc_software');
Route::get('/online-exam-management-software.php', 'HomeController@online_exam_management_software');
Route::get('/real-estate-management-software.php', 'HomeController@real_estate_management_software');
Route::get('/hospital-management-software.php', 'HomeController@hospital_management_software');
Route::get('/hospital-management-software-new.php', 'HomeController@hospital_management_software_new');
Route::get('/hotel-management-software.php', 'HomeController@hotel_management_software');
Route::get('/vehicle-rental-software.php', 'HomeController@vehicle_rental_software');
Route::get('/gym-management-software.php', 'HomeController@gym_management_software');
//=============19-08-2021====================

Route::get('/web-development-in-jaipur.php', 'HomeController@webDevelopmentInJaipur');
Route::get('/ecommerce-website-development.php', 'HomeController@ecommerce_website_development');
Route::get('/ecommerce-website-development-in-jaipur.php', 'HomeController@ecommerce_website_development_in_jaipur');
Route::get('/healthcare-app-development.php', 'HomeController@healthcare_app_development');
Route::get('/grocery-app-development.php', 'HomeController@grocery_app_development');
Route::get('/taxi-app-development-company.php', 'HomeController@taxi_app_development_company');
Route::get('/web-portal-development.php', 'HomeController@web_portal_development');
Route::get('/cms-development.php', 'HomeController@cms_development');
Route::get('/php-web-development.php', 'HomeController@php_web_development');
Route::get('/payment-gateway-integration.php', 'HomeController@payment_gateway_integration');
Route::get('/ecommerce-solutions.php', 'HomeController@ecommerce_solutions');
Route::get('/android-application-development.php', 'HomeController@android_application_development');
Route::get('/ios-app-development.php', 'HomeController@ios_app_development');
Route::get('/ionic-app-development.php', 'HomeController@ionic_app_development');
Route::get('/payroll-management-software.php', 'HomeController@payroll_management_software');
Route::get('/inventory-management-software.php', 'HomeController@inventory_management_software');
Route::get('/institute-website-design.php', 'HomeController@institute_website_design');
Route::get('/elearning-app-development.php', 'HomeController@elearning_app_development');
Route::get('/fantasy-stock-market-app-development.php', 'HomeController@fantasy_stock_market_app_development');
Route::get('/fantasy-sports-app-development.php', 'HomeController@fantasy_sports_app_development');
Route::get('/fantasy-cricket-app-development.php', 'HomeController@fantasy_cricket_app_development');
Route::get('/fantasy-football-app-development.php', 'HomeController@fantasy_football_app_development');
Route::get('/fantasy-movie-app-development.php', 'HomeController@fantasy_movie_app_development');
Route::get('/testimonials.php', 'HomeController@testimonials');
Route::get('/online-exam-app-development.php', 'HomeController@online_exam_app_development');
Route::get('/website-development-company-alwar.php', 'HomeController@website_development_company_alwar');
Route::get('/school-website-design.php', 'HomeController@school_website_design');
Route::get('/school-management-software.php', 'HomeController@school_management_software');
Route::get('/college-website-design.php', 'HomeController@college_website_design');
Route::get('/rfid-attendance-system-india.php', 'HomeController@rfid_attendance_system_india');
Route::get('/offshore-web-development-india.php', 'HomeController@offshore_web_development_india');
Route::get('/nidhi-company-software-kerala.php', 'HomeController@nidhi_company_software_kerala');
Route::get('/food-delivery-app-development.php', 'HomeController@food_delivery_app_development');
Route::get('/ui-ux-design-services.php', 'HomeController@ui_ux_design_services');
Route::get('/psd-to-html-conversion.php', 'HomeController@psd_to_html_conversion');
Route::get('/psd-to-wordpress-conversion.php', 'HomeController@psd_to_wordpress_conversion');
Route::get('/mobile-app-marketing-services.php', 'HomeController@mobile_app_marketing');
Route::get('/thankyou.php', 'HomeController@thankyou');
Route::get('/request-a-quote.php', 'HomeController@request_a_quote');
Route::post('/quote_action', 'HomeController@quote_action');
Route::post('/career_action', 'HomeController@career_action');
Route::get('/case-study', 'HomeController@case_study');
Route::get('/fantasy-kabaddi-app-development-1.php', 'HomeController@fantasy_kabaddi_app_development_1');
Route::get('/case-study-detail', 'HomeController@case_study_detail');
Route::post('/contact_action', 'HomeController@contact_action');
Route::post('/digitalform_action', 'HomeController@digitalform_action');
Route::get('/hotel-management-software.php', 'HomeController@hotel_management_software');
Route::get('/flutter-app-development.php', 'HomeController@flutter_app_development');



Route::get('/sitemap.html', 'HomeController@sitemap');
Route::get('/sitemap.xml', 'SitemapsController@sitemap');

Route::view('/404.php', 'errors.404');

// Route::get('/digital-marketing-agency-in-india.php', function () {
//     return redirect('/mvp-');
// });


Route::get('/mvp-development', function () {
    return view('mvp-development.index');
});

Route::get('/native-app-development', function () {
    return view('native-app-development.index');
});

Route::get('/cross-platform-app-development', function () {
    return view('cross-platform-app-development.index');
});

Route::get('/school-management-software-new', function () {
    return view('school-management-software-new.index');
});
