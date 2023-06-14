<?php
    require '../cut/head.php';
    require '../cut/nav.php';
    echo '<script>pageName("agenda");</script>';
?>
    </header>
    <main>
        <hr>
            <h1>Agenda</h1>
        <hr id="mainHR">
        <div id="calendar"></div>
        <?php
            require '../php/agendaCode.php';
        ?>
        
    </main>
<?php
    require '../cut/footer.php';
?>