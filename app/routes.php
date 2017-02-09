<?php
	$w_routes = array(


		['GET', 				'/', 															'General#home', 								'users_home'],
		['GET',			 		'/calendar', 											'General#calendar', 						'users_calendar'],

		['GET', 				'/list_articles', 								'General#listArticles', 				'article_list_articles'],
		['GET', 				'/article/[:id]', 								'General#showArticles', 				'article_article'],

		['GET', 				'/reglement', 										'General#reglement', 						'users_reglement'],
		['GET', 				'/access', 												'General#access', 							'users_access'],
		['GET', 				'/live', 													'General#live', 								'users_live'],
		['GET|POST', 		'/contact', 											'Users#contact', 								'users_contact'],
		['GET|POST', 		'/sign_up', 											'Users#sign_up', 								'users_sign_up'],
		['GET|POST', 		'/sign_in', 											'Users#sign_in', 								'users_sign_in'],
		['GET|POST', 		'/log_out', 											'Users#log_out', 								'users_log_out'],

		// ADMIN //
		['GET', 				'/admin', 												'Admin#admin', 									'admin_admin'],
		// ARTICLE //
		['POST', 				'/admin/list_articles',						'General#listArticles',			  	'admin_list_articles'],
		['GET', 				'/admin/add_article', 						'Admin#addArticle', 						'admin_add_article'],
		['GET|POST', 		'/admin_supp_article/[:id]',			'Admin#suppArticle',						'admin_supp_article'],
		['GET|POST', 		'/admin/modif_article/[:id]',			'Admin#modifyArticle',					'admin_modify_article'],

		// EVENT //
		['GET|POST', 		'/admin_list_events',							'Admin#admin_list_events',			'admin_list_events'],
		['GET', 				'admin/add_event', 								'Admin#addEvent', 						  'admin_add_event'],
		['GET', 				'/admin_supp_event/[:id]', 				'Admin#suppEvent', 						  'admin_supp_event'],
		['GET|POST', 		'/admin/modif_event/[:id]',				'Admin#modifyEvent',						'admin_modify_event'],
>>>>>>> refs/remotes/origin/master
	);

