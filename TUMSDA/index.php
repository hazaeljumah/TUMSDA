<?php
$pageTitle = 'Home - TUMSDA Church';
include __DIR__ . '/header.php';
require_once __DIR__ . '/includes/verse_of_day.php';
$verse = getVerseOfTheDay();
$events = include __DIR__ . '/data/events.php';
?>
<section class="hero section py-0">
	<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/TUMSDA/assets/img/Sabbath.png" class="d-block w-100" alt="Worship">
				<div class="carousel-caption hero-caption hero-caption--top text-center">
					<h1 class="hero-title">WELCOME TO TUMSDA</h1>
					<p class="hero-subtitle holiday-tagline">The Church We Love The Most!</p>
					<button class="hero-btn hero-btn-welcome">Welcome and Worship With Us</button>
				</div>
			</div>
				<div class="carousel-item">
					<img src="/TUMSDA/assets/img/ChurchChoir.png" class="d-block w-100" alt="Church Choir">
					<div class="carousel-caption hero-caption hero-caption--bottom-left text-start">
						<h2 class="hero-title">Listen to the Heavenly Music</h2>
						<p class="hero-subtitle">Experience sacred music with the TUMSDA Church Choir</p>
						<a href="https://www.youtube.com/@tumsdachurchchoir" target="_blank" class="hero-btn">Listen Now</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/TUMSDA/assets/img/ALO.png" class="d-block w-100" alt="Adventist Ladies Organisation">
					<div class="carousel-caption hero-caption hero-caption--bottom-left text-start">
						<h2 class="hero-title">Strong to Serve</h2>
						<p class="hero-subtitle">Fellowship and discipleship across all departments</p>
						<a href="departments.php" class="hero-btn">Explore Departments</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/TUMSDA/assets/img/BBA.png" class="d-block w-100" alt="Bible and Bible Alone">
					<div class="carousel-caption hero-caption hero-caption--bottom-left text-start">
						<h2 class="hero-title">Rooted in the Word</h2>
						<p class="hero-subtitle">Bible study and present truth for daily living.</p>
						<a href="ministries.php" class="hero-btn">Join a Ministry</a>
					</div>
				</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<h2 class="fw-bold mb-3">About TUMSDA</h2>
				<p class="mb-3">TUMSDA Church is a Seventh-day Adventist Sabbath school in Ziwani District located at the Technical University of Mombasa (TUM) in Tudor. We nurture a deep love for the Bible and the Spirit of Prophecy (Isaiah 8:20) through study, prayer, and sacred music.</p>
				<a href="/TUMSDA/about.php" class="btn btn-sm btn-outline-primary">Learn More</a>
			</div>
		</div>
		<div class="row g-3 mt-4">
			<div class="col-md-6">
				<div class="card elevated-card h-100 border-0">
					<div class="card-body text-center">
						<h5 class="card-title fw-bold">Our Mission</h5>
						<p class="mb-0">To make disciples of all people, communicating the everlasting gospel in the context of the three angels' messages of Revelation 14:6-12, leading them to accept Jesus as personal Saviour and unite with His remnant Church, discipling them to serve Him as Lord and preparing them for His soon return.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card elevated-card h-100 border-0">
					<div class="card-body text-center">
						<h5 class="card-title fw-bold">Our Vision</h5>
						<p class="mb-0">To uphold the distinctive message of the Seventh-day Adventist Church; to aspire to excellence in all aspects of their lives - academic, social and spiritual; to embrace the call to radical discipleship, including a life of missionary service; and to be supportive and respectful to the denomination's leadership while remaining a youth-led Church.</p>
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
				<!-- Upcoming Events -->
				<div class="mb-4">
					<h3 class="fw-semibold mb-3">Upcoming Events</h3>
					<div class="bg-light rounded-3 p-3">
						<?php
						$today = date('Y-m-d');
						usort($events, function($a, $b) { return strcmp($a['date'], $b['date']); });
						$upcoming = array_values(array_filter($events, function($e) use ($today) { return $e['date'] >= $today; }));
						$upcoming = array_slice($upcoming, 0, 4);
						foreach ($upcoming as $i => $event):
						?>
						<div class="event-item d-flex gap-3 mb-3">
							<div class="text-center" style="min-width:72px;">
								<div class="fw-bold text-primary"><?php echo date('M', strtotime($event['date'])); ?></div>
								<div class="display-6 lh-1 fw-bold"><?php echo date('d', strtotime($event['date'])); ?></div>
							</div>
							<div class="flex-grow-1">
								<h6 class="mb-1 fw-semibold"><?php echo htmlspecialchars($event['title']); ?></h6>
								<div class="small text-muted mb-1"><?php if (!empty($event['time']) && $event['time'] !== '—'): ?><?php echo htmlspecialchars($event['time']); ?><?php endif; ?><?php if (!empty($event['facilitator'])): ?><?php if (!empty($event['time']) && $event['time'] !== '—'): ?> • <?php endif; ?><?php echo htmlspecialchars($event['facilitator']); ?><?php endif; ?></div>
							</div>
						</div>
						<?php endforeach; ?>
						<div class="mt-3">
							<a href="/TUMSDA/about.php#calendar" class="btn btn-outline-primary btn-sm">View Full Calendar</a>
						</div>
					</div>
				</div>

				<!-- Weekly Meetings -->
				<div class="card border-0 shadow-sm">
					<div class="card-body">
						<h4 class="fw-semibold mb-3">Weekly Meetings</h4>
						<p class="mb-3 text-muted">Find our Weekly Meetings schedules where we meet as a family to engage one another and grow in different aspects, whether social, spiritual or even physically from Sunday to Saturday</p>
						<a href="/TUMSDA/about.php#weekly-meetings" class="btn btn-outline-primary btn-sm">View our Weekly Meetings</a>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<!-- Word of the Day -->
				<div class="mb-4">
					<h3 class="fw-semibold mb-3">Word of the Day</h3>
					<div class="p-4 bg-dark text-light rounded-3 position-relative">
						<button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" aria-label="Close"></button>
						<blockquote class="mb-2 fs-5">"<?php echo htmlspecialchars($verse['text']); ?>"</blockquote>
						<div class="small opacity-75"><?php echo htmlspecialchars($verse['reference']); ?></div>
					</div>
				</div>
				
				<!-- Church Notice Board & Announcements -->
				<div>
					<h3 class="fw-semibold mb-3">Church Notice Board & Announcements</h3>
					<div class="card border-0 shadow-sm">
						<div class="card-body">
							<div class="announcement-item mb-3 pb-3 border-bottom">
								<h6 class="fw-semibold text-primary mb-2">Weekly Meetings Invitation</h6>
								<p class="mb-0 small text-muted">All members are warmly invited to join our weekly meetings which take place at the church office during the scheduled times as provided in our weekly program. Your participation strengthens our fellowship and spiritual growth together.</p>
							</div>
							<div class="announcement-item mb-3 pb-3 border-bottom">
								<h6 class="fw-semibold text-primary mb-2">Lunch Hour Prayer</h6>
								<p class="mb-0 small text-muted">Join us for daily lunch hour prayer at the church office starting at 1:00 PM. This is a special time for corporate prayer, seeking God's guidance, and interceding for our church family and community needs.</p>
							</div>
							<div class="announcement-item mb-3 pb-3 border-bottom">
								<h6 class="fw-semibold text-primary mb-2">Stewardship of Time</h6>
								<p class="mb-0 small text-muted">Members are encouraged to be good stewards of time by arriving punctually for services and meetings, respecting others' time, and using our time wisely for God's glory and the advancement of His kingdom.</p>
							</div>
							<div class="announcement-item">
								<h6 class="fw-semibold text-primary mb-2">Brotherhood Among Members</h6>
								<p class="mb-0 small text-muted">Let brotherly love and unity prevail among all members. We encourage mutual support, encouragement, and care for one another as we grow together in faith and build a strong, loving church community.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Upcoming Mission Section -->
<section class="homepage-mission-section">
	<div class="homepage-mission-container">
		<div class="homepage-mission-overlay">
			<div class="homepage-mission-content">
				<h2 class="homepage-mission-title">Upcoming Mission</h2>
				<h1 class="homepage-mission-event">Challa Mission 2025</h1>
				<p class="homepage-mission-description">Join us for our annual evangelical mission, and this year to Challa from 21st December 2025 to 4th January 2026</p>
				<div class="homepage-mission-buttons">
					<a href="/TUMSDA/evangelism.php#missionAccordion" class="homepage-mission-btn">Find More</a>
					<button class="homepage-mission-btn support-btn">Support</button>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include __DIR__ . '/footer.php'; ?>
