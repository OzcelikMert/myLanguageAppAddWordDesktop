<?php
$k_adi = $_SESSION[\config\session\Keys::K_ADI];
?>

<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="header-title flex-fill">
            <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
            <h5><?php echo page_title ?></h5>
        </div>
        <div class="flex-fill" id="headerNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img style="width:59px;height:59px;" src="assets/images/profile.gif"></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i><?= $k_adi ?></a>
                        <a id="logout" class="dropdown-item" href="#"><i data-feather="log-out"></i>Çıkış</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>