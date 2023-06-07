<?php
session_start();
if (!isset($_SESSION['_loggedIn']) || $_SESSION['_loggedIn'] === false) {
    header('location:landingPage.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="../carousel.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../index.js" defer></script>
    <title>Document</title>
</head>

<?php require 'components/header.php' ?>

<body class="enableSnap">
    <main class="snap bg-pri">
        <div class="carousel">
            <div class="carousel_inner">
                <img src="../images/left.svg" class="lBtn carousel_btn" alt="">
                <img src="../images/right.svg" class="rBtn carousel_btn" alt="">
                <div class="carousel_images">
                    <img src="../images/OP.webp" alt="" class="image" />
                    <img src="../images/B.webp" alt="" class="image" />
                    <img src="../images/N.jpg" alt="" class="image" />
                    <img src="../images/CM.webp" alt="" class="image" />
                    <img src="../images/DS.webp" alt="" class="image" />
                </div>
            </div>
        </div>

        <div class="details">
            <div class="wrapper">

                <div class="op">
                    <h1>One Piece</h1>
                    <h3>Description:</h3>
                    <p>Gol D. Roger, a man referred to as the "Pirate King," is set to be executed by the World Government. But just before his demise, he confirms the existence of a great treasure, One Piece, located somewhere within the vast ocean known as the Grand Line. Announcing that One Piece can be claimed by anyone worthy enough to reach it, the Pirate King is executed and the Great Age of Pirates begins.</p>
                    <p>Twenty-two years later, a young man by the name of Monkey D. Luffy is ready to embark on his own adventure, searching for One Piece and striving to become the new Pirate King. Armed with just a straw hat, a small boat, and an elastic body, he sets out on a fantastic journey to gather his own crew and a worthy ship that will take them across the Grand Line to claim the greatest status on the high seas.</p>

                    <p>Note:</p>
                    <p>Because a takedown notice was sent to MangaDex from the owners of this series, English fan translations of One Piece are unable to be posted at this time. The series can be read in its entirety at the official Shonen Jump website, with the first and latest three chapters available at any time and the rest accessible with a Shonen Jump membership (which costs about $2 a month and can be accessed via a VPN if you are outside the US). The three most recent chapters can also be read on MangaPlus for free by clicking the chapter links below.</p>
                    <p>
                        The Best-Selling Manga in History
                        Won the 41st Japan Cartoonists Association Award Grand Prize alongside Neko Darake in 2012
                        Received the Kumamoto Prefecture Honorary Prize in 2018
                    </p>
                    <h3>More Info:</h3>
                    <p>Artists: Oda Eiichiro</p>
                    <p>Authors: Oda Eiichiro</p>
                    <p>Genres: Action, Adventure, Award Winning, Comedy, Ecchi, Fantasy, Historical, Mystery, Psychological, Supernatural, Tragedy, Gore, Crime, Animals, Magic, Military, Monsters</p>
                    <p>Publishers: Shueisha</p>
                </div>
                <div class="B">
                    <h1>Bleach</h1>
                    <h3>Description:</h3>
                    <p>Ichigo Kurosaki has always been able to see ghosts, but this ability doesn't change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, an evil spirit that preys on humans who display psychic energy, Rukia attempts to lend Ichigo some of her powers so that he can save his family, but much to her surprise, Ichigo absorbs every last drop of her energy.</p>
                    <p>Now a full-fledged Soul Reaper himself, Ichigo quickly learns that the world he inhabits is one full of dangerous spirits, and along with Rukia, who is slowly regaining her powers, it's Ichigo's job to both protect the innocent from Hollows and to help the spirits themselves find peace.</p>
                    <p>Won the 50th Shogakukan Manga Award for Shonen</p>
                    <p>ANN link for the various anime, movies, OAVs, etc.</p>
                    <p>Alternate Official English</p>

                    <h3>More Info</h3>
                    <p>Artists: Kubo Tite</p>
                    <p>Authors: Kubo Tite</p>
                    <p>Genres: Action, Adventure, Award Winning, Comedy, Drama, Supernatural</p>
                    <p>Publishers: Shueisha</p>
                </div>
                <div class="N">
                    <h1>Naruto</h1>
                    <h3>Description</h3>
                    <p>Before Naruto's birth, a great demon fox had attacked the Hidden Leaf Village. The 4th Hokage from the leaf village sealed the demon inside the newly born Naruto, causing him to unknowingly grow up detested by his fellow villagers. Despite his lack of talent in many areas of ninjutsu, Naruto strives for only one goal: to gain the title of Hokage, the strongest ninja in his village. Desiring the respect he never received, Naruto works toward his dream with fellow friends Sasuke and Sakura and mentor Kakashi as they go through many trials and battles that come with being a ninja.</p>

                    <p>More Info</p>
                    <p>Artists: Kishimoto Masashi</p>
                    <p>Authors: Kishimoto Masashi</p>
                    <p>Genres: Action, Adventure, Comedy, Drama, Fantasy, Martial Arts, Ninja</p>
                    <p>Publishers: Shueisha</p>
                </div>
                <div class="CM">
                    <h1>Chainsaw Man</h1>
                    <h3>Description</h3>
                    <p>Broke young man + chainsaw dog demon = Chainsaw Man!</p>

                    <p>The name says it all! Denji's life of poverty is changed forever when he merges with his pet chainsaw dog, Pochita! Now he's living in the big city and an official Devil Hunter. But he's got a lot to learn about his new job and chainsaw powers!</p>

                    <p>More Info</p>
                    <p>Artists: Fujimoto Tatsuki</p>
                    <p>Authors: Fujimoto Tatsuki</p>
                    <p>Genres: Action, Award Winning, Comedy, Ecchi, Horror, Supernatural, Gore, Demons, Monster Girls, Monsters, Police, Survival</p>
                    <p>Publishers: Shueisha</p>
                </div>
                <div class="DS">
                    <h1>Demon Slayer</h1>
                    <h3>Description</h3>
                    <p>Since ancient times, rumors have abounded of man-eating demons lurking in the woods. Because of this, the local townsfolk never venture outside at night. Legend has it that a demon slayer also roams the night, hunting down these bloodthirsty demons.</p>
                    <p>Ever since the death of his father, Tanjirou has taken it upon himself to support his mother and five siblings. Although their lives may be hardened by tragedy, they've found happiness. But that ephemeral warmth is shattered one day when Tanjirou finds his family slaughtered and the lone survivor, his sister Nezuko, turned into a demon. Adding to this sorrow, a demon hunter named Tomioka Giyuu arrived and was about to finish Nezuko off, but to his surprise she and Tanjiro started to protect each other. Seeing this oddity and Tanjiro's promising fighting skills, Giyuu decides to send them to his old mentor to be trained.</p>
                    <p>So begins Tanjiro's life as a demon hunter, bound on a quest to cure his sister and find the one who murdered his entire family.</p>

                    <p>MangaPlus: https://mangaplus.shueisha.co.jp/titles/100009</p>

                    <p>More Info</p>
                    <p>Artists: Gotouge Koyoharu</p>
                    <p>Authors: Gotouge Koyoharu</p>
                    <p>Genres: Action, Adventure, Comedy, Drama, Historical, Martial Arts, Supernatural, Tragedy, Demons</p>
                    <p>Publishers: Shueisha</p>
                </div>
            </div>
        </div>
    </main>

    <section class="top snap w-100 h-50">
        <div class="top_carousel">
            <div class="l_top top_btn"><img src="../images/left.svg" alt=""></div>
            <div class="r_top top_btn"><img src="../images/right.svg" alt=""></div>
            <div class="top_carousel_images">
                <img src="../images/Top/6znoE.webp" alt="" class="top_image">
                <img src="../images/Top/7qdXk.webp" alt="" class="top_image">
                <img src="../images/Top/dyJez.webp" alt="" class="top_image">
                <img src="../images/Top/K7ND8.webp" alt="" class="top_image">
                <img src="../images/Top/r2xa1.webp" alt="" class="top_image">
                <img src="../images/Top/WGw5Q.webp" alt="" class="top_image">
                <img src="../images/Top/spPKT5UVJAdSJ.webp" alt="" class="top_image">
            </div>
        </div>
    </section>

    <section class="bg-dark w-100">
        <h1 class="text-white px-5 py-3 text-center">Manga List</h1>
        <div class="content_grid m-3">
            <?php
            require 'connect.php';
            $contentQuery = "SELECT title,cover FROM manga";
            $executeQuery = mysqli_query($conn, $contentQuery);
            while ($row = mysqli_fetch_assoc($executeQuery)) {
                $title = $row['title'];
                $cover = $row['cover'];
                echo "
                    <div class='p-3'>
                    <img src='../covers/$cover' alt=''>
                    <p>$title</p>
                    </div>
                ";
            }
            ?>
        </div>
    </section>


</body>

</html>