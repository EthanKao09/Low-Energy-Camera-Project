<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Smart Camera</title>
</head>

<body>
    <header>
        <div id="contact">
            <!-- <form>
                <label>Phone</label>
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" placeholder="000-000-0000">
            </form> -->
            <p>Phone: 000-000-0000</p>
            <ul>
                <li>
                    <a href="" target="_blank">&nbsp;Email |</a>
                </li>
                <li>
                    <a href="" target="_blank">&nbsp;Facebook |</a>
                </li>
                <li>
                    <a href="" target="_blank">&nbsp;Instagram |</a>
                </li>
                <li>
                    <a href="" target="_blank">&nbsp;Tiktok |</a>
                </li>
                <li>
                    <a href="" target="_blank">&nbsp;Twitter |</a>
                </li>
            </ul>
        </div>
        <div id="menu">
            <img src="./Camera-image/udc-logo.png" alt="logo">
            <nav>
                <a href="#">Home</a>
                <a href="#about-us">About us</a>
                <a href="#prototype">Prototype</a>
            </nav>
        </div>
    </header>
    <main>
        <article id="title">
            <h1>Smart Camera</h1>
            <button>
                <?php 

                    $output = shell_exec("WebCamVideo_videofile (1).py");
                    echo $output;

                ?>
            </button>
        </article>
        <article id="features">
            <h1 class="subtitle">Key Features</h1>
            <section>
                <div>
                    <h2 class="subtitle">Feature 1</h2>
                    <p>Face Detection</p>
                </div>
                <div>
                    <h2 class="subtitle">Feature 2</h2>
                    <p>Object Detection</p>
                </div>
                <div>
                    <h2 class="subtitle">Feature 3</h2>
                    <p>Capture and Save to Firebase</p>
                </div>
                <div>
                    <h2 class="subtitle">Feature 4</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat maiores molestiae, aliquid
                        earum, veritatis repellendus a impedit quia fugiat repudiandae adipisci consequuntur consequatur
                        asperiores commodi. Illo corrupti enim possimus aliquid!</p>
                </div>
            </section>
        </article>
    </main>
    <footer>
        <div id="about-us">
            <h1>Our Story</h1>
            <p>We developed the ESP-32 low-energy camera to push the boundaries of technology. With advanced features like wireless networking, sensor technology, and face recognition, our camera is designed for seamless integration into any product or standalone use. We focused on maximizing performance while ensuring top-notch image quality and user experience. Join us on our journey to revolutionize low-energy camera technology.

</p>
        </div>
        <div id="prototype">
            <h1>Prototype</h1>
            <img src="./Camera-image/ESP-32.jpeg" alt="">
        </div>

    </footer>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <py-script src="WebCamVideo_videofile (1).py"></py-script>
</body>

</html>