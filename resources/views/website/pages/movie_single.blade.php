<!DOCTYPE html>

<html lang="en">

<head>
    @include('website.partials.head')

    <style>
        .btn-show-detail {
            background-color: black !important;
        }
        .custom-modal-size {
            width: 90%;
            max-width: 1200px;
        }

        .modal-body iframe {
            width: 100%;
            height: 600px;
        }
        .st_video_slider_inner_wrapper {
            /*  */
        }
    </style>
</head>

<body>
    @include('website.partials.header')
    <!-- prs video top Start -->
    <div class="prs_top_video_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="st_video_slider_inner_wrapper float_left"
                        style="background-image: url('{{ asset(config('filesystems.folder_storage_user.film') . $film->picture) }}')">

                        <div class="st_video_slider_overlay"></div>
                        <div class="st_video_slide_sec float_left">
                            <button type="button" class="btn btn-lg btn-show-detail" data-toggle="modal" data-target="#modal-show-detail">
                                <img src="{{ asset('assets-website') }}/images/index_III/icon.png" alt="img" class="text-black">
                            </button>
                            <h3>{{ $film->name }}</h3>
                        </div>
                        <div class="st_video_slide_social float_left">
                            {{-- <div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
                                <h5><i class="fa fa-heart"></i> 85%</h5>
                                <h4>52,291 votes</h4>
                            </div> --}}
                            {{-- <div class="st_video_slide_social_left float_left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="st_video_slide_social_right float_left">
                                <ul>
                                    <li data-animation="animated fadeInUp" class="">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ \Carbon\Carbon::parse($film->publish_at)->format('d/m/Y') }}
                                    </li>

                                    <li data-animation="animated fadeInUp" class="">
                                        <i class="far fa-clock"></i>
                                        {{ $film->time_duration }} phút
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs video top End -->
    <!-- st slider rating wrapper Start -->
    <div class="st_slider_rating_main_wrapper float_left">
        <div class="container">
            <div class="st_slider_rating_left">
                <div class="st_rating_box">
                    <fieldset class="rating">
                        <h3>3</h3>
                        <input type="radio" name="rating" value="5" />
                        <label class="full" title="5 stars"></label>
                        <input type="radio" name="rating" value="4 and a half" />
                        <label class="half" title="4.5 stars"></label>
                        <input type="radio" name="rating" value="4" />
                        <label class="full" title="4 stars"></label>
                        <input type="radio" name="rating" value="3 and a half" />
                        <label class="half" title="3.5 stars"></label>
                        <input type="radio" name="rating" value="3" />
                        <label class="full" title="3 stars"></label>
                        <input type="radio" name="rating" value="2 and a half" />
                        <label class="half" title="2.5 stars"></label>
                        <input type="radio" name="rating" value="2" />
                        <label class="full" title="2 stars"></label>
                        <input type="radio" name="rating" value="1 and a half" />
                        <label class="half" title="1.5 stars"></label>
                        <input type="radio" name="rating" value="1" />
                        <label class="full" title="1 star"></label>
                        <input type="radio" name="rating" value="half" />
                        <label class="half" title="0.5 stars"></label>
                    </fieldset>
                    <h4>CRITICS RATING</h4>
                </div>
                <div class="st_rating_box st_rating_box2">
                    <fieldset class="rating">
                        <h3>4.5&nbsp;&nbsp;</h3>
                        <input type="radio" name="rating" value="5" />
                        <label class="full" title="5 stars"></label>
                        <input type="radio" name="rating" value="4 and a half" />
                        <label class="half" title="4.5 stars"></label>
                        <input type="radio" name="rating" value="4" />
                        <label class="full" title="4 stars"></label>
                        <input type="radio" name="rating" value="3 and a half" />
                        <label class="half" title="3.5 stars"></label>
                        <input type="radio" name="rating" value="3" />
                        <label class="full" title="3 stars"></label>
                        <input type="radio" name="rating" value="2 and a half" />
                        <label class="half" title="2.5 stars"></label>
                        <input type="radio" name="rating" value="2" />
                        <label class="full" title="2 stars"></label>
                        <input type="radio" name="rating" value="1 and a half" />
                        <label class="half" title="1.5 stars"></label>
                        <input type="radio" name="rating" value="1" />
                        <label class="full" title="1 star"></label>
                        <input type="radio" name="rating" value="half" />
                        <label class="half" title="0.5 stars"></label>
                    </fieldset>
                    <h4>USERS RATING</h4>
                </div>
                <div class="st_rating_box st_rating_box2">
                    <fieldset class="rating">
                        <h3>0&nbsp;&nbsp;</h3>
                        <input type="radio" name="rating" value="5" />
                        <label class="full" title="5 stars"></label>
                        <input type="radio" name="rating" value="4 and a half" />
                        <label class="half" title="4.5 stars"></label>
                        <input type="radio" name="rating" value="4" />
                        <label class="full" title="4 stars"></label>
                        <input type="radio" name="rating" value="3 and a half" />
                        <label class="half" title="3.5 stars"></label>
                        <input type="radio" name="rating" value="3" />
                        <label class="full" title="3 stars"></label>
                        <input type="radio" name="rating" value="2 and a half" />
                        <label class="half" title="2.5 stars"></label>
                        <input type="radio" name="rating" value="2" />
                        <label class="full" title="2 stars"></label>
                        <input type="radio" name="rating" value="1 and a half" />
                        <label class="half" title="1.5 stars"></label>
                        <input type="radio" name="rating" value="1" />
                        <label class="full" title="1 star"></label>
                        <input type="radio" name="rating" value="half" />
                        <label class="half" title="0.5 stars"></label>
                    </fieldset>
                    <h4>RATE IT</h4>
                </div>
            </div>
            <div class="st_slider_rating_right">
                <div class="st_slider_rating_btn prs_animate_btn1">
                    <ul>
                        <li data-animation="animated fadeInUp"><a href="{{ route('client.movies.booking') }}"
                                class="button button--tamaya prs_upcom_main_btn" data-text="book now"><span>book
                                    now</span></a>
                        </li>
                    </ul>
                </div>
                <div class="st_slider_rating_btn_heart">
                    <h5><i class="fa fa-heart"></i> 85%</h5>
                    <h4>52,291 votes</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- st slider rating wrapper End -->
    <!-- st slider sidebar wrapper Start -->
    <div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_md float_left">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="st_indx_slider_main_container float_left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ne_busness_main_slider_wrapper float_left">
                                            <div
                                                class="ne_recent_heading_main_wrapper ne_recent_heading_main_wrapper_index_II float_left">
                                                <h2>TRENDING STORIES</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="st_md_ts_main_sec float_left">
                                            <img src="{{ asset('assets-website') }}/images/content/md1.png"
                                                alt="img">
                                            <p><a href="#">Aquaman: Film Review - Makes A Refreshing Spl...</a>
                                            </p> <span>14 December</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="st_md_ts_main_sec float_left">
                                            <img src="{{ asset('assets-website') }}/images/content/md2.png"
                                                alt="img">
                                            <p><a href="#">Here's Proof That the Hype Is Real for James ...</a>
                                            </p> <span>25 December</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="st_md_ts_main_sec float_left">
                                            <img src="{{ asset('assets-website') }}/images/content/md3.png"
                                                alt="img">
                                            <p><a href="#">The Epic Cast of Aquaman Will Definitely Make...</a>
                                            </p> <span>28 December</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="prs_upcome_tabs_wrapper prs_upcome_tabs_wrapper_mss float_left">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home"
                                                aria-controls="best" role="tab" data-toggle="tab">Summary</a>
                                        </li>
                                        <li role="presentation"><a href="#menu2" aria-controls="trand"
                                                role="tab" data-toggle="tab">Behind The Scenes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="st_md_summ_pera float_left">
                                                    <h5>SYNOPSIS</h5>
                                                    <p>Immediately following the events of Justice League, Arthur Curry,
                                                        the reluctant heir to the underwater kingdom of Atlantis, tries
                                                        to balance the world of the surface dwellers and his own people.
                                                        But where does his loyalty lie? In the water or on the land?
                                                        While Aquaman finds himself at crossroads with these questions,
                                                        closer to home a known foe tries to dethrone him.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="st_md_summ_client_slider float_left">
                                                    <p>CAST</p>
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c1.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Jason Momoa</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c2.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Nicole Kidman</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c3.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Willem Dafoe</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c4.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Amber Heard</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="st_md_summ_client_slider float_left">
                                                    <p>Crew</p>
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c5.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">James Wan.</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c6.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Peter Safran</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c7.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Rob Cowan</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="st_summ_slider_cont float_left">
                                                                <img src="{{ asset('assets-website') }}/images/content/c8.jpg"
                                                                    alt="img">
                                                                <h4><a href="#">Geoff Johns</a></h4>
                                                                <h5>Actor</h5>
                                                                <h6>As Arthur</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc1.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc1.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc2.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc2.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc3.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc3.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc4.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc4.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc5.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc5.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
                                                    <img src="{{ asset('assets-website') }}/images/content/movie_single/sc6.jpg"
                                                        alt="scene_img">
                                                    <div class="prs_ms_scene_img_overlay"> <a
                                                            href="{{ asset('assets-website') }}/images/content/movie_single/sc6.jpg"
                                                            class="venobox info" data-title="PORTFOLIO TITTLE"
                                                            data-gall="gall12"><i class="flaticon-tool"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="st_ind_sidebar_right_wrapper float_left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="st_ind_sidebar_md_textbox float_left">
                                    <p>Highest grossing movie in Mumbai in last 24 hours</p> <a href="#">Know Box
                                        Office Report</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="st_ind_sidebar_md_textbox_btn float_left">
                                    <ul>
                                        <li> <a href="#">Corporate booking &nbsp; <i
                                                    class="fas fa-long-arrow-alt-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="st_ind_sidebar_advertiz st_ind_sidebar_advertiz_md float_left">
                                    <a href="#">
                                        <img src="{{ asset('assets-website') }}/images/index_III/add.png"
                                            alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="st_ind_sidebar_advertiz_social st_video_slide_social_left  float_left">
                                    <h3>Profiles</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st slider sidebar wrapper End -->
    <!-- prs theater Slider Start -->
    <div class="prs_theater_main_slider_wrapper">
        <div class="prs_theater_img_overlay"></div>
        <div class="prs_theater_sec_heading_wrapper">
            <h2>TOP MOVIES IN THEATRES</h2>
        </div>
        <div class="wrap-album-slider">
            <ul class="album-slider">
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up1.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up2.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up3.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up4.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up5.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up6.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
                <li class="album-slider__item">
                    <figure class="album">
                        <div class="prs_upcom_movie_box_wrapper">
                            <div class="prs_upcom_movie_img_box">
                                <img src="{{ asset('assets-website') }}/images/content/up7.jpg" alt="movie_img" />
                                <div class="prs_upcom_movie_img_overlay"></div>
                                <div class="prs_upcom_movie_img_btn_wrapper">
                                    <ul>
                                        <li><a href="#">View Trailer</a>
                                        </li>
                                        <li><a href="#">View Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="prs_upcom_movie_content_box">
                                <div class="prs_upcom_movie_content_box_inner">
                                    <h2><a href="#">Busting Car</a></h2>
                                    <p>Drama , Acation</p> <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="prs_upcom_movie_content_box_inner_icon">
                                    <ul>
                                        <li><a href="movie_booking.html"><i
                                                    class="flaticon-cart-of-ecommerce"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End album body -->
                    </figure>
                    <!-- End album -->
                </li>
                <!-- End album slider item -->
            </ul>
            <!-- End slider -->
        </div>
    </div>

    <!-- Large modal show trailer-->
    <div class="modal fade" id="modal-show-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog custom-modal-size" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="100%"
                        src="{{ str_replace('watch?v=', 'embed/', $film->trailer_youtube_link) }}?controls=0"
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>

    <!-- prs theater Slider End -->
    @include('website.partials.header')
    @include('website.partials.script')

</body>

</html>