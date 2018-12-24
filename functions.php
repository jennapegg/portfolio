<?php

function get_projects(){

$projects = array(
    array(
        'title' => 'UME Academy',
        'url' => 'https://ume.van.cp.academy.red/',
        'thumbnail' => 'images/ume-thumbnail.png'
    ),
    array(
        'title' => 'Quotes on Dev',
        'url' => '#',
        'thumbnail' => 'images/quotesondev-thumbnail.png'
    ),
    array(
        'title' => 'Inhabitent',
        'url' => '#',
        'thumbnail' => 'images/inhabitent-thumbnail.png'
    ),
    array(
        'title' => 'Pong',
        'url' => 'https://jennapegg.github.io/Pong/',
        'thumbnail' => 'images/pong-thumbnail.png'
    ),
    array(
        'title' => 'Instanews',
        'url' => 'https://jennapegg.github.io/instanews/',
        'thumbnail' => 'images/instanews-thumbnail.png'
    ),
    array(
        'title' => 'Aloha',
        'url' => 'https://jennapegg.github.io/Aloha/',
        'thumbnail' => 'images/aloha-thumbnail.png'
    ),
);
?>
<?php foreach ($projects as $project):?>
    <div class="gallery">
        <a href="<?php print_r($project['url']); ?>" target="_blank">
            <p><?php print_r($project['title']); ?></p>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="Website Thumbnail">
        </a>
    </div>
<?php endforeach; 

}?>