<?php
    require '../cut/head.php';
    require '../cut/nav.php';
    echo '<script>pageName("agenda");</script>';
?>
    </header>
    <main>
        <div id="calendar"></div>
        <?php
            require '../php/agendaCode.php';
        ?>
        
    </main>
<?php
    require '../cut/footer.php';
?>