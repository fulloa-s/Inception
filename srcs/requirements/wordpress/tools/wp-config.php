<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l ^`^yinstallazione, dallo script
 * di creazione di wp-config.php. Non    necessario utilizzarlo solo via web
 * puoi copiare questo file in   wp-config.php   e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL -  ^h possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', '$WORDPRESS_DB_NAME');

/** Nome utente del database MySQL */
define('DB_USER', '$WORDPRESS_DB_USER');

/** Password del database MySQL */
define('DB_PASSWORD', '$WORDPRESS_DB_PASSWORD');

/** Hostname MySQL  */
define('DB_HOST', '$WORDPRESS_DB_HOST');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 *  ^h possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *  ^h possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ci   forzer   tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2lyIy75F3pAndz~j<jFUL+n%D9DO;)TQ(=7=fvhDVOlIV4ws9jbOKHRZf~DC,rE4');
define('SECURE_AUTH_KEY',  'Pz=MUmOTvY$`^@0?SUp~XG5OKiVp-Fv_^fVz}wC+-_1Tr@{!/|p|N#erB,*e/4K-');
define('LOGGED_IN_KEY',    '6nby6?~an^`w%!vH? jLTdE_)5Dr>0DyNBmuL9Q~3?KoPT]t5I=g>|zmw`:)sM>A');
define('NONCE_KEY',        'ON^d+u76P0z{vLsJ-j1]ZC3e,H/Zj!Sr/(j}Edn}V/!0|GHWsrdL0n2}!$TGW<`y');
define('AUTH_SALT',        'Zjp(1-XS+/K-M}&A5X_[=8X6OnO0-=?fI|wm9d`Y2ejb!i=Edom%T-.9GG6:V|WI');
define('SECURE_AUTH_SALT', '&yQn}?yz<:]C|SgAPztsNQB]y@)-fJg`rs/qx(#.inc=R 0D},ItW5x~a*L:-ODP');
define('LOGGED_IN_SALT',   '6+3@/a/q$R@DoDTvQ|ktz`.I:fb+/M`GeV;@MGCUTGT$k^^HHdLQwI7XPS)#ujPS');
define('NONCE_SALT',       'u-Q`Sko P3%F}dA$N;Eb6jXfU~$M`r+HxbIY lt2gLzgQIzGwev8C83$s~EQ,</c');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 *  ^h possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalit   di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 *  ^h fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all ^`^yinterno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
