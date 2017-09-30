<?php
/**
 * Template Name: Current Edition Page (news & info)
 *
 * Template for home page
 *
 * Displays HSBC Home Page
 *
 * @link http://linkedin.com/in/kowaalczyk
 *
 * @package HSBC_Theme
 * @subpackage Main_Theme
 * @since 0.1
 * @version 0.1
 */

get_header(); ?>

    <!-- NAVIGATION -->
    <!-- HEADER NAV -->
    <ul id="edition-dropdown" class="dropdown-content black-text">
        <li><a href="/edition-1" class="grey-text text-darken-4">Edycja 1</a></li>
        <li><a href="/edition-2" class="grey-text text-darken-4">Edycja 2</a></li>
        <li><a href="/edition-3" class="grey-text text-darken-4">Edycja 3</a></li>
    </ul>

    <div class="hide-on-med-and-down navbar-fixed" id="hsbc-big-navbar">
        <nav class="nav-extended white hsbc-nav-container">
            <div class="row">
                <div class="col m2 l1 center-align hsbc-logo-container">
                    <img width="88" height="88"
                         src="../assets/img/hsbc-logo.png"
                         alt="">
                    <!--TODO: Logo in SVG-->
                </div>
                <div class="col m10 l11">
                    <div class="nav-wrapper">
                        <ul>
                            <li class="active hsbc-nav-item">
                                <a href="/" class="grey-text text-darken-4">Bieżąca edycja</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="#!" class="grey-text text-darken-4 dropdown-button" data-activates="edition-dropdown">Poprzednie edycje</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="/cases" class="grey-text text-darken-4">Zadania i materiały</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="/winners" class="grey-text text-darken-4">Zwycięzcy</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="/partners" class="grey-text text-darken-4">Partnerzy</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="/org" class="grey-text text-darken-4">Organizatorzy</a>
                            </li>
                            <li class="hsbc-nav-item">
                                <a href="/contact" class="grey-text text-darken-4">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- SIDE NAV -->
    <ul id="edition-dropdown-sidenav" class="dropdown-content black-text">
        <li><a href="/edition-1" class="grey-text text-darken-4">Edycja 1</a></li>
        <li><a href="/edition-2" class="grey-text text-darken-4">Edycja 2</a></li>
        <li><a href="/edition-3" class="grey-text text-darken-4">Edycja 3</a></li>
    </ul>

    <ul class="side-nav" id="hsbc-mobile-nav">
        <li><a href="#!">Bieżąca edycja</a></li>
        <li><a href="#!"
               class="grey-text text-darken-4 dropdown-button"
               data-activates="edition-dropdown-sidenav">Poprzednie edycje</a>
        </li>
        <li><a href="#!">Zadania i materiały</a></li>
        <li><a href="#!">Zwycięzcy</a></li>
        <li><a href="#!">Partnerzy</a></li>
        <li><a href="#!">Organizatorzy</a></li>
        <li><a href="#!">Kontakt</a></li>
    </ul>

    <div class="navbar-fixed hide-on-large-only" id="hsbc-small-navbar">
        <nav class="">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo hide-on-small-only">High School Business Challenge</a>
                <a href="#!" data-activates="hsbc-mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>

    <!-- CONTENT -->
    <div class="container hsbc-container">
        <!-- JUMBO WITH LINKS -->
        <div class="hide-on-small-only hsbc-jumbo-container">
            <div class="parallax-container hsbc-jumbo">
                <div class="parallax"><img src="../assets/img/warsaw.jpg" alt=""></div>
            </div>
            <div class="hsbc-jumbo-content">
                <!-- jumbo heading -->
                <div class="row">
                    <div class="col l12 hide-on-med-and-down">
                        <h1 class="hsbc-jumbo-text">
                            High School Business Challenge
                        </h1>
                    </div>
                    <div class="col l12 hsbc-jumbo-text-placeholder">
                        <!-- whitespace -->
                    </div>
                </div>

                <!-- jumbo buttons -->
                <div class="row">
                    <div class="col m3 l3">
                        <a class="hsbc-scroll card-panel hoverable center-align yellow black-text"
                           href="#aktualnosci">
                            AKTUALNOŚCI
                        </a>
                    </div>
                    <div class="col m3 l3">
                        <a class="hsbc-scroll card-panel hoverable center-align red black-text"
                           href="#o-konkursie">
                            O KONKURSIE
                        </a>
                    </div>
                    <div class="col m3 l3">
                        <a class="hsbc-scroll card-panel hoverable center-align blue black-text"
                           href="#harmonogram">
                            HARMONOGRAM
                        </a>
                    </div>
                    <div class="col m3 l3">
                        <a class="hsbc-scroll card-panel hoverable center-align green black-text"
                           href="#faq">
                            FAQ I REGULAMIN
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hsbc-mobile-jumbo-container">
            <div class="show-small hsbc-mobile-jumbo">
                <!--TODO Mobile Jumbo-->
            </div>
            <div class="show-small hsbc-mobile-jumbo-links">
                <!--TODO Mobile Jumbo-->
            </div>
        </div>

        <div class="card" id="aktualnosci">
            <div class="card-content yellow darken-2">
                <h3 class="card-title white-text hsbc-card-title">
                    Aktualności
                </h3>
            </div>
            <div class="card-content">
                <!-- TODO NEWS POSTS -->
            </div>
        </div>

        <div class="card" id="o-konkursie">
            <div class="card-content red darken-2">
                <h3 class="card-title white-text hsbc-card-title">
                    O konkursie
                </h3>
            </div>
            <div class="card-content">
                <!-- TODO ABOUT POSTS -->
            </div>
        </div>

        <div class="card" id="harmonogram">
            <div class="card-content blue darken-2">
                <h3 class="card-title white-text hsbc-card-title">
                    Harmonogram
                </h3>
            </div>
            <div class="card-content">
                <!-- TODO CALENDAR CONTENT -->
            </div>
        </div>

        <div class="card" id="faq">
            <div class="card-content green darken-2">
                <h3 class="card-title white-text hsbc-card-title">
                    FAQ
                </h3>
            </div>
            <div class="card-content">
                <!-- TODO FAQ POSTS -->
            </div>
        </div>
    </div>

<?php get_footer();