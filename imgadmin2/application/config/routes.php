<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
 

 /*==user url===*/

$route['blog/add_blogcategory'] = 'Blog/add_blogcategory';
$route['blog/view_blogcategory'] = 'Blog/view_blogcategory';
$route['blog/edit_blogcategory/(:any)'] = 'Blog/edit_blogcategory/$1';
$route['blog/delete_blogcategory/(:any)'] = 'Blog/delete_blogcategory/$1';

$route['portfolio/add_portfoliocategory'] = 'Portfolio/add_portfoliocategory';
$route['portfolio/view_portfoliocategory'] = 'Portfolio/view_portfoliocategory';
$route['portfolio/edit_portfoliocategory/(:any)'] = 'Portfolio/edit_portfoliocategory/$1';
$route['portfolio/delete_portfoliocategory/(:any)'] = 'Portfolio/delete_portfoliocategory/$1';

$route['blog/author/add_blog_author'] = 'Blog/addBlogAuthor';
$route['blog/author/update_blog_author/(:any)'] = 'Blog/updateAuthor/$1';
$route['blog/author/view_blog_author'] = 'Blog/ViewBlogAuthor';
$route['blog/add_blogtag'] = 'Blog/add_blogtag';
$route['blog/view_blogtag'] = 'Blog/view_blogtag';
$route['blog/edit_blogtag/(:any)'] = 'Blog/edit_blogtag/$1';
$route['blog/delete_blogtag/(:any)'] = 'Blog/delete_blogtag/$1';

$route['blog/add_imagelink'] = 'Blog/add_imagelink';
$route['blog/view_imagelink'] = 'Blog/view_imagelink';
$route['blog/delete_imagelink/(:any)'] = 'Blog/delete_imagelink/$1';

$route['blog/view_blogcomment'] = 'Blog/view_blogcomment';
$route['blog/view_commentdetail/(:any)'] = 'Blog/view_commentdetail/$1';
$route['blog/delete_blogcomment/(:any)'] = 'Blog/delete_blogcomment/$1';

$route['blog/add_blog'] = 'Blog/add_blog';
$route['blog/view_blog'] = 'Blog/view_blog';
$route['blog/edit_blog/(:any)'] = 'Blog/edit_blog/$1';
$route['blog/delete_blog/(:any)'] = 'Blog/delete_blog/$1';

$route['slider/add_slider'] = 'Slider/add_slider';
$route['slider/view_slider'] = 'Slider/view_slider';
$route['slider/edit_slider/(:any)'] = 'Slider/edit_slider/$1';
$route['slider/delete_slider/(:any)'] = 'Slider/delete_slider/$1';

$route['webtype/add_webtype'] = 'Webtype/add_webtype';
$route['webtype/view_webtype'] = 'Webtype/view_webtype';
$route['webtype/edit_webtype/(:any)'] = 'Webtype/edit_webtype/$1';
$route['webtype/delete_webtype/(:any)'] = 'Webtype/delete_webtype/$1';

$route['technology/add_technology'] = 'Technology/add_technology';
$route['technology/view_technology'] = 'Technology/view_technology';
$route['technology/edit_technology/(:any)'] = 'Technology/edit_technology/$1';
$route['technology/delete_technology/(:any)'] = 'Technology/delete_technology/$1';

$route['portfolio/add_portfolio'] = 'Portfolio/add_portfolio';
$route['portfolio/view_portfolio'] = 'Portfolio/view_portfolio';
$route['portfolio/edit_portfolio/(:any)'] = 'Portfolio/edit_portfolio/$1';
$route['portfolio/delete_portfolio/(:any)'] = 'Portfolio/delete_portfolio/$1';

$route['testimonial/add_testimonial'] = 'Testimonial/add_testimonial';
$route['testimonial/view_testimonial'] = 'Testimonial/view_testimonial';
$route['testimonial/edit_testimonial/(:any)'] = 'Testimonial/edit_testimonial/$1';
$route['testimonial/delete_testimonial/(:any)'] = 'Testimonial/delete_testimonial/$1';

