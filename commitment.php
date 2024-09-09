<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commitment</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container styling */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        /* Title styling */
        .container h1 {
            font-size: 2.5em;
            text-align: left;
            margin-bottom: 20px;
            font-family: 'Protest Guerrilla', sans-serif;
        }

        /* Paragraph styling */
        .container p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #2f4f4f; /* Darker slate gray for text */
            margin-bottom: 30px;
            text-align: justify;
        }

        /* List styling */
        .container ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .container ul li {
            margin-bottom: 20px;
            font-size: 1.1em;
            line-height: 1.6;
            color: #2f4f4f; /* Darker slate gray for text */

        }

        /* Responsive for mobile */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .container h1 {
                font-size: 2em;
            }

            .container p, .container ul li {
                font-size: 1em;
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
            <div class="container">
                <h1>Our Vision</h1>
                <p>
                To spark curiosity, inspire discovery, and foster a love for science among the residents of Bikini Bottom, creating a fun and engaging community where learning never ends.
                </p>
                <h1>Our Mission</h1>
                <ul>
                    <li>
                    Promote Curiosity and Exploration: Encourage members to ask questions, experiment, and explore the wonders of the underwater world, from the smallest plankton to the vast mysteries of the deep sea.
                    </li>
                    <li>
                    Make Science Fun and Accessible: Break down complex scientific concepts into fun, hands-on activities that make learning enjoyable for sea creatures of all ages and backgrounds.
                    </li>
                    <li>
                    Foster Teamwork and Collaboration: Create an inclusive environment where members can work together on experiments, share ideas, and support each other’s scientific journeys.
                    </li>
                    <li>
                    Encourage Environmental Awareness: Use scientific knowledge to promote awareness of environmental issues in Bikini Bottom, encouraging members to take care of the ocean and its ecosystems through education and action.
                    </li>
                    <li>
                    Inspire Lifelong Learning: Instill a passion for lifelong learning by hosting exciting events, experiments, and discussions that keep members engaged and eager to discover more about the world around them.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>    
</body>
</html>