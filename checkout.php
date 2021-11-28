<?php 
require_once('layouts/header.php');
?>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<form method="post" onsubmit="return completeCheckout();">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			  <input required="true" type="text" class="form-control" id="usr" name="fullname" placeholder="Nguyen Van A...">
			</div>
			<div class="form-group">
			  <input required="true" type="email" class="form-control" id="email" name="email" placeholder="vana@gmail.com...">
			</div>
			<div class="form-group">
			  <input required="true" type="tel" class="form-control" id="phone" name="phone" placeholder="01234567...">
			</div>
			<div class="form-group">
			  <input required="true" type="text" class="form-control" id="address" name="address" placeholder="12 Xuan Dieu, Ha Noi,...">
			</div>
			<div class="form-group">
			  <label for="pwd">Note for us:</label>
			  <textarea class="form-control" rows="3"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<table class="table table-bordered">
			<tr>
				<th>No.</th>
				<th>Product</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$index = 0;
foreach($_SESSION['cart'] as $item) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$item['title'].'</td>
			<td>'.number_format($item['discount']).' VND</td>
			<td>
				'.$item['num'].'
			</td>
			<td>'.number_format($item['discount'] * $item['num']).' VND</td>
		</tr>';
}
?>
		</table>
		<a href="checkout.php"><button class="btn btn-success" style="border-radius: 0px; font-size: 26px; width: 100%;">CONFIRM</button></a>
		</div>
	</div>
</form>
</div>

<script type="text/javascript">
	function completeCheckout() {
		$.post('api/ajax_request.php', {
			'action': 'checkout',
			'fullname': $('[name=fullname]').val(),
			'email': $('[name=email]').val(),
			'phone_number': $('[name=phone]').val(),
			'address': $('[name=address]').val(),
			'note': $('[name=note]').val()
		}, function() {
			window.open('complete.php', '_self');
		})

		return false;
	}
</script>
<?php
require_once('layouts/footer.php');
?>