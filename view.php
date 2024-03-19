<?php
class UserView {
    public function displayUsername($username) {
        echo "Username: $username";
    }

    public function displayForm() {
        echo '<form method="post" action="index.php">';
        echo '   <input type="text" name="username" placeholder="Enter username">';
        echo '   <input type="submit" value="Submit">';
        echo '</form>';
    }
}