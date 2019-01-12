<?php

function get_projects(){

$projects = array(
    array(
        'title' => 'UME Academy',
        'url' => './projects/umeproject',
        'thumbnail' => 'images/ume-thumbnail.png'
    ),
    array(
        'title' => 'Quotes on Dev',
        'url' => './projects/quotesondevproject',
        'thumbnail' => 'images/quotesondev-thumbnail.png'
    ),
    array(
        'title' => 'Inhabitent',
        'url' => './projects/inhabitentproject',
        'thumbnail' => 'images/inhabitent-thumbnail.png'
    ),
    array(
        'title' => 'Pong',
        'url' => './projects/pongproject',
        'thumbnail' => 'images/pong-thumbnail.png'
    ),
    array(
        'title' => 'Instanews',
        'url' => './projects/instanewsproject',
        'thumbnail' => 'images/instanews-thumbnail.png'
    ),
    array(
        'title' => 'Aloha',
        'url' => './projects/alohaproject',
        'thumbnail' => 'images/aloha-thumbnail.png'
    ),
);
?>
<?php foreach ($projects as $project):?>
    <div class="gallery">
        <a href="<?php print_r($project['url']); ?>" target="_blank">
            <h3 class="title"><?php print_r($project['title']); ?></h3>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="<?php print_r($project['title']); ?> Thumbnail">
        </a>
    </div>
<?php endforeach; 

}?>