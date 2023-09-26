<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
    <head>
        <title> Toy Quest </title>
        <link rel= "stylesheet" href="proto3.css">
        <link rel="icon" href="teddyicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
        <div class="backgroundimg">
            <section id="header">
                <a href="#"><img src="finalogo.jpg" class="logo"></a>
                <div class="navigation">
                    <ul id="navbar">
                        <li><a class ="active" href="#Home">Home</a></li>
                        <li><a href="#Trending">Trending</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="rating.html">Ratings</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="carts.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    </ul>
                </div>
            </section>
                <div class="content">
                    <h1> Toys for Every Adventure To Spark Young Minds</h1>
                    <p>Welcome to our magical toy wonderland! Discover a treasure trove of fun, educational,</p><p>and imaginative toys for every child's delight</p>
                    <div>
                        <button type="button" onclick="window.location.href='#product1'" > <span></span>EXPLORE</button>
                      
                    </div>
                </div>
                
                
            
        </div>
        <script>
            // Add an event listener to the button
            document.getElementById('openButton').addEventListener('click', function() {
                // Redirect to other.html when the button is clicked
                window.location.href = 'login.html';
            });
        </script>
        <!--features-->
        <section id="features" class="section1">
            <div class="boxes">
                <img src="f1.png">
                <h6> Free Shipping</h6>
            </div>
            <div class="boxes">
                <img src="f2.png">
                <h6> Convient Shopping </h6>
            </div>
            <div class="boxes">
                <img src="f3.png">
                <h6> Save Money </h6>
            </div>
            <div class="boxes">
                <img src="f4.png">
                <h6> Promotions </h6>
            </div>
            <div class="boxes">
                <img src="f6.png">
                <h6> 24/7 support </h6>
            </div>
        </section>
        <!--explore-->
        <section id="product1" class="section1">
            <h1>EXPLORE<div class="underline"><span></span></div></h1>
            <br>
            <br>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='productdetails.html';">
                    <img src="ebat.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="eeespidey.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="eironman.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="ethor.webp" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="epeppa.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="esma.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="eteedy.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="enerf.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="ebarbie.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="eben.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="etom.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
                <div class="pro">
                    <img src="eplush.jpg" alt="">
                    <div class="des">
                        <h5> CJKL </h5>
                        <h3>The Batman 2 Comic Accurate Figurine</h3>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2> <b>$45.50</b></h2>
                    </div>
                    <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                </div>
            </div>
        </section>
     <!--poster-->
        <section id="poster" class="section2">
            <h4> SPECIAL OFFER FOR SPECIAL PEOPLE</h4>
            <h2> ORDER FOR 5 DAYS STRAIGHT TO UNLOCK A <div class="fan">FANTASTIC SURPRISE</div> !!!</h2>
        </section>
        <br>

        <section id="product1" class="section1">
            <section id="Trending">
                <h1> TRENDING <div class="underline"><span></span></h1>
                <br>
                <div class="pro-container">
                    <div class="pro">
                        <img src="ebat.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="eeespidey.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="eironman.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="ethor.webp" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="epeppa.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="esma.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="eteedy.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="enerf.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="ebarbie.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="eben.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="etom.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                    <div class="pro">
                        <img src="eplush.jpg" alt="">
                        <div class="des">
                            <h5> CJKL </h5>
                            <h3>The Batman 2 Comic Accurate Figurine</h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h2> <b>$45.50</b></h2>
                        </div>
                        <a href ="#"><i class="fa-solid fa-cart-shopping fa-beat cart"></i></a>
                    </div>
                </section>
            </div>
        </section>

        <section id="banners" class="section1 setion2">
            <div class ="bb">
                <h2>SUBSCRIPTION PERKS</h2>
                <h3>10% discount on every purchase</h3>
                <h3> + free shipping</h3>
            </div>
            <div class ="bb bb2">
                <h2>UNWRAP JOY</h2>
                <h3>Explore Seasonal Offers </h3>
                <h3>for a Chance to Win</h3>
                <h3>Exclusive Merchandise!</h3>
            </div>
            <div class ="bb bb3">
                <h2>SECURE YOUR SPOT</h2>
                <h3>Preorder limited items </h3>
                <h3>before anyone else!</h3>
            </div>
        </section>

        <section id= "mail" class="section1 section2" >
            <div class="mailsfrq">
                <h4> Input Your E-mail </h4>
                <p> To recieve updates on your interests or for general queries</p>
            </div>
            <form method="post" action="https://script.google.com/macros/s/AKfycbxu44l3LbxLCbeZ3ev0tFDr2TojS3kC48qSL8TkQNHG3EHSJjsbpNqtPB5K8cBVwvqK/exec">
                <div class="form">
                    <input type ="text" placeholder="your email address" name="Mail">
                    <input type="text" placeholder=" Enter your favourites" name="Favourites">
                    <button class="emsub"> Submit</button>
                </div>
            </form>
        </section>
        <footer>
            <div class="ROW">
                <div class="COL">
                    <img src="finalogo.jpg" class="LOGO">
                    <p>At Toy Quest, we're dedicated to bringing smiles to your family with an incredible selection of toys and games. Our user-friendly online store ensures a seamless shopping journey, while our commitment to quality and creativity guarantees endless playtime adventures. Join us at Toy Quest and make cherished memories through play.</p>
                </div>
                <div class="COL">
                    <h3> Enterprise <div class="underline"><span></span></div></h3>
                    <p>Marathalli Outer Ring Road</p>
                    <p> Bellandur Post, Bangalore</p>
                    <p>Karnataka, PIN 560 103, India</p>
                    <p class="email-id"> AdrianMatthew@gmail.com</p>
                    <p class="email-id"> ChrisJordan@gmail.com</p>
                    <h4>+91 - 9380909428</h4>
                </div>

                <div class="COL">
                    <h3> Links <div class="underline"><span></span></div></h3>
                    <ul class="foot">
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#Trending">Trending</a></li>
                        <li><a href="#Review">Review</a></li>
                        <li><a href="#Contact">Contact</a></li>
                        <li><a href="#Help">Help</a></li>
                    </ul>
                </div>
                <div class="COL">
                    <h3> SOCIAL MEDIA <div class="underline"><span></span></div></h3>
                    <br>
                    <br>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest" ></i>
                </div>
            </div>
            <hr>
            <p class="CopyRights"> TOY QUEST © 2023 - All Rights Reserved</p>
        </footer>
    </body>
</html>
     