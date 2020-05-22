<?php
$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        'admin:admin' => array(
            'Username' => 'admin',
            'Full Name' => 'Admin User',
            'Email' => 'admin@th3.com',
        ),
        'admin1:admin1' => array(
            'Username' => 'admin1',
            'Full Name' => 'Admin User 1',
            'Email' => 'admin1@th3.com',
        ),
        'user1:user1' => array(
            'Username' => 'user1',
            'Full Name' => 'User 1',
            'Email' => 'user1@th3.com',
        ),
        'user2:user2' => array(
            'Username' => 'user2',
            'Full Name' => 'User 2',
            'Email' => 'user2@th3.com',
        ),
    ),
);
