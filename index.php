<?php
  include('./dbConnection.php');
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>  
    <!-- Start Video Background-->
    <!-- <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/banvid.mp4" />
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-content">Learn and Implement</small><br />
        <?php    
              if(!isset($_SESSION['is_login'])){
                echo '<a class="btn btn-danger mt-3" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
              } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
              }
          ?> 
       
      </div> -->
      <!-- Dynamic Hero Section -->
<div class="hero-container">
    <div class="hero-bg-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6 hero-content">
                <div class="badge bg-warning text-dark mb-3 animated-badge">
                    <i class="fas fa-star me-1"></i> Best Online Learning Platform
                </div>
                <h1 class="display-4 fw-bold text-white mb-4 slide-in">
                    Elevate Your Skills with iSchool
                </h1>
                <p class="lead text-light mb-5 slide-in-delayed">
                    Join thousands of learners worldwide in mastering the latest technologies and skills
                </p>
                <div class="cta-buttons slide-in-delayed-2">
                    <?php    
                    if(!isset($_SESSION['is_login'])){
                        echo '<a class="btn btn-light btn-lg me-3 rounded-pill" href="#" data-toggle="modal" data-target="#stuRegModalCenter">
                                <i class="fas fa-rocket me-2"></i>Get Started
                            </a>
                            <a class="btn btn-outline-light btn-lg rounded-pill" href="courses.php">
                                <i class="fas fa-play me-2"></i>Explore Courses
                            </a>';
                    } else {
                        echo '<a class="btn btn-light btn-lg me-3 rounded-pill" href="student/studentProfile.php">
                                <i class="fas fa-user me-2"></i>My Dashboard
                            </a>
                            <a class="btn btn-outline-light btn-lg rounded-pill" href="student/myCourse.php">
                                <i class="fas fa-book me-2"></i>My Courses
                            </a>';
                    }
                    ?>
                </div>
                <div class="stats mt-5 text-white slide-in-delayed-3">
                    <div class="row g-4">
                        <div class="col-4">
                            <div class="stat-item">
                                <h3>10K+</h3>
                                <p>Students</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <h3>100+</h3>
                                <p>Courses</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item">
                                <h3>95%</h3>
                                <p>Success</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="floating-image">
                    <img src="./image/hero.jpg" alt="Learning Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hero-container {
    position: relative;
    overflow: hidden;
    background: linear-gradient(120deg, #4a90e2, #7b68ee);
    margin-top: -56px; /* Adjust based on your navbar height */
}

.hero-bg-shapes .shape-1,
.hero-bg-shapes .shape-2,
.hero-bg-shapes .shape-3 {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.shape-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    right: -150px;
    animation: float 6s ease-in-out infinite;
}

.shape-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    left: -100px;
    animation: float 8s ease-in-out infinite;
}

