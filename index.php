<?php
include('header.php');
?>


<!-- --------------Header End-------------- -->

<!-- --------------Navbar End-------------- -->

<!-- --------------Swiper Start-------------- -->


<section class="mySlider">
	<div class="splide mySwiper">
		<div class="splide__arrows">
			<button class="splide__arrow splide__arrow--prev">
				<i class="fa-solid fa-circle-chevron-left"></i>
			</button>
			<button class="splide__arrow splide__arrow--next">
				<i class="fa-solid fa-circle-chevron-right"></i> </button>
		</div>
		<div class="splide__track">
			<ul class="splide__list">

				<?php
				foreach ($sliderList as $slider) {
				?>
					<li class="splide__slide">
						<img src="images/banner/<?php echo $slider['banner_img']; ?>" alt="">
						<div class="image-data">
							<div class="container">
								<span class="pack-quote"><?php echo $slider['banner_quote']; ?></span>
								<h2 class="pack-title"><?php echo $slider['banner_title']; ?></h2>
								<a href="<?php echo $slider['banner_link']; ?>" class="trip-detail-btn">Explore <i class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</li>

				<?php
				}
				?>


			</ul>
		</div>
	</div>
</section>

<section class="venture">
	<div class="container">
		<div class="title-wrap">
			<span>Popular Trips</span>
			<div class="venture-title">
				<div class="title-center">
					<h2 class="en-title">Our Best Selling Trips</h2>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-4.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Everest Base Camp Trek</h1>
						</a>
						<div class="price-time">
							<span>14 Days <span>|</span> USD 1,345</span>
						</div>
					</main>

				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-5.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Annapurna Base Camp Trek</h1>
						</a>
						<div class="price-time">
							<span>10 Days <span>|</span> USD 1,045</span>
						</div>
					</main>

				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-3.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Mardi Himal Trek</h1>
						</a>
						<div class="price-time">
							<span>9 Days <span>|</span> USD 745</span>
						</div>
					</main>

				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/featured-2.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Ghorepani Poonhill Trek</h1>
						</a>
						<div class="price-time">
							<span>10 Days <span>|</span> USD 855</span>
						</div>
					</main>

				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/gokyo.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Gokyo Valley Trek</h1>
						</a>
						<div class="price-time">
							<span>17 Days <span>|</span> USD 1,845</span>
						</div>
					</main>

				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-4">
				<div class="vt-card">
					<a href="#" class="vt-image">
						<img class="image" src="images/manaslu.jpg" alt="Mt Fishtail" />
					</a>
					<main class="main-content">
						<a href="">
							<h1>Manaslu Circuit Trek</h1>
						</a>
						<div class="price-time">
							<span>18 Days <span>|</span> USD 1,645</span>
						</div>
					</main>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-intro">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="wl-title"><span class="my-title">Welcome To Shikhar Adventure</span>

					<span class="sh-title">Create unforgettable lifetime experience in Himalayas with Shikhar Adventure.</span>
				</div>
				<div class="row">

					<div class="intro-card">

						<div class="intro-text">
							<p><b>Shikhar Adventure</b> is a leading trekking agency in Nepal, owned and operated by <b><u>Dambar Thapa</u></b>,<br>
								a seasoned trekking guide with over a decade of experience in the industry. With a team of experienced and knowledgeable
								guides, <b>Shikhar Adventure</b> offers a wide range of trekking packages to suit every level of trekker,<br> from beginners
								to experienced adventurers.</p>
							<p><b>We</b> are dedicated to giving our clients the best trekking experience in Nepal. We specialize in
								organizing trekking <br> tours to some of the most beautiful locations in the Himalayas, such as the <b><u>Everest Base Camp</u></b>,<br>
								the <b><u>Annapurna Circuit</u></b>, and the <b><u>Langtang Valley</u></b>,
								among others. With a focus on safety,<br> comfort, and adventure, our <b>trekking</b> packages are designed to
								provide a one-of-a-kind <br> and unforgettable experience.</p>
							<p><b>" Your Travel is Our Xenium "</b></p>

							<p>To summarize, <b>Shikhar Adventure</b> is the ideal choice for the ultimate <a href=""><b><u>trekking</u></b></a>experience in <b>Nepal</b>.
								We guarantee a safe, comfortable, and unforgettable Himalayan adventure with our commitment to sustainable tourism,
								experienced guides, and personalized services. <a href=""><b><u>Contact us</u></b></a> today to reserve your trekking tour!</p>
						</div>

						<div class="read-intro">
							<a href="" class="read">Everything About Us</a>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>



