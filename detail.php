<?php
$dateOfBirthLuca = '05-20-04';
$dateOfBirthOmar = '10-25-04';
require_once 'AgeFunction.php';

$ages = [
	'lucaAge' => calculateAge($dateOfBirthLuca),
	'omzAge' => calculateAge($dateOfBirthOmar)
];

$team = array(
    array(
        'name' => 'Omar Orabi',
        'dateOfBirth' => '10/25/2004',
        'title' => 'Lead Developer',
        'link' => 'http://localhost/ase230/02/OMAR_ORABI.php',
        'image' => 'assets/images/profile2.jpg',
        'email' => 'orabio1@mymail.nku.edu',
        'number' => '(859)-878-8411',
        'linkedinWeb' => 'https://www.linkedin.com',
        'githubHandle' => 'ttps://github.com',
        'yourWebsite' => 'http://localhost/ASE-230/02/OMAR_ORABI.php',
        'Summary' => 'I am a sophomore cureently attending Northern Kentucky University. I am working to recieve a degree in Cybersecurity and I hope to secure a job as a Cybersecurity Analyst. Although I am currently learning the basics of many different programming languages and platforms, i am dedicated to the dynamic feild of cybersecurity and am eager to gain more knowledge about cybersecurity through hands-on projects and a strong commitment to learning digital security. I am a quick learner which I understand is essential for someone to be pursuing a cybersecurity career.',
        'Job1' => array(
		array(
        	'position' => 'Host',
        	'location' => 'Bourbon House Pizza',
        	'timeofEmployment' => '2019 - 2020',
        	'Description' => 'I was a Host for a pizza resturaunt for about a year. It was my first job and it taught me customer service and time management. I efficiently managed guest flow, seating, and waitlists during peak hours, ensuring minimal wait times and customer satisfaction. I also resolved minor issues promptly and escalated complex matters to management when necessary, ensuring guest satisfaction and maintained the restaurants appearance by ensuring that the host area, waiting area, and entrance were clean, organized, and aesthetically pleasing.',
        	'achievements' => array (
        		'a1' => 'Selected for coach assistant',
        		'a2' => 'YMCA Executive Officer',
        		'a3' => 'KEES Scholarship',
        		'a4' => 'Blue Ridge Outstanding Performance Plaque',
        	),
        	'TechnologyUsed' => array(
        		't1' => 'none'
        	),
        		
        ),
	),

        'Job2' => array(
		array(
        	'position' => 'Cook',
        	'location' => 'Village Market',
        	'timeofEmployment' => '2020 - present',
        	'Description' => 'I am a cook for a convenince store called The Village Market. I stock, cook fried chicken, and clean the entire store. I received and organized incoming inventory shipments and carefully checked them for quality and accuracy. I also restocked the displays to make sure products were visually appealing. I gained valuable experience in multitasking, time management, and customer service.',
        	'achievements' => array (
        		'Selected for coach assistant',
        		'YMCA Executive Officer',
        		'KEES Scholarship',
        		'Blue Ridge Outsstanding Performance Plaque'
        	),
        	'TechnologyUsed' => array(
        		'none'
        	),
        ),
	),
        'Skills' => array(
        	'Python' => 10,
        	'Linux' => 10,
        	'JavaScript' => 10,
        	'Node.js' => 10,
         	'HTML/CSS/SASS/LESS' => 10
        ),
        'OtherSkills' => array(
        	'Basic HTML',
        	'Basic Java',
        	'Basic Python',
        	'Basic Linux'
        ),
        'Education' => array(
        	'High School Diploma',
        	'Boone County High School',
        	'2018 - 2022'
        ),
        'Awards' => array(
            array(
                'name' => 'Coach Assistant',
                'desc' => 'Selected as coach assistant for soccer'
            ),
            array(
                'name' => 'Blue Ridge Outstanding Performance Plaque',
                'desc' => 'My group was awarded a plaque because of our exemplary performance in the program.'
            )
        ),
        'Languages' => array(
            array(
                'name' => 'English',
                'proficiency' => 'Native'
            ),
            array(
                'name' => 'Arabic',
                'proficiency' => 'Professional'
            )
        ),
        'Interests' => array(
            'Skiing',
            'Jumproping',
            'Video Games'
        ),
        
        
        
    ),
    array(
        'name' => 'Luca Buhrmester',
        'title' => 'Designer',
        'link' => 'http://localhost/ase230/01%203/LUCA_BUHRMESTER.php',
        'image' => 'assets/images/Myportrait.jpg',
		'email' => 'buhrmestel1@mymail.nku.edu',
        'number' => '(859)-802-9549',
        'linkedinWeb' => 'https://www.linkedin.com',
        'githubHandle' => 'github.com/LucaBuhr',
        'yourWebsite' => 'http://localhost/ase230/01/individual-page.php',
        'Summary' => 'I graduated from Boone County highschool with a 3.75 GPA while playing varsity soccer 4 years. BCHS was a very culturally diverse so I learned how to team-build and communicate with many different types of people and I think this gives me an advantage. While in highschool, I worked 2 different kitchen jobs, and now have a position at walmart. Im also currently in my second year of college at Northern Kentucky University, majoring in cybersecurity and on track to graduate in my 4th year.',
        'Job1' => array(
			array(
				'position' => 'Dishwasher/Pizza Prep',
				'location' => 'Bourbon House Pizza',
				'timeofEmployment' => '2019 - 2020',
				'Description' => 'Washed dishes and helped out on the prep line',
				'achievements' => array(
					"'Best pizza we've had from here!' - An elderly couple of regulars at Bourbon House"
				),
				'TechnologyUsed' => array(
					'Dishwasher',
					'Sink',
					'Ticket Printer',
				),
			),
		),
		'Job2' => array(
			array(
				'position' => 'Cook/Kitchen Crew',
				'location' => 'BWW',
				'timeofEmployment' => '2021 - 2022',
				'Description' => 'Worked in the kitchen on several different stations while collaborating with the rest of the chefs to satisfy hundreds of hungry customers a night. Worked opening and closing shifts; morning = preparation, night = clean up and close.',
				'achievements' => array(
					'Cooked and sauced over 1000 wings per hour on SuperBowl night',
				),
				'TechnologyUsed' => array(
					'Deep Friers',
					'Ovens',
					'Order Screens',
					'Timers',
					'Microwave',
					'Walk-in Cooler/Freezer',
					'Ticket Printer',
				),
			),
		),
        'Skills' => array(
        	'Quick Learning/Good Listening' => 98,
        	'Linux' => 26,
        	'JavaScript' => 11,
        	'Python' => 25,
         	'HTML/CSS/SASS/LESS' => 15
        ),
        'OtherSkills' => array(
        	'os1' => 'Social Media',
        	'os2' => 'Communication/Teamwork',
        	'os3' => 'Virtual Machine/Command Console',
        	'os4' => 'Hardware Setup'
        ),
        'Education' => array(
        	'High School Diploma',
        	'Boone County High School',
        	'2018 - 2022'
        ),
        'Awards' => array(
            array(
                'name' => 'Educational Diversity Scholarship',
                'desc' => 'Awarded to me for writing a 2 page essay on how my cultural background effected my education and lifestyle, because I am first American-born generation in my family as well as first college student in my family.'
            ),
            array(
                'name' => 'Excellence Scholarship',
                'desc' => 'Awarded to me for graduating with a 3.5 GPA and an essay on why I think I belong at NKU'
            )
        ),
        'Languages' => array(
            array(
                'name' => 'English',
                'proficiency' => 'Native'
            ),
            array(
                'name' => 'German',
                'proficiency' => 'Professional'
            )
        ),
        'Interests' => array(
            'Sports',
            'Music',
            'Video Games'
        ),
        
	), 
        
    );

