<?php require('inc/header.php'); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="col-xs-12 col-md-8 col-lg-8 pull-right contact">
				<h1>Any questions? send us a message</h1>
				<form id="contactForm" role="form" method="post" action="inc/send_email.php">
					<div class="form-group">
						<span class="error-msg">Please enter your name.</span>
						<input type="text" placeholder="Name" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg">Please enter a valid e-mail address.</span>
						<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg">Please enter a valid phone number.</span>
						<input type="phone" placeholder="Phone Number" name="phone" id="phone" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg">Please enter a message.</span>
						<textarea placeholder="Message" name="message" id="message" class="form-control" cols="100" rows="10"></textarea>
					</div>
					<div class="form-group">
						<span class="error-msg">Your security token didn't match please try again.</span>
						<div class="g-recaptcha" data-sitekey="6Ld2eQwTAAAAAEEZmKqGvzWL54tOdQi2n6BflaLE"></div>
					</div>
					<button class="btn btn-primary btn-lg btn-contact" id="submit" type="submit">Send Message</button>
				</form>
			</div>
		</div>
	</div>
	<!-- /container -->
<?php require('inc/footer.php'); ?>
