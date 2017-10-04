<footer>
			<div class="container_12">
				<div class="grid_4">
					<div class="copy">
						UKRAINE INTERNATIONAL AIRLINES (c) 2017 | <a href="#">Privacy Policy</a>
						<ul >
						<li><a href="<?php echo site_url('login') ?>">Login</a></li>
						<li><a href="<?php echo site_url('login/register') ?>">Register</a></li>
					</ul>
					</div>
				</div>
				<div class="grid_4">
					<div class="copy">
						Follow and like us on:
						<ul >
						<li><a href="https://twitter.com/fly_uia">Twitter</a></li>
						<li><a href="https://www.facebook.com/flyuia.worldwide">Facebook</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul> 
					</div>
				</div>
				<div class="grid_4">
					<div class="copy">
						Contact Information: 
						<ul>
							<li>Ukaraine Airlines Inc. 
								8901 Marmora Road,
								Kiev, D04 89UA.
							</li>
							<li><a href="#">Tel: +1 800 603 6035</a></li>
							<li><a href="#">E-mail: Contact@flyuia.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>