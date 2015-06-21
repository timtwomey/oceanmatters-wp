<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

/** MySQL database username */

/** MySQL database password */

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '[((AZ_laJNI>:xT{$5Yx,7r@iXGJ2`x%!$Z&v*v$wo*Q#%j%+9^Mw}Ko-.KeZqn|');
define('SECURE_AUTH_KEY',  'SpV-({.pqB-a*MfQX|iA4NF){2]<+ AP]f{am+f-q:!DH!tM+s]XsMudTF+fEAcH');
define('LOGGED_IN_KEY',    'w86{D1Ws~bKU}+}VS_%@hxXZH]XG/8 XWy;Mii=Nq3A{BBR@S5 D>)&1/lk;l`3a');
define('NONCE_KEY',        '_zBqc C^3Uef <V+[:%11zi3s%W}:w=JcToa@O:g/+uc?dk$]$rw$lyP|cEU6vOn');
define('AUTH_SALT',        'mp{tcD %^Ur`Ta)JURe)S~ic6#Im;%aK-b;FA-?lVml6*h!F9Q9qls.c%ST4RN)=');
define('SECURE_AUTH_SALT', 'xF dzmA-k=uof;^<ag^[KUKj$U!u+h7c%|q#=D<,CEM{(lh5=[(as0{.-9@a)7DR');
define('LOGGED_IN_SALT',   'yRTrNLmKMHZS#}9^e|m=+O+Y|P$u[1~^j|:K`9OVd-3*RSZ_*M%ow&[DH$z?FL(3');
define('NONCE_SALT',       'VuyIy,8f^`q<AkWj&GW+[*R=<66xZ-bh;K1h;4aR2&k@qx}knHOH x6N(,NuUZK6');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'nMJcz7N6Je');
require_once(ABSPATH . 'wp-settings.php');
