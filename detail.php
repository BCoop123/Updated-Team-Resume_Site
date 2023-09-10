<?php
$currentPage = $_GET['index'];

require_once('data.php');
require_once('functions.php')
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?=$resumes[$currentPage]['Title'];?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$resumes[$currentPage]['Title'];?>">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="<?=$resumes[$currentPage]['tabIcon'];?>"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?=$resumes[$currentPage]['Header']['Headshot'];?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$resumes[$currentPage]['Header']['Name'];?></h1>
							    <?php
                                $dateOfBirth = $resumes[$currentPage]['Header']['dob'];
                                $age = calculateAge($dateOfBirth);
                                ?>
								<div class="title mb-3">
    								<?=$resumes[$currentPage]['Header']['Position'];?><br>
    								<?=$age;?> Years Old
								</div>
						    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?=$resumes[$currentPage]['Header']['Email'];?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$resumes[$currentPage]['Header']['Email'];?></li>
								    <li><a class="text-link" href="tel:<?=$resumes[$currentPage]['Header']['Phone'];?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$resumes[$currentPage]['Header']['Phone'];?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?=$resumes[$currentPage]['Header']['RickRoll'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$resumes[$currentPage]['Header']['LinkedIn'];?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?=$resumes[$currentPage]['Header']['RickRoll'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$resumes[$currentPage]['Header']['GitHub'];?></a></li>
					                <li><a class="text-link" href="<?=$resumes[$currentPage]['Header']['RickRoll'];?>" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$resumes[$currentPage]['Header']['Website'];?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$resumes[$currentPage]['Summary'];?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
									<?php
										foreach ($resumes[$currentPage]['WorkExperience'] as $key => $Job) {
											DisplayWorkExperience($Job);
										}
									?>        
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
										<?php
											foreach ($resumes[$currentPage]['ProgressBarSkills'] as $key => $PBSkills) {
												echo '
												<li class="mb-2">
													<div class="resume-skill-name">' . $PBSkills['SkillName'] . '</div>
													<div class="progress resume-progress">
														<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: ' . $PBSkills['SkillProgress'] . '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</li>';
											}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_1'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_2'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_3'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_4'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_5'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_6'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_7'];?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$resumes[$currentPage]['OtherSkills']['Other_Skill_8'];?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php
										foreach ($resumes[$currentPage]['Education'] as $key => $EduRecord) {
											echo '
											<li class="mb-2">
												<div class="resume-degree font-weight-bold">' . $EduRecord['Ed_Degree'] . '</div>
												<div class="resume-degree-org">' . $EduRecord['Ed_Location'] . '</div>
												<div class="resume-degree-time">' . $EduRecord['Ed_Time'] . '</div>
											</li>
											';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php
										foreach ($resumes[$currentPage]['Awards'] as $key => $Award) {
											echo '
											<li class="mb-2 ps-4 position-relative">
											<i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
											<div class="resume-award-name">' . $Award['AwardName'] . '</div>
											<div class="resume-award-desc">' . $Award['AwardDesc'] . '</div>
										</li>
											';
										}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?=$resumes[$currentPage]['Languages']['Lang_1'];?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?=$resumes[$currentPage]['Languages']['Lang_2'];?></span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold"><?=$resumes[$currentPage]['Languages']['Lang_3'];?></span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?=$resumes[$currentPage]['Interests']['Interest_1'];?></li>
								    <li class="mb-1"><?=$resumes[$currentPage]['Interests']['Interest_2'];?></li>
								    <li class="mb-1"><?=$resumes[$currentPage]['Interests']['Interest_3'];?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<?php
						$projects = $resumes[$currentPage]['Projects'];
						foreach ($projects as $key => $Project) {
							if ($key % 3 == 0) {
								echo '<div class="row mt-4">';
							}

							echo '
								<div class="col-md-4">
									<div class="card">
										<img src="' . $Project['ProjectIMG'] . '" alt="Project 1" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">' . $Project['ProjectTitle'] . '</h5>
											<p class="card-text">' . $Project['ProjectDesc'] . '</p>
											<a class="btn btn-outline-primary" href="' . $Project['RickRoll'] . '" target="_blank">Go to link</a>
										</div>
									</div>
								</div>';

							// End the row if it's the 3rd, 6th, 9th, etc. card or the last card
							if (($key + 1) % 3 == 0 || $key == count($projects) - 1) {
								echo '</div>';
							}
						}
					?>
			</section>
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?=$resumes[$currentPage]['Header']['Name'];?></small>
    </footer>

</body>
</html> 

