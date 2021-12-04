	<!--	<footer class="foot">
		 <p class="copy text-right">
       	 <?php
       	 	 echo 'جميع الحقوق محفوظه &copy مدرسة المناهل الخاصة '.
       	 	  '<span class="tm"> '.date("Y").'</span>' ; 
       	 ?>	  
       	</p>
       	<span class="oners">
       		Powered By <span class="oner mm1 text-left">ZUMH</span> Development
       	</span>
		</footer> -->
		<?php
	foreach (glob('layout/js/*.js') as $jsfile) { ?>
		<script type="text/javascript" src="<?php echo $jsfile ?>"></script>
	<?php } ?>
	</body>
</html>