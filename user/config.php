<?php
/* 这是 config.php 文件，请根据您的实际情况修改以下设置 */

/** MySQL 数据库用户名 */
define( 'YOURLS_DB_USER', '[您的数据库用户名]' );

/** MySQL 数据库密码 */
define( 'YOURLS_DB_PASS', '[您的数据库密码]' );

/** MySQL 数据库名称 */
define( 'YOURLS_DB_NAME', '[您的数据库名]' );

/** MySQL 主机地址，通常为 'localhost' */
define( 'YOURLS_DB_HOST', 'localhost' );

/** 数据库表前缀，通常保持默认即可 */
define( 'YOURLS_DB_PREFIX', 'yourls_' );

/** 您的 YOURLS 网站根地址，结尾不要加斜杠 */
define( 'YOURLS_SITE', 'https://[您的域名.com]' );

/** 设置语言为简体中文，前提是已下载 zh_CN.mo 文件到 user/languages/ 目录 */
define( 'YOURLS_LANG', 'zh_CN' );

/** 是否只允许一个长网址对应一个短网址，true 为是 */
define( 'YOURLS_UNIQUE_URLS', true );

/** 网站是否私有（需要登录），true 为是 */
define( 'YOURLS_PRIVATE', true );

/** Cookie 加密密钥，必须修改！建议访问 https://yourls.org/cookie 生成并替换 */
define( 'YOURLS_COOKIEKEY', '[请在此处粘贴生成的长串随机字符]' );

/** 允许登录的用户名和密码，可设置多个 */
$yourls_user_passwords = [
    '[您的管理员用户名]' => '[您的登录密码]', // 密码将在保存时自动加密
    // 可以按此格式添加更多用户
];

/** 短网址字符集类型：36 或 62 */
define( 'YOURLS_URL_CONVERT', 36 );

/** 调试模式，上线运行请保持为 false */
define( 'YOURLS_DEBUG', false );

/** 禁止使用的短链接关键词（可选）*/
$yourls_reserved_URL = [
    'porn', 'sex', 'fuck',
    // 可以在此添加其他你想保留或禁用的关键词
];
