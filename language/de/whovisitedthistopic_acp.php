<?php
/**
*
* @package phpBB Extension - Who Visited This Topic
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS'				=> 'Aktiviere „Wer dieses Thema besucht hat“ in den Themen',
	'WHOVISITEDTHISTOPIC_TOPIC_SETTINGS_EXPLAIN'		=> 'Dadurch wird in viewtopics angezeigt, wer dieses Thema besucht hat.',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS'				=> 'Aktiviere den Themenzähler für „Wer hat dieses Thema besucht“.',
	'WHOVISITEDTHISTOPIC_COUNT_SETTINGS_EXPLAIN'		=> 'Dadurch wird der Zähler „Wer hat dieses Thema besucht“ in den Themen angezeigt.',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR'					=> 'Aktiviere die Avatare in Themen für „Wer hat dieses Thema besucht“',
	'WHOVISITEDTHISTOPIC_SHOW_AVATAR_EXPLAIN'			=> 'Dadurch werden die Avatare „Wer hat dieses Thema besucht“ in den Themen angezeigt.',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS'			=> 'Aktiviere „Wer hat dieses Thema besucht“ im Profil',
	'WHOVISITEDTHISTOPIC_MEMBERPAGE_SETTINGS_EXPLAIN'	=> 'Dadurch wird im Profil angezeigt, wer dieses Thema besucht hat.',
	'WHOVISITEDTHISTOPIC_SETTING'						=> 'Lege in den Themen den Wert für „Wer hat dieses Thema besucht“ fest',
	'WHOVISITEDTHISTOPIC_SETTING_EXPLAIN'				=> 'Wert einstellbar von 2 bis 255 Mitgliedern. <em>Standard ist 10.</em>',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING'					=> 'Lege den Wert für die zuletzt besuchten Themen im Profil fest',
	'WHOVISITEDTHISTOPIC_VISIT_SETTING_EXPLAIN'			=> 'Wert einstellbar von 2 bis 255. <em>Standard ist 10.</em>',
	'WHOVISITEDTHISTOPIC_DISABLED_TOPIC'				=> 'Deaktiviert setzt „Wer dieses Thema in Themen besucht hat“ auf „Ja“, um einen Wert einzugeben',
	'WHOVISITEDTHISTOPIC_DISABLED_MEMBERPAGE'			=> 'Deaktiviert setzt „Aktivieren, wer dieses Thema im Profil besucht hat“ auf „Ja“, um einen Wert einzugeben',
	'WHOVISITEDTHISTOPIC_SETTINGS_EXPLAIN'				=> 'Gehe im Abschnitt „Gruppenberechtigungen“ zur Registerkarte <em><strong>Wer hat dieses Thema besucht?</strong></em>, um die Berechtigungen für jede Gruppe anzupassen.',
	'WHOVISITEDTHISTOPIC_MEMBERS'						=> 'Mitglieder im Viewtopic ausschließen',
	'WHOVISITEDTHISTOPIC_MEMBERS_EXPLAIN'				=> 'Hier kannst Du die Benutzer verwalten, die Du ausschließen (nicht sehen) oder aus der Ausschlussliste entfernen möchtest.<br><strong>Hinweis:</strong> Jeder Benutzer in einer neuen Zeile.',
	'WHOVISITEDTHISTOPIC_MEMBERS_PROFILE'				=> 'Mitglieder in der Profilansicht ausschließen',
	'WHOVISITEDTHISTOPIC_MEMBERS_PROFILE_EXPLAIN'		=> 'Hier kannst Du die Benutzer verwalten, die Du ausschließen (nicht sehen) oder aus der Ausschlussliste entfernen möchtest.<br><strong>Hinweis:</strong> Jeder Benutzer in einer neuen Zeile.',
]);
