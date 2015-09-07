<?php require('inc/header.php'); ?>
	<div class="container">
		<div class="row">
			<div id="content" class="col-xs-12 col-md-8 col-lg-8 pull-right">
				<form id="feedbackForm" role="form">
					<div class="form-group">
						<input type="text" placeholder="Name" name="name" id="name" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center; cursor: auto;">
						<span style="display: none;" class="help-block">Please enter your name.</span>
					</div>
					<div class="form-group">
						<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
						<span style="display: none;" class="help-block">Please enter a valid e-mail address.</span>
					</div>
					<div class="form-group">
						<input type="phone" placeholder="Phone Number" name="phone" id="phone" class="form-control">
						<span style="display: none;" class="help-block">Please enter a valid phone number.</span>
					</div>
					<div class="form-group">
						<textarea placeholder="Message" name="message" id="message" class="form-control" cols="100" rows="10"></textarea>
						<span style="display: none;" class="help-block">Please enter a message.</span>
					</div>
					<div class="form-group">
						<div class="g-recaptcha" data-sitekey="6Ld2eQwTAAAAAEEZmKqGvzWL54tOdQi2n6BflaLE"></div>
					</div>
					<button style="display: block; margin-top: 10px;" class="btn btn-primary btn-lg" id="feedbackSubmit" type="submit">Send Message</button>
				</form>
			</div>
		</div>
	</div>
	<!-- /container -->
<?php require('inc/footer.php'); ?>
