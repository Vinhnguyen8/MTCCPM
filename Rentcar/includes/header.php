
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Email liên hệ</p>
              <a href="mailto:info@example.com">hvkhanhan@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Số điện thoại hỗ trợ</p>
              <a href="tel:61-1234-5678-09">+84-915-501-897</a> </div>
            <div class="social-follow">
              
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Đăng nhập / Đăng ký</a> </div>
<?php }
else{ 

echo "Welcome To CRP";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Hồ sơ</a></li>
              <li><a href="update-password.php">Đổi mật khẩu</a></li>
            <li><a href="my-booking.php">Lịch sử đặt xe</a></li>
            <li><a href="post-testimonial.php">Chứng thực</a></li>
          <li><a href="my-testimonials.php">Lời chứng thực</a></li>
            <li><a href="logout.php">Đăng xuất</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Hồ sơ</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Đổi mật khẩu</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Lịch sử đặt xe</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Chứng thực</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Lời chứng thực</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Đăng xuất</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Trang chủ</a>    </li>
          	 
          <li><a href="page.php?type=aboutus">Về chúng tôi</a></li>
          <li><a href="car-listing.php">Danh sách xe cho thuê</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Liên hệ</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>