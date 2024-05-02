<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'MyDB' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Nq{D<:On[B%`s>+[Rg8=`jWX2=x$up7iCt{O83C/bqGz13IcX|kIQpw;L>yFjbg^' );
define( 'SECURE_AUTH_KEY',  '}i}eXGZCzVFzb{0[f&$?N 1X>6M@J:dEte qi7-zb_^WkrC!>Xpk<3)h}8O[2sjE' );
define( 'LOGGED_IN_KEY',    '{xkCBDF;o8AYUD+wb;Je$Wetw1b:WB-xbe>pZ>s_qdAG] f|`2x#%o>XC,t(&gtr' );
define( 'NONCE_KEY',        '<HtyD7kSAJjm!,eX$<ya3Xi/<)WpQDjq_)>nN[A&In:YG{74{}h>$b)X#|KeQD q' );
define( 'AUTH_SALT',        '!IrHFYSaqGVb{;5~^P3{;NYI0IELknx zR{vcYGB6@}t1XDjBi`_a|W<,2yioBpp' );
define( 'SECURE_AUTH_SALT', '}au(^)98.@<Xx*41zYL=^R2`I$P;|hs)T._D6lCcE@d[fSxta?}?{3>5F_nZi@JQ' );
define( 'LOGGED_IN_SALT',   'u=;A0@R=S%f=&(V?Yx/jBBdhR#DiD:4e0LI>S|E~R*:3|y`heY38F*a)6s1-H+Zi' );
define( 'NONCE_SALT',       'E4FacgW*Be;m@i@~R*y}m-8g.N %+?L.wScm4&>V;*5D~OFQzgcvK,*)JGL-k}9t' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
