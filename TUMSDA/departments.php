<?php
$pageTitle = 'Departments - TUMSDA Church';
include __DIR__ . '/header.php';
?>
<section class="section">
	<div class="container">
		<!-- Solid block with text -->
		<div class="page-hero-block">
			<div class="page-hero-content">
				<h1 class="page-hero-title">Departments</h1>
				<p class="page-hero-description">These ministries help our community function and flourish.</p>
			</div>
		</div>
		<div class="row g-4 mt-4">
			<?php
			$departments = [
				[
					'name' => 'Sabbath School', 
					'desc' => 'Home for all, a school where every believer is nurtured to grow as a disciple and to disciple others. Sabbath School provides a platform for studying God\'s Word, and also for fellowship, mission focus, and the building of character. It is where spiritual roots are deepened and the joy of sharing Christ is cultivated.',
					'verse' => '"Let the word of Christ dwell in you richly in all wisdom, teaching and admonishing one another…" Colossians 3:16'
				],
				[
					'name' => 'Jewels', 
					'desc' => 'Precious gems of the church, representing the freshmen and all members who are nurtured to embrace Christ-like values. The Jewels Department is committed to shaping personal development, building faith foundations, and empowering the next generation to stand firm in truth.',
					'verse' => '"Let no one despise your youth, but be an example to the believers in word, in conduct, in love, in spirit, in faith, in purity." 1 Timothy 4:12'
				],
				[
					'name' => 'Adventist Men Organisation (AMO)', 
					'desc' => 'The muscle of the church, a brotherhood for spiritual growth, mentorship, and leadership in service. AMO calls men to stand firm as protectors of the faith and pillars of strength in the church community. Together, they are equipped to lead with integrity and serve with humility.',
					'verse' => '"Be watchful, stand firm in the faith, act like men, be strong." 1 Corinthians 16:13'
				],
				[
					'name' => 'Adventist Ladies Organisation (ALO)', 
					'desc' => 'A family of beautiful hearts; women called to godliness, mentorship, and service. ALO fosters spiritual enrichment, builds unity among the ladies, and empowers them to reflect Christ\'s character in their studies, lives, and church. Their strength lies in prayer, compassion, and unwavering faith.',
					'verse' => '"Charm is deceitful and beauty is passing, but a woman who fears the Lord, she shall be praised." Proverbs 31:30'
				],
				[
					'name' => 'Music', 
					'desc' => 'TUMSDA is home to maestros who not only understand music but offer it as heavenly ministry. Through choirs, ensembles, and individual gifts, music uplifts worship, inspires hearts, and connects believers with God in the beauty of holiness. The church choir is the very heart of TUMSDA, where voices unite in praise and worship that echoes heaven.',
					'verse' => '"Sing to Him a new song; play skilfully with a shout of joy." Psalm 33:3',
					'link' => 'https://youtube.com/@tumsdachurchchoir'
				],
				[
					'name' => 'Communication', 
					'desc' => 'The voice of the church, tasked with telling the story of God\'s work among His people. Through media, announcements, and digital platforms, the Communication Department spreads the gospel and keeps members connected. It is the bridge between the church and the wider world.',
					'verse' => '"The Lord gave the word; great was the company of those who proclaimed it." Psalm 68:11',
					'link' => 'https://www.youtube.com/@tumsda_church'
				],
				[
					'name' => 'Deaconry', 
					'desc' => 'The hands and feet of the church, devoted to service, order, and hospitality. The Deaconry ensures the smooth running of worship, assists with church ordinances, cares for the needy, and maintains the sanctuary with reverence. They embody servant leadership and humble stewardship.',
					'verse' => '"For those who have served well as deacons obtain for themselves a good standing and great boldness in the faith." 1 Timothy 3:13'
				],
				[
					'name' => 'Treasury', 
					'desc' => 'The storehouse of God\'s blessings, entrusted with the faithful management of tithes, offerings, and financial stewardship. The Treasury Department ensures accountability, transparency, and support of the church\'s mission.',
					'verse' => '"Bring all the tithes into the storehouse, that there may be food in My house, and try Me now in this," says the Lord of hosts… Malachi 3:10'
				],
				[
					'name' => 'Medical Missionary', 
					'desc' => 'A department devoted to Christ\'s method of ministry; meeting people\'s physical, emotional, and spiritual needs. Through health evangelism, wellness programs, and acts of compassion, it demonstrates God\'s healing love.',
					'verse' => '"Beloved, I pray that you may prosper in all things and be in health, just as your soul prospers." 3 John 1:2'
				],
				[
					'name' => 'Publishing', 
					'desc' => 'Carrying forward the pen of inspiration, the Publishing Department ensures that truth-filled literature reaches families, campuses, and communities. It champions the written word as a lasting witness to the gospel and a seed for mission.',
					'verse' => '"Write the vision and make it plain on tablets, that he may run who reads it." Habakkuk 2:2'
				],
			];
			foreach ($departments as $d): ?>
			<div class="col-lg-6">
				<div class="card department-card h-100 shadow-sm">
					<div class="card-body">
						<h5 class="card-title mb-3"><?php echo htmlspecialchars($d['name']); ?></h5>
						<p class="card-text mb-3"><?php echo htmlspecialchars($d['desc']); ?></p>
						<blockquote class="blockquote mb-3">
							<footer class="blockquote-footer">
								<cite title="Source Title"><?php echo htmlspecialchars($d['verse']); ?></cite>
							</footer>
						</blockquote>
						<?php if (isset($d['link'])): ?>
							<p class="mb-0">
								<a href="<?php echo htmlspecialchars($d['link']); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">
									<?php echo (stripos($d['name'], 'Music') !== false) ? 'Church Choir Channel' : 'YouTube Channel'; ?>
								</a>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php include __DIR__ . '/footer.php'; ?> 