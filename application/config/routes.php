<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'news' => [
		'controller' => 'main',
		'action' => 'news',
	],
	'main/news/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'news',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	'books' => [
		'controller' => 'main',
		'action' => 'books',
	],
	'book/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'book',
	],
    'main/books/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'books',
    ],
	'citys' => [
		'controller' => 'main',
		'action' => 'citys',
	],
	'city/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'city',
	],
    'main/citys/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'citys',
    ],
	'mutants' => [
		'controller' => 'main',
		'action' => 'mutants',
	],
	'mutant/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'mutant',
	],
    'main/mutants/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'mutants',
    ],
	'weapons' => [
		'controller' => 'main',
		'action' => 'weapons',
	],
	'weapon/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'weapon',
	],
    'main/weapons/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'weapons',
    ],
	'games' => [
		'controller' => 'main',
		'action' => 'games',
	],
	'game/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'game',
	],
    'main/games/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'games',
    ],
    
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/addd' => [
		'controller' => 'admin',
		'action' => 'addd',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
    'admin/addbook' => [
		'controller' => 'admin',
		'action' => 'addbook',
	],
    'admin/editbook/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editbook',
	],
    'admin/books' => [
		'controller' => 'admin',
		'action' => 'books',
	],
    'admin/deletebook/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deletebook',
	],
    'admin/books/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'books',
	],
    'admin/addmutant' => [
		'controller' => 'admin',
		'action' => 'addmutant',
	],
    'admin/editmutant/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editmutant',
	],
    'admin/mutants' => [
		'controller' => 'admin',
		'action' => 'mutants',
	],
    'admin/deletemutant/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deletemutant',
	],
    'admin/mutants/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'mutants',
	],
    'admin/addcity' => [
		'controller' => 'admin',
		'action' => 'addcity',
	],
    'admin/editcity/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editcity',
	],
    'admin/citys' => [
		'controller' => 'admin',
		'action' => 'citys',
	],
    'admin/deletecity/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deletecity',
	],
    'admin/citys/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'citys',
	],
    'admin/addweapon' => [
		'controller' => 'admin',
		'action' => 'addweapon',
	],
    'admin/editweapon/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editweapon',
	],
    'admin/weapons' => [
		'controller' => 'admin',
		'action' => 'weapons',
	],
    'admin/deleteweapon/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deleteweapon',
	],
    'admin/weapons/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'weapons',
	],
    'admin/addgame' => [
		'controller' => 'admin',
		'action' => 'addgame',
	],
    'admin/editgame/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'editgame',
	],
    'admin/games' => [
		'controller' => 'admin',
		'action' => 'games',
	],
    'admin/deletegame/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'deletegame',
	],
    'admin/games/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'games',
	],
];