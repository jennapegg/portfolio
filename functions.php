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
        'url' => './projects/Inhabitent',
        'thumbnail' => 'images/inhabitent-thumbnail.png'
    ),
    array(
        'title' => 'Pong',
        'url' => './projects/pong-starter',
        'thumbnail' => 'images/pong-thumbnail.png'
    ),
    array(
        'title' => 'Instanews',
        'url' => './projects/instanewsproject',
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
            <h3 class="title"><?php print_r($project['title']); ?></h3>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="Website Thumbnail">
        </a>
        <!-- <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium suscipit in temporibus, similique eveniet quas exercitationem omnis earum error magni quam nihil quia quos. Dolorem optio inventore in ut unde.</p> -->
    </div>
<?php endforeach; 

}?>