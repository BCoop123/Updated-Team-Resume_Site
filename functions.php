<?php

function DisplayWorkExperience($Job) {
	echo '
	<article class="resume-timeline-item position-relative pb-5">
		
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

// Function to calculate age based on date of birth
function calculateAge($dob) {
    $currentDate = new DateTime();
    $birthdate = new DateTime($dob);
    $age = $currentDate->diff($birthdate)->y;
    return $age;
}


?>