<style type="text/css"> 
	.dis-box{display:-moz-box; display:-webkit-box; display:box; color:#FFF;}
	.dis-box a{display:block;  -moz-box-flex:1; -webkit-box-flex:1; box-flex:1; text-align:center;color: #fff;}
	.dis-box a.a-heart,.dis-box a.a-flow-cart{width:3rem;}	
	.tbl-type{background:#333333; height:auto;  padding:0; position: fixed; bottom:0; width:100%; max-width:640px;}
	.tbl-type a img {height: 2rem;width: auto;}	
	.tbl-type  a img{display:block; margin:0; margin-bottom:0.1rem;}
	.tbl-type  a i{display:block; margin:0; margin-bottom:0.1rem;font-size: 2.35rem;}
	.tbl-type .btn-addcart{background:#1CBB7F;width: 6rem;height:4rem; line-height:4rem;}
	.tbl-type .btn-cart {background: #FFAB35;}
	.tbl-type a .btn-cart-num{position: absolute; display: block;right: -1rem;top: -.7rem; color: #fff;font-style: normal;  min-width: 1.6rem;list-style: initial; font-size: 1.3rem; background: #CB1717;line-height: 1.6rem;border-radius: 0.9rem;  height: 1.6rem; padding: 0 .4rem;}
	</style>
<div class="tbl-type detail-tbn2">
	<div class="tbl-type-div dis-box">				
				<a class="btn-all a-heart" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT'>
				<i class="fa <?php if ($this->_var['sc'] == 1): ?>fa-heart<?php else: ?>fa-heart-o<?php endif; ?>"></i><span>收藏</span></a>	
				
				<a class="btn-all a-flow-cart" href="<?php echo url('flow/cart');?>">
					<span style="position:relative; display:block; width:2.8rem; margin:0 auto;">
					<i class="fa fa-shopping-cart"></i>
						<em style="" id='total_number' class='btn-cart-num'><?php if ($this->_var['seller_cart_total_number']): ?><?php echo $this->_var['seller_cart_total_number']; ?><?php else: ?>0<?php endif; ?></em>
					</span>
					<span>购物车</span>
				</a>					
				
			<a class="btn-addcart btn-cart" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车</a>
			<a class="btn-addcart" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">立即购买</a>		   		
			
	</div>
</div>
 