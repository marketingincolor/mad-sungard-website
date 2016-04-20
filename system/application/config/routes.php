<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

//$route['default_controller'] = "welcome";
$route['default_controller'] = "search";
//$route['default_controller'] = "locator";
$route['scaffolding_trigger'] = "";
//$route['search'] = "search";
$route['sun-gard-window-film-faq'] = "search/faq";
$route['archictectural-window-film'] = "search/flat";
$route['automotive-window-film'] = "search/auto";
$route['auto-tint-simulator'] = "search/simulator";
$route['about-sun-gard-window-film'] = "search/about";
$route['why-use-window-film'] = "search/why";
$route['where-to-buy'] = "search/where";
$route['terms-conditions'] = "search/terms";
//$route['faq'] = "search/faq";
//$route['arch'] = "search/flat";
//$route['auto'] = "search/auto";
//$route['about'] = "search/about";
//$route['why'] = "search/why";
$route['search/lookup'] = "search/lookup";
$route['search/findstate/(:any)'] = "search/findstate/$1";
$route['search/findclient/(:any)'] = "search/findclient/$1";
$route['dashboard'] = "welcome/dashboard";

$route['support'] = "welcome/redirection";
//$route['support'] = "welcome/support"; ********* CUTOFF DATE: 7/2/14
$route['promotions'] = "welcome/promotions";
$route['management'] = "welcome/management";
$route['feedback'] = "welcome/feedback";

$route['signup'] = "welcome/redirection";
//$route['signup'] = "welcome"; ********* CUTOFF DATE: 7/2/14
//$route['signup'] = "signup";
//$route['signup/urlhelp'] = "signup/urlhelp";
//$route['signup/eula'] = "signup/eula";
//$route['signup/photo'] = "signup/photo";
//$route['signup/submit/(:any)'] = "signup/submit/$1";

//$route['signup/formsubmit'] = "signup/formsubmit";
$route['processing'] = "processing";
$route['processing/success'] = "processing/success";
$route['processing/error'] = "processing/error";
$route['upload'] = "upload";
//$route['upload/do_upload'] = "upload/do_upload";
$route['upload/do_upload/(:any)'] = "upload/do_upload/$1";
$route['upload/check_domain/(:any)'] = "upload/check_domain/$1";
$route['upload/(:any)'] = "upload/pre_upload/$1";


//$route['locator'] = "locator";
$route['locator/lookupc'] = "locator/lookupc";
$route['locator/lookupr'] = "locator/lookupr";
$route['us'] = "locator/us";
$route['ca'] = "locator/ca";

$route['us/(:any)/(:any)'] = "locator/city_us/$1/$2";
$route['ca/(:any)/(:any)'] = "locator/city_ca/$1/$2";
$route['us/(:any)'] = "locator/region_us/$1";
$route['ca/(:any)'] = "locator/region_ca/$1";

//$route['us/(:any)'] = "directory/search_us/$1";
//$route['ca/(:any)'] = "directory/search_ca/$1";

$route['(^.+)'] = "welcome/redirection";
//$route['(^.+)'] = "installers/installer/$1"; ********* CUTOFF DATE: 7/2/14
//$route['([A-Za-z\s]+)'] = "installers/installer/$1";
//$route[':any'] = "installer/lookup";

/* End of file routes.php */
/* Location: ./system/application/config/routes.php */