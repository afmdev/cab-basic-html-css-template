<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT : JUST A BLUE SKY</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <img src="https://iili.io/GjAIhN.png" alt="Buesky Logo">
        <nav>
            <ul>
                <li><a href="./index.html">HOME</a></li>
                <li><a href="./register.html">REGISTER</a></li>
                <li><a href="./content.html">CONTENT</a></li>
                <li><a href="./contact.html">CONTACT</a></li>
            </ul>
        </nav>
        <div class="btn white-bg float-r"><a class="blue" href="./register.html">GET FREE QUOTE!</a></div>
    </header>

    <section class="margin-top">
        <h1 class="blue bold centered padding-80 no-bottom">MESSAGE SENT</h1>
        <article>
            <div class="other-text">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_d5enzto6.json" background="transparent" speed="1"
                style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            </div>
            <div class="main-text">
                <p>Your message has been sent successfully, we will contact you soon.</p>
                <p class="centered bold blue size-50 padding-25 no-top">Your message details:</p>
                <p class="centered">
                    <span class="bold size-25">Name:</span> <?php echo $_GET["name"]; ?><br />
                    <span class="bold size-25">Surname:</span> <?php echo $_GET["surname"]; ?><br /> 
                    <span class="bold size-25">Address:</span> <?php echo $_GET["address"]; ?><br />  
                    <span class="bold size-25">Gender:</span> <?php echo $_GET["gender"]; ?><br />  
                    <span class="bold size-25">Animal:</span> <?php echo $_GET["animal"]; ?><br />  
                    <span class="bold size-25">Country:</span> <?php echo $_GET["country"]; ?>  
                </p> 
            </div>
            <div class="btn centered blue-bg margin-50"><a class="white margin-50" href="./register.html">GO BACK</a></div>
        </article>
    </section>

    <footer>
        <section class="bottom-icons">
            <p class="blue bold centered size-50">BLUESKY</p>
            <p class="icons">
                <img class="rotate" src="./img/fb.png" alt="Facebook">
                <img class="rotate" src="./img/tw.png" alt="Twitter">
                <img class="rotate" src="./img/ig.png" alt="Instagram">
            </p>

        </section>
        <div class="bottom-bar">
            <p>Copyright © 2022</p>
            <p><a href="#">Legal</a> - <a href="#">Terms</a> - <a href="#">Contact</a></p>
        </div>
    </footer>

</body>

</html>