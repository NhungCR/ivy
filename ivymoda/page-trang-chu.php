<?php
get_header();
?>
<div class="banner">
    <div class="slideshow-container">

        <div class="mySlides fade">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-4.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-5.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
        <img src="<?php bloginfo('template_url'); ?>/images/banner-1.jpg" style="width:100%">
        </div>

        </div>
        <br>

        <div  class="banner-dot">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span>  
    </div>
</div>

<div class="home-infor">
    <div class="container">
        <div>Tải ứng dụng IVY moda</div>
        <div class="download">
            <a href="#"><img src="https://pubcdn.ivymoda.com/images/appstore.jpg" alt=""></a>
            <a href="#"><img src="https://pubcdn.ivymoda.com/images/googleplay.jpg" alt=""></a>
        </div>
        <div>Nhận bản tin IVY moda</div>

        <div class="form-email">
            <form action="">
                <input type="text" placeholder="Nhập email của bạn...">
                <i class="fas fa-long-arrow-alt-left"></i>
            </form>
        </div>

        <div class="list-inline">
            <ul>
                <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/dathongbao.png" alt=""></a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>                 
                    </ul>
                </li>
            </ul>
        </div>

        <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br/>
        Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222<br/>
        Đặt hàng online : <b>0246 662 3434</b> .</p>
    </div>
</div>

<div class="footer">
    &copy;Ivymoda All rights reserved
</div>

<button class="open-chat" onclick="openForm()">Chat</button>
<div class="box-chat" id="myForm">
    <div class="box-header"><button type="button" class="btn cancel" onclick="closeForm()">IVY moda</button></div>
        <div class="box-content">
            <div class="box-item">
                <label>Nhập thông tin của bạn *</label><br/>
                <input type="text" placeholder="Nhập tên của bạn"><br/>
                <input type="text" placeholder="Nhập số điện thoại của bạn"><br/>
            </div>
            <div class="box-item">
                <label>Chọn dịch vụ hỗ trợ</label><br/>
                <select name="" id="">
                    <option value="">CSKH</option>
                </select>
            </div>
            <div class="box-item">
                <label>Tin nhắn *</label><br/>
                <textarea name="" id="" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div class="box-start">
                <input type="text" value="Bắt đầu chat">
                <div class="logo-cs"><img src="<?php bloginfo('template_url'); ?>/images/cs.png" alt=""></div>
        </div>
        
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>