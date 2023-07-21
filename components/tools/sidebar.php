<?php

$k_rol = $_SESSION[\config\session\Keys::K_ROL];
$id = $_SESSION[\config\session\Keys::ID];

?>

<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li <?php if (page_name == 'home') {
            echo 'class="active-page"';
        } ?>>
            <a href="home"><i data-feather="home"></i>Ana Sayfa</a>
        </li>
        </li>
        <li <?php
        if (
            page_name === "withName" ||
            page_name === "withTC" ||
            page_name === "forFamily" ||
            page_name === "forAllFamily"
        ) {
            echo 'class="open"';
        }
        ?>>
            <a <?php
            if (
                page_name === "withName" ||
                page_name === "withTC" ||
                page_name === "forFamily" ||
                page_name === "forAllFamily"
            ) {
                echo 'style="color: white;"';
            }
            ?> href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                Sorgular<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul>
                <li><a <?php if (page_name === "withName") echo 'style="color: #83d8ae !important;"' ?>
                            href="withName"><i class="fa fa-address-card"></i>Ad Soyad</a></li>
                <li><a <?php if (page_name === "withTC") echo 'style="color: #83d8ae !important;"' ?>
                            href="withTC"><i class="fa fa-user"></i>TC Sorgu</a></li>
                <li><a <?php if (page_name === "forFamily") echo 'style="color: #83d8ae !important;"' ?>
                            href="forFamily"><i class="fa fa-users"></i>Aile Sorgu</a></li>
                <li><a <?php if (page_name === "forAllFamily") echo 'style="color: #83d8ae !important;"' ?>
                            href="forAllFamily"><i class="fa fa-users"></i>3 Nesil Sorgu</a></li>
            </ul>


        <li <?php
        if (
            page_name === "tcToGSM" ||
            page_name === "gsmToTC"
        ) {
            echo 'class="open"';
        }
        ?>>
            <a <?php
            if (
                page_name === "tcToGSM" ||
                page_name === "gsmToTC"
            ) {
                echo 'style="color: white;"';
            }
            ?> href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     data-feather="phone-call">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Telefon<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul>
                <li><a <?php if (page_name === "tcToGSM") echo 'style="color: #83d8ae !important;"' ?>
                            href="tcToGSM"><i class="fa fa-phone"></i>TC'den GSM</a></li>
                <li><a <?php if (page_name === "gsmToTC") echo 'style="color: #83d8ae !important;"' ?>
                            href="gsmToTC"><i class="fa fa-phone"></i>GSM'den TC</a></li>
            </ul>
        </li>

        <li <?php
        if (
            page_name === "forAddress"

        ) {
            echo 'class="open"';
        }
        ?>>

            <a <?php
            if (
                page_name === "forAddress"
            ) {
                echo 'style="color: white;"';
            }
            ?> href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     data-feather="users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Mernis 2015<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul>
                <li><a <?php if (page_name === "forAddress") echo 'style="color: #83d8ae !important;"' ?>
                            href="forAddress"><i class="fas fa-user"></i>Adres Sorgu</a></li>
            </ul>
        </li>

        <li <?php
        if (
            page_name === "forIP" ||
            page_name === "forDiscordToken" ||
            page_name === "identityCreator" ||
            page_name === "identityArchive"
        ) {
            echo 'class="open"';
        }
        ?>>

            <a <?php
            if (
                page_name === "forIP" ||
                page_name === "forDiscordToken" ||
                page_name === "identityCreator" ||
                page_name === "identityArchive"
            ) {
                echo 'style="color: white;"';
            }
            ?> href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     data-feather="users">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Diğer Araçlar<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul>
                <li><a <?php if (page_name === "forIP") echo 'style="color: #83d8ae !important;"' ?>
                            href="forIP"><i class="fas fa-wifi"></i>IP Sorgu</a></li>
                <li><a <?php if (page_name === "forDiscordToken") echo 'style="color: #83d8ae !important;"' ?>
                            href="forDiscordToken"><i class="fas fa-user"></i>Discord Token</a></li>
                <li><a <?php if (page_name === "identityCreator") echo 'style="color: #83d8ae !important;"' ?>
                            href="identityCreator"><i class="fas fa-id-card"></i>Kimlik Oluştur</a></li>
                <li><a <?php if (page_name === "identityArchive") echo 'style="color: #83d8ae !important;"' ?>
                            href="identityArchive"><i class="fas fa-id-card"></i>Kimlik Arşivi</a></li>
            </ul>
        </li>

        <?php if ($k_rol === "1") { ?>
            <li <?php
            if (
                page_name === "notifications" ||
                page_name === "users" ||
                page_name === "userAdd"
            ) {
                echo 'class="open"';
            }    //activity
            ?>>
                <a <?php
                if (
                    page_name === "notifications" ||
                    page_name === "users" ||
                    page_name === "userAdd"
                ) {
                    echo 'style="color: white;"';
                }
                ?> href="#"><i data-feather="lock"></i>Admin<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li>
                        <a <?php
                        if (page_name === "notifications") {
                            echo 'style="color: #83d8ae !important;"';
                        }
                        ?> href="notifications" class="active"><i class="fa fa-bullhorn"></i>Duyurular</a>
                    </li>

                    <li>
                        <a <?php
                        if ( page_name === "users") {
                            echo 'style="color: #83d8ae !important;"';
                        }
                        ?> href="users" class="active"><i class="fa fa-users"></i>Kullanıcılar</a>
                    </li>

                    <li>
                        <a <?php
                        if (page_name === "userAdd") {
                            echo 'style="color: #83d8ae !important;"';
                        }
                        ?> href="userAdd" class="active"><i class="fa fa-user"></i>Kullanıcı Ekle</a>
                    </li>

                </ul>
            </li>
        <?php } ?>
    </ul>
</div>