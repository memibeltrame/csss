<?php
if(!empty($_POST['slides'])){

    $slides = explode("\r\n\r\n", trim($_POST['slides']));

} else {

echo "Post slides pls";
die();

}


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>CSSS-Slidemaker - The fastest way to make a slide deck</title>

    <link href="slideshow.css" rel="stylesheet" />
    <link href="theme.css" rel="stylesheet" />
    <link href="talk.css" rel="stylesheet" />
    <script src="prefixfree.min.js"></script>
</head>
<body data-duration="10">
<!-- header
<header id="" class="slide">
    <h1>
        Text
    </h1>
    <p class="attribution">By Lea Verou</p>
</header>
-->

<section>
<?php foreach($slides as $s){

// analyze $s

    // Simple titles
    if( strpos($s, "\n") === false){?>

    <header class="slide">
        <h1 class="single"><?= $s; ?></h1>
    </header>

        <?php continue;
    }


    // Bullet lists
    if (strpos($s, "\n-") !== false){

        $bits = explode("\r\n", $s);?>

        <section class="slide" title="">
        <?php foreach($bits as $k => $b){
            //echo $k;
            if($k == 0){
                echo "<h2>" . $b ."</h2>";
                continue;
            }
            $pos = strpos($b, "-");
            if ($pos !== 0){
                echo "<p class=\"ulHeader\">" .$pos. $b ."</p>";
                continue;
            }
            $b = preg_replace("/- /", "", $b);
            $b = preg_replace("/\*(.*)\*/",'<strong>$1</strong>', $b );
            if (empty($ul) OR $ul == false){
                echo "<ul><li class=\"delayed current\">" . $b ."</li>";
                $ul = true;
            } else {
                echo "<li class=\"delayed\">" . $b ."</li>";
            }


        }
        echo "</ul></section>";
        $ul = false;
        continue;
    }


    // Title subtitle
    $suchmuster = '/\n/s';
    preg_match($suchmuster, $s, $treffer);

        if(count($treffer) == 1) {

    $bits = explode("\r\n", $s);?>

        <header class="slide">
            <h1 class=""><?= $bits[0]; ?>
            <small class=""><br><?= $bits[1]; ?></small></h1>
        </header>

    <?php } else { ?>

        <header class="slide">
            <p class=""><?= $s ;?></p>
        </header>
    <?php
    }
} ?>
</section>
<footer class="slide" title="The End">
<h2>Thank you!</h2>

</footer>

<script src="slideshow.js"></script>
<script src="plugins/css-edit.js"></script>
<script src="plugins/css-snippets.js"></script>
<script src="plugins/css-controls.js"></script>
<script src="plugins/code-highlight.js"></script>
<script>
var slideshow = new SlideShow();

var snippets = document.querySelectorAll('.snippet');
for(var i=0; i<snippets.length; i++) {
    new CSSSnippet(snippets[i]);
}

var cssControls = document.querySelectorAll('.css-control');
for(var i=0; i<cssControls.length; i++) {
    new CSSControl(cssControls[i]);
}
</script>

</body>
</html>