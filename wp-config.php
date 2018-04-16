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
define('DB_NAME', 'arkada');

/** Имя пользователя MySQL */
define('DB_USER', 'arkada_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '>yrZulSS,- S 6Kx[&{|k<tT;K^+5h*J%}~=_!|gQ|m~xCh57D`sBAH&VM+MoCT^');
define('SECURE_AUTH_KEY',  'e<.uU~fxT7Ye_y,CR}i|9TW6|zM;GtTDU=0Uh%$[Bn`l/BT|A1N!pRsG7*.fUpw!');
define('LOGGED_IN_KEY',    '${5Y9Bv~#XfGd}Tdy#j7c_70r{7.eKZKY?]iRv`#%#:MP{;__=~b1fko+knOUvKv');
define('NONCE_KEY',        '5diatI-zCE-K!~E0{9CL?f{R][yIG(6E_p s,n?vk/CER$;F$c2vLPf2(.996Rc$');
define('AUTH_SALT',        'z`]iG4y|-y+vKu+o!_4oNG!|p.GRRF0oCCB+~_/|En<[PD)x2-s10&Y3ZcFA4Zwo');
define('SECURE_AUTH_SALT', 'p7:M9Qf8|UHrMmYpELw@?+4b5F?k eEWrKl`r%|3OF?SljvI_5_0)6>qB(MFOze@');
define('LOGGED_IN_SALT',   '+MXL9[Vb ~g#!$l}:ouJ!`mlTQ-8A/tZyQSqZC0_-5@uLAAI}xs-`AWN@VL0[HRH');
define('NONCE_SALT',       '+%Eh-30ylqObk$:eA+b82Kx6Xr{Hgumk~{1/=.0H*sY0N:g!^Lmo6?;Ri`S=7P8H');

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
