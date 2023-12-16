<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Luca G. Buhrmesters Resume</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="mb-4"><a href='index.php' class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/Myportrait.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo 'Luca Buhrmester'; ?></h1>
							    <div class="title mb-3"><?= 'CyberSecurity Ameteur in Training'; ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo 'lucbuhr@gmail.com'; ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= '859-802-9549'; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= 'linkedin.com/in/yourlink'; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= 'github.com/LucaBuhr'; ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= 'yourwebsite.com' ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?= 'Summary'; ?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?= 'I graduated from Boone County highschool with a 3.75 GPA while playing varsity soccer 4 years. BCHS was a very culturally diverse so I learned how to team-build and communicate with many different types of people and I think this gives me an advantage. While in highschool, I worked 2 different kitchen jobs, and now have a position at walmart. Im also currently in my second year of college at Northern Kentucky University, majoring in cybersecurity and on track to graduate in my 4th year.'; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?= 'Work Experience' ?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= 'Dishwasher/Pizza Prep'; ?></h3>
										        <div class="resume-company-name ms-auto"><?= 'Bourbon House Pizza'; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= '2020 - 2021'; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= 'Washed dishes and helped out on the prep line'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p><b><em><?= "'Best pizza we've had from here!'"; ?></b></em><?= '- An elderly couple of regulars at Bourbon House'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Dishwasher'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Sink'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Ticket Printer'; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
										
								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= 'Cook/Kitchen Crew'; ?></h3>
										        <div class="resume-company-name ms-auto"><?= 'Buffalo Wild Wings'; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= '2021 - 2022'; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= 'Worked in the kitchen on several different stations while colaborating with the rest of the chefs to satisfy hundreds of hungry customers a night. Worked opening and closing shifts; morning = prepartion, night = clean up and close.'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p><?= 'Cooked and sauced over 1000 wings per hour on SuperBowl night'; ?>.</p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Deep Friers'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Order Screens'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Oven'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Timers'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Microwave'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Walk-in Cooler/Freezer'; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= 'Cap Team 2 Associate'; ?></h3>
										        <div class="resume-company-name ms-auto"><?= 'Walmart Supercenter'; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= '2022 - Present'; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= 'Completed a variety of tasks throughout the day in order to move freight and disperse it throughout the supercenter. These tasks include working with a team to unload trucks and backload them if needed, Stocking merchandise and groceries while helping customers who need your attention, Stacking and downstacking boxes onto wooden pallets, Cleaning the backroom, and so much more when needed.'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?= 'Achievements'; ?></h4>
											<p><?= 'Trained several new employees when hired'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Barcode Scanner'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Computer'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Pallet Jacks'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Cardboard/Plastic Bailers'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Me@Walmart Mobile Application'; ?></span></li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= "'Even' Mobile Finance Application"; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
									
									<article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?= 'Volunteer Work (PNO)'; ?></h3>
										        <div class="resume-company-name ms-auto"><?= 'YMCA Leaders Club'; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?= '2018 - 2020'; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?= "This club would often raise money for charity and other YMCA related events. We would do things like organize fundraisers and help vendors set up, have meetings to discuss how we can raise money, and more! Most noteably, once a month we did a 'Parents night out' where parents could leave their kids from 4pm - 11pm with our group at the YMCA to do fun activities while we take care of them."; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?= 'Achievements'; ?></h4>
											<p><?= 'N/A'; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Teamsnap'; ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= 'Walkie Talkies'; ?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= 'Quick Learning/Good Listening'; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= 'Python'; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= 'Java/JavaScript'; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 11%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= 'Linux'; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 26%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= 'HTML/CSS'; ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Social Media'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light">Code Review</span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Communication/Teamwork'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Problem Solving'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Virtual Machine Familarity'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Discord'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Hardware Setup'; ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?= 'Competetive'; ?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?= 'Highschool Diploma'; ?></div>
								        <div class="resume-degree-org"><?= 'Boone County High School'; ?></div>
								        <div class="resume-degree-time"><?= '2018 - 2022'; ?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?= 'Majoring in Cybersecurity'; ?></div>
								        <div class="resume-degree-org"><?= 'Northern Kentucky University'; ?></div>
								        <div class="resume-degree-time"><?= '2022 - Present'; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?= 'Educational Diversity Scholarship'; ?></div>
								        <div class="resume-award-desc"><?= 'Awarded to me for writing a 2 page essay on how my cultural background effected my education and lifestyle, because I am first American-born generation in my family as well as first college student in my family.'; ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?= 'Excellence Scholarship'; ?></div>
								        <div class="resume-award-desc"><?= 'Awarded to me for graduating with a 3.5 GPA and an essay on why I think I belong at NKU'; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal"><?= '(2nd but Native)'; ?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?= 'German'; ?></span> <small class="text-muted font-weight-normal"><?= '(Fluent)'; ?></small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?= 'Video Games'; ?></li>
								    <li class="mb-1"><?= 'Playing and Watching Sports'; ?></li>
								    <li class="mb-1">Cooking</li>
									<li class="mb-1"><?= 'Creating and Listening to Music'; ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i><?= ' by Luca'; ?></small>
    </footer>

    

</body>
</html> 

