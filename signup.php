<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  #mc_embed_signup form {padding-left: 0;}
  .nospace {margin-left: 0; padding-left: 0;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//genesisaugmented.us1.list-manage.com/subscribe/post?u=7d217728e53617bda27873180&amp;id=60ea19aeb2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7d217728e53617bda27873180_60ea19aeb2" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<script>
		var form = document.getElementById('mc-embedded-subscribe-form');

		form.addEventListener('submit', function(event) {
		event.preventDefault();
		var fname = document.getElementById('mce-FNAME').value;
		var lname = document.getElementById('mce-LNAME').value;
		var email = document.getElementById('mce-EMAIL').value;

		console.log("video status: " + played);

		$.ajax({
			type: "POST",
			url: "scripts/emailInsert.php",
			data: {fname: fname, lname: lname, email: email},
			success: function (response) {
				console.log(response);
				// form.className = "nospace";
				//Digress when encountering a Timeout
				setTimeout(submitForm, 1000);
				var formSubmitted = false;
				function submitForm() {
					if(!formSubmitted){
						formSubmitted = true;
						form.submit();
					}
				}

				fbq('track', 'Signup Vanilla');
				fbq('track', 'Signup Discount');

				ga('send', 'event', 'Signup Form', 'submit', {
					hitCallback: function() {
						form.submit();
					}
				});

				if(played == true){
					ga('send', 'event', 'Signup and Video', 'goal', {
						hitCallback: function() {
							form.submit();
						}
					});
				}

			}
		});
	});
</script>
<!--End mc_embed_signup-->
