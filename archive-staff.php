<?php
/**
 * Staffer Custom Archive Template
 * https://www.edwardrjenkins.com/plugins/staffer/
 * 
 * Drop this in your theme's directory to override
 * Staffer's default archive pages.  Leave non-markup
 * elements intact to preserve option-panel settings.
 *
 */
?>
 
<?php get_header(); ?>
 
<?php 
    // loads the options
    // must be carried over if using a custom template, else options will not work
    $stafferoptions = get_option ( 'staffer' );
        if (isset ($stafferoptions['customwrapper']) && isset ($stafferoptions['startwrapper'])) {
            $customstartwrapper = $stafferoptions['startwrapper'];
            echo $stafferoptions['startwrapper'];
        }
        else {
            echo '<div id="staffer-container"><div id="staff-content" class="" role="main">';
        }
             
            // checks for the custom title
            $stafferarchivetitle = $stafferoptions['ptitle'];
            if ( isset ( $stafferarchivetitle ) && ($stafferarchivetitle != '' ) ) {
            ?>
            <h1 class="staffer-archive-page-title"><?php echo $stafferarchivetitle; ?></h2>
            <?php }
                else {
                ?>
            <h1 class="staffer-archive-page-title"><?php post_type_archive_title(); ?></h2>
            <?php } ?>
 
            <?php
                // adds description if present
                $stafferdescription = $stafferoptions['sdesc'];
                if ($stafferdescription != '') { ?>
                <div class="staffer-page-description">
                    <?php echo wpautop( $stafferdescription ); ?>
                </div>
            <?php } ?>
 
             
        <?php
            // I can't figure out how to remove this because
            // I can't find the matching end brace...
            // I hate PHP
            if ( true ) {
 
        // staffer list template
 
        $stafferoptions = get_option('staffer');
                     
            if (have_posts() ) : ?>
 
            <!-- Starts List Markup -->
             
            <div class="staffer-archive-list row">
             
            <?php while ( have_posts() ) : ?>
             
            <?php the_post(); ?>
 
            <div class="staffer-item col-xs-12 col-sm-6 col-md-4">
                <header class="staffer-staff-header">
                    <h3 class="staffer-staff-title">
                        <?php echo the_title(); ?>
                    </h3>
                    <?php
                    if ( get_post_meta ($post->ID,'staffer_staff_title', true) != '' ) {
                        echo '<em>' . get_post_meta ($post->ID,'staffer_staff_title', true) . '</em><br>';
                        }
                        ?>
                </header>
                    <div class="staff-content">
                    <?php
                        if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail ( 'medium', array ('class' => 'alignleft') ); ?>
                            <?php
                        }
                        if ($stafferoptions['estyle'] == null or $stafferoptions['estyle'] == 'excerpt' ) {
                            the_excerpt();
                        } elseif ($stafferoptions['estyle'] == 'full' ) {
                            the_content();
                        } elseif ($stafferoptions['estyle'] == 'none' ) {
                            // nothing to see here
                        } 
                        ?>
                    </div>
                </div>
            <?php endwhile;
            endif; ?>
            </div>
 
            <!-- Ends List Markup -->
 
            <?php
          
        }
                ?>
 
        <?php
            if ( $wp_query->max_num_pages > 1 ) { ?>
                <div class="staffer-navigation">
                    <?php posts_nav_link(); ?>
                </div>
            <?php } ?>
             
    <?php
        // prints the end wrapper
        // must be carried over if using a custom template, else options will not work
        if (isset ($stafferoptions['customwrapper']) && isset ($stafferoptions['endwrapper'])) {
        $customstartwrapper = $stafferoptions['endwrapper'];
        echo $stafferoptions['endwrapper'];
        }
        else {
            echo '</div></div>';
            }
            ?>
<?php get_footer(); ?>