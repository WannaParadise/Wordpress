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
define( 'DB_NAME', 'project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FkF.BRsVNmFLk!CQMJ&Y<Dy$bJ$ }v]B-{7$<Ls/QpZwi1{t`ii/Cpd19q&H`EI}' );
define( 'SECURE_AUTH_KEY',  '/^`uC[*Vj}Kl8(zGAd~s6E9@P-fghr.{2,o&vA&gc@><A0bNAt*Sb7BL0YbRM0+V' );
define( 'LOGGED_IN_KEY',    'sgjJs<(,ucIcVz}8B:lrTB*6h]++<TC;fH@5<ph5RPMt&_$o!=1Hh&-KqG^p&]HW' );
define( 'NONCE_KEY',        'Ol_1`c%cl( -Z5RLMoVW=iPbB]8m%58lC]2XD~eFKR*6=x?zWMXh]!Z^lP3&R),Q' );
define( 'AUTH_SALT',        'iCh)`0t^*izz3lLv(]f~W`<ahx?OnZ#z?J::%UOBx9{wSCiA}H-Txb@0`(8<zW(O' );
define( 'SECURE_AUTH_SALT', '^e|D8lTfN)w@n{KBTt9pLiFP.yro(DSriga)r)iW~u?J6 5?_2A(&wFZ}<!s[V1}' );
define( 'LOGGED_IN_SALT',   'd:O?U:`WnK9TSo8^VQ%1-Q67TG*Y~4@luC&ZhH|I{6D[,AF[IRabb,RSddN&A4cn' );
define( 'NONCE_SALT',       'AdG.,SHE_wFC`_|#;K#yx?vt*=~FXo(;yipLI;)<} jn2vKtL7WX9HS~1oSJAmU0' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'pr_';

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
