<?php 
require_once('layouts/header.php');

$sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id order by Product.updated_at desc limit 0,8";
$lastestItems = executeResult($sql);
?>
<!-- banner -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://theme.hstatic.net/1000161013/1000407503/14/slider_1.jpg?v=301" alt="VNA">
    </div>
    <div class="carousel-item">
      <img src="https://theme.hstatic.net/1000161013/1000407503/14/slider_2.jpg?v=301" alt="VNA">
    </div>
    <div class="carousel-item">
      <img src="assets/photos/vna.jpg" alt="vna">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-- banner stop -->
<div class="container">
	<h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px; ">NEW ARRIVALS</h1>
	<div class="row">
	<?php
		foreach($lastestItems as $item) {
			echo '<div class="col-md-3 col-6 product-item">
					<a href="detail.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%; "></a>
					<p style="font-weight: bold;">'.$item['category_name'].'</p>
					<a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$item['title'].'</p></a>
					<p style="color: red; font-weight: bold;">'.number_format($item['discount']).' VND</p>
					<p><button class="btn btn-success" onclick="addCart('.$item['id'].', 1)" style="width: 100%; border-radius: 0px;"><i class="bi bi-cart-plus-fill"></i> Add To Cart</button></p>
				</div>';
		}
	?>
	</div>
</div> 

<!-- danh muc san pham -->

<div class="container">
<h1 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">Aviation News</h1>
<div class="row">


	<div class="col-md-3 col-6 product-item">
        <a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/challenger-650-join-netjets-european-fleet" target="_blank"><p style="font-weight: bold; text-transform: uppercase;">Challenger 650 To Join NetJets European Fleet</p></a>
				<a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/challenger-650-join-netjets-european-fleet" target="_blank"><img src="https://www.ainonline.com/sites/ainonline.com/files/styles/ain30_fullwidth_large/public/uploads/2021/11/netjets_cl650_copy.jpg?itok=j-LITIYc&timestamp=1637249265" style="width: 100%;"></a>
				<p style="font-weight: light; font-style: italic;">NetJets is adding the large-cabin Bombardier Challenger 650 to its European...</p>
				<p style="color: red; font-weight: lighter;">November 18, 2021, 6:00 AM</p>
				<p><a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/challenger-650-join-netjets-european-fleet" target="_blank">Read More</a></p>
			</div>

      <div class="col-md-3 col-6 product-item">
        <a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/upgraded-commercial-mi-171-helicopter-goes-show" target="_blank"><p style="font-weight: bold; text-transform: uppercase;">Upgraded Commercial Mi-171 Helicopter on Show</p></a>
				<a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/upgraded-commercial-mi-171-helicopter-goes-show" target="_blank"><img src="https://www.ainonline.com/sites/ainonline.com/files/styles/ain30_fullwidth_large/public/uploads/2021/11/mi-171a2_01-small.jpg?itok=2Egf_rgm&timestamp=1637235287" style="width: 100%;"></a>
				<p style="font-weight: light;font-style: italic;">Russian Helicopters demonstrated its newest commercial version of the Mil Mi-18/17...</p>
				<p style="color: red; font-weight: lighter;">November 18, 2021, 6:28 AM</p>
				<p><a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-18/upgraded-commercial-mi-171-helicopter-goes-show" target="_blank">Read More</a></p>
			</div>

      <div class="col-md-3 col-6 product-item">
        <a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/bizav-track-new-2050-environmental-goals" target="_blank"><p style="font-weight: bold; text-transform: uppercase;">Bizav on Track for New 2050 Environmental Goals</p></a>
				<a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/bizav-track-new-2050-environmental-goals" target="_blank"><img src="https://www.ainonline.com/sites/ainonline.com/files/styles/ain30_fullwidth_large/public/uploads/2021/11/124_globalweb-7500-refueling-on-arrival-barry-ambrose.jpg?itok=_G3Jnhg6&timestamp=1637248771" style="width: 100%;"></a>
				<p style="font-weight: light;font-style: italic;">Business aviation’s success in meeting its new goal of net-zero carbon emissions by 2050...</p>
				<p style="color: red; font-weight: lighter;">November 17, 2021, 1:28 PM</p>
				<p><a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/bizav-track-new-2050-environmental-goals" target="_blank">Read More</a></p>
			</div>

      <div class="col-md-3 col-6 product-item">
        <a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/embraer-improves-mx-intervals-legacy-600-650-lineage" target="_blank"><p style="font-weight: bold; text-transform: uppercase;">Embraer Improves Mx Intervals on Legacy</p></a>
				<a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/embraer-improves-mx-intervals-legacy-600-650-lineage" target="_blank"><img src="https://www.ainonline.com/sites/ainonline.com/files/styles/ain30_fullwidth_large/public/uploads/2021/11/legacy650e-01.jpg?itok=Wjkryuao&timestamp=1637167288" style="width: 100%;"></a>
				<p style="font-weight: light;font-style: italic;">Embraer Services & Support announced a couple of maintenance program...</p>
				<p style="color: red; font-weight: lighter;">NOV 15, 2021 - 07:03 AM</p>
				<p><a href="https://www.ainonline.com/aviation-news/business-aviation/2021-11-17/embraer-improves-mx-intervals-legacy-600-650-lineage" target="_blank">Read More</a></p>
			</div>
	

</div>
</div>
</div>

  
  
  
  


<?php
require_once('layouts/footer.php');
?>