<?php
function get_page_num() {
    return $_GET['page'];
}

function get_title($page_num) {
    switch ($page_num) {
        case 1:
            return "Welcome";
            break;
        case 2:
            return "Hobbies";
            break;
        case 3:
            return "About";
            break;
        case 4:
            return "Vacation";
            break;

        default:
            return "Links";
            break;
    }
}
?>
