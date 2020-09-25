<?php 
require "includes/header.php";
?>


<main>
<link rel="stylesheet" type="text/css" href="css/about.css">
	<div class = "header">
		<h1>"About Us"</h1>
		<p><em>Enjoy the random meme characters I threw together</em></p>
	</div>
	
	<div class = "row">
		<div class = "column">
			<div class = "card">
				<img src = "images/morpheus.jpg">
				<h3>Morpheus</h3>
				<p>pill master</p>
			</div>
		</div>
		<div class = "column">
			<div class = "card">
				<img src = "images/pikachu.PNG">
				<h3>Pikachu</h3>
				<p>surprised boi</p>
			</div>
		</div>
		<div class = "column">
			<div class = "card">
				<img src = "images/thisisfine.PNG">
				<h3>Dog boi</h3>
				<p>everything is fine</p>
			</div>
		</div>
		<div class = "column">
			<div class = "card">
				<img src = "images/lawyer.PNG">
				<h3>Phoenix Wright</h3>
				<p>legal representative</p>
			</div>
		</div>
		<div class = "column">
			<div class = "card">
				<img src = "images/cfo.PNG">
				<h3>Stonks Guy</h3>
				<p>CFO</p>
			</div>
		</div>
	</div>

	<button onclick="count(1)">+</button>
	<p id = "counter">0</p>
	<button onclick="count(-1)">-</button>

	<a target = "_blank" href = "https://github.com/kkudlak45/cs230site">My github repo!</a>
	<p>This is a paragraph. This paragraph has 2 sentences. Now this paragraph has 3 sentences.</p>

	<script>
		function count(by) {
			var counter = document.getElementById("counter");
			var count = parseInt(counter.innerHTML);
			count += by;
			counter.innerHTML = count
		}
	</script>
</main>
