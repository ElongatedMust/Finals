<?php 
$pageTitle = "header";
require_once('template.php');
?>
<main>
    <nav>
        <div class="L">
            <a href="homepage.php"><img src="./images/logo.png" alt="logo" id="logo"></a>
        </div>
        <ul>
            <li><a href="motorcycles.php">Motorcycles</a></li>
            <li><a href="register.php">Register</a></li>
            <li> <?php if ($isAdmin) { echo '<a href="adminpage.php">admin only</a>';} ?> </li>
            <li>L4</li>
        </ul>
        
    </nav>
</main>
    
</body>
</html>