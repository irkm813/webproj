
    <div class="video-box">
        <div class="row flex-nowrap">
            <div class="col-7 col-md-3 embed-responsive-4by3">
                <iframe src="https://www.youtube.com/embed/-wPg1tNEWmo?si=VN6IBrbMl7T7WQJu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-7 col-md-3 embed-responsive-16by9">
                <video controls title="Embed video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    <source src="/Content/Videos/vid01.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                 </video>
            </div>
            <div class="col-7 col-md-3 embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/vMxYL4Cj85Y?si=AwY39DHE4ItDMMIq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-7 col-md-3 embed-responsive-16by9">
                <video controls title="Embed video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    <source src="/Content/Videos/vid02.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                 </video>
            </div>

        </div>
    </div>

    <?php

        include "raw-data.php";
        
        if ($newsFeed) {
            foreach ($newsFeed as $newsItem) {

                echo '<div class="news-article">';

                    echo '<div class="row">';

                        echo '<div class="col-12 col-lg-3 justify-content-center">';
                            echo '<img class="img-fluid" src="'. $newsItem['picture'] .'" alt="News image">';
                        echo '</div>';

                        echo '<div class="col-12 col-lg-9 justify-content-center">';

                            echo '<div class="row">';
                                echo '<div class="col-6 left"><p>' . $newsItem['date'] . '</p></div>';
                                echo '<div class="col-6 right"><p>Írta: ' . htmlspecialchars($newsItem['author']) . '</p></div>';
                            echo '</div>';

                            echo '<div class="row">';
                                echo '<div class="col-4 left">';
                                    echo '<h2>' . $newsItem['title'] . '</h2>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="row left article-text">';
                                echo '<p>' . $newsItem['content'] . '</p>';
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