<?php
// Initialize variables to store form data and error messages
$firstname = $lastname = $email = $phone_no = $resume = "";
$error = "";
$success = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone_no = filter_input(INPUT_POST, 'phone_no', FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }

    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $allowed = array('pdf', 'doc', 'docx');
        $filename = $_FILES['resume']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            $error = "Invalid file format. Only PDF, DOC, and DOCX are allowed.";
        } else {
            $upload_dir = 'uploads/';
            $resume = $upload_dir . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['resume']['tmp_name'], $resume);
        }
    } else {
        $error = "Resume is required";
    }

    // If no errors, process the form (e.g., send email, save to database)
    if (empty($error)) {
        // Here you would typically save the data to a database or send an email
        // For this example, we'll just set a success flag
        $success = true;
    }
}
?>

<!DOCTYPE html>




<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Suvichak Jaroenpanit" />
    <title>Internship Submit Application Website</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body class="bg">

    
    <div class="container">
        <h2> Internship Registration Form</h2>
        <div>
            <Form action="mail.php" method="post" >
                <div class="input-user">
                    <i class="fa fa-user user"></i>
                    <input type="text" placeholder="First Name" class="name" name="firstname" id="first_name" required>
                    <span>
                        <i class="fa fa-user user"></i>
                        <input type="text" placeholder="Last Name" class="name" name="lastname" id="last_name" required>
                    </span>
                </div>

                <Div class="input-email">
                    <i class="fa fa-envelope email"></i>
                   <label for="email"> <input  type="email" placeholder="your@examplegmail.com" class="emailtxt" name="email" id="email" required> </label>
                </Div>

                <Div class="input-phone">
                    <i class="fa fa-phone phone"></i>
                    <input type="number" placeholder=" +66-xxx-xxx" class="phonetxt" name="phone_no" id="phone_no" required>
                </Div>

                <Div class="input-resume">
                    <Div class="container_resume">
                        <i class="fa fa-file file"></i>
                        <h4>Please attach your Resume here</h4>
                        <input type="file">
                    </Div>
                </Div>

                <Div class="input-submit">

                    <a href="thankyou.html"><input type="submit" value="Submit" name="send"></a>
                      

                </Div>
            </Form>
        </div>
    </div>


</body>






</html>