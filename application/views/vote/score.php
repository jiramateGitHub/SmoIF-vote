
<script>



</script>
<style type="text/css">
.tracking-in-contract:hover {
  -webkit-animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
          animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
@-webkit-keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}
@keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}

</style>
<?php include "templates/header.php"?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand js-scroll-trigger btn my-btn" href="<?php echo site_url("/Vote/")?>" style="-moz-border-radius:28px;-webkit-border-radius:28px;border-radius:28px;">ออกจากระบบ</a> -->
      <a class="navbar-brand" href="#">Admin</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>

	<section class="portfolio" id="portfolio" >
		<div class="container">
			<h1 class="text-center mb-0 ml6">
			  <span class="text-wrapper">
        <span class="letters">อันดับ</span>
       
			  </span>
			</h1>
			<br>
			<!-- <hr class="star-dark"> -->
			<div align="middle">
			<?php 
				foreach($admin_sum as $row){
					echo "<h3>".$row->ch_name." | คะแนน ".$row->sum."</h3>";
				}
			?>
			</div>
		</div>
    </section>
  <div class="copyright py-4 text-center text-white fixed-bottom">
    <div class="container">
      <small>Copyright &copy; SmoIF62</small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  
  <?php include "templates/footer.php"?>
</body>
</html>
