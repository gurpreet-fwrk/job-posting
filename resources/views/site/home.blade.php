@extends('layouts.site')
@section('content')

      <section class="banner-sec">
        <img src="images/banner-image.png">
        <div class="overlay-sec">
        </div>
        <div class="caption">
        	<div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-9 col-lg-9">
                <div class="banner-content">
                  <h1>The #1 Job Search Website for Chiropractic Professionals</h1>
                  <h6>We take the headache out of hiring</h6>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-10 col-lg-10">
              	<div class="form-group">
              		<form class="form-inline banner-form">    
                      <input type="text" class="form-control" id="keywords" placeholder="Keywords" name="keywords">
                      <input type="text" class="form-control" id="location" placeholder="Location" name="location">
                      <select class="form-control">
                        <option value="volvo">I'm Hiring</option>
                        <option value="saab">xyz</option>
                        <option value="mercedes">abc</option>
                        <option value="audi">abc</option>
                      </select>
                      <input type="submit" name="submit" value="Search" class="form-control" id="submit-btn">
                	</form>
              	</div>
                
              </div>
            </div>
          </div>
        </div>
    </section>
    <article class="home-art">
      <section class="top-sec">
      	<div class="container">
      		<div class="row">
      			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
      				<div class="sec-text">
      					<h2>Learn about great opportunities in your area</h2>
      					<p>Whether you are looking FOR a position, or looking to FILL a position, ChirosConnect can help. Through video interview ads we help connect practice owners with new and seasoned doctors that are looking for an opportunity. This way you get to know the person, their personality and see if it may be a good fit for you before meeting in person.</p>
      					<a href="#" class="get-start">get started</a>
      				</div>	
      			</div>
      			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
      				<div class="right-image">
      					<img src="images/girl-image.png">
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      <section class="top-job-sec">
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-12 col-md-12 col-lg-12 text-center">
      				<h2>Top Rated Jobs</h2>
      			</div>
      			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
      				<div class="main-div">
						<div class="top-img">
							<img src="images/home-3.png">
							<a href="#">view more</a>
						</div>
						<div class="bottom-text">
							<h6>Functional Medicine Associate Wanted at Yost Family Chiropractic</h6>
							<p>Urbandale, IA-Do you have a great attitude andwant to work in a high volume, high energy office? DC seeking</p>
							<span class="full-time">full time</span>
							<span class="location">Urbandale, IA</span>						 									
						</div>
					</div>
      			</div>
      			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
      				<div class="main-div">
						<div class="top-img">
							<img src="images/home-one.png">
							<a href="#">view more</a>
						</div>
						<div class="bottom-text">
							<h6>Functional Medicine Associate Wanted at Yost Family Chiropractic</h6>
							<p>Urbandale, IA-Do you have a great attitude andwant to work in a high volume, high energy office? DC seeking</p>
							<span class="full-time">full time</span>
							<span class="location">Urbandale, IA</span>						 									
						</div>
					</div>
      			</div>
      			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
      				<div class="main-div">
						<div class="top-img">
							<img src="images/home-two.png">
							<a href="#">view more</a>
						</div>
						<div class="bottom-text">
							<h6>Functional Medicine Associate Wanted at Yost Family Chiropractic</h6>
							<p>Urbandale, IA-Do you have a great attitude andwant to work in a high volume, high energy office? DC seeking</p>
							<span class="part-time">Part time</span>
							<span class="location">Urbandale, IA</span>						 									
						</div>
					</div>
      			</div>
      		</div>
      	</div>
      </section>
	  @if(!$features->isEmpty())
      <section class="mid-sec">
      	<div class="container">
      		<div class="row">
      			<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
      				<h2>Looking To Fill A Position?</h2>
      			</div>
				@foreach($features as $feature)
      			<div class="col-12 col-sm-12 col-md-4 col-lg-4">
      				<div class="main-div">
						<div class="top-div">
							<span>{{ App\Hash::price($feature->price) }}</span>
						</div>
						<div class="bottom-text">
							<h3>{{ ucwords($feature->title) }}</h3>
							<h6>{{ ucfirst($feature->subtitle) }}</h6>
							<p>{{ $feature->content }}</p>
							<a href="subscription.html" class="buy-now">buy now</a>					 									
						</div>
					</div>
      			</div>
				@endforeach
      		</div>
      	</div>
      </section>
	  @endif
      <section class="bottom-sec">
      	<div class="container">
      		<div class="row">
      			<div class="col-12 col-sm-12 col-md-9 col-lg-9 m-auto text-center">
      				<div class="content">
      					<h2>ChirosConnect offers a modern way to post your position and attract the right candidate</h2>
      					<h6>Making job seeking more personal by creating video interview ads.</h6>
      					<div class="row">
      						<div class="col-12 col-sm-12 col-md-10 col-lg-10 m-auto">
	      						<form class="contact-form">   
				      				<div class="form-group">
				      					<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
			                        	<input type="submit" name="submit" value="Connect" class="form-control" id="connect-btn">
				      				</div> 
			                      	
		                		</form>
	      					</div>
      					</div>
      				</div>	
      			</div>
      		</div>
      	</div>
      	<div class="overlay-dark"></div>
      </section>
      <section class="slider-sec">
      	<div class="container">
      		<div class="row">
	      		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	      			<div class="swiper-container">
					    <div class="swiper-wrapper">
					      <div class="swiper-slide">
					      	<div class="main-div">
					      		<div class="comma-img">
					      			<img src="images/icons/comma.png">
					      		</div>
					      		<div class="round-image">
					      			<img src="images/home5.png">
					      		</div>
						      	<div class="slide-custom">
						      		<h6>ChiroSushi</h6>
						      		<a href="#" >https://chirosushi.com/</a>
						      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						      	</div>
					      	</div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="main-div">
					      		<div class="comma-img">
					      			<img src="images/icons/comma.png">
					      		</div>
					      		<div class="round-image">
					      			<img src="images/home6.png">
					      		</div>
						      	<div class="slide-custom">
						      		<h6>ChiroSushi</h6>
						      		<a href="#" >https://chirosushi.com/</a>
						      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						      	</div>
					      	</div>
					      </div>
					      <div class="swiper-slide">
					      	<div class="main-div">
					      		<div class="comma-img">
					      			<img src="images/icons/comma.png">
					      		</div>
					      		<div class="round-image">
					      			<img src="images/home5.png">
					      		</div>
						      	<div class="slide-custom">
						      		<h6>ChiroSushi</h6>
						      		<a href="#" >https://chirosushi.com/</a>
						      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						      	</div>
					      	</div>
					      </div>
					            <div class="swiper-slide">
					      	<div class="main-div">
					      		<div class="comma-img">
					      			<img src="images/icons/comma.png">
					      		</div>
					      		<div class="round-image">
					      			<img src="images/home5.png">
					      		</div>
						      	<div class="slide-custom">
						      		<h6>ChiroSushi</h6>
						      		<a href="#" >https://chirosushi.com/</a>
						      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						      	</div>
					      	</div>
					      </div>
					        <div class="swiper-slide">
						      	<div class="main-div">
						      		<div class="comma-img">
						      			<img src="images/icons/comma.png">
						      		</div>
						      		<div class="round-image">
						      			<img src="images/home5.png">
						      		</div>
							      	<div class="slide-custom">
							      		<h6>ChiroSushi</h6>
							      		<a href="#" >https://chirosushi.com/</a>
							      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							      	</div>
						      	</div>
					      </div>
					        <div class="swiper-slide">
						      	<div class="main-div">
						      		<div class="comma-img">
						      			<img src="images/icons/comma.png">
						      		</div>
						      		<div class="round-image">
						      			<img src="images/home5.png">
						      		</div>
							      	<div class="slide-custom">
							      		<h6>ChiroSushi</h6>
							      		<a href="#" >https://chirosushi.com/</a>
							      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							      	</div>
						      	</div>
					      </div>
					             <div class="swiper-slide">
						      	<div class="main-div">
						      		<div class="comma-img">
						      			<img src="images/icons/comma.png">
						      		</div>
						      		<div class="round-image">
						      			<img src="images/home5.png">
						      		</div>
							      	<div class="slide-custom">
							      		<h6>ChiroSushi</h6>
							      		<a href="#" >https://chirosushi.com/</a>
							      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							      	</div>
						      	</div>
					      </div>
					             <div class="swiper-slide">
						      	<div class="main-div">
						      		<div class="comma-img">
						      			<img src="images/icons/comma.png">
						      		</div>
						      		<div class="round-image">
						      			<img src="images/home5.png">
						      		</div>
							      	<div class="slide-custom">
							      		<h6>ChiroSushi</h6>
							      		<a href="#" >https://chirosushi.com/</a>
							      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							      	</div>
						      	</div>
					      </div>
					             <div class="swiper-slide">
						      	<div class="main-div">
						      		<div class="comma-img">
						      			<img src="images/icons/comma.png">
						      		</div>
						      		<div class="round-image">
						      			<img src="images/home5.png">
						      		</div>
							      	<div class="slide-custom">
							      		<h6>ChiroSushi</h6>
							      		<a href="#" >https://chirosushi.com/</a>
							      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							      	</div>
						      	</div>
					      </div>
					    </div>
					    <!-- Add Pagination -->
					    <div class="swiper-pagination"></div>
					    <!-- Add Arrows -->
					    <!-- <div class="swiper-button-next"></div>
					    <div class="swiper-button-prev"></div> -->
					</div>
	      		</div>
      		</div>
      	</div>
      
      </section>
    </article>

<script type="text/javascript">
    
    $(document).ready(function(){
      $(document).on("scroll", function()
          {
          if ($(document).scrollTop() > 192)
          {
            $("header nav").addClass("navbar-new");
          }

          else{
            $("header nav").removeClass("navbar-new");
          }
          });
    });

  </script>

@endsection