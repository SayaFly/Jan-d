<?php
use Cosmic\App\Config;

$GLOBALS['language'] = array (
    'website' => array (
        /*     App/View/base.html     */
        'base' => array(
            'nav_home'              => 'Home',

            'nav_community'         => 'Community',
            'nav_news'              => 'Neuigkeiten',
            'nav_jobs'              => 'Jobs',
            'nav_photos'            => 'Fotos',
            'nav_rarevalue'         => 'Rarewert',
            'nav_staff'             => 'Staff',
            'nav_team'              => 'Team',
            'nav_exchange'          => 'Markplatz',

            'nav_shop'              => 'Shop',
            'nav_buy_points'        => Config::site['shortname'] . ' Shop',
            'nav_buy_club'          => 'Kaufe ' . Config::site['shortname'] . ' Club',
            'nav_purchasehistory'   => 'Bezahlungsverlauf',
            'nav_changename'        => 'Ändere ' . Config::site['shortname'] . 'name',
            'nav_drawyourbadge'     => 'Badge Creator',
          
            'nav_highscores'        => 'Top User',

            'nav_forum'             => 'Meine Gruppen',

            'nav_helptool'          => 'Hilfe Tool',
            'nav_helptickets'       => 'Hilfe Tickets',

            'nav_housekeeping'      => 'Adminpanel',

            'close'                 => 'Schliessen',
            'cookies'               => 'Verwendet eigene Cookies und Cookies von Drittanbietern, um einen besseren Service zu bieten, und stellt außerdem sicher, dass die Werbung Ihren Präferenzen besser entspricht. Wenn Sie unsere Website nutzen, stimmen Sie unserer Cookie-Richtlinie zu.',
            'read_more'             => 'Lese mehr',
            'thanks_for_playing'    => 'Danke fürs Spielen',
            'made_with_love'        => 'gemacht mit Liebe',
            'credits'               => 'Danke an Raizer and Metus',
            'and_all'               => 'und andere',

            'login_name'            => 'name',
            'login_password'        => 'Password',
            'login_save_data'       => 'Merke mich',
            'login_lost_password'   => 'Passwort vergessen?',

            'report_message'        => 'Melde diese Nachricht',
            'report_certainty'      => 'Sie sind dabei, diese Nachricht zu melden. Möchten Sie diese Nachricht wirklich melden?',
            'report_inappropriate'  => 'Ja, das ist unangebracht!',

            'user_to'               => 'Ins',
            'user_profile'          => 'Mein Profil',
            'user_settings'         => 'Einstellungen',
            'user_logout'           => 'Ausloggen',

            'header_slogan'         => 'Virtuelle Welt für junge Leute!',
            'header_slogan2'        => 'Treten Sie unserer Community bei und finden Sie neue Freunde',
            'header_login'          => 'Login',
            'header_register'       => 'Kostenlos Anmelden!',
            'header_to'             => 'Ins',

            'footer_helptool'       => 'Hilfe Ticket',
            'footer_rules'          => '' . Config::site['shortname'] . ' Regelwerk',
            'footer_terms'          => 'Geschäftsbedingungen',
            'footer_privacy'        => 'Privacy declaration',
            'footer_cookies'        => 'Cookie-Richtlinie',
            'footer_guide'          => 'Leitfaden für Eltern'
        ),

        /*     public/assets/js/web     */
        'javascript' => array(
            'web_customforms_markedfields'                  => 'Alle mit einem * gekennzeichneten Felder sind Pflichtfelder.',
            'web_customforms_loadingform'                   => 'Laden von...',
            'web_customforms_next'                          => 'Weiter',
            'web_customforms_close'                         => 'Schliesen',
            'web_customforms_participation'                 => 'Danke für Ihre Teilnahme!',
            'web_customforms_sent'                          => 'Ihre Antworten wurden gesendet und werden von der Person analysiert, die dieses Formular erstellt.',
            'web_customforms_answer'                        => 'Deine Antwort',

            'web_dialog_cancel'                             => 'Abbrechen',
            'web_dialog_validate'                           => 'Bestätigen',
            'web_dialog_confirm'                            => 'Bestätigen Sie Ihre Auswahl',

            'web_forum_first'                               => 'Erste',
            'web_forum_previous'                            => 'Vorherige',
            'web_forum_last'                                => 'Letzte',
            'web_forum_next'                                => 'Nächste',

            'web_hotel_backto'                              => 'Zurück zu ' . Config::site['shortname'] . ' Hotel',

            'web_fill_pincode'                              => 'Geben Sie den PIN-Code ein, den Sie beim Erstellen der zusätzlichen Sicherheit für Ihr Konto angegeben haben. Na, das habe ich vergessen? Dann kontaktieren Sie uns über die ' . Config::site['shortname'] . ' Help Tool',
            'web_twostep'                                   => 'Zwei-Schritte Authentifizierung',
            'web_login'                                     => 'Sie müssen eingeloggt sein, um diese Nachricht zu melden!',
            'web_loggedout'                                 => 'Ausgeloggt :(',

            'web_notifications_success'                     => 'Erfolgrecih!',
            'web_notifications_error'                       => 'Fehler!',
            'web_notifications_info'                        => 'Information!',

            'web_page_article_login'                        => 'Sie müssen angemeldet sein, um einen Kommentar zu schreiben!',

            'web_page_community_photos_login'               => 'Sie müssen angemeldet sein, um Fotos zu mögen!',
            'web_page_community_photos_loggedout'           => 'Logged out :(',

            'web_page_forum_change'                         => 'Wechsel',
            'web_page_forum_cancel'                         => 'Abbrechen',
            'web_page_forum_oops'                           => 'Oops...',
            'web_page_forum_topic_closed'                   => 'Dieses Thema ist geschlossen und Sie können nicht mehr antworten.',
            'web_page_forum_login_toreact'                  => 'Um antworten zu können, müssen Sie eingeloggt sein!',
            'web_page_forum_login_tolike'                   => 'Sie müssen angemeldet sein, um diesen Beitrag zu liken!',
            'web_page_forum_loggedout'                      => 'Ausloggen :(',

            'web_page_profile_login'                        => 'Sie müssen angemeldet sein, um Fotos zu mögen!',
            'web_page_profile_loggedout'                    => 'Ausgeloggt :(',

            'web_page_settings_namechange_request'          => 'Anfragen',
            'web_page_settings_namechange_not_available'    => 'Nicht verfügbare',
            'web_page_settings_namechange_choose_name'      => 'Wähle ' . Config::site['shortname'] . 'name',

            'web_page_settings_verification_oops'           => 'Oops...',
            'web_page_settings_verification_fill_password'  => 'Geben Sie Ihr Passwort ein!',
            'web_page_settings_verification_2fa_on'         => 'Die Google-Authentifizierung ist derzeit für Ihr Konto eingerichtet. Um eine andere Verifizierungsmethode zu verwenden, müssen Sie zuerst Ihre alte Verifizierung entfernen!',
            'web_page_settings_verification_2fa_secretkey'  => 'Haben Sie den QR-Code mit Ihrem Handy gescannt? Geben Sie dann den geheimen Schlüssel ein, um Ihr Konto zu bestätigen!',
            'web_page_settings_verification_2fa_authcode'   => 'Authentifizierungs Code',
            'web_page_settings_verification_pincode_on'     => 'Sie haben derzeit einen PIN-Code für Ihr Konto festgelegt. Um eine andere Verifizierungsmethode zu verwenden, müssen Sie zuerst Ihre alte Verifizierung entfernen!',
            'web_page_settings_verification_2fa_off'        => 'Um die Google-Authentifizierung zu deaktivieren, bitten wir Sie, den Geheimcode vom Generator einzugeben.',
            'web_page_settings_verification_pincode_off'    => 'Um die PIN-Authentifizierung zu deaktivieren, bitten wir Sie, Ihren PIN-Code einzugeben.',
            'web_page_settings_verification_pincode'        => 'Pincode',
            'web_page_settings_verification_switch'         => 'Wählen Sie die Umschalttaste, um eine Authentifizierungsmethode zu aktivieren!',

            'web_page_shop_offers_neosurf_name'             => 'Neosurf',
            'web_page_shop_offers_neosurf_description'      => 'Zahlen Sie bequem mit Paypal und Ihre GOTW-Punkte werden sofort aufgeladen.',
            'web_page_shop_offers_neosurf_dialog'           => 'Geben Sie unten Ihre Paypal-E-Mail-Adresse ein, um fortzufahren.',
            'web_page_shop_offers_paypal_name'              => 'Paypal',
            'web_page_shop_offers_paypal_description'       => 'Zahlen Sie bequem mit Paypal und Ihre GOTW-Punkte werden sofort aufgeladen.',
            'web_page_shop_offers_paypal_dialog'            => 'Geben Sie unten Ihre Paypal-E-Mail-Adresse ein, um fortzufahren.',
            'web_page_shop_offers_sms_name'                 => 'SMS',
            'web_page_shop_offers_sms_description'          => 'Sende Code per SMS beenden und einen GOTW-Punkte-Code erhaltene.',
            'web_page_shop_offers_sms_dialog'               => 'Senden Sie den unten stehenden Code in einer SMS, um einen GOTW-Punktecode zu erhalten.',
            'web_page_shop_offers_audiotel_name'            => 'Audiotel',
            'web_page_shop_offers_audiotel_description'     => 'Rufen Sie eine Nummer einmal oder mehrmals an, um einen GOTW-Punktecode zu erhalten.',
            'web_page_shop_offers_audiotel_dialog'          => 'Rufen Sie die untenstehende Nummer an, um einen GOTW-Punktecode zu erhalten.',
            'web_page_shop_offers_pay_with'                 => 'Bezahle mit',
            'web_page_shop_offers_points_for'               => 'GOTW-Punkte für',
            'web_page_shop_offers_get_code'                 => 'Holen Sie sich einen GOTW-Punktecode',
            'web_page_shop_offers_fill_code'                => 'Geben Sie Ihren GOTW-Punktecode ein',
            'web_page_shop_offers_fill_code_desc'           => 'Geben Sie unten Ihren GOTW-Punktecode ein, um Ihre GOTW-Punkte zu erhalten.',
            'web_page_shop_offers_submit'                   => 'Eingeben',
            'web_page_shop_offers_success'                  => 'Kauf war erfolgreich!',
            'web_page_shop_offers_received'                 => 'Danke für Ihren Einkauf. Du hast',
            'web_page_shop_offers_received2'                => 'GOTW-Punkte.',
            'web_page_shop_offers_close'                    => 'Schliesen',
            'web_page_shop_offers_failed'                   => 'Da ist beim Kauf ein Fehler passiert!',
            'web_page_shop_offers_failed_desc'              => 'Der Kauf ist fehlgeschlagen. Versuchen Sie es erneut oder kontaktieren Sie uns über das Hilfetool.',
            'web_page_shop_offers_back'                     => 'Zurück',
            'web_page_shop_offers_no_card'                  => 'Wenn Sie keine Prepaid-Karte von Neosurf haben, können Sie die sehen',
            'web_page_shop_offers_no_card2'                 => 'Verkaufsstellen',
            'web_page_shop_offers_to'                       => 'zu',
            'web_page_shop_offers_buy_code'                 => 'Zugangscode kaufen',
            'web_page_hotel_loading'                        => 'ist gerade am laden...',
            'web_page_hotel_sometinhg_wrong_1'              => 'Hoppla, da stimmt etwas nicht!.',
            'web_page_hotel_sometinhg_wrong_2'              => 'Seite neuladen',
            'web_page_hotel_sometinhg_wrong_3'              => 'Oder erstellen Sie ein Ticket im Hilfetool',
            'web_page_hotel_welcome_at'                     => 'Willkommen bei',
            'web_page_hotel_soon'                           => 'Holen Sie sich einen Drink, wir sind bald da...',
            'web_hotel_active_flash_1'                      => 'Du bist fast drin ' . Config::site['shortname'] .'!',
            'web_hotel_active_flash_2'                      => 'Drücke hier',
            'web_hotel_active_flash_3'                      => 'und klicken Sie auf der linken Seite auf "Flash zulassen", um Flash zu aktivieren.',
            
        ),

        /*     App/View/Community     */
        'article' => array (
            'reactions'                 => 'Kommentare',
            'reactions_empty'           => 'Es gibt noch keine Kommentare.',
            'reactions_fill'            => 'Schreiben Sie ihre Nachricht hier...',
            'reactions_post'            => 'Post',
            'latest_news'               => 'Latest news',
            'reaction_hidden_yes'       => 'Nachrichten kommentare unsichtbar gemacht!',
            'reaction_hidden_no'        => 'Nachrichten kommentare sichtbar gemacht!',
            'forbidden_words'           => 'Ihre Nachricht enthält verbotene Wörter!',
        ),
        'forum' => array (
          /*  Forum/index.html  */
            'index_subject'             => 'Thema',
            'index_topics'              => 'Themen',
            'index_latest_topic'        => 'Neuestes Thema',
            'index_empty'               => 'Keine Themen',
            'index_latest_activities'   => 'Neueste Aktivitäten',
            'index_by'                  => 'von',

          /*  Forum/category.html  */
            'category_new_topic'        => 'Neues Thema',
            'category_back'             => 'Zurück',
            'category_topics'           => 'Themen',
            'category_posts'            => 'Posts',
            'category_latest_reacts'    => 'Neueste Reaktionen',
            'category_topic_by'         => 'von',
            'category_no_reacts'        => 'Keine Reaktion',
            'category_latest_react_by'  => 'Letzte Reaktion von',
            'category_create_topic'     => 'Neues Thema erstellen',
            'category_subject'          => 'Thema',
            'category_description'      => 'Beschreibung',
            'category_create_button'    => 'Thema erstellen',
            'category_or'               => 'oder',
            'category_cancel'           => 'Abbrechen',

          /*  Forum/topic.html  */
            'topic_react'               => 'Reagieren',
            'topic_close'               => 'Schliesen',
            'topic_reopen'              => 'Wieder öffnen',
            'topic_since'               => 'Seit:',
            'topic_posts'               => 'Posts:',
            'topic_topic'               => 'Thema:',
            'topic_reaction'            => 'Reagieren:',
            'topic_closed'              => 'Passt auf! Dieses Thema ist geschlossen, sind Sie anderer Meinung? Dann kontaktieren Sie uns über die',
            'topic_helptool'            => 'Hilfe-Ticket',
            'topic_and'                 => 'und',
            'topic_likes_1'             => 'andere wie diese!',
            'topic_likes_2'             => 'gefällt das!',
            'topic_likes_3'             => 'so was!'
        ),

        /*     App/View/Community     */
        'community_photos' => array (
            'by'          => 'von',
            'photos_by'   => 'Bilder von',
            'photos_desc' => 'Sehen Sie sich die neuesten Bilder an, die von aufgenommen wurden',
            'load_more'   => 'Weitere Fotos anzeigen'
        ),
		'community_rares' => array (
		'desc'        => ' Wertvollste Möbel',
		'last_clickhere' => 'Klicke hier!',
		'last_edited'   => 'Zuletzt bearbeitet: ',
		'last_editor'   => 'Letzter Bearbeiter: ',
		'last_rares'   => 'Letzen 10 veröffentlichte Rare',
		'none_rare_found_desc'   => 'Vielleicht suchen Sie',
		'none_rare_found_last'   => 'Letzte 10 Rare',
		'none_rare_found_title'   => 'Ich konnte auf dieser Seite keine Raritäten finden',
		'pages_notfound'   => 'Keine Seite verfügbar',
        'rares_pages'   => 'Seiten',
		'search'   => 'Suche',
		'title'       => Config::site['shortname'] . ' Rare',
        'units'   => 'Einheiten'
            
			
        ),
        'community_staff' => array (
            'title'       => 'Wie werde ich Mitarbeiter bei ' . Config::site['shortname'] . ' ?',
            'desc'        => 'Unsere Mitarbeiter sind hier, um Ihnen zu helfen und Sie in diesem Hotel zu führen!',
            'content_1'   => 'Natürlich träumt jeder davon, Mitarbeiter bei zu sein ' . Config::site['shortname'] . ' , aber das ist leider nicht jedermanns Sache. Mitarbeiter werden bei ' . Config::site['shortname'] . '  you must apply.',
            'content_2'   => 'Dies ist nur zu Zeiten möglich, in denen wir freie Stellen haben, wenn wir diese haben, wird dies in den Nachrichten erwähnt.'
        ),
        'community_value' => array (
            'title_header'      => 'Marktplatz für Kataloge',
            'decs_header'       => 'Alle exklusiven Möbel mit einem höheren Wert als dem Typ \'Credits\' können Sie hier kaufen!',
            'furni_name'        => 'Möbelname',
            'furni_type'        => 'Typ',
            'furni_costs'       => 'Jetzt',
            'furni_amount'      => 'Im Spiel',
            'furni_value'       => 'Alter Preis',
            'furni_rate'        => 'Rate',
            'looking_for'       => 'Ich suche...',
            'seller'            => 'Verkäufer',
            'price'             => 'Preis',
            'nav_my'            => 'Mein Markplatz',
            'nav_shop'          => 'Marktplatz',
            'nav_catalogue'     => 'Katalog',
            'marketplace_desc'  => 'Verkäufer von ' . Config::site['shortname'] . ' Hotel bieten hier ihre Sachen an, die Sie mit Ihren Währungen bezahlen können. Vielleicht finden Sie hier exklusive Artikel, die Sie normalerweise nicht in unserem Katalog kaufen können!'
        ),
        /*     App/View/Games     */
        'games_ranking' => array (
            'username' => 'name'
        ),

        /*     App/View/Help     */
        'help' => array (
          /*  Help/help.html  */
            'help_title'                => 'FAQ',
            'help_label'                => 'Finden Sie hier alle Antworten auf Ihre Fragen!',
            'help_other_questions'      => 'Andere Fragen',
            'help_content_1'            => 'Haben Sie die Antwort auf Ihre Frage nicht gefunden? Zögern Sie nicht, unseren Kundenservice zu kontaktieren, damit wir Ihnen weitere Informationen geben können.',
            'help_contact'              => 'Kontakt',
            'title'                     => 'Hilfe Tool',
            'desc'                      => 'Hier können Sie nach Antworten auf Ihre Fragen suchen. Wenn Sie die Antwort auf Ihre Frage nicht finden können, senden Sie eine Anfrage.',

          /*  Help/request.html  */
            'request_closed'            => 'GEESCHLOSSEN',
            'request_on'                => 'An:',
            'request_ticket_amount'     => 'Anzahl Tickets:',
            'request_react_on'          => 'Reagiere weiter:',
            'request_react'             => 'Reagieren',
            'request_description'       => 'Beschreibung',
            'request_react_on_ticket'   => 'Auf Ticket reagieren',
            'request_contact'           => 'Kontaktiere ' . Config::site['shortname'],
            'request_contact_help'      => 'Sie können uns kontaktieren, indem Sie ein neues Ticket eröffnen.',
            'request_new_ticket'        => 'Neues Ticket',
            'request_subject'           => 'Thema',
            'request_type'              => 'Typ',
            'request_status'            => 'Ticket geöffnet',
            'request_in_treatment'      => 'In Behandlung',
            'request_open'              => 'Öffnen',
            'request_closed'            => 'Schliesen'
        ),
        'help_new' => array (
            'title'         => 'Mein Ticket',
            'subject'       => 'Thema',
            'description'   => 'Beschreibung',
            'open_ticket'   => 'Öffnen Sie ein Ticket'
        ),

        /*     App/View/Home     */
        'home' => array (
            'to'                      => 'Zu',
            'friends_online'          => 'Online Freunde',
            'now_in'                  => 'Jetzt in',
            'latest_news'             => 'Neuesten Nachrichten',
            'latest_facts'            => 'Die neuesten Fakten im Inneren ' . Config::site['shortname'] . '!',
            'popular_rooms'           => 'Beliebteste Räume',
            'popular_rooms_label'     => 'Erfahren Sie, welche Räume im Trend liegen in '. Config::site['shortname'] . '!',
            'popular_no_rooms'        => 'Es ist niemand in unserem Hotel!!',
            'goto_room'               => 'Gehe zum Raum',
            'popular_groups'          => 'Beliebte Gruppen',
            'popular_groups_label'    => 'Wem möchtest du beitreten?',
            'popular_no_groups'       => 'Es wurden noch keine Gruppen erstellt!',
            'load_news'               => 'Weitere Neuigkeiten laden',
            'user_of_the_week'        =>  Config::site['shortname'] . ' der Woche',
            'user_of_the_week_label'  => 'Spieler der Woche'
        ),
        'lost' => array (
            'page_not_found'          => 'Seite nicht gefunden!',
            'page_content_1'          => 'Entschuldigung, die Seite, die Sie suchen, existiert nicht.',
            'page_content_2'          => 'Überprüfen Sie erneut, ob Sie die richtige URL haben. Wenn Sie wieder hierher kommen (Willkommen zurück!). Gehen Sie dann mit der Schaltfläche \'Zurück\' dorthin zurück, wo Sie hergekommen sind.',
            'sidebar_title'           => 'Vielleicht haben Sie gesucht...',
            'sidebar_stats'           => 'Das Haus eines Ihrer Freunde?',
            'sidebar_stats_label_1'   => 'Vielleicht ist er/sie bei der',
            'sidebar_stats_label_2'   => 'Highscores',
            'sidebar_rooms'           => 'Beliebtesten Räume?',
            'sidebar_rooms_label_1'   => 'Durchsuchen Sie die',
            'sidebar_rooms_label_2'   => 'Navigator',
            'sidebar_else'            => 'Ich habe meine Hausschuhe verloren!',
            'sidebar_else_label'      => 'Dann musst du wirklich besser suchen! :-)'
        ),
        'profile' => array (
            'overlay_search'        => 'Nach wem suchst du?',
            'since'                 => 'seit',
            'currently'             => 'Zur Zeit',
            'never_online'          => 'Noch nicht online',
            'last_visit'            => 'Letzter Besucher',
            'guestbook_title'       => 'Gästebuch',
            'guestbook_label'       => 'Hinterlässt du etwas?',
            'guestbook_input'       => 'Was machst du,',
            'guestbook_input_1'     => 'Was willst du',
            'guestbook_input_2'     => 'wissen?',
            'guestbook_load_more'   => 'Lade weitere Nachrichten',
            'badges_title'          => 'Badges',
            'badges_label'          => 'Zufällige Abzeichen, die ich tragen kann',
            'badges_empty'          => 'Hat noch keine Abzeichen gesetzt',
            'friends_title'         => 'Freunde',
            'friends_label'         => 'Zufällige Freunde aus meiner Liste',
            'friends_empty'         => 'Hat noch keine Freunde gefunden',
            'groups_title'          => 'Gruppen',
            'groups_label'          => 'Sehen Sie, was ich liebe!',
            'groups_empty'          => 'Ist noch keiner Gruppe beigetreten',
            'rooms_title'           => 'Räume',
            'rooms_label'           => 'Meine zuletzt erstellten Räume',
            'rooms_empty'           => 'Hat noch keine Räume erstellt',
            'photos_title'          => 'Fotos',
            'photos_label'          => 'Machst du ein Foto mit mir?',
            'photos_empty'          => 'Hat noch keine Fotos gemacht',
            'title'                 => 'Profil'
        ),
        'registration' => array (
            'title'                 => 'Geben Sie Ihre Informationen ein!',
            'email'                 => 'E-mail Address',
            'email_fill'            => 'Geben Sie hier Ihre E-Mail-Adresse ein...',
            'email_help'            => 'Wir benötigen diese Informationen, um Ihr Konto wiederherzustellen, falls Sie den Zugriff verlieren.',
            'password'              => 'Passwort',
            'password_fill'         => 'Passwort...',
            'password_repeat'       => 'Passwort wiederholen',
            'password_repeat_fill'  => 'Passwort wiederholen...',
            'password_help_1'       => 'Ihr Passwort muss mindestens 6 Zeichen lang sein und Buchstaben und Zahlen enthalten.',
            'password_help_2'       => 'Stellen Sie sicher, dass Ihr Passwort anders ist als auf anderen Websites!',
            'birthdate'             => 'Geburtsdatum',
            'day'                   => 'Tag',
            'month'                 => 'Monat',
            'year'                  => 'Jahr',
            'birthdate_help'        => 'Wir benötigen diese Informationen, um Ihr Konto wiederherzustellen, falls Sie den Zugriff verlieren.',
            'found'                 => 'Wie hast du das ' . Config::site['shortname'] . ' Hotel gefunden?',
            'found_choose'          => 'Wähle aus.',
            'found_choose_1'        => 'Google',
            'found_choose_2'        => 'Über einen Freund',
            'found_choose_3'        => 'Über ein anderes Spiel',
            'found_choose_4'        => 'Über Facebook',
            'found_choose_5'        => 'Anderes',
            'create_user'           => 'Erstelle dein ' . Config::site['shortname'] . '!',
            'username'              =>  Config::site['shortname'] . 'name',
            'username_fill'         =>  Config::site['shortname'] . 'name...',
            'username_help'         => 'Ihr eindeutiger Name in ' . Config::site['shortname'] . ' Hotel.',
            'sex'                   => 'Geschlecht',
            'male'                  => 'Männlich',
            'female'                => 'Weiblich',
            'register'              => 'Registrieren',
            'header_slogan2'        => 'Treten Sie unserer Community bei und finden Sie neue Freunde'
        ),

        /*     App/View/Jobs     */
        'apply' => array (
            'title'               => 'Reagieren Sie auf die Rechnung',
            'content_1'           => 'Vielen Dank für Ihr Interesse an ' . Config::site['shortname'] . ' Hotel und für die Beantwortung der Stellenausschreibung.',
            'content_2'           => 'Versuchen Sie, den Fragebogen so genau wie möglich zu beantworten.',
            'description'         => 'Job Beschreibung',
            'question_name'       => 'Wie lautet dein Name?',
            'question_age'        => 'Wie Alt bist du?',
            'question_why'        => 'Warum denkst du, dass du geeignet sein könntest?',
            'question_time'       => 'Wie viele Stunden bist du online?',
            'question_time_help'  => 'Sagen Sie uns, wie viele Stunden Sie täglich online verbringen ' . Config::site['shortname'] . ' Hotel.',
            'monday'              => 'Montag',
            'tuesday'             => 'Dienstag',
            'wednesday'           => 'Mittwoch',
            'thursday'            => 'Donnerstag',
            'friday'              => 'Freitag',
            'saturday'            => 'Samstag',
            'sunday'              => 'Sonntag',
            'time_to_time'        => 'Von X bis Y Uhr',
            'send'                => 'Senden Sie meine Bewerbung'
        ),
        'jobs' => array (
            'title'                   => 'Liste der Stellenangebotes',
            'applications'            => 'Meine Anwendungen',
            'available_applications'  => 'Verfügbare Stellen',
            'buildteam'               => 'Bauteam',
            'buildteam_desc'          => 'Sie sind für den Bau verantwortlich (event/official) Räume.',
            'react'                   => 'Bewerben'
        ),

        /*     App/View/Password     */
        'password_claim' => array (
            'title'                 => 'Passwort vergessen?',
            'content_1'             => 'Geben Sie Ihr ' . Config::site['shortname'] . 'Name und E-Mail-Adresse und wir senden Ihnen per E-Mail einen Link zum Ändern Ihres Passworts.',
            'content_2'             => 'Tun Sie dies nicht, wenn Sie jemand dazu auffordert!',
            'username'              =>  Config::site['shortname'] . 'name',
            'email'                 => 'E-mail Address',
            'send'                  => 'Sende E-mail',
            'wrong_page'            => 'Falscher Alarm!',
            'wrong_page_content_1'  => 'Wenn Sie sich an Ihr Passwort erinnern - oder versehentlich hier gelandet sind - können Sie über den unten stehenden Link zur Startseite zurückkehren.',
            'back_to_home'          => 'Zurück zur Seite'
        ),
        'password_reset' => array (
            'title'                     => 'Ändere Passwort',
            'new_password'              => 'Neues Passwort',
            'new_password_fill'         => 'Gib dein neues Passwort ein...',
            'new_password_repeat_fill'  => 'Bitte geben Sie Ihr Passwort erneut ein...',
            'change_password'           => 'Passwort ändern'
        ),

        /*     App/View/Settings     */
        'settings_panel' => array (
            'preferences'    => 'Meine Einstellungen',
            'password'       => 'Ändere Passwort',
            'verification'   => 'Überprüfung festlegen',
            'email'          => 'Ändere E-Mail Adresse',
            'namechange'     => 'Ändere ' . Config::site['shortname'] . 'name',
            'shop_history'   => 'Kaufverlauf'
        ),
        'settings_email' => array (
            'title'           => 'Ändern Sie die E-Mail',
            'email_title'     => 'E-Mail Address',
            'email_label'     => 'Ihre E-Mail-Adresse wird benötigt, um Ihr Konto wiederherzustellen, falls Sie den Zugriff verlieren.',
            'password_title'  => 'Aktuelles Passwort',
            'fill_password'   => 'Gib dein aktuelles Passwort ein...',
            'save'            => 'Speichern'
        ),
        'settings_namechange' => array (
            'title'           => 'Ändere ' . Config::site['shortname'] . 'name',
            'help_1'          => 'Willst du wirklich dein ' . Config::site['shortname'] . 'name ändern? Dies kann kosten',
            'help_2'          => 'und wird sofort nach Ihrer Anfrage abgebucht. Sobald Ihr Name geändert wurde, können wir ihn nicht mehr rückgängig machen! Denken Sie also gut über Ihre Entscheidung nach!',
            'fill_username'   =>  Config::site['shortname'] . 'name...',
            'request'         => 'Anfragen'
        ),
        'settings_password' => array (
            'title'                     => 'Ändere Passwort',
            'password_title'            => 'Aktuelles Passwort',
            'fill_password'             => 'Gib dein aktuelles Passwort ein...',
            'newpassword_title'         => 'Neues Passwort',
            'fill_newpassword'          => 'Gib dein neues Passwort ein...',
            'fill_newpassword_repeat'   => 'Wiederhole dein neues Passwort...',
            'help'                      => 'Ihr Passwort muss mindestens 6 Zeichen lang sein und Buchstaben und Zahlen enthaltens.',
            'save'                      => 'Speichern'
        ),
        'settings_preferences' => array (
            'title'               => 'Meine Einstellung',
            'follow_title'        => 'Follow-Funktion - Wer kann dir folgen?' ,
            'follow_label'        => 'Ich will nicht das ' . Config::site['shortname'] . '\'s mir zu folgen können',
            'friends_title'       => 'Freundschaftanfragen',
            'friends_label'       => 'Erlaube Freundschaftsanfragen?',
            'room_title'          => 'Raum Einladungen',
            'room_label'          => 'Ich möchte nicht zu Räumen eingeladen werden',
            'hotelalerts_title'   => 'Hotel Alert',
            'hotelalerts_label'   => 'Ich möchte keine Hotel Alerts erhalten',
            'chat_title'          => 'Chat Einstellungen',
            'chat_label'          => 'Ich möchte den Alten Chat benutzen'
        ),
        'settings_verification' => array (
            'title'                 => 'Sichere dein Account',
            'help'                  => 'Diese Funktion erhöht die Sicherheit Ihres Kontos. Bei der Anmeldung müssen Sie je nach Ihren Präferenzen die von Ihnen definierten Sicherheitsfragen beantworten oder einen von Ihrer Anwendung generierten Code eingeben.',
            'password_title'        => 'Gebe dein Passwort ein',
            'auth_title'            => 'Zwei-Schritte Verifizierung',
            'auth_label'            => 'Sichern Sie Ihr Konto mit der zweistufigen Verifizierung',
            'method_title'          => 'Verifizierungsmethode',
            'method_choose'         => 'Wähle eine Verifizierungsmethode aus...',
            'method_pincode'        => 'Ich möchte einen PIN Code verwenden',
            'method_auth_app'       => 'Ich möchte Google 2FA verwenden',
            'pincode_title'         => 'PIN-Code-Sicherheit',
            'pincode_label'         => 'Fügen Sie Ihrem Konto als zusätzliche Sicherheit einen PIN-Code hinzu, damit gewährleisten Sie einen besseren Schutz Ihres Kontos vor Hackern.',
            'fill_pincode'          => 'Gebe deinen PIN-Code ein',
            'generate_auth'         => 'Codegenerierung durch 2FA',
            'generate_auth_label'   => 'Diese Methode ist die zuverlässigste. Es verbindet Ihre' . Config::site['shortname'] . ' Konto mit einer Authentifizierungsanwendung (Google Authenticator) auf Ihrem Telefon. Bei der Anmeldung müssen Sie lediglich den von Ihrer App generierten Code eingeben.',
            'link_account'          => 'Link zu deinem Account',
            'link_account_label'    => 'Um Ihr Konto zu verknüpfen, scannen Sie einfach diesen QR-Code mit Ihrer Anwendung und klicken Sie dann auf Speichern, um diese Änderung zu bestätigen.',
            'save'                  => 'Speichern'
        ),

        /*     App/View/Shop     */
        'shop_club' => array (
            'club_benefits'       => 'Club Vorteile',
            'club_buy'            => 'Kaufe ' . Config::site['shortname'] . ' Club',
            'unlimited'           => 'Unbegrenzt',
            'more_information'    => 'Mehr Informationen',
            'content_1'           => 'Haben Sie eine Frage oder ein Problem mit einem Kauf?',
            'content_2'           => 'Zögern Sie nicht, den Kundendienst über die zu kontaktieren',
            'help_tool'           =>  Config::site['shortname'] . ' Hilfe Tool',
            'random_club_users'   => 'Random ' . Config::site['shortname'] . ' Club Mitglieder',
            'desc'                => 'Hier können Sie kaufen' . Config::site['shortname'] . ' Club für echtes Geld. Mit Club können Sie exklusive Artikel kaufen.'
        ),
        'shop_history' => array (
            'buy_history'         => 'Kaufverlauf',
            'product'             => 'Produkt',
            'date'                => 'Datum',
            'buy_history_empty'   => 'Sie haben noch keine Kaufhistorie.',
            'buy_club'            => 'Kaufe ' . Config::site['shortname'] . ' Club',
            'content_1'           => 'Haben Sie eine Frage oder ein Problem mit einem Kauf?',
            'content_2'           => 'Zögern Sie nicht, den Kundendienst über die zu kontaktieren',
            'help_tool'           =>  Config::site['shortname'] . ' Hilfe Tool',
            'title'               => 'Mein Bestellverlauf',
            'desc'                => 'Sie sehen hier alle Einkäufe, die Sie getätigt habene',
            'title_draw'          => 'Badge Creator',
            'draw_desc'           => 'Ziehen Sie Ihr eigenes Abzeichen für Punkte'
        ),
        'shop_offers' => array (
            'back'              => 'Zurück',
            'buymethods'        => 'Zahlungsmethode',
            'for'               => 'für',
            'or_lower'          => 'oder niedriger',
            'loading_methods'   => 'Die Zahlungsarten werden geladen...',
            'store'             => 'Store'
        ),
        'shop' => array (
            'title'             => 'Wähle Produkt aus',
            'country'           => 'Land:',
            'netherlands'       => 'Deutschland',
            'belgium'           => 'Österreich / Schweiz',
            'super_rare'        => 'Super Raritäten',
            'more_information'  => 'Mehr Informationen',
            'content_1'         => 'Haben Sie eine Frage oder ein Problem mit einem Kauf?',
            'content_2'         => 'Haben Sie eine Frage oder ein Problem mit einem Kauf',
            'help_tool'         =>  Config::site['shortname'] . ' Hilfe Tool',
            'not_logged'        => 'Oops! Du bist nicht mehr länger Eingeloggt.',
            'have_to_login'     => 'Du musst dich Einloggen um den  ' . Config::site['shortname'] . ' Shop zu besuchen.',
            'click_here'        => 'Klicke hier',
            'to_login'          => 'Zum Einloggen.',
            'store'             => 'Store',
            'desc'              => 'Hier können Sie Credits für echtes Geld kaufen, mit denen Sie exklusive Artikel in unserem Katalog kaufen können',
            'get'               => 'Du verdienst'
        ),
        'games_ranking' => array(
            'title'             => 'Highscores',
            'desc'              => 'Auf dieser finden Sie alle Highscores unserer Spieler!'
        )
    ),
    'core' => array (
        'belcredits' => 'GOTW-Punkte',
        'hotelapi' => array (
            'disabled' => 'Die Anfrage kann nicht verarbeitet werden, da die Hotelapi deaktiviert ist!'
        ),
        'dialog' => array (
            'logged_in'             => 'Hoppla, um diese Seite zu besuchen, müssen Sie angemeldet sein!',
            'not_logged_in'         => 'Sie müssen nicht eingeloggt sein, um diese Seite zu besuchen!'
        ),
        'notification' => array (
            'message_placed'        => 'Deine Nachricht wurde gepostet!',
            'message_deleted'       => 'Deine Nachricht wurde gelöscht!',
            'invisible'             => 'Diese wird unsichtbar gemacht!',
            'profile_invisible'     => 'Das ' . Config::site['shortname'] . ' hat sein/ihr Profil unsichtbar gemacht.',
            'profile_notfound'      => 'Leider... konnten wir das nicht finden ' . Config::site['shortname'] . '!',
            'no_permissions'        => 'Dafür hast du keine Berechtigung.',
            'already_liked'         => 'Das gefällt dir schon!',
            'liked'                 => 'Du magst das!',
            'banned_1'              => 'Du wurdest gesperrt, weil du die ' . Config::site['shortname'] . ' Regeln missachtet hast:',
            'banned_2'              => 'Ihre Sperre läuft ab:',
            'something_wrong'       => 'Etwas ist schief gelaufen. Bitte versuche es erneut.',
            'room_not_exists'       => 'Dieses Zimmer existiert nicht!',
            'staff_received'        => 'Danke! Das ' . Config::site['shortname'] . ' Mitarbeiter haben diese erhalten!',
            'not_enough_belcredits' => 'Du hast nicht genug gotwpoints.',
            'not_enough_points'     => 'Sie haben nicht genug Punkte.',
            'topic_closed'          => 'Sie können nicht auf ein geschlossenes Thema antworten!',
            'post_not_allowed'      => 'Sie haben keine Berechtigung zum Erstellen eines Beitrags in diesem Forum!',
            'draw_badge_uploaded'   => 'Ihr Abzeichen wurde eingereicht und kann überprüft werden!'
        ),
        'pattern' => array (
            'can_be'                => 'darf maximal',
            'must_be'               => 'muss minimal sein',
            'characters_long'       => 'Zeichen lang.',
            'invalid'               => 'entspricht nicht den Anforderungen!',
            'invalid_characters'    => 'Enthält ungültige Zeichen!',
            'is_required'           => 'Füllen Sie alle Felder aus!',
            'not_same'              => 'stimm nicht überein',
            'captcha'               => 'Recaptcha wurde falsch eingegeben!',
            'numeric'               => 'muss numerisch sein!',
            'email'                 => 'ist nicht gültig!'
        ),
        'title' => array (
            'home'              => 'Finden Sie Freunde, spielen Sie Spiele, machen Sie Räume und heben Sie sich ab!',
            'lost'              => 'Seite nicht gefunden!',
            'registration'      => 'Kostenlos registrieren!',
            'hotel'             => 'Hotel',

            'password' => array (
                'claim'    => 'Passwort vergessen?',
                'reset'    => 'Passwort ändern',
            ),
            'settings' => array (
                'index'         => 'Meine Einstellungen',
                'password'      => 'Passwort ändern',
                'email'         => 'E-Mail ändern',
                'namechange'    => 'Ändere ' . Config::site['shortname'] . 'name'
            ),
            'community' => array (
                'index'     => 'Community',
                'photos'    => 'Fotos',
                'staff'     =>  Config::site['shortname'] . ' Staff',
                'team'      =>  Config::site['shortname'] . ' Team',
                'fansites'  => 'Fanseiten',
                'value'     => 'Katalog Markplatz',
                'forum'     => 'Meine Gruppen'
            ),
            'games' => array (
                'ranking'   => 'Highscores'
            ),
            'shop' => array (
                'index'     =>  Config::site['shortname'] . ' Store',
                'history'   => 'Purchase history',
                'club'      =>  Config::site['shortname'] . ' Club'
            ),
            'help' => array (
                'index'     => 'Hilfe Tool',
                'requests'  => 'Hilfe Ticket',
                'new'       => 'Öffne Hilfe Ticket'
            ),
            'jobs' => array (
                'index'     =>  Config::site['shortname'] . ' Stellenangebote',
                'apply'     => 'Reagieren Sie auf die Stellenausschreibung'
            )
        )
    ),
    'asn' => array(
        'login'                     => 'Das Einloggen mit VPN ist nicht erlaubt!',
        'registerd'                 => 'Sie können sich nicht registrieren, während Sie ein VPN verwenden, das verboten ist!'
    ),
    'login' => array (
        'invalid_password'          => 'Ungültiges Passwort.',
        'invalid_pincode'           => 'Der PIN-Code stimmt nicht mit ' . Config::site['shortname'] . 's überein!',
        'fill_in_pincode'           => 'Geben Sie jetzt Ihren PIN-Code ein, um Zugang zu Ihrem Konto zu erhalten!'
    ),
    'register' => array (
        'username_invalid'          =>  Config::site['shortname'] . 'name widerspricht dem ' . Config::site['shortname'] . ' Regeln.',
        'username_exists'           =>  Config::site['shortname'] . 'name ist bereits vergeben :-(',
        'email_exists'              =>  'Diese E-Mail ist bereits in Verwendung :-(',
        'too_many_accounts'         => 'Auf dieser IP sind die Mindestanzahl von Account vergeben :-('
    ),
    'claim' => array (
        'invalid_email'             => 'Diese E-Mail-Adresse stimmt nicht mit der  ' . Config::site['shortname'] . ' ID dieser überein.',
        'invalid_link'              => 'Dieser Link ist abgelaufen. Fordern Sie Ihr Passwort erneut an, um Ihr Passwort zu ändern.',
        'send_link'                 => 'Wir haben Ihnen gerade eine E-Mail geschickt! Nichts erhalten? Überprüfen Sie dann den Spam-E-Mail-Ordner.',
        'password_changed'          => 'Ihr Passwort wurde geändert. Sie können sich jetzt wieder anmelden!',

        'email'  => array (
            'title'                 => 'Ändere dein Passwort.'
        )
    ),
    'settings' => array (
        'email_saved'               => 'Ihre E-Mail-Adresse wurde geändert.',
        'pincode_saved'             => 'Ihr PIN-Code wurde gespeichert, Sie müssen sich erneut anmelden. Bis bald! :)',
        'password_saved'            => 'Ihr Passwort wurde geändert. Sie müssen sich nun erneut anmelden. Bis bald! :)',
        'preferences_saved'         => 'Ihre Einstellungen wurden gespeichert!',
        'current_password_invalid'  => 'Das aktuelle Passwort stimmt nicht mit Ihrem überein ' . Config::site['shortname'] . ' ID.',
        'choose_new_username'       => 'Gebe hier dein neuen ' . Config::site['shortname'] . 'name ein.',
        'choose_new_pincode'        => 'Bitte neuen PIN eingeben.',
        'user_is_active'            => 'Dieser ' . Config::site['shortname'] . ' kann noch aktiv sein!',
        'user_not_exists'           => 'Dieser ' . Config::site['shortname'] . 'name is available and does not exist yet!',
        'invalid_secretcode'        => 'Google Authentifizierungs Geheimcode ist ungültig.',
        'enabled_secretcode'        => 'Authentifizierung wurde gesetzt! YSie müssen sich erneut anmelden ... bis bald!',
        'disabled_secretcode'       => 'Authentifizierungs Methode deaktivieren'
    ),
    'rcon' => array (
        'exception'                 => 'RCON kann nicht fortgesetzt werden, da der Emulator ausgeschaltet ist.'
    ),
    'shop' => array (
        'offers' => array (
            'invalid_transaction'   => 'Transaktion konnte nicht verarbeitet werden!',
            'invalid_code'          => 'Der eingegebene Code ist falsch.',
            'success_1'             => 'Danke für Ihren Einkauf! Du hast erhalten',
            'success_2'             => 'gotw-punkte.'
        ),
        'club' => array (
            'already_vip'           => 'Sie sind unbefristetes Mitglied der ' . Config::site['shortname'] . ' Club.',
            'purchase_success'      => 'Ja! Sie sind jetzt Mitglied im ' . Config::site['shortname'] . ' Club für 31 Tage.'

        ),
        'marketplace' => array(
            'expired'               => 'Artikel ist abgelaufen, es ist nicht möglich, diesen Artikel zu kaufen!',
            'purchased'             => 'Der Artikel wurde erfolgreich gekauft und wird nun Ihrem Inventar hinzugefügt',
            'regards'               => 'Ihr Artikel ist angekommen! Freundliche Grüsse von ' . Config::site['shortname']
        ),
    ),
    'help' => array (
        'ticket_created'            => 'Ihr Hilfe-Ticket wurde erstellt. Zeigen Sie Ihre Hilfe-Tickets an, um die Hilfeanfrage anzuzeigen.',
        'ticket_received'           => 'An ' . Config::site['shortname'] . ' Staff hat auf Ihr Hilfe-Tool-Ticket geantwortet. Besuchen Sie das Hilfetool, um die Antwort anzuzeigen.',
        'already_open'              => 'Sie haben noch ein ausstehendes Ticket! Wenn dies behandelt wurde, können Sie erneut ein Ticket erstellen.',
        'no_answer_yet'             => 'Sie können nur einmal antworten ' . Config::site['shortname'] . ' Der Mitarbeiter hat Ihr Ticket beantwortet.',
    ),
    'forum' => array (
        'is_sticky'                 => 'Sticky upgeupdatet!',
        'is_closed'                 => 'Themenstatus geändert!'
    ),

    /*     Housekeeping     */
    'housekeeping' => array (
        'base' => array(
            'dashboard_header_title'    => 'Dashboard'
        ),
        'javascript' => array(
            'dashboard_table_username'  => 'Username'
        )
    )
);
