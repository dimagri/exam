<?php
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
?>

<?php
function my_search_form( $form ) {

	$form = '
	<form id="searchform" class="searchform" action="http://localhost/wordpress/" method="get" role="search">
		<div>
			<label class="screen-reader-text" for="s">�����:</label>
			<input id="s" type="text" name="s" value="">
			<input id="searchsubmit" type="submit" value="" placeholder="Search ...">
		</div>
	</form>';

	return $form;
}


add_filter( 'get_search_form', 'my_search_form' );
?>


<?php add_theme_support('post-thumbnails');?>

<?php
function true_register_wp_sidebars() {
 
	/* � ������� ������� - ������ ������� */
	register_sidebar(
		array(
			'id' => 'true_side', // ���������� id
			'name' => 'Sidebar', // �������� ��������
			'description' => '���������� ���� �������, ����� �������� �� � �������.', // ��������
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // �� ��������� ������� ��������� <li>-�������
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // �� ��������� ��������� �������� � <h2>
			'after_title' => '</h3>'
		)
	);
 
	/* � ������� - ������ ������� */
	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => '�����',
			'description' => '���������� ���� �������, ����� �������� �� � �����.',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );
?>