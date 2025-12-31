<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Happy New Year, Kira! ✨🐱</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap');

        

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }



        body {

            font-family: 'Poppins', 'Segoe UI', sans-serif;

            background: #0a0a1a;

            min-height: 100vh;

            overflow-x: hidden;

            position: relative;

        }



        /* Animated gradient background */

        .animated-bg {

            position: fixed;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            z-index: 0;

            background: linear-gradient(

                45deg,

                #1a0033,

                #330033,

                #4d004d,

                #660066,

                #800080,

                #990099,

                #b300b3,

                #cc00cc

            );

            background-size: 400% 400%;

            animation: gradientShift 15s ease infinite;

        }



        @keyframes gradientShift {

            0% { background-position: 0% 50%; }

            50% { background-position: 100% 50%; }

            100% { background-position: 0% 50%; }

        }



        /* Stars background */

        .stars {

            position: fixed;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            z-index: 1;

        }



        .star {

            position: absolute;

            width: 3px;

            height: 3px;

            background: #fff;

            border-radius: 50%;

            animation: twinkle 2s infinite;

            box-shadow: 0 0 6px #fff;

        }



        .star::before {

            content: '';

            position: absolute;

            width: 100%;

            height: 1px;

            background: linear-gradient(90deg, transparent, #fff, transparent);

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

        }



        .star::after {

            content: '';

            position: absolute;

            width: 1px;

            height: 100%;

            background: linear-gradient(180deg, transparent, #fff, transparent);

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

        }



        @keyframes twinkle {

            0%, 100% { 

                opacity: 0.2;

                transform: scale(0.8);

            }

            50% { 

                opacity: 1;

                transform: scale(1.2);

            }

        }



        /* Fireworks container */

        .fireworks-container {

            position: fixed;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            z-index: 2;

            pointer-events: none;

        }



        .firework {

            position: absolute;

            width: 8px;

            height: 8px;

            border-radius: 50%;

            will-change: transform, opacity;

            box-shadow: 0 0 20px currentColor;

        }



        /* New Year Text */

        .new-year-text {

            position: fixed;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            z-index: 3;

            font-size: 100px;

            font-weight: 900;

            background: linear-gradient(135deg, #ff69b4, #ff1493, #ffb6e1, #ff69b4);

            background-size: 200% 200%;

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;

            text-align: center;

            opacity: 0;

            pointer-events: none;

            text-shadow: 0 0 50px rgba(255, 105, 180, 0.5);

            filter: drop-shadow(0 0 40px rgba(255, 105, 180, 0.8));

        }



        .new-year-text.show {

            animation: newYearAppear 1s ease-out forwards, gradientMove 3s ease infinite, newYearPulse 2s ease-in-out infinite 1s;

        }



        @keyframes newYearAppear {

            0% {

                opacity: 0;

                transform: translate(-50%, -50%) scale(0.5);

            }

            100% {

                opacity: 1;

                transform: translate(-50%, -50%) scale(1);

            }

        }



        @keyframes newYearPulse {

            0%, 100% {

                transform: translate(-50%, -50%) scale(1);

            }

            50% {

                transform: translate(-50%, -50%) scale(1.1);

            }

        }



        /* KIRA Letters - Much more impressive */

        .kira-letters {

            position: fixed;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            z-index: 3;

            display: flex;

            justify-content: center;

            align-items: center;

            pointer-events: none;

            perspective: 1000px;

        }



        @keyframes gradientMove {

            0% { background-position: 0% 50%; }

            50% { background-position: 100% 50%; }

            100% { background-position: 0% 50%; }

        }



        @keyframes letterFloat {

            0% {

                transform: translateY(0px) rotateX(0deg) rotateY(0deg) scale(1);

            }

            25% {

                transform: translateY(-30px) rotateX(5deg) rotateY(-5deg) scale(1.1);

            }

            50% {

                transform: translateY(0px) rotateX(0deg) rotateY(0deg) scale(1.15);

            }

            75% {

                transform: translateY(-20px) rotateX(-5deg) rotateY(5deg) scale(1.1);

            }

            100% {

                transform: translateY(0px) rotateX(0deg) rotateY(0deg) scale(1);

            }

        }



        /* Floating Cats */

        .cat {

            position: fixed;

            font-size: 50px;

            z-index: 2;

            animation: catFloat 12s ease-in-out infinite;

            opacity: 0;

            filter: drop-shadow(0 0 20px rgba(255, 105, 180, 0.8));

            pointer-events: none;

        }



        @keyframes catFloat {

            0% {

                opacity: 0;

                transform: translateY(110vh) translateX(0) rotate(0deg) scale(0.5);

            }

            10% {

                opacity: 1;

            }

            90% {

                opacity: 1;

            }

            100% {

                opacity: 0;

                transform: translateY(-100px) translateX(150px) rotate(360deg) scale(1.2);

            }

        }



        /* Message container - Much more beautiful */

        .message-container {

            position: fixed;

            bottom: 30px;

            left: 50%;

            transform: translateX(-50%);

            z-index: 4;

            max-width: 900px;

            width: 92%;

            padding: 50px;

            background: linear-gradient(135deg, 

                rgba(255, 105, 180, 0.25) 0%,

                rgba(255, 20, 147, 0.2) 50%,

                rgba(255, 105, 180, 0.25) 100%);

            backdrop-filter: blur(20px) saturate(180%);

            -webkit-backdrop-filter: blur(20px) saturate(180%);

            border-radius: 30px;

            border: 3px solid;

            border-image: linear-gradient(135deg, #ff69b4, #ff1493, #ffb6e1, #ff69b4) 1;

            box-shadow: 

                0 0 50px rgba(255, 105, 180, 0.5),

                0 0 100px rgba(255, 20, 147, 0.3),

                inset 0 0 50px rgba(255, 105, 180, 0.2),

                0 20px 60px rgba(0, 0, 0, 0.3);

            opacity: 0;

            transition: opacity 1s ease-in, filter 2s ease-out, transform 2s ease-out;

        }



        .message-container.show {

            opacity: 1;

            animation: containerPulse 4s ease-in-out infinite;

        }



        .message-container.blurred {

            opacity: 0;

            filter: blur(20px);

            transform: translateX(-50%) scale(0.95);

            pointer-events: none;

        }



        @keyframes containerPulse {

            0%, 100% {

                box-shadow: 

                    0 0 50px rgba(255, 105, 180, 0.5),

                    0 0 100px rgba(255, 20, 147, 0.3),

                    inset 0 0 50px rgba(255, 105, 180, 0.2);

                transform: translateX(-50%) scale(1);

            }

            50% {

                box-shadow: 

                    0 0 80px rgba(255, 105, 180, 0.7),

                    0 0 150px rgba(255, 20, 147, 0.5),

                    inset 0 0 70px rgba(255, 105, 180, 0.3);

                transform: translateX(-50%) scale(1.02);

            }

        }



        @keyframes fadeInUp {

            from {

                opacity: 0;

                transform: translateX(-50%) translateY(80px);

            }

            to {

                opacity: 1;

                transform: translateX(-50%) translateY(0);

            }

        }



        .message-title {

            font-size: 48px;

            font-weight: 800;

            background: linear-gradient(135deg, #ff69b4, #ff1493, #ffb6e1, #ff69b4);

            background-size: 200% 200%;

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;

            text-align: center;

            margin-bottom: 35px;

            animation: titleGlow 2s ease-in-out infinite alternate, gradientMove 3s ease infinite;

            letter-spacing: 2px;

        }



        @keyframes titleGlow {

            from {

                filter: drop-shadow(0 0 20px rgba(255, 105, 180, 0.8));

            }

            to {

                filter: drop-shadow(0 0 40px rgba(255, 20, 147, 1));

            }

        }



        .message-text {

            color: #ffd0e8;

            font-size: 19px;

            line-height: 2;

            text-align: center;

            opacity: 0;

            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);

        }



        .message-text.typing {

            opacity: 1;

        }



        .message-text.typing::after {

            content: '|';

            animation: blink 1s infinite;

            color: #ff69b4;

            margin-left: 5px;

        }



        @keyframes blink {

            0%, 50% { opacity: 1; }

            51%, 100% { opacity: 0; }

        }



        .message-text p {

            margin-bottom: 25px;

            font-weight: 400;

        }



        .message-text p:last-child {

            margin-top: 35px;

            font-size: 28px;

            font-weight: 700;

            background: linear-gradient(135deg, #ff69b4, #ff1493);

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;

            text-shadow: 0 0 20px rgba(255, 105, 180, 0.5);

        }



        /* Floating hearts */

        .heart {

            position: fixed;

            font-size: 30px;

            animation: floatHeart 10s ease-in-out infinite;

            opacity: 0;

            z-index: 2;

            filter: drop-shadow(0 0 15px rgba(255, 105, 180, 0.8));

            pointer-events: none;

        }



        @keyframes floatHeart {

            0% {

                opacity: 0;

                transform: translateY(100vh) translateX(0) rotate(0deg) scale(0.3);

            }

            15% {

                opacity: 1;

            }

            85% {

                opacity: 1;

            }

            100% {

                opacity: 0;

                transform: translateY(-100px) translateX(120px) rotate(360deg) scale(1.5);

            }

        }



        /* Enhanced sparkles */

        .sparkle {

            position: fixed;

            width: 8px;

            height: 8px;

            background: radial-gradient(circle, #ff69b4, #ff1493);

            border-radius: 50%;

            box-shadow: 

                0 0 15px #ff69b4,

                0 0 30px #ff1493;

            animation: sparkleMove 5s ease-in-out infinite;

            z-index: 2;

            pointer-events: none;

        }



        @keyframes sparkleMove {

            0%, 100% {

                opacity: 0;

                transform: scale(0) rotate(0deg);

            }

            50% {

                opacity: 1;

                transform: scale(1.5) rotate(180deg);

            }

        }



        /* Particle effects */

        .particle {

            position: fixed;

            width: 4px;

            height: 4px;

            background: #ff69b4;

            border-radius: 50%;

            box-shadow: 0 0 10px #ff69b4;

            z-index: 1;

            pointer-events: none;

        }



        /* Intro Screen */

        .intro-screen {

            position: fixed;

            top: 0;

            left: 0;

            width: 100%;

            height: 100%;

            background: linear-gradient(135deg, #1a0033, #330033, #4d004d, #660066);

            background-size: 400% 400%;

            animation: gradientShift 10s ease infinite;

            z-index: 1000;

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            cursor: pointer;

            transition: opacity 1s ease-out;

        }



        .intro-screen.hidden {

            opacity: 0;

            pointer-events: none;

        }



        .intro-content {

            text-align: center;

            animation: introPulse 2s ease-in-out infinite;

        }



        .intro-title {

            font-size: 64px;

            font-weight: 900;

            background: linear-gradient(135deg, #ff69b4, #ff1493, #ffb6e1, #ff69b4);

            background-size: 200% 200%;

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;

            animation: gradientMove 3s ease infinite;

            margin-bottom: 30px;

            text-shadow: 0 0 50px rgba(255, 105, 180, 0.5);

        }



        .intro-subtitle {

            font-size: 24px;

            color: #ffb6e1;

            margin-bottom: 50px;

            animation: fadeInOut 2s ease-in-out infinite;

        }



        .intro-button {

            padding: 20px 60px;

            font-size: 24px;

            font-weight: 700;

            color: #fff;

            background: linear-gradient(135deg, #ff69b4, #ff1493);

            border: 3px solid #ffb6e1;

            border-radius: 50px;

            cursor: pointer;

            transition: all 0.3s ease;

            box-shadow: 

                0 0 30px rgba(255, 105, 180, 0.5),

                inset 0 0 20px rgba(255, 255, 255, 0.1);

            text-transform: uppercase;

            letter-spacing: 2px;

        }



        .intro-button:hover {

            transform: scale(1.1);

            box-shadow: 

                0 0 50px rgba(255, 105, 180, 0.8),

                inset 0 0 30px rgba(255, 255, 255, 0.2);

        }



        .intro-button:active {

            transform: scale(0.95);

        }



        @keyframes introPulse {

            0%, 100% {

                transform: scale(1);

            }

            50% {

                transform: scale(1.05);

            }

        }



        @keyframes fadeInOut {

            0%, 100% {

                opacity: 0.6;

            }

            50% {

                opacity: 1;

            }

        }



        /* Hide main content initially */

        .main-content {

            opacity: 0;

            transition: opacity 1s ease-in;

        }



        .main-content.visible {

            opacity: 1;

        }



        /* Typing animation for letters - Enhanced visibility */

        .letter {

            font-size: 180px;

            font-weight: 900;

            margin: 0 20px;

            opacity: 0;

            /* Much brighter, vibrant gradient with white highlights */

            background: linear-gradient(135deg, 
                #ffffff 0%,
                #ffb6e1 15%,
                #ff69b4 30%,
                #ff1493 45%,
                #ff00ff 60%,
                #ff69b4 75%,
                #ffb6e1 90%,
                #ffffff 100%
            );

            background-size: 400% 400%;

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

            background-clip: text;

            transform-style: preserve-3d;

            transform: translateY(-200px) rotateX(-90deg) scale(0.2);

            /* Much stronger glow effects for visibility */

            filter: drop-shadow(0 0 40px rgba(255, 255, 255, 1)) 

                    drop-shadow(0 0 60px rgba(255, 182, 225, 1))

                    drop-shadow(0 0 80px rgba(255, 105, 180, 1))

                    drop-shadow(0 0 100px rgba(255, 20, 147, 0.9))

                    drop-shadow(0 0 120px rgba(255, 0, 255, 0.8));

            /* Enhanced stroke for better visibility */

            text-stroke: 3px rgba(255, 255, 255, 0.8);

            -webkit-text-stroke: 3px rgba(255, 255, 255, 0.8);

        }



        .letter.typing {

            animation: typeLetter 0.8s ease-out forwards, gradientMove 3s ease infinite;

        }



        .letter.typing.float {

            animation: letterFloat 5s ease-in-out infinite, gradientMove 3s ease infinite;

        }



        @keyframes typeLetter {

            0% {

                opacity: 0;

                transform: translateY(-200px) rotateX(-90deg) scale(0.2);

            }

            50% {

                opacity: 0.8;

                transform: translateY(-50px) rotateX(-45deg) scale(0.8);

            }

            100% {

                opacity: 1;

                transform: translateY(0px) rotateX(0deg) scale(1);

            }

        }



        .letter:nth-child(1).typing { animation-delay: 0.5s, 0s; }

        .letter:nth-child(2).typing { animation-delay: 1.0s, 0s; }

        .letter:nth-child(3).typing { animation-delay: 1.5s, 0s; }

        .letter:nth-child(4).typing { animation-delay: 2.0s, 0s; }



        /* Music control */

        .music-control {

            position: fixed;

            bottom: 20px;

            right: 20px;

            z-index: 100;

            background: rgba(255, 105, 180, 0.2);

            backdrop-filter: blur(10px);

            border: 2px solid rgba(255, 105, 180, 0.4);

            border-radius: 50%;

            width: 60px;

            height: 60px;

            display: flex;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            transition: all 0.3s ease;

            box-shadow: 0 0 20px rgba(255, 105, 180, 0.3);

        }



        /* Hidden YouTube player for background audio */

        #youtube-player {

            position: fixed;

            top: -9999px;

            left: -9999px;

            width: 1px;

            height: 1px;

            opacity: 0;

            pointer-events: none;

        }



        .music-control:hover {

            transform: scale(1.1);

            box-shadow: 0 0 30px rgba(255, 105, 180, 0.5);

        }



        .music-control svg {

            width: 30px;

            height: 30px;

            fill: #ff69b4;

        }



        /* Responsive */

        @media (max-width: 768px) {

            .intro-title {

                font-size: 40px;

            }



            .intro-subtitle {

                font-size: 18px;

            }



            .intro-button {

                padding: 15px 40px;

                font-size: 18px;

            }



            .new-year-text {

                font-size: 50px;

            }



            .letter {

                font-size: 80px;

                margin: 0 8px;

            }

            

            .message-container {

                padding: 30px 25px;

                bottom: 15px;

            }

            

            .message-title {

                font-size: 32px;

            }

            

            .message-text {

                font-size: 16px;

                line-height: 1.8;

            }



            .message-text p:last-child {

                font-size: 22px;

            }



            .cat {

                font-size: 40px;

            }

        }

    </style>

</head>

<body>

    <!-- Intro Screen -->

    <div class="intro-screen" id="introScreen">

        <div class="intro-content">

            <h1 class="intro-title">✨ New Year Surprise ✨</h1>

            <p class="intro-subtitle">Click to open your special message 🐱💕</p>

            <button class="intro-button" id="openButton">Open</button>

        </div>

    </div>



    <!-- Main Content -->

    <div class="main-content" id="mainContent">

        <!-- Animated background -->

        <div class="animated-bg"></div>



        <!-- Stars background -->

        <div class="stars" id="stars"></div>



        <!-- Fireworks -->

        <div class="fireworks-container" id="fireworks"></div>



        <!-- New Year Text -->

        <div class="new-year-text" id="newYearText">Happy New Year! ✨</div>



        <!-- KIRA Letters -->

        <div class="kira-letters">

            <div class="letter" id="letterK">K</div>

            <div class="letter" id="letterI">I</div>

            <div class="letter" id="letterR">R</div>

            <div class="letter" id="letterA">A</div>

        </div>



    <!-- Cats container -->

    <div id="cats"></div>



    <!-- Hearts -->

    <div id="hearts"></div>



    <!-- Sparkles -->

    <div id="sparkles"></div>



    <!-- Particles -->

    <div id="particles"></div>



        <!-- Message -->

        <div class="message-container">

            <h1 class="message-title">Happy New Year, Kira! ✨🐱</h1>

            <div class="message-text">

                <p>As the New Year starts, I just want to be honest with you. I'm really grateful that you came into my life. Getting to know you has meant a lot to me, even in the simplest ways. I don't always say it, but I truly appreciate you.</p>

                

                <p>This year, I want to take things slowly and do them properly. I'm willing to pursue you with patience and respect, without rushing or forcing anything. I'm okay with taking my time because what I feel is real.</p>

                

                <p>When I care about someone, I don't give up easily. I stay consistent, I show effort, and I stand by what I feel. You matter to me, and I want you to know that I'm serious about that.</p>

                

                <p>I know everyone has their own pace and their own priorities, and I respect that. I'm willing to understand you more, support you when I can, and be there in a way that feels right for you.</p>

                

                <p>I hope this New Year brings you peace, good health, and happiness. I hope you reach the things you're working hard for and have more good days ahead. You deserve that.</p>

                

                <p>Thank you for being part of my life. I'm looking forward to what this year brings, and I hope we can keep moving forward, one step at a time.</p>

                

                <p>Happy New Year. 💕🐱✨</p>

            </div>

        </div>

    </div>



    <!-- Music Control -->

    <div class="music-control" id="musicControl">

        <svg id="playIcon" viewBox="0 0 24 24" style="display: block;">

            <path d="M8 5v14l11-7z"/>

        </svg>

        <svg id="pauseIcon" viewBox="0 0 24 24" style="display: none;">

            <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>

        </svg>

    </div>



    <!-- Audio Element -->

    <!-- To add music: Uncomment and add your music file path below -->

    <!-- Place your music file in the same folder as this HTML file, then uncomment the source tag -->

    <audio id="backgroundMusic" loop preload="auto">

        <!-- <source src="background-music.mp3" type="audio/mpeg"> -->

        <!-- <source src="background-music.ogg" type="audio/ogg"> -->

        <!-- You can also use online music URLs like: -->

        <!-- <source src="https://example.com/music.mp3" type="audio/mpeg"> -->

    </audio>



    <!-- YouTube Player Container (Hidden) -->

    <div id="youtube-player"></div>



    <script>

        // State management

        let isStarted = false;

        let musicPlaying = false;

        let youtubePlayer = null;

        const audio = document.getElementById('backgroundMusic');

        const musicControl = document.getElementById('musicControl');

        const playIcon = document.getElementById('playIcon');

        const pauseIcon = document.getElementById('pauseIcon');



        // YouTube IFrame API - Define callback globally before loading script

        let youtubePlayerReady = false;

        let youtubeAPIReady = false;

        let userInteracted = false;



        // Define the callback function globally (required by YouTube API)

        window.onYouTubeIframeAPIReady = function() {

            youtubeAPIReady = true;

            console.log('YouTube API ready');

            initializeYouTubePlayer();

        };



        // Load YouTube API script

        (function() {

            if (typeof YT === 'undefined' || typeof YT.Player === 'undefined') {

                const tag = document.createElement('script');

                tag.src = 'https://www.youtube.com/iframe_api';

                tag.async = true;

                const firstScriptTag = document.getElementsByTagName('script')[0];

                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            } else {

                youtubeAPIReady = true;

                initializeYouTubePlayer();

            }

        })();



        function initializeYouTubePlayer() {

            if (!youtubeAPIReady || youtubePlayer) return;

            

            // Wait a bit for the API to be fully ready

            setTimeout(() => {

                try {

                    youtubePlayer = new YT.Player('youtube-player', {

                        height: '1',

                        width: '1',

                        videoId: 'Qm3EpNZLrXM', // YouTube video ID from the URL

                        playerVars: {

                            'autoplay': 0,

                            'controls': 0,

                            'disablekb': 1,

                            'enablejsapi': 1,

                            'fs': 0,

                            'iv_load_policy': 3,

                            'loop': 1,

                            'playlist': 'Qm3EpNZLrXM', // Required for looping

                            'modestbranding': 1,

                            'playsinline': 1,

                            'rel': 0,

                            'showinfo': 0,

                            'mute': 0, // Ensure not muted

                            'origin': window.location.origin

                        },

                        events: {

                            'onReady': onPlayerReady,

                            'onStateChange': onPlayerStateChange,

                            'onError': onPlayerError

                        }

                    });

                    console.log('YouTube player initialization started');

                } catch (e) {

                    console.error('Error initializing YouTube player:', e);

                }

            }, 100);

        }



        function onPlayerReady(event) {

            youtubePlayerReady = true;

            console.log('YouTube player ready and loaded');

            // Unmute the player and set volume

            try {

                event.target.unMute();

                event.target.setVolume(100);

                console.log('YouTube player unmuted and volume set to 100%');

            } catch (e) {

                console.log('Could not configure player:', e);

            }

        }



        function onPlayerStateChange(event) {

            // Handle player state changes if needed

            if (event.data === YT.PlayerState.ENDED) {

                // Video ended, restart it (loop)

                try {

                    youtubePlayer.playVideo();

                } catch (e) {

                    console.log('Could not restart video:', e);

                }

            }

        }



        function onPlayerError(event) {

            console.error('YouTube player error:', event.data);

        }



        // Function to play YouTube audio

        function playYouTubeAudio() {

            if (!youtubePlayer || !youtubePlayerReady) {

                console.log('YouTube player not ready yet, retrying in 500ms...');

                setTimeout(playYouTubeAudio, 500);

                return;

            }

            

            try {

                // Ensure player is not muted

                youtubePlayer.unMute();

                // Set volume to 100%

                youtubePlayer.setVolume(100);

                // Get current state

                const state = youtubePlayer.getPlayerState();

                console.log('Current YouTube player state:', state);

                

                // Play the video (only if not already playing)

                if (state !== YT.PlayerState.PLAYING) {

                    youtubePlayer.playVideo();

                    console.log('YouTube audio play command sent');

                } else {

                    console.log('YouTube audio already playing');

                }

            } catch (e) {

                console.error('Error playing YouTube audio:', e);

                // Try alternative method

                try {

                    const iframe = document.querySelector('#youtube-player iframe');

                    if (iframe) {

                        iframe.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');

                        console.log('Tried alternative play method via postMessage');

                    }

                } catch (e2) {

                    console.error('Alternative method also failed:', e2);

                }

            }

        }



        // Function to stop YouTube audio

        function stopYouTubeAudio() {

            if (!youtubePlayer || !youtubePlayerReady) {

                return;

            }

            

            try {

                youtubePlayer.pauseVideo();

                console.log('YouTube audio stopped');

            } catch (e) {

                console.error('Error stopping YouTube audio:', e);

            }

        }



        // Intro screen handler

        function startExperience() {

            if (isStarted) return;

            isStarted = true;

            userInteracted = true; // Mark that user has interacted



            const introScreen = document.getElementById('introScreen');

            const mainContent = document.getElementById('mainContent');

            

            // Hide intro screen

            introScreen.classList.add('hidden');

            

            // Show main content

            setTimeout(() => {

                mainContent.classList.add('visible');

                introScreen.style.display = 'none';

            }, 1000);



            // STEP 1: Show "New Year" text first

            setTimeout(() => {

                const newYearText = document.getElementById('newYearText');

                newYearText.classList.add('show');

                

                // Hide New Year text after 3 seconds

                setTimeout(() => {

                    newYearText.style.opacity = '0';

                    newYearText.style.transition = 'opacity 1s ease-out';

                }, 3000);

            }, 1500);



            // STEP 2: Start fireworks after New Year text appears

            setTimeout(() => {

                createStars();

                startFireworks();

                startCats();

                startHearts();

                startSparkles();

                startParticles();



                // Create initial burst of fireworks

                for (let i = 0; i < 10; i++) {

                    setTimeout(() => {

                        createFirework(

                            Math.random() * window.innerWidth,

                            Math.random() * (window.innerHeight * 0.6) + 50

                        );

                    }, i * 100);

                }



                // Create more fireworks bursts

                setTimeout(() => {

                    for (let i = 0; i < 8; i++) {

                        setTimeout(() => {

                            createFirework(

                                Math.random() * window.innerWidth,

                                Math.random() * (window.innerHeight * 0.6) + 50

                            );

                        }, i * 150);

                    }

                }, 1000);



                // Create initial cats

                for (let i = 0; i < 5; i++) {

                    setTimeout(() => {

                        createCat();

                    }, i * 500);

                }

            }, 2000);



            // STEP 3: Start typing animation for letters AFTER fireworks

            setTimeout(() => {

                const letterK = document.getElementById('letterK');

                letterK.classList.add('typing');

                setTimeout(() => {

                    letterK.classList.remove('typing');

                    letterK.classList.add('float');

                }, 1300);

            }, 5500); // Start after 5.5 seconds



            setTimeout(() => {

                const letterI = document.getElementById('letterI');

                letterI.classList.add('typing');

                setTimeout(() => {

                    letterI.classList.remove('typing');

                    letterI.classList.add('float');

                }, 1800);

            }, 6000);



            setTimeout(() => {

                const letterR = document.getElementById('letterR');

                letterR.classList.add('typing');

                setTimeout(() => {

                    letterR.classList.remove('typing');

                    letterR.classList.add('float');

                }, 2300);

            }, 6500);



            setTimeout(() => {

                const letterA = document.getElementById('letterA');

                letterA.classList.add('typing');

                setTimeout(() => {

                    letterA.classList.remove('typing');

                    letterA.classList.add('float');

                }, 2800);

            }, 7000);



            // STEP 4: Type the message slowly after all letters appear

            setTimeout(() => {

                typeMessage();

            }, 10000); // Start typing message after 10 seconds

        }



        // Type message function

        function typeMessage() {

            const messageContainer = document.querySelector('.message-container');

            const messageText = document.querySelector('.message-text');

            

            // Show message container with fade in

            messageContainer.classList.add('show');

            messageText.classList.add('typing');

            

            // Start YouTube audio when message starts displaying

            playYouTubeAudio();

            

            // Get all paragraphs

            const paragraphs = messageText.querySelectorAll('p');

            const originalTexts = [];

            

            // Store original texts and clear paragraphs

            paragraphs.forEach((p, index) => {

                originalTexts[index] = p.textContent;

                p.textContent = '';

            });

            

            let currentParagraph = 0;

            let currentChar = 0;

            

            // Calculate total characters for timing

            let totalChars = 0;

            originalTexts.forEach(text => {

                totalChars += text.length;

            });

            

            // Type out the message character by character

            function typeChar() {

                if (currentParagraph < paragraphs.length) {

                    const currentP = paragraphs[currentParagraph];

                    const textToType = originalTexts[currentParagraph];

                    

                    if (currentChar < textToType.length) {

                        currentP.textContent += textToType[currentChar];

                        currentChar++;

                        // Type speed: 40ms per character (slower typing)

                        setTimeout(typeChar, 40);

                    } else {

                        // Move to next paragraph

                        currentParagraph++;

                        currentChar = 0;

                        // Small pause between paragraphs

                        setTimeout(typeChar, 500);

                    }

                } else {

                    // Remove typing cursor after done

                    setTimeout(() => {

                        messageText.classList.remove('typing');

                        

                        // Blur and fade out the message after it's fully typed

                        // Wait 3 seconds after typing completes, then blur

                        setTimeout(() => {

                            messageContainer.classList.add('blurred');

                            

                            // Stop YouTube audio when message blurs

                            stopYouTubeAudio();

                        }, 3000);

                    }, 500);

                }

            }

            

            // Start typing after a short delay

            setTimeout(typeChar, 500);

        }



        // Music control

        musicControl.addEventListener('click', function() {

            if (musicPlaying) {

                audio.pause();

                playIcon.style.display = 'block';

                pauseIcon.style.display = 'none';

                musicPlaying = false;

            } else {

                audio.play().catch(e => {

                    console.log('Audio play failed:', e);

                    // If autoplay is blocked, show a message

                    alert('Please click the play button to start the music!');

                });

                playIcon.style.display = 'none';

                pauseIcon.style.display = 'block';

                musicPlaying = true;

            }

        });



        // Intro screen click handlers

        document.getElementById('introScreen').addEventListener('click', startExperience);

        document.getElementById('openButton').addEventListener('click', startExperience);



        // Cat emojis array

        const catEmojis = ['🐱', '😸', '😻', '🙀', '🐾', '🐈', '😺', '😽'];



        // Create stars

        function createStars() {

            const starsContainer = document.getElementById('stars');

            const numStars = 300;

            

            for (let i = 0; i < numStars; i++) {

                const star = document.createElement('div');

                star.className = 'star';

                star.style.left = Math.random() * 100 + '%';

                star.style.top = Math.random() * 100 + '%';

                star.style.animationDelay = Math.random() * 3 + 's';

                star.style.animationDuration = (Math.random() * 2 + 1.5) + 's';

                starsContainer.appendChild(star);

            }

        }



        // Create enhanced fireworks

        function createFirework(x, y) {

            const fireworksContainer = document.getElementById('fireworks');

            const colors = ['#ff69b4', '#ff1493', '#ffb6e1', '#ffc0cb', '#ff69b4', '#ff1493', '#ff00ff', '#ff1493'];

            const numParticles = 80;

            

            for (let i = 0; i < numParticles; i++) {

                const particle = document.createElement('div');

                particle.className = 'firework';

                

                const angle = (Math.PI * 2 * i) / numParticles;

                const velocity = 100 + Math.random() * 150;

                const vx = Math.cos(angle) * velocity;

                const vy = Math.sin(angle) * velocity;

                

                const color = colors[Math.floor(Math.random() * colors.length)];

                particle.style.left = x + 'px';

                particle.style.top = y + 'px';

                particle.style.color = color;

                particle.style.backgroundColor = color;

                particle.style.boxShadow = `0 0 20px ${color}, 0 0 40px ${color}`;

                

                fireworksContainer.appendChild(particle);

                

                // Animate particle

                let startTime = null;

                const duration = 2000;

                

                function animate(currentTime) {

                    if (!startTime) startTime = currentTime;

                    const elapsed = currentTime - startTime;

                    const progress = Math.min(elapsed / duration, 1);

                    

                    // Ease out function

                    const easeOut = 1 - Math.pow(1 - progress, 3);

                    

                    const currentX = vx * easeOut;

                    const currentY = vy * easeOut;

                    const scale = 1.5 - progress * 0.8;

                    const opacity = 1 - progress;

                    

                    particle.style.transform = `translate(${currentX}px, ${currentY}px) scale(${scale})`;

                    particle.style.opacity = opacity;

                    

                    if (progress < 1) {

                        requestAnimationFrame(animate);

                    } else {

                        particle.remove();

                    }

                }

                

                requestAnimationFrame(animate);

            }

        }



        // Continuous fireworks

        function startFireworks() {

            setInterval(() => {

                const x = Math.random() * window.innerWidth;

                const y = Math.random() * (window.innerHeight * 0.7) + 50;

                createFirework(x, y);

            }, 600);

        }



        // Create floating cats

        function createCat() {

            const catsContainer = document.getElementById('cats');

            const cat = document.createElement('div');

            cat.className = 'cat';

            cat.innerHTML = catEmojis[Math.floor(Math.random() * catEmojis.length)];

            cat.style.left = Math.random() * window.innerWidth + 'px';

            cat.style.animationDelay = Math.random() * 2 + 's';

            cat.style.animationDuration = (Math.random() * 4 + 10) + 's';

            catsContainer.appendChild(cat);

            

            setTimeout(() => {

                cat.remove();

            }, 15000);

        }



        function startCats() {

            setInterval(createCat, 2500);

        }



        // Create floating hearts

        function createHeart() {

            const heartsContainer = document.getElementById('hearts');

            const heart = document.createElement('div');

            heart.className = 'heart';

            heart.innerHTML = '💕';

            heart.style.left = Math.random() * window.innerWidth + 'px';

            heart.style.animationDelay = Math.random() * 2 + 's';

            heart.style.animationDuration = (Math.random() * 4 + 8) + 's';

            heartsContainer.appendChild(heart);

            

            setTimeout(() => {

                heart.remove();

            }, 12000);

        }



        function startHearts() {

            setInterval(createHeart, 1800);

        }



        // Create sparkles

        function createSparkle() {

            const sparklesContainer = document.getElementById('sparkles');

            const sparkle = document.createElement('div');

            sparkle.className = 'sparkle';

            sparkle.style.left = Math.random() * window.innerWidth + 'px';

            sparkle.style.top = Math.random() * window.innerHeight + 'px';

            sparkle.style.animationDelay = Math.random() * 2 + 's';

            sparklesContainer.appendChild(sparkle);

            

            setTimeout(() => {

                sparkle.remove();

            }, 5000);

        }



        function startSparkles() {

            setInterval(createSparkle, 400);

        }



        // Create particles

        function createParticle() {

            const particlesContainer = document.getElementById('particles');

            const particle = document.createElement('div');

            particle.className = 'particle';

            particle.style.left = Math.random() * window.innerWidth + 'px';

            particle.style.top = Math.random() * window.innerHeight + 'px';

            particle.style.animation = `sparkleMove ${3 + Math.random() * 2}s ease-in-out infinite`;

            particlesContainer.appendChild(particle);

            

            setTimeout(() => {

                particle.remove();

            }, 5000);

        }



        function startParticles() {

            setInterval(createParticle, 300);

        }

    </script>

</body>

</html>
