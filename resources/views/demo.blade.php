@extends('layout.mainlayout')

@section('content')

{{-- Content --}}
<div class="album text-muted h-auto">

    <div class="container-fluid px-0 position-relative container_1" >
        <div class="position-relative">
            <video id="background-video" autoplay loop muted class="hero-bgvideo hero-background w-100" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/02/amaya-video-1-xs.mp4"></video>
        </div>
        <div class="m-t position-absolute top-0 bg-dark opacity-75 w-100 h-100 d-flex align-items-center">
            <div class="row mx-5">
                <div class="home-text" style="font-family: 'Raleway', sans-serif; font-size: 18.5px;color: #db9457">HOME DELIVERY</div>
                <div class="text-white mt-2">
                    <h2 style="font-family: 'Playfair Display', serif; font-size: 48px;">Quality coffee delivered to your door</h2></div>
                <div class="text-white mt-2 home-text-2" style="font-family: 'Raleway', sans-serif; font-size: 18px">
                    Coffee is our craft, our ritual, our passion and we want to share it with you.
                </div>
                <div class="col-12 mt-5 mx-3 d-flex align-items-center justify-content-center" id="btn-buynow">
                    <a href="{{ route('shop') }}" class="text-decoration-none">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content 2-->
    <div class="container_2 container py-lg-5 py-md-4 py-sm-5 mt-2" >
        <div class="text_content_1 text-center mt-sm-2" data-aos="fade-left">Custom Blocks</div>
        <div class="text_content_2 text-center mt-5 mb-lg-5" data-aos="fade-right">Find below a demonstration of the custom Blocks included in the theme.</div>
        {{-- <div class="text_content_3 text-center mt-5 pt-lg-5" data-aos="fade-up"><strong>AMAYA GALLERY BLOCK</strong></div> --}}
    </div>

    <!-- Content 3 -->
    <div class="container_3 container-fluid h-auto m-0 p-0" data-aos="slide-up">
        <div class="row row_1 pt-lg-2 pt-md-4 m-0" style="width: 100%; height: 100%;">
            <div class="img_block_1 col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="row w-100 " >
                    <div class="col-lg-12 p-0 h-50"><img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-hero-coffeeshop.jpg" alt=""></div>
                </div>
                <div class="row pt-lg-2" data-aos="fade-right">
                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 p-0">
                        <img class="img_2 w-100" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-black-iced-coffee.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <img class="img_3" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-palmtrees-1600x1600.jpg" alt="">
                    </div>
                </div>
            </div>            
            <div class="img_block_2 col-lg-6 col-md-6 col-sm-12" data-aos="fade-right"><img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-espresso-02.jpg" alt=""></div>
        </div>
    </div>

    <!-- Container 4 -->
    <div class="container container_4 pt-lg-5 mt-5 pt-md-5 ">
        <div class="row"><strong class="con4_p1 col-lg-12 text-center" data-aos="slide-up">AMAYA SUBTITLE BLOCK</strong></div>
        <div class="row"><p class="con4_p2 col-lg-12 text-center pt-lg-4 pb-lg-5 pt-md-2 pb-mg-4" data-aos="slide-down">COFFEE SHOULD NEVER BE A COMPROMISE</p></div>
        <div class="row"><strong class="con4_p3 col-lg-12 text-center mt-lg-5 pt-lg-5" data-aos="slide-up">AMAYA DIVIDER BLOCK</strong></div>
        <div class="row"><p class="con4_p4 col-lg-12 text-center pt-2" data-aos="slide-right">horizontal or vertical</p></div>

        <div class="py-lg-3" data-aos="slide-up"><hr class="line_hori" style="width: 50px; height: 2px; margin: 0 auto;"></div>
        <div class="line_vert m-auto mt-5" style="width: 2px; height: 50px;" data-aos="slide-up"></div>

        <div class="row" data-aos="slide-up"><strong class="con4_p5 col-lg-12 text-center pt-lg-2 ">AMAYA BLOG BLOCK</strong></div>
        <div class="row pb-lg-5" data-aos="slide-up"><p class="con4_p6 col-lg-12 text-center pt-2 ">display your latest posts</p></div>

    </div>

    <!-- Container 5 -->
    <div class="container_5 container-fluid px-lg-5 pt-md-2 pt-sm-5 mt-md-5 mt-sm-5" data-aos="slide-up">
        <div class="row h-100 px-lg-5">
            <!--  -->
            <div class="col-lg-4" data-aos="slide-right">
                <div class="row p-0">
                    <div class="col-lg-12">
                        <img class="position-relative" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/06/coffeebean-espresso.jpg" alt="">
                        <div class="img_desc m-auto text-center pt-1">Date : on MARCH 13, 2023</div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12  pt-lg-4 px-5 pb-md-5">
                        <div class="row">
                            <div class="col-lg-12 text-center"><a href="#" class="link_event">EVENTS&nbsp;&nbsp;LEARN</a></div>
                            <div class="col-lg-12 pt-3 text-center"><a href="#" class="link_event_des">Everything you need to know about Espresso Brewing</a></div>
                            <div class="col-lg-12 event_desc pt-3 pb-1">Medium turkish french press percolator, crema wings at carajillo mazagran. Cream, at, acerbic redeye iced americano coffee white. To go medium espresso latte …</div>
                            <div class="pt-4 d-flex justify-content-center">
                                <button class="btn_readmore">READ MORE</button>
                            </div>
                            <div class="col-lg-12 pt-3 pb-4 text-center"> 
                                <span class="text_share px-2">SHARE</span>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter px-2"></i>
                                <i class="fa-brands fa-pinterest"></i>
                                <i class="fas fa-envelope px-2"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="col-lg-4 " data-aos="slide-up">
                <div class="row p-0">
                    <div class="col-lg-12 ">
                        <img class="position-relative" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-latte-art-4-1200x801.jpg" alt="">
                        <div class="img_desc m-auto text-center pt-1">Date : on MARCH 13, 2023</div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 pt-lg-4 px-5 pb-md-5">
                        <div class="row">
                            <div class="col-lg-12 text-center"><a href="#" class="link_event">EVENTS&nbsp;&nbsp;LEARN</a></div>
                            <div class="col-lg-12 pt-3 text-center"><a href="#" class="link_event_des">Professional Latte Art Class - Advanced Training</a></div>
                            <div class="col-lg-12 event_desc pt-3 pb-1">Cup white, macchiato percolator froth turkish, crema wings at carajillo mazagran. Cream, cappuccino, acerbic redeye iced americano coffee white. To go medium espresso …</div>
                            <div class="pt-4 d-flex justify-content-center">
                                <button class="btn_readmore">READ MORE</button>
                            </div>
                            <div class="col-lg-12 pt-3 text-center"> 
                                <span class="text_share px-2">SHARE</span>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter px-2"></i>
                                <i class="fa-brands fa-pinterest"></i>
                                <i class="fas fa-envelope px-2"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
            <div class="col-lg-4 " data-aos="slide-up">
                <div class="row p-0">
                    <div class="col-lg-12 position-relative">
                        <img class="position-relative"  src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/coffeebean-beans-2.jpg" alt="">
                        <div class="img_desc m-auto text-center pt-1">Date : on MARCH 13, 2023</div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 pt-lg-4 px-5 pb-md-5">
                        <div class="row">
                            <div class="col-lg-12 text-center"><a href="#" class="link_event">LEARN</a></div>
                            <div class="col-lg-12 pt-3 text-center"><a href="#" class="link_event_des">How to Grind coffee beans for the Perfect Cup</a></div>
                            <div class="col-lg-12 event_desc pt-3 pb-1">Black doppio and roast cream mocha. Et, dark a cup, cortado, macchiato. Cream, frappuccino doppio, acerbic redeye iced americano coffee white. Cinnamon percolator …</div>
                            <div class="pt-4 d-flex justify-content-center">
                                <button class="btn_readmore">READ MORE</button>
                            </div>
                            <div class="col-lg-12 pt-3 text-center"> 
                                <span class="text_share px-2">SHARE</span>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-twitter px-2"></i>
                                <i class="fa-brands fa-pinterest"></i>
                                <i class="fas fa-envelope px-2"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
