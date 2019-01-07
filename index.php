<?php 
include('header.php');
include('functions.php')
?>
  <main>
      <div class="indexname">
        <img src="images/headshot.jpg" alt="Jenna Pegg headshot">
          <div class="description">
            <h1>Jenna Pegg</h1>
            <p>Web Developer</p>
          </div>
      </div>
      <section class ="index">
        <div class="indexabout">
          <p>I am an archaeology student turned web developer ready to take all of the skills learned from both career paths to my next adventure: a full time web development position.</p>
          <p><a href="./about.php">Read More</a></p>
          <div class="seeprojects">
            <?php //get_projects(); ?>
            <p><a href="./projects.php">See my Work</a></p>
          </div>
        </div>
    </section>
  </main>
<?php include('footer.php') ?>