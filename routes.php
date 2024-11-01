<?php 

$router->get('/', 'index.php');

$router->get('/admin', 'admin/index.php')->only('admin');

// SERVICES ROUTES -----------------------------------------------------------------------
$router->get('/admin/services', 'admin/services/index.php')->only('admin');
$router->get('/admin/service', 'admin/services/show.php')->only('admin');
$router->delete('/admin/service', 'admin/services/destroy.php')->only('admin');
$router->get('/admin/services/create', 'admin/services/create.php')->only('admin');
$router->post('/admin/services/store', 'admin/services/store.php')->only('admin');
$router->get('/admin/services/upload', 'admin/services/uploadpage.php')->only('admin');
$router->get('/admin/services/edit', 'admin/services/edit.php')->only('admin');
$router->patch('/admin/services/update', 'admin/services/update.php')->only('admin');
$router->post('/admin/services/upload', 'admin/services/upload.php')->only('admin');
// STAFFS ROUTES -------------------------------------------------------------------------
$router->get('/admin/staffs', 'admin/staffs/index.php')->only('admin');
$router->get('/admin/staff', 'admin/staffs/show.php')->only('admin');
$router->delete('/admin/staff', 'admin/staffs/destroy.php')->only('admin');
$router->get('/admin/staffs/create', 'admin/staffs/create.php')->only('admin');
$router->post('/admin/staffs/store', 'admin/staffs/store.php')->only('admin');
$router->get('/admin/staffs/edit', 'admin/staffs/edit.php')->only('admin');
$router->patch('/admin/staffs/update', 'admin/staffs/update.php')->only('admin');
// CUSTOMERS ROUTES -------------------------------------------------------------------------
$router->get('/admin/customers', 'admin/customers/index.php')->only('admin');
$router->get('/admin/customer', 'admin/customers/show.php')->only('admin');
$router->delete('/admin/customer', 'admin/customers/destroy.php')->only('admin');
$router->get('/admin/customers/create', 'admin/customers/create.php')->only('admin');
$router->post('/admin/customers/store', 'admin/customers/store.php')->only('admin');
$router->get('/admin/customers/edit', 'admin/customers/edit.php')->only('admin');
$router->patch('/admin/customers/update', 'admin/customers/update.php')->only('admin');
// INQUIRIES ROUTES -------------------------------------------------------------------------
$router->get('/admin/inquiries', 'admin/inquiries/index.php')->only('admin');
$router->get('/admin/inquiry', 'admin/inquiries/show.php')->only('admin');
$router->delete('/admin/inquiry', 'admin/inquiries/destroy.php')->only('admin');
$router->get('/admin/inquiries/create', 'admin/inquiries/create.php')->only('admin');
$router->post('/admin/inquiries/store', 'admin/inquiries/store.php');
$router->get('/admin/inquiries/edit', 'admin/inquiries/edit.php')->only('admin');
$router->patch('/admin/inquiries/update', 'admin/inquiries/update.php')->only('admin');

// PAYMENT FORM for SERVICES ------------------------------------------------------------
$router->get('/services', 'services.php');
$router->get('/buyer', 'buyer.php')->only('auth');
$router->post('/buyer', 'buyerStore.php');
$router->get('/buyer1', 'buyer1.php')->only('auth');
$router->get('/payment', 'payment.php')->only('auth');
$router->post('/payment', 'paymentStore.php');
$router->get('/location', 'location.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');
$router->get('/otp', 'registration/otp.php')->only('otp');;
$router->post('/otp', 'registration/otpstore.php')->only('otp');;
$router->get('/multiform', 'registration/multiform.php');
$router->post('/multiform', 'registration/multistore.php');
$router->get('/login', 'sessions/create.php');
$router->post('/sessions', 'sessions/store.php');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');
$router->get('/user-profile', 'sessions/show.php')->only('auth');


$router->get('/forgot', 'forgot/create.php');
$router->post('/forgot', 'forgot/store.php');
$router->get('/forgot_otp', 'forgot/otp.php')->only('otp');
$router->post('/forgot_otp', 'forgot/otpstore.php')->only('otp');
$router->get('/forgot_multiform', 'forgot/multiform.php');
$router->post('/forgot_multiform', 'forgot/multistore.php');


$router->post('/mark-as-unread', 'notifications/markAsUnread.php')->only('auth');
$router->post('/soft-delete', 'notifications/softDelete.php')->only('auth');
$router->get('/notification-count', 'notifications/notificationCount.php')->only('auth');


?>  