<?php
// Include the contacts.php file
include_once 'contacts.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data for creating a new contact request
    $newContact = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        // Add other fields as needed
    ];

    $contactManager = new ContactManager('../../data/realtors.json'); // Replace 'path_to_realtors.json' with the actual file path
    $contactManager->create($newContact);

    // Redirect to the index page after creating a new contact request
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Create Contact Request</h1>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Add other form fields as needed -->
        <button type="submit" class="btn btn-primary">Create Request</button>
    </form>
</body>
</html>