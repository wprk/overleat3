<div class="container">
	<div class="row">
		<div id="content" class="col-xs-12 col-md-8 col-lg-8 pull-right contact">
			<h1>Any questions? send us a message</h1>
			<form id="contactForm" role="form" method="post" action="">
				<div class="form-group">
					<span class="error-msg"><?php echo $error_name ?></span>
					<input type="text" placeholder="Name" name="name" id="name" class="form-control" value="<?php echo $name; ?>">
				</div>
				<div class="form-group">
					<span class="error-msg"><?php echo $error_email; ?></span>
					<input type="email" placeholder="Email Address" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<span class="error-msg"><?php echo $error_phone; ?></span>
					<input type="phone" placeholder="Phone Number" name="phone" id="phone" class="form-control" value="<?php echo $phone; ?>">
				</div>
				<div class="form-group">
					<span class="error-msg"><?php echo $error_message; ?></span>
					<textarea placeholder="Message" name="message" id="message" class="form-control" rows="6"><?php echo $message; ?></textarea>
				</div>
				<div class="form-group">
					<span class="error-msg"><?php echo $error_recaptcha; ?></span>
					<div class="g-recaptcha" data-sitekey="6Ld2eQwTAAAAAEEZmKqGvzWL54tOdQi2n6BflaLE"></div>
				</div>
				<button class="btn btn-primary btn-lg btn-contact" id="submit" type="submit">Send Message</button>
			</form>
		</div>
	</div>
</div>
<!-- /container -->
