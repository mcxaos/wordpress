<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VlQ<fG4|vdxv%kF&.+^4o$w<<SX `t}UDbURn87oFxe8+E.L(u)Jm*_ QoH0;%A?');
define('SECURE_AUTH_KEY',  'U&_~H}p-k:Auh8WA0~aOWx-1;?[nRrJ20M;}Tb@~$D;})Wx*BLQ}KGU8OVVnp=}?');
define('LOGGED_IN_KEY',    'Eg&L2eP9>F<7^WLl+%kM/<`byGIrtY%1.O#`c@I|rk?8,nWWQxm2]Rfj[=%}wB5@');
define('NONCE_KEY',        'b7H0Q4gros}0PM8)%aA$?Y.M.$^NWiX7G+WVf&2e]r?vU4g@%L8e=3pxK=]-98Q!');
define('AUTH_SALT',        'BUE_rL<`SEcNk2>-+S6_rNTO~]}ox!@=)FeogO{f}TEUiwcE<mkU!P9z&S[P[PY0');
define('SECURE_AUTH_SALT', 'd~_h`sD>>/ 7JbS%MJ~^&Sk>ucB_r.q>C=2+`C6N-aa]miBDa+|)E8E<qKx#5r7Z');
define('LOGGED_IN_SALT',   'RB8eXmG#^YVSqs@rQZtwluN&[x:_EXI7zn1ZO.]-,+,Q)KDAPS~^0-L/sU:m-R4;');
define('NONCE_SALT',       'OvM7a({+J1?st;<3rg%^)p#3Tct:G#QQ%`(V<D}?na: 7n_YZ>X~yxbE9^R/ZcV2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
