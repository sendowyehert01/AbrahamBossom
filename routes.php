<?php 

$router->get('/', 'index.php');

$router->get('/admin', 'admin/index.php')->only('admin');

$router->get('/admin/services', 'admin/services/index.php')->only('admin');
$router->get('/admin/service', 'admin/services/show.php')->only('admin');
$router->delete('/admin/service', 'admin/services/destroy.php')->only('admin');
$router->get('/admin/services/create', 'admin/services/create.php')->only('admin');
$router->post('/admin/services/store', 'admin/services/store.php')->only('admin');
$router->get('/admin/services/edit', 'admin/services/edit.php')->only('admin');
$router->patch('/admin/services/update', 'admin/services/update.php')->only('admin');

$router->get('/services', 'services.php');
$router->get('/payment', 'payment.php')->only('auth');
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

?>  