<?php

/**
* Arquivo que contém todas as definições de constantes de diretórios raízes da aplicação
* Esse arquivo será incluído em todos os outros arquivos
*/

session_start();  //não precisa dar esse comando onde esse arq for incluído
date_default_timezone_set('America/Fortaleza');

ini_set('default_charset', 'utf-8'); //Deixa a codificação padrão como sendo UTF-8

define('WCMS_BASE_DIR', __DIR__ );  //Constante que armazenará o caminho completo até a raiz (onde está esse arq)
define('WCMS_SITE_DIR', WCMS_BASE_DIR . '/site');
define('WCMS_ADMIN_DIR', WCMS_BASE_DIR . '/wcms-admin');
define('WCMS_UPLOAD_DIR', WCMS_SITE_DIR . '/uploads');

define('WCMS_BASE_URL', 'http://localhost/wcms');
define('WCMS_SITE_URL', WCMS_BASE_URL . '/site');
define('WCMS_ADMIN_URL', WCMS_BASE_URL . '/wcms-admin');
define('WCMS_UPLOAD_URL', WCMS_SITE_URL . '/uploads');

define('WCMS_PROJECT_NAME', 'I/O Blog');

include( WCMS_ADMIN_DIR . '/api/database_api.php');
include( WCMS_ADMIN_DIR . '/api/users_api.php');
include( WCMS_ADMIN_DIR . '/api/category_api.php');
include( WCMS_ADMIN_DIR . '/api/uploads_api.php');
include( WCMS_ADMIN_DIR . '/api/posts_api.php');

include( WCMS_ADMIN_DIR . '/include/utils.php');
include( WCMS_ADMIN_DIR . '/database/conn.php');
