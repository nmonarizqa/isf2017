<?php
/*
    Template Name: Home Page
*/

// Custom_Fields
$events1_name = get_field('events1_name');
$events1_date = get_field('events1_date');
$events1_time = get_field('events1_time');
$events1_location = get_field('events1_location');
$events1_link = get_field('events1_link');
$events2_name = get_field('events2_name');
$events2_date = get_field('events2_date');
$events2_time = get_field('events2_time');
$events2_location = get_field('events2_location');
$events2_link = get_field('events2_link');
$events3_name = get_field('events3_name');
$events3_date = get_field('events3_date');
$events3_time = get_field('events3_time');
$events3_location = get_field('events3_location');
$events3_link = get_field('events3_link');

$lastsection_header = get_field('last_section_header');
$lastsection_label = get_field('last_section_button_label');
$lastsection_url = get_field('last_section_button_link');


// Homepage Whitesection

$whitesection_feature_image = get_field('homepage_whitesection_feature_image');
$whitesection_title = get_field('homepage_whitesection_title');
$whitesection_subtitle = get_field('homepage_whitesection_subtitle');
$whitesection_subtitle_link = get_field('homepage_whitesection_subtitle_link');
$whitesection_subtitle_target = get_field('homepage_whitesection_subtitle_target');
$whitesection_description = get_field('homepage_whitesection_description');



get_header(); ?>

  <?php get_template_part('template-parts/content','hero'); ?>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="lead">
                        Permias NYC is an Indonesian student association in New York City.
                    </p>
                    <p>Want to join Permias NYC? <a class="signup-link" href="mailto:permiasnyc@gmail.com?Subject=Join%20Permias">Sign up now</a></p>
                </div>
                <!-- col -->
            </div>
            <!--row-->
        </div>
        <!-- container -->
    </section>

     <section id="latest-updates">
        <div class="container">
            <div class="section-header">
                <h2>LATEST UPDATES</h2>
            </div>
            <?php get_template_part('template-parts/content','latest-update'); ?>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section id="upcoming-events">
        <div class="container">
            <div class="section-header">
                <h2>UPCOMING EVENTS</h2>
            </div>
            <!-- section-header -->
            <div class="col-sm-2 col-sm-offset-3 mtop20">
                <div class="num">
                    <div class="num-content">
                        <?php echo $events1_date; ?><span><?php echo $events1_time; ?></span>
                    </div>
                    <!-- num-content -->
                </div>
                <!-- num -->
                <div class="row">
                    <h3><?php echo $events1_name; ?></h3>
                    <p class="place"><strong><?php echo $events1_location; ?></strong></p>
                    <p><a href="<?php echo $events1_link; ?>">More Info</a></p>
                </div>
            </div>
            <!-- col-->
            <div class="col-sm-2 mtop20">
                <div class="num">
                    <div class="num-content">
                        <?php echo $events2_date; ?><span><?php echo $events2_time; ?></span>
                    </div>
                    <!-- num-content -->
                </div>
                <!-- num -->
                <div class="row">
                    <h3><?php echo $events2_name; ?></h3>
                    <p class="place"><strong><?php echo $events2_location; ?></strong></p>
                    <p><a href="<?php echo $events2_link; ?>">More Info</a></p>
                </div>
            </div>
            <!-- col-->
            <div class="col-sm-2 mtop20">
                <div class="num">
                    <div class="num-content">
                        <?php echo $events3_date; ?><span><?php echo $events3_time; ?></span>
                    </div>
                    <!-- num-content -->
                </div>
                <!-- num -->
                <div class="row">
                    <h3><?php echo $events3_name; ?></h3>
                    <p class="place"><strong><?php echo $events3_location; ?></strong></p>
                    <p><a href="<?php echo $events3_link; ?>">More Info</a></p>
                </div>
            </div>
            <!-- col-->
        </div>
        <!-- container -->

    </section>

    <!-- AKAR -->
    <section id="akar">
        <div class="container">
            <div class="col-sm-4 akar-pic">
                <?php if(!empty($whitesection_feature_image)) : ?>
                    <img src="<?php echo $whitesection_feature_image['url'];?>" alt="<?php echo $whitesection_feature_image['alt'];?>">
                <?php endif; ?>

            </div>
            <div class="col-sm-8 p18">
                <h2><?php echo $whitesection_title;?></h2>
                <p class="lead"><a href="<?php echo $whitesection_subtitle_target;?>" class="inline-link"><?php echo $whitesection_subtitle_link;?></a> <?php echo $whitesection_subtitle;?></p>
                <p><?php echo $whitesection_description;?></p>
            </div>
        </div>
        <!-- section-header -->
    </section>

        <!-- NEWCOMERS -->
    <section id="newcomers">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2><?php echo $lastsection_header; ?></h2>
                </div> 
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <p><a href="<?php echo $lastsection_url; ?>" class="btn btn-lg btn-block btn-success"><?php echo $lastsection_label; ?></a></p>
                </div>
            </div>
        </div>
    </section>
	

<?php get_footer(); ?>
