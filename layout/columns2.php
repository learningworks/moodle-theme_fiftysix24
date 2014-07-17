<?php


$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<!-- begin: HEADER -->
<header id="top" class="global-header">
    <div class="container-fluid">
        <a href="<?php echo $CFG->wwwroot;?>">
            <img class="header-logo" src="<?php echo $OUTPUT->pix_url('logo', 'theme'); ?>" alt="Learning Works Logo">
        </a>
        <nav class="nav">
            <ul class="nav-container">
                <li class="nav-item"><?php echo $OUTPUT->page_heading_menu(); ?></li>
                <li class="nav-item"><?php echo $OUTPUT->login_info() ?></li>
            </ul>
        </nav>
    </div>
</header>
<!-- begin: HEADER -->

<!-- begin: module breadcrumb -->
<div class="module-breadcrumb">
    <div class="breadcrumb-container">
        <div class="container-fluid">
            <?php echo $OUTPUT->navbar(); ?>
        </div>
    </div>
    <div class="container-fluid">
        <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </div>      
</div>
<!-- end: module breadcrumb -->

<div id="page" class="container-fluid">
    <div class="container">

    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span9<?php if ($left) { echo ' pull-right'; } ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            $classextra = ' desktop-first-column';
        }
        echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
        ?>
    </div>
    </div>
</div>

    <!-- begin: FOOTER -->
    <footer class="global-footer">
        <div class="container-fluid">
            <p class="copyright"> © copyright LearningWorks 2013 </p>
            <ul class="icon-wrapper">
                <li> <a class="icon button-facebook" href="https://www.facebook.com/LearningWorksLTD"></a> </li>
                <li> <a  class="icon button-twitter" href="https://twitter.com/NZLearningWorks"target="_blank" ></a></li>
                <li> <a class="button-top" href="#top"></a> </li>
            </ul>
        </div>
    </footer>
    <!-- end: FOOTER -->

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

    <script type="text/javascript">
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                   if (target.length) {
                     $('html,body').animate({
                         scrollTop: target.offset().top
                    }, 300);
                    return false;
                }
            }
        });
    </script>

</body>
</html>
