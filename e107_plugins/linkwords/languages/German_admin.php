<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2010 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Linkwords plugin - language file (only needed for admin)
 *
 * $Id*
 */
define("LWLAN_4", "Noch keine Links definiert.");
define("LWLAN_5", "Wörter");
define("LWLAN_6", "Link");
define("LWLAN_7", "Aktivieren?");
define("LWLAN_11", "vorhanden Link Wörter");
define("LWLAN_18", "soll dieses Link Wort wirklich gelöscht werden?");
define("LWLAN_20", "Dieser Link Wort Eintrag konnte nicht gefunden werden.");
define("LWLAN_21", "Wort zu Autolink (oder Komma getrennte Liste von Wörtern)");
define("LWLAN_22", "Aktivieren?");
define("LWLAN_23", "Link Wörter Administration");
define("LWLAN_24", "Wörter verwalten.");
define("LWLAN_26", "Bereiche, in denen Link Wörter aktiviert werden können.");
define("LWLAN_27", "Dies ist der 'Kontext' des angezeigten Textes.");
define("LWLAN_28", "Seiten, auf denen Link Wörter deaktiviert werden sollen.");
define("LWLAN_29", "Gleiches Format wie die Sichtbarkeit des Menüs.Eine Übereinstimmung pro Zeile. Gebe eine teilweise oder vollständige URL an.Ende mit '!' Für die genaue Übereinstimmung des Endteils des Links");
define("LWLAN_31", "Link Wort hinzufügen/bearbeiten");
define("LWLAN_33", "Titelbereiche");
define("LWLAN_34", "Begriffe Überblicke");
define("LWLAN_35", "Textinhalt");
define("LWLAN_36", "Beschreibungen (Links u.s.w)");
define("LWLAN_40", "Vom Benutzer eingegebene Titel (z.B. Forum)");
define("LWLAN_41", "Benutzerdefinierter Text (z.B. Forum)");
define("LWLAN_50", "Tooltip");
define("LWLAN_51", "Inaktiv");
define("LWLAN_52", "Nur Link Wort");
define("LWLAN_53", "Nur Tooltip");
define("LWLAN_54", "Link Wort und Tooltip");
define("LWLAN_55", "Link im neuen Fenster öffnen");
define("LWLAN_56", "In neue Seite öffnen");
define("LWLAN_58", "Pref Hook umgewandelt in 0.8 Format");
define("LWLAN_59", "Ajax Funktionalität aktivieren.");
define("LWLAN_60", "LW ID");
define("LWLAN_62", "Tooltip ID (LW ID)");
define("LWLAN_63", "Nur positive Ganzzahlen");
define("LWLAN_64", "Link auf aktueller Seite unterdrücken");
define("LWLAN_65", "Wenn markiert, unterdrückt den klick baren Link, wenn Punkte auf aktuelle Seite");
define("LAN_LW_HELP_00", "Link Wörter Hilfe");
define("LAN_LW_HELP_01", " <b> Bereiche, die es ermöglichen </b><br /> viele Textbereiche haben einen \'Kontext \', und Link Wörter werden nur in Bereichen angezeigt, die diesem Kontext entsprechen.<br /><br /> <b> Link Wörter Deaktivieren </ b><br /> Link Wörter können auf bestimmten Seiten oder auf Seiten, die einem Muster entsprechen, deaktiviert werden.Geben Sie diese hier ein (gleiche Syntax wie für Menüs), ein Muster pro Zeile.Wenn das Muster in \'!\' endet, entspricht dies dem 'Ende der Abfrage' und ist gewöhnlich eine exakte Übereinstimmung.Andernfalls wird eine URL mit der angegebenen Zeichenfolge Übereinstimmen.<br /> Beachten Sie, dass Link Wörter <i> nie </ i> auf Admin-Seiten angezeigt werden.br /> <br /><b> Ajax-Funktionalität aktivieren </ b> <br /> Die Tooltips können Ajax verwenden, um Informationen für die Anzeige zu erhalten. Dies erfordert in der Regel einige benutzerdefinierte Codierung.<br /><b> Link auf aktueller Seite unterdrücken </ b> <br /> Normalerweise ist es sinnlos, dass der Benutzer auf einen Link klicken kann, wenn er bereits auf der Seite ist.Markieren Sie dieses Kontrollkästchen, um die Option zu entfernen <br />");
/*define("LAN_LW_HELP_02", " <b>Definieren Sie die Wörter, die anklickbare Links werden, oder den Text anzeigt wenn die Maus darüber fährt, hier <br /><br /><b </u> Wort zu Link </ u></ b> <br />Dabei wird nicht zwischen Groß- und Kleinschreibung unterschieden.
Für mehrere Wörter, die auf dieselben Links und Tooltips zuordnen, trennen Sie sie durch Kommas (ohne Leerzeichen) <br /><br /><b> </u> Link </u></ b> <br /> Definieren Sie hier einen anklickbaren Link. Wenn es sich um einen externen Link handelt, muss [i] 'http://\' beginnen. Wenn es sich um eine Verknüpfung innerhalb dieser Seite handelt, können die normalen Konstanten {e_XXX} verwendet werden.<b><br/><br/><b><u> Tooltip </u></b> <br/> Dies definiert den Text, der angezeigt werden soll, wenn die Maus des Benutzers über das Wort geht.br /><br /><b><u> LW-ID (Tooltip-ID) </ u></ b><br /><br /> Dies definiert eine optionale numerische ID für die Ajax-Verarbeitung.Wenn leer, wird die Datenbank-Datensatznummer verwendet.<br /><br /><b> <u> Aktivieren? </ u></ b><br />Legt fest, welche Optionen aktiv sind.");
*/
//define("LAN_LW_HELP_02", "The tooltips can use Ajax to get information for display. This usually requires some custom coding.");

