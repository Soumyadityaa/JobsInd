<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JobsInd - India's Trusted Job Portal | Latest Jobs & Notifications</title>

  <!-- Allows WordPress and Plugins to inject CSS scripts -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Header -->
  <header>
    <h1>JobsInd Alert Portal</h1>
    <p>India's Trusted Job Portal for Private Jobs, Government Notifications, Work From Home & Internships</p>
  </header>

  <!-- Navigation Bar -->
  <div class="nav-wrapper">
    <nav>
      <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#jobs-section">Government Jobs</a></li>
        <li><a href="#jobs-section">Private Jobs</a></li>
        <li><a href="#jobs-section">Work From Home</a></li>
        <li><a href="#jobs-section">Internships</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <!-- Main Grid Layout -->
  <div class="container">

    <!-- Primary Content Area -->
    <main>
    <!-- Dynamic WP Job Manager Listings -->
  <div class="card" id="jobs-section">
    <div class="card-header">Latest Active Job Notifications</div>
    <div class="card-body">
      <?php 
        // WP Job Manager automatically renders a search bar, category dropdown, and live job table
        echo do_shortcode('[jobs show_categories="true" show_filters="true" per_page="10"]'); 
      ?>
    </div>
  </div>

      <!-- About JobsInd Section -->
      <div class="card about-section" id="about">
        <div class="card-header">About JobsInd - India's Trusted Job Portal</div>
        <div class="card-body">
          <p>
            Welcome to <strong>JobsInd</strong>, your trusted destination for finding the latest private jobs, government jobs, work-from-home jobs, internships, and career opportunities across India. Our mission is to connect job seekers with reliable employers through a secure, fast, and easy-to-use platform.
          </p>
          <p>
            Whether you are a fresher starting your career, an experienced professional looking for better opportunities, or an employer searching for qualified talent, JobsInd is committed to making the hiring process simple and effective.
          </p>

          <div class="grid-2col">
            <div class="info-box">
              <h4>Our Mission</h4>
              <p>To bridge the gap between employers and job seekers by providing verified job listings, career guidance, and a seamless recruitment experience. We strive to help millions of Indians build successful careers by making employment opportunities easily accessible.</p>
            </div>
            <div class="info-box">
              <h4>Our Vision</h4>
              <p>To become one of India's leading job portals by delivering trusted job information, empowering career growth, and helping organizations recruit the right candidates efficiently.</p>
            </div>
          </div>

          <h3>Why Choose JobsInd?</h3>
          <div class="feature-grid">
            <div class="feature-item">
              <h5>Verified Opportunities</h5>
              <p>We publish reliable and up-to-date job openings from trusted employers and partners.</p>
            </div>
            <div class="feature-item">
              <h5>Easy Job Search</h5>
              <p>Search by location, qualification, industry, experience level, and job type seamlessly.</p>
            </div>
            <div class="feature-item">
              <h5>Career Support</h5>
              <p>Gain access to valuable resume tips, interview guidance, and job search strategies.</p>
            </div>
            <div class="feature-item">
              <h5>Nationwide Coverage</h5>
              <p>Opportunities across IT, Banking, Healthcare, Education, Engineering, Sales, and Government sectors.</p>
            </div>
          </div>

          <h3 style="margin-top: 20px;">Our Commitment</h3>
          <p>
            We are committed to maintaining transparency, accuracy, and quality in every job listing published on our platform. While we make every effort to verify the information, applicants are encouraged to confirm job details directly with employers before applying.
          </p>

          <div class="contact-card" id="contact">
            <h4>Contact Us</h4>
            <p>We value your feedback, suggestions, and business inquiries regarding job postings, partnerships, advertising, or general support.</p>
            <p><strong>Email:</strong> <a href="mailto:ershrikanta@gmail.com">ershrikanta@gmail.com</a></p>
          </div>
        </div>
      </div>

    </main>

    <!-- Sidebar Section -->
    <aside>
      <!-- What We Offer Widget -->
      <div class="sidebar-widget">
        <div class="widget-header">What We Offer</div>
        <ul class="widget-list">
          <li><a href="#jobs-section">Latest Private Jobs</a></li>
          <li><a href="#jobs-section">Government Notifications</a></li>
          <li><a href="#jobs-section">Work From Home Jobs</a></li>
          <li><a href="#jobs-section">Fresher Jobs</a></li>
          <li><a href="#jobs-section">Experienced Jobs</a></li>
          <li><a href="#jobs-section">Internship Opportunities</a></li>
          <li><a href="#jobs-section">Part-Time & Full-Time Jobs</a></li>
        </ul>
      </div>

      <!-- Quick Updates Widget -->
      <div class="sidebar-widget">
        <div class="widget-header">Quick Updates</div>
        <ul class="widget-list">
          <li><a href="#">Latest Exam Results</a></li>
          <li><a href="#">Download Admit Cards</a></li>
          <li><a href="#">Official Answer Keys</a></li>
          <li><a href="#">Syllabus & Exam Pattern</a></li>
          <li><a href="#">Previous Year Papers</a></li>
        </ul>
      </div>

      <!-- Jobs by Qualification Widget -->
      <div class="sidebar-widget">
        <div class="widget-header">Jobs by Qualification</div>
        <ul class="widget-list">
          <li><a href="#">10th / 12th Pass Jobs</a></li>
          <li><a href="#">ITI & Diploma Jobs</a></li>
          <li><a href="#">Engineering (B.E/B.Tech)</a></li>
          <li><a href="#">Graduate & Post Graduate</a></li>
        </ul>
      </div>
    </aside>

  </div>

  <!-- Footer Section -->
  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <h4>JobsInd Alert Portal</h4>
        <p>JobsInd is a trusted job portal dedicated to helping candidates find government jobs, private roles, internships, and work-from-home careers across India.</p>
        <p style="margin-top: 10px;"><strong>Contact:</strong> ershrikanta@gmail.com</p>
      </div>

      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact Support</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Job Categories</h4>
        <ul>
          <li><a href="#jobs-section">Government Jobs</a></li>
          <li><a href="#jobs-section">Private Sector</a></li>
          <li><a href="#jobs-section">Work From Home</a></li>
          <li><a href="#jobs-section">Internships</a></li>
          <li><a href="#jobs-section">Banking & SSC</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2026 JobsInd Alert Portal. All rights reserved.</p>
    </div>
  </footer>

  <!-- Allows WordPress and Plugins to inject JS scripts -->
  <?php wp_footer(); ?>
</body>
</html>