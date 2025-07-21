<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnament - Download App</title>

    <!-- Google Fonts: Teko -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* --- General and Reset Styles --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #00ff6a; /* Vibrant Green */
            --background-color: #000000;
        }

        body {
            font-family: 'Teko', sans-serif;
            color: #ffffff;
            background-color: var(--background-color);
            position: relative;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* --- Background Image & Overlay --- */
        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .background-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.pexels.com/photos/163036/mario-luigi-yoschi-figures-163036.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-position: center;
            filter: blur(6px) grayscale(0.5);
            opacity: 0.3;
        }

        /* --- Main Layout Container --- */
        .container {
            width: 100%;
            max-width: 1200px;
            padding: 2rem;
            text-align: center;
            z-index: 1;
        }

        /* --- Header/Logo --- */
        .logo {
            font-size: 2.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }

        /* --- Hero Section --- */
        .hero h1 {
            font-size: 6rem;
            font-weight: 700;
            text-transform: uppercase;
            line-height: 1;
            color: #ffffff;
            margin-bottom: 1.5rem;
        }

        .hero p {
            font-size: 1.8rem;
            color: #ffffff;
            opacity: 0.8;
            margin-bottom: 3rem;
            letter-spacing: 1px;
        }

        /* --- Brutalist Call-to-Action Button --- */
        .download-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: var(--background-color);
            border: 2px solid var(--primary-color);
            padding: 1rem 2.5rem;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 8px 8px 0px #ffffff;
            margin-bottom: 2rem;
        }
        
        .download-btn:hover {
            transform: translate(4px, 4px);
            box-shadow: 4px 4px 0px #ffffff;
        }
        
        .download-btn:active {
            transform: translate(8px, 8px);
            box-shadow: none;
        }

        .download-btn .fa-android {
            font-size: 2.5rem;
            margin-right: 1rem;
        }

        .btn-text {
            text-align: left;
        }

        .btn-text span {
            display: block;
            line-height: 1.2;
        }

        .btn-text .download-text {
            font-size: 1.2rem;
            font-weight: 400;
        }
        
        .btn-text .app-text {
            font-size: 2rem;
            font-weight: 700;
        }

        /* --- Alternative Login Link --- */
        .login-link {
            font-size: 1.5rem;
            color: #ffffff;
            text-decoration: none;
            letter-spacing: 1px;
            opacity: 0.7;
            transition: opacity 0.3s ease, color 0.3s ease;
        }
        
        .login-link:hover {
            opacity: 1;
            color: var(--primary-color);
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 4rem;
            }
            .hero p {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 1rem;
            }
            .hero h1 {
                font-size: 3rem;
            }
            .hero p {
                font-size: 1.2rem;
            }
            .download-btn {
                padding: 0.8rem 1.5rem;
                box-shadow: 5px 5px 0px #ffffff;
            }
            .btn-text .app-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="background-container"></div>

    <div class="container">
        <header>
            <div class="logo">Turnament</div>
        </header>

        <main class="hero">
            <h1>Level Up Your Game</h1>
            <p>Join Tournaments & Claim Victory</p>

            <!-- Download Button -->
            <a href="YOUR_APP_LINK.apk" class="download-btn" download>
                <i class="fab fa-android"></i>
                <div class="btn-text">
                    <span class="download-text">Download the</span>
                    <span class="app-text">Android App</span>
                </div>
            </a>

            <!-- Login Link -->
            <div>
                <a href="#" class="login-link">
                    or Login on Website
                </a>
            </div>
        </main>
    </div>

</body>
</html>
