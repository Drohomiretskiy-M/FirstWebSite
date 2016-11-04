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
define('DB_NAME', 'myBlog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8*n,!KLY{zWo0&WrKSc&oySTLS9 h/ft{}h/kG[5z?6TD=BIA^~=6]2_168>Q!8{');
define('SECURE_AUTH_KEY',  'bBCGlDo1?pUV?KuRz3$?iBC75!ae1;j:vd:Jc1OigJ]r[(+>5@Z_ lN`.>bo_2Fo');
define('LOGGED_IN_KEY',    '].zXW{2WLF{6 G5LhR1_JI~~_KANN(ooUPQFcNbQOP5)Kt{NR[rk;v?V@/9t~G?2');
define('NONCE_KEY',        'uNr0nJ.N:jctj*p+vCSG~NgbYum:1msVww7&e.ZO2[5y4t`A0iT!nK%;jVb{hf%o');
define('AUTH_SALT',        'MsyT8>P-jVHb|hy#w,<D&>O{C-^>+cnG$B%N)YCJis(&)h)8V#mRwMsM>Sm)z<F/');
define('SECURE_AUTH_SALT', '&C%>n@aH3E]~z3h8oTj@H9[qFNz gGpf. vZTH!O4IO^S0j/HgHz`cmNx9fR*.X-');
define('LOGGED_IN_SALT',   'vDEIX.@<5FEv4>5`pK{debW{!](4IMH{^u^JWw,fYnBDNVRRy)HQnp{DX@<AhlEV');
define('NONCE_SALT',       '7Cn*y|N0d#9VBv~{XzZ}86cM[*Z&Co!L^m2OJsKm@tK_ROJ*LMVNp22aF?DYk%?h');

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
