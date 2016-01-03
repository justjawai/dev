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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
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
$route['default_controller'] = 'Main_Controller';
$route['category'] = 'Main_Controller/category';
$route['category/add'] = 'Main_Controller/categoryAdd';
$route['category/edit/(:num)'] = 'Main_Controller/categoryAdd';

$route['news'] = 'Main_Controller/news';
$route['news_add'] = 'Main_Controller/newsAdd';
$route['news_edit/(:num)'] = 'Main_Controller/newsAdd';

$route['news_tag'] = 'Main_Controller/news_tag';
$route['news_tag/add'] = 'Main_Controller/news_tagAdd';
$route['news_tag/edit/(:num)'] = 'Main_Controller/news_tagAdd';




$route['customer'] = 'Main_Controller/customer';
$route['customer_add'] = 'Main_Controller/customerAdd';
$route['customer_edit/(:num)'] = 'Main_Controller/customerAdd';


$route['page/(:any)'] = 'Main_Controller/pageAdd';




$route['404_override'] = '';
$route['custom_404'] = 'Main_Controller/set404';
$route['translate_uri_dashes'] = FALSE;


//ajax route
//category route
$route['loadCategory'] = 'Ajax_Controller/loadCategory';
$route['category/categoryAddProcess'] = 'Ajax_Controller/categoryAddProcess';
$route['category/edit/categoryAddProcess'] = 'Ajax_Controller/categoryAddProcess';
$route['deleteCategory'] = 'Ajax_Controller/deleteCategory';


$route['loadNewsTag'] = 'Ajax_Controller/loadNewsTag';
$route['newsTagAddProcess'] = 'Ajax_Controller/newsTagAddProcess';
$route['category/edit/categoryAddProcess'] = 'Ajax_Controller/categoryAddProcess';
$route['deleteCategory'] = 'Ajax_Controller/deleteCategory';

//news route
$route['loadNews'] = 'Ajax_Controller/loadNews';
$route['newsAddProcess'] = 'Ajax_Controller/newsAddProcess';
$route['news_edit/newsAddProcess'] = 'Ajax_Controller/newsAddProcess';

$route['loadCustomer'] = 'Ajax_Controller/loadCustomers';
$route['customerAddProcess'] = 'Ajax_Controller/customerAddProcess';
$route['customerDelete'] = 'Ajax_Controller/customerDelete';

$route['pageAddProcess'] = 'Ajax_Controller/pageAddProcess';





//upload route
$route['upload'] = 'Main_Controller/upload';