.shape-3 {
    width: 150px;
    height: 150px;
    bottom: 50%;
    right: 10%;
    animation: float 7s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.animated-badge {
    animation: slidein 1s ease-out;
}

.slide-in {
    animation: slidein 0.8s ease-out;
}

.slide-in-delayed {
    animation: slidein 0.8s ease-out 0.2s both;
}

.slide-in-delayed-2 {
    animation: slidein 0.8s ease-out 0.4s both;
}

.slide-in-delayed-3 {
    animation: slidein 0.8s ease-out 0.6s both;
}

@keyframes slidein {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.floating-image {
    animation: float-image 6s ease-in-out infinite;
}

@keyframes float-image {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.stat-item {
    text-align: center;
    padding: 15px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.1);
}

.stat-item h3 {
    font-size: 1.8rem;
    margin-bottom: 5px;
    font-weight: bold;
}

.stat-item p {
    margin-bottom: 0;
    font-size: 0.9rem;
    opacity: 0.9;
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
</style>
    </div> <!-- End Video Background -->

    <div class="container-fluid bg-danger txt-banner"> <!-- Start Text Banner -->
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5> <i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
          </div>
        </div>
    </div> <!-- End Text Banner -->
    
    <!-- Start Popular Courses Section -->
<div class="container py-5">
    <!-- Section Header -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <span class="badge bg-primary px-3 py-2 mb-2">Featured Courses</span>
            <h2 class="display-5 fw-bold mb-3">Popular Courses</h2>
            <p class="text-muted lead">Explore our most sought-after courses designed to enhance your skills</p>
        </div>
    </div>

    <!-- Course Cards First Row -->
    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm hover-card">
                        <!-- Course Image -->
                        <div class="course-img-wrapper">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top course-img" alt="'.$row['course_name'].'" />
                            <div class="course-overlay">
                                <span class="badge bg-danger position-absolute top-0 end-0 m-3">Hot</span>
                            </div>
                        </div>
                        
                        <!-- Course Content -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-primary">Most Popular</span>
                                <div class="course-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                    <small class="ms-1 text-muted">(4.5)</small>
                                </div>
                            </div>
                            
                            <h5 class="card-title mb-3">'.$row['course_name'].'</h5>
                            <p class="card-text text-muted">'.$row['course_desc'].'</p>
                            
                            <!-- Course Meta -->
                            <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                                <div class="course-meta">
                                    <small class="text-muted me-3">
                                        <i class="fas fa-clock me-1"></i> 6 hours
                                    </small>
                                    <small class="text-muted">
                                        <i class="fas fa-user-graduate me-1"></i> 1.2k students
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Course Footer -->
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="course-price">
                                    <small class="text-muted text-decoration-line-through">₹'.$row['course_original_price'].'</small>
                                    <span class="ms-2 h5 text-primary mb-0">₹'.$row['course_price'].'</span>
                                </div>
                                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-outline-primary">
                                    Enroll Now <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        ?>
    </div>

    <!-- Course Cards Second Row -->
    <div class="row g-4 mt-2">
        <?php
        $sql = "SELECT * FROM course LIMIT 3,3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm hover-card">
                        <!-- Course Image -->
                        <div class="course-img-wrapper">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top course-img" alt="'.$row['course_name'].'" />
                            <div class="course-overlay">
                                <span class="badge bg-success position-absolute top-0 end-0 m-3">New</span>
                            </div>
                        </div>
                        
                        <!-- Course Content -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-primary">Trending</span>
                                <div class="course-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <small class="ms-1 text-muted">(4.0)</small>
                                </div>
                            </div>
                            
                            <h5 class="card-title mb-3">'.$row['course_name'].'</h5>
                            <p class="card-text text-muted">'.$row['course_desc'].'</p>
                            
                            <!-- Course Meta -->
                            <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                                <div class="course-meta">
                                    <small class="text-muted me-3">
                                        <i class="fas fa-clock me-1"></i> 8 hours
                                    </small>
                                    <small class="text-muted">
                                        <i class="fas fa-user-graduate me-1"></i> 800 students
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Course Footer -->
                        <div class="card-footer bg-white border-top-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="course-price">
                                    <small class="text-muted text-decoration-line-through">₹'.$row['course_original_price'].'</small>
                                    <span class="ms-2 h5 text-primary mb-0">₹'.$row['course_price'].'</span>
                                </div>
                                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-outline-primary">
                                    Enroll Now <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        ?>
    </div>

    <!-- View All Courses Button -->
    <div class="text-center mt-5">
        <a href="courses.php" class="btn btn-lg btn-primary rounded-pill px-5">
            View All Courses <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<style>
/* Course Card Styles */
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.course-img-wrapper {
    position: relative;
    overflow: hidden;
}

.course-img {
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.hover-card:hover .course-img {
    transform: scale(1.05);
}

.course-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 100%);
}

/* Badge Styles */
.badge {
    font-weight: 500;
    padding: 0.5em 1em;
}

/* Button Styles */
.btn-outline-primary {
    border-width: 2px;
    font-weight: 500;
    padding: 0.5rem 1.5rem;
}

.btn-outline-primary:hover {
    transform: translateY(-1px);
}

/* Rating Stars */
.course-rating i {
    font-size: 0.875rem;
}

/* Course Meta */
.course-meta i {
    opacity: 0.8;
}
</style>




    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  

     <!-- Start Students Testimonial -->
<div class="container-fluid py-5" style="background-color: #4B7289" id="Feedback">
    <div class="container">
        <h1 class="text-center text-white mb-5">
            Student's Feedback
            <div class="border-bottom border-2 border-white w-25 mx-auto mt-2"></div>
        </h1>
        
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php 
                    $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content 
                            FROM student AS s 
                            JOIN feedback AS f ON s.stu_id = f.stu_id";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            $s_img = $row['stu_img'];
                            $n_img = str_replace('../','',$s_img)
                    ?>
                    <div class="testimonial bg-white p-4 rounded-3 shadow-lg mx-2">
                        <div class="testimonial-content mb-4">
                            <p class="description text-muted mb-0">
                                <i class="fas fa-quote-left fs-3 text-primary me-2"></i>
                                <?php echo htmlspecialchars($row['f_content']); ?>
                                <i class="fas fa-quote-right fs-3 text-primary ms-2"></i>
                            </p>
                        </div>
                        
                        <div class="testimonial-profile d-flex align-items-center">
                            <div class="pic me-3">
                                <img src="<?php echo htmlspecialchars($n_img); ?>" 
                                     alt="Student Image" 
                                     class="rounded-circle"
                                     style="width: 80px; height: 80px; object-fit: cover;">
                            </div>
                            <div class="testimonial-prof">
                                <h4 class="mb-1 fw-bold"><?php echo htmlspecialchars($row['stu_name']); ?></h4>
                                <small class="text-muted"><?php echo htmlspecialchars($row['stu_occ']); ?></small>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Students Testimonial -->

<!-- Required CSS for Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Custom CSS for testimonials -->
<style>
.testimonial {
    transition: transform 0.3s ease;
}

.testimonial:hover {
    transform: translateY(-5px);
}

.testimonial .description {
    font-size: 1rem;
    line-height: 1.6;
}

#testimonial-slider .owl-nav {
    margin-top: 20px;
}

#testimonial-slider .owl-nav button.owl-prev,
#testimonial-slider .owl-nav button.owl-next {
    width: 40px;
    height: 40px;
    background: #fff;
    border-radius: 50%;
    margin: 0 5px;
    transition: all 0.3s ease;
}

#testimonial-slider .owl-nav button:hover {
    background: #007bff;
    color: #fff;
}
</style>

<!-- Required JavaScript for Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items: 3,
        margin: 20,
        loop: true,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
});
</script>

    <div class="container-fluid bg-danger"> <!-- Start Social Follow -->
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> <!-- End Social Follow -->

    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>iSchool provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a><br />
            <a class="text-dark" href="#">Web Designing</a><br />
            <a class="text-dark" href="#">Android App Dev</a><br />
            <a class="text-dark" href="#">iOS Development</a><br />
            <a class="text-dark" href="#">Data Analysis</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>iSchool Pvt Ltd <br> Near Police Camp II <br> Bokaro, Jharkhand <br> Ph. 000000000 </p>
          </div>
        </div>
      </div>
    </div> <!-- End About Section -->

  <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    
  ?>  
