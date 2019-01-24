<?php
$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        'admin:admin' => array(
            'uid' => 'admin',
            'full name' => 'Admin User',
            'email' => 'admin@th3.com',
        ),
        'admin1:admin1' => array(
            'uid' => 'admin1',
            'full name' => 'Admin User 1',
            'email' => 'admin1@th3.com',
        ),
        'user1:user1' => array(
            'uid' => 'user1',
            'full name' => 'User 1',
            'email' => 'user1@th3.com',
        ),
        'user2:user2' => array(
            'uid' => 'user2',
            'full name' => 'User 2',
            'email' => 'user2@th3.com',
        ),
    ),
);
