<?php

/*
* ARQUIVOS DE ROTAS (área Admin)
* Responsável por monta as pag HTML.
* Carrega sempre por padrão o cabeçalho e o rodapé.
* CORPO: montado de acordo com a action passada pelo method GET
* Página padrão segue no default
*/

//Cria um buffer para salvar todo o html e enviar de uma vez só para não ter probelma de redirecionamnto
ob_start();

/**
* - strip_tag - remove qualquer tag html
* - filter_input() - verifica se existe o $_GET['action'] e retorna seu valor
*/
$action = strip_tags( filter_input(INPUT_GET, 'action') );

include('../bootstrap.php');

include(WCMS_ADMIN_DIR . '/pages/login/check_login.php'); //Valida Login do usuário. Obs.: para todas as paginas

include(WCMS_ADMIN_DIR . '/pages/header.php'); //cabeçalho p/ todas as páginas

switch ($action) {
	case 'posts':
		include(WCMS_ADMIN_DIR . '/pages/post/posts.php');
		break;
	case 'edit_post':
		include(WCMS_ADMIN_DIR . '/pages/post/edit_post.php');
		break;
	case 'save_post':
		include(WCMS_ADMIN_DIR . '/pages/post/save.php');
		break;
	case 'delete_post':
		include(WCMS_ADMIN_DIR . '/pages/post/delete_post.php');
	break;
	case 'login':
		include(WCMS_ADMIN_DIR . '/pages/login/wcms_login.php');
	break;
	case 'logout':
		include(WCMS_ADMIN_DIR . '/pages/login/logout.php');
	break;
	case 'users':
		include(WCMS_ADMIN_DIR . '/pages/users/users.php');
	break;
	case 'edit_users':
		include(WCMS_ADMIN_DIR . '/pages/users/edit_user.php');
	break;
	case 'save_users':
		include(WCMS_ADMIN_DIR . '/pages/users/save.php');
	break;
	case 'delete_user':
		include(WCMS_ADMIN_DIR . '/pages/users/delete_user.php');
	break;
	case 'media':
		include(WCMS_ADMIN_DIR . '/pages/media/media.php');
	break;
	case 'edit_media':
		include(WCMS_ADMIN_DIR . '/pages/media/edit_media.php');
	break;
	case 'save_media':
		include( WCMS_ADMIN_DIR . '/pages/media/save.php');
	break;
	case 'delete_media':
		include(WCMS_ADMIN_DIR . '/pages/media/delete_media.php');
	break;
	case 'categories':
		include(WCMS_ADMIN_DIR . '/pages/categories/categories.php');
	break;
	case 'edit_category':
		include(WCMS_ADMIN_DIR . '/pages/categories/edit_category.php');
	break;
	case 'save_category':
		include(WCMS_ADMIN_DIR . '/pages/categories/save.php');
	break;
	case 'delete_category':
		include(WCMS_ADMIN_DIR . '/pages/categories/delete_category.php');
	break;
	default:
		include(WCMS_ADMIN_DIR . '/pages/index/index.php'); //pag padrão
		break;
}

include(WCMS_ADMIN_DIR . '/pages/footer.php'); //rodapé para todas as páginas

ob_end_flush(); // Encerra o buffer e exibe o resultado para o usuário
