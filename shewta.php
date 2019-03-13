<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c7e044ca726ff2eea5a9e47/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

https://bigdata.b2bsea.com/index.php/controller/checkout


<script>
jQuery(document).ready(function($){
	$('body').on('click','.qqq',function(e){	
		$.ajax({
				type: "POST",
				// beforeSend: function() {
					//$("#overlay").show(); 
				//}
				url: "<?php echo base_url('index.php/Maincontroller/sethtml');?>",
				data: { 
						
				},
				success: function(data) {
					//alert(data);
					$(".setthttml").html(data);
					 //==========================//
					
				}
			});
	});
});
</script>
