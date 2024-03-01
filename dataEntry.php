<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Form</title>
    <link rel="stylesheet" href="dataEntry.css"/>
</head>
<body>
    <div class="form-container">
        <h2>Loan Application Form</h2>
        <form action="submit_loan_application.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="place" placeholder="Place" required>
            <select name="loan_type" required>
                <option value="" disabled selected>Select Loan Type</option>
                <option value="Personal Loan">Personal Loan</option>
                <option value="Home Loan">Home Loan</option>
                <option value="Car Loan">Car Loan</option>
                <!-- Add more options as needed -->
            </select>
            <input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
