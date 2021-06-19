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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'Y-RWvs)<qXEOaWNhTzztjNvEhLUQ_3<r+$u>f/hF5M`U/Xy5cASR>(+wT}RMev3n' );
define( 'SECURE_AUTH_KEY',  '.)q:W3}W?7I;ts*1t>1?2sg &:q]Q}RBs4Hf]bFgSHL(n3Q wI9]xlom*~~86rzw' );
define( 'LOGGED_IN_KEY',    'J,VS~G?g%I`UMs944^}Ir1DH?W{q/NZ;Yz8 F}m_1STa+`;7D=7A4~9PTzn]_mtS' );
define( 'NONCE_KEY',        '58dh]%q4xV@ }_f6U*A:%}3ug;*xjP+]&E=B[,766eC,H8_=+$%5<}8*W17bxV.o' );
define( 'AUTH_SALT',        ':OF pFDB)gT1g[JBx*RwACX s*/Yfq7)*+X ?0jA?[s=k<ZU0d058P%qe?2:QKf~' );
define( 'SECURE_AUTH_SALT', 'Gf!|b:|BFrCRkngN3`^2A;(ko2y#*C!!Pg|V?_8q^bNwgfKoF`_8Euuy~s_]V;fW' );
define( 'LOGGED_IN_SALT',   'wT~skm-HG8kl@%~$qlrAtcvB11.qYVO>+lAE^:GoxJ?|TAvV;zK>_+-jd(2b/] x' );
define( 'NONCE_SALT',       '?Y}9ur?RcL%5,$PJ)n|2O3(*~I6;Pg*)CzUj*).Qj{CVF[tIUF+]j=*tN<jwv ws' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
