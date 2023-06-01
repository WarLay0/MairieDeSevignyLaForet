<?php
    require '../cut/head.php';
    require '../cut/nav.php';
    echo '<script>pageName("actu");</script>';
?>
    </header>
    <main>
        <input type="search" id="searchbar">
        <div id="searchDiv">
            <?php
                require '../php/actuCode.php';
            ?>
        </div>
        
    </main>
<?php
    require '../cut/footer.php';
?>