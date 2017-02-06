<?php

	$w_routes = array(

		['GET', 		'/home', 			'Users#home', 			'users_home'			],
		['GET|POST', 	'/calendar', 		'Users#calendar', 		'users_calendar'		],
		['GET', 		'/reglement', 			'Users#reglement', 			'users_reglement'],
		['GET', 		'/list_articles', 	'Articles#listArticles', 	'users_list_articles'	],
		['GET', 		'/article/[:id]', 		'Articles#showArticles', 		'users_article'			],
		['GET', 		'/live', 			'Users#live', 			'users_live'			],
		['GET|POST', 	'/contact', 		'Users#contact', 		'users_contact'			],
		['GET', 		'/sign_in', 		'Users#sign_in', 		'users_sign_in'			],
		['GET|POST', 	'/sign_up', 		'Users#sign_up', 		'users_sign_up'			],
		['GET|POST', 	'/log_out', 		'Users#log_out', 		'users_log_out'			],
		['GET', 		'/admin', 			'Admin#admin', 			'admin_admin'			],
		['GET', 		'/admin_article', 	'Admin#article', 		'admin_article'			],
		['GET', 		'/admin_event', 	'Admin#event', 			'admin_event'			],
		['GET|POST', 	'/admin_result', 	'Admin#result', 		'admin_result'			],
		);
