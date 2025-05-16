<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>education</title>
    <link rel="stylesheet" href="css/jaykelly.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <!-- top bar section starts -->
    <div class="top">
        <div class="left">
            <div class="logo">
                <a href=""><img src="image/logo.png" alt=""></a>
            </div>
            <div class="course">
                <a href="">+ course</a>
            </div>
        </div>
        <div class="right">
            <ul>
                <li><a href=""><i class="fa fa-laptop"></i></a></li>
                <li><a href=""><i class="fa fa-tablet"></i></a></li>
                <li><a href=""><i class="fa fa-mobile"></i></a></li>
                <li class="shop"><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                <li><a href=""><i class="fa fa-close"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- top bar section ends -->
            <div class="background-text">
                <button>prev</button>
                <div class="text"><h1>Get your<span>education</span>today!</h1></div>
                <button>next</button>
            </div>
            <div class="background-card">
                <div class="responsive">
                    <div class="card">
                        <div class="img"><img src="image/text.svg" alt=""></div>
                        <div class="text">
                            <h2>online course</h2>
                            <a href="">view more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img"><img src="image/any.svg" alt=""></div>
                        <div class="text">
                            <h2>online course</h2>
                            <a href="">view more</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img"><img src="image/third.svg" alt=""></div>
                        <div class="text">
                            <h2>online course</h2>
                            <a href="">view more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.nav').toggle('appear')
        })

    })

    $(document).ready(function(){
        $('.cancel').click(function(){
            $('.nav').toggle('show')
        })

    })



//         function move() {

//   document.querySelector(".nav").style.display= "none";
// }


    
</script>
</body>
</html>