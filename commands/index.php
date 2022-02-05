<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Mizuki">
    <meta property="og:url" content="https://mizuki.bot/">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Improve your Discord-server with Mizuki">
    <meta property="og:locale" content="de_DE">
    <meta property="og:locale:alternate" content="de_DE">
    <meta property="og:site_name" content="Mizuki Discord Bot">
    <meta property="og:image" content="https://mizuki.bot/img/logo.png">
    <meta name="theme-color" content="#e973e1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css?v1">
    <link rel="stylesheet" href="assets/mobile.css?v1">
    <link rel="icon" type="image/png" href="assets/img/MizukiComic.png" sizes="25x25">
    <link href="https://rawcdn.githack.com/hung1001/font-awesome-pro/0ac23ca/css/all.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <title>Mizuki</title>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">
                <img src="assets/img/logo.jpg" alt="" width="30" height="30" class="rounded-circle"> Mizuki
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../"><i class="fas fa-home"></i> <strong>HOME</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://discord.gg/gqn4WwqNHk"><i class="far fa-question-circle"></i> <strong>SUPPORT</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <script>
        function search() {
            var input, filter, cards, cardContainer, h5, title, i;
            input = document.getElementById("search");
            filter = input.value.toUpperCase();
            cardContainer = document.getElementById("commands");
            cards = cardContainer.getElementsByClassName("card2");
            for (i = 0; i < cards.length; i++) {
                title = cards[i].querySelector(".card-body h5.card-title");
                if (title.innerText.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>

    <input type="text" class="search" id="search" class="form-control" onkeyup="search()" placeholder="Search for command...">

    <div class="commands container">
        <br>
        <div class="row" id="commands">

            <h2 id="cmd-title" class="text-center">» Moderator • Commands «</h2>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!clear</h5>
                    <div class="card-description">
                        <p class="card-text">Clears the chat</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!say</h5>
                    <div class="card-description">
                        <p class="card-text">Send a message with the bot</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!survay</h5>
                    <div class="card-description">
                        <p class="card-text">Create a survey</p>
                    </div>
                </div>
            </div>

            <!--<div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!kick</h5>
                    <div class="card-description">
                        <p class="card-text">Kick a user of your Discord server</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!mute</h5>
                    <div class="card-description">
                        <p class="card-text">Mute a user of your Discord server</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!ban</h5>
                    <div class="card-description">
                        <p class="card-text">Ban a user of your Discord server</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!unban</h5>
                    <div class="card-description">
                        <p class="card-text">Unban a user of your Discord server</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!unmute</h5>
                    <div class="card-description">
                        <p class="card-text">Unmute a user of your Discord server</p>
                    </div>
                </div>
            </div>-->

            <!--<h2 id="cmd-title" class="text-center">» Setup • Commands «</h2>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!setup</h5>
                    <div class="card-description">
                        <p class="card-text">Configure the bot for your needs</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!setupedit</h5>
                    <div class="card-description">
                        <p class="card-text">Edit your configuration</p>
                    </div>
                </div>
            </div> -->



            <h2 id="cmd-title" class="text-center">» Anime • Commands «</h2>



            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!love</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you love something</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!cry</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you are crying</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!clap</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you want to clap</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!hug</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you hug somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!angry</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you are angry</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!bite</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you bite something</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!pat</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you pet somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!hi</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you greet somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!miss</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you miss somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!sad</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you are sad</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!poke</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you poke somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!bye</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you say goodbye</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!lol</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you laugh</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!punch</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you punch somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!tickle</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you tickle somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!sleep</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you sleep</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!blush</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you are blushing</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!eat</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you eat</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!high5</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you give a high5 to somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!cuddle</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you cuddle somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!thx</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you thank somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!slap</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you slap somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!kiss</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you kiss somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!smile</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you smile</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!lick</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you lick somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!shocked</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you are shocked</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!handhold</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you handhold somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!kill</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you kill somebody</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!yeet</h5>
                    <div class="card-description">
                        <p class="card-text">Show that you yeet</p>
                    </div>
                </div>
            </div>



            <h2 id="cmd-title" class="text-center">» Fun • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!meme</h5>
                    <div class="card-description">
                        <p class="card-text">Get a random meme sent to you</p>
                    </div>
                </div>
            </div>
            <!--<div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!slot</h5>
                    <div class="card-description">
                        <p class="card-text">Play a game</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!nitro</h5>
                    <div class="card-description">
                        <p class="card-text">Get Discord Nitro for free</p>
                    </div>
                </div>
            </div>-->
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!cat</h5>
                    <div class="card-description">
                        <p class="card-text">Get a random picture of a cat</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!dog</h5>
                    <div class="card-description">
                        <p class="card-text">Get a random picture of a dog</p>
                    </div>
                </div>
            </div>


            <!--<h2 id="cmd-title" class="text-center">» Games • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!daily</h5>
                    <div class="card-description">
                        <p class="card-text">Get a daily reward</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!spin</h5>
                    <div class="card-description">
                        <p class="card-text">Spin a round</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!flip</h5>
                    <div class="card-description">
                        <p class="card-text">Throw a coin</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!work</h5>
                    <div class="card-description">
                        <p class="card-text">Work and earn money</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!watch</h5>
                    <div class="card-description">
                        <p class="card-text">Watch an anime card</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!cardmarket</h5>
                    <div class="card-description">
                        <p class="card-text">Look at the cardmarket</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!marry</h5>
                    <div class="card-description">
                        <p class="card-text">Marry something or somebody</p>
                    </div>
                </div>
            </div>-->


            <h2 id="cmd-title" class="text-center">» Music • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!play</h5>
                    <div class="card-description">
                        <p class="card-text">Play some music</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!skip</h5>
                    <div class="card-description">
                        <p class="card-text">Skip a song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!volume</h5>
                    <div class="card-description">
                        <p class="card-text">Change the volume of the song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!pause</h5>
                    <div class="card-description">
                        <p class="card-text">Pause a song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!resume</h5>
                    <div class="card-description">
                        <p class="card-text">Resume the song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!stop</h5>
                    <div class="card-description">
                        <p class="card-text">Stop the song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!nowplaying</h5>
                    <div class="card-description">
                        <p class="card-text">Display the information of the current song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!filter</h5>
                    <div class="card-description">
                        <p class="card-text">Add a filter to the current song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!queue</h5>
                    <div class="card-description">
                        <p class="card-text">Display the songs in the queue</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!queueclear</h5>
                    <div class="card-description">
                        <p class="card-text">Clear the songs in the queue</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!shuffle</h5>
                    <div class="card-description">
                        <p class="card-text">Mish a song</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!loop</h5>
                    <div class="card-description">
                        <p class="card-text">Repeat a song</p>
                    </div>
                </div>
            </div>


            <h2 id="cmd-title" class="text-center">» Giveaway • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!start</h5>
                    <div class="card-description">
                        <p class="card-text">Start a giveaway</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!reroll</h5>
                    <div class="card-description">
                        <p class="card-text">Reroll a person</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!end</h5>
                    <div class="card-description">
                        <p class="card-text">End a giveaway</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!edit</h5>
                    <div class="card-description">
                        <p class="card-text">Edit a Giveaway</p>
                    </div>
                </div>
            </div>

            <!--<h2 id="cmd-title" class="text-center">» Utility • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!vote</h5>
                    <div class="card-description">
                        <p class="card-text">Vote for the bot</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!userinfo</h5>
                    <div class="card-description">
                        <p class="card-text">Display user-information</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!serverinfo</h5>
                    <div class="card-description">
                        <p class="card-text">Display server-information</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!ping</h5>
                    <div class="card-description">
                        <p class="card-text">Ping the bot</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!debug</h5>
                    <div class="card-description">
                        <p class="card-text">Debug the bot</p>
                    </div>
                </div>
            </div>

            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!setprefix</h5>
                    <div class="card-description">
                        <p class="card-text">Set a custom prefix</p>
                    </div>
                </div>
            </div>-->

            <h2 id="cmd-title" class="text-center">» NSFW • Commands «</h2>


            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!rule34</h5>
                    <div class="card-description">
                        <p class="card-text">Display a rule34 picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!yandere</h5>
                    <div class="card-description">
                        <p class="card-text">Display a yandere picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!konachan</h5>
                    <div class="card-description">
                        <p class="card-text">Display a konachan picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!danbooru</h5>
                    <div class="card-description">
                        <p class="card-text">Display a danbooru picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!safebooru</h5>
                    <div class="card-description">
                        <p class="card-text">Display a safebooru picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!boobs</h5>
                    <div class="card-description">
                        <p class="card-text">Display a boobs picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!realgirls</h5>
                    <div class="card-description">
                        <p class="card-text">Display a realgirls picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!butt</h5>
                    <div class="card-description">
                        <p class="card-text">Display a butt picture</p>
                    </div>
                </div>
            </div>
            <div class="card2" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">m!cosplay</h5>
                    <div class="card-description">
                        <p class="card-text">Display a cosplay picture</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="end">
        <svg class="end-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#1D1F21" fill-opacity="1" d="M0,160L34.3,133.3C68.6,107,137,53,206,64C274.3,75,343,149,411,181.3C480,213,549,203,617,213.3C685.7,224,754,256,823,234.7C891.4,213,960,139,1029,106.7C1097.1,75,1166,85,1234,74.7C1302.9,64,1371,32,1406,16L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
        <div class="end-img"><img src="assets/img/mizukibot.png" alt="..."></div>
        <div class="end-info">The CEOs of the bot are Unerwarteter & Erik05Master. <br> This logo is inspired by "Miku Nakano" from the anime <br> "The Quintessential Quintuplets", produced by "Tezuka Productions".</div>

        <div class="contact-us">Contact Us
            <div class="contact-us-text"><a href="#">Imprint</a></div>
            <div class="contact-us-text"><a href="#">Service & Privacy</a></div>
            <div class="contact-us-text"><a target="_blank" href="https://discord.com/invite/gqn4WwqNHk">Discord</a></div>
        </div>

        <div class="extras">Extras
            <div class="extras-text"><a href="https://nosync.xyz/">API</a></div>
            <div class="extras-text"><a href="https://top.gg/bot/823896129367703612">Vote</a></div>
        </div>

        <div class="partners">Partner
            <div class="partners-text"><a href="https://nosync.xyz/">NoSync</a></div>
            <div class="partners-text"><a href="https://ffmradio.eu/">FFMRADIO</a></div>
        </div>

        <div class="social">Social Media
            <div class="social-text"><a><i class="fab fa-twitter"></i></a> <a><i class="fab fa-youtube"></i></a> <a><i class="fab fa-instagram"></i></a></div>
        </div>

        <div class="end-copy">&copy Mizuki Bot 2021 &lt/&gt with ❤ by Erik05Master#3791 & Unerwarteter#5330</div>
    </div>

</body>

</html>