<div class="center-menu">
	<h3><i class="icon-myaccount"></i><a href="/user.html">我的账户</a></h3>
	<div class="title-all">
		<div class="title">
			<div class="title-navbar">
				<i class="icon-center"></i>订单中心<span class="add-reduce">-</span>
			</div>
			<ul>
				<li>
					<a href="/myorder.html">我的订单</a>
				</li>
				<li>
					<a href="mycomment.html">我的评价</a>
				</li>
				<li>
					<a href="fav.html">我的收藏</a>
				</li>
				<li>
					<a href="service.html">退换货</a>
				</li>
			</ul>
		</div>
		<div class="title">
			<div class="title-navbar">
				<i class="icon-account"></i>账户信息<span class="add-reduce">-</span>
			</div>
			<ul>
				<li>
					<a href="mymoney.html">我的钱包</a>
				</li>
				<li>
					<a href="mypoint.html">积分</a>
				</li>
				<li>
					<a href="myquan.html">优惠券</a>
				</li>
				<li>
					<a href="userinfo.html">个人信息</a>
				</li>
				<li>
					<a href="address.html">收货地址</a>
				</li>
				<li>
					<a href="updatepwd.html">账户安全</a>
				</li>
				<?php if($ym_ditribution_config['distrib_level']>0) { ?><li>
					<a href="dt.html">分销</a>
				</li>	
				<?php } ?></ul>
		</div>
	</div>
</div>
<div class="hotline-box box-style"> <i class="icon-tel"></i>
	<h3>客服热线<span class="tel"><?php echo $diy_contact_tel; ?></span></h3></div>
<div class="messques-box box-style">
	<a href="/n-help.html">
	<i class="icon-question"></i>	<h3>帮助中心<span>Help Center</span></h3>  </a>
</div>