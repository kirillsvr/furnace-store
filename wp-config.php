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
define('DB_NAME', '');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'jgMzY5:t(/POEv,[sJi`AD-99]7DLC_IbrX,5Us<.,4l|7K)$%^9/XO5sX%nG9r#');
define('SECURE_AUTH_KEY',  '^`~l Z3,^0,fT*J7Z>GeP34L7?FQpsO*;q(j|r/T8xy:H5+%?.[U8x42pCoWN%e ');
define('LOGGED_IN_KEY',    'Y-0b*h;..qF`O:ewEQCy3h_d<w]5c>7#om2d5P]LH[=R$&-9+$Ba$Dg^jI8q+!h*');
define('NONCE_KEY',        'OtHPx@*%ac(Zmu@0?L=zl|0a{vr/3ri<ZIV;LbLPWHPg?QLL;aAU A&U#.nIz%hx');
define('AUTH_SALT',        'nf-TwoyH?yLDmdR+Wb0P[R~sB^i7FPA^f7hMKNIdgC{oQ%|{3^/E1NOnuGVz7.v^');
define('SECURE_AUTH_SALT', 'b3q5n1lxbDBal47]uR/:26@w#v(n#!i]G[~fqd?E!5B^kO0RyT&B>@*^XtUZz2lG');
define('LOGGED_IN_SALT',   'IF |c]P`Sw,:}!US!Fh^u}>D7 %,MDlt>2g(!laqPB.IbZmy96aw=lS% (m,f{8E');
define('NONCE_SALT',       '98>xa=mIRSWWiU;Y~rzTLI<aX_qDN:8/jJV0GYUmCPQC6m|/#~/Nk1w(l5W-L4/O');

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
