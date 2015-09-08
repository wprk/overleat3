<?php require('inc/header.php'); ?>
	<?php echo print_r($_SESSION); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="col-xs-12 col-md-8 col-lg-8 pull-right contact">
				<h1>Drop us a message:</h1>
				<form id="contactForm" role="form" method="post" action="inc/send_email.php">
					<div class="form-group">
						<span class="error-msg"><?php echo $_SESSION['error_name']; ?></span>
						<input type="text" placeholder="Name" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg"><?php echo $_SESSION['error_email']; ?></span>
						<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg"><?php echo $_SESSION['error_phone']; ?></span>
						<input type="phone" placeholder="Phone Number" name="phone" id="phone" class="form-control">
					</div>
					<div class="form-group">
						<span class="error-msg"><?php echo $_SESSION['error_message']; ?></span>
						<textarea placeholder="Message" name="message" id="message" class="form-control" cols="100" rows="10"></textarea>
					</div>
					<div class="form-group">
						<span class="error-msg"><?php echo $_SESSION['error_recaptcha']; ?></span>
						<div class="g-recaptcha" data-sitekey="6Ld2eQwTAAAAAEEZmKqGvzWL54tOdQi2n6BflaLE"></div>
					</div>
					<button class="btn btn-primary btn-lg btn-contact" id="submit" type="submit">Send Message</button>
				</form>
			</div>
		</div>
	</div>
	<!-- /container -->
<?php require('inc/footer.php'); ?>
<?php
	unset($_SESSION['error_name']);
	unset($_SESSION['error_email']);
	unset($_SESSION['error_phone']);
	unset($_SESSION['error_message']);
	unset($_SESSION['error_recaptcha']);
?>
