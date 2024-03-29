<?php

require_once 'config.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid px-3">
        <a class="navbar-brand" href="index.php"><?=WEBSITE_TITLE?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                if (!$loggedin) {
                    echo '<li class="nav-item">
                            <a class="nav-link active" href="login.php">Login</a>
                        </li>';
                }
                if ($loggedin) {
                    echo '<li class="nav-item">
                            <a class="nav-link active" href="logout.php">Logout</a>
                        </li>';
                }
                ?>
            </ul>
            <form action="search_results.php" class="d-flex" role="search" target="">
                <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>