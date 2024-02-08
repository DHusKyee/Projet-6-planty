<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty-deuxieme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',2&^lyQ!~7|49R0L|8=B{fKwf msZ[6sjkstK[wLn=?)C6b(j.|v!OxE%Gz&aQfQ' );
define( 'SECURE_AUTH_KEY',  'F7U[pm0tmT!9cF[D&b[me!U{$Q_dFz@dtR@ShjHm0bkU=>.2 #q#UEU)jb5&(~>u' );
define( 'LOGGED_IN_KEY',    '.yz]-{`o 8,ippY6JInR8HQrKwa;~vHD%I5(q$%_s-#LB<Bp}A;H4U.b{2q{QyLD' );
define( 'NONCE_KEY',        'Ko<BL5yTpX,:1SEZ]b 6c^L4F.z0.Y7r5y]j6E:)(g8s<j2M_~no;Kd.`62KgyX$' );
define( 'AUTH_SALT',        '|uON6b0LX3R=mPOMz)m7Mf9#[8fgbW-048DSM0G8P3>}oxF|ujw;X+;W2X&tcaLp' );
define( 'SECURE_AUTH_SALT', 'me*)m%)pHvTZe P`h>A9~{O[C7>VXn `kpvIgfU=3>6DTEt(+X;sR*kI8ow>MQQL' );
define( 'LOGGED_IN_SALT',   '1@QH)~;hp+5{QMVii0E$83=yW>Qx)<z@QT]FuLF;Q2XOTL!5t91Hko{e&JP60R.V' );
define( 'NONCE_SALT',       'Q1fkUz-M52eeZg%<_ Lx?9ha?#>`|M$gYhV=f ]nctY]}hICU=Y>6hKrL|A*^.Fh' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
