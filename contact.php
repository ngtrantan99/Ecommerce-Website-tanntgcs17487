<?php 
require_once('layouts/header.php');
// var_dump($_POST);
if(!empty($_POST)) {
	$first_name = getPost('first_name');
	$last_name = getPost('last_name');
	$email = getPost('email');
	$phone_number = getPost('phone');
	$subject_name = getPost('subject_name');
	$note = getPost('note');
	$created_at = $updated_at = date('Y-m-d H:i:s');

	$sql = "insert into FeedBack(firstname, lastname, email, phone_number, subject_name, note, status, created_at, updated_at) values('$first_name', '$last_name', '$email', '$phone_number', '$subject_name', '$note', 0, '$created_at', '$updated_at')";
	// echo $sql;
	execute($sql);
}
?>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<form method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					  <input required="true" type="text" class="form-control" id="usr" name="first_name" placeholder="Firstname">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
					  <input required="true" type="text" class="form-control" id="usr" name="last_name" placeholder="Lastname">
					</div>
				</div>
			</div>
			<div class="form-group">
			  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
			<div class="form-group">
			  <input required="true" type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			  <input required="true" type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Title">
			</div>
			<div class="form-group">
			  <label for="pwd">Content:</label>
			  <textarea class="form-control" rows="3" name="note"></textarea>
			</div>
			<a href="checkout.php"><button class="btn btn-success" style="border-radius: 0px; font-size: 26px; width: 100%;">SEND</button></a>
		</div>
		<div class="col-md-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6377498248494!2d106.7054158148006!3d10.762376492331052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f69244be589%3A0x8f7a7a4425da14fa!2zMTIgxJDGsOG7nW5nIFTDtG4gxJDhuqNuLCBQaMaw4budbmcgMTMsIFF14bqtbiA0LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmggNzAwMDAw!5e0!3m2!1svi!2s!4v1637597825156!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</form>
</div>
<?php
require_once('layouts/footer.php');
?>