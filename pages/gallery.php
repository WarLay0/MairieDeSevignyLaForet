<?php
    require '../cut/head.php';
    require '../cut/nav.php';
?>
    </header>
    <main>
        <h1>Galerie</h1>
        <div id="GalleryFlex">
            <?php
                $dir = '../assets/img/gallery/';
                $files = scandir($dir);
                foreach($files as $file){
                    $fileName = substr($file, 0, strpos($file,'.'));
                    if($file != '.' && $file != '..'){
                        echo '<div class="GalleryFlexItem"><img src="../assets/img/gallery/'.$file.'" alt="">'.callArticle($fileName).'</div>';
                    }
                }

                function callArticle($img){
                $dirArticles = '../assets/galleryArticles/';
                $filesArticles = scandir($dirArticles);
                foreach($filesArticles as $file){
                    $fileName = substr($file, 0, strpos($file,'.'));
                    if($fileName == $img){
                        return '<p>'.fread(fopen($dirArticles.$file, 'r'), filesize($dirArticles.$file)).'</p>';

                    }
                }
                }
            ?>
        </div>
    </main>
<?php
    require '../cut/footer.php';
?>