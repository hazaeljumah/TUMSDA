<?php
$pageTitle = 'Ministries - TUMSDA Church';
include __DIR__ . '/header.php';
?>
<section class="section">
	<div class="container">
		<!-- Solid block with text -->
		<div class="page-hero-block">
			<div class="page-hero-content">
				<h1 class="page-hero-title">Ministries</h1>
				<p class="page-hero-description">Join a ministry and grow in fellowship and service.</p>
			</div>
		</div>
		<div class="row g-4 mt-4">
			<?php
			$ministries = [
				[
					'name' => 'The Bible and Bible Alone (BBA)', 
					'desc' => 'This is a Bible study ministry whose main objective is learning, unlearning, and relearning Biblical truths and doctrines about Christ. Members are encouraged to search the Scriptures diligently, testing every teaching against the Word of God, and standing firmly on the foundation of truth. The ministry creates an environment where faith is deepened and lives are transformed through the study of God\'s Word.',
					'verse' => '"These were more fair-minded than those in Thessalonica, in that they received the word with all readiness, and searched the Scriptures daily to find out whether these things were so." Acts 17:11'
				],
				[
					'name' => 'Amazing Grace', 
					'desc' => 'A Bible study ministry devoted to instilling light and wisdom through prayerful study and deep discussion of the Scriptures and the Spirit of Prophecy. Amazing Grace seeks to nurture spiritual growth, inspire personal revival, and anchor members in the saving grace of Christ. Through fellowship and study, it points to Jesus as the ultimate expression of God\'s love.',
					'verse' => '"But grow in the grace and knowledge of our Lord and Savior Jesus Christ. To Him be the glory both now and forever. Amen." 2 Peter 3:18'
				],
				[
					'name' => 'Hymns of Praise (HOP)', 
					'desc' => 'A singing group grounded in ministry through music, focusing on hymns that lift hearts to God and strengthen faith. Hymns of Praise not only sings but also teaches music and instruments, helping members discover and develop their gifts for service. Their ministry reflects the power of sacred music to inspire, comfort, and draw believers closer to heaven.',
					'verse' => '"Let everything that has breath praise the Lord. Praise the Lord!" Psalm 150:6'
				],
			];
			foreach ($ministries as $m): ?>
			<div class="col-lg-4">
				<div class="card ministry-card h-100 shadow-sm">
					<div class="card-body">
						<h5 class="card-title mb-3"><?php echo htmlspecialchars($m['name']); ?></h5>
						<p class="card-text mb-3"><?php echo htmlspecialchars($m['desc']); ?></p>
						<blockquote class="blockquote mb-3">
							<footer class="blockquote-footer">
								<cite title="Source Title"><?php echo htmlspecialchars($m['verse']); ?></cite>
							</footer>
						</blockquote>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php include __DIR__ . '/footer.php'; ?> 