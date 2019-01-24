<?php 
include('header.php');
include('functions.php');
?>
<main>
    <div class="name">
        <h1>Projects</h1>
        <!-- <img src="images/headshot.jpg" alt="Jenna Pegg headshot"> -->
    </div>
    <section class="index">
        <section class="projects">
            <?php 
            get_projects();
            ?>
        </section>
    </section>
</main>
<?php include('footer.php') ?>