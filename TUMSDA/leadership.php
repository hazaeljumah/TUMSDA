<?php
$pageTitle = 'Leadership - TUMSDA Church';
$success = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = trim($_POST['name'] ?? '');
	$email = trim($_POST['email'] ?? '');
	$message = trim($_POST['message'] ?? '');
	if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
		$to = 'info@tumsda.org';
		$subject = 'Website Contact Form';
		$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
		$body = "Name: $name\nEmail: $email\n\n$message";
		$success = @mail($to, $subject, $body, $headers);
		if (!$success) {
			$error = 'Unable to send message at the moment. Please try again later.';
		}
	} else {
		$error = 'Please provide a valid name, email, and message.';
	}
}
include __DIR__ . '/header.php';
?>

<!-- Leadership Section -->
<section class="section leadership-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="leadership-header-card">
					<div class="leadership-header-content text-center">
						<h1 class="fw-bold mb-3">Church Leadership</h1>
						<p class="mb-0">Meet our dedicated church leaders who guide and serve our congregation with love and commitment.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row g-4 justify-content-center">
			<div class="col-lg-4">
				<div class="leadership-card">
					<div class="leadership-image">
						<img src="/TUMSDA/assets/img/Hosea.jpg" alt="Elder Hosea Chesigor" class="leadership-photo">
					</div>
					<div class="leadership-content">
						<h4 class="leadership-name">Elder Hosea Chesigor</h4>
						<p class="leadership-position">Chairperson, 1st Elder</p>
						<blockquote class="leadership-statement">
							This is a faithful saying that in TUMSDA, hearts are transformed, edified, and lives forever changed by Christ's radiant light.
						</blockquote>
						<p class="leadership-signature">- Hosea Chesigor</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="leadership-card">
					<div class="leadership-image">
						<img src="/TUMSDA/assets/img/Derick.jpg" alt="Elder Derick Otieno" class="leadership-photo">
					</div>
					<div class="leadership-content">
						<h4 class="leadership-name">Elder Derick Otieno</h4>
						<p class="leadership-position">Assistant Chairperson, Personal Ministries, 2nd Elder</p>
						<blockquote class="leadership-statement">
							Just as Jesus's gentle arms, TUMSDA is a sweet haven of rest!
						</blockquote>
						<p class="leadership-signature">- Derick Otieno</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4">
				<div class="leadership-card">
					<div class="leadership-image">
						<img src="/TUMSDA/assets/img/Cephas.jpg" alt="Elder Cephas Mukaria" class="leadership-photo">
					</div>
					<div class="leadership-content">
						<h4 class="leadership-name">Elder Cephas Mukaria</h4>
						<p class="leadership-position">Assistant Chairperson, Planning, 3rd Elder</p>
						<blockquote class="leadership-statement">
							TUMSDA, a home of watchmen and light bearers!
						</blockquote>
						<p class="leadership-signature">- Cephas Mukaria</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact Us Section -->
<section class="section contact-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="fw-bold mb-4 text-center">Contact Us</h2>
				<p class="lead text-center mb-5">Get in touch with us for any questions, prayer requests, or to learn more about our church</p>
			</div>
		</div>
		
		<div class="row g-4">
			<div class="col-lg-7">
				<?php if ($success): ?>
				<div class="alert alert-success">Thank you! Your message has been sent.</div>
				<?php elseif ($error): ?>
				<div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
				<?php endif; ?>
				<form method="post" class="card shadow-sm">
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label">Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Message</label>
							<textarea name="message" rows="5" class="form-control" required></textarea>
						</div>
						<button class="btn btn-primary" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-lg-5">
				<h4 class="fw-semibold">Church Information</h4>
				<div class="mb-3">
					<p class="mb-2"><strong>Technical University of Mombasa SDA Church</strong></p>
					<p class="mb-1">Tom Mboya Street Tudor, Msa</p>
					<p class="mb-1">P.O Box 90420-80100 MSA</p>
					<p class="mb-1">Tel: <a href="tel:+254712345678">+254712345678</a></p>
					<p class="mb-0">Email: <a href="mailto:tumsda@gmail.com">tumsda@gmail.com</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Sabbath Gallery Panel -->
<section class="section bg-primary text-white sabbath-gallery-panel">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="gallery-panel-content text-center">
					<h3 class="fw-bold mb-3">Sabbath Was Nice Gallery</h3>
					<p class="mb-4">A collection of our Sabbath pictures capturing precious moments of worship, fellowship, and spiritual growth that define our church family's journey together.</p>
					<button type="button" class="btn btn-light btn-lg gallery-btn">
						<i class="fas fa-images me-2"></i>View Gallery
					</button>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include __DIR__ . '/footer.php'; ?>
