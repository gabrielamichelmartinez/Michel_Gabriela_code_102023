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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         '.*_ZAx~~]9[[Ff0K79;loxDkh@f_ yH{&*B]EeIPUk]~Px_KxYfF1*G=00AdNQK6' );
define( 'SECURE_AUTH_KEY',  '%S9zdi}WHJhJla^VMo@LiI}|>XJclAKAd^a0B[/>L|+`rn1d*R6;ZW>gi4`hca;o' );
define( 'LOGGED_IN_KEY',    'k-}$-!YiD$8ZA(>9-.`b2F{D^R,?I/2E|_Fcvuc!.OF s~N/Xj$8W|FJjCE&zl:*' );
define( 'NONCE_KEY',        '6iqI!Min:*l/s4gX!L$boI.dnv=>(bTdIP?-FUXGh;Y*EkO&v6aJypc;{ .9~PIt' );
define( 'AUTH_SALT',        'H7m%;IFAK@qseyn_pK`&egjN2;T1V//QgW=GV-/aVm]m<S+KGn^X#dIw&L>:k~6/' );
define( 'SECURE_AUTH_SALT', 'zby`pW7ld J+6s*u1DBm; fy02?=~nN%*hlMt9}Z1[8zRLdb2<?a dKfN}{jrTrL' );
define( 'LOGGED_IN_SALT',   '4}<$<WJW3{|etAhozlz!=-i{8Xm.ID$jjb_|c(%W@@[=Gl_/kFpO]gifZ#:,w.z9' );
define( 'NONCE_SALT',       '[~FDtduGM6A^Z+HyYz`Mv]ZMs,i^d,|xKjaXMm}[Qt?w$Ec6hX(eDO)q9ONo.liq' );
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
