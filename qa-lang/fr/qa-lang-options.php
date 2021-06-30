<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-options.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for all options, as shown in admin center


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

#     Traduction fr par Olivier SEREE (contrib[at]seree.fr) http://*.solu.fr
#     	ajouts pour la 1.7 par Pierre-Yves Aillet (pierreyves.aillet@free.fr)

	return array(
		'allow_anonymous_naming' => 'Autoriser les auteurs anonymes à spécifier leur nom :',
		'allow_change_usernames' => 'Autoriser les utilisateurs avec des messages à changer leur nom d\'utilisateur :',
		'allow_close_own_questions' => 'Autoriser les utilisateurs à fermer leurs propres questions :',
		'allow_close_questions' => 'Autoriser la fermeture manuelles des questions',
		'allow_login_email_only' => 'Seulement identifier par e-mail (pas de pseudo)',
		'allow_multi_answers' => 'Autoriser les réponses multiples par utilisateur',
		'allow_no_category' => 'Autoriser les questions sans catégorie',
		'allow_no_sub_category' => 'Autoriser les questions avec une catégorie mais pas de sous-catégorie',
		'allow_private_messages' => 'Activer la messagerie privée entre utilisateurs',
		'allow_user_walls' => 'Activer les messages sur le mur des profils d\'utilisateurs',
		'allow_self_answer' => 'Autoriser les utilisateurs à répondre à leur propre question',
		'allow_view_q_bots' => 'Autoriser les moteurs de recherche à afficher les pages de question',
		'approve_user_required' => 'Tous les nouveaux utilisateurs doivent être approuvés',
		'avatar_allow_gravatar' => 'Autoriser ^1Gravatar^2 avatars',
		'avatar_allow_upload' => 'Autoriser les utilisateurs à envoyer des avatars',
		'avatar_default_show' => 'Avatar par défaut',
		'avatar_message_list_size' => 'Taille d\'avatar sur les listes de messages',
		'avatar_profile_size' => 'Taille d\'avatar sur la page de profil de l\'utilisateur',
		'avatar_q_list_size' => 'Taille d\'avatar sur les listes de questions',
		'avatar_q_page_a_size' => 'Taille d\'avatar sur les réponses',
		'avatar_q_page_c_size' => 'Taille d\'avatar sur les commentaires',
		'avatar_q_page_q_size' => 'Taille d\'avatar sur les questions',
		'avatar_store_size' => 'Taille maximale de stockage des avatars',
		'avatar_users_size' => 'Taille de l\'avatar en haut la page de l\'utilisateur',
		'block_bad_usernames' => 'Noms interdits - séparer par des espaces ou des virgules :',
		'block_bad_words' => 'Mots censurés - séparés par des espaces ou des virgules',
		'block_ips_write' => 'Adresses IP bloquées - séparé par des espaces ou des virgules',
		'caching_catwidget_time' => 'Cacher le widget des catégories durant :',
		'caching_enabled' => 'Activer le cache :',
		'caching_driver' => 'Driver de cache',
		'caching_filesystem' => 'Fichiers',
		'caching_memcached' => 'Memcached',
		'caching_q_start' => 'Commencer à cacher les questions après :',
		'caching_q_time' => 'Cacher les pages de questions durant :',
		'caching_qlist_time' => 'Cacher les listes de questions durant :',
		'captcha_module' => 'Utiliser le module de captcha',
		'captcha_on_anon_post' => 'Utiliser captcha pour les messages anonymes',
		'captcha_on_feedback' => 'Utiliser captcha sur le formulaire de retour d\'information',
		'captcha_on_register' => 'Utiliser captcha pour l\'enregistrement de l\'utilisateur',
		'captcha_on_reset_password' => 'Utiliser captcha sur le formulaire de réinitialisation de mot de passe',
		'captcha_on_unapproved' => 'Utiliser captcha si l\'utilisateur n\'est pas encore approuvé',
		'captcha_on_unconfirmed' => 'Utiliser captcha si l\'e-mail n\'est pas confirmé',
		'columns_tags' => 'Colonnes à la page Mots clés',
		'columns_users' => 'Colonnes à la page des utilisateurs',
		'comment_on_as' => 'Autoriser les commentaires sur les réponses',
		'comment_on_qs' => 'Autoriser les commentaires sur les questions suivantes',
		'confirm_user_emails' => 'Demande confirmation des e-mails des l\'utilisateurs',
		'confirm_user_required' => 'Tous les nouveaux utilisateurs doivent confirmer leur e-mail',
		'custom_home_content' => 'Page d\'accueil contenu personnalisé - HTML autorisé',
		'custom_home_heading' => 'Page d\'accueil rubrique',
		'default_privacy' => 'Vie privée : Votre adresse de messagerie ne sera pas partagée ou vendue à des tiers.',
		'default_sidebar' => "Bienvenue sur ^, où vous pouvez poser des questions et recevoir des réponses d'autres membres de la communauté.",
		'default_subject' => 'Un message de ^',
		'default_suffix' => 'Q&R',
		'default_terms' => 'J\'accepte les ^ Termes & Conditions et la politique de confidentialité',
		'do_ask_check_qs' => 'Vérifier les questions similaires quand vous posez une question',
		'do_close_on_select' => 'Fermer les questions avec une réponse sélectionnée',
		'do_complete_tags' => 'Afficher les mots clés correspondant en tapant',
		'do_count_q_views' => 'Compter le nombre question vue',
		'do_example_tags' => 'Afficher des exemples de mots clés basés sur question',
		'editor_for_as' => 'Éditeur par défaut pour les réponses',
		'editor_for_cs' => 'Éditeur par défaut pour les commentaires',
		'editor_for_qs' => 'Éditeur par défaut pour les questions',
		'email_privacy' => 'Note de confidentialité pour les adresses e-mail - HTML autorisé',
		'extra_field_active' => 'Champ personnalisé pour demander des renseignements supplémentaires sur le formulaire',
		'extra_field_display_label' => 'Afficher les informations supplémentaires sur les pages de questions avec l\'étiquette',
		'extra_field_display' => 'Afficher les informations supplémentaires sur les pages de questions',
		'feed_for_activity' => 'Flux pour activité récente',
		'feed_for_hot' => 'Flux pour les questions A Voir!',
		'feed_for_qa' => 'Flux de questions et réponses récentes',
		'feed_for_questions' => 'Flux pour les questions récentes',
		'feed_for_search' => 'Flux pour les résultats de recherche',
		'feed_for_tag_qs' => 'Flux pour pour chaque mots clés de questions',
		'feed_for_unanswered' => 'Flux pour les questions sans réponse',
		'feed_full_text' => 'Inclure texte intégral dans les flux',
		'feed_number_items' => 'Longueur maximale du flux',
		'feed_per_category' => 'Flux individuel par catégorie',
		'feedback_email' => 'Adresse e-mail pour les messages admin - n\'est pas montrée aux utilisateurs',
		'feedback_enabled' => 'Fournir une page que les utilisateurs puissent envoyer des retours d\'informations',
		'flagging_hide_after' => 'Masquer automatiquement les messages qui arrivent',
		'flagging_notify_every' => 'Envoyez-moi encore un e-mail après chaque message supplémentaire',
		'flagging_notify_first' => 'Envoyez-moi un e-mail si un message est reçu',
		'flagging_of_posts' => 'Autoriser les messages à être signalés',
		'follow_on_as' => 'Autoriser la création de questions liées à une réponse',
		'from_email' => 'Adresse de l\'expéditeur des messages à partir du site',
		'hot_weight_a_age' => 'Question ayant une nouvelle réponse',
		'hot_weight_answers' => 'Question ayant beaucoup de réponses',
		'hot_weight_q_age' => 'Question récente',
		'hot_weight_views' => 'Question ayant de nombreuses visites',
		'hot_weight_votes' => 'Question ayant de nombreux votes',
		'links_in_new_window' => 'Ouvrir dans une nouvelle fenêtre les URL liées',
		'logo_height' => 'Hauteur du logo',
		'logo_show' => 'Afficher une image de logo dans l\'en-tête de la page',
		'logo_url' => 'URL de logo - absolue ou relative à la racine Q2A',
		'logo_width' => 'Largeur du logo',
		'mailing_body' => 'Corps du texte',
		'mailing_enabled' => 'Activer les envois de masse à tous les utilisateurs',
		'mailing_from_email' => 'De l\'adresse e-mail',
		'mailing_from_name' => 'De (Nom)',
		'mailing_per_minute' => 'Taux de diffusion maximale',
		'mailing_subject' => 'Objet',
		'match_1' => 'Plus étroit',
		'match_2' => 'Étroit',
		'match_3' => 'Défaut',
		'match_4' => 'Large',
		'match_5' => 'Plus large',
		'match_ask_check_qs' => 'Suggérer des question similaires',
		'match_example_tags' => 'Suggérer des exemple de mots clés',
		'match_related_qs' => 'Suggérer des questions liées',
		'max_len_q_title' => 'Longueur maximale du titre de la question',
		'max_num_q_tags' => 'Nombre maximum de mots clés',
		'max_rate_ip_as' => 'Limite d\'ajout de réponses',
		'max_rate_ip_cs' => 'Limite d\'ajout de commentaires',
		'max_rate_ip_flags' => 'Limite de signalement de messages',
		'max_rate_ip_logins' => 'Limite de connexion',
		'max_rate_ip_messages' => 'Limite de messages sur le mur et messages privés',
		'max_rate_ip_qs' => 'Limite de question postée',
		'max_rate_ip_registers' => 'Limite d\'inscription d\'utilisateur',
		'max_rate_ip_uploads' => 'Limite d\'envoi de fichiers',
		'max_rate_ip_votes' => 'Limite de vote',
		'max_rate_user_as' => 'Maximum de réponses par utilisateur par heure',
		'max_rate_user_cs' => 'Maximum de commentaires par utilisateur par heure',
		'max_rate_user_flags' => 'Maximum de signalements par utilisateur par heure',
		'max_rate_user_messages' => 'Maximum de messages privés par utilisateur par heure',
		'max_rate_user_qs' => 'Maximum de questions par utilisateur par heure',
		'max_rate_user_uploads' => 'Maximum d\'envois de fichiers par utilisateur par heure',
		'max_rate_user_votes' => 'Maximum de votes par utilisateur par heure',
		'min_len_a_content' => 'Longueur minimum de la réponse',
		'min_len_c_content' => 'Longueur minimum de commentaire',
		'min_len_q_content' => 'Longueur minimum du corps de la question',
		'min_len_q_title' => 'Longueur minimum du titre de la question',
		'min_num_q_tags' => 'Nombre minimum de mots-clés',
		'minify_html' => 'Minifier le HTML :',
		'moderate_anon_post' => 'Utiliser la modération des postes anonymes',
		'moderate_by_points' => 'Utiliser la modération pour les utilisateurs ayant peu de points',
		'moderate_edited_again' => 'Messages re-modérés après l\'édition',
		'moderate_notify_admin' => 'M\'envoyer un e-mail lorsque le message doit être modéré',
		'moderate_points_limit' => 'Utiliser la modération pour les utilisateurs de moins de',
		'moderate_unapproved' => 'Utiliser la modération si l\'utilisateur n\'est pas encore approuvé',
		'moderate_unconfirmed' => 'Utiliser la modération si l\'e-mail n\'est pas confirmé',
		'moderate_update_time' => 'Date à afficher sur les messages modérés',
		'moderate_users' => 'Activer la modération (approbation) des utilisateurs',
		'neat_urls' => 'Structure de l\'URL',
		'notify_admin_q_post' => 'M\'avertir sur cette adresse e-mail quand une question est postée',
		'notify_users_default' => 'Cochez la case de notification par e-mail par défaut',
		'option_default' => 'Défaut',
		'page_size_activity' => 'Longueur de la page toute l\'activité',
		'page_size_ask_check_qs' => 'Nombre maximum de questions similaires à afficher',
		'page_size_ask_tags' => 'Nombre maximum de mots clés à afficher',
		'page_size_home' => 'Longueur de la page Q&R',
		'page_size_hot_qs' => 'Longueur de la page A Voir!',
		'page_size_pms' => 'Messages privés par page',
		'page_size_q_as' => 'Nombre maximum de réponses par page',
		'page_size_qs' => 'Longueur de la page de question',
		'page_size_related_qs' => 'Nombre maximum de questions liées',
		'page_size_search' => 'Nombre de résultats de recherche par page',
		'page_size_tag_qs' => 'Nombre de questions sur une page de mot clé',
		'page_size_tags' => 'Longeur de la page de mot clé',
		'page_size_una_qs' => 'Longueur de la page sans réponses',
		'page_size_users' => 'Longueur de la page utilisateurs',
		'page_size_wall' => 'Nombre de messages d\'un mur par page',
		'pages_prev_next' => 'Liens pour page précédente/suivante',
		'permit_admins' => 'Administrateurs',
		'permit_all' => 'Tout le monde',
		'permit_approve_users' => 'Approuver les utilisateurs enregistrés',
		'permit_approved' => 'Utilisateurs approuvés seulement',
		'permit_approved_points' => 'Utilisateurs enregistrés avec suffisamment de points',
		'permit_block' => 'Blocage ou déblocage utilisateur ou IP',
		'permit_confirmed' => 'Les utilisateurs enregistrés avec e-mail confirmé',
		'permit_create_admins' => 'Création d\'administrateurs',
		'permit_create_eds_mods' => 'Création rédacteurs et modérateurs',
		'permit_create_experts' => 'Création experts',
		'permit_delete_users' => 'Suppression d\'utilisateurs',
		'permit_editors' => 'Éditeurs, Modérateurs, Admins',
		'permit_experts' => 'Experts , Rédacteurs, Modérateurs, Admins',
		'permit_moderators' => 'Modérateurs et Administrateurs',
		'permit_points_confirmed' => 'Enregistrés & e-mail confirmé & suffisamment de points',
		'permit_points' => 'Utilisateurs enregistrés avec suffisamment de points',
		'permit_see_emails' => 'Afficher les adresses e-mail des utilisateurs',
		'permit_supers' => 'Super Administrateurs',
		'permit_users' => 'Utilisateurs enregistrés',
		'place_full_below_content' => 'Largeur complète - Au-dessus du contenu',
		'place_full_below_footer' => 'Largeur complète - Au-dessus du pied de page',
		'place_full_below_nav' => 'Largeur complète - Au-dessus du menu',
		'place_full_top' => 'Largeur complète - Haut de la page',
		'place_main_below_lists' => 'Zone principale - Au-dessus de la liste',
		'place_main_below_title' => 'Zone principale - Au-dessus du titre',
		'place_main_bottom' => 'Zone principalea - Bas',
		'place_main_top' => 'Zone principale - Haut',
		'place_side_below_categories' => 'Panneau latéral - Au-dessus de categories',
		'place_side_below_sidebar' => 'Panneau latéral - Au-dessus de la boite encadrée',
		'place_side_low' => 'Panneau latéral - Bas',
		'place_side_last' => 'Panneau latéral - Dernier',
		'place_side_top' => 'Panneau latéral - Haut',
		'points_a_selected' => 'Ma réponse est choisie comme la meilleure',
		'points_a_voted_max_gain' => ' Limite de votes \'pour\' sur chaque réponse',
		'points_a_voted_max_loss' => 'Limite de votes \'contre\' sur chaque réponse',
		'points_base' => 'Ajouter pour tous les utilisateurs',
		'points_c_voted_max_gain' => 'Limite de votes \'pour\' sur chaque commentaire',
		'points_c_voted_max_loss' => 'Limite de votes \'contre\' sur chaque commentaire',
		'points_multiple' => 'Multiplier tous les points',
		'points_per_a_voted_down' => 'Quelqu\'un vote contre ma réponse',
		'points_per_a_voted_up' => 'Quelqu\'un vote pour ma réponse',
		'points_per_c_voted_down' => 'Quelqu\'un vote contre mon commentaire',
		'points_per_c_voted_up' => 'Quelqu\'un vote pour mon commentaire',
		'points_per_q_voted_down' => 'Quelqu\'un vote contre ma question',
		'points_per_q_voted_up' => 'Quelqu\'un vote pour ma question',
		'points_post_a' => 'Je propose une réponse',
		'points_post_q' => 'Je pose une question',
		'points_q_voted_max_gain' => 'Limite de votes \'pour\' sur chaque question',
		'points_q_voted_max_loss' => 'Limite de votes \'contre\' sur chaque question',
		'points_select_a' => 'Je sélectionne une réponse comme étant la meilleure',
		'points_vote_down_a' => 'Je vote contre une réponse',
		'points_vote_down_q' => 'Je vote contre une question',
		'points_vote_up_a' => 'Je vote pour une réponse',
		'points_vote_up_q' => 'Je vote pour une question',
		'q_urls_remove_accents' => 'Supprimer les accents de question dans l\'URL',
		'q_urls_title_length' => 'Longueur du titre de la question dans les URL',
		'recalc_hotness_q_view' => 'Recalculer la hype à chaque affichage d\'une page de question :',
		'register_notify_admin' => 'M\'avertir par e-mail quand un nouvel utilisateur s\'enregistre',
		'search_module' => 'Utiliser le module de recherche',
		'show_a_form_immediate' => 'Afficher immédiatement le formulaire de réponse',
		'show_always' => 'Toujours',
		'show_c_reply_buttons' => 'Afficher le bouton de réponse sur les commentaires',
		'show_compact_numbers' => 'Afficher des nombres compacts (ex : 1.3k) :',
		'show_custom_answer' => 'Message personnalisé sur le formulaire de réponse - HTML autorisé',
		'show_custom_ask' => 'Message personnalisé sur formulaire de question - HTML autorisé',
		'show_custom_comment' => 'Message personnalisé sur le formulaire de commentaire - HTML autorisé',
		'show_custom_footer' => 'HTML personnalisé au bas de chaque page',
		'show_custom_header' => 'HTML personnalisé au haut de chaque page',
		'show_custom_home' => 'Contenu personnalisé en page d\'accueil au lieu de Q&R',
		'show_custom_in_head' => 'HTML personnalisé dans la section <head> de chaque page',
		'show_custom_register' => 'Message personnalisé sur le formulaire d\'inscription - HTML autorisé',
		'show_custom_sidebar' => 'HTML personnalisé dans la boîte encadré sur chaque page',
		'show_custom_sidepanel' => 'HTML personnalisé dans le panneau latéral sur chaque page',
		'show_custom_welcome' => 'Message personnalisé dans un e-mail envoyé aux nouveaux utilisateurs enregistrés',
		'show_post_update_meta' => 'Voir les modifications dans les metas du message',
		'show_fewer_cs_count' => 'Si partiellement caché, montrer plus récente',
		'show_fewer_cs_from' => 'Masquer partiellement les commentaires si plus de',
		'show_full_date_days' => 'Afficher la date complète après',
		'show_home_description' => 'Inclure une description <meta> pour la page d\'accueil',
		'show_if_no_as' => 'Si aucune réponse',
		'show_message_history' => 'Stocker et afficher un historique de message privé',
		'show_never' => 'Jamais',
		'show_notice_visitor' => 'Notice en haut pour les visiteurs la première fois - HTML autorisé',
		'show_notice_welcome' => 'Notice en haut pour les nouveaux utilisateurs enregistrés - HTML autorisé',
		'show_register_terms' => 'Termes & Conditions checkbox sur le formulaire d\'enregistrement - HTML autorisé',
		'show_selected_first' => 'Déplacer la réponse sélectionner en haut',
		'show_url_links' => 'Détecter les liens URL dans les messages',
		'show_user_points' => 'Afficher les points à la suite des noms d\'utilisateurs',
		'show_user_titles' => 'Afficher les titres à la suite des noms d\'utilisateurs',
		'show_view_counts' => 'Afficher nombre de vue dans les listes de questions',
		'show_view_count_q_page' => 'Afficher nombre de vue dans les pages de questions',
		'show_when_created' => 'Afficher l\'âge des messages des utilisateurs',
		'site_language' => 'Langue du site',
		'site_maintenance' => 'Mettre le système en maintenance temporaire.',
		'site_text_direction' => 'Direction du texte',
		'site_theme_mobile' => 'Thème pour mobiles',
		'site_theme' => 'Thème du site',
		'site_title' => 'Titre du site Q&R',
		'site_url' => 'URL preférée du site',
		'smtp_active' => 'Envoyer un e-mail via SMTP au lieu de courrier local',
		'smtp_address' => 'Adresse du serveur SMTP',
		'smtp_authenticate' => 'Envoyer SMTP - nom d\'utilisateur et mot de passe',
		'smtp_password' => 'Mot de passe SMTP',
		'smtp_port' => 'Port SMTP',
		'smtp_secure' => 'Connexion sécurisée SMTP',
		'smtp_secure_none' => 'Aucun',
		'smtp_username' => 'Nom d\'utilisateur SMTP',
		'sort_answers_by' => 'Trier les réponses par',
		'sort_time' => 'Date',
		'sort_votes' => 'Votes',
		'suspend_register_users' => 'Suspendre temporairement les nouvelles inscriptions',
		'tag_separator_comma' => 'Utiliser la virgule comme unique séparateur de mot clé',
		'tags_or_categories' => 'Classification de la question',
		'time_approved' => 'Date d\'approbation',
		'time_written' => 'Date d\'écriture',
		'use_microdata' => 'Utiliser les microdata de schema.org :',
		'votes_separated' => 'Afficher séparement votes pour et votes contre',
		'voting_on_as' => 'Autoriser le vote sur les réponses',
		'voting_on_cs' => 'Autoriser le vote sur les commentaires',
		'voting_on_q_page_only' => 'Autoriser le vote uniquement sur la page de la question',
		'voting_on_qs' => 'Autoriser le vote sur les questions',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/