@extends('Layout.layout')


<footer class="footer">
    <div class="container mx-auto py-8 flex justify-between">
        <div class="footer-left">
            <img src="{{ asset('assets/images/kailogistikwhite.png') }}" alt="KAI Logistik" class="kai-logo">
            <p class="footer-description">
                PT KERETA API LOGISTIK (KALOG) adalah perusahaan dibawah induk PT. Kereta Api <br>Indonesia (Persero) dengan bidang layanan distribusi logistik berbasis kereta api (KA).
            </p>
            <div class="social-icons">
                <a href="#"><img src="{{ asset('assets/images/facebookwhite.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('assets/images/xwhite.png') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ asset('assets/images/instagramwhite.png') }}" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-group">
            <div class="footer-middle">
                <h3 class="footer-heading">WE OFFERS</h3>
                <ul>
                    <li><a href="#">KALOG Express</a></li>
                    <li><a href="#">KALOG Plus</a></li>
                    <li><a href="#">KALOG Pro</a></li>
                </ul>
            </div>
            <div class="footer-middle">
                <h3 class="footer-heading">MAIN LINKS</h3>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Lelang</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-middle">
                <h3 class="footer-heading">CONTACT INFO</h3>
                <ul>
                    <li><a href="">KALOG</a></li>
                    <li><a href="">021 - 3192.2299</a></li>
                    <li><a href="">021 - 5098.6300</a></li>
                    <li><a href="">www.kalogistics.co.id</a></li>
                    <li><a href="">cs@kalogistics.co.id</a></li>
                    <li><a href="">Mon - Sat 8.00 - 17.00</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
