<?php require "classes/Dbh.class.php" ?>
<!-- Redirect if user is not loggedIn -->
<?php
if (!isset($_COOKIE['loggedUser'])) {
	header('Location: ./');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Status</title>
	<link rel="stylesheet" href="./css/status.css" />
	<script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<h3>Status</h3>
		<form action="">
			<div class="search">
				<div class="icon"></div>
				<input type="text" name="search" placeholder="Search" />
			</div>
		</form>
	</header>
	<main>
		<div class="status">
			<div class="left">
				<div class="icon" data-value="0"></div>
				<div class="desc">
					<h3>My status</h3>
					<p>8h ago</p>
				</div>
			</div>
			<div class="right">
				<form action="">
					<label for="imageStatus"><i class="fa-solid fa-camera"></i></label>
					<input type="file" accept="image" name="imageStatus" id="imageStatus" multiple />

					<!-- Write status -->
					<div class="write">
						<i class="fa-solid fa-pencil"></i>
					</div>
				</form>
			</div>
		</div>

		<div class="textArea">
			<div class="top">
				<div class="left">
					<div class="close icon">
						<i class="fa-solid fa-x"></i>
					</div>
				</div>
				<div class="right">
					<div class="fontFamily icon">
						<i class="fa-solid fa-t"></i>
					</div>
					<div class="bgColor icon">
						<i class="fa-solid fa-palette"></i>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="area" contenteditable="true"></div>
				<div class="sendButton">
					<i class="fa-solid fa-paper-plane"></i>
				</div>
			</div>
		</div>
		<section id="viewStatus">
			<div class="listStatuses">
				<div class="top">
					<div class="back">
						<div class="icon"><i class="fa-solid fa-arrow-left-long"></i></div>
						<p>back</p>
					</div>
					<p>My updates</p>
				</div>
				<div class="content">
					<!-- <div class="contentElem">
							<div class="picture"></div>
							<div class="desc">
								<p class="totalViews"><span>11</span> views</p>
								<p class="timePast">17h ago</p>
							</div>
							<div class="options">
								<i class="fa-solid fa-ellipsis"></i>
							</div>
						</div> -->
				</div>
				<p class="statusInfo">Your status will disappear after 24 hours</p>
			</div>
			<div class="statuses"></div>
		</section>
	</main>
	<script src="./js/status.js" defer type="module"></script>
</body>

</html>