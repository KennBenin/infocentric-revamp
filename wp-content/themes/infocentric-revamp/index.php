<?php 
/* Template Name: Home */
get_header(); ?>

<section class="banner pt-[13px] pb-[100px]">
	<div class="container">
		<div class="content-wrapper flex flex-nowrap items-center justify-between">
			<div class="left-wrapper">
				<h1 class="heading">The Leader in Identity Security</h1>
				<p class="description">We help enterprises and SMBs (Small and Medium Businesses) build a world where anyone can safely use any technology, powered by Identity.</p>
				<div class="btn-wrapper flex flex-row justify-start">
					<a href="#" class="left-btn btn py-[16px] font-bold text-center min-w-[244px] max-w-[244px]">GET EXPERTS</a>
					<a href="#" class="right-btn btn py-[16px] font-bold text-center min-w-[244px] max-w-[244px]">SEE PACKAGES</a>
				</div>
			</div>
			<div class="right-wrapper">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/home-banner-image.png" alt="homepage-hero-image">
			</div>
		</div>
	</div>
</section>

<section class="identity py-[100px]">
	<div class="container">
		<div class="content-wrapper flex flex-nowrap justify-between items-center">
			<div class="left-wrapper max-w-[597px]">
				<h2 class="heading">The identity landscape around the globe</h2>
				<p class="description">
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
					<br><br>
					The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>
			</div>
			<div class="right-wrapper">
				<img class="max-w-[445px]" src="<?php echo get_template_directory_uri();?>/assets/images/home-identity-image.png" alt="home-identity-image">
			</div>
		</div>
	</div>
</section>

<section class="form py-[100px]">
	<div class="container">
		<div class="content-wrapper">
			<div class="top-wrapper">
				<h2 class="heading mb-[25px] font-bold text-center">The Largest Television Network, Financial Institutions, and Telecommunications Company in the Country Trusted us.</h2>
				<p class="description mb-[50px] text-center">Let us help you with your Identity Journey. Talk to us today!</p>
			</div>
			<div class="bottom-wrapper">
				<div class="form-wrapper">
					<?php echo do_shortcode('[contact-form-7 id="31" title="Contact Form"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="identity-security-management py-[100px] bg-fixed bg-no-repeat bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/identity-management-banner.png');">
	<div class="container">
		<div class="content-wrapper max-w-[717px]">
			<h2 class="title text-white mb-[50px]">What’s your Identity Security Management Challenge?</h2>
			<div class="challenges accordion">
				<div class="row flex">
					<div class="col">
						<div class="tabs overflow-hidden">
							<div class="tab  w-100% text-white overflow-hidden">
								<input type="radio" id="rd1" name="rd">
								<label class="tab-label font-semibold" for="rd1">I need Unified Identity Governance and Management</label>
								<div class="tab-content">
								Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
								</div>
							</div>
							<div class="tab  w-100% text-white overflow-hidden">
								<input type="radio" id="rd2" name="rd">
								<label class="tab-label font-semibold" for="rd2">I need something Straightforward to Administer and Easy to Modify</label>
								<div class="tab-content">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
								</div>
							</div>
							<div class="tab  w-100% text-white overflow-hidden">
								<input type="radio" id="rd3" name="rd">
								<label class="tab-label font-semibold" for="rd3">I need a True Identity Governance Solution that Anticipates and Accounts for Compliance Needs</label>
								<div class="tab-content">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
								</div>
							</div>
							<div class="tab  w-100% text-white overflow-hidden">
								<input type="radio" id="rd4" name="rd">
								<label class="tab-label font-semibold" for="rd4">I need Hardened Privilege Access Management</label>
								<div class="tab-content">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
								</div>
							</div>
						<!-- <div class="tab  w-100% text-white overflow-hidden">
							<input type="radio" id="rd3" name="rd">
							<label for="rd3" class="tab-close">Close others &times;</label>
						</div> -->
						</div>
					</div>
				</div>
				<div class="challenge">
					<p class="title"></p>
					<div class="description"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
