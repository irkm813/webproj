<div class="inner-news-column container" id="please-scroll">

    <div class="video-box">
        <div class="row flex-nowrap">
            <div class="col-7 col-md-3 embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/-wPg1tNEWmo?si=VN6IBrbMl7T7WQJu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-7 col-md-3 embed-responsive embed-responsive-16by9">
                <iframe  src="https://www.youtube.com/embed/yWBzsBaU-Os?si=gr7nuURwakxwEYKO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-7 col-md-3  embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/vMxYL4Cj85Y?si=AwY39DHE4ItDMMIq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-7 col-md-3  embed-responsive embed-responsive-16by9">
                <iframe  src="https://www.youtube.com/embed/HnMGdz_vYDQ?si=76C3GB_vUvFQf1Nq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php
        
        $jsonFilePath = 'news.json';
        // Read the file and decode the JSON to an associative array
        $newsItems = json_decode(file_get_contents($jsonFilePath), true);

        if ($newsItems) {
            foreach ($newsItems as $newsItem) {

                echo '<div class="news-article">';

                    echo '<div class="row">';

                        echo '<div class="row col-md-3 justify-content-center">';
                            echo '<img class="img-fluid" src="' . htmlspecialchars($newsItem['picture']) . '" alt="News image">';
                        echo '</div>';

                        echo '<div class="row col-md-9 justify-content-center">';

                            echo '<div class="row">';
                                echo '<div class="col-6 left"><p>' . htmlspecialchars($newsItem['date']) . '</p></div>';
                                echo '<div class="col-6 right"><p>Írta: ' . htmlspecialchars($newsItem['author']) . '</p></div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="col-4 left">';
                                    echo '<h2>' . htmlspecialchars($newsItem['title']) . '</h2>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row left article-text">';
                                echo '<p>' . htmlspecialchars($newsItem['content']) . '</p>';
                            echo '</div>';

                            echo '<div class="row">';

                                echo '<div class="col-6 left"';
                                    echo'<p>(Még 532 karakter)</p>';
                                echo '</div>';
                                
                                echo '<div class="col-6 right"';
                                    echo'<p>Tovább</p>';
                                echo '</div>';

                            echo '</div>';

                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        }
        else {
            echo '<p>Failed to load news items.</p>';
        }
    ?>

</div>