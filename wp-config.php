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
define('DB_NAME', 'user491503_aqua');

/** Имя пользователя MySQL */
define('DB_USER', 'user491503_aqua');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'B1w5A2r1');

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
define('AUTH_KEY',         'fh5tcl^Lm)iAzm2gERSNR3c#Dp6^5mbZXjr@TH2Z1^iICGPFQtbaH^NqXU&RlkIN');
define('SECURE_AUTH_KEY',  '5mFk)#1mcB7b&#E%4NCiW9ncBE*Pccb0vt5M%lC(E6AB%3aJSyJX%uA6ghXM(2Nc');
define('LOGGED_IN_KEY',    'LlVKHM04GzTH!)M#Dgjjm*DvzR*B&Vo9IBL@4(0vkiVU9Egu06FHV7IKbOU^fG29');
define('NONCE_KEY',        '2k!Kgcql(ziR9trgjB@^2OTaV(YY!4OX5bhFsmayQRu%l1Zdt2VqldL#zI65)Px@');
define('AUTH_SALT',        'Ud1UNkXOCzm@S32JaxV!DSgCWm%LN)CkosS1ecq#BpwXxmEC2qNj7yQHxBOEduEo');
define('SECURE_AUTH_SALT', 'TeiuQPQQK7lKETqIJf4uhmiBpsx!lDkbAvbSgWJlvjmfVHl6^P44ERjzEcBGK8!(');
define('LOGGED_IN_SALT',   'Ct2nUuIoiXgR5Y&bRM3*yBKiPcI5MLAWNp#e6Fp8hW0aMnRq70K2wdL6Rn^a5xM#');
define('NONCE_SALT',       'MnhH(Ri#ZOoaSt8Ts0r*&OTOc*AxcTVx!SNxmOJVI&Ombg#(hXrWMFqyRHsBxD(!');
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





define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>