<!--  -->
        <div class="row mt-lg-1 mt-md-1 mt-5" data-aos="slide-up">
            <div class="col-lg-12 text-center pt-md-1 pt-sm-1"><strong>AMAYA MENU BLOCK</strong></div>
            <div class="col-lg-12 text-center pt-md-1 pt-sm-1">
                <p class="text_menu">find more examples on the <a href="" >Menu Examples</a> page</p>
            </div>
        </div>
    <!-- Container 6 -->
    <div class="container_6 container py-lg-5 py-md-1 py-sm-1 mt-lg-5 mt-md-1 my-sm-5 px-0 bg-light" data-aos="slide-up">
        <div class="row h-50 py-lg-4 py-md-0 px-lg-5" >
            <div class="col-lg-4 col-sm-12 py-lg-4 px-lg-4 mt-4" data-aos="slide-up">
                <h2 class="py-lg-2 pt-sm-2" style="font-size: 25px;">ICED COFFEE</h2>
                <hr style="margin: 0 auto; border-top: 4px solid black;"> 
                <div class="row pt-3">
                    <div class="col-lg-12 py-1"> <h6 class="submenu-cafe" >Iced Espresso</h6> </div>
                    <div class="col-lg-12 py-1"> <h6 class="submenu-cafe" >Cold Brew Latte</h6> </div>
                    <div class="col-lg-12 py-1"> <h6 class="submenu-cafe" >Nitro Cold Brew</h6> </div>
                    <div class="col-lg-12 py-1"> <h6 class="submenu-cafe" >Doubleshot Iced Coffee</h6> </div>
                </div> 
            </div>
            <!--  -->
            <div class="col-lg-8 col-sm-12 px-lg-5 mt-4 py-4" style="background-color: #141414;" data-aos="slide-up">
                <h2 class="pt-lg-1 py-lg-2 text-white pt-4 py-2" style="font-size: 25px;">BREWED COFFEE</h2>
                <hr style="margin: 0 auto; border-top: 4px solid white;"> 
                <div class="row pt-3 ">
                    <div class="col-lg-6  py-1"> 
                        <h6 class="submenu-cafe text-white" >French Press Coffee</h6>
                    </div>
                    <div class="col-lg-6  py-1 "> <h6 class="submenu-cafe text-white" >Aeropress</h6> </div>
                    <div class="col-lg-6  py-1 "> <h6 class="submenu-cafe text-white" >Coffee Pour Over</h6> </div>
                    <div class="col-lg-6  py-1 "> <h6 class="submenu-cafe text-white" >Single Origin</h6> </div>
                    <div class="col-lg-6  py-1 "> <h6 class="submenu-cafe text-white" >Cafe Au Lait</h6></div>
                    <div class="col-lg-6  py-1 "> <h6 class="submenu-cafe text-white" >Drip of the Day</h6> </div>
                </div>
            </div>
        </div>
        <div class="row h-50 py-lg-3 px-lg-5 py-4 mt-lg-0 mt-md-1 mt-3" >
            <div class="col-lg-4 py-lg-5 px-lg-4 mt-3 mt-lg-1" data-aos="slide-up">
                <h2 class="py-lg-2 px-sm-4" style="font-size: 25px;">NOT COFFEE</h2>
                <hr style="margin: 0 auto; border-top: 4px solid black;"> 
                <div class="row pt-3" >
                    <div class="col-lg-12 text-white pt-1 justify-content-between" > 
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Spring Water <p style="font-size: 13.6px;">sp 250ml</p></h6> 
                            <span class="col-2">15</span>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 text-white pt-1 justify-content-between" > 
                        <div class="row submenu-cafe justify-content-between" style="color:#3a3a3b">
                            <h6 class="col-10">Ginger skinny lemonade <p style="font-size: 13.6px;">Water, lemon, agave nectar and fresh ginger</p></h6> 
                            <span class="col-2">2.5</span>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 text-white pt-1 justify-content-between" > 
                        <div class="row submenu-cafe justify-content-between" style="color:#3a3a3b">
                            <h6 class="col-10">Ginger skinny lemonade <p style="font-size: 13.6px;">Water, lemon, agave nectar and fresh ginger</p></h6> 
                            <span class="col-2 text-white">2.5</span>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 text-white pt-1 justify-content-between" > 
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Rishi Tea</h6> 
                            <span class="col-2">3</span>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-lg-12 text-white pt-1 justify-content-between" > 
                        <div class="row submenu-cafe justify-content-between px-3" style="color:#3a3a3b">
                            <h6>Hot Chocolate</h6> 
                            <span >2.5</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-lg-8 bg-light py-lg-3 px-lg-5  mt-5 mt-lg-1" data-aos="slide-up">
                <h2 class="py-lg-2 " style="font-size: 25px;">BREWED COFFEE</h2>
                <hr style="margin: 0 auto; border-top: 4px solid #000;"> 
                <div class="row pt-4">
                    <!-- 1 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Spring Water <div class="pt-2" style="font-size: 13.6px;line-height:20px">Pitaya, banana, pineapple, coconut, topped with hempseed granola, coconut flakes, banana and agave nectar</div></h6> 
                            <span class="col-2">15</span>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Scrambled Eggs & Organic Salmon<div class="pt-2" style="font-size: 13.6px; line-height:20px">served on sourdough bread, topped with rucola and creme fraiche</div></h6> 
                            <span class="col-2">8.5</span>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Cornbread French Toast <div class="pt-2" style="font-size: 13.6px;line-height:20px">with bacon, rucola and avocado</div></h6> 
                            <span class="col-2">8</span>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Fruit Salad with Yuzu Vanilla Syrup and Fresh Mint <div class="pt-2" style="font-size: 13.6px;line-height:20px">Melon, pineapple, strawberries, mango and banana</div></h6> 
                            <span class="col-2">15</span>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Baked Eggs & Chorizo<div class="pt-2" style="font-size: 13.6px; line-height:20px">with tomato and pepper ragout and greek yoghurt</div></h6> 
                            <span class="col-2">8.5</span>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="col-lg-6 pt-1">
                        <div class="row submenu-cafe justify-content-between " style="color:#3a3a3b">
                            <h6 class="col-10">Lavender Scented Pancakes<div class="pt-2" style="font-size: 13.6px;line-height:20px">Raspberries, vanilla butter</div></h6> 
                            <span class="col-2">7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container 7 -->
    {{-- <div class="container-fluid container-7 pt-5 w-100 h-100" style="height: 900px;">
        <p class="text-center"><strong>AMAYA HERO IMAGE OR VIDEO BLOCK</strong></p>
        <p class="text-center">Example 1: Background Image / Dark Overlay 50% Width / White + Theme Color</p>
        <div class="row " style="background-image: url(../../style/Asset/Product-Adv1.jpg);">
            <div class="col-12 col-lg-6 col-md-6 ">
                <img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/12/Cold-Brew.jpg" alt="">
            </div>
            <div class="col-12 col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                <div>
                    <div class="subtitle-above text-start">MORE THAN JUST COLD COFFEE</div>
                    <h2 class="mt-3 text-end">Nitro <em>Cold Brew</em> Coffee</h2>
                    <hr style="width: 100px;" class="mx-auto">
                    <div class="text-end">Refresh your mind with organic, sustainably-sourced cold brew coffee, delivered straight to your door.</div>
                </div>
            </div>
        </div>
    </div> --}}

    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

    <script>
        console.log('ready');
        AOS.init({
            duration: 2000,
        })
    </script>
    <style>
        body{
            overflow-x: hidden;
            width: 100%;
        }
        #btn-buynow{
            height: 45px;
            width: 180px;
            font-size: 12px;
            font-family: 'Raleway', sans-serif;
            color: #db9457;
            border: none;
            background-color: #ffffff;
        }
        #btn-buynow:hover{
            border: none;
            background-color: #db9457;
            cursor: pointer;
        }
        #btn-buynow a{
            font-size: 16px;
            color: #db9457;
        }
        #btn-buynow:hover a{
            color: #ffffff;
        }
        .container_1 .adverties{
            background-color: #141414;
        }
        .container_1 .text_1{
            font-family: 'Raleway', sans-serif;
            font-size: 13px;
        }
        .container_1 .header .navbar{
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            font-weight: 500;
        }

        .container_2 .text_content_1 {
            font-family: 'Playfair Display', serif;
            font-size: 44px;
            font-weight: 500;
        }
        .container_2 .text_content_2 {
            font-family: 'Raleway', sans-serif;
            font-size: 17px;
            font-weight: 500;
        }
        .container_2 .text_content_3{
            font-size: 17px;
            font-weight: 900;
        }

        .container_3 .row{
            width: 100%;
            padding: 0;
            margin: 0;
        }
        .container_3 img{
            width: 100%;
            object-fit: contain;

        }
        .container_3 .img_block_1{
            padding-right: 5px;
        }

        .container_3 .img_block_2{
            padding-left: 5px;
            padding-right: 0;
        }

        .container_3 .img_block_1 .img_3, .img_2{
            /* padding-left: 5px; */
            object-fit: cover;
            width: 100%;
        }


        .container_4 .con4_p1, .con4_p2{
            font-size: 17px;
        }
        .container_4 .con4_p2{
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            color: #db9457;
        }

        .container_4 .line_hori, .line_vert{
            background-color: #db9457;
        }

        .container_4 .con4_p5{
            margin-top: 120px;
        }
        .container_4 .con4_p4 .con4_p6{
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
        }

        /* Container 5 */
        .container_5 {
            height: auto;
            width: 100%;
        }
        .container_5 img{
            width: 100%;
            object-fit: cover;
        }
        .container_5 .img_desc{
            position: relative;
            top: -15px;
            width: 50%;
            height: 28px;
            font-size: 14px;
            font-family: 'Raleway', sans-serif;
            color: #ffffff;
            background-color: #141414;
        }
        .container_5 .row .link_event{
            font-family: 'Raleway', sans-serif;
            font-size: 13px;
            color: #db9457;
            text-decoration: none;
        }
        .container_5 .row .link_event_des{
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #141414;
            text-decoration: none;
        }
        .container_5 .row .link_event_des:hover{
            color: #db9457;
        }
        .container_5 .row .event_desc{
            font-family: 'Raleway', sans-serif;
            font-size: 17px;
            color: #141414;
        }
        .container_5 .row .btn_readmore{
            height: 40px;
            width: 162px;
            font-size: 12px;
            font-family: 'Raleway', sans-serif;
            color: #db9457;
            background-color: #242434;
            border: none;
        }
        .container_5 .row .btn_readmore:hover{
            border: none;
            color: #ffffff;
            background-color: #db9457;
        }
        .container_5 .row .text_share{
            color: #AAAAAA80;
            font-size: 11px;
            font-family: 'Raleway', sans-serif;
        }
        .container_5 .row i{
            font-size: 17px;
        }

        .container_6 .row .text_menu{
            font-family: 'Raleway', sans-serif;
        }
        .container_6 .row .text_menu a{
            font-family: 'Raleway', sans-serif;
            text-decoration: none;
            color: #db9457;
        }
        
        .container_6 .row h2{
            font-family: 'Raleway', sans-serif;
            font-size: 25px;
            font-weight: bolder;
        }
        .container_6 .menu_cafe hr{
        height: 5px;
        }
        .container_6 .row .submenu-cafe {
            font-family: 'Raleway', sans-serif;
            font-size: 15.3px;
            color: #3a3a3b;
        }   
        
        .container-7 .subtitle-above{
            font-family: 'Raleway', sans-serif;
            font-size: 13.6px;
            letter-spacing: 2px;
            line-height: 1.75em;
            text-transform: uppercase;
            color: #db9457!important;
        }
        .container-7 h2{
            font-size: 53px;
            line-height: 1.2em;
            font-family: 'Playfair Display', serif;
        }



        @media screen and (max-width: 1250px){
            .container_2 .text_content_4{
                margin-bottom: 40px;
                font-size: 14px;
            }
            .container_4 .con4_p4{
                margin-top: 70px;
            }
            .container_4 .con4_p5{
                margin-top: 80px;
            }
        }

        @media screen and (max-width: 868px){
            .container_1{
                background-color: yellow;
            }
            .container_1 .row .home-text, .home-text-2{
                font-size: 14px !important;
            }
            .container_1 .row h2{
                font-size: 30px !important;
            }
            .container_1 .row #btn-buynow{
                height: 30px;
                width: 120px;
                margin-bottom: 10px;
            }
            .container_1 .row #btn-buynow a{
                font-size: 12px;
            }
            .container_2 .text_content_1{
                margin-top: 40px;
            }
            .container_2 .text_content_4{
                margin-bottom: 40px;
                font-size: 13px;
            }
            .container_4, .container_5{
                height: auto!important;
            }
            
            .container_4 .con4_p4{
                margin-top: 50px;
            }
            .container_4 .con4_p5{
                margin-top: 40px;
            }
        }

            

        @media screen and (max-width: 580px){
            .container_4{
                height: auto!important;
            }
            .container_5 {
                height: auto!important;
                margin-top: 20px;
                margin-bottom: 30px;
            }
            .container_5 .row .text_share{
                margin-bottom: 20px;
            }
            
            .container_6 .row .menu-cafe h2{
                font-size: 25px;
            }
            .container_6 .row{
                margin-left: 0;
                margin-right: 0;
            }
            .container_6 .row .submenu-cafe {
                font-size: 15.3px;
            }
        }
    </style>
    <!-- <video autoplay="" muted="" loop="" playsinline="" class="hero-bgvideo hero-background" src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/02/amaya-coffee-video-xs.mp4" style=""></video> -->
</div>
{{-- End Content --}}

@endsection