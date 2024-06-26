@extends('Layout.layout')

<body class="min-h-screen flex flex-col">
    
    <!-- Navbar Top -->
    <nav class="navbar-top relative text-white p-2">
        <div class="container mx-auto flex justify-between items-center h-full">
            <div class="flex space-x-2">
                <a href="#"><img src="{{ asset('assets/images/facebookwhite.png') }}" alt="Facebook" class="social-icon"></a>
                <a href="#"><img src="{{ asset('assets/images/xwhite.png') }}" alt="Twitter" class="social-icon"></a>
                <a href="#"><img src="{{ asset('assets/images/instagramwhite.png') }}" alt="Instagram" class="social-icon"></a>
            </div>
        </div>
    </nav>

    <!-- Navbar Middle -->
    <nav class="navbar-middle bg-white text-black py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src={{ asset('assets/images/kailogistikwarna.png') }} alt="KAI Logistik" class="px-4 h-24 w-52">
            </div>
            <div class="flex space-x-8">
                <div class="text-center">
                    <div>CALL CENTER</div>
                    <div>021 - 5098.6300</div>
                </div>
                <div class="text-center">
                    <div>CALL US</div>
                    <div>021 - 3192.2299</div>
                </div>
                <div class="text-center">
                    <div>EMAIL US</div>
                    <div>cs@kalogistics.co.id</div>
                </div>
                <div class="text-center">
                    <div>WORKING HOURS</div>
                    <div>Mon - Sat 8.00 - 17.00</div>
                </div>
            </div>
            <div>
                <img src={{ asset('assets/images/akhlakwhite.png') }} alt="akhlak" class="h-15 w-48">
            </div>
        </div>
    </nav>

    <!-- Navbar Bottom -->
    <nav class="navbar-bottom">
        <div class="container mx-auto">
            <div class="flex justify-end space-x-8 py-2">
                <a class="" href="#">HOME</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">PRODUK & LAYANAN</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">PROFIL</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">INFORMASI</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">KEMITRAAN</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">TRACKING</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">LELANG</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">PELANGGAN</a>
                <div style="color: white;">
                    |
                </div>  
                <a class="" href="#">KONTAK</a>
                <div style="color: white;">
                    |
                </div>  
            </div>
        </div>
    </nav>
</body>
