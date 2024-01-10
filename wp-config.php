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
define( 'DB_NAME', 'flight-to-love' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3{,u1O]wG>g?vr>Lojc~B_m;M37XSr}tC%3+rAux8{lch|csYs{s$DN&{I(d[[.%' );
define( 'SECURE_AUTH_KEY',  'aJDJ71OG}!jOX0z;!T1WPKZX5;9H%^K8,U}L*gl#?ZP(=8@7ZNXa]v,Th,yLg!Ci' );
define( 'LOGGED_IN_KEY',    '3KhlQd*!EZ0uP|lHoif&uzmli8<|kbW<sk<z&Rc#LUyOm3zy;3[SV|#,OmM%_{TF' );
define( 'NONCE_KEY',        'H7nx,:jus3]fqd=wqH~>?5d9A@s#KCj2swh+JhBUq!0kAIdcaNTNr=BmvCHc(H w' );
define( 'AUTH_SALT',        'e#}-`mm-=]RA<D|-IcrygA;7DU7Bh1Be!3Pc0RW,``JN>gb>2 j*mgFc%b)O.fRu' );
define( 'SECURE_AUTH_SALT', 'Aq.!XaL*ptA9N32dLsPY=W]M^>hv(D4A-EbI;bo(J/#m7`/v%-5.oH(h$XK-siPB' );
define( 'LOGGED_IN_SALT',   '5s?3iBR>Rxpzb>cfrENxJ9O,EVkLN|sCfpNpr^GW# Iehe_3?/&qwnW}7;9_XH74' );
define( 'NONCE_SALT',       '<(6?m<QMT*al_[Cf%-YoBI9Lv=eQqx wX3:]+yBXV;}T%b|^%+]2e-()ee9h{9:N' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ftl_';

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
