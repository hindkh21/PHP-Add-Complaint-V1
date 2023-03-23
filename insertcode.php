<?php
require_once 'index.php';
require_once "insert.php";
// Print the submitted data
echo "<h2>Submitted Data:</h2>";
echo "<table>";
echo "<tr><td>ID:</td><td>$id</td></tr>";
echo "<tr><td>Titre:</td><td>$titre</td></tr>";
echo "<tr><td>Description:</td><td>$description</td></tr>";
echo "<tr><td>Role:</td><td>$role</td></tr>";
echo "<tr><td>Created:</td><td>$created</td></tr>";
echo "</table>";
