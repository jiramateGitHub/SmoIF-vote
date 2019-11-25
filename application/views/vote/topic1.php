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
<?php include "templates/header.php"?>
<script>
function select(id,ch_name){
	Swal.fire({
		title: 'ยืนยันคำตอบ?',
		text: ch_name,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes'
	}).then((result) => {
		if (result.value) {


			$.ajax({
				type: "POST",
				url: "<?php echo site_url('/Vote/select_choice/'.$mem_number.'/');?>"+id,
				data: {
						id: id
				},
				success: function(result){
					Swal.fire(
						'เลือกคำตอบสำเร็จ',
						'',
						'success'
					)
					setTimeout('Redirect()', 1000);
				}
			});
		}
	})
}
function Redirect(){
	location.href = '<?php echo site_url("/Vote/vote/".$mem_number); ?>'
}
</script>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url("/Vote/vote/".$mem_number)?>">ย้อนกลับ</a>
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
		<div class="container portfolio">
		
			<div class="col-lg-12" align="middle">
				
				<?php 
				$check = 0;
				foreach($get_log as $row_log){
					if($row_log->log_mem_id == $mem_number){
						$check = 1;
						break;
					}
				}
				if($check != 1){

				foreach($get_choice as $row){
					
					
				?>
				<div class="col-sm-6">
					<a onclick="select(<?php echo $row->ch_id;?>,'<?php echo $row->ch_name;?>')" class="btn-stage3" >
						<h2 id="choice[0]" style="color:white"><?php echo $row->ch_name;?></h2>
					</a>
				</div>
				<?php } }else{ ?>

					<h1 class="text-center mb-0 ml6">
			  		<span class="text-wrapper">
        			<span class="letters">คุณได้โหวตไปแล้ว</span>
       
			  </span>
			</h1>
					
					
				<?php }?>

			</div>
		</div>
    </section>
  <div class="copyright py-4 text-center text-white">
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
