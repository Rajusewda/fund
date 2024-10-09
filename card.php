<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card-container {
            display: flex;
            gap: 20px;
        }

        .card {
            width: 300px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        h2, p {
            margin: 0;
            color: #333;
        }

        p {
            margin-top: 10px;
            font-size: 14px;
        }

        .donate-button {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
    </style>
    <title>Event Cards with Donate Button</title>
</head>
<body>

<?php
// Define arrays containing event data
$events = array(
    array(
        "image" => "event-image1.jpg",
        "name" => "Event Name 1",
        "address" => "Event Address 1",
        "date" => "Event Date 1",
        "time" => "Event Time 1",
        "organizer" => "Organizer Name 1"
    ),
    array(
        "image" => "event-image2.jpg",
        "name" => "Event Name 2",
        "address" => "Event Address 2",
        "date" => "Event Date 2",
        "time" => "Event Time 2",
        "organizer" => "Organizer Name 2"
    ),
    array(
        "image" => "event-image3.jpg",
        "name" => "Event Name 3",
        "address" => "Event Address 3",
        "date" => "Event Date 3",
        "time" => "Event Time 3",
        "organizer" => "Organizer Name 3"
    )
);
?>

<div class="card-container">
    <?php foreach ($events as $event) { ?>
        <div class="card">
            <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['name']; ?>">
            <div class="card-content">
                <h2><?php echo $event['name']; ?></h2>
                <p><strong>Address:</strong> <?php echo $event['address']; ?></p>
                <p><strong>Date:</strong> <?php echo $event['date']; ?></p>
                <p><strong>Time:</strong> <?php echo $event['time']; ?></p>
                <p><strong>Organised By:</strong> <?php echo $event['organizer']; ?></p>
                <a href="donatept.php" class="donate-button">Donate</a>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>
