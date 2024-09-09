<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jellyfishing</title>
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
            text-align: center;
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
                <h1>Jellyfishing: An Exciting Adventure</h1>
                <p>
                    Hi, everyone! SpongeBob SquarePants here, reporting live from Bikini Bottom! Today, 
                    I want to tell you all about one of my favorite activities, aside from working at the Krusty Krab: jellyfishing! 
                    Whenever I have free time, I grab my trusty blue net and sprint over to Jellyfish Fields. 
                    It always feels like a grand adventure every time I spot those jellyfish gracefully floating between the seaweed. 
                    I can even hear their little "bzzt bzzt" sounds, like they're inviting me to join their game!
                </p>
                <p>
                    But jellyfishing isn’t just about catching jellyfish. For me, it’s more like a beautiful underwater dance. 
                    They’re so slippery and quick! I have to hop around, spin, and sometimes slip on the coral. But that’s the fun part! 
                    There's nothing quite like the thrill of seeing a bright jellyfish gently caught in my net, 
                    only to let it go after a few moments. No, I never hurt them! It’s just a never-ending game of tag.
                <p>
                    Sometimes Patrick joins me, though he usually ends up chasing... well, his own shadow. He may not be the best jellyfisher, 
                    but he's the best friend to have on any adventure! Oh, but watch out for the queen jellyfish! 
                    She's huge, bright pink, and super sneaky. She’s a challenge, but that just makes it even more exciting. 
                    If she sets her sights on you, you better run fast because getting stung… well, it doesn’t feel great, 
                    but it’s still kinda funny!
                </p>
                <p>
                    After a long day of jellyfishing, there’s nothing better than enjoying some fresh jelly from the jellyfish on a Krabby Patty. 
                    Delicious doesn’t even begin to describe it! So, if you ever want to join me on a jellyfishing adventure, 
                    don’t forget your net, your energy, and your best pals! I promise it’s an experience you won’t forget. 
                    Who’s ready to dive into the fun with me? <br> <br>“Bzzt” greetings from SpongeBob!
                </p>
            </div>
        </div>
    </div>
</div>    
</body>
</html>