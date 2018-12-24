<?php 
include('header.php');
include('functions.php');
?>
  <main>
    <section class="about">
      <h1>Jenna Pegg</h1>
      <img src="images/profile.jpg" alt="Jenna Pegg headshot">
      <p>I am an archaeology student turned web developer ready to take all of the skills learned from both career paths to my next adventure: a full time web development position. I have completed the Web Development Diploma program at RED Academy, and through this have an excellent understanding of JavaScript, jQuery, PHP, CSS/SCSS, HTML, and more. I bring to a team a positive outlook and work ethic, and an ability to work efficiently both in a group setting and autonomously. </p>
    </section>
    <section class="projects">
      <?php 
        get_projects($projects);
      ?>
    </section>
  </main>
<?php include('footer.php') ?>