<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sunuvolaille2017');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6c(ObfkNhO?1*)Swd}A3$}2q1iL~>B0<?;oBy0I64Z5k{6ZgAX[/jD-i6H WLW7P');
define('SECURE_AUTH_KEY',  'j8%(e41TZ*.z:t!&-FqOUS~yv-wm{/+&~nc.#<A28;D,aXMlG;^ly<MIZ<-hWZ8;');
define('LOGGED_IN_KEY',    'lv6p:z{@9&>{ATV$=[4/F}dHP]eLVs#eb?0Gb Pd5T10+Mp@~%a7tU;.{fmO[dIh');
define('NONCE_KEY',        'e47z An Jhmun&P<9|~f%+mHs,P0rry/&|9c&m)2fN*fQ!5u<O,ymia8N234~c0|');
define('AUTH_SALT',        'LW>vI%zcXe*+4N!wuU@*+Vz&(j/oz)dN4Sh0cZQ0tD1c<9ATY4-S29}q@s2I2D(@');
define('SECURE_AUTH_SALT', '$53OX7ud?|(^0v?^jze-qdN=Oz5CBZOd$]N<LZl^@U4BV#80.A7P&I>*]&:1|p$D');
define('LOGGED_IN_SALT',   'r16]V}zOvn;39&G}2uJ2U&jfGlF^6A&K]HIEi1zMfg_gJ^ uEzJM?W,Nw zX2Dm`');
define('NONCE_SALT',       'Tql98(.HPWH`0Q/#5@7[b:^WE;S][X$R4x[+g^T;x%>>G%Y`^)=,Bp(a9J6rDqwl');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpv17_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
//define('FORCE_SSL_ADMIN', true);
//define('WP_MEMORY_LIMIT', '512MB');
//define('WP_MEMORY_LIMIT', '256M');

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');