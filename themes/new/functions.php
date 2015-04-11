<?php
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
?>


<?php
function true_register_wp_sidebars() {
 
	/* � ������� ������� - ������ ������� */
	register_sidebar(
		array(
			'id' => 'true_side', // ���������� id
			'name' => '������� �������', // �������� ��������
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