<?php 
    $pageTitle = "Home";
    include 'header.php'; 
?>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center pt-16">
        <div class="container mx-auto px-4 py-20 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">AERP Institute of Business Management</h1>
                <p class="text-xl text-white mb-8">Affiliated to Maharshi Dayanand University, Rohtak</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:9813091753" class="bg-secondary hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-full transition duration-300"> <i class="fas fa-phone mr-2"></i> +91 9813091753</a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary font-bold py-3 px-8 rounded-full transition duration-300">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

<section class="py-8 bg-white">
  <div class="container mx-auto px-4">
    <div class="relative">
      <!-- Slider Container -->
      <div class="overflow-hidden rounded-xl">
        <div id="sliderWrapper" class="flex transition-transform duration-500 ease-in-out space-x-4">
          <div class="slide flex-shrink-0 w-full sm:w-1/2">
            <img src="img/building.jpg" alt="Campus 1" class="w-full h-64 md:h-96 object-cover rounded-lg">
          </div>
          <div class="slide flex-shrink-0 w-full sm:w-1/2">
            <img src="img/22.jpeg" alt="Campus 4" class="w-full h-64 md:h-96 object-cover rounded-lg">
          </div>
          <div class="slide flex-shrink-0 w-full sm:w-1/2">
            <img src="img/students.avif" alt="Campus 2" class="w-full h-64 md:h-96 object-cover rounded-lg">
          </div>
        
          
        </div>
      </div>

      <!-- Navigation Buttons -->
      <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-100 text-primary p-2 rounded-full z-10">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-100 text-primary p-2 rounded-full z-10">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<script>
  const slider = document.getElementById("sliderWrapper");
  const slides = document.querySelectorAll(".slide");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  let currentIndex = 0;

  function getSlidesPerView() {
    return window.innerWidth >= 640 ? 2 : 1;
  }

  function updateSliderPosition() {
    const slideWidth = slides[0].offsetWidth + 16; // 16px = space-x-4 gap
    const perView = getSlidesPerView();
    const maxIndex = slides.length - perView;
    currentIndex = Math.min(currentIndex, maxIndex);
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  function nextSlide() {
    const perView = getSlidesPerView();
    currentIndex = (currentIndex + 1) % (slides.length - perView + 1);
    updateSliderPosition();
  }

  function prevSlide() {
    const perView = getSlidesPerView();
    currentIndex = (currentIndex - 1 + (slides.length - perView + 1)) % (slides.length - perView + 1);
    updateSliderPosition();
  }

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  // Autoplay
  let autoplay = setInterval(nextSlide, 3000);

  // Pause on hover
  slider.parentElement.addEventListener("mouseenter", () => clearInterval(autoplay));
  slider.parentElement.addEventListener("mouseleave", () => autoplay = setInterval(nextSlide, 3000));

  // Resize fix
  window.addEventListener("resize", updateSliderPosition);

  // Initial setup
  window.addEventListener("load", updateSliderPosition);
</script>


    <!-- Latest News / Newspaper Cutting -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-primary mb-2">Latest Updates</h2>
                <div class="w-20 h-1 bg-secondary mx-auto"></div>
            </div>
            <div class="max-w-4xl mx-auto bg-light p-4 rounded-xl shadow-lg border-4 border-primary/10">
                <img src="newspaper/DAINIK JAGRAN.jpg" alt="Newspaper Cutting" class="w-full h-auto rounded-lg shadow-sm">
                <p class="mt-4 text-center text-gray-600 font-medium italic">Latest advertisement in Dainik Jagran</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">About Our Institute</h2>
                <div class="w-20 h-1 bg-secondary mx-auto"></div>
            </div>
            
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="md:w-1/2">
                    
                    <div class="w-full h-96 flex items-center justify-center">
                        <img src="img/students.avif" alt="Students Image" class="w-full h-full object-cover rounded-xl">
                  
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-primary mb-4">AERP Institute of Business Management</h3>
                    <p class="text-gray-700 mb-4">
                        AERP Institute of Business Management is a premier educational institution run by the ALL EDUCATION AND RESEARCH POINT SOCIETY. Located in the serene environment of Sondh village on Hodal-Nuh Road in Palwal district, we provide quality education in management and computer applications.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Our institute is affiliated with Maharshi Dayanand University, Rohtak, ensuring that our students receive a globally recognized education that prepares them for successful careers in the business world.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-2"></i>
                            <span class="font-medium">UGC Recognized</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-2"></i>
                            <span class="font-medium">Experienced Faculty</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-2"></i>
                            <span class="font-medium">Modern Infrastructure</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-secondary mr-2"></i>
                            <span class="font-medium">Industry Partnerships</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Our Courses</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Affiliated to Maharshi Dayanand University, Rohtak</p>
                <div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- BCA Card -->
                <div class="course-card bg-white rounded-xl shadow-lg overflow-hidden transition duration-300">
                    <div class="bg-accent h-48 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-white text-7xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">BCA</h3>
                        <p class="text-gray-600 mb-4">Bachelor of Computer Applications</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>4-Year Undergraduate Program</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Focus on Programming & Software Development</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Industry Internships</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- BBA Card -->
                <div class="course-card bg-white rounded-xl shadow-lg overflow-hidden transition duration-300">
                    <div class="bg-secondary h-48 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-7xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">BBA</h3>
                        <p class="text-gray-600 mb-4">Bachelor of Business Administration</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>4-Year Undergraduate Program</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Comprehensive Business Education</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Leadership & Entrepreneurship Skills</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- MBA Card -->
                <div class="course-card bg-white rounded-xl shadow-lg overflow-hidden transition duration-300">
                    <div class="bg-primary h-48 flex items-center justify-center">
                        <i class="fas fa-briefcase text-white text-7xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-primary mb-2">MBA</h3>
                        <p class="text-gray-600 mb-4">Master of Business Administration</p>
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>2-Year Postgraduate Program</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Specializations in Marketing, Finance & HR</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-secondary mr-2"></i>
                                <span>Industry Projects & Case Studies</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Contact Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Get in touch with us for admissions and inquiries</p>
                <div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-10">
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-primary mb-6">Send us a message</h3>
                        <div class="contact-form fade-in">
                            <div id="form-message" class="form-message" style="display: none;"></div>
                            <form id="contactForm" action="send_form_email.php" method="post">
                                <div class="form-group">
                                    <input type="text" id="name" name="first_name" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="tel" id="phone" name="telephone" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="message" name="comments" placeholder="Your Message." required></textarea>
                                </div>
                                <button type="submit" class="submit-btn">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-white rounded-xl shadow-lg p-8 h-full">
                        <h3 class="text-2xl font-bold text-primary mb-6">Contact Information</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-primary p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary mb-1">Address</h4>
                                    <p class="text-gray-700">Hodal - Nuh Road, Village Sondh, Hodal, District - Palwal, Haryana</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary p-3 rounded-full mr-4">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary mb-1">Phone</h4>
                                    <p class="text-gray-700">+91 9813091753</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary mb-1">Email</h4>
                                    <p class="text-gray-700">aerpibm@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-primary p-3 rounded-full mr-4">
                                    <i class="fas fa-globe text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-primary mb-1">Affiliation</h4>
                                    <p class="text-gray-700">Maharshi Dayanand University, Rohtak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section id="gallery" class="py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Photo Gallery</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our campus and events</p>
                <div class="w-20 h-1 bg-secondary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Campus" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Classroom" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Library" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Event" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Students" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Faculty" class="w-full h-64 object-cover transition-transform duration-300 hover:scale-110">
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formMessage = document.getElementById('form-message');
            const submitButton = this.querySelector('button[type="submit"]');
            const formData = new FormData(this);
            
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            formMessage.style.display = 'none';
            
            fetch('send_form_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                formMessage.style.display = 'block';
                formMessage.className = 'form-message ' + data.status;
                formMessage.textContent = data.message;
                
                if(data.status === 'success') {
                    this.reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                formMessage.style.display = 'block';
                formMessage.className = 'form-message error';
                formMessage.textContent = 'An error occurred. Please try again later.';
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            });
        });
    </script>

<?php include 'footer.php'; ?>