<?php

function get_projects($projects){

$projects = array(
    array(
        'title' => 'UME Academy',
        'url' => 'https://ume.van.cp.academy.red/',
        'thubmnail' => './images/profile.jpg'
    ),
    array(
        'title' => 'Quotes on Dev',
        'url' => '#',
        'thubmnail' => './images/profile.jpg'
    ),
    array(
        'title' => 'Inhabitent',
        'url' => '#',
        'thubmnail' => './images/profile.jpg'
    ),
    array(
        'title' => 'Pong',
        'url' => '#',
        'thubmnail' => './images/profile.jpg'
    ),
    array(
        'title' => 'Instanews',
        'url' => 'https://jennapegg.github.io/instanews/',
        'thubmnail' => './images/profile.jpg'
    ),
    array(
        'title' => 'Aloha',
        'url' => '#',
        'thubmnail' => './images/profile.jpg'
    ),
);
?>
<?php foreach ($projects as $project):?>
    <div class="gallery">
        <a href="<?php print_r($project['url']); ?>">
            <p><?php print_r($project['title']); ?></p>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="Project Thumbnail">
        </a>
    </div>
<?php endforeach; 

}?>