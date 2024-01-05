<?php
include "header.php";
?>
<title>Contact | Devsy Tech - Mobile Application Development, Web Design &amp; Web App Development</title>
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<div class="bread-inner">
						<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
							<ul>
								<li><a href="./">Home</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
							<h2>Contact</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->
<!--Start Enquire Form-->
<section class="contact-page pad-tb">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 v-center">
				<div class="common-heading text-l">
					<span>Contact Now</span>
					<h2 class="mt0 mb0">Have Question? Write a Message</h2>
					<p class="mb60 mt20">We will catch you as early as we receive the message</p>
				</div>
				<div class="form-block">
					<form id="contactForm" class="shake" method="POST" name="contactForm">
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="name" placeholder="Enter name" required="" name="name"
									data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<input type="email" id="email" placeholder="Enter email" required="" name="email">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" id="mobile" placeholder="Enter mobile" required=""
									name="phone_number" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<select id="Dtype" required="" name="requirement">
									<option value="">Select Requirement</option>
									<option value="web-development">Web Development</option>
									<option value="graphic-design">UI/UX Design</option>
									<option value="mobile-app-development">Mobile App Development</option>
									<option value="ecommerce-development">Ecommerce Development</option>
									<option value="other">Other</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<textarea id="message" rows="5" placeholder="Enter your message" required=""
								name="message"></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn" name="submit">Submit
							<span class="circle"></span>
						</button>
						<div id="contact_msg"></div>
						<div class="clearfix"></div>
					</form>


				</div>
			</div>
			<div class="col-lg-5 v-center">
				<div class="contact-details">
					<div class="contact-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center">
							<span><i class="fas fa-phone-alt"></i> Phone:</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
								<a href="tel:+254279092897">(+254)729092897</a>
							</div>
						</div>
					</div>
					<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
						<div class="info-card v-center">
							<span><i class="fas fa-envelope"></i> Email:</span>
							<div class="info-body">
								<p>Our support team will get back to in 24-h during standard business hours.</p>
								<a href="mailto:info@graph.co.ke">info@graph.co.ke</a>
							</div>
						</div>
					</div>
					<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
						<div class="info-card v-center">
							<span><i class="fab fa-skype"></i> Skype:</span>
							<div class="info-body">
								<p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
								<a href="skype:live:machariakihahu7?call">Graph Technologies.company</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Enquire Form-->
<!--Start Location-->
<section class="contact-location pad-tb bglight">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<span>Our Locations</span>
					<h2>Our office</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center upset shape-numm">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.808351045742!2d36.780992714157286!3d-1.2892119359915362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f109996536c39%3A0x4eb6d6e1e16b4153!2siHub!5e0!3m2!1sen!2ske!4v1623882869479!5m2!1sen!2ske"
				width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</section>
<!--End Location-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var contactForm = document.getElementById("contactForm");

        contactForm.addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent the default form submission

            var form = e.target;
            var form_btn = form.querySelector('button[type="submit"]');
            var originalButtonText = form_btn.innerText;

            // Disable the submit button when submitting.
            form_btn.disabled = true;
            form_btn.innerText = 'Submitting...';

            var formData = new FormData(form);

            fetch("submit_contact.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("contact_msg").innerHTML = data;

                // Re-enable the submit button and restore its original text.
                form_btn.disabled = false;
                form_btn.innerText = originalButtonText;
            })
            .catch(error => {
                console.error('Error:', error);

                // Re-enable the submit button and restore its original text.
                form_btn.disabled = false;
                form_btn.innerText = originalButtonText;
            });
        });
    });
</script>

<?php
include "footer.php";
?>