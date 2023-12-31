@extends('layouts.frontendapp')


@section('content')

    <!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- section main content -->
	<section class="main-content mt-3">
		<div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog-single.html#">{{ $postdata->category->title }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $postdata->title }}</li>
                </ol>
            </nav>

			<div class="row gy-4">

				<div class="col-lg-8">
					<!-- post single -->
                    <div class="post post-single">
						<!-- post header -->
						<div class="post-header">
							<h1 class="title mt-0 mb-3">{{ $postdata->title }}</h1>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="blog-single.html#"><img src="https://api.dicebear.com/5.x/bottts/svg?size=32&seed=happy" class="author" alt="author"/>{{ $postdata->user->name }}</a></li>
								<li class="list-inline-item"><a href="blog-single.html#">{{ $postdata->type }}</a></li>
								<li class="list-inline-item">{{ Carbon\Carbon::parse($postdata->created_at)->diffForHumans() }}</li>
							</ul>
						</div>
						<!-- featured image -->
						<div class="featured-image">
							<img src="{{ asset('storage/'. $postdata->image) }}" alt="post-title" />
						</div>
						<!-- post content -->
						<div class="post-content clearfix">

                            {!! $postdata->content !!}

						</div>
						<!-- post bottom section -->
						<div class="post-bottom">
							<div class="row d-flex align-items-center">
								<div class="col-md-6 col-12 text-center text-md-start">
									<!-- tags -->
									@forelse ($postdata->tags as $tag)
                                    <a href="blog-single.html#" class="tag">{{ ($tag->name) }}</a>
                                    @empty
                                        
                                    @endforelse
								</div>
								<div class="col-md-6 col-12">
									<!-- social icons -->
									<ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-telegram-plane"></i></a></li>
										<li class="list-inline-item"><a href="blog-single.html#"><i class="far fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

                    </div>

					<div class="spacer" data-height="50"></div>

					<div class="about-author padding-30 rounded">
						<div class="thumb">
							<img src="{{ asset('frontend/images/other/avatar-about.png')}}" alt="Katen Doe" />
						</div>
						<div class="details">
							<h4 class="name"><a href="blog-single.html#">Katen Doe</a></h4>
							<p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0">
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Comments (3)</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- post comments -->
					<div class="comments bordered padding-30 rounded">

						<ul class="comments">
							<!-- comment item -->
							<li class="comment rounded">
								<div class="thumb">
									<img src="images/other/comment-1.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="blog-single.html#">John Doe</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut tortor fringilla cursus sed quis odio.</p>
									<a href="blog-single.html#" class="btn btn-default btn-sm">Reply</a>
								</div>
							</li>
							<!-- comment item -->
							<li class="comment child rounded">
								<div class="thumb">
									<img src="images/other/comment-2.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="blog-single.html#">Helen Doe</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
									<a href="blog-single.html#" class="btn btn-default btn-sm">Reply</a>
								</div>
							</li>
							<!-- comment item -->
							<li class="comment rounded">
								<div class="thumb">
									<img src="images/other/comment-3.png" alt="John Doe" />
								</div>
								<div class="details">
									<h4 class="name"><a href="blog-single.html#">Anna Doe</a></h4>
									<span class="date">Jan 08, 2021 14:41 pm</span>
									<p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
									<a href="blog-single.html#" class="btn btn-default btn-sm">Reply</a>
								</div>
							</li>
						</ul>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Leave Comment</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>
					<!-- comment form -->
					<div class="comment-form rounded bordered padding-30">

						<form id="comment-form" class="comment-form" method="post">
				
							<div class="messages"></div>
							
							<div class="row">

								<div class="column col-md-12">
									<!-- Comment textarea -->
									<div class="form-group">
										<textarea name="InputComment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
									</div>
								</div>

								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required">
									</div>
								</div>

								<div class="column col-md-6">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Website" required="required">
									</div>
								</div>
	
								<div class="column col-md-12">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name" required="required">
									</div>
								</div>
						
							</div>
	
							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button><!-- Submit Button -->
	
						</form>
					</div>
                </div>

				<div class="col-lg-4">

					<!-- sidebar -->
					<div class="sidebar">
						<!-- widget about -->
						<div class="widget rounded">
							<div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
								<img src="{{ asset('frontend/images/logo.svg') }}" alt="logo" class="mb-4" />
								<p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
								<ul class="social-icons list-unstyled list-inline mb-0">
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-pinterest"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-medium"></i></a></li>
									<li class="list-inline-item"><a href="blog-single.html#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- widget popular posts -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Popular Posts</h3>
								<img src="{{ asset('frontend/images/wave.svg') }}" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
		
								<!-- post -->
								<div class="post post-list-sm circle">
									<div class="thumb circle">
										<span class="number">3</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="{{ asset('storage/'. $postdata->image) }}" alt="{{ asset('storage/'. $postdata->title) }}" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">{{ $postdata->title }}</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">{{ carbon\carbon::parse($postdata->created_at)->diffforhumans() }}</li>
										</ul>
									</div>
								</div>
							</div>		
						</div>

						<!-- widget categories -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Explore Topics</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<ul class="list">
									<li><a href="blog-single.html#">Lifestyle</a><span>(5)</span></li>
									<li><a href="blog-single.html#">Inspiration</a><span>(2)</span></li>
									<li><a href="blog-single.html#">Fashion</a><span>(4)</span></li>
									<li><a href="blog-single.html#">Politic</a><span>(1)</span></li>
									<li><a href="blog-single.html#">Trending</a><span>(7)</span></li>
									<li><a href="blog-single.html#">Culture</a><span>(3)</span></li>
								</ul>
							</div>
							
						</div>

						<!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
								<form>
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="blog-single.html#">Privacy Policy</a></span>
							</div>		
						</div>

						<!-- widget post carousel -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Celebration</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<div class="post-carousel-widget">
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">Trending</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-2.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
									<!-- post -->
									<div class="post post-carousel">
										<div class="thumb rounded">
											<a href="category.html" class="category-badge position-absolute">How to</a>
											<a href="blog-single.html">
												<div class="inner">
													<img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
												</div>
											</a>
										</div>
										<h5 class="post-title mb-0 mt-4"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
										<ul class="meta list-inline mt-2 mb-0">
											<li class="list-inline-item"><a href="blog-single.html#">Katen Doe</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- carousel arrows -->
								<div class="slick-arrows-bot">
									<button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
									<button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
								</div>
							</div>		
						</div>

						<!-- widget advertisement -->
						<div class="widget no-container rounded text-md-center">
							<span class="ads-title">- Sponsored Ad -</span>
							<a href="blog-single.html#" class="widget-ads">
								<img src="images/ads/ad-360.png" alt="Advertisement" />	
							</a>
						</div>

						<!-- widget tags -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Tag Clouds</h3>
								<img src="images/wave.svg" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<a href="blog-single.html#" class="tag">#Trending</a>
								<a href="blog-single.html#" class="tag">#Video</a>
								<a href="blog-single.html#" class="tag">#Featured</a>
								<a href="blog-single.html#" class="tag">#Gallery</a>
								<a href="blog-single.html#" class="tag">#Celebrities</a>
							</div>		
						</div>

					</div>

				</div>

			</div>

		</div>
	</section>
@endsection