$route['tagcloud/add_tagcloud'] = 'Tagcloud/add_tagcloud';
$route['tagcloud/view_tagcloud'] = 'Tagcloud/view_tagcloud';
$route['tagcloud/edit_tagcloud/(:any)'] = 'Tagcloud/edit_tagcloud/$1';
$route['tagcloud/delete_tagcloud/(:any)'] = 'Tagcloud/delete_tagcloud/$1';

$route['currentopening/addcurrentopening'] = 'CurrentOpening/addcurrentopening';
$route['currentopening/viewcurrentopening'] = 'CurrentOpening/viewcurrentopening';
$route['currentopening/editcurrentopening/(:any)'] = 'CurrentOpening/editcurrentopening/$1';
$route['currentopening/deletecurrentopening/(:any)'] = 'CurrentOpening/deletecurrentopening/$1';


$route['leads/add_leads'] = 'Leads/add_leads';
$route['leads/view_leads'] = 'Leads/view_leads';
$route['leads/view_all_reject'] = 'Leads/viewAllReject';
$route['leads/view_all_upcoming_leads'] = 'Leads/viewAllUpcoming';
$route['leads/view_all_approved'] = 'Leads/viewAllApprove';
$route['leads/viewleadspage/(:any)'] = 'Leads/viewleadspage/$1';

$route['Fantasybox/fantasy_contacts'] = 'Fantasybox/fantasyContacts';

$route['sitemap/add_sitemap'] = 'Sitemap/add_sitemap';
$route['sitemap/view_sitemap'] = 'Sitemap/view_sitemap';
$route['sitemap/edit_sitemap/(:any)'] = 'Sitemap/edit_sitemap/$1';
$route['sitemap/delete_sitemap/(:any)'] = 'Sitemap/delete_sitemap/$1';

$route['adminemail/add_adminemail'] = 'AdminEmail/add_adminemail';
$route['adminemail/view_adminemail'] = 'AdminEmail/view_adminemail';
$route['adminemail/edit_adminemail/(:any)'] = 'AdminEmail/edit_adminemail/$1';
$route['adminemail/delete_adminemail/(:any)'] = 'AdminEmail/delete_adminemail/$1';

$route['team/add_team'] = 'Team/add_team';
$route['team/view_team'] = 'Team/view_team';
$route['team/edit_team/(:any)'] = 'Team/edit_team/$1';
$route['team/delete_team/(:any)'] = 'Team/delete_team/$1';

$route['footer/add_footerurl'] = 'footer/add_footerurl';
$route['footer/view_footerurl'] = 'footer/view_footerurl';
$route['footer/edit_footerurl/(:any)'] = 'footer/edit_footerurl/$1';
$route['footer/delete_footerurl/(:any)'] = 'footer/delete_footerurl/$1';

$route['footer/add_footer'] = 'footer/add_footer';
$route['footer/view_footer'] = 'footer/view_footer';
$route['footer/edit_footer/(:any)'] = 'footer/edit_footer/$1';
$route['footer/delete_footer/(:any)'] = 'footer/delete_footer/$1';

$route['footer/add_socialmedia'] = 'footer/add_socialmedia';
$route['footer/view_socialmedia'] = 'footer/view_socialmedia';
$route['footer/edit_socialmedia/(:any)'] = 'footer/edit_socialmedia/$1';
$route['footer/delete_socialmedia/(:any)'] = 'footer/delete_socialmedia/$1';

//start  Admin site URL

$route['admin'] = 'Login';  
$route['dashboard'] = 'Home';  
$route['change_username'] = 'Login/changeusername'; 
$route['change-password'] = 'Login/changepassword'; 
$route['logout'] = 'Login/logout'; 


//end  Admin site URL

