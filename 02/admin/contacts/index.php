<?php
// Include the contacts.php file
include_once 'contacts.php';

// Retrieve all contact requests
$contactRequests = getContactRequests();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Requests</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <h1>Contact Requests</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($contactRequests as $index => $request): ?>
            <tr>
                <td><?php echo $request['id']; ?></td>
                <td><?php echo $request['name']; ?></td>
                <td><?php echo $request['email']; ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $request['id']; ?>">View Details</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
