<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kobedenshi' );

/** データベースのユーザー名 */
define( 'DB_USER', 'kobedenshi' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'hiroto9696' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zydH%X~yIbjatn-YL)]U<gKIta/DLuI3)S{NyF~[A8{+{+DKFzE5J,W)zN.gx3TI' );
define( 'SECURE_AUTH_KEY',  'P~O/N7pA.S.ku[#_M3{Bq+H,|r^jho$y_!:L&y|i*~ss3i/E;ugL@M=5;9nOlaer' );
define( 'LOGGED_IN_KEY',    '*h<iY*Uu?IFO00x)Dyh=1R|eaR_3Lx`jZ5G?Z[a|,xUoP[6~s~u.BW?jS/?s!]WH' );
define( 'NONCE_KEY',        'hb[ HPj@Q*@b1c7VY4t|Dxr9O?GbXI.C|g+QOFA4+q2|ruwtlywz!aS+V2(wcOzd' );
define( 'AUTH_SALT',        'lrNFy*`?`9|4FqCEji[cbniJSz=c(BydKLj;@l0UM;?NlpHsb36f8%BXI#y96lb5' );
define( 'SECURE_AUTH_SALT', 'k[k^-D~V0q-a:(t7NnCAFJkgU+g#xDJjp&z!b2K6[BoOxw-nMk0Z3 zj2rG9kJ*P' );
define( 'LOGGED_IN_SALT',   '1]yH9;4TkR=6P9R Y+oC1m_R5Gz/$#2j?YmJoW5=!`M]@X+1nV8tL[e=B:H[y$Ux' );
define( 'NONCE_SALT',       'reC^ZMUkmBj7JgPOI//3grv4o)Yb02VeWz1ysIw):q7vuBluSCey3<x2z_XgOeHf' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