$memberData=$team[$_GET['member']];

?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $memberData['name']; ?></h5>
            <p class="card-text"><?php echo $memberData['title']; ?></p>
            <p class="card-text">Phone Number: <?php echo $memberData['number']; ?></p>
        </div>
    </div>


	<?php
function displayWorkExperience($jobData) {
    foreach ($jobData as $jobEntry) {
        if (isset($jobEntry['position'])) {
            echo '<article class="resume-timeline-item position-relative pb-5">';
            echo '<div class="resume-timeline-item-header mb-2">';
            echo '<div class="d-flex flex-column flex-md-row">';
            echo '<h3 class="resume-position-title font-weight-bold mb-1">' . $jobEntry['position'] . '</h3>';
            echo '<div class="resume-company-name ms-auto">' . $jobEntry['location'] . '</div>';
            echo '</div>';
            echo '<div class="resume-position-time">' . $jobEntry['timeofEmployment'] . '</div>';
            echo '</div>';
            echo '<div class="resume-timeline-item-desc">';
            echo '<p>' . $jobEntry['Description'] . '</p>';

            // Check for achievements within this job entry
            if (isset($jobEntry['achievements']) && is_array($jobEntry['achievements'])) {
                echo '<h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>';
                echo '<ul>';
                foreach ($jobEntry['achievements'] as $achievement) {
                    if (!empty($achievement)) {
                        echo '<li>' . $achievement . '</li>';
                    }
                }
                echo '</ul>';
            }

            // Check for technologies used
if (isset($jobEntry['TechnologyUsed']) && is_array($jobEntry['TechnologyUsed'])) {
    echo '<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>';
    echo '<ul class="list-inline">';
    foreach ($jobEntry['TechnologyUsed'] as $tech) {
        echo '<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $tech . '</span></li>';
    }
    echo '</ul>';
}

            echo '</div>';
            echo '</article>';
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $memberData["name"]; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name resume">
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
    <div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="row">
                <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                    <img class="picture" src="<?= $memberData['image']; ?>" alt=""></div><!--//col-->
                <div class="col">
                    <div class="row p-4 justify-content-center justify-content-md-between">
                        <div class="primary-info col-auto">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $memberData['name']; ?></h1>
                            <div class="title mb-3"><?= $memberData['title']; ?></div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $memberData['email']; ?></a></li>
                                <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $memberData['number']; ?></a></li>
                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info col-auto mt-2">
                            <ul class="resume-social list-unstyled">
                                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?= $memberData['linkedinWeb']; ?></a></li>
                                <li class="mb-3"><a class a="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?= $memberData['githubHandle']; ?></a></li>
                                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?= $memberData['yourWebsite']; ?></a></li>
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
                    <p class="mb-0"><?= $memberData['Summary']; ?></p>
                </div>
            </section><!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?= 'Work Experience'; ?></h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">
                                <?php
                                if (isset($memberData['Job1'])) {
                                    displayWorkExperience($memberData['Job1']);
                                }

                                if (isset($memberData['Job2'])) {
                                    displayWorkExperience($memberData['Job2']);
                                }
                                ?>
                            </div><!--//resume-timeline-item-desc-->
						    </div>
					    </section>
				    </div>
    <div class="col-lg-3">
        <section class="resume-section skills-section mb-5">
            <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?= 'Skills & Tools'; ?></h2>
            <div class="resume-section-content">
                <div class="resume-skill-item">
                    <ul class="list-unstyled mb-4">
                        <?php
                        foreach ($memberData['Skills'] as $skillName => $width) {
                            ?>
                            <li class="mb-2">
                                <div class="resume-skill-name"><?= $skillName; ?></div>
                                <div class="progress resume-progress">
                                    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $width; ?>%" aria-valuenow="<?= $width; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!--//resume-skill-item-->
            </div>
        </section>
    </div>
                                    <div class="resume-skill-item">
                                        <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                        <ul class="list-inline">
                                            <?php foreach ($memberData['OtherSkills'] as $otherSkill) : ?>
                                                <li class="list-inline-item mb-2">
                                                <div class="resume-skill-name"><?php echo $otherSkill; ?></div>
                                                </li>
                                                <?php endforeach; ?>
                                        </ul>
                                    </div><!--//resume-skill-item-->
                                </div><!--resume-section-content-->
                            </section><!--//skills-section-->
    <section class="resume-section education-section mb-5">
        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
        <div class="resume-section-content">
            <ul class="list-unstyled">
                <?php for ($i = 0; $i < count($memberData['Education']); $i++) : ?>
                    <li class="mb-2">
                        <?php
                        // Check the index to access the correct element
                        if ($i === 0) {
                            echo '<div class="resume-degree font-weight-bold">' . $memberData['Education'][$i] . '</div>';
                        } else if ($i === 1) {
                            echo '<div class="resume-degree-org">' . $memberData['Education'][$i] . '</div>';
                        } else if ($i === 2) {
                            echo '<div class="resume-degree-time">' . $memberData['Education'][$i] . '</div>';
                        }
                        ?>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </section><!--//education-section-->
                            <section class="resume-section reference-section mb-5">
                                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
                                <div class="resume-section-content">
                                    <ul class="list-unstyled resume-awards-list">
                                        <?php foreach ($memberData['Awards'] as $award) : ?>
                                                <li class="mb-2 ps-4 position-relative">
                                                <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
                                                <div class="resume-award-name"><?php echo $award['name']; ?></div>
                                                <div class="resume-award-desc"><?php echo $award['desc']; ?></div>
                                                </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </section><!--//interests-section-->
                            <section class="resume-section language-section mb-5">
                                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
                                <div class="resume-section-content">
                                    <ul class="list-unstyled resume-lang-list">
                                        <?php foreach ($memberData['Languages'] as $language) : ?>
                                            <li class="mb-2">
                                            <span class="resume-lang-name font-weight-bold"><?php echo $language['name']; ?></span>
                                            <small class="text-muted font-weight-normal">(<?php echo $language['proficiency']; ?>)</small>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </section><!--//language-section-->
                            <section class="resume-section interests-section mb-5">
                                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                                <div class="resume-section-content">
                                    <ul class="list-unstyled">
                                        <?php foreach ($memberData['Interests'] as $interest) : ?>
                                            <li class="mb-1"><?php echo $interest; ?></li>
                                        <?php endforeach; ?>
                                </ul>
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
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
        </footer>

        

    </body>
    </html>