<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db808486740' );

/** MySQL database username */
define( 'DB_USER', 'dbo808486740' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XmAGBCfdcRtdLyWKcaiD' );

/** MySQL hostname */
define( 'DB_HOST', 'db808486740.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'b>P}GbdP<iFxwZy;OIZa3B+&D(+Yg/<IXZ{-7YuV@EPM&StCimpS[~?icr=Bq}C)' );
define( 'SECURE_AUTH_KEY',   '.+(X_p7gUk3>w*!eQMu$Z02-1(gs3mGnnVCUU)r^B2BXFYYL5R.Qt2sHdb&y3a1Z' );
define( 'LOGGED_IN_KEY',     'R UQhNv)-nvX4JL5kE}v1h=hegm.}0XKV=ik3OWXG;m7Orw}N$$[Q$/T,{.^.6|A' );
define( 'NONCE_KEY',         'VWU&!9ep7C-9?@J}#2HxKmIS.#;=?VX_[{LtW{e4h:0)GK=]x0Z^d^9_Pvm62AhD' );
define( 'AUTH_SALT',         'eB)c(Jx6LT/}MAST`c=G}lLmy>~RgRc3W)lZ`}xI-%WvgSz^Z.;c?@@uy{NT}lU5' );
define( 'SECURE_AUTH_SALT',  'FmwRn|),:PO`!t~[N :peuPm20UO.6#}F$Ui!NQt&Vj]CF#wuQU;CYA/{DFd<jt{' );
define( 'LOGGED_IN_SALT',    '~BSOdTNDUBHFs(SnaH72BnT:oU1s30:dh~=;jt)oq[,0W6Av$u0R1 u)10@(sGW.' );
define( 'NONCE_SALT',        '$`T0<pFJEq0J{(avTlz.0X(C5GIq:9A/`zM-H7a.XUS4~u{ka>f9z O!~ghwZ1 Y' );
define( 'WP_CACHE_KEY_SALT', ',B~?rV1$B`F+&95?p5cl:=7v6|`2#VhTwtP{`Uy~y:ceVt2?r)~fPC^.]YZ]+W38' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hMAYM';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
