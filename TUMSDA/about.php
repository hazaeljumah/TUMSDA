<?php
$pageTitle = 'About Us - TUMSDA Church';
include __DIR__ . '/header.php';
$events = include __DIR__ . '/data/events.php';
usort($events, function($a, $b) { return strcmp($a['date'], $b['date']); });
?>
<section class="section py-0">
	<img src="/TUMSDA/assets/img/TUMSDA.png" class="img-fluid w-100 rounded-3" alt="TUMSDA">
</section>
<section class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-content">
					<h2 class="about-title">About TUMSDA</h2>
					<div class="about-subtitle">
						<i class="fas fa-church me-2"></i>
						<span>Seventh-day Adventist Sabbath School</span>
					</div>
					<div class="about-location">
						<i class="fas fa-map-marker-alt me-2"></i>
						<span>Technical University of Mombasa (TUM), Tudor</span>
					</div>
					<div class="about-tagline">
						<p class="holiday-tagline">The Church We Love The Most!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-image-container">
					<img src="/TUMSDA/assets/img/TUMSDA.JPG" class="about-image" alt="TUMSDA Church">
				</div>
			</div>
		</div>
		
		<div class="row mt-5">
			<div class="col-12">
				<div class="about-description-card">
					<div class="about-description-content text-center">
						<p>TUMSDA Church is a Seventh-day Adventist Sabbath school in Ziwani District and it is a beacon of hope, a sanctuary of spiritual growth, where young hearts beat in unison, yearning for a deeper connection with the divine.</p>
						
						<p>The Church is located within the Technical University of Mombasa (TUM) in Tudor, Mombasa.</p>
						
						<p>With fervent passion and unwavering devotion, we gather to nurture our faith, cultivating a profound relationship with the Creator, building a deep love of present truth and reformation as revealed in the Bible and the Spirit of Prophecy as well. (Isaiah 8:20)</p>
						
						<p>In this sacred space, we as young people are transformed by the power of Bible study, prayer and sacred music, becoming beacons of light in a world beset by darkness. United in our pursuit of righteousness, we shine with an aura of joy, peace, and hope, reflecting the beauty of a life surrendered to the will of God.</p>
						
						<p>As a haven of spiritual nourishment, TUMSDA embodies the essence of a community blessed by the divine presence.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-white">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-6">
				<div class="mission-vision-card mission-card">
					<h3 class="mission-vision-title title-with-underline blue-title">Our Mission</h3>
					<div class="mission-vision-content">
						<p>To make disciples of all people by communicating the everlasting gospel in the context of the three angels' messages of Revelation 14:6–12, leading them to accept Jesus as personal Saviour and unite with His remnant Church, discipling them to serve Him as Lord and preparing them for His soon return.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="mission-vision-card vision-card">
					<h3 class="mission-vision-title title-with-underline blue-title">Our Vision</h3>
					<div class="mission-vision-content">
						<p>To uphold the distinctive message of the Seventh-day Adventist Church; to aspire to excellence in all aspects of life—academic, social, and spiritual; to embrace radical discipleship including missionary service; and to be supportive of denominational leadership while remaining a youth-led church.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="text-center">
			<h3 class="fw-semibold">History</h3>
			<p class="mx-auto" style="max-width: 800px;">In 1982, a small group of college students began a movement—born from a hunger for the Word of God, a deeper relationship with Christ, and an active life in His service.</p>
		</div>
	</div>
</section>
<section class="section bg-white">
	<div class="container">
		<div class="text-center">
			<h3 class="fw-semibold">Beliefs</h3>
			<p class="mb-2 mx-auto" style="max-width: 800px;">We cherish the fundamental beliefs of the Seventh-day Adventist Church.</p>
			<p class="mb-2 mx-auto" style="max-width: 800px;">Upholding the Protestant conviction of Sola Scriptura (“Bible only”), these 28 Fundamental Beliefs describe how Seventh-day Adventists interpret Scripture for daily application.</p>
			<p><a href="https://www.adventist.org/beliefs/" target="_blank" rel="noopener" class="btn btn-outline-primary">Fundamental Beliefs</a></p>
		</div>
	</div>
</section>
<section id="weekly-meetings" class="section">
	<div class="container">
		<div class="weekly-meetings-card">
			<h3 class="fw-semibold mb-3">Weekly Meetings</h3>
			<p class="mb-4">Find our Weekly Meetings schedules where we meet as a family to engage one another and grow in different aspects, whether social, spiritual or even physically from Sunday to Saturday.</p>
			<div class="table-responsive">
				<table class="table weekly-meetings-table align-middle">
					<thead>
						<tr>
							<th>Day</th>
							<th>Time</th>
							<th>Program</th>
						</tr>
					</thead>
					<tbody>
						<tr><td rowspan="4">Sunday</td>
						<tr><td>4:00–6:00 PM</td><td>Medical Missionary Training</td></tr>
						<tr><td>4:00–6:00 PM</td><td>Church Choir Training</td></tr>
						<tr><td>6:00–8:00 PM</td><td>HOP Training</td></tr>
						<tr><td rowspan="4">Monday</td>
						<tr><td>4:30–5:30 PM</td><td>Jewels' Meeting</td></tr>
						<tr><td>5:30–6:30 PM</td><td>BBA Ministry</td></tr>
						<tr><td>6:30–7:30 PM</td><td>Amazing Grace Ministry</td></tr>
						<tr><td rowspan="4">Tuesday</td>
						<tr><td>4:30–5:30 PM</td><td>Evangelism</td></tr>
						<tr><td>5:30–6:30 PM</td><td>BBA Ministry</td></tr>
						<tr><td>6:30–7:30 PM</td><td>Amazing Grace Ministry</td></tr>
						<tr><td rowspan="4">Wednesday</td>
						<tr><td>4:30–5:30 PM</td><td>AMO / ALO Meetings</td></tr>
						<tr><td>5:30–6:30 PM</td><td>BBA Ministry</td></tr>
						<tr><td>6:30–7:30 PM</td><td>Amazing Grace Ministry</td></tr>
						<tr><td rowspan="4">Thursday</td>
						<tr><td>4:30–5:30 PM</td><td>Church Choir Training</td></tr>
						<tr><td>5:30–6:30 PM</td><td>BBA Training</td></tr>
						<tr><td>6:30–7:30 PM</td><td>HOP Training</td></tr>
						<tr><td rowspan="2">Friday</td>
						<tr><td>5:30–7:30 PM</td><td>Vespers</td></tr>
						<tr><td rowspan="2">Saturday</td>
						<tr><td>8:00 AM–6:00 PM</td><td>Sabbath Program</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<section id="calendar" class="section bg-white">
	<div class="container">
		<h3 class="fw-semibold">Church Calendar</h3>
		<div class="table-responsive">
			<table class="table church-calendar-table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Event</th>
						<th>Facilitator</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($events as $event): ?>
					<tr>
						<td><?php echo htmlspecialchars($event['date']); ?></td>
						<td><?php echo htmlspecialchars($event['title']); ?></td>
						<td><?php echo htmlspecialchars($event['facilitator'] ?? ''); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php include __DIR__ . '/footer.php'; ?> 