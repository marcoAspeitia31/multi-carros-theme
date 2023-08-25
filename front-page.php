<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Multi_Carros
 */

get_header();
?>

	<main id="primary" class="site-main">

		

	</main>
 <!--====== Start Hero Section ======-->
 <section class="hero-area">

            <div class="hero-wrapper-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h1 class="wow fadeInUp" wow-data-delay="30mss">Dream Explore
                                    Discover</h1>
                                <h3 class="wow fadeInDown" wow-data-delay="50ms">People Don’t Take,Trips Take People</h3>
                                <div class="hero-search-wrapper wow fadeInUp" wow-data-delay="70ms">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 col-sm-12">
                                                <div class="form_group">
                                                    <input type="search" class="form_control" placeholder="Search By Category" name="search" required>
                                                    <i class="ti-ink-pen"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" placeholder="Location" name="location" required>
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="form_group">
                                                    <button class="main-btn icon-btn">Search Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p class="tags"><span>Popular:</span><a href="#">Saloon</a>,<a href="#">Restaurant</a>,<a href="#">Game</a>,<a href="#">Counter</a>,<a href="#">Train Station</a>,<a href="#">Parking</a>,<a href="#">Shooping</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--====== Start Category Section ======-->
<section class="category-area">
            <div class="container">
                <div class="category-wrapper-one wow fadeInDown">
                    <div class="row no-gutters">
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-government"></i>
                                    </div>
                                    <h6>Museums</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-serving-dish"></i>
                                    </div>
                                    <h6>Restaurant</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-game-controller"></i>
                                    </div>
                                    <h6>Game Field</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-suitcase"></i>
                                    </div>
                                    <h6>Job & Feed</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-gift-box"></i>
                                    </div>
                                    <h6>Party Center</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="flaticon-dumbbell"></i>
                                    </div>
                                    <h6>Fitness Zone</h6>
                                </div>
                                <a href="index.html" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Category Section ======-->
      <!--====== Start Listing Section POST======-->
      <section class="listing-grid-area pt-115 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-75 wow fadeInUp">
                            <span class="sub-title">Featured List</span>
                            <h2>Explore Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="10ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-1.jpg" alt="Listing Image">
                                <span class="featured-btn">Featured</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-chef"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Restaurant</h6>
                                        </div>
                                    </div>
                                    <span class="status st-open">Open</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">Food Corner</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-2.jpg" alt="Listing Image">
                                <span class="featured-btn">Featured</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-government"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Museums</h6>
                                        </div>
                                    </div>
                                    <span class="status st-open">Open</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">Central History</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="30ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-3.jpg" alt="Listing Image">
                                <span class="featured-btn">Fitness</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-dumbbell"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Fitness</h6>
                                        </div>
                                    </div>
                                    <span class="status st-close">Close</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">Xtream Gym</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="40ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-4.jpg" alt="Listing Image">
                                <span class="featured-btn">Featured</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-suitcase"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Job & Feed</h6>
                                        </div>
                                    </div>
                                    <span class="status st-open">Open</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">Mega Agency</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="50ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-5.jpg" alt="Listing Image">
                                <span class="featured-btn">Featured</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-shopping"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Central Plaza</h6>
                                        </div>
                                    </div>
                                    <span class="status st-close">Close</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">Central Plaza</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="60ms">
                            <div class="listing-thumbnail">
                                <img src="assets/images/listing/listing-grid-6.jpg" alt="Listing Image">
                                <span class="featured-btn">Featured</span>
                                <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                    <div class="meta-icon-title d-flex align-items-center">
                                        <div class="icon">
                                            <i class="flaticon-color-palette"></i>
                                        </div>
                                        <div class="title">
                                            <h6>Art Gallery</h6>
                                        </div>
                                    </div>
                                    <span class="status st-open">Open</span>
                                </div>
                            </div>
                            <div class="listing-content">
                                <h3 class="title"><a href="listing-details-1.html">National Art</a></h3>
                                <div class="ratings">
                                    <ul class="ratings ratings-three">
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li><span><a href="#">(02 Reviews)</a></span></li>
                                    </ul>
                                </div>
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Listing Section ======-->
        <!--====== Start offer Section ======-->
        <section class="cta-area">
            <div class="cta-wrapper-one bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="cta-content-box text-center wow fadeInUp">
                                <img src="assets/images/icon-1.png" alt="offer icon">
                                <h2>Splash Yourself Bigger
                                    Offer on Everyday</h2>
                                <a href="how-work.html" class="main-btn icon-btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End offer Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-one pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="features-img wow fadeInLeft">
                                <img src="assets/images/features/features-1.jpg" alt="Features Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-content-box features-content-box-one">
                                <div class="section-title section-title-left mb-25 wow fadeInUp">
                                    <span class="sub-title">Our Speciality</span>
                                    <h2>Comprehnsive All Great
                                        Destination Here</h2>
                                </div>
                                <h5>Risus urnas Iaculis per amet vestibulum luctus.tincidunt ultricies aenean
                                    quam eros eleifend sodales cubilia mattis quam.</h5>
                                <ul class="features-list-one">
                                    <li class="list-item wow fadeInUp" data-wow-delay="10ms">
                                        <div class="icon">
                                            <i class="flaticon-find"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Find What You Want</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item wow fadeInUp" data-wow-delay="20ms">
                                        <div class="icon">
                                            <i class="flaticon-place"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Easy Choose Your Place</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item wow fadeInUp" data-wow-delay="30ms">
                                        <div class="icon">
                                            <i class="flaticon-social-care"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Live Online Assistance</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Features Section ======-->
        <!--====== Start Place Section ======-->
        <section class="place-area pt-115 pb-110">
            <div class="container-fluid place-container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 wow fadeInUp">
                            <span class="sub-title">Feature Places</span>
                            <h2>Explore By Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="place-slider-one wow fadeInDown">
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/place-1.jpg" alt="Place Image">
                            <div class="place-overlay">
                                <div class="place-content text-center">
                                    <span class="listing">10 Listing</span>
                                    <h3 class="title">Australia</h3>
                                    <a href="listing-grid.html" class="arrow-btn"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/place-2.jpg" alt="Place Image">
                            <div class="place-overlay">
                                <div class="place-content text-center">
                                    <span class="listing">10 Listing</span>
                                    <h3 class="title">Australia</h3>
                                    <a href="listing-grid.html" class="arrow-btn"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/place-3.jpg" alt="Place Image">
                            <div class="place-overlay">
                                <div class="place-content text-center">
                                    <span class="listing">10 Listing</span>
                                    <h3 class="title">Australia</h3>
                                    <a href="listing-grid.html" class="arrow-btn"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/place-4.jpg" alt="Place Image">
                            <div class="place-overlay">
                                <div class="place-content text-center">
                                    <span class="listing">10 Listing</span>
                                    <h3 class="title">Australia</h3>
                                    <a href="listing-grid.html" class="arrow-btn"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item place-item-one">
                        <div class="place-thumbnail">
                            <img src="assets/images/place/place-2.jpg" alt="Place Image">
                            <div class="place-overlay">
                                <div class="place-content text-center">
                                    <span class="listing">10 Listing</span>
                                    <h3 class="title">Australia</h3>
                                    <a href="listing-grid.html" class="arrow-btn"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Place Section ======-->
        <!--====== Start Download Section ======-->
        <section class="download-app">
            <div class="download-wrapper-one pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="app-img wow fadeInLeft">
                                <img src="assets/images/app-1.png" alt="App Image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="download-content-box download-content-box-one">
                                <div class="section-title section-title-left mb-25 wow fadeInUp">
                                    <span class="sub-title">Downlaod App</span>
                                    <h2>Comprehnsive All Great
                                        Destination Here</h2>
                                </div>
                                <p>Dictumst integer tellus eros quam vestibulum ante tortor mollis adipisn pharetra curae curae and pulvinar porttitor</p>
                                <ul class="button wow fadeInDown">
                                    <li>
                                        <a href="index.html" class="app-btn">
                                            <div class="icon">
                                                <i class="ti-android"></i>
                                            </div>
                                            <div class="info">
                                                <span>get it on</span>
                                                <h6>Goole Play</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html" class="app-btn">
                                            <div class="icon">
                                                <i class="ti-apple"></i>
                                            </div>
                                            <div class="info">
                                                <span>get it on</span>
                                                <h6>App Store</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="counter-area pt-120">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one wow fadeInUp">
                                                <div class="info">
                                                    <h4><span>Member</span>Professional</h4>
                                                    <h3><span class="count">220</span> +</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one wow fadeInUp">
                                                <div class="info">
                                                    <h4><span>Listing</span>Received</h4>
                                                    <h3><span class="count">72</span>K +</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one wow fadeInUp">
                                                <div class="info">
                                                    <h4><span>Client</span>Satisfaction</h4>
                                                    <h3><span class="count">50</span>K +</h3>
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
        </section><!--====== End Download Section ======-->
        <!--====== Start Popular Listing Section ======-->
        <section class="listing-grid-area pt-75 pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 wow fadeInUp">
                            <span class="sub-title">Featured List</span>
                            <h2>Explore Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="listing-slider-one wow fadeInDown">
                    <div class="listing-item listing-grid-item-two">
                        <div class="listing-thumbnail">
                            <img src="assets/images/listing/listing-grid-7.jpg" alt="Listing Image">
                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                            <span class="featured-btn">Featured</span>
                            <ul class="ratings ratings-four">
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li><span><a href="#">(02 Reviews)</a></span></li>
                            </ul>
                        </div>
                        <div class="listing-content">
                            <h3 class="title"><a href="listing-details-1.html">Pizza Recipe</a></h3>
                            <p>Popular restaurant in california</p>
                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                            <div class="listing-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="listing-item listing-grid-item-two">
                        <div class="listing-thumbnail">
                            <img src="assets/images/listing/listing-grid-8.jpg" alt="Listing Image">
                            <a href="#" class="cat-btn"><i class="flaticon-dumbbell"></i></a>
                            <ul class="ratings ratings-three">
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li><span><a href="#">(02 Reviews)</a></span></li>
                            </ul>
                        </div>
                        <div class="listing-content">
                            <h3 class="title"><a href="listing-details-1.html">Gym Ground</a></h3>
                            <p>Popular restaurant in california</p>
                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">close</span></span>
                            <div class="listing-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="listing-item listing-grid-item-two">
                        <div class="listing-thumbnail">
                            <img src="assets/images/listing/listing-grid-9.jpg" alt="Listing Image">
                            <a href="#" class="cat-btn"><i class="flaticon-government"></i></a>
                            <span class="featured-btn">Featured</span>
                            <ul class="ratings ratings-five">
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li><span><a href="#">(02 Reviews)</a></span></li>
                            </ul>
                        </div>
                        <div class="listing-content">
                            <h3 class="title"><a href="listing-details-1.html">City Palace</a></h3>
                            <p>Popular restaurant in california</p>
                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                            <div class="listing-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="listing-item listing-grid-item-two">
                        <div class="listing-thumbnail">
                            <img src="assets/images/listing/listing-grid-1.jpg" alt="Listing Image">
                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                            <span class="featured-btn">Featured</span>
                            <ul class="ratings ratings-two">
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li><span><a href="#">(02 Reviews)</a></span></li>
                            </ul>
                        </div>
                        <div class="listing-content">
                            <h3 class="title"><a href="listing-details-1.html">Pizza Recipe</a></h3>
                            <p>Popular restaurant in california</p>
                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                            <div class="listing-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Popular Listing Section ======-->
        <!--====== Start Intro Video Section ======-->
        <section class="intro-video">
            <div class="intro-wrapper-one bg_cover pt-115" style="background-image: url(assets/images/bg/video-bg-1.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="play-content play-content-one text-center wow fadeInLeft">
                                <a href="https://www.youtube.com/watch?v=lJyzByVH1oQ" class="video-popup"><i class="flaticon-play-button"></i></a>
                                <h5>Play Video</h5>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="intro-content-box intro-content-box-one wow fadeInRight">
                                <div class="section-title section-title-left section-title-white mb-35">
                                    <span class="sub-title">Checkout List</span>
                                    <h2>Professional planners
                                        for your vacation</h2>
                                </div>
                                <p>Risus urnas Iaculis per amet vestibulum luctus tincidunt ultricies aenean
                                    quam eros eleifend sodales cubilia mattis quam.</p>
                                <a href="listing-grid.html" class="main-btn icon-btn">Explore List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <!--====== End Intro Video Section ======-->
        <!--====== Start Newsletter Section ======-->
        <section class="newsletter-area">
            <div class="container">
                <div class="newsletter-wrapper newsletter-wrapper-one bg_cover" style="background-image: url(assets/images/bg/newsletter-bg-1.jpg);">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-content-box-one wow fadeInLeft">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content">
                                    <h2>Get Special
                                        Rewards</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="newsletter-form wow fadeInRight">
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Enter Address" name="email" required>
                                    <i class="ti-location-pin"></i>
                                    <button class="main-btn">Subscribe +</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Newsletter Section ======-->
        <!--====== Start Client Section ======-->
        <section class="client-area pt-120">
            <div class="client-wrapper-one pb-120">
                <div class="container">
                    <div class="client-slider-one wow fadeInDown">
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/01.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/02.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/03.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/04.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/02.png" alt="Client Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Client Section ======-->
        <!--====== Start Blog Section ======-->
        <section class="blog-area pt-115 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-60 wow fadeInUp">
                            <span class="sub-title">Recent Articles</span>
                            <h2>Every Single Journal</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item blog-post-item-one mb-40 wow fadeInUp" data-wow-delay="10ms">
                            <div class="post-thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt="Blog Image"></a>
                                <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                            </div>
                            <div class="entry-content">
                                <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i>Tours & Travel</a>
                                <h3 class="title"><a href="blog-details.html">Duis nonummy socios mattis
                                    tempus penatibus</a></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                        <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item blog-post-item-one mb-40 wow fadeInUp" data-wow-delay="20ms">
                            <div class="post-thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt="Blog Image"></a>
                                <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                            </div>
                            <div class="entry-content">
                                <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i>Tours & Travel</a>
                                <h3 class="title"><a href="blog-details.html">Litora phasellus in phasellus
                                    curabitur porta eun</a></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                        <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item blog-post-item-one mb-40 wow fadeInUp" data-wow-delay="310ms">
                            <div class="post-thumbnail">
                                <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt="Blog Image"></a>
                                <div class="post-date"><a href="#">20 <span>Oct</span></a></div>
                            </div>
                            <div class="entry-content">
                                <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i> Tours & Travel</a>
                                <h3 class="title"><a href="blog-details.html">Mattis parturent tortor lectus
                                    lestie sapien Dapus</a></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="ti-comments-smiley"></i><a href="#">0 Comment</a></span></li>
                                        <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button text-center mt-40">
                            <a href="blog.html" class="main-btn icon-btn">View Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Blog Section ======-->
<?php

get_sidebar();
get_footer();
?>
