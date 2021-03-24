<?php
use Illuminate\Support\Facades\App;
?>
<header class="">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img id="logoId" src="/img/logo.svg" width="200"  class="d-inline-block align-top " alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/">{{__('navbar.home')}}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/about_company">{{__('navbar.about_company')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/service">{{__('navbar.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/cases">{{__('navbar.cases')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/industries">{{__('navbar.industries')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/blog">{{__('navbar.blog')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/{{App::getLocale()}}/contacts">{{__('navbar.contacts')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img height="30" src="/img/{{__('navbar.language')}}.png" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/{{__('navbar.language1')}}"><img height="30" src="/img/{{__('navbar.language1')}}.png" alt=""></a>
                            <a class="dropdown-item" href="/{{__('navbar.language2')}}"><img height="30" src="/img/{{__('navbar.language2')}}.png" alt=""></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navContacts">
            <div class="row">
                <div class="col">
                    <a href="https://www.instagram.com/vl_consulting__/"><i class="fab fa-instagram-square"></i></a>
                </div>
                <div class="col">
                    <a href="https://www.facebook.com/vlconsulting.com.ua"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="col">
                    <a href="https://t.me/vl_consulting"><i class="fab fa-telegram"></i></a>
                </div>
                <div class="col">
                    <a href="mailto:vladkoshlich1@gmail.com"><i class="fas fa-envelope-square"></i></a>
                </div>
                <div class="col">
                    <a href="https://www.youtube.com/channel/UCAwS-i-ZKZfD6ViYBSbae6w"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col">
                    <a href="tel:+380506782481"><i class="fas fa-phone-square"></i></a>
                </div>
            </div>
        </div>

    </div>
</header>

