    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="bg-primary w-10 h-10 rounded-full flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold ml-2">AERP Institute</h3>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Providing quality education in business management and computer applications since 2008.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="index.php#about" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="index.php#courses" class="text-gray-400 hover:text-white transition">Courses</a></li>
                        <li><a href="recruitment.php" class="text-gray-400 hover:text-white transition">Recruitment</a></li>
                        <li><a href="index.php#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Courses</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">BCA</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">BBA</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">MBA</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact Info</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-secondary"></i>
                            <span>Hodal - Nuh Road, Village Sondh, Hodal, District - Palwal, Haryana</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-secondary"></i>
                            <span>+91 9813091753</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-secondary"></i>
                            <span>aerpibm@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500">
                <p class="text-gray-400 text-sm">&copy; <script>document.write(new Date().getFullYear())</script> AERP Institute of Business Management. All Rights Reserved.</p>
                <p class="mt-2">Run by ALL EDUCATION AND RESEARCH POINT SOCIETY</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top bg-primary text-white p-3 rounded-full shadow-lg" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when a link is clicked
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        // Scroll to top visibility
        window.addEventListener('scroll', () => {
            const scrollTop = document.querySelector('.scroll-top');
            if (window.pageYOffset > 300) {
                scrollTop.classList.add('show');
            } else {
                scrollTop.classList.remove('show');
            }
        });
    </script>
</body>
</html>