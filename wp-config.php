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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         '=l_6rop+}WpS+}l(J!([45)-,CsGXHcW_&ur:1e$U!ZC}$M(kO[R}?w9*o:^r_qm' );
define( 'SECURE_AUTH_KEY',  '}f:eIG3+tk4a!1ep78tohX#aUB;A^*C(,?r*9IR?eH>Ae+tnMmV#`~Em)9=eUW]F' );
define( 'LOGGED_IN_KEY',    'yztE-dHXDER=C$lIUo&lXn+@h8FK2@9SG:76c)9]g$T)_Hib/f$zd*,?i6Ew+6VP' );
define( 'NONCE_KEY',        'u~ioun81*o7:;GGtKr`)Yxr%d`{)A~lM8{Ek9CsZ| $!51LL7Mrr~!~+h<?7*lFc' );
define( 'AUTH_SALT',        '{wujp,Hg3+93{:tb%2Gi/0zfg;DF#Gqw_>7~{ m>X5sUAj{MH:{,]*fw qAbJJ3@' );
define( 'SECURE_AUTH_SALT', 'e2OD8XK#.OoxC3JaheF9x<+}55q]c~>nk$Enr6hU]u7(N=LgM}ZmfQNB|Q,h2yWq' );
define( 'LOGGED_IN_SALT',   '5- x>9o(W6B*3L@$@9?-V)eJLK,2)<mZ0ZEWXL:3_uvjQ]}zO<vBTXb//cJA$.j ' );
define( 'NONCE_SALT',       '(}K;?SFPb(!yNOA#QroU1t??+LUR;}p!$8@5;#LheF^a3HnslO4/Lfy`PD*r0jY&' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
