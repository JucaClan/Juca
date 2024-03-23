<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S[}#4.nd6}AkLyJCGPTv`.-$_Fy-kic #B?ZYF>A*~#nBWd[}$:9k:w(c-i{G:yI' );
define( 'SECURE_AUTH_KEY',  '<)m:5WL.fUf?`$3b#brs,aqVzGD;yf(:=Op!Dv{5A)}fQ_g>p6yXJ^hX-Z5~/eGL' );
define( 'LOGGED_IN_KEY',    'v#4plt9hqElpWZXw@0$;WUTRp}fw&O}>BaB7j;Bv57OxA3J%7UGbzA9x;v ^9!QF' );
define( 'NONCE_KEY',        '; pAQ@ .A^cs,R8Q)A[#afB=kv3er,X))H?Y/$KM`[4%[/FZup}OZz$,MuNp|8vE' );
define( 'AUTH_SALT',        'eoq-Z_ 3%sJaer]l](_76HG4?qgZ}3mWGT1Bmq%%Z]o|DJ65.QdaS/l#Yb#G-AC.' );
define( 'SECURE_AUTH_SALT', 'd8_bpI*#jd%qU`]Cc&^)]|oh8JxXLI57v/9(dEldL|_(,||W2?!>n_XpRYwpk`(]' );
define( 'LOGGED_IN_SALT',   '/G.:J`Q}o(&r:od/XbbdDb9^(p?/~|4_](^#`7wRAC-~*Td43&Gy3.W {aFj*)<*' );
define( 'NONCE_SALT',       'w(%RSI*%e2mL^R!)YV= $yi;GE-rkPE~%8dP62tj$<f=g:#SqLnXQGwMAb{:+|pc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
