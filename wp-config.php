<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/kolegait/domains/zarnecki.pl/cdv/pjarkowski/wp/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'kolegait_20818');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'kolegait_20818');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '20818');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'sql.s24.vdl.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j[Psqejz+WY++?-+_4-g|fQhySS(RTA3sG87BTbl3c@#s|KZ/lYMyjwAYc(7<<-E');
define('SECURE_AUTH_KEY',  '!>gq} 6YlsTlla6A0<|}ltS}0Z cx}+|mmES|#-8`+,T0dS(z;,#!i WC4.[e^D-');
define('LOGGED_IN_KEY',    'sBf>.2z7O8@ttj]i<}O,+fP@b47c#3{|s8_`v!V4}it|C(T!Bj:YW15iX?{>o^xN');
define('NONCE_KEY',        'wASu{$![wrt=<qbX_DH^I^#s.;YC$zSvIk@:+vK.da^[D11b(ufh-R//){GvIJL(');
define('AUTH_SALT',        '_uPQx^Fc,6Dl|+&DpjFE3^W5mCpTE6Q0/._DU18%m4=8|V+VVF-9!`Rlr=O)!=c2');
define('SECURE_AUTH_SALT', '-Pth#!2GE9:8*}c4K<>oNTcA,QuqqT,OQ--iQ@Xm9FRc*A+<$jY1o$*lo?(8jO&)');
define('LOGGED_IN_SALT',   'K;;xC5ik[{?1lBJQ[6]jm5(q0?p)LbHR@(cEoZFpYVg&@1+<([w{od>7a_%]F`pX');
define('NONCE_SALT',       'P2(Q[>:z,A-<2ez7]qFQzi-TkLt(g3_=|dhif$_i,i3#t/~:i/g2A1GQ/U#;i-U$');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