define("LWLAN_66", "Custom CSS class");
define("LWLAN_67", "Max. links/tips");
// Preferences
//define("LAN_LW_HELP_01", "Many areas of text have an associated 'context', and linkwords will only be displayed in areas matching that context.");
define("LAN_LW_HELP_02", "The tooltips can use Ajax to get information for display. This usually requires some custom coding.");
define("LAN_LW_HELP_03", "Usually its pointless for the user to be able to click a link if they're already on the page that it links to. When this option is turned ON, the linkwords are not triggered in this case.");
define("LAN_LW_HELP_04", "Linkwords may be disabled on specific pages, or pages matching a pattern. Enter these here (same syntax as for menu visbility), one pattern per line. If the pattern ends in '!', this corresponds to 'end of query', and is usually an exact match. Otherwise any URL containing the specified string will match.");
define("LAN_LW_HELP_05", "Will add this class to all generated links.");
// Reserve numbers for further prefences help texts

// Create linkwords
define("LAN_LW_HELP_10", "Here you can define the words which become clickable links, or which display text on mouseover.");
define("LAN_LW_HELP_11", "This is case-insensitive. For multiple words mapping to the same links and tooltips, separate them with commas (no spaces)"); 
define("LAN_LW_HELP_12", "Define a clickable link here. If its an external link, it MUST begin with 'http(s)://'. If its a link within this site, the normal {e_XXX} constants may be used."); 
define("LAN_LW_HELP_13", "Defines which options are active."); 
define("LAN_LW_HELP_14", "This defines the text to be displayed when the user's mouse passes over the word.");
define("LAN_LW_HELP_15", "Maximum amount of the same linkwords. Must be positive number. Used when the same word is found multiple times in a piece of text."); 
define("LAN_LW_HELP_16", "This defines an optional numeric ID to be used with Ajax processing. Must be a postiive number. If blank, the database record number is used"); 
define("LAN_LW_HELP_17", "When turned on, the link is opened in new browser tab/window"); 



