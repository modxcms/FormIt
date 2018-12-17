<?php
/**
 * FormIt
 *
 * Copyright 2015 by Wieger Sloot <wieger@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Default Lexicon Topic
 *
 * @package formit
 * @subpackage lexicon
 */
$_lang['formit'] = 'FormIt';
$_lang['formit.intro_msg'] = 'Visa alla inskickade formulär.';

$_lang['formit.form'] = 'Formulär';
$_lang['formit.forms'] = 'Formulär';
$_lang['formit.values'] = 'Värden';
$_lang['formit.date'] = 'Datum';
$_lang['formit.hash'] = 'Hash-nyckel';
$_lang['formit.ip'] = 'IP-adress';
$_lang['formit.form_view'] = 'Visa formulär';
$_lang['formit.form_remove'] = 'Radera formulär';
$_lang['formit.form_remove_confirm'] = 'Är du säker på att du vill radera det inskickade formuläret?';
$_lang['formit.select_context'] = 'Välj kontext';
$_lang['formit.select_form'] = 'Välj formulär';
$_lang['formit.select_start_date'] = 'Välj startdatum';
$_lang['formit.select_end_date'] = 'Välj slutdatum';
$_lang['formit.clear'] = 'Rensa filer';
$_lang['formit.export'] = 'Exportera';
$_lang['formit.encryption'] = 'Kryptering';
$_lang['formit.encryption_msg'] = 'Hantera krypteringen för alla inskickade formulär.';
$_lang['formit.encrypted'] = 'Krypterad';
$_lang['formit.total'] = 'Totalt';
$_lang['formit.form_encryptall'] = 'Kryptera alla inskickade formulär';
$_lang['formit.form_decryptall'] = 'Dekryptera alla inskickade formulär';
$_lang['formit.form_encrypt'] = 'Kryptera';
$_lang['formit.form_encrypt_confirm'] = 'Är du säker på att du vill kryptera alla inskickade formulär?';
$_lang['formit.form_decrypt'] = 'Dekryptera';
$_lang['formit.form_decrypt_confirm'] = 'Är du säker på att du vill dekryptera alla inskickade formulär';

/* Encryption migration */
$_lang['formit.migrate'] = 'Migrera krypterade inskickade formulär';
$_lang['formit.migrate_desc'] = 'Vid en uppgradering till FormIt 3.0 kommer krypteringsmetoden som används för att kryptera inskickade formulär att uppdateras. 
FormIt 2.x använde mcrypt för kryptering och dekryptering, medan 3.0 använder metoder från openssl. För att det ska fungera på rätt sätt behöver redan krypterade formulär migreras från mcrypt till openssl.';
$_lang['formit.migrate_alert'] = 'FormIt har uppdaterats, men dina krypterade inskickade formulär behöver migreras. Klicka här för att starta migreringen.';
$_lang['formit.migrate_status'] = 'Status';
$_lang['formit.migrate_running'] = 'Migreringsprocessen körs i bakgrunden. Vänligen håll den här sidan öppen i din webbläsare. STÄNG INTE DEN HÄR SIDAN!';
$_lang['formit.migrate_success'] = 'Migreringen är slutförd';
$_lang['formit.migrate_success_msg'] = 'Alla dina krypterade inskickade formulär har migrerats.';

$_lang['formit.encryption_unavailable'] = 'OpenSSL-funktionerna openssl_encrypt och openssl_decrypt är inte tillgängliga. 
Vänligen installera OpenSSL på din server. Se http://www.php.net/manual/en/openssl.requirements.php för mer information.';
$_lang['formit.encryption_unavailable_warning'] = 'Varning: OpenSSL-funktionerna openssl_encrypt och openssl_decrypt är inte tillgängliga. Det innebär att du inte kan kryptera dina inskickade formulär. Vänligen installera OpenSSL på din server. 
Besök <a href="http://www.php.net/manual/en/openssl.requirements.php" target="_blank">den här sidan</a> för mer information.';

/* Clean up forms */
$_lang['formit.clean_forms'] = 'Städa upp formulär';
$_lang['formit.window.cleanforms.days_to_delete'] = 'Radera formulär äldre än:';
$_lang['formit.window.cleanforms.days'] = 'dagar.';
$_lang['formit.window.cleanforms.execute'] = 'Städa upp formulär';
$_lang['formit.window.cleanforms.executing'] = 'Städar upp formulär';
$_lang['formit.window.cleanforms.intro_msg'] = 'Den europeiska <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_sv" target="_BLANK">Dataskyddsförordningen (GDPR)</a> 
säger att personuppgifter, som inte längre är nödvändiga att spara, ska raderas. Det här verktyget gör det möjligt att radera sparade formulär med en ålder äldre än ett givet antal dagar. Den här åtgärden kan inte ångras!';
$_lang['formit.window.cleanforms.success_description'] = 'Raderade [[+amount]] formulär.';
