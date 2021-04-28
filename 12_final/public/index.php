<?php
include_once '../includes/db_connection.php';
include_once '../includes/session.php';
include_once '../includes/functions.php';

$graves = find_all_graves();

?>

<?php include("../includes/layouts/header.php"); ?>

        <!-- =============== Hero =============== -->

        <div id="home-hero">
            <div class="hero-text">
                <h1>Welcome to the Grave Site</h1>
                <p>A "clone" of the popular family history site <a href="https://www.findagrave.com/" target="_blank">Find a Grave</a></p>
            </div><!-- end hero-text -->
        </div><!-- end hero -->

        <!-- =============== Description =============== -->

        <section id="description">
            <h2>Graves</h2>
        </section><!-- end description -->

        <!-- show all graves in a table using data from database -->
        <table class="graves-table">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Death Date</th>
            </tr>

            <tbody>
                <?php
                foreach ($graves as $grave) {
                ?>
                <tr>
                    <td><img src="/12_final/public/assets/img/uploads/<?php echo $grave['imageName'] ?>"></td>
                    <td><?php echo $grave['firstName'] . " " . $grave['middleName'] . " " . $grave['lastName'] ?></td>

                    <td><?php echo $grave["birthDate"] ?></td>
                    <td><?php echo $grave["deathDate"] ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <!-- end some kind of loop -->
        </table><!-- end graves-table -->

<?php include("../includes/layouts/footer.php"); ?>
