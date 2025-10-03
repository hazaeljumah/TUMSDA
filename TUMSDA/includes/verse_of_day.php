<?php
function getVerseOfTheDay(): array {
	$localPool = [
		["text" => "The Lord is my shepherd; I shall not want.", "reference" => "Psalm 23:1"],
		["text" => "For God so loved the world, that he gave his only Son...", "reference" => "John 3:16"],
		["text" => "Trust in the Lord with all your heart, and do not lean on your own understanding.", "reference" => "Proverbs 3:5"],
		["text" => "I can do all things through Christ who strengthens me.", "reference" => "Philippians 4:13"],
		["text" => "Your word is a lamp to my feet and a light to my path.", "reference" => "Psalm 119:105"],
		["text" => "But seek first the kingdom of God and his righteousness...", "reference" => "Matthew 6:33"],
		["text" => "The Lord is near to all who call on him, to all who call on him in truth.", "reference" => "Psalm 145:18"],
	];
	$index = intval(date('z')) % count($localPool);
	$verse = $localPool[$index];

	try {
		$context = stream_context_create([
			'http' => [
				'timeout' => 2,
				'header' => "User-Agent: TUMSDA-Church/1.0\r\n",
			],
		]);
		$response = @file_get_contents('https://beta.ourmanna.com/api/v1/get?format=json&order=daily', false, $context);
		if ($response) {
			$data = json_decode($response, true);
			if (isset($data['verse']['details']['text']) && isset($data['verse']['details']['reference'])) {
				$verse = [
					'text' => trim($data['verse']['details']['text']),
					'reference' => trim($data['verse']['details']['reference']),
				];
			}
		}
	} catch (Throwable $e) {
	}
	return $verse;
} 