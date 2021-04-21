<?php include './header.php';
$page = get_page_num();
?>
<nav>
    <a href="/07_links/">Home</a>
</nav>
<?php
switch ($page) {
    case 1:
        ?>
        <h3>Welcome</h3>
        <p>Here is a small demonstration of dynamic content in a PHP website.</p>
        <?php
        break;
    case 2:
        ?>
        <h3>Hobbies</h3>
        <p>Music, hiking, reading. Anything else?</p>
        <?php
        break;
    case 3:
        ?>
        <h3>About Me</h3>
        <p>I certainly am me.</p>
        <?php
        break;
    case 4:
        ?>
        <h3>Vacation</h3>
        <p>This would require me to actually have taken enough vacations to be able to contrast them with one another. Alas, I have not had the privilege.</p>
        <?php
        break;
    case 5:
        header("Location:https://www.imdb.com/title/tt0364569/?ref_=fn_al_tt_1");
        break;

    default:
        ?>
        <p>Error: The page you're looking for does not exist.</p>
        <?php
        break;
}

include 'footer.php';
?>
