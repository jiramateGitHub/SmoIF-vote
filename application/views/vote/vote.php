<?php 
	$check = false;
		foreach($get_member as $row){
			if($mem_number == $row->mem_number){
				$check = true;
				break;
			}
		}
		if($check == false){
			echo "<script>location.href = '".site_url("/Vote/")."'</script>";
		}
?>

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
      <a class="navbar-brand js-scroll-trigger btn my-btn" href="<?php echo site_url("/Vote/")?>" style="-moz-border-radius:28px;-webkit-border-radius:28px;border-radius:28px;">ออกจากระบบ</a>
      <a class="navbar-brand" href="#">สวัสดี <?php echo $mem_number;?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- <ul class="navbar-nav ml-auto">
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-1">คำอธิบาย</a>
          </li>
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-2">ลำดับคะแนน</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-3">ติดต่อเรา</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>

	<section class="portfolio" id="portfolio" >
		<div class="container">
			<h1 class="text-center mb-0 ml6">
			  <span class="text-wrapper">
        <span class="letters">ระดับการโหวต</span>
       
			  </span>
			</h1>
			<br>
			<!-- <hr class="star-dark"> -->
			<div align="middle">
				<div class="row" > 
					<?php if ($check == true) { ?>
					
					<?php if($get_topic[0]->tp_status == 1){ 
						?>
						<div class="col-md-4 col-sm-4" align="middle">
							<a href="<?php echo site_url("/Vote/topic1/".$mem_number)?>" class="btn-level1">
								<i class="fas fa-users"></i>
							</a>
							<h3>รอบ 7 ทีม</h3>
						</div>
					<?php	}  ?>
					<br>
					<?php if($get_topic[0]->tp_status == 2){ 
						?>
						<div class="col-md-4 col-sm-4 " align="middle">
							<a href="<?php echo site_url("/Vote/topic2/".$mem_number)?>" class="btn-level3">
								<i class="fas fa-crown"></i>
							</a>
							<h3>รอบ 3 ทีม</h3>
						</div>
					<?php	}   ?>
					<?php	} ?>
					<!-- <div class="col-md-4 col-sm-4" align="middle">
						<a href="hard.php" class="btn-level3">
							<i class="fas fa-dragon"></i>
						</a>
						<h3>ยาก</h3>	
					</div> -->
				</div>
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
