<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link rel="stylesheet" href="../src/css/event_registration.css">
</head>
<body>
    <div class="container">
        <h2>Event Registration</h2>
        <form action="../controller/event_registration_process.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label for="event_image">Event Image</label>
                <input type="file" id="event_image" name="event_image" accept="image/*" required>
            </div>
            <div class="input-group">
                <label for="event_name">Event Name</label>
                <input type="text" id="event_name" name="event_name" required>
            </div>
            <div class="input-group">
                <label for="event_description">Event Description (Max 20 words)</label>
                <textarea id="event_description" name="event_description" maxlength="100" required></textarea>
            </div>
            <div class="input-group">
                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>
            <button type="submit" name="submit">Register Event</button>
        </form>
    </div>
</body>
</html>
