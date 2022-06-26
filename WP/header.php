<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imyourrear
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Мужня і сильна
		на захисті твого тилу </title>
	<meta name="title" content="<?php bloginfo('name') ?>" content='«Я буду твоїм Тилом» - благодійний фонд забезпечення української армії та реабілітації військових '>
	<meta name="description" content="<?php bloginfo('name') ?>" content='«Я буду твоїм Тилом» - благодійний фонд забезпечення української армії та реабілітації військових'>
	<!-- Favicon  -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-57x57.png' ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-60x60.png' ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-72x72.png' ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-76x76.png' ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-114x114.png' ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-120x120.png' ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-144x144.png' ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-152x152.png' ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-180x180.png' ?>">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/android-icon-192x192.png' ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/favicon-32x32.png' ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/favicon-96x96.png' ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/favicon-16x16.png' ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/manifest.json' ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/assets/icons/favicon/ms-icon-144x144.png' ?>">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet">


	<?php
	wp_head();
	?>
	<script>
		let path = `<?php echo get_template_directory_uri() ?>`;
	</script>
</head>


<body class="body">


	<div class="page">
		<header class="header ">

			<div class="container">
				<div class="header-wrapper d-flex">
					<div class="header__logo">
						<a href="<?php
											echo get_home_url();
											?>" class="logo">
							<svg class="icon">
								<use xlink:href="#logo"></use>
							</svg>

						</a>
					</div>
					<div class="header__info">
						<div class="d-flex justify-content-between align-items-center header__projects">
							<?php

							if (pll_current_language() == 'uk') {
								wp_nav_menu(array(
									'menu'            => 'Projects',
									'container'       => false,
									'menu_class'      => 'projects-list',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '<ul class="projects-list d-flex">%3$s</ul>',
									'depth'           => 1
								));
							} else {
								wp_nav_menu(array(
									'menu'            => 'Projects_En',
									'container'       => false,
									'menu_class'      => 'projects-list',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '<ul class="projects-list d-flex">%3$s</ul>',
									'depth'           => 1
								));
							} ?>
							<!-- <ul class="projects-list d-flex"> -->
							<!-- <li class="projects-list__item"><a href="project.html">Проект Вони не винні</a></li> -->
							<!-- <li class="projects-list__item  "><a href="#">Проект Допомога 300</a></li> -->
							<!-- </ul> -->
							<div class="header__contacts d-flex">

								<ul class="social d-flex">
									<!-- <li class="social__item"><a href="" class="social__link">
                      <svg class="icon" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M22.0703 0H2.92969C1.31426 0 0 1.31426 0 2.92969V22.0703C0 23.6857 1.31426 25 2.92969 25H22.0703C23.6857 25 25 23.6857 25 22.0703V2.92969C25 1.31426 23.6857 0 22.0703 0ZM23.0469 22.0703C23.0469 22.6088 22.6088 23.0469 22.0703 23.0469H16.5039V15.0879H19.521L20.0195 12.0605H16.5039V9.96094C16.5039 9.13208 17.1399 8.49609 17.9688 8.49609H19.9707V5.46875H17.9688C15.4823 5.46875 13.4776 7.48291 13.4776 9.96943V12.0605H10.5469V15.0879H13.4776V23.0469H2.92969C2.39121 23.0469 1.95312 22.6088 1.95312 22.0703V2.92969C1.95312 2.39121 2.39121 1.95312 2.92969 1.95312H22.0703C22.6088 1.95312 23.0469 2.39121 23.0469 2.92969V22.0703Z"
                          fill="#505050" />
                      </svg>


                    </a></li> -->
									<li class="social__item"><a href="https://instagram.com/imyourrear?igshid=NmZiMzY2Mjc=" class="social__link">
											<svg class="icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.66211 25H21.3379C23.3572 25 25 23.3572 25 21.3379V3.66211C25 1.6428 23.3572 0 21.3379 0H3.66211C1.6428 0 0 1.6428 0 3.66211V21.3379C0 23.3572 1.6428 25 3.66211 25ZM1.46484 3.66211C1.46484 2.45056 2.45056 1.46484 3.66211 1.46484H21.3379C22.5494 1.46484 23.5352 2.45056 23.5352 3.66211V21.3379C23.5352 22.5494 22.5494 23.5352 21.3379 23.5352H3.66211C2.45056 23.5352 1.46484 22.5494 1.46484 21.3379V3.66211Z" fill="#505050" />
												<path d="M12.5 19.0918C16.1346 19.0918 19.0918 16.1346 19.0918 12.5C19.0918 8.86536 16.1346 5.9082 12.5 5.9082C8.86536 5.9082 5.9082 8.86536 5.9082 12.5C5.9082 16.1346 8.86536 19.0918 12.5 19.0918ZM12.5 7.37305C15.3271 7.37305 17.627 9.67293 17.627 12.5C17.627 15.3271 15.3271 17.627 12.5 17.627C9.67293 17.627 7.37305 15.3271 7.37305 12.5C7.37305 9.67293 9.67293 7.37305 12.5 7.37305Z" fill="#505050" />
												<path d="M19.8242 7.37305C21.0358 7.37305 22.0215 6.38733 22.0215 5.17578C22.0215 3.96423 21.0358 2.97852 19.8242 2.97852C18.6127 2.97852 17.627 3.96423 17.627 5.17578C17.627 6.38733 18.6127 7.37305 19.8242 7.37305ZM19.8242 4.44336C20.228 4.44336 20.5566 4.772 20.5566 5.17578C20.5566 5.57957 20.228 5.9082 19.8242 5.9082C19.4204 5.9082 19.0918 5.57957 19.0918 5.17578C19.0918 4.772 19.4204 4.44336 19.8242 4.44336Z" fill="#505050" />
											</svg>

										</a></li>
									<li class="social__item"><a href="https://t.me/Imyourrear" class="social__link">
											<svg class="icon" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_82_457)">
													<path d="M20.1256 23.6812C19.9303 23.6812 19.7364 23.6234 19.57 23.5106L13.284 19.2466L9.91256 21.6726C9.64814 21.8627 9.30733 21.9106 9.00029 21.8008C8.69365 21.6908 8.46077 21.4368 8.37764 21.1218L6.68479 14.7064L0.636038 12.3936C0.255245 12.2479 0.00270232 11.8836 -6.85274e-05 11.4759C-0.00283937 11.0682 0.244689 10.7004 0.623635 10.5496L23.6232 1.39793C23.7276 1.35359 23.838 1.328 23.9494 1.32113C23.9892 1.31876 24.0292 1.31876 24.0689 1.321C24.2996 1.33472 24.5261 1.42867 24.7029 1.60204C24.7213 1.61999 24.7387 1.63833 24.7552 1.65746C24.9016 1.82477 24.9821 2.02875 24.9973 2.23657C25.001 2.28882 25.0007 2.34173 24.9961 2.39464C24.9929 2.43237 24.9875 2.46998 24.9799 2.50732L21.0977 22.8768C21.0352 23.2041 20.8125 23.478 20.5048 23.6056C20.3828 23.6562 20.2539 23.6812 20.1256 23.6812ZM13.8359 17.2295L19.4353 21.0275L22.456 5.17775L11.5459 15.6761L13.8096 17.2117C13.8187 17.2173 13.8274 17.2234 13.8359 17.2295ZM9.17472 16.3849L9.92443 19.2257L11.5397 18.0634L9.42462 16.6286C9.32633 16.5621 9.24215 16.4792 9.17472 16.3849ZM3.71233 11.4507L7.86569 13.0386C8.16323 13.1524 8.3878 13.4025 8.46908 13.7105L8.9958 15.7067C9.01995 15.4764 9.12432 15.2598 9.29387 15.0966L19.6897 5.09331L3.71233 11.4507Z" fill="#505050" />
												</g>
												<defs>
													<clipPath id="clip0_82_457">
														<rect width="25" height="25" fill="#505050" />
													</clipPath>
												</defs>
											</svg>

										</a></li>


								</ul>
							</div>
						</div>
						<div class="d-flex justify-content-between header__navigation">
							<nav class="header__nav">
								<!-- <ul class="menu d-flex align-items-center">
                  <li class="menu__item  "><a class="scrolTo" href="#about">Мета проекту</a></li>
                  <li class="menu__item "><a class="scrolTo" href="#help">Допомога</a></li>

                </ul> -->



							</nav>
							<ul class="lang-switcher d-flex  pos-r">
								<?php pll_the_languages(); ?>
								<!-- <li class="lang-item"><a href="#">EN</a></li>
                <li class="lang-item current-lang"><a href="#">UA</a></li> -->
							</ul>
						</div>
					</div>
				</div>

			</div>

		</header>