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
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aZ-j;em($B;SXm /vv{[q-l-QVFzi8x6/ tYe08k&4wgQd9mtC+P=uYnWWGIx3I&' );
define( 'SECURE_AUTH_KEY',  '<(KVXrj!DWXj,<^6(1D~}46jZ:8Z(y~qiz&=/kX90#x_xb41rqD0FqH;,DOnkbK&' );
define( 'LOGGED_IN_KEY',    'b=ffms*2`>;F$<1s&`{< m /:3Rs~ =~3|Yn4tjotkGs3-{^/yo/IHCBM@.#O&qY' );
define( 'NONCE_KEY',        '{_u&E+x>@vUbV0- ^[D(LS~CP&!&qo?IL</a4Z0@|gtTGSpfwNQOO VTnnc}.R6X' );
define( 'AUTH_SALT',        'Pk-iWO-9sJrG 2klaq9j#k8*.DDtOH2DSepYXDNzq){YO?z)C7]EOxhWhO?Ic$~Y' );
define( 'SECURE_AUTH_SALT', 'HGtYx-AXYIEX`b.lQX-!*ke4jx5];,F?&a,w?+-2b3DNP:)0[2^LftON`8,M^mnv' );
define( 'LOGGED_IN_SALT',   '9xdR}h8XlUi#.syu$i8Fy=4,Rx*ZZW#3tij$(`%6oKhG8l<WtTM*f$?}|)6Z}ig|' );
define( 'NONCE_SALT',       '4i}oM>JQm^CQx%9/G%m4?6xWj4r%o.ueQ[wLC.a$=-Qaw70ILzmR$Ot)]i -U=P@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'td_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
