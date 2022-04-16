session_start();
// Begins session 
if (!isset($_SESSION['count'])) {
// If the $_SESSION does not have 'count' set as a variable
    $_SESSION['count'] = 0;
    // Create variable and set 'count' to 0
} else {
    $_SESSION['count'] ++;
    // Increse 'count' by increments
}