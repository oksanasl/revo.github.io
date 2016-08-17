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
define('DB_NAME', 'revolution');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '?]oH{3 @7}+1:OCYcQPt-7.;[w-E[(,_@fc)56Fnq9$$!_)S((95Hs4.X&Zkhy9%');
define('SECURE_AUTH_KEY',  'vT%UUP|qn<YMRoX)H&4H=:N]6lkz4pDQJv-9B*k9]?Cqtn6klW@0u%3722|z1@,i');
define('LOGGED_IN_KEY',    '~kfARqIdAw=?7vwE7tL!C&354s0LC>o#p?a~:).Jn?b7NtNShXQ+gOHp[9fOSz#L');
define('NONCE_KEY',        '?N5qU~_<0GnAj5*|pE)Tn3bSdus@.t_.*NTS9K=p^,u^ UX{=7{u(}_9lEsuU*u4');
define('AUTH_SALT',        'v&_I+dsV*~vpd!W5_w>}a_S:}BF0k*jT3T4i1-^G!Uvqj+ZVv}##)L_Hpd5WP []');
define('SECURE_AUTH_SALT', 'AE>}S3;fd(=WXrQ6aY<,&}})#<aRkN&%1b,s!d%@pK/}C46=ui>,&-yP%wu%_~vR');
define('LOGGED_IN_SALT',   '-M)c98a]pnvN^X-)OKZQ}O1PPF2Ikk/!zk07Pk1nZL9>b!5& !P&Hfm^v<$5b~mA');
define('NONCE_SALT',       'fd6:6s-WplgpVP#6nUm]|+*7jraxGb=efID>D1lQG%?zo[u,RhRa[l%UT[=C220}');

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
