
	<footer class="foot footer text-center hide" >
		 <span class=" text-center">
       	 <?php
       	 	 echo 'جميع الحقوق محفوظه &copy'."<span style='color:red'>".' 2021</span> توفيرات '.
       	 	  '<span class="tm"> </span>' ; ?>	  
       	</span>
       	<span class="oners">
       		Powered By <span style="color: red" class="oner mm1 text-left">Sky 4 programming</span> Development
       	</span>
	</footer> 
		<?php
	foreach (glob('layout/js/*.js') as $jsfile) { ?>
		<script type="text/javascript" src="<?php echo $jsfile ?>"></script>
	<?php } ?>

	</body>
</html>