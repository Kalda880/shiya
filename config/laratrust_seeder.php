<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'designs'          => 'c,r,u,d',
            'category'         => 'c,r,u,d',
            'tag'              => 'c,r,u,d',
            'ticket'           => 'c,r,u,d',
            'coupon'           => 'c,r,u,d',
            'skill'            => 'c,r,u,d',
            'designer'         => 'c,r,u,d',
            'customer'         => 'c,r,u,d',
            'settings'         => 'c,r,u,d',
            'reports'          => 'c,r,u,d',
            'marketing'        => 'c,r,u,d',
            'admin'            => 'c,r,u,d',
        ],

    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
