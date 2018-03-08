<?php include 'includes/config.php';?>


<?php
//daily logic goes here:
if(isset($_GET['day']))
{//data in querystring, use it
    $day_of_week = $_GET['day'];
} else {//use current date
	$day_of_week = date('l');
}

switch($day_of_week) {
    case "Monday";
        $movie = "Coco";
        $movie_description = "Aspiring musician Miguel, confronted with his family's ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.";
        $movie_link = "http://www.imdb.com/title/tt2380307/?ref_=nv_sr_1";
        $image = "coco.jpg";
        $background_color = "#d994ea";
        break;
    case "Tuesday";
        $movie = "Toy Story";
        $movie_description = "A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy's room.";
        $movie_link ="http://www.imdb.com/title/tt0114709/?ref_=nv_sr_1";
        $image = "toy_story.jpg";
        $background_color = "#bcb5a3";
        break;
    case "Wednesday";
        $movie = "The Lego";
        $movie_description = "An ordinary LEGO construction worker, thought to be the prophesied as special, is recruited to join a quest to stop an evil tyrant from gluing the LEGO universe into eternal stasis.";
        $movie_link ="http://www.imdb.com/title/tt1490017/?ref_=nv_sr_3";
        $image = "the_lego.jpg";
        $background_color = "#a48aa2";
        break;
    case "Thursday";
        $movie = "How to Train Your Dragon";
        $movie_description = "A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.";
        $movie_link ="http://www.imdb.com/title/tt0892769/?ref_=nv_sr_2";
        $image = "how_to_train_your_dragon.jpg";
        $background_color = "#f5d6ba";
        break;
    case "Friday";
        $movie = "The Lion King";
        $movie_description = "Lion cub and future king Simba searches for his identity. His eagerness to please others and penchant for testing his boundaries sometimes gets him into trouble.";
        $movie_link ="http://www.imdb.com/title/tt0110357/?ref_=nv_sr_2";
        $image = "the_lion_king.jpg";
        $background_color = "#e4842e";
        break;
    case "Saturday";
        $movie = "Finding Nemo";
        $movie_description = "After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.";
        $movie_link = "http://www.imdb.com/title/tt0266543/";
        $image = "finding_nemo.webp";
        $background_color = "#0e7eb8";
        break;
    case "Sunday";
        $movie = "Minions";
        $movie_description = "Minions Stuart, Kevin, and Bob are recruited by Scarlet Overkill, a supervillain who, alongside her inventor husband Herb, hatches a plot to take over the world.";
        $movie_link = "http://www.imdb.com/title/tt2293640/";
        $image = "minions.png";
        $background_color ="#fde13e";
        break;
}
?>
<?php get_header()?>
    
    <h2><?=$title?></h2>
    
    <p><a href ="daily.php?day=Monday">Monday</a></p>
    <p><a href ="daily.php?day=Tuesday">Tuesday</a></p>
    <p><a href ="daily.php?day=Wednesday">Wednesday</a></p>
    <p><a href ="daily.php?day=Thursday">Thursday</a></p>
    <p><a href ="daily.php?day=Friday">Friday</a></p>
    <p><a href ="daily.php?day=Saturday">Saturday</a></p>
    <p><a href ="daily.php?day=Sunday">Sunday</a></p>

    <div class="column" id="main-content">
        <p>On <?=$day_of_week?>, we will be watching the movie "<?=$movie?>".</p>
        <p>
            <b>Synopsis:</b>
            <?=$movie_description?></p>
        <p>
            <b>More details:</b>
            <a href="<?=$movie_link?>">IMDB link</a>
        </p>
        <p>
            <b>Showtime:</b>
            <?=$day_of_week?> at 6 p.m.
        </p>
    </div>
    <div class="column" id="aside">
        <img src="image/<?=$image?>" alt="finding nemo style=" style="width: 100%";/>
    </div>

   
<?php get_footer()?>