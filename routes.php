<?php 

$router->get('/', 'index.php');

$router->get('/services-offer', 'services/index.php');
$router->get('/service-offer', 'services/show.php');
$router->delete('/service-offer', 'services/destroy.php');
$router->get('/services-offer/create', 'services/create.php');
$router->post('/services-offer/store', 'services/store.php');
$router->get('/services-offer/edit', 'services/edit.php');
$router->patch('/services-offer', 'services/update.php');

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