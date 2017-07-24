<?php
error_reporting(0);
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = null;
}

?>
<!doctype html>
<html>

<head>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src='script.js'></script>

    <title> Luke Jin's Webpage </title>
    <head>


<body>
<nav id='navbar'>
    <ul>
        <!-- table with links, <a href = 'link' > title </a> -->
        <li>
            <a href='index.php?page=home'>
                Home
            </a>
        </li>
        <li><a href='index.php?page=about'>
                About Me
            </a>
        </li>
        <li><a href='index.php?page=skills'>
                Skills and Achievements
            </a>
        </li>
        <li>
            <a href='index.php?page=contact'>
                Contact Me
            </a>
        </li>
        <li><a href='index.php?page=references'>
                References
            </a>
        </li>
        <li>
            <div class='dropdown'>
                <a id='dropbtn'>Content</a>
                <div id='mydropdown' style="display: none" class='dropdown-content'>
                    <a href='index.php'>Blog</a>
                    <a href='index.php'>Share</a>
                    <a href='index.php'>Resources</a>
                </div>
            </div>
        </li>
    </ul>
</nav>

<?php
switch ($page) {

    case "home":
        require_once("home.php");
        break;
    case "about":
        require_once("about.php");
        break;
    case "contact":
        require_once("contact.php");
        break;
    case "skills":
        require_once("skills.php");
        break;
    case "references":
        require_once("references.php");
        break;
    default:
        require_once("home.php");

}

?>


</body>

</html>