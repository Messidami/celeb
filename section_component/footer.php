<div class="footer">
        <div class="subscribe">
            <div class="head">
                <h1>subscribe to newsletter</h1>
            </div>
            <div class="sub">
                <input type="email" name="" id="" placeholder="email address">
                <button type="submit">subscribe</button>
            </div>
        </div>
        <div class="element">
            <div class="card">
                <div class="heading">
                    <img src="image/logo.png.webp" alt="">
                    <h1>course</h1>
                </div>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus</p>
            </div>
            <div class="card">
                <div class="heading">
                    <h3>menu</h3>
                </div>
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="">about us</a></li>
                    <li><a href="">courses</a></li>
                    <li><a href="">news</a></li>
                    <li><a href="">contacts</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="heading">
                    <h3>useful links</h3>
                </div>
                <ul>
                    <li><a href="">testimoniala</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">community</a></li>
                    <li><a href="">campus pitures</a></li>
                    <li><a href="">tuitions</a></li>
                </ul>
            </div>
            <div class="card">
                    <h3>contacts</h3>
                
                <ul>
                    <li><i class="fa fa-location"></i>Blvd Libertad, 34 m05200 Arévalo</li>
                    <li><i class="fa fa-phone"></i>Blvd Libertad, 34 m05200 Arévalo</li>
                    <li><i class="fa fa-email"></i>Blvd Libertad, 34 m05200 Arévalo</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright ©2025 All rights reserved | This template is made with <i class="fa fa-heart"></i> by <a href="">Colorlib</a></p>
            <ul>
                <li><a href=""><i class="fab fa-pinterest" ></i></a></li>
                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>



    
    <script src="js/jquery.js"></script>
    <!-- <script>
         
        $(document).ready(function(){

            $('.toggle').click(function(){
                $('.nav').toggle('show')
                
            })
            
        })
        function move() {
            
            document.querySelector(".nav").style.display= "none";
        }

       
    </script> -->
    <script>
        const icon = document.querySelector(".background .navbar .toggle i");
        const menu = document.querySelector(".nav");

        icon.addEventListener('click', function(){
            if(icon.classList.contains("fa-bars")){
                menu.style.display = "block";
                icon.classList.replace("fa-bars", "fa-close")
            }else{
                menu.style.display = "none";
                icon.classList.replace("fa-close", "fa-bars");
            }
        })
    </script>

        
</body>
</html>