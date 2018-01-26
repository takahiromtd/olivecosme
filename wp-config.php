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
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'olivecosme');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5Z0EqF#T1]n2l/fSn;$Y|kKLX!B>tPIH~]P(Tl{ ]<4vp~KxJhRIP.]3p7a8]y%G');
define('SECURE_AUTH_KEY',  '`:+b;k;Sjfr#GS,_9r6_M$Efpm|6Q6t?x]X?7gs(m|2BWXUurf%)<zMXNy&#Ez1,');
define('LOGGED_IN_KEY',    'E0}QYhk$<zrs$:po8iNBy$#KSA3d81SIq?-Xl:[|,a:*VfF~*Zm}[5i5R0H:x{1c');
define('NONCE_KEY',        ':D/dY ;q)2I4$?sX^X d0@=n{zg.fzT(#2f,y&[w@LPBrr,K`#6:1Nk2zE={1?V0');
define('AUTH_SALT',        '~VOnR{jRYg-Jr5l|cbn?XEZp!EAKW2<87LrIJEdn~&LPn]t0S>OLJp4;8x~<Ibx|');
define('SECURE_AUTH_SALT', 'XT*G^.Xtak^KC!|O#(T^tvW%I>uB/izC:m X;MXjl5luOGIy1;bqs9|lhn9kaV%f');
define('LOGGED_IN_SALT',   '!ves(s4C6xDYBv8Jgo9c.QSM;^@wj?=ZF/D6w`7IKbO{+;*xHv_E_Qae+Y Pr-6e');
define('NONCE_SALT',       ',0[[fTkdCLv,Ho<9:X#m]{s>aakr(jkxMt+Yb5wEk,mXjJ<7xOCudt:F{v%qPjLJ');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp11_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
