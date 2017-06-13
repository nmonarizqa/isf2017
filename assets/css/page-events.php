<?php
/* 
    Template Name: Events Page
*/
$header_image = get_field('header_image');
get_header();
 ?>

<section class="feature-image feature-image-default" style="background: linear-gradient( rgba(20, 20, 20, .4), rgba(20, 20, 20, .4)), url('<?php echo $header_image['url'];?>') no-repeat;
    background-size: cover;
    background-position: center 100%;">
    <h1 class="page-title">Events</h1>
</section>

<section id="regular-events">
    <div class="container">
        <div class="section-header">
            <h2>REGULAR EVENTS</h2>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="center-cropped" id="event-akar">
                    <h3>AKAR</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-8">
                <div class="caption p18 mtop20">
                    <p>AKAR is an Indonesian language program established in 2014 by PERMIAS New York City. This program allows both New Yorkers and American-born Indonesians to get in touch with Indonesian culture.</p>
                    <span>Every Saturday 2 pm - 3 pm | 48-01 31st Ave, Astoria, NY 11103</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="center-cropped" id="jamming">
                    <h3>Jamming Session</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-8">
                <div class="caption p18 mtop20">

                    <p>Permias NYC is welcoming everybody to join the monthly jamming session. This event is held regularly on the first weekend of each month, hosted by Nial Djuliarso (Pianist & NYU Graduate Student). Everyone are welcome to sing, play
                        music, listen and socialize. If you don’t play musical instruments or don’t sing, you’re still welcome to enjoy the moment and meet new friends! There is a baby grand piano available in the practice room.</small>
                    </p>
                    <span>Every Friday 5 pm - 7 pm | NYU Kimmel Center 60 Washington Square South, 6th floor (Room number varied each month)</span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="center-cropped" id="potw">
                    <h3>Photo Of The Week</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-8">
                <div class="caption p18 mtop20">

                    <p>Get your camera ready and join Permias NYC’s Photo of The Week! Add <strong>#potwpermiasnyc</strong> to your shots of New York City in Instagram for a chance to be featured on our account every week. Follow <strong>@permiasnyc</strong>                            to see if your photo is featured this week!.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="center-cropped" id="nyidstory">
                    <div class="title-box">
                        <h3>#nyidstory</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-8">
                <div class="caption p18 mtop20">

                    <p>Who are Indonesians in New York? What brought them here? What makes them stay? Indonesians in New York surely have a lot of interesting story to share! This project will share the story of Indonesian community in New York City
                        every 2 weeks through Permias’s Instagram account, using the hashtag <strong>#nyidstory</strong>. All Indonesian students can contribute a story about interesting Indonesian people and send it to PERMIAS NYC, and we will post
                        it in our Instagram account. Follow <strong>@permiasnyc</strong> on Instagram to see the stories!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="upcoming-events">
    <div class="container">
        <div class="section-header">
            <h2>UPCOMING EVENTS</h2>
        </div>
        <div class="coming-soon">
            <h1>Coming Soon</h1>
            <div class="col-sm-2 col-sm-offset-5">
                <p><a href="#" class="btn btn-lg btn-block btn-success">Notify Me</a></p>
            </div>
        </div>
    </div>
    <!-- container -->

</section>


<?php get_footer(); ?>