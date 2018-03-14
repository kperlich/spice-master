<?php
// created: 2018-03-14 10:52:54
$mod_strings = array (
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Erstellt am',
  'LBL_DATE_MODIFIED' => 'Geändert am',
  'LBL_MODIFIED' => 'Geändert von',
  'LBL_MODIFIED_ID' => 'Geändert von ID',
  'LBL_MODIFIED_NAME' => 'Modifizierter Benutzer',
  'LBL_CREATED' => 'Erstellt von',
  'LBL_CREATED_ID' => 'Ersteller',
  'LBL_DESCRIPTION' => 'Beschreibung:',
  'LBL_DELETED' => 'Gelöscht',
  'LBL_NAME' => 'Verkaufschance Name',
  'LBL_CREATED_USER' => 'Erstellter Benutzer',
  'LBL_MODIFIED_USER' => 'Veränderter Benutzer',
  'LBL_LIST_NAME' => 'Name',
  'LBL_ASSIGNED_TO_ID' => 'Bearbeiter',
  'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
  'LBL_MODULE_NAME' => 'Verkaufschancen',
  'LBL_MODULE_TITLE' => 'Verkaufschancen: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Verkaufschancen Suche',
  'LBL_VIEW_FORM_TITLE' => 'Verkaufschancen Ansicht',
  'LBL_LIST_FORM_TITLE' => 'Verkaufschancen Liste',
  'LBL_OPPORTUNITY_NAME' => 'Verkaufschance Name:',
  'LBL_OPPORTUNITY' => 'Verkaufschance:',
  'LBL_INVITEE' => 'Kontakte',
  'LBL_CURRENCIES' => 'Currencies',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_AMOUNT' => 'Betrag',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_LIST_DATE_CLOSED' => 'Schließen',
  'LBL_LIST_SALES_STAGE' => 'Verkaufsphase',
  'LBL_ACCOUNT_ID' => 'Firma ID',
  'LBL_CURRENCY_ID' => 'Währungs ID',
  'LBL_CURRENCY_NAME' => 'Währungsname',
  'LBL_CURRENCY_SYMBOL' => 'Währungssymbol',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Währung aktualisieren',
  'UPDATE_DOLLARAMOUNTS' => 'Euro Beträge aktualisieren',
  'UPDATE_VERIFY' => 'Beträge überprüfen',
  'UPDATE_VERIFY_TXT' => 'Überprüft, ob alle angegebenen Werte gültige Dezimalwerte sind (bestehend aus den Zahlen 0 - 9 und dem Dezimaltrennzeichen)',
  'UPDATE_FIX' => 'Beträge reparieren',
  'UPDATE_FIX_TXT' => 'Versucht ungültige Beträge über das Setzen korrekter Dezimalzeichen zu korrigieren. Für jeden geänderten Betrag existiert eine Sicherungskopie im Datenbankfeld amount_backup. Falls Sie diese Funktion aufrufen und Fehler feststellen, müssen Sie vor einem erneuten Versuch erst die alten Beträge, die sich im Backup befinden, wieder herstellen, da ansonsten Ihre ursprünglichen Einträge in der Datenbank mit den fehlerhaften Beträgen überschrieben werden.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Hier werden die Beträge der Angebote basierend auf dem angegebenen Wechselkurs neu berechnet. Diese Werte werden für die Graphiken und die Währungstabellen genutzt.',
  'UPDATE_CREATE_CURRENCY' => 'Neue Währung:',
  'UPDATE_VERIFY_FAIL' => 'Datensatz konnte nicht verifiziert werden',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktueller Betrag:',
  'UPDATE_VERIFY_FIX' => 'Berichtigter Betrag:',
  'UPDATE_INCLUDE_CLOSE' => 'Auch abgeschlossenen Angebote überprüfen',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Neuer Betrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Neue Währung:',
  'UPDATE_DONE' => 'Fertig',
  'UPDATE_BUG_COUNT' => 'Gefundene Fehler, deren Behebung versucht wurde:',
  'UPDATE_BUGFOUND_COUNT' => 'Gefundene Fehler:',
  'UPDATE_COUNT' => 'Bearbeitete Einträge:',
  'UPDATE_RESTORE_COUNT' => 'Wiederhergestellte Beträge:',
  'UPDATE_RESTORE' => 'Betrag wiederherstellen',
  'UPDATE_RESTORE_TXT' => 'Stellt die Beträge wieder her, welche während der Reparatur gesichert wurden.',
  'UPDATE_FAIL' => 'Update konnte nicht durchgeführt werden -',
  'UPDATE_NULL_VALUE' => 'Betragsfeld ist leer und wird deshalb auf 0 gesetzt -',
  'UPDATE_MERGE' => 'Währungen zusammenführen',
  'UPDATE_MERGE_TXT' => 'Zusammenführen mehrerer Währungen in eine. Falls Sie feststellen, dass mehrere Einträge mit der gleichen Währung vorhanden sind, können Sie diese zusammenführen. Dies gilt analog für alle anderen Module.',
  'LBL_ACCOUNT_NAME' => 'Firmenname:',
  'LBL_AMOUNT' => 'Betrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Betrag Standardwährung:',
  'LBL_CURRENCY' => 'Währung',
  'LBL_DATE_CLOSED' => 'Abschluss geplant:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_NEXT_STEP' => 'Nächster Schritt:',
  'LBL_LEAD_SOURCE' => 'Quelle:',
  'LBL_SALES_STAGE' => 'Verkaufsphase:',
  'LBL_PROBABILITY' => 'Wahrscheinlichkeit (%):',
  'LBL_DUPLICATE' => 'Eventuelles Verkaufschancen-Duplikat',
  'MSG_DUPLICATE' => 'Die Verkaufschance die Sie gerade erstellen, könnte eine Dublette einer bereits bestehenden Verkaufschance sein. Verkaufschancen mit ähnlichen Namen sind unten aufgeführt.<br>Drücken Sie auf Speichern um fortzusetzen oder auf Abbrechen um zum Modul zurückzukehren ohne die Verkaufschance zu speichern.',
  'LBL_NEW_FORM_TITLE' => 'Neue Verkaufschance',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_OPPORTUNITY_LIST' => 'Verkaufschancen',
  'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, sonst kann der Datensatz nicht gelöscht werden.',
  'LBL_TOP_OPPORTUNITIES' => 'Liste der Top-Verkaufschancen',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich aus dieser Verkaufschance entfernen?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Möchten Sie dieses Verkaufschance wirklich von diesem Projekt entfernen?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkaufschancen',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
  'LBL_RAW_AMOUNT' => 'Ges. Summe',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Meine geschlossenen Verkaufschancen',
  'LBL_TOTAL_OPPORTUNITIES' => 'Summe Verkaufschancen',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnene Verkaufschancen',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagnen',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
  'LABEL_PANEL_ASSIGNMENT' => 'Aufgabe',
  'LNK_IMPORT_OPPORTUNITIES' => 'Verkaufschancen importieren',
  'LBL_EDITLAYOUT' => 'Layout bearbeiten',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagnen ID',
  'LBL_OPPORTUNITY_TYPE' => 'Verkaufschancentyp',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesen Benutzer',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Bearbeiter:',
  'LBL_EXPORT_CREATED_BY' => 'Ersteller',
  'LBL_EXPORT_NAME' => 'Name',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Verknüpfte Kontakt E-Mails',
  'LBL_PROPOSALS_LINK' => 'Angebote',
  'LBL_GUIDE_NO_STAGE_DESC' => 'Keine Beschreibung vorhanden...',
  'LBL_GUIDE_NO_STAGE_CHECKS' => 'Keine Checks gefunden...',
  'LBL_LOSS_REASON' => 'Ablehungsgrund',
  'LBL_BUYINGCENTER' => 'Einkaufsgremium',
);