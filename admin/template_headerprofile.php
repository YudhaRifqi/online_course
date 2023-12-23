<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../index.php");
}
?>
<ul class="navbar-nav header-right">
    <li class="nav-item dropdown header-profile">
        <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
            <img src="../images/avatar/1.png" width="20" alt="" />
            <div class="header-info">
                <span><strong style="text-transform:uppercase"> <?= $_SESSION['username']; ?></strong></span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="./profile.php" class="dropdown-item ai-icon">
                <i class="flaticon-381-user-7 text-primary"></i>
                <span class="ml-2">Profile</span>
            </a>
            <a href="../logout.php" class="dropdown-item ai-icon">
                <i class="flaticon-381-exit-1 text-danger"></i>
                <span class="ml-2">Logout</span>
            </a>
        </div>
    </li>
</ul>