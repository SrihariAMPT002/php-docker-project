<?php
echo "<html>
<head>
    <title>Welcome Page</title>
    <style>
        body {
            background-color:rgb(255, 240, 242); /* Light blue background */
            color: #333; /* Dark text color */
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #4CAF50; /* Green color for the header */
        }
    </style>
</head>
<body>
    <h1>Welcome to My Website!</h1>
    <p>RTS demo trails into docker</p>
</body>
</html>";

$servername = getenv('DB_HOST');  
$username = getenv('DB_USER');    
$password = getenv('DB_PASSWORD'); 
$dbname = "test"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the 'test' database"; 


?>
