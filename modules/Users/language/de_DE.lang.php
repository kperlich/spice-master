<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * This file is part of the twentyreasons German language pack.
 * Copyright (C) 2012 twentyreasons business solutions.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 ********************************************************************************/
 
$mod_strings = array (
    'LBL_DELETE_USER_CONFIRM'           => 'Dieser Mitarbeiter ist auch ein Benutzer. Wird dieser Mitarbeiter gelöscht, wird auch der Benutzer gelöscht und kann daher nicht mehr das System nutzen. Außerdem müssen WorkFlow_Definitionen und Berichte, bei denen dieser Benutzer involviert ist, aktualisiert werden. Wollen Sie den Datensatz trotzdem löschen?',
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'Wollen Sie wirklich diesen Gruppen User löschen? OK auswählen, um der User Datensatz zu löschen.<br /><br />Nachdem Sie OK gewählt haben, können Sie Datensätze des Gruppen Users anderen User zuweisen.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'Wollen Sie wirklich diesen Portal API User löschen? OK auswählen, um diesen User zu löschen.',
    'LBL_DELETE_USER_CONFIRM'           => 'Dieser Mitarbeiter ist auch ein Benutzer. Wird dieser Mitarbeiter gelöscht, wird auch der Benutzer gelöscht und kann daher nicht mehr das System nutzen. Außerdem müssen WorkFlow_Definitionen und Berichte, bei denen dieser Benutzer involviert ist, aktualisiert werden. Wollen Sie den Datensatz trotzdem löschen?',
                                                  'Click OK to delete the User record.',

	'LNK_IMPORT_USERS'                 => 'Benutzer importieren',
	'ERR_DELETE_RECORD'					=> 'Um diese Firma zu löschen, muss eine Datensatznummer angegeben werden.',
	'ERR_EMAIL_INCORRECT'				=> 'Besorgen Sie sich eine gültige um passwort zu erstellen oder zu verschicken.',
	'ERR_EMAIL_NO_OPTS'					=> 'Konnte Optimum Einstellungen für eingehende E-Mail nicht finden.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'Bitte bestätigen Sie Ihr neues Passwort.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'Bitte geben Sie Ihr neues Passwort ein',
	'ERR_ENTER_OLD_PASSWORD'			=> 'Bitte geben Sie Ihr altes Passwort ein.',
	'ERR_IE_FAILURE1'					=> '[Hier klicken um zurückzukehren]',
	'ERR_IE_FAILURE2'					=> 'Bei der Verbindung mit Ihrem E-Mail Account ist ein Problem aufgetreten. Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es dann noch einmal.',
	'ERR_IE_MISSING_REQUIRED'			=> 'Es fehlen Informationen für eingehende E-Mails.<br /> Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es noch einmal.<br /><br />Wenn Sie keine eingehende E-Mail konfigurieren wollen, leeren Sie bitte alle Felder in dieser Sektion.',
	'ERR_INVALID_PASSWORD'				=> 'Sie müssen einen gültigen Usernamen und ein gültiges Passwort angeben.',
	'ERR_NO_LOGIN_MOBILE'				=> 'Ihr erstes Login in diese Applikation muss mit einem nicht mobilen Browser oder im Normalmodus gemacht werden. Bitte versuchen Sie es mit einem vollen Browser oder klicken Sie auf den Normal Link unten. Wir entschuldigen uns für alle Unannehmlichkeiten',
	'ERR_LAST_ADMIN_1'					=> 'Der Benutzername \"',
	'ERR_LAST_ADMIN_2'					=> '\" ist der letzte Benutzer mit Administratorrechten. Es muß jedoch immer mindestens ein Administrator im System existieren.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'Die Passwortänderung ist fehlgeschlagen für Benutzer',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> 'schlug fehl. Das neue Passwort muß noch einmal eingegeben werden..',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> 'Das neue Kennwort ist ungültig',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> 'Ungültiges altes Passwort für Benutzer',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. Passwortinformation neu eingeben.',
	'ERR_PASSWORD_MISMATCH'				=> 'Die Passwörter stimmen nicht überein.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'Bitte geben Sie einen gültigen Benutzernamen und eine gültige Emailadresse ein.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'Ihr Passwort ist abgelaufen. Bitte erstellen Sie ein neuen Passwort',
	'ERR_REENTER_PASSWORDS'				=> 'Bitte geben Sie Ihr neues Passwort ein weiteres Mal ein. Das neue Passwort und das bestätigte Passwort stimmen nicht überein.',
	'ERR_REPORT_LOOP'					=> 'Das System hat eine Berichtsschleife entdeckt. Ein Mitarbeiter kann nicht an sich selbst berichten, und ein Manager kann nicht an seinen Mitarbeiter berichten.',
	'ERR_RULES_NOT_MET'                 => 'The password you entered did not meet the password requirements.  Please try again.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'Benutzer Information wurde nicht gefundet',
	'ERR_USER_NAME_EXISTS_1'			=> 'Der Benutzer mit dem Namen',
	'ERR_USER_NAME_EXISTS_2'			=> 'existiert bereits. Jeder Username muss im System einmalig sein. Ändern Sie bitte den Namen und versuchen Sie es erneut.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'This user is locked out of the Sugar application and cannot log in using his/her existing password.',

	'LBL_PASSWORD_SENT'                => 'Das Passwort wurde aktualisiert.',
	'LBL_CANNOT_SEND_PASSWORD'         => 'Das Passwort konnte nicht gesendert werden',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'System is unable to process your request. Please check:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP Server URL and Port',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP Username and  SMTP Password',
	'ERR_RECIPIENT_EMAIL'				=> 'Recipient Email Address',
	'ERR_SERVER_STATUS'					=> 'Your server status',
	'ERR_SERVER_SMTP_EMPTY'				=> 'The system is unable to send an email to the user. Please check the Outgoing Mail Configuration in <a href="index.php?module=EmailMan&action=config">Email Settings</a>.',

	'LBL_ADDRESS_CITY'					=> 'Adresse Ort',
	'LBL_ADDRESS_COUNTRY'				=> 'Adresse Land',
	'LBL_ADDRESS_INFORMATION'			=> 'Adressinformation',
	'LBL_ADDRESS_POSTALCODE'			=> 'Adresse PLZ',
	'LBL_ADDRESS_STATE'					=> 'Adresse Bundesland',
	'LBL_ADDRESS_STREET'				=> 'Adresse Strasse',
	'LBL_ADDRESS'						=> 'Adresse',
	'LBL_ADMIN_USER'					=> 'System Administrator Benutzer',


	'LBL_ADMIN_DESC'					=> 'Benutzer kann im der Administrationsseite und auf alle Einträge zugreifen, ungeachtet der Team-Security',
	'LBL_REGULAR_DESC'					=> 'User can access modules and records based on team security and roles.',



	'LBL_ADMIN'							=> 'Systemadministrator',
	'LBL_ADVANCED'                     => 'Erweitert',
    'LBL_ANY_ADDRESS'                  => 'Irgendeine Adresse:',
	'LBL_ANY_EMAIL'						=> 'Irgendeine E-Mail',
	'LBL_ANY_PHONE'						=> 'Irgendeine Telefonnummer',
	'LBL_BUTTON_CREATE'					=> 'Erstellen',
	'LBL_BUTTON_EDIT'					=> 'Bearbeiten',
	'LBL_CALENDAR_OPTIONS'				=> 'Kalender Optionen',
	'LBL_CHANGE_PASSWORD'               => 'Passwort ändern',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'Bitte bersorgen sie Sich einen neuen Passwort',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'Passwort &auml;ndern',
    'LBL_CHOOSE_A_KEY'					=> 'Wählen Sie einen Schlüssel, um unautorisiertes Veröffentlichen Ihres Kalenders zu verhindern.',
	'LBL_CHOOSE_WHICH'					=> 'Wählen Sie bitte aus, welche Tabs angezeigt werden sollen.',
	'LBL_CITY'							=> 'Stadt',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'Leeren',


	'LBL_CONFIRM_PASSWORD'				=> 'Passwort bestätigen',
	'LBL_CONFIRM_REGULAR_USER'			=> 'You have changed the user type from System Administrator User to Regular User.  After saving this change, the user will no longer have system administrator privileges.\n\nClick OK? to proceed.\nClick Cancel? to return to the record.',
	'LBL_COUNTRY'						=> 'Land',
	'LBL_CURRENCY_TEXT'					=> 'Wählen Sie die Standard Währung',
	'LBL_CURRENCY'						=> 'Währung',
	'LBL_CURRENCY_EXAMPLE'				=> 'Währung Anzeigebeispiel',
	'LBL_CURRENCY_SIG_DIGITS'			=> 'Währung Dezimalstellen',
	'LBL_CURRENCY_SIG_DIGITS_DESC'		=> 'Anzahl Dezimalstellen angezeigt bei Währung',
	'LBL_NUMBER_GROUPING_SEP'			=> '1000er Trennzeichen',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'Tausender Trennzeichen',
	'LBL_DECIMAL_SEP'					=> 'Dezimalzeichen',
	'LBL_DECIMAL_SEP_TEXT'				=> 'Dezimal Trennzeichen',
	'LBL_FDOW'					=> 'Erster Tag der Woche',
	'LBL_FDOW_TEXT'				=> 'Erster Tag was in Wochen-, Monats und Jahressichten angezeigt wird',
	'LBL_DATE_FORMAT_TEXT'				=> 'Stellen Sie hier das Anzeigeformat für das Datum ein',
	'LBL_DATE_FORMAT'					=> 'Datumformat',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'Benutzer',
	'LBL_DEPARTMENT'					=> 'Abteilung',
	'LBL_DESCRIPTION'					=> 'Beschreibung',
	'LBL_DISPLAY_TABS'					=> 'Tabs anzeigen',
	'LBL_DOWNLOADS'                    => 'Downloads',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) zeigt an, dass Sie Sommerzeit eingestellt haben.',
	'LBL_EDIT_TABS'						=> 'Tabs bearbeiten',
	'LBL_EDIT'							=> 'Bearbeiten',
	'LBL_USER_HASH'						=> 'Passwort',
	'LBL_AUTHENTICATE_ID'				=> 'Bestätigung Id',
	'LBL_ACCOUNT_NAME'					=> 'Firmenname',
	'LBL_USER_PREFERENCES'				=> 'Benutzer Präferenzen',
	'LBL_EXT_AUTHENTICATE'				=> 'Externe Bestätigung',
	'LBL_EMAIL_OTHER'					=> 'E-Mail 2',
	'LBL_EMAIL'							=> 'E-Mail Adresse',
	'LBL_EMAIL_CHARSET'					=> 'Zeichensatz für Versand',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'Format erstellen',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Gmail Standardwerte füllen',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-Mail Client',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'System is unable to process your request. Please contact the system administrator.',
    'LBL_EMAIL_PROVIDER'               => 'Email Provider',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'E-Mail Zähler anzeigen',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'Diese Signatur benötigt einen Namen.',
    'LBL_EMAIL_SMTP_SSL'				=> 'SMTP über SSL aktivieren',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'No email template is selected for the email containing the password that will be sent to the user.  Please select an email template in the Password Management page.',
    'LBL_EMPLOYEE_STATUS'				=> 'Mitarbeiter Status',
    'LBL_EMPLOYEE_INFORMATION'         => 'Mitarbeiter Information',
	'LBL_ERROR'							=> 'Fehler',
	'LBL_EXPORT_CHARSET'				=> 'Import/Export Zeichensatz',
	'LBL_EXPORT_CHARSET_DESC'			=> 'Wählen Sie den Zeichensatz der in Ihrer Region verwendet wird. Dieser Wert wird für Datenimport, abgehende E-Mails, .csv Exporte, Erstellen von PDFs und vCards verwendet.',
	'LBL_EXPORT_DELIMITER'				=> 'Export Trennzeichen',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'Geben Sie das Trennzeichen für die zu exportierenden Daten an.',
	'LBL_FAX_PHONE'						=> 'Fax',
	'LBL_FAX'							=> 'Fax',
	'LBL_FIRST_NAME'					=> 'Vorname',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     => 'System Generated Password',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Reset Password',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Reset Password [Alt+G]',
    'LBL_GENERATE_PASSWORD'             => 'Reset Password',
	'LBL_GROUP_DESC'					=> 'Dieser Benutzer wird nur verwendet, um Einträge über die E-Mail Eingangs-Funktionalität einer Gruppe zuzuordnen. Dieser Benutzer kann nicht auf normalem Weg in Sugar einloggen.',
	'LBL_GROUP_USER_STATUS'				=> 'Gruppen Benutzer',
	'LBL_GROUP_USER'					=> 'Benutzergruppen',
	'LBL_HIDE_TABS'						=> 'Tabs verstecken',
	'LBL_HOME_PHONE'					=> 'Telefon privat',
	'LBL_INBOUND_TITLE'					=> 'Firmeninformation',
	'LBL_IS_ADMIN'						=> 'Ist Administrator',
	'LBL_LANGUAGE'						=> 'Sprache',
	'LBL_LAST_NAME'						=> 'Nachname',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'Nachnamen/Name',
    'LBL_LAYOUT_OPTIONS'                => 'Layout Optionen',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP Bestätigung',
	'LBL_LIST_ACCEPT_STATUS'			=> 'Status',
	'LBL_LIST_ADMIN'					=> 'Admin',
	'LBL_LIST_DEPARTMENT'				=> 'Abteilung',
	'LBL_LIST_EMAIL'					=> 'E-Mail',
	'LBL_LIST_FORM_TITLE'				=> 'Benutzer',
	'LBL_LIST_GROUP'					=> 'Gruppe',
	'LBL_LIST_LAST_NAME'				=> 'Nachname',
	'LBL_LIST_MEMBERSHIP'				=> 'Mitgliedschaft',
	'LBL_LIST_NAME'						=> 'Name',
	'LBL_LIST_PRIMARY_PHONE'			=> 'Telefon',
	'LBL_LIST_PASSWORD'					=> 'Passwort',
	'LBL_LIST_STATUS'					=> 'Status',
	'LBL_LIST_TITLE'					=> 'Funktion',
	'LBL_LIST_USER_NAME'				=> 'Benutzername',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'Anzeigeformat Name',
	'LBL_LOCALE_DESC_FIRST'				=> '[Vor]',
	'LBL_LOCALE_DESC_LAST'				=> '[Nach]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Anrede]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Titel]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'Beispiel',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'Definieren Sie wie Namen angezeigt werden.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '"s" Anrede<br>"f" Vorname<br>"l" Nachname',
    'LBL_SAVED_SEARCH'                  => 'Gespeicherte Suche & Layout',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'Login',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'Login[Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> 'Wilkommen zu',
	'LBL_LOGIN_OPTIONS'					=> 'Optionen',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'Passwort vergessen',
    'LBL_LOGIN_SUBMIT'      		    => 'Schicken',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'Zu viele fehlgeschlagene Login Versuche',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'Sie können nochmals versuchen, sich einloggen',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'Tage',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'Stunden',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'Minuten',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'Sekunden',
    'LBL_LOGIN_ADMIN_CALL'              => 'Bitte kontaktieren Sie den Systemadministrator',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'Sie wurden abgemeldet. Um neu einzuloggen, klicken Sie',
    'LBL_LOGGED_OUT_2' => 'hier',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'Antwort-an Adresse',
	'LBL_MAIL_FROMNAME'					=> 'Antwort-an Name',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'E-Mail Optionen',
	'LBL_MAIL_SENDTYPE'					=> 'Mail Transfer Agent',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'SMTP Authentfiizierung verwenden?',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP Port',
	'LBL_MAILMERGE_TEXT'				=> 'Serienbrieffunktion aktivieren (Serienbriefe müssen vom  Administrator in der Systemkonfiguration aktiviert sein)',
	'LBL_MAILMERGE'						=> 'Serienbrief',
	'LBL_MAX_TAB'						=> 'Anzahl Tabs',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Anzahl Tabs, die angezeigt werden, bevor ein aufklappbares Menü erscheint.',
    'LBL_MAX_SUBTAB'                    => 'Anzahl Subtabs',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Anzahl Subtabs, die angezeigt werden, bevor ein aufklappbares Menü erscheint.',
	'LBL_MESSENGER_ID'					=> 'IM Name',
	'LBL_MESSENGER_TYPE'				=> 'IM Typ',
	'LBL_MOBILE_PHONE'					=> 'Mobiltelefon',
	'LBL_MODIFIED_BY'                  => 'Geändert von',
	'LBL_CREATED_BY_NAME' => 'Erstellt von',
    'LBL_MODIFIED_BY_ID'               => 'Geändert von ID',
    'LBL_MODULE_NAME'					=> 'Benutzer',
	'LBL_MODULE_TITLE'					=> 'Benutzer: Home',
    'LBL_NAME'							=> 'Ganzer Name',
    'LBL_SIGNATURE_NAME'                                        => 'Name',
    'LBL_NAVIGATION_PARADIGM'           => 'Navigation Beispiel',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => 'Verwenden Sie gruppierte Tabs anstatt dedizierte Tabs pro Modul.',
    'LBL_USE_GROUP_TABS'                => 'Gruppierte Module',
	'LBL_NEW_FORM_TITLE'				=> 'Neuer Benutzer',
	'LBL_NEW_PASSWORD'					=> 'Neues Passwort',
	'LBL_NEW_PASSWORD1'					=> 'Passwort',
	'LBL_NEW_PASSWORD2'					=> 'Passwort bestätigen',
	'LBL_NEW_USER_PASSWORD_1'			=> 'Passwort wurde erfolgreich geändert',
	'LBL_NEW_USER_PASSWORD_2'			=> 'Eine Email wurde gesendet, welches einen system-generierten Passwort enthält',
	'LBL_NEW_USER_PASSWORD_3'			=> 'Passwort wurde erfolgreich erstellt',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'Neuer Benutzer',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'Neuer User [Alt+N]',
	'LBL_NORMAL_LOGIN'					=> 'Zur Normalansicht wechseln',
	'LBL_NOTES'							=> 'Notizen',
	'LBL_OFFICE_PHONE'					=> 'Telefon Büro',
	'LBL_OLD_PASSWORD'					=> 'Altes Passwort',
	'LBL_OTHER_EMAIL'					=> 'Weitere E-Mail Adresse',
	'LBL_OTHER_PHONE'					=> 'Weiteres Telefon',
	'LBL_OTHER'							=> 'Andere',
	'LBL_PASSWORD'						=> 'Passwort',
    'LBL_PASSWORD_GENERATED'            => 'Neues Passwort wurde generiert',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'Ihr Passwort ist abgelaufen. Bitte besorgen Sie sich einen neuen',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Ihr Passwort ist systemgeneriert',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'Ihr Passwort ist abgelaufen. Bitte besorgen Sie sich einen neuen',

	'LBL_PSW_MODIFIED'                  => 'Passwort zuletzt geändert',
    'LBL_PHONE'							=> 'Telefon',
	'LBL_PICK_TZ_WELCOME'				=> 'Willkommen bei Sugar',
	'LBL_PICK_TZ_DESCRIPTION'           => 'Bevor Sie weiter fortfahren, bestätigen Sie die Zeitzone aus der Liste der Zeitzonen unten. Sie können diese auch später noch ändern in dem Sie auf &#39;Mein Konto&#39; klicken.',
	'LBL_PORTAL_ONLY_DESC'				=> 'Use for the Portal API. This type cannot login through the Sugar web interface.',
	'LBL_PORTAL_ONLY_USER'					=> 'Portal API Benutzer',
	'LBL_POSTAL_CODE'					=> 'PLZ',
	'LBL_PRIMARY_ADDRESS'				=> 'Hauptadresse',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Aktivieren fragt Mitarbeiter nach der Bestätigung der Zeitzone beim Anmelden.',
	'LBL_PROMPT_TIMEZONE'				=> 'Zeitzone Eingabeaufforderung',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'esorge Benutzernamen und Emailadresse',
	'LBL_PUBLISH_KEY'					=> 'Schlüssel für Freigabe',

	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Get another CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> 'Switch to Sound',
	'LBL_RECAPTCHA_IMAGE'				=> 'Switch to Image',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'Enter the Two Words Below',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Enter the Two Words to the Right',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'Enter the text that appears in the image.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'Invalid Recaptcha Private Key',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'The challenge parameter of the verify Recaptcha script was incorrect.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'Unknown Recaptcha Error',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'Sie erhalten eine E-Mail, wenn Ihnen eine Aufgabe, ein Termin etc. zugewiesen wurde.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'Meldung wenn zugewiesen',
	'LBL_REGISTER'                      => 'Neuer Benutzer? Bitte registrieren Sie sich',
	'LBL_REGULAR_USER'                  => 'Regulärer Benutzer',
	'LBL_PORTAL_USER'                   => 'Portal Benutzer',
	'LBL_REMINDER_TEXT'					=> 'Setzen Sie einen Standardwert für Erinnerungen.',
	'LBL_REMINDER'						=> 'Erinnerungen',
	'LBL_REMINDER_POPUP' => 'Popup',
	'LBL_REMINDER_EMAIL' => 'E-Mail',
	'LBL_REMOVED_TABS'					=> 'Admin Tabs Entfernen',
	'LBL_REPORTS_TO_NAME'				=> 'Berichtet an',
	'LBL_REPORTS_TO'					=> 'Berichtet an',
    'LBL_REPORTS_TO_ID'                => 'Berichtet an ID',
	'LBL_REQUEST_SUBMIT'				=> 'Deine Anfrage wurde verschickt',
	'LBL_RESET_TO_DEFAULT'				=> 'Zurücksetzen auf Standard',
	'LBL_RESET_PREFERENCES'				=> 'Benutzereinstellungen',
    'LBL_RESET_PREFERENCES_WARNING'     => 'Möchten Sie wirklich alle Ihre persönlichen Einstellungen zurücksetzen? Warnung: Dabei werden Sie automatisch ausgeloggt.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Möchten Sie alle Einstellungen für diesen Benutzer zurücksetzen?',
    'LBL_RESET_HOMEPAGE'                => 'Homepage',
    'LBL_RESET_DASHBOARD'               => 'Übersicht',
    'LBL_RESET_HOMEPAGE_WARNING'        => 'Möchten Sie wirklich die Homepage zurücksetzen?',
    'LBL_RESET_HOMEPAGE_WARNING_USER'   => 'Möchten Sie die Homepage für diesen Benutzer wirklich zurücksetzen?',
	'LBL_SALUTATION'                    => 'Anrede',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'Rollen',
	'LBL_SEARCH_FORM_TITLE'				=> 'Benutzer Suche',
	'LBL_SEARCH_URL'					=> 'Suche Ort',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'Markierte Benutzer auswählen',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'Markierte Benutzer auswählen',
	'LBL_SETTINGS_URL_DESC'				=> 'Verwenden Sie diese URL für die Login-Einstellungen der Sugar-Plugins für Outlook und Microsoft Word.',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> 'Signatur',
	'LBL_SIGNATURE_HTML'				=> 'HTML Signatur',
	'LBL_SIGNATURE_DEFAULT'				=> 'Signatur verwenden?',
	'LBL_SIGNATURE_PREPEND'				=> 'Signatur oberhalb der Antwort?',
	'LBL_SIGNATURES'					=> 'Signaturen',
	'LBL_STATE'							=> 'Bundesland',
	'LBL_STATUS'						=> 'Status',
    'LBL_SUBPANEL_LINKS'                => 'Subpanel Links',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'In der Detailansicht, zeige eine Zeile mit Subpanel Schnelllinks.',
    'LBL_SUBPANEL_TABS'                 => 'Subpanel Tabs',
    'LBL_SUBPANEL_TABS_DESCRIPTION'     => 'Gruppiere in der Detailansicht Subpanels als Tabs und zeige jeweils nur einen an.',
    'LBL_SUGAR_LOGIN'					=> 'Ist Sugar Benutzer',
    'LBL_SUPPORTED_THEME_ONLY'          => 'Hat nur eine Auswirkung bei Designs, die diese Option unterstützen.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Wenn diese Option aktiviert ist, werden die zuletzt angesehenen Einträge links angezeigt. Andernfalls oben.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Wenn diese Option aktiviert ist, wird das Schnellmenü oben angezeigt. Andernfalls links.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => '&#39;Zuletzt angesehen&#39; auf der Seite',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'Shortcuts oben',
	'LBL_TAB_TITLE_EMAIL'				=> 'E-Mail Einstellungen',
	'LBL_TAB_TITLE_USER'				=> 'Benutzereinstellungen',
	'LBL_THEME'							=> 'Design',
	'LBL_THEME_COLOR'					=> 'Farbe',
	'LBL_THEME_FONT'					=> 'Schriftart',
	'LBL_TIME_FORMAT_TEXT'				=> 'Stellen Sie hier das Anzeigeformat für die Uhrzeit ein',
	'LBL_TIME_FORMAT'					=> 'Zeitformat',
	'LBL_TIMEZONE_DST_TEXT'				=> 'Sommerzeit beachten',
	'LBL_TIMEZONE_DST'					=> 'Sommerzeit',
	'LBL_TIMEZONE_TEXT'					=> 'Geben Sie die aktuelle Zeitzone ein',
	'LBL_TIMEZONE'						=> 'Zeitzone',
	'LBL_TITLE'							=> 'Funktion',
	'LBL_USE_REAL_NAMES'				=> 'Ganzen Namen anzeigen',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Zeige den vollständigen Namen der Benutzer anstelle des Benutzernames.',
	'LBL_USER_INFORMATION'				=> 'Informationen',
	'LBL_USER_LOCALE'					=> 'Lokale Einstellungen',
	'LBL_USER_NAME'						=> 'Benutzername',
	'LBL_USER_SETTINGS'					=> 'Benutzereinstellungen',
	'LBL_USER_TYPE'		   			    => 'U',
	'LBL_USER_ACCESS'                  => 'Zugang',
	'LBL_USER'							=> 'Benutzer',
	'LBL_WORK_PHONE'					=> 'Telefon Büro',
	'LBL_YOUR_PUBLISH_URL'				=> 'An meinem Standort publizieren',
    'LBL_ICAL_PUB_URL'                  => 'iCal integration URL',
    'LBL_ICAL_PUB_URL_HELP'             => 'Dieser URL verwenden, um iCal im Sugar Kalender zu abonnieren',
	'LBL_YOUR_QUERY_URL'				=> 'Ihre Abfrage URL',
	'LNK_NEW_USER'						=> 'Neuer Benutzer',
	'LNK_NEW_PORTAL_USER'				=> 'Erstelle Portal API Benutzer',
	'LNK_NEW_GROUP_USER'				=> 'Neuer Gruppen Benutzer',
	'LNK_USER_LIST'						=> 'Benutzer',
	'LNK_REASSIGN_RECORDS'				=> 'Datensätze umhängen',
    'LBL_PROSPECT_LIST'                 => 'Kontaktliste',
    'LBL_EMAILS'                        => 'E-Mails',
    'LBL_PROCESSING'                    => 'Bearbeitung',
    'LBL_UPDATE_FINISH'                 => 'Update komplett',
    'LBL_AFFECTED'                      => 'beeinträchtig',

    'LBL_USER_NAME_FOR_ROLE'            => 'Benutzer/Teams/Rollen',
    'LBL_SESSION_EXPIRED'               => 'Sie wurden abgemeldet, weil Ihre Session abgelaufen ist.',

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'Optimums anwenden',
	'LBL_ASSIGN_TO_USER'				=> 'Mit Benutzer verknüpfen',
	'LBL_BASIC'							=> 'Eingehende Einstellungen',
	'LBL_CERT_DESC'						=> 'Validierung des Mailserver Sicherheitszertifikats erzwingen - nicht verwenden, wenn selbstzertifiziert.',
	'LBL_CERT'							=> 'Zertifikat validieren',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>Suche Optimum Verbindungseinstellungen',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'Suche Optimum Konfiguration',
	'LBL_FORCE'							=> 'Erzwinge Negativ',
	'LBL_FORCE_DESC'					=> 'Einige IMAP/POP3 Server benötigen spezielle Schalter. Erzwingen Sie bitte eine negative Schaltung bei der Verbindung (z.B. /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>Optimum Einstellungen wurden gefunden. Drücken Sie auf die Schaltfläche unten um diese für Ihre Mailbox zu übernehmen.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'Eingehende E-Mail Einstellungen',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'Ausgehende E-Mail Einstellungen',
	'LBL_LOGIN'							=> 'Benutzername',
	'LBL_MAILBOX_DEFAULT'				=> 'Posteingang',
	'LBL_MAILBOX_SSL_DESC'				=> 'SSL zum Verbinden benützen. Wenn das nicht funktioniert, prüfen Sie ob Ihre PHP Installation "--with-imap-ssl" in der Konfiguration beinhaltet.',
	'LBL_MAILBOX'						=> 'Überwachter Ordner',
	'LBL_MAILBOX_TYPE'					=> 'Mögliche Aktionen',
	'LBL_MARK_READ_NO'					=> 'E-Mails werden nach dem Import als gelöscht markiert',
	'LBL_MARK_READ_YES'					=> 'E-Mails bleiben nach dem Import auf dem Server',
	'LBL_MARK_READ_DESC'				=> 'Importiere und markiere gelesene E-Mails auf dem Server, jedoch nicht löschen!',
	'LBL_MARK_READ'						=> 'E-Mails auf Server belassen',
	'LBL_ONLY_SINCE_NO'					=> 'Nein. Prüfe alle E-Mails auf dem Mailserver.',
	'LBL_ONLY_SINCE_YES'				=> 'Ja.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP kann neue von ungelesenen E-Mails nicht unterscheiden, wenn ein POP3 Account verwendet wird. Setzen Sie dieses Flag um neue Mitteilungen seit der letzten Aktualisierung zu suchen. Dies erhöht die Performance signifikat falls Ihr Mail Server IMAP nicht unterstützt!',
	'LBL_ONLY_SINCE'					=> 'Importiere E-Mails seit der letzten Überprüfung',
	'LBL_PORT'							=> 'Mail Server Port',
	'LBL_SERVER_OPTIONS'				=> 'Erweiterte Einstellungen',
	'LBL_SERVER_TYPE'					=> 'Mail Server Protokoll',
	'LBL_SERVER_URL'					=> 'Mail Server Adresse',
	'LBL_SSL'							=> 'Verwende SSL',
	'LBL_SSL_DESC'						=> 'SSL (Secure Socket Layer) bei der Verbindung mit dem Mail Server benutzen',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'					=> 'Teste Einstellungen',
	'LBL_TEST_SUCCESSFUL'				=> 'Verbindung erfolgreich hergestellt.',
	'LBL_TLS_DESC'						=> 'Verwende TLS beim Verbinden mit Mailserver - verwenden Sie dies nur, wenn Ihr Mailserver dieses Protokoll unterstützt.',
	'LBL_TLS'							=> 'Verwende TLS',
	'LBL_TOGGLE_ADV'					=> 'Zeige erweiterte Einstellungen',
    'LBL_OWN_OPPS'                      => 'Keine Verkaufschancen',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'Bestätige den Benutzer nur durch',
	'LBL_ONLY'							=> 'Nur',
    'LBL_OWN_OPPS_DESC'                 => 'Select if user will not be assigned opportunities. Use this setting for users who are managers that are not involved in sales activities. The setting is used for the forecasting module.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP Fehler: Bitte kontaktieren Sie einen Admin',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Fehler: Erweiterungen nicht geladen',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Benutzer Urlaub',
	'LBL_RESOURCE_NAME' => 'Name',
	'LBL_RESOURCE_TYPE' => 'Typ:',

	'LBL_PDF_SETTINGS'  => 'PDF Einstellungen',
	'LBL_PDF_PAGE_FORMAT'  => 'Seiten Format',
	'LBL_PDF_PAGE_FORMAT_TEXT'  => 'Das format welches für Seiten genützt wird',
	'LBL_PDF_PAGE_ORIENTATION'  => 'Page Orientation',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  => '',
	'LBL_PDF_PAGE_ORIENTATION_P'  => 'Portrait',
	'LBL_PDF_PAGE_ORIENTATION_L'  => 'Landscape',
	'LBL_PDF_MARGIN_HEADER'  => 'Header Margin',
	'LBL_PDF_MARGIN_HEADER_TEXT'  => '',
	'LBL_PDF_MARGIN_FOOTER'  => 'Footer Margin',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  => '',
	'LBL_PDF_MARGIN_TOP'  => 'Top Margin',
	'LBL_PDF_MARGIN_TOP_TEXT'  => '',
	'LBL_PDF_MARGIN_BOTTOM'  => 'Bottom Margin',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  => '',
	'LBL_PDF_MARGIN_LEFT'  => 'Left Margin',
	'LBL_PDF_MARGIN_LEFT_TEXT'  => '',
	'LBL_PDF_MARGIN_RIGHT'  => 'Right Margin',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  => '',
	'LBL_PDF_FONT_NAME_MAIN'  => 'Font for Header and Body',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  => 'The selected font will be applied to the text in the header and the body of the PDF Document',
	'LBL_PDF_FONT_SIZE_MAIN'  => 'Main Font Size',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  => '',
	'LBL_PDF_FONT_NAME_DATA'  => 'Font for Footer',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  => 'The selected font will be applied to the text in the footer of the PDF Document',
	'LBL_PDF_FONT_SIZE_DATA'  => 'Data Font Size',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  => '',
	'LBL_LAST_ADMIN_NOTICE' => 'You have selected yourself. You cannot change the User Type or Status of yourself.',
	'LBL_MAIL_SMTPUSER'	=> 'Benutzername',
	'LBL_MAIL_SMTPPASS'	=> 'Passwort',
	'LBL_MAIL_SMTPSERVER' => 'SMTP Mail Server',
	'LBL_SMTP_SERVER_HELP' => 'This SMTP Mail Server can be used for outgoing mail. Provide a username and password for your email account in order to use the mail server.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'The administator has not yet configured the default outbound account.  Unable to send test email.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'SMTP Authentfiizierung verwenden?',
	'LBL_MAIL_SMTPPASS'					=> 'Passwort',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP Port',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP Mail Server',
	'LBL_MAIL_SMTPUSER'					=> 'Benutzername',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP Server Typ',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP Server Spezifikation',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Wählen Sie Ihren Email Anbieter',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Passwort',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID (Benutzer)',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Passwort',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Email Adresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Passwort',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Benutzername',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server Port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
        'LBL_OK'   => 'OK',
        'LBL_CANCEL'    => 'Abbrechen',
        'LBL_DELETE_USER' => 'Benutzer löschen',
	// Wizard
	'LBL_EMAIL_SIGNATURE' => 'Email Signatur',
	'LBL_WIZARD_TITLE' => 'Benutzer Assistent',
    'LBL_WIZARD_WELCOME_TAB' => 'Start',
    'LBL_WIZARD_WELCOME_TITLE' => 'Willkommen bei Sugar',
    'LBL_WIZARD_WELCOME' => 'Klicken Sie "Weiter", um einige Basiseinstellungen vorzunehmen.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Klicken Sie "Weiter", um einige Basiseinstellungen vorzunehmen.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Weiter',
    'LBL_WIZARD_BACK_BUTTON' => 'Zurück',
    'LBL_WIZARD_SKIP_BUTTON' => 'überspringen',
    'LBL_WIZARD_FINISH_BUTTON' => 'Ende',
    'LBL_WIZARD_FINISH_TAB' => 'Ende',
    'LBL_WIZARD_FINISH_TITLE' => 'Sie können Sugar nun benutzen!',

    'LBL_WIZARD_FINISH' => 'Klicken Sie <b>Weiter</b> um Ihre persönlichen Einstellungen vorzunehmen. Für Weitere Informationen zur Benutzung von Sugar:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user and System Administrator Training and Resources</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product Guides and Release Notes</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Tips from SugarCRM Support for performing common tasks and processes in Sugar</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers</td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'Was wollen Sie als nächstes machen',
    'LBL_WIZARD_FINISH2' => 'Sugar jetzt verwenden',
    'LBL_WIZARD_FINISH3' => 'Daten importieren',
    'LBL_WIZARD_FINISH4' => 'Daten aus externe Quellen nach Sugar importieren',
    'LBL_WIZARD_FINISH5' => 'Benutzer erstellen',
    'LBL_WIZARD_FINISH6' => 'Neu Benutzer für SugarCRM erstellen.',
    'LBL_WIZARD_FINISH7' => 'Einstellungen der Anwendung anschauen bzw. ändern',
    'LBL_WIZARD_FINISH8' => 'Erweiterte Einstellungen verwalten, inklusive Default Einstellungen.',
    'LBL_WIZARD_FINISH9' => 'Anwendeung konfigurieren',
    'LBL_WIZARD_FINISH10' => 'Studio verwenden, um Felder und Layouts zu verwalten.',
    'LBL_WIZARD_FINISH11' => 'Sugar Universität besuchen.',
    'LBL_WIZARD_FINISH12' => 'Finde Schulungsunterlagen bzw. Seminare, um Ihnen den Start als Administrator bzw. Endanwender zu unterstützen.',
    'LBL_WIZARD_FINISH14' => 'Dokumentation',
    'LBL_WIZARD_FINISH15' => 'Produkthandbücher und Release Notes',
    'LBL_WIZARD_FINISH16' => 'Knowledge Base',
    'LBL_WIZARD_FINISH17' => 'Hilfe von SugarCRM Support, um allgemeine Aufgaben und Prozesse in SugarCRM zu verstehen.',
    'LBL_WIZARD_FINISH18' => 'Forums',
    'LBL_WIZARD_FINISH19' => 'Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers',
    'LBL_WIZARD_FINISH2DESC' => 'Gehe direkt zur Startseite',
    'LBL_WIZARD_PERSONALINFO' => 'Ihre Information',
    'LBL_WIZARD_LOCALE' => 'Ihre Örtlichkeit',
    'LBL_WIZARD_SMTP' => 'Ihr Email Konto',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Bitte geben Sie einige Informationen über sich ein. Diese Angaben sind für andere Benutzer sichtbar. Pflichtfelder sind mit * gekennzeichnet.',
    'LBL_WIZARD_LOCALE_DESC' => 'Bitte geben Sie Ihre Zeitzone an und wie Währungen, das Datum und Namen in Sugar angezeigt werden sollen.',
    'LBL_WIZARD_SMTP_DESC' => 'Bitte geben Sie Ihr Emailkonto und das Passwort für Ihren Standard Email Server an.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'Externe Konten',

	'LBL_EDITLAYOUT' => 'Layout bearbeiten',
	'LBL_HELP' => 'Hilfe',
	'LBL_CHECKMARK' => 'Checkmark',
	'LBL_THEMEPREVIEW' => 'Vorschau',

    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Geändert von',
    'LBL_PHONE_HOME' => 'Telefon privat',
    'LBL_PHONE_MOBILE' => 'Handy',
    'LBL_PHONE_WORK' => 'Telefon Büro',
    'LBL_PHONE_OTHER' => 'Anderes Telefon',
    'LBL_PHONE_FAX' => 'Telefon/Fax:',
    'LBL_PORTAL_ONLY' => 'Nur Portal Benutzer',
    'LBL_SHOW_ON_EMPLOYEES' => 'Mitarbeiter Daten anzeigen',
    'LBL_IS_GROUP' => 'Gruppe',
    'LBL_EXPORT_CREATED_BY' => 'Ersteller',

    'LBL_DATE_MODIFIED' => 'Geändert am:',
    'LBL_DATE_ENTERED' => 'Erstellt am:',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_HIDEOPTIONS' => 'Optionen verstecken',
    'LBL_SHOWOPTIONS' => 'Optionen anzeigen',

    'LBL_INBOUND_PROCESSING_ALLOWED' => 'Inbound Mail Processing aktiv'
);
?>
