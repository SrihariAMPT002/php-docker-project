<?php
echo "<html>
<head>
    <title>Welcome</title>
    <style>
        h1 {
            color: #4CAF50; /* Green color for the header */
        }
    </style>
</head>
<body>
    <h1>SQL Connection!</h1>
    <p>RTS demo trails into docker sql</p>
</body>
</html>";

$servername = "mysql-container"; 
$username = "testing";
$password = "rguktbasar";
$dbname = "testing"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the 'testing' database";
?>
