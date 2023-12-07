<div class="container-fluid bg-dark mt-5">
    <div class="row">
        <div class="col-lg-6 p-3">
            <h3 class="h-font fw-bold text-white fs-3 mb-2">BK Hotel</h3>
            <p class="text-white">Khách sạn Bách Khoa sẽ mang đến cho quý khách sự thoải mái và hài lòng 
                bởi tính chuyên nghiệp và thân thiện của đội ngũ nhân viên.
                Với giá cả phải chăng và vị trí thuận tiện là địa chỉ tin cậy cho 
                khách du lịch và các doanh nhân trong nước.
            </p>
        </div>
        <div class="col-lg-6 p-3">
            <h3 class="h-font fw-bold text-white fs-3 mb-2">Thành tích</h3>
            <p class="text-white">Top 10 khách sạn tốt nhất thành phố Hà Nội, top 30 khách sạn
                tốt nhất miền Bắc, khách sạn có bể bơi đẹp nhất Hà Nội, ...
            </p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="home.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br> 
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br> 
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br> 
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> 
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow us</h5>
            <?php
             if($contact_r['fb']!=''){
                echo<<<data
                    <a href="$contact_r[x] " class="d-inline-block text-dark text-decoration-none mb-2">
                     <i class="bi bi-x me-1"></i> X
                    </a><br>
            data;
             } 
             ?>
            
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
             <i class="bi bi-facebook me-1"></i> Facebook
            </a><br>
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none ">
             <i class="bi bi-instagram-1"></i> Instagram
            </a><br>

    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-8">hehe</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity=""

<script>
    function setActive(){
      let navbar = document.getElementById('nav-bar');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++)
      {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0){
            a_tags[i].classList.add('active');
        }
      }
    }
    setActive();

</script>