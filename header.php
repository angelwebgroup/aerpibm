<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " - AERP Institute" : "AERP Institute of Business Management"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003366',
                        secondary: '#FF6B00',
                        accent: '#00A896',
                        light: '#F5F7FA',
                        dark: '#1E293B'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-light text-dark">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <div class="bg-primary w-12 h-12 rounded-full flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
                <div class="ml-3">
                    <h1 class="text-xl font-bold text-primary">AERP Institute</h1>
                    <p class="text-xs text-gray-600">Business Management</p>
                </div>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="index.php#home" class="text-primary font-medium hover:text-secondary transition">Home</a>
                <a href="index.php#about" class="text-primary font-medium hover:text-secondary transition">About</a>
                <a href="index.php#courses" class="text-primary font-medium hover:text-secondary transition">Courses</a>
                <a href="recruitment.php" class="text-primary font-medium hover:text-secondary transition">Recruitment</a>
                <a href="index.php#gallery" class="text-primary font-medium hover:text-secondary transition">Gallery</a>
                <a href="index.php#contact" class="text-primary font-medium hover:text-secondary transition">Contact</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <a href="files/LOA-Report-2025-2026.PDF" class="hidden md:flex items-center bg-secondary text-white px-4 py-2 rounded-full hover:bg-orange-600 transition">
                    <span style="text-transform: uppercase;">AICTE Approval Letter</span>
                </a>
                <button id="mobileMenuBtn" class="md:hidden text-primary">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-100 py-4 px-4 space-y-4 shadow-lg">
            <a href="index.php#home" class="block text-primary font-medium hover:text-secondary transition">Home</a>
            <a href="index.php#about" class="block text-primary font-medium hover:text-secondary transition">About</a>
            <a href="index.php#courses" class="block text-primary font-medium hover:text-secondary transition">Courses</a>
            <a href="recruitment.php" class="block text-primary font-medium hover:text-secondary transition">Recruitment</a>
            <a href="index.php#gallery" class="block text-primary font-medium hover:text-secondary transition">Gallery</a>
            <a href="index.php#contact" class="block text-primary font-medium hover:text-secondary transition">Contact</a>
            <a href="files/LOA-Report-2025-2026.PDF" class="block bg-secondary text-white px-4 py-2 rounded-full text-center hover:bg-orange-600 transition">AICTE Approval Letter</a>
        </div>
    </header>