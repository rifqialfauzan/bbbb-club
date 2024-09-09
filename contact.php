<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* General form styling */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Label styling */
        form label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        /* Input and textarea styling */
        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        /* Textarea */
        form textarea {
            height: 150px;
            resize: vertical; /* Allows vertical resizing */
        }

        /* Submit button styling */
        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #2c3e50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Submit button hover effect */
        form input[type="submit"]:hover {
            background-color: #365779;
        }

        /* Placeholder text color */
        ::placeholder {
            color: #888;
            font-style: italic;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            form {
                padding: 15px;
            }

            form label {
                font-size: 14px;
            }

            form input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }

    </style>
</head>
<body>
<!-- Root Wrapper -->
<div class="wrapper">
    <!-- Upper Navbar  -->
    <?php include 'includes/navbar.php'; ?>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- Main -->
    <div class="main-content">
        <!-- Content Area -->
        <div class="content-area">
            <form action="">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name...">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email...">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="write something..."></textarea>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>    
</body>
</html>