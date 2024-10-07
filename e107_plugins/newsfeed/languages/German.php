<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - german language file
|     UTF-8 encoded
|     translated for: http://www.e107cms.de
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $HeadURL: https://e107german.svn.sourceforge.net/svnroot/e107german/trunk/e107_0.7/e107_langpacks/e107_plugins/newsfeed/languages/German.php $ 
|     $Revision: 115 $
|     $Date: 2010-09-26 06:00:45 +0200 (So, 26. Sep 2010) $
|     $Id: German.php 115 2010-09-26 04:00:45Z lars78 $
|     $Author: lars78 $
+----------------------------------------------------------------------------+
*/


define("NFLAN_01", "Newseinspeisungen");
define("NFLAN_02", "Mit diesem Plugin können Sie Newsfeeds von anderen Webseiten auf Ihrer Seite einspeisen, abhängig von Ihren Voreinstellungen.");
define("NFLAN_03", "Newsfeeds Konfigurieren");
define("NFLAN_04", "Das Newsfeedplugin wurde erfolgreich installiert. Für Konfiguration und/oder Newsfeeds hinzuzufügen, gehen Sie auf die Admin Hauptseite und klicken Sie auf Newsfeeds im Pluginbereich.");
define("NFLAN_05", "Bearbeiten");
define("NFLAN_06", "Löschen");
define("NFLAN_07", "Bestehende Newsfeeds");
define("NFLAN_08", "Newsfeeds Erste Seite");
define("NFLAN_09", "Newsfeed erstellen");
define("NFLAN_10", "URL zum rss Feed");
define("NFLAN_11", "Pfad zum Bild");
define("NFLAN_12", "Aktivierung");
define("NFLAN_13", "Nirgends (inaktiv)");
define("NFLAN_14", "Nur im Menü");
define("NFLAN_15", "Newsfeed erstellen");
define("NFLAN_16", "Newsfeed aktualisieren");
define("NFLAN_17", "Geben Sie 'default' ein um das mitgelieferte Bild des Newsfeeds zu verwenden. Falls Sie ein eigenes Bild verwenden wollen, geben Sie die komplette URL zum Bild ein. Falls Sie kein Bild möchten, einfach frei lassen.");
define("NFLAN_18", "Aktualisierungsintervall in Sekunden");
define("NFLAN_19", "z.B., 3600: Newsfeeds werden jede Stunde aktualisiert");
define("NFLAN_20", "Nur auf der Newsfeedhauptseite");
define("NFLAN_21", "In beiden Menüs und der Newsfeedseite");
define("NFLAN_22", "Wählen Sie hier, wo der Newsfeed angezeigt werden soll.");
define("NFLAN_23", "Newsfeed in Datenbank eingefügt.");
define("NFLAN_24", "Erforderliche Felder frei gelassen.");
define("NFLAN_25", "Newsfeed in Datenbank aktualisiert.");
define("NFLAN_26", "Aktualisierungsintervall");
define("NFLAN_27", "Optionen");
define("NFLAN_28", "URL");
define("NFLAN_29", "Erreichbare Newsfeeds");
define("NFLAN_30", "Feed Name");
define("NFLAN_31", "Zurück zur Newsfeed-Liste");
define("NFLAN_32", "Es kann kein Feed mit dieser Identifizierungsnummer gefunden werden.");
define("NFLAN_33", "Veröffentlichungsdatum: ");
define("NFLAN_34", "nicht bekannt");
define("NFLAN_35", "geschreiben von ");
define("NFLAN_36", "Beschreibung");
define("NFLAN_37", "Kurze beschreibung des Feeds, geben Sie 'default' ein um die Beschreibung zu nutzen die im Feed gegeben wird");
define("NFLAN_38", "Überschriften");
define("NFLAN_39", "Details");
define("NFLAN_40", "Newseinspeisung gelöscht");
define("NFLAN_41", "Es sind keine Newseinspeisungen bis jetzt angelegt");

/*define("NFLAN_42", "<b>&raquo;</b> <u>Feed Name:</u>
	Der eindeutige Name zum Feed, kann frei gewählt werden.
	<br /><br />
	<b>&raquo;</b> <u>URL zum RSS Feed:</u>
	Die Adresse sed RSS Feeds
	<br /><br />
	<b>&raquo;</b> <u>Pfad zum Bild:</u>
	Falls der Feed ein Bild vorgegeben hat, geben Sie bitte 'default' ein um es zu nutzen. Um Ihr eigenes Bild zu nutzen, geben Sie es bitte nur mit vollem Pfad zum Bild an. Um kein Bild zu nutzen, einfach frei lassen.
	<br /><br />
	<b>&raquo;</b> <u>Beschreibung:</u>
	Geben Sie eine kurze Beschreibung des Feeds an, oder geben Sie 'default' um die Beschreibung des Feeds zu nehmen (falls vorhanden).
	<br /><br />
	<b>&raquo;</b> <u>Aktualisierungsintervall in Sekunden:</u>
	Die Zeitspanne, in Sekunden, bis der Feed aktualisiert wird, z.B., 1800: 30 Minuten, 3600: eine Stunde.
	<br /><br />
	<b>&raquo;</b> <u>Aktivierung:</u>
	Wo wollen Sie den Feed angezeigt haben. Um sie in Menüs angezeigt haben zu wollen müssen Sie auf die  <a href='".e_ADMIN."menus.php'>Menüseite</a> gehen.
	<br /><br />Eine gute Seite für Newsfeedseinspeisungen und zugehörigen URLs finden Sie unter <a href='http://www.syndic8.com/' rel='external'>syndic8.com</a> oder <a href='http://feedfinder.feedster.com/index.php' rel='external'>feedster.com</a>");
*/
define("NFLAN_42", "[h=4]Newsfeed Title[/h]
	Enter a name to identify the newsfeed accurately.
	[h=4]URL to RSS Feed[/h]
	The RSS provider will give you a web address (URL) for the newsfeed.
	[h=4]Path to Image[/h]
	If the provider specifies an image to use, enter 'default' to use it or choose use your own image by entering the immage address. Leave blank to use no image at all.
	[h=4]Description[/h]
	Enter a short description for the feed, or 'default' to use the description defined in the feed (if there is one).
	[h=4]Update Interval[/h]
	Enter the number of seconds before the feed is updated. 
	For example, 1800 = 30 Minutes, 3600 = 1 Hour, 86400 = 1 Day.
	[h=4]Activation[/h]
	Newsfeeds can be displayed in the menu only or on the newsfeed page. Enter the details where feeds should be displayed. To see newsfeeds in e107 menus you will need to activate the [b]Newsfeeds Menu[/b] in [link=".e_ADMIN."menus.php]Menu Manager[/link].
	[h=4]Tip[/h]
	There are many feed direcotries on the web, try [link=https://www.dmoz.org/Computers/Internet/On_the_Web/Syndication_and_Feeds/RSS/Directories/ external]dmoz[/link] or [link=http://www.feedster.com/ external]feedster.com[/link]");





define("NFLAN_43", "Newsfeed Hilfe");
define("NFLAN_44", "Ansicht");
define("NFLAN_45", "Eintragsanzahl im Menü");
define("NFLAN_46", "Eintragsanzahl auf der Hauptseite");
define("NFLAN_47", "0 oder leeres Feld bedeutet, dass alle Einträge angezeigt werden.");
define("NFLAN_48", "Es ist nicht möglich die Zeilendaten in der Datenbank zu speichern.");
define("NFLAN_49", "Es ist nicht möglich die Rss Daten zu entschlüsseln - bitte non-standard syntax verwenden");

