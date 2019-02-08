<?php

function get_projects(){

$projects = array(
    array(
        'title' => 'UME Academy',
        'url' => './projects/umeproject',
        'thumbnail' => 'images/ume-thumbnail.png',
        'description' => "A Netflix style site for the company UME Academy's arcade. Built in Wordpress, this site features a home page, showcasing different categories of games, scrollable through a carousel. It also includes a leaderboard, based upon which games have the most coins/prizes, as well as a prizes page. The coins on each game are updated with 1 extra coin for each play, and 5 extra coins for each download."
    ),
    array(
        'title' => 'Quotes on Dev',
        'url' => './projects/quotesondevproject',
        'thumbnail' => 'images/quotesondev-thumbnail.png',
        'description' => 'This site is a WordPress theme for the website Quotes on Dev, a creation of Red Academy used for students to practice their WordPress API skills. This site is a culmination of several static pages, such as an about page and tag and category archives, as well as a REST API home screen that accesses a JSON database to produce quotes using a jQuery .onclick function. It is also a responsive site, using SASS media queries with mobile, tablet, and desktop modes.'
    ),
    array(
        'title' => 'Inhabitent',
        'url' => './projects/inhabitentproject',
        'thumbnail' => 'images/inhabitent-thumbnail.png',
        'description' => 'This site is a worpress theme for the website Inhabitent, a creation of Red Academy used for students to practice their worpress skills. This site includes several static (about, find us, etc) as well as dynamic (journal, products, etc) pages, which show a variety of skills such as custom plugins, use of wordpress classes and php.'
    ),
    array(
        'title' => 'Pong',
        'url' => './projects/pongproject',
        'thumbnail' => 'images/pong-thumbnail.png',
        'description' => 'A basic pong game using SVGs. In this game, I looped throught an array to make the ball change colors when it goes out of bounds or hits a paddle, as well as declared a winner (at 10 points).'
    ),
    array(
        'title' => 'Instanews',
        'url' => './projects/instanewsproject',
        'thumbnail' => 'images/instanews-thumbnail.png',
        'description' => 'This site is based off of the New York Times top news stories, and features an on change function to access the appropriate stories when the different categories are selected. It is also a responsive site, styled mobile first.'
    ),
    array(
        'title' => 'Aloha',
        'url' => './projects/alohaproject',
        'thumbnail' => 'images/aloha-thumbnail.png',
        'description' => 'This site is based off of a fictional clothing website, which features smooth scrolling, a featured items carousel, a subscription section, and general site information, such as about, types of clothing/accessories, and social media and contact information.'
    ),
);
?>
<?php foreach ($projects as $project):?>
    <div class="gallery">
        <a href="<?php print_r($project['url']); ?>" target="_blank">
            <div class="show">
                <h3 class="title"><?php print_r($project['title']); ?></h3>
                 <p class="description"><?php print_r($project['description']) ?></p>
            </div>
            <img src="<?php print_r($project['thumbnail']); ?>" alt="<?php print_r($project['title']); ?> Thumbnail">
        </a>
    </div>
<?php endforeach; 

}?>