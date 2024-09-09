<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krabby Patty</title>
    <?php include 'includes/header.php' ?>
    <style>
        /* Container styling */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            /* background-color: #f0f8ff;  */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun and playful font */
            color: #333;
            text-align: justify;
        }

        /* Title styling */
        .container h1 {
            font-size: 2.5em;
            color: #ff4500; /* Bright coral color */
            text-align: center;
            margin-bottom: 20px;
        }

        /* Paragraphs */
        .container p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #2f4f4f; /* Darker slate gray */
            margin-bottom: 20px;
        }

        /* Responsive for mobile */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .container h1 {
                font-size: 2em;
            }

            .container p {
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
                <h1>Krabby Patty</h1>
                <p>
                    If you’ve ever been to Bikini Bottom, you know there’s one place everyone talks about—the Krusty Krab, 
                    home to the legendary Krabby Patty! But what makes this simple-looking burger so special? Well, 
                    let me tell you why eating a Krabby Patty at Mr. Krabs' famous restaurant is a one-of-a-kind experience!
                </p>
                <h3>1. The Secret Formula</h3>
                <p>
                    The Krabby Patty isn’t just any burger; it’s made using a secret formula that has never been revealed. 
                    The combination of fresh ingredients, perfectly cooked patties, and the mysterious secret sauce gives 
                    the Krabby Patty its unbeatable flavor. Each bite bursts with a taste that’s both familiar and unique, 
                    leaving you craving more.
                </p>
                <h3>2. Fresh and Locally Sourced Ingredients</h3>
                <p>
                    At the Krusty Krab, Mr. Krabs ensures that only the freshest ingredients go into making each Krabby Patty. 
                    From crispy lettuce to juicy tomatoes, and of course, the high-quality patty, 
                    every part of the burger is handpicked and prepared with care. You’re not just eating a fast-food meal; 
                    you’re enjoying a high-quality culinary experience!
                </p>
                <h3>3. Friendly and Fun Atmosphere</h3>
                <p>
                    The Krusty Krab isn’t just about great food—it’s about the whole experience! 
                    With SpongeBob cooking in the kitchen and Squidward at the register (even if he’s not always thrilled to be there), 
                    every visit is full of quirky charm and fun interactions. Plus, the cozy, 
                    nautical-themed atmosphere of the restaurant makes it the perfect spot to relax and enjoy your meal.
                </p>
                <h3>4. Unbeatable Value</h3>
                <p>
                    Mr. Krabs is known for being thrifty, but that means great value for customers! You get an incredible, 
                    delicious meal for a very affordable price. Whether you’re a regular Bikini Bottom resident or just passing through, 
                    the Krabby Patty offers some of the best bang for your buck under the sea.
                </p>
                <h3>5. Perfect for All Ages</h3>
                <p>
                    The Krabby Patty is loved by everyone, from kids to adults to even sea creatures of all shapes and sizes! 
                    Its universal appeal means that it’s the go-to meal for anyone in Bikini Bottom. 
                    Whether you’re grabbing lunch with friends or taking the family out for a meal, the Krabby Patty satisfies every appetite.
                </p>
                <p>
                    So, the next time you’re in Bikini Bottom, don’t miss out on the chance to visit the Krusty Krab and sink your teeth into 
                    the famous Krabby Patty. It’s more than just a meal—it’s an underwater adventure for your taste buds!
                </p>
            </div>
        </div>
    </div>
</div>    
</body>
</html>