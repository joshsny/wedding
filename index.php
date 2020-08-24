
<?php
$page_title = 'Home';
require('header.php');
?>
	
	
		<div class="hero" data-section="home">
			<div class="overlay"></div>
				<div class="cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>Opole, Poland</h1>
										<h2>Hania &amp; Josh</h2>
										<p><span>01.01.2020</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		
		<div id="couple" class="section-gray">
			<div class="container">
				<div class="row row-bottom-padded-md animate-box">
					<div class="col-md-6 col-md-offset-3 text-center">
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/groom.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>Jack Wood</h3>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><i class="icon-heart"></i></h2></div>
						<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
							<img src="images/bride.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>Rose Thomas</h3>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-12 text-center heading-section">
							<h2>Are Getting Married</h2>
							<p><strong>on Dec 28, 2017 &mdash; Boracay, Philippines</strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="countdown">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<p class="countdown">
						<span id="days"></span>
						<span id="hours"></span>
						<span id="minutes"></span>
						<span id="seconds"></span>
					</p>
				</div>
			</div>
		</div>

		<div id="started" style="background-image:url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>Are You Attending?</h2>
						<p>Please Fill-up the form to notify you that you're attending. Thanks.
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-inline">
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php require('footer.php') ?>

