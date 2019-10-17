<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

$wp_db_name = getenv("MYSQL_DB_NAME");
$wp_db_dbuser = getenv("MYSQL_DB_USER");
$wp_db_pass = getenv("MYSQL_DB_PASSWORD");
$wp_db_server = getenv("MYSQL_DB_SERVER");

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $wp_db_name );

/** MySQL database username */
define( 'DB_USER', $wp_db_dbuser );

/** MySQL database password */
define( 'DB_PASSWORD', $wp_db_pass );

/** MySQL hostname */
define( 'DB_HOST', $wp_db_server );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8JQ|ZH#]@aW?!DHy%1TNr_6~eztEBD!DF J.}?h4|wAbQR)Ikuw{q`M/Jw ,|4~W' );
define( 'SECURE_AUTH_KEY',  'Zng`8Mr4R_nK_R^.sAx(V)ALs`@F;Y28UCVJij0j(L=YF_ JiuU+67gymkY$(8P!' );
define( 'LOGGED_IN_KEY',    '{+mKbm}xhu]Pi4ihm!CpG~ d5B4>7oNF?}2o;#WUc2W]kVB9ApdY</T^+bw~FD]J' );
define( 'NONCE_KEY',        'sZGkYhfDw@).7gFRSb2P#R~huLnrSqMy%u]zdLR~td.7<HI<EZ0P:QX$MU7]9FBH' );
define( 'AUTH_SALT',        '`2mb:s`c.T$u7u:dfi9xi!|(>!9S:0@<1;ta-+c-W u5,kd?!weQRt-c{?Wh-:|}' );
define( 'SECURE_AUTH_SALT', '{S6u^G<DuH4v.5W%BU0Lm<Rfp[00R&+G=n|6 EHZ`=[`en/(v43tRhN|bq2OF;y$' );
define( 'LOGGED_IN_SALT',   'UUbt_3ChUTHySMNYs2h@j+k5VhE!r&X<%U4J^{I:V-+&yQ(`c$k]}~b(OZ8=<{|`' );
define( 'NONCE_SALT',       ':{Y7ee!Tz>~)BX?pCMR?xwk)gh7)PoHM&$cA`G>P{YJ0lCW0Mr%qJHm:K;JqmMCF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
