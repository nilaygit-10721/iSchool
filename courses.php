<?php
  include('./dbConnection.php');
  include('./mainInclude/header.php'); 
?>  
    <!-- Start Course Page Banner -->
    <div class="container-fluid p-0 position-relative">
        <img src="./image/2.jpg" alt="courses" class="w-100" style="height: 500px; object-fit: cover; filter: brightness(0.7);" />
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <span class="badge bg-primary px-3 py-2 mb-3">All Courses</span>
            <h1 class="display-4 fw-bold mb-3">Explore Our Courses</h1>
            <p class="lead">Discover the perfect course to advance your skills</p>
        </div>
    </div>
    <!-- End Course Page Banner -->

    <!-- Start All Courses Section -->
    <div class="container py-5">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary px-3 py-2 mb-2">Course Catalog</span>
                <h2 class="display-5 fw-bold mb-3">Available Courses</h2>
                <p class="text-muted lead">Browse through our comprehensive selection of courses</p>
            </div>
        </div>

        <!-- Course Cards -->
        <div class="row g-4">
            <?php
            $sql = "SELECT * FROM course";
            $result = $conn->query($sql);
            if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm hover-card">
                            <!-- Course Image -->
                            <div class="course-img-wrapper">
                                <img src="<?php echo str_replace('..', '.', $row['course_img']); ?>" 
                                     class="card-img-top course-img" 
                                     alt="<?php echo htmlspecialchars($row['course_name']); ?>" />
                                <div class="course-overlay">
                                    <span class="badge bg-primary position-absolute top-0 end-0 m-3">Featured</span>
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
                                
                                <h5 class="card-title mb-3"><?php echo htmlspecialchars($row['course_name']); ?></h5>
                                <p class="card-text text-muted"><?php echo htmlspecialchars(substr($row['course_desc'], 0, 100)) . '...'; ?></p>
                                
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
                                        <small class="text-muted text-decoration-line-through">₹<?php echo $row['course_original_price']; ?></small>
                                        <span class="ms-2 h5 text-primary mb-0">₹<?php echo $row['course_price']; ?></span>
                                    </div>
                                    <a href="coursedetails.php?course_id=<?php echo $course_id; ?>" 
                                       class="btn btn-outline-primary">
                                        Enroll Now <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?> 
        </div>
    </div>
    <!-- End All Courses Section -->

    <!-- Custom CSS -->
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
        transition: all 0.3s ease;
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
  include('./contact.php'); 
  include('./mainInclude/footer.php'); 
?>