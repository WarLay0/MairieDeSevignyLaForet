<?php
    require '../cut/head.php';
    require '../cut/nav.php';
    echo '<script>pageName("gallery");</script>';
?>
    </header>
    <main>
        <hr>
            <h1>Galerie</h1>
        <hr id="mainHR">
        <div id="GalleryFlex">
            <?php
                $dir = '../assets/img/gallery/';
                $files = scandir($dir);
                $noArticle = [];
                foreach($files as $file){
                    $fileName = substr($file, 0, strpos($file,'.'));                    
                    if($file != '.' && $file != '..'){
                        $article = callArticle($fileName);
                        if($article != null){
                            echo '<div class="GalleryFlexItem"><img src="../assets/img/gallery/'.$file.'" alt="">'.$article.'</div>';
                            // echo '<hr>';
                        }else {
                            array_push($noArticle, $file);
                        }
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
                echo '<div id="noArticle">';
                foreach($noArticle as $article){
                    echo '<img src="../assets/img/gallery/'.$article.'" alt="">';
                }
                echo '</div>';
            ?>
        </div>
    </main>
<?php
    require '../cut/footer.php';
?>