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
    foreach ($newsFeed as $newsItem) { ?>

        <div class="news-article">
            <div class="row">
                <div class="col-12 col-lg-3 justify-content-center">
                    <img class="img-fluid" src="<?=$newsItem['picture']?>" alt="News image">
                </div>
                <div class="col-12 col-lg-9 justify-content-center">
                    <div class="row">
                        <div class="col-6 left">
                            <p><?=$newsItem['date']?></p>
                        </div>
                        <div class="col-6 right">
                            <p>Írta: <?=htmlspecialchars($newsItem['author'])?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 left">
                            <h2><?=$newsItem['title']?></h2>
                        </div>
                    </div>
                    <div class="row left article-text">
                        <p><?=$newsItem['content']?></p>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo '<p>Failed to load news items.</p>';
}
?>