<!--Featured Trips-->
<section class="featured">
	<div class="container">
		<div class="title-box">
			<span>Recommended Trips</span>
			<h3>Featured Trips</>
		</div>
		<section id="demos">
			<div class="row">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<a class="ft-image" href=""> <img src="images/abc-yoga.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="title">
								<a href="">
									<h3> Annapurna Yoga Trek
									</h3>
								</a>
							</div>
							<div class="duration-grade">
								<span>15 Days<strong>|</strong>USD 1245</span>
							</div>
							<div class="review">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<span>Based on <p>45</p> Reviews</span>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/blog-ktm.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="title">
								<a href="">
									<h3> Kathmandu Heritage Tour
									</h3>
								</a>
							</div>
							<div class="duration-grade">
								<span>3 Days<strong>|</strong>USD 450</span>
							</div>
							<div class="review">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<span>Based on <p>29</p> Reviews</span>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/mustang.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="title">
								<a href="">
									<h3> Upper Mustang Trek
									</h3>
								</a>
							</div>
							<div class="duration-grade">
								<span>17 Days<strong>|</strong>USD 2245</span>
							</div>
							<div class="review">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<span>Based on <p>29</p> Reviews</span>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/luxury.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="title">
								<a href="">
									<h3> Everest Luxury Trek
									</h3>
								</a>
							</div>
							<div class="duration-grade">
								<span>12 Days<strong>|</strong>USD 2455</span>
							</div>
							<div class="review">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<span>Based on <p>45</p> Reviews</span>
							</div>
						</main>

					</div>
					<div class="item">
						<a class="ft-image" href=""> <img src="images/phoksundo.jpg" alt="" class="trek-thumb" />
						</a>
						<main class="ft-detail">
							<div class="title">
								<a href="">
									<h3> Shey Phoksundo Trek
									</h3>
								</a>
							</div>
							<div class="duration-grade">
								<span>20 Days<strong>|</strong>USD 2685</span>
							</div>
							<div class="review">
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<span>Based on <p>45</p> Reviews</span>
							</div>
						</main>

					</div>


				</div>

				<div class="see-more">
					<a href="">See More <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	</div>
</section>
<!--Featureds Trip End-->

<!--NEW TESTI-->
<section id="page" class="site">
	<div class="container">
		<div class="testi">
			<div class="head">
				<span>Testimonials</span>
				<h3>What Our Clients Say About Us</h3>
			</div>
			<div class="body swiper swiperTest">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/profile-1.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Awesome Experience</span>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Gigi Hadid</h4>
									<p>Cupertino, U.S.A</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image2.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Best Guide I've Ever Had</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Sarah Malik</h4>
									<p>Texas, U.S.A</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image3.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Great Experience</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Kelly Wakasa</h4>
									<p>Sydney, Australia</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image4.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Friendly Guides & Porters</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Ava Karlson</h4>
									<p>Canberra, Australia</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
								</div>
							</div>
						</div>
					</li>
					<li class="swiper-slide">
						<div class="wrapper">
							<div class="thumbnail">
								<img src="images/image5.jpg" alt="" />
							</div>
							<div class="aside">
								<span class="rev-title">Very Concerned About Safety</span>

								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Magnam maxime earum in repudiandae? Corrupti porro cumque
									ipsum, vero nostrum consequuntur.
								</p>
								<div class="name">
									<h4>Emma Watson</h4>
									<p>Toronto, Canada</p>
								</div>
								<div class="stars">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>

							</div>
						</div>
					</li>
				</ul>
				<div class="swiper-pagination swiper-pagination2"></div>
				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev swiper-button-prev-x"></div>
				<div class="swiper-button-next swiper-button-next-y"></div>
			</div>
		</div>
	</div>
</section>


</div>
<?php
include('footer.php');
?>