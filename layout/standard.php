<?php

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

	<div class="mobile-nav-container">
		<div class="wrapper">
			<ul class="nav--mobile">
				<li class="nav__item"><a class="nav__link active" href="index.html">Home</a></li>
				<li class="nav__item"><a class="nav__link" href="about.html">About</a></li>
				<li class="nav__item"><a class="nav__link" href="resources.html">Resources</a></li>
				<li class="nav__item"><a class="nav__link" href="resources.html">Account</a>
					<ul class="nav-container secondary">
						<li class="nav__item"><a href="login.html" class="nav__link">Login</a></li>
						<li class="nav__item"><a href="cart.html" class="nav__link cart">0 Item(s)</a></li>
					</ul>
				</li>
				<li class="nav__item"><a class="nav__link" href="contact.html">Contact</a></li>
				<li class="nav__item"><a class="nav__link" href="blog.html">Blog</a></li>
				<li class="nav__item"><a class="nav__link" href="faq.html">FAQ</a></li>

			</ul>
		</div>
	</div>

	<!-- begin: page -->
	<div class="page">

		<div class="mobile-nav-handler--close"></div>

		<!-- begin: HEADER -->
		<header class="global-header">

		</header>
		<!-- begin: HEADER -->


		<!-- begin: CONTENT -->
		<div class="global-content">
			<div class="container">
				
				<!-- begin: blocks side pre -->
				<div class="blocks--pre">
					<?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
				</div>
				<!-- end: blocks side pre -->

				<!-- begin: main content -->
				<div class="main-content">
					<?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>					
				</div>
				<!-- end: main content -->

				<!-- begin: blocks side post -->
				<div class="blocks--post">
					<?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
				</div>
				<!-- end: blocks side post -->

			</div>
		</div>
		<!-- end: CONTENT -->

		<!-- begin: FOOTER -->
		<footer class="global-footer">

		</footer>
		<!-- end: FOOTER -->

		<?php echo $OUTPUT->standard_end_of_body_html() ?>

	</div>
	<!-- end: page -->
