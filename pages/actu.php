<?php
    require '../cut/head.php';
    require '../cut/nav.php';
    echo '<script>pageName("actu");</script>';
?>
    </header>
    <main>
        <hr>
            <h1>Actualités</h1>
        <hr id="mainHR">
        <div id="searchbardiv">
            <input type="search" id="searchbar" placeholder="Rechercher">
        </div>
        <div id="searchDiv">
            <?php
                require '../php/actuCode.php';
            ?>
        </div>
        
    </main>
<?php
    require '../cut/footer.php';
?>