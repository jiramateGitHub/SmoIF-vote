<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<style>
  @media screen and (min-height: 700px) {
  div.example {
    margin-top: 30px;
  }
}
</style>
<?php include "templates/header.php"?>
<script>
	var re_id = ""

	function inputName(element) {
		(async function getName() {
		const {value: id} = await Swal.fire({
		  title: 'กรุณาใส่รหัสนิสิต',
		  input: 'text',
		  inputPlaceholder: 'รหัสนิสิต'
		})
		var check = 0;
		$.ajax({
				type: "POST",
				url: "<?php echo site_url('/Vote/login');?>",
				data: {
						id: id
				},
				success: function(result){
						let data = JSON.parse(result)
						console.log(data[0].mem_number)
						if (data[0].mem_number != "false") {
							Swal.fire('สวัสดี ' + data[0].mem_fname +' '+data[0].mem_lname + '!')
							re_id = data[0].mem_number;
							setTimeout('Redirect()', 2000);
						}else{
							Swal.fire("ใส่รหัสนิสิตให้ถูกต้อง","", "error");
						}
				}
		});
		})()
	}
	// Wrap every letter in a span
	
  function Redirect(element) {
		location.href = '<?php echo site_url("/Vote/vote/"); ?>'+re_id
	}

</script>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
		SmoIF 62
	  </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">เล่นเกม</a>
          </li>
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-1">คำอธิบาย</a>
          </li>
		  <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-2">ลำดับคะแนน</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item" href="#portfolio-modal-3">ติดต่อเรา</a>
          </li>
        </ul>
      </div>
    </div> -->
  </nav>
  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio" style="background-color:#FF6B6B;">
    <div class="container">
	  <div class="example">
			<br>
    <h1 class="text-center mb-0 ml6" style="color:#fff">
		  <span class="text-wrapper">
			  <span class="letters">ระบบโหวต</span>
		  </span>
	  </h1>
    </div>
	  <hr class="star-dark">
	  <center><a onclick="inputName();">
	    <p class="my-pulse1" style="background-color:#C44D58;">เริ่ม</p>
	  </a></center>

	  <hr class="star-dark">
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
  <?php include "templates/footer.php"?>
</body>
</html>
