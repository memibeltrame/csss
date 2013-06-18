<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content=" minimum-scale=1.0, maximum-scale=1.0, width=device-width; user-scalable=no">
        <title>CSSS - Slidemaker</title>
    <link href="slidemaker.css" media="screen" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="everything">
        <h1>CSSS - Slidemaker</h1>
        <div class="claim">The easy way to make <br class="hideOnDesktop">a simple slidedeck.</div>
        <br>
        <p class="claim instr">Enter Slidetexts&nbsp;&nbsp;&nbsp;<br class="hideOnDesktop">→&nbsp;&nbsp;&nbsp; Get Slides&nbsp;&nbsp;&nbsp;<br class="hideOnDesktop">→&nbsp;&nbsp;&nbsp;Relax.</p>
        <br>

        Enter Slides, every Slide Separated by a blank line<br>
        <br>
        Slidemaker supports 3 types of slides so far.
        <ul>
            <li class="">Titleslides</li>
            <li class="">Title and Subtitle Slides</li>
            <li class="">Bullet point slides</li>
        </ul>
        <form action="slides.php" method="POST"  target="_blank">
            <textarea name="slides" id="slides">
This is Slidemaker

Simlpy make HTML Slides.
Like, yes... magic!

Why Slidemaker?
3 Good Reasons:
- sometimes you need stuff *fast*
- fondling PPT, Keynote or HTML is not fun
- it has to be *simple and yes, fast*
            </textarea>
                <input type="submit" class="button" name="submit" value="Get Slides">
        </form>
    </div>
    <div class="footer">
    This is a Proof of Concept. <a href="https://github.com/memibeltrame/csss" class="">Code on Github</a><br><br>
    CSSS-Slidemaker is based on <a href="https://github.com/LeaVerou/CSSS" class="">Lea Verou's CSS-based SlideShow System CSSS</a> <br>

    Ping me on <a href="http://twitter.com/bratwurstkomet">Twitter for feedback</a>
    </div>
<!-- PUT JS HERE -->
</body>