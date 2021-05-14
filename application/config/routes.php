<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// custom routing

// login and registeration
$route['user/register'] = 'user/registerView';
$route['user/login'] = 'user/loginView';
$route['user/forgetPassword'] = 'user/forgetPassword';
$route['user/sendUserEmail'] = 'user/sendUserEmail';

// booking system
$route['booking/equipments'] = 'Booking';
// $route['booking/equipments'] = 'Booking/bookingSystem';
$route['booking/calendar'] = 'Booking/calendar';
$route['booking/requestBooking'] = 'Booking/requestBooking';
$route['booking/generateQuatationDetails'] = 'Booking/generateQuatation';
$route['booking/confirmBooking'] = 'Booking/confirmBooking';
$route['booking/history'] = 'Booking/history';
$route['booking/uploadDocuments/(:any)'] = 'Booking/uploadDocuments/$1';
$route['booking/individualBooking'] = 'Booking/individualBooking';
$route['booking/exportQuoatation'] = 'Booking/exportQuoatation';
$route['booking/reservationUpdate'] = 'Booking/reservationUpdate';

// event routes
$route['events'] = 'Booking/eventsData';

// admin routes 
$route['admin/dashboard'] = 'Admin/dashboard';
$route['admin/sendUserMessage'] = 'Admin/sendUserMessage';
$route['admin/pendingApproval/(:any)'] = 'Admin/pendingApproval/$1';
$route['admin/approvalStatusPage'] = 'Admin/approvalStatusPage';
$route['admin/reportPage'] = 'Admin/reportPage';
$route['admin/logsPage'] = 'Admin/logsPage';
$route['admin/maintainUser'] = 'Admin/maintainUser';
$route['admin/maintainUserSearch'] = 'Admin/maintainUserSearch';
$route['admin/updateUserRole'] = 'Admin/updateUserRole';
$route['admin/reports'] = 'Admin/reportsPage';

// default routing
$route['default_controller'] = 'index/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
