<!--========== FOOTER ==========-->
<footer class="footer section">
    <div class="footer__container bd-container bd-grid">
        <div class="footer__content">
            <h3 class="footer__title">
                <a href="#" class="footer__logo">Name site web</a>
            </h3>
            <p class="footer__description">lorem lorem lorem lorem <br> lorem</p>
            <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
            <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Our Services</h3>
            <ul>
                <li><a href="#" class="footer__link">Blog</a></li>
                <li><a href="#" class="footer__link">About us</a></li>
                <li><a href="#" class="footer__link">Our mision</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Our Company</h3>
            <form action="" method="POST">
                @csrf
                    <input type="text" name="subject" placeholder="Your Email Subject ">
                    <textarea name="content" id="" cols="30" rows="3" placeholder="Your Message ..." ></textarea><br>
                    <input type="submit" class="button" value="Send">
            </form>
        </div>
    </div>

    <p class="footer__copy">&#169;Tahiri & Zouizza site web. All right reserved</p>
</footer>
