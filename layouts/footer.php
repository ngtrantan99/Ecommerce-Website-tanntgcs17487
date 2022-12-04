<footer style="background-color: #f2f2f2 !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>
					<img src="../plane/assets/photos/LOGO.png" alt="" width="60%">
				</h4>
				
					<h7><a target="_blank" href="https://www.google.com/maps/place/12+%C4%90%C6%B0%E1%BB%9Dng+T%C3%B4n+%C4%90%E1%BA%A3n,+Ph%C6%B0%E1%BB%9Dng+13,+Qu%E1%BA%ADn+4,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh+700000,+Vietnam/@10.7623818,106.7054158,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f69244be589:0x8f7a7a4425da14fa!8m2!3d10.7623765!4d106.7076045" > Address: 12 Ton Dan, Ward 13, Distric 3, <br>
						 Ho Chi Minh city, Vietnam</a></h7>
					
				
			</div>
			
			<div class="col-md-4">
			<h4>ABOUT US</h4>
				<ul>
					<li><a href="">> Introduce</a></li>
					<li><a href="contact.php">> Contact</a></li>
					<li><a href="">> Order Guide</a></li>

				</ul>
				
			</div>
			<div class="col-md-4">
			<h4>GALLERY</h4>
			<img src="../plane/assets/photos/12.jpg" alt="" width="100%">
				
			</div>
		</div>
	</div>
	<div style="background-color:#f2f2f2 ; width: 100%; text-align: center; padding: 20px;">
		© 2022 by NGUYEN TRAN TAN - GCS17487.
	</div>
</footer>

<?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('api/ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count"><?=$count?></span>
	<a href="cart.php"><img src="assets/photos/cart.png"></a>
</span>
<!-- Cart stop -->
</body>
</html>