<?php   
include '../includes/config.php';
$sql = 'SELECT * FROM event WHERE date > CURRENT_DATE()';
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <!--- Upcoming Events --->
    <link rel="stylesheet" href="../src/css/previouse_Event_Viewer.css">
    
</head>
<body>
    <section class="event">
        <h1>Upcoming Events</h1>
        <table class="event-table">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $event) { ?>
                    <tr>
                        <td><?php echo $event['event_name']; ?></td>
                        <td><?php echo $event['date']; ?></td>
                        <td><?php echo $event['description']; ?></td>
                        <td>
                            <a href="update_Event_registration.php?id=<?php echo $event['event_id']; ?>" class="btn btn-primary">Update</a>
                            <a href="delete_event.php?id=<?php echo $event['event_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>
