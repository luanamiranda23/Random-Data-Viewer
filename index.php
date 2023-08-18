
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Random Data Viewer</title>
</head>
<body>
    <div class="container">
        <h1>Random Data Viewer</h1>
        <div id="results">
            <?php
            $api_url = 'https://random-data-api.com/api/v2/users?size=100';
            $response = file_get_contents($api_url);
            $data = json_decode($response);

            foreach ($data as $user) {
                echo '<div class="user">';
                echo '<p><strong>Name:</strong> ' . $user->first_name . ' ' . $user->last_name . '</p>';
                echo '<p><strong>Email:</strong> ' . $user->email . '</p>';
                echo '<p><strong>Phone:</strong> ' . $user->phone_number . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
