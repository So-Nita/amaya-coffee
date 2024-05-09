<div class="container_1 container-fluid px-0">
    <div class="adverties text-center text-white px-lg-5 py-2" id="adv-1" style="background-color: #242434;">
        <p class="text-center text_1 py-lg-2 m-0" style="padding-left: 30px;">Free Shipping Order Of $ 35</p>
    </div>
    <header class="header bg-light" id="head">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-none d-md-inline-flex align-items-center navbar-brand">
                <img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/01/Amaya-logo.png" height="45px" width="110px">
            </div>
            <div class="d-lg-none d-md-flex align-items-center navbar-brand">
                <i class="fas fa-search" style="font-size: 20px;"></i>
            </div>
            <div class="collapse navbar-collapse py-1" id="navbarText">
                <div class="row w-100 px-0">
                    <div class="col-5 ">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active px-3"><a class="nav-link" href=" {{ route('/') }} ">HOME</a></li>
                            <li class="nav-item dropdown px-lg-5">
                                <a class="nav-link" href="#">PAGES</a>
                                <ul class="dropdown-menu pr-5 " >
                                    <li class="py-lg-2 "><a href="{{ route('regularPost') }}" >REGULAR POST WITH SIDEBAR</a></li>
                                    <li class="py-lg-2"><a href="{{ route('regularPost') }}" >SIDEBAR BELOW TITLE</a></li>
                                    <li class="py-lg-2"><a href="{{ route('siderBelow') }}" >SIDEBAR BELOW FEATURED IMAGE</a></li>
                                    <li class="py-lg-2"><a href="{{ route('regularPost') }}" >WIDE IMAGE WITH OVERLAY TEXT</a></li>
                                </ul>
                            </li>
                            <li class="nav-item "><a class="nav-link" href="#">PRRICING</a></li>
                            <li class="nav-item dropdown px-lg-5">
                                <a class="nav-link" href="#" id="dropdownMenuButton">ARTICLES</a>
                                <ul class="dropdown-menu pr-5 ">
                                    <li class="py-lg-2"><a href="{{ route('regularPost') }}" >REGULAR POST WITH SIDEBAR</a></li>
                                    <li class="py-lg-2"><a href="{{ route('regularPost') }}" >SIDEBAR BELOW TITLE</a></li>
                                    <li class="py-lg-2"><a href="{{ route('siderBelow') }}" >SIDEBAR BELOW FEATURED IMAGE</a></li>
                                    <li class="py-lg-2"><a href="{{ route('regularPost') }}" >WIDE IMAGE WITH OVERLAY TEXT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3 d-flex justify-content-center">
                        <ul class="navbar-nav d-lg-flex d-md-none d-none pr-3">
                            <img src="https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2021/01/Amaya-logo.png" height="50px" width="100px" alt="" >
                        </ul>
                    </div>
                    <div class="col-4 ">
                        <ul class="navbar-nav " style="margin-left: 100px">
                            <li class="nav-item"><a class="nav-link" href=" {{ route('wholesale')}} ">WHOLESALE</a></li>
                            <li class="nav-item px-lg-5">
                                <a class="nav-link" href="{{ route('shop') }}">SHOP</a>
                                <ul class="dropdown-menu" id="drop-down-cart">
                                    <li><a href="{{ route('cartView') }}">Cart</a></li>
                                </ul>
                            </li>
                            <li class="nav-item "><a class="nav-link" href="#">Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
<style>
    .container_1 header{
        /* box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px; */
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .navbar-nav .nav-item{
        font-family: var(--Raleway-font);
        font-size: 13.5px;
        font-weight: 600;
        letter-spacing: 1.5px;
    }
    /* CSS for hover effect on nav-link */
    .navbar-nav .nav-item:hover .nav-link {
        color: #db9457; 
    }
    .dropdown-menu {
        max-width: 300px;
        background-color: black;
        display: none;
        padding-right: 10px;
        margin-top: -8px;
    }
    .dropdown-menu li {
        margin-left: 15px;
    }
    .dropdown-menu li a{
        color: white;
        letter-spacing: 1px;
        text-decoration: none;
        font-family: var(--Raleway-font);
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }
    .navbar-nav .nav-item:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu li a:hover{
        color: #db9457;
    }

</style>
{{-- <script src="{{ asset('js/header.js')}}"></script> --}}
<script>
    // For fixed top header
    const header = document.getElementById('head');
    const adverties = document.getElementById('adv-1'); 
    window.onscroll = () =>{
        if(window.pageYOffset > (adverties.offsetHeight))
        {
            header.style.position="fixed"; 
            header.style.top = "0"
            header.style.zIndex="1";
            header.style.width="100%"
        }else{
            header.style.position=""; 
            header.style.top = ""
            header.style.zIndex=""
            header.style.width=""
        }
    }

    // jQuery code to toggle dropdown-menu visibility
    $(document).ready(function(){
        $('.navbar-nav .nav-item').hover(function(){
            $(this).find('.dropdown-menu').toggleClass('show');
        });
    });
</script>
