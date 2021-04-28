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
define( 'DB_NAME', 'wp_bt' );

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
define( 'AUTH_KEY',         'u7~HbI|zeA>)[5)4>QxgAIm$6dn!=/p[v/;gO5XtaVU>sg*M#]<pH[R_@~EUM2AS' );
define( 'SECURE_AUTH_KEY',  'emA)]PmS^QqdhxSskK-.v!`TM8#{.t~)]z*_@7^mm@0@YBtP/k4o (s]}u|*SIuQ' );
define( 'LOGGED_IN_KEY',    '@IVH67JtmxRXz25{>c_M|C_5Xw37rua~b=sCHkyD#JVyRpqY&yu0[*|;)Rs4}AH2' );
define( 'NONCE_KEY',        '0%<du50;MnGB`ySz6n$3<(Q&(I|Y{GOExLGo;6{F1W4y.P.wsJ7S53{{[$#g^sX ' );
define( 'AUTH_SALT',        '[$S+oN$o**Ek96/eh>[NPb@kU#{qQ-`5JX9@O4IkT^IUu3N0Q@`lLvX]K:<QRIfP' );
define( 'SECURE_AUTH_SALT', 'JF_j+-n,v7C#8y%%-[r$ZeB+h9#)t=`jFeFwpTRP&xu;k_EDJ)Jhwz^TFuH[CJ.4' );
define( 'LOGGED_IN_SALT',   '*$0K9--|~Q|afZb-3H6k,|X]82Q<gR1]v!%Ns-_y4Brn{nm%:[+yi({$L3>I^ }q' );
define( 'NONCE_SALT',       '@|GJX^>;wj^oKVNjYyeDH 5o5@<UoMM[FAon5~rf+ZNM9cC6f[bnj]^-VVK=<3XV' );

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
