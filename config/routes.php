<?php

return[
    ''=>'site/index',
    'about'=>'site/about',
    'contact'=> 'site/contact',
    'service'=>'site/service',
    'project'=>'site/project',
    'team'=>'site/team',
    'testimonial'=>'site/testimonial',
    'feature'=>'site/feature',
    'error'=>'site/error',

    // admin routes
    'admin'=>'admin/default/index',
    'admin/login'=>'admin/default/login',
    'admin/signup'=>'admin/default/signup',
    'admin/logout'=>'admin/default/logout',

    'admin/project' => 'admin/project/index',
    'admin/project/view/<id:\d+>' => 'admin/project/view',
    'admin/project/create' => 'admin/project/create',
    'admin/project/update/<id:\d+>' => 'admin/project/update',
    'admin/project/delete/<id:\d+>' => 'admin/project/delete',

    'admin/contact' => 'admin/contact/index',
    'admin/contact/view/<id:\d+>' => 'admin/contact/view',
    'admin/contact/create' => 'admin/contact/create',
    'admin/contact/update/<id:\d+>' => 'admin/contact/update',
    'admin/contact/delete/<id:\d+>' => 'admin/contact/delete',


    'admin/team' => 'admin/team/index',
    'admin/team/view/<id:\d+>' => 'admin/team/view',
    'admin/team/create' => 'admin/team/create',
    'admin/team/update/<id:\d+>' => 'admin/team/update',
    'admin/team/delete/<id:\d+>' => 'admin/team/delete',

    'admin/service' => 'admin/service/index',
    'admin/service/view/<id:\d+>' => 'admin/service/view',
    'admin/service/create' => 'admin/service/create',
    'admin/service/update/<id:\d+>' => 'admin/service/update',
    'admin/service/delete/<id:\d+>' => 'admin/service/delete',
]

?>