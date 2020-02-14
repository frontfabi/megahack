<?php

// default route
$routes['get']['']                   = 'Welcome';

$routes['get']['test']               = 'Test/twitter';

// project routes
//      user 
$routes['get']['user/:id']           = 'UserController/getUser';
$routes['post']['user']              = 'UserController/addNewUser';

//      message
$routes['get']['message/:id']        = 'MessageController/getMessage';
$routes['get']['message/user/:id']   = 'MessageController/getUserMessages';
$routes['post']['message']           = 'MessageController/sendNewMessage';

