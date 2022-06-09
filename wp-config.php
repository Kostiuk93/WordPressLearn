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
define( 'DB_NAME', 'wpbaza' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wpbaza_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '+|O#FPW%u&[zE5{D6`y%8OX&L.5)+~+{DZC7Be%>cv_o{9|-qJgCE-47*t$qdn8>' );
define( 'SECURE_AUTH_KEY',  'u2j35Tc]8E^2@0{$Z56V>.0/>F~URs7v@z&%}[;SXi-4/6];=n9HiN#V_@)s/D#`' );
define( 'LOGGED_IN_KEY',    'jyWHal3A>E,Yh m(+<L*)iY*;}F*W[-UP.BkLs6CZ4:R[g~ mD+`xu&Ay|p(y51t' );
define( 'NONCE_KEY',        'ib&F,#N`>`Kg)*x7g=JJeOeM$/&i`?/vm}bM%!s>6uunJV5k|&A_7Ti+3.GK#!SB' );
define( 'AUTH_SALT',        'VRP8WS7w~d5`Co<}hY7$ <RrYIVQYPZ(zrK<_we9T3#|#M1*J}Q#?/)+kKf%pV>_' );
define( 'SECURE_AUTH_SALT', '1q%oAu`Rv)[t!gl>I;ycs :]Rx|=>BSM4WLN%l#xYDfie(o>z%j+@%r&KH[;1E;l' );
define( 'LOGGED_IN_SALT',   'cHWdeT77!yxE~&;x@;/3BS_@NBX rafiP-o}!6syTcqt|{rAZr8eWHmbf6<X6raa' );
define( 'NONCE_SALT',       '$V8bYE_Gfy(TpLr]k*pFi]NW%NKKZU]Kp%>y{[ mFJegv^aXfo>;yEM08O-b=LBo' );

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
