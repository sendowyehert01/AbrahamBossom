<?php 

$router->get('/', 'index.php');

// $router->get('/notes', 'notes/index.php')->only('auth');
// $router->get('/note', 'notes/show.php');
// $router->delete('/note', 'notes/destroy.php');


$router->get('/apartment-typelots', 'apartment-typelots.php');
$router->get('/lawnlots', 'lawnlots.php');
$router->get('/familystates', 'familystates.php');
$router->get('/interment', 'interment.php');
$router->get('/cremation', 'cremation.php');
$router->get('/payment', 'payment.php');
$router->get('/location', 'location.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');



// $router->get('/notes/create', 'notes/create.php');
// $router->post('/notes/store', 'notes/store.php');\
// $router->get('/notes/edit', 'notes/edit.php');
// $router->patch('/notes', 'notes/update.php');

$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');
$router->get('/otp', 'registration/otp.php');
$router->post('/otp', 'registration/otpstore.php');
$router->get('/multiform', 'registration/multiform.php');
$router->post('/multiform', 'registration/multistore.php');


$router->get('/login', 'sessions/create.php');
$router->post('/sessions', 'sessions/store.php');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');

?>  