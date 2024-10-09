<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Form</title>
    <style>
        body {
            background-image: url(bghome.jpg);
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            border: 3px solid #ddd;
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center; text-decoration: underline;">Add Event</h2>

    <div class="form-container">
        <form id="eventForm" action="process_event.php" method="post">
            <label for="eventName" style="text-decoration: solid;">Event Name</label>
            <input type="text" id="eventName" name="eventName" required>

            <label for="eventCategory">Event Category:</label>
            <select id="eventCategory" name="eventCategory" required>
                <option value="party">Party</option>
                <option value="bhajan">Bhajan</option>
                <option value="socialCelebration">Social Celebration</option>
            </select>

            <label for="eventDateTime">Event Date and Time:</label>
            <input type="datetime-local" id="eventDateTime" name="eventDateTime" required>

            <label for="eventAmount">Amount:</label>
            <input type="number" id="eventAmount" name="eventAmount" min="0" required>

            <label for="eventLocation">Event Location:</label>
            <input type="text" id="eventLocation" name="eventLocation" required>

            <label for="organizerName">Organizer Name:</label>
            <input type="text" id="organizerName" name="organizerName" required>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
