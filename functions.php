<?php

function get_projects(){

$projects = array(
    array(
        'title' => 'UME Academy',
        'url' => './projects/umeproject',
        'thumbnail' => 'images/ume-thumbnail.png',
        'description' => 'works'
    ),
    array(
        'title' => 'Quotes on Dev',
        'url' => './projects/quotesondevproject',
        'thumbnail' => 'images/quotesondev-thumbnail.png',
        'description' => 'works'
    ),
    array(
        'title' => 'Inhabitent',
        'url' => './projects/inhabitentproject',
        'thumbnail' => 'images/inhabitent-thumbnail.png',
        'description' => 'works'
    ),
    array(
        'title' => 'Pong',
        'url' => './projects/pongproject',
        'thumbnail' => 'images/pong-thumbnail.png',
        'description' => 'works'
    ),
    array(
        'title' => 'Instanews',
        'url' => './projects/instanewsproject',
        'thumbnail' => 'images/instanews-thumbnail.png',
        'description' => 'works'
    ),
    array(
        'title' => 'Aloha',
        'url' => './projects/alohaproject',
        'thumbnail' => 'images/aloha-thumbnail.png',
        'description' => 'works'
    ),
);
?>
<?php foreach ($projects as $project):?>
    <div class="gallery">
        <a href="<?php print_r($project['url']); ?>" target="_blank">
            <h3 class="title"><?php print_r($project['title']); ?></h3>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="<?php print_r($project['title']); ?> Thumbnail">
            <p class="description"><?php print_r($project['description']) ?></p>
        </a>
    </div>
<?php endforeach; 

}?>