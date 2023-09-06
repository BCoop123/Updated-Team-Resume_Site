<?php

$currentPage = $_GET['index'];

$resumes = [
	[
		'tabIcon' => 'assets/images/bbb.png',
		'Title' => 'Ben Molloy\'s Resume',
		
		'Header' => 
		[
				'Name' => 'Ben Molloy',
				'Headshot' => 'assets/images/BenMProfile.jpg',
				'Position' => 'Senior Network Analyst Manager',
				'Email' => 'btmolloy2@gmail.com',
				'Phone' => '(513) 374-8989',
				'LinkedIn' => 'https://www.linkedin.com/in/ben-molloy',
				'GitHub' => 'https://www.github.com/btmolloy',
				'Website' =>  'https://www.BenMolloy.com',
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
		],

		'Summary' =>
			'Current undergraduate majoring in cyber security at Northern Kentucky University with intermediate level knowledge of cyber security, communications, and critical thinking skills. I am eager for a challenge and looking for a full or part-time Co-op or internship to expand my skills while bringing value to my employer.'
		,
		
		'WorkExperience' =>
		[
			[
				'Job_Title' => "Student Technology Support Specialist",
				'Job_Location' => "Northern Kentucky University",
				'Job_StartFinish' => "February 2022 - August 2023",
				'Job_Descr' => "Diagnosed and resolved a range of hardware, software, and networking issues while delivering technical support and training to end-users.",
				'Job_AchDescr' => "Completed many computer replacement projects and organizational type projects as well.",
				'Job_Ach_1' => "Faculty Replacement Project",
				'Job_Ach_2' => "Office Organization Project",
				'Job_Ach_3' => "File System Organization",
				'Job_Ach_4' => "Stuctured Windows AD configuration",
				'Job_TechUsed_1' => "Bash",
				'Job_TechUsed_2' => "Python",
				'Job_TechUsed_3' => "Pixi",
				'Job_TechUsed_4' => "Dell Command Manager",
				'Job_TechUsed_5' => "UserStatus",
			],
			[
				'Job_Title' => "IT Security Assistant",
				'Job_Location' => "XYZ Tech Solutions",
				'Job_StartFinish' => "June 2022 - August 2022",
				'Job_Descr' => "Assisted in network monitoring, vulnerability assessment, and security automation, contributing to the enhancement of cybersecurity measures within the organization.",
				'Job_AchDescr' => "Implemented automated scripts that streamlined security tasks, increasing operational efficiency by reducing manual effort and saving approximately 10 hours per week.",
				'Job_Ach_1' => "Faculty Replacement Project",
				'Job_Ach_2' => "Office Organization Project",
				'Job_Ach_3' => "File System Organization",
				'Job_Ach_4' => "Stuctured Windows AD configuration",
				'Job_TechUsed_1' => "Wireshark",
				'Job_TechUsed_2' => "Nmap",
				'Job_TechUsed_3' => "Metasploit",
				'Job_TechUsed_4' => "Python",
				'Job_TechUsed_5' => "Bash",
			],
			[
				'Job_Title' => "Cybersecurity Analyst Intern",
				'Job_Location' => "CyberGuard Solutions",
				'Job_StartFinish' => "May 2023 - August 2023",
				'Job_Descr' => "Assisted in conducting vulnerability assessments, analyzing security logs, and contributing to incident response efforts, while gaining hands-on experience in identifying and mitigating potential cybersecurity risks within a dynamic organizational environment.",
				'Job_AchDescr' => "Was Great in overall performance.",
				'Job_Ach_1' => "Faculty Replacement Project",
				'Job_Ach_2' => "Office Organization Project",
				'Job_Ach_3' => "File System Organization",
				'Job_Ach_4' => "Stuctured Windows AD configuration",
				'Job_TechUsed_1' => "SIEM",
				'Job_TechUsed_2' => "IDS/IPS",
				'Job_TechUsed_3' => "Firewall Management",
				'Job_TechUsed_4' => "Threat Intelligence Platforms",
				'Job_TechUsed_5' => "Endpoint Security Solutions",
			],
			[
				'Job_Title' => "Information Security Intern",
				'Job_Location' => "SecureNet Systems",
				'Job_StartFinish' => "August 2023 - Current",
				'Job_Descr' => "Contributed to security audits, participated in policy review and development, and gained exposure to vulnerability assessments, helping to fortify the company's information security framework while expanding practical knowledge of cybersecurity practices.",
				'Job_AchDescr' => "Implemented automated scripts that streamlined security tasks, increasing operational efficiency by reducing manual effort and saving approximately 10 hours per week.",
				'Job_Ach_1' => "Vulnerability Scanning Tools",
				'Job_Ach_2' => "Security Policy Management Platforms",
				'Job_Ach_3' => "Encryption Technologies",
				'Job_Ach_4' => "Access Control Systems",
				'Job_TechUsed_1' => "Wireshark",
				'Job_TechUsed_2' => "Nmap",
				'Job_TechUsed_3' => "Metasploit",
				'Job_TechUsed_4' => "Python",
				'Job_TechUsed_5' => "Bash",
			],
		],
		'ProgressBarSkills' =>
		[
			[
			'SkillName' => "Python",
			'SkillProgress' => "94",
			],
			[
			'SkillName' => "JavaScript",
			'SkillProgress' => "96",
			],
			[
			'SkillName' => "Node.js",
			'SkillProgress' => "92",
			],
			[
			'SkillName' => "PHP",
			'SkillProgress' => "90",
			],
		],
		'OtherSkills' =>
		[
			'Other_Skill_1' => "DevOps",
			'Other_Skill_2' => "Teamwork/Communication",
			'Other_Skill_3' => "Git",
			'Other_Skill_4' => "Problem Solving & Critical Thinking",
			'Other_Skill_5' => "Work Well Under Pressure",
			'Other_Skill_6' => "Familiar with VMware and VM setup",
			'Other_Skill_7' => "Fundamental Malware Analysis",
			'Other_Skill_8' => "Web Development",
		],
		'Education' =>
		[
			[
			'Ed_Degree' => "BSc CyberSecurity",
			'Ed_Location' => "Northern Kentucky University",
			'Ed_Time' => "2020 - Present",
			],
		],
		'Awards' =>
		[
			[
			'AwardName' => "Outstanding Achievement in Cybersecurity Scholarship",
			'AwardDesc' => "Recognized for exemplary performance and dedication in the field of cybersecurity, demonstrating a strong commitment to advancing knowledge and skills within the discipline.",
			],
			[
			'AwardName' => "Leadership Achievement Award",
			'AwardDesc' => "Recognized for exceptional leadership qualities and achievements, showcasing the ability to inspire and guide others towards successful outcomes.",
			],
		],
		'Languages' =>
		[
			'Lang_1' => "Python",
			'Lang_2' => "Java",
			'Lang_3' => "Bash",
		],
		'Interests' =>
		[
			'Interest_1' => "Boldering",
			'Interest_2' => "Working Out",
			'Interest_3' => "Video Games",
		],
		'Projects' =>
		[
			[
				'ProjectIMG' => "./assets/images/BenMProject1.jpg",
				'ProjectTitle' => "CodeOptimize: Performance Tuning Project",
				'ProjectDesc' => "The CodeOptimize project revolved around fine-tuning code for optimal execution, implementing efficiency-driven techniques, and profiling to enhance software speed and resource utilization.",
				'ProjectLink' => "https://www.codeoptimize-example.com",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],
			[
				'ProjectIMG' => "./assets/images/BenMProject2.jpg",
				'ProjectTitle' => "CodeCraft Enhancement Project",
				'ProjectDesc' => "The CodeCraft Enhancement Project focused on refining and optimizing existing codebase, introducing automation solutions to streamline processes and enhance overall software performance.",
				'ProjectLink' => "https://www.codecraft-enhancement.com",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],
			[
				'ProjectIMG' => "./assets/images/BenMProject3.jpg",
				'ProjectTitle' => "Project ServerForge",
				'ProjectDesc' => "Project ServerForge involved the meticulous design, assembly, and configuration of a robust server infrastructure, ensuring optimal performance, scalability, and reliability to meet the organization's data processing needs.",
				'ProjectLink' => "https://www.serverforge-example.com",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],			
		]
	],
	[
		'tabIcon' => './assets/images/bbb.png',
		'Title' => 'Ben Acuff\'s Resume',
		
		'Header' => 
		[
				'Name' => 'Ben Acuff',
				'Headshot' => 'assets/images/BenAProfile.jpg',
				'Position' => 'Cybersecurity Analyst',
				'Email' => 'acuffb1@mymail.nku.edu',
				'Phone' => '(513) 371-4289',
				'LinkedIn' => 'https://www.linkedin.com/in/benjaminacuff',
				'GitHub' => 'https://www.github.com/benjaminacuff',
				'Website' =>  'https://www.benacuff.com',
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
		],
		
		'Summary' =>
			'I am currently am a junior attending Northern Kentucky University. My major is cybersecurity, while my minor is computer science.'
		,
		
		'WorkExperience' =>
		[
			[
				'Job_Title' => "Web Developer",
				'Job_Location' => "Northern Kentucky University",
				'Job_StartFinish' => "August 2023 - Present",
				'Job_Descr' => "Work on websites for Northern Kentucky University.",
				'Job_AchDescr' => "Here are some of my achievements at my job below.",
				'Job_Ach_1' => "96.8% customer satisfaction rate.",
				'Job_Ach_2' => "Employee of the month: August 2023.",
				'Job_Ach_3' => "NSA Certified as of August 2023.",
				'Job_Ach_4' => "8,900+ bugs fixed.",
				'Job_TechUsed_1' => "Python",
				'Job_TechUsed_2' => "jQuery",
				'Job_TechUsed_3' => "Webpack",
				'Job_TechUsed_4' => "PostgressSQL",
				'Job_TechUsed_5' => "HTML / CSS",
			],
			[
				'Job_Title' => "Junior Software Developer",
				'Job_Location' => "Amazon",
				'Job_StartFinish' => "May 2022 - August 2023",
				'Job_Descr' => "Develop various softwares for Amazon.",
				'Job_AchDescr' => "Achievements:",
				'Job_Ach_1' => "Artificial Intelligence Project",
				'Job_Ach_2' => "Oracle SQL Certified",
				'Job_Ach_3' => "Debugging Award",
				'Job_Ach_4' => "Employee of the month: April 2022 and October 2022",
				'Job_TechUsed_1' => "Redux",
				'Job_TechUsed_2' => "Java",
				'Job_TechUsed_3' => "Webpack",
				'Job_TechUsed_4' => "HTML",
				'Job_TechUsed_5' => "SASS",
			]
		],
		'ProgressBarSkills' =>
		[
			[
			'SkillName' => "Java",
			'SkillProgress' => "91",
			],
			[
			'SkillName' => "HTML/CSS/JavaScript",
			'SkillProgress' => "98",
			],
			[
			'SkillName' => "Oracle SQL",
			'SkillProgress' => "89",
			],
		],
		'OtherSkills' =>
		[
			'Other_Skill_1' => "Django",
			'Other_Skill_2' => "Leadership",
			'Other_Skill_3' => "Require.js",
			'Other_Skill_4' => "HTML",
			'Other_Skill_5' => "CSS",
			'Other_Skill_6' => "Teamwork",
			'Other_Skill_7' => "Communication",
			'Other_Skill_8' => "Network",
		],
		'Education' =>
		[
			[
			'Ed_Degree' => "BS CyberSecurity",
			'Ed_Location' => "Northern Kentucky University",
			'Ed_Time' => "2021 - Present",
			],
		],
		'Awards' =>
		[
			[
			'AwardName' => "Governors Scholar",
			'AwardDesc' => "Scholarship awarded to distinguished students in the state of Kentucky.",
			],
			[
			'AwardName' => "Congressional Award",
			'AwardDesc' => "Award given to volunteers in Kentucky with over 300 clocked hours.",
			],
		],
		'Languages' =>
		[
			'Lang_1' => "Java",
			'Lang_2' => "C++",
			'Lang_3' => "PHP",
		],
		'Interests' =>
		[
			'Interest_1' => "Weightlifting",
			'Interest_2' => "Running",
			'Interest_3' => "Pokemon",
		],
		'Projects' =>
		[
			[
				'ProjectIMG' => "./assets/images/ArtificialIntelligence.jpg",
				'ProjectTitle' => "Artificial Intelligence",
				'ProjectDesc' => "What is artifical intelligence?",
				'ProjectLink' => "https://docs.google.com/document/d/1JaqQTobGlJybkl7kMct9pRElvS3MKo89zFCyXw-GsMs/edit?usp=sharing",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],
			[
				'ProjectIMG' => "./assets/images/MachineLearning.jpg",
				'ProjectTitle' => "Machine Learning",
				'ProjectDesc' => "What is machine learning?",
				'ProjectLink' => "https://docs.google.com/document/d/1AvzpVbB8Icy7B_wtfKFRNJwUk-qZnsvp2iOMIwybh1I/edit?usp=sharing",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			]
		]
	],
	[
		'tabIcon' => './assets/images/bbb.png',
		'Title' => 'Brandon\'s Resume',
	
		'Header' => 
		[
			'Name' => 'Brandon Cooper',
			'Headshot' => 'assets/images/Brandon.jpg',
			'Position' => 'Associate Data Developer/Analyst',
			'Email' => 'brandoncooper859@gmail.com',
			'Phone' => '859-628-8871',
			'LinkedIn' => 'www.linkedin.com/in/brandon-cooper-0',
			'GitHub' => 'https://github.com/BCoop123',
			'Website' =>  'https://bcoop123.com',
			'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
		],
	
		'Summary' =>
			'I am a college student pursuing a degree in Computer Information Technology. My studies are currently focused on Web Server and Database Administration. I am proficient in Windows and UNIX Systems. I enjoy scripting and am adept in Python and Java. I have experience in Oracle SQL Developer, SQL*Plus, and Apache Web Server. I am currently seeking internship opportunities in my chosen field.'
		,
	
		'WorkExperience' =>
		[
			[
				'Job_Title' => "Data Management Intern",
				'Job_Location' => "MassMutual Ascend",
				'Job_StartFinish' => "2023 - Present",
				'Job_Descr' => "In my role, I actively participated in every phase of designing complex data storage components according to given specifications. My tasks were not just limited to routine development but also encompassed moderately intricate maintenance and resolving issues with our data warehouse systems.",
				'Job_AchDescr' => "During my internship I worked on many projects within the Data Warehouse and worked collaborativly with all members of my team.",
				'Job_Ach_1' => "I played an active role in the development and maintenance of relational databases used for data storage and mining.",
				'Job_Ach_2' => "I was responsible for designing and testing the data warehouse systems.",
				'Job_Ach_3' => "I routinely troubleshooted and resolved any issues related to data load and data retrieval.",
				'Job_Ach_4' => "I diligently maintained documentation relating to operations, data warehouse objects, and source systems.",
				'Job_TechUsed_1' => "SQL",
				'Job_TechUsed_2' => "TransactSQL",
				'Job_TechUsed_3' => "SQL Server Management Studio",
				'Job_TechUsed_4' => "SSIS",
				'Job_TechUsed_5' => "JAMS",
			],
			[
				'Job_Title' => "Pit Gate Security",
				'Job_Location' => "Florence Speedway Inc.",
				'Job_StartFinish' => "2017 - Present",
				'Job_Descr' => "In my role, I ensured all payments were made before entry. I checked coolers for compliance with our guidelines. I welcomed spectators and drivers. I also monitored traffic to prevent unauthorized access, keeping the premises secure.",
				'Job_AchDescr' => "Achievements:",
				'Job_Ach_1' => "During my time in this role, I saved the track thousands by stopping non-paying customers from entering into the pit area. I have also prevented possible incidents related to alchohol consumption in high traffic areas.",
				'Job_Ach_2' => "Oracle SQL Certified",
				'Job_Ach_3' => "Debugging Award",
				'Job_Ach_4' => "Employee of the month: April 2022 and October 2022",
				'Job_TechUsed_1' => "Diligance",
				'Job_TechUsed_2' => "Customer Relations",
				'Job_TechUsed_3' => "Greeter",
				'Job_TechUsed_4' => "HTML",
				'Job_TechUsed_5' => "SASS",
			]
		],
		'ProgressBarSkills' =>
		[
			[
			'SkillName' => "SQL",
			'SkillProgress' => "91",
			],
			[
			'SkillName' => "JavaScript",
			'SkillProgress' => "98",
			],
			[
			'SkillName' => "Python",
			'SkillProgress' => "89",
			],
		],
		'OtherSkills' =>
		[
			'Other_Skill_1' => "DevOps",
			'Other_Skill_2' => "Code Review",
			'Other_Skill_3' => "Git",
			'Other_Skill_4' => "Unit Testing",
			'Other_Skill_5' => "Agile",
			'Other_Skill_6' => "Scrum",
			'Other_Skill_7' => "Web Dev",
			'Other_Skill_8' => "Java",
		],
		'Education' =>
		[
			[
			'Ed_Degree' => "BSc in Computer Information Technology",
			'Ed_Location' => "Northern Kentucky University",
			'Ed_Time' => "2020 - 2023",
			],
		],
		'Awards' =>
		[
			[
			'AwardName' => "Dean's List",
			'AwardDesc' => "Issued by Northern Kentucky University.",
			],
			[
			'AwardName' => "Outstanding Freshman Award",
			'AwardDesc' => "Issued by Northern Kentucky University.",
			],
		],
		'Languages' =>
		[
			'Lang_1' => "Java",
			'Lang_2' => "C++",
			'Lang_3' => "PHP",
		],
		'Interests' =>
		[
			'Interest_1' => "Hiking",
			'Interest_2' => "Online Gaming",
			'Interest_3' => "Grilling",
		],
		'Projects' =>
		[
			[
				'ProjectIMG' => "./assets/images/bbb.png",
				'ProjectTitle' => "BBB Music Site",
				'ProjectDesc' => "Social media site where users post about songs, artists, and albums.",
				'ProjectLink' => "https://github.com/BCoop123/BBB-Music-Site",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],
			[
				'ProjectIMG' => "./assets/images/dog.png",
				'ProjectTitle' => "Animal Shelter Site",
				'ProjectDesc' => "Javascript powered website for an animal shelter.",
				'ProjectLink' => "https://bcoop123.github.io/ASE_220_Assignment_2/",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			],
			[
				'ProjectIMG' => "./assets/images/unity.png",
				'ProjectTitle' => "Unity Driving Simulation",
				'ProjectDesc' => "Game created as a part of the Unity create with code course.",
				'ProjectLink' => "https://github.com/BCoop123/Unity-Driving-Simulation",
				'RickRoll' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
			]
		]
	]
]

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
							    <div class="title mb-3"><?=$resumes[$currentPage]['Header']['Position'];?></div>
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
											echo '										<article class="resume-timeline-item position-relative pb-5">
											
											<div class="resume-timeline-item-header mb-2">
												<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1">' . $Job['Job_Title'] . '</h3>
													<div class="resume-company-name ms-auto">' . $Job['Job_Location'] . '</div>
												</div><!--//row-->
												<div class="resume-position-time">' . $Job['Job_StartFinish'] . '</div>
											</div><!--//resume-timeline-item-header-->
											<div class="resume-timeline-item-desc">
												<p>' . $Job['Job_Descr'] . '</h4>
												<p>' . $Job['Job_AchDescr'] . '</p>
												<ul>
													<li>' . $Job['Job_Ach_1'] . '</li>
													<li>' . $Job['Job_Ach_2'] . '</li>
													<li>' . $Job['Job_Ach_3'] . '</li>
													<li>' . $Job['Job_Ach_4'] . '</li>
												</ul>
												<h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
												<ul class="list-inline">
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_1'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_2'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_3'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_4'] . '</span></li>
													<li class="list-inline-item"><span class="badge bg-secondary badge-pill">' . $Job['Job_TechUsed_5'] . '</span></li>
												</ul>
											</div><!--//resume-timeline-item-desc-->

										</article><!--//resume-timeline-item-->';
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

