<?php
	$w_routes = array(

		['GET', 				'/', 											'General#home', 							'users_home'],
		['GET',			 		'/calendar', 									'General#calendar', 						'users_calendar'],

		['GET', 				'/list_articles', 								'Articles#listArticles', 					'article_list_articles'],
		['GET', 				'/article/[:id]', 								'Articles#showArticles', 					'article_article'],

		['GET', 				'/reglement', 									'General#reglement', 						'users_reglement'],
		['GET', 				'/access', 										'General#access', 							'users_access'],
		['GET', 				'/live', 										'General#live', 							'users_live'],

		['GET', 				'/contact', 									'General#contact', 							'users_contact'],
		['POST', 				'/', 											'Users#traitementContact', 					'traitementContact'],

		['GET|POST', 			'/sign_up', 									'Users#sign_up', 							'users_sign_up'],
		['GET|POST', 			'/sign_in', 									'Users#sign_in', 							'users_sign_in'],
		['GET|POST', 			'/log_out', 									'General#log_out', 							'users_log_out'],
		['GET|POST', 			'/inscription_event/[:id]', 					'Users#inscription_event', 					'users_inscription_event'],

		// ADMIN //
		['GET', 				'/admin', 										'Admin#admin', 								'admin_admin'],

		// ARTICLE //
		['POST', 				'/admin/list_articles',							'Articles#listArticles',			  		'admin_list_articles'],
		['POST', 				'/admin/add_article', 							'Articles#addArticle', 						'admin_add'],
		['GET|POST', 			'/admin_supp_article/[:id]',					'Articles#suppArticle',						'admin_supp_article'],
		['GET|POST', 			'/admin/modif_article/[:id]',					'Articles#modifyArticle',					'admin_modify_article'],

		// EVENT //
		['GET|POST', 			'/admin_list_events',							'Events#admin_list_events',					'admin_list_events'],
		['GET|POST', 			'/admin/add_event', 							'Events#addEvent', 						  	'admin_add_event'],
		['GET', 				'/admin_supp_event/[:id]', 						'Events#suppEvent', 						'admin_supp_event'],
		['GET|POST', 			'/admin/modif_event/[:id]',						'Events#modifyEvent',						'admin_modify_event'],
		['GET|POST', 			'/event/[:id]',									'Events#showEvent',							'event_event'],
		['GET',                 '/admin_supp_event/[:id]',                      'Events#suppEvent',                        'event_supp_event'],
		['GET',                 '/admin_update_event/[:id]',                      'Events#updateEvent',                        'event_update_event'],
	);
