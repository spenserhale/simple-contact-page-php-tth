<?php

$name['first'] = 'Spenser';
$name['last'] = 'Hale';
$name['full'] = $name['first'] . ' ' . $name['last'];

$location['city'] = 'Santa Rosa';
$location['state'] = 'CA';
$location['full'] = $location['city'] . '. ' . $location['state'];

?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name['full']; ?> | Treehouse Profile</title>
      <link href="css/tth.css" rel="stylesheet" />
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.jpg" alt="<?php echo $name['full']; ?>">
      </div>
      <h1><?php echo $name['full']; ?></h1>
      <p><?php echo $location['full']; ?></p>
      <hr />
      <p>Web Developer</p>
      <hr />
      <ul class="social">
        <li><a href="https://twitter.com/spenser_hale"><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">

    <div class="grid-100">
        <div class="secondary-heading">
            <h2>133 Achievements</h2>
        </div>
    </div>
    <ul class="content-block-list">
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>PHP Data &amp; Structure</h3>
                <p>PHP Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 19, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="PHP Data &amp; Structure" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_basics_stage02.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Creating the Initial Screen Layout</h3>
                <p>Build a Simple Android App</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Sep 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Creating the Initial Screen Layout" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_Android_BuildASimple_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started with Android</h3>
                <p>Build a Simple Android App</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Sep 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started with Android" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_Android_BuildASimple_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Values and Units</h3>
                <p>CSS Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 30, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Values and Units" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_CSS_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Advanced Selectors</h3>
                <p>CSS Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 29, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Advanced Selectors" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_CSS_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Securing and Maintaining a MySQL Database</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Securing and Maintaining a MySQL Database" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage8.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>SQL Calculating, Aggregating and Other Functions</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="SQL Calculating, Aggregating and Other Functions" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Joining Relational Data Between Tables in SQL</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Joining Relational Data Between Tables in SQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Manipulating Schema with SQL</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Manipulating Schema with SQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage7.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Creating Tables and Manipulating Data with SQL</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Creating Tables and Manipulating Data with SQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Responsive Web Design and Testing</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Responsive Web Design and Testing" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage08.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Adding Pages to a Website</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Adding Pages to a Website" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage07.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Styling Web Pages and Navigation</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Styling Web Pages and Navigation" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage06.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Customizing Colors and Fonts</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 24, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Customizing Colors and Fonts" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage05.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>PHP Getting Started</h3>
                <p>PHP Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 22, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="PHP Getting Started" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_basics_stage01.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Relating Models</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Relating Models" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage08.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel CRUD</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel CRUD" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage07.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Validation &amp; Flash Messages</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Validation &amp; Flash Messages" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage06.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel Forms</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 20, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel Forms" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage05.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel &amp; Databases</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 19, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel &amp; Databases" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage04.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel Controllers</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 18, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel Controllers" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage03.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel Project Setup</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 18, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel Project Setup" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage02.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Laravel Getting Started</h3>
                <p>Laravel Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 18, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Laravel Getting Started" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_laravelbasics_stage01.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Reading Data from Databases with SQL</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  7, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Reading Data from Databases with SQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Installing MySQL Server and MySQL Workbench</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  6, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Installing MySQL Server and MySQL Workbench" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Introduction to Data, Databases and SQL</h3>
                <p>Database Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  5, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Introduction to Data, Databases and SQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Database_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Sharing a Website</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  3, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Sharing a Website" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage09.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Debugging HTML and CSS Problems</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  3, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Debugging HTML and CSS Problems" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage10.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>CSS: Cascading Style Sheets</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="CSS: Cascading Style Sheets" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/bagdes_html_howtobuildawebsite_stage04.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Creating HTML Content</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Creating HTML Content" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/bagdes_html_howtobuildawebsite_stage03.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>HTML First</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="HTML First" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/bagdes_html_howtobuildawebsite_stage02.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Beginning HTML and CSS</h3>
                <p>How to Make a Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Beginning HTML and CSS" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_html_howtomakeawebsite_stage01.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>WordPress Plugin Best Practices</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 21, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="WordPress Plugin Best Practices" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Posts and Pages in WordPress</h3>
                <p>How to Build a WordPress Blog Without Coding</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 14, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Posts and Pages in WordPress" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildBlog_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Blogging with WordPress Overview</h3>
                <p>How to Build a WordPress Blog Without Coding</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 14, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Blogging with WordPress Overview" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildBlog_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Building a WordPress.com Site</h3>
                <p>Great WordPress.com Websites </p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Building a WordPress.com Site" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_com_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started with WordPress.com</h3>
                <p>Great WordPress.com Websites </p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started with WordPress.com" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_com_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Color Theory</h3>
                <p>Aesthetic Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Color Theory" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Aesthetic_Color_Theory.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Principles</h3>
                <p>Aesthetic Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Principles" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Aesthetic_Principles.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Elements</h3>
                <p>Aesthetic Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Elements" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Aesthetic_Elements.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Moving Forward with UX</h3>
                <p>UX Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 13, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Moving Forward with UX" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_ux_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Limiting Results in Queries</h3>
                <p>Using PHP with MySQL</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Limiting Results in Queries" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_phpmysql_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Using Relationship Tables</h3>
                <p>Using PHP with MySQL</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Using Relationship Tables" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_phpmysql_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Filtering Input for Queries</h3>
                <p>Using PHP with MySQL</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Filtering Input for Queries" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_phpmysql_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Querying the Database</h3>
                <p>Using PHP with MySQL</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Querying the Database" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_phpmysql_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Connecting to MySQL</h3>
                <p>Using PHP with MySQL</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Connecting to MySQL" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_phpmysql_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Paginating a List: Model and View</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Paginating a List: Model and View" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage7.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Paginating a List: Controller</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Paginating a List: Controller" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Adding Search: Model</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Adding Search: Model" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage5b.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Adding Search: Controller &amp; View</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Adding Search: Controller &amp; View" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Refactoring the Codebase</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Refactoring the Codebase" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Cleaning URLs with Rewrite Rules</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Cleaning URLs with Rewrite Rules" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Cleaning URLs with Subfolders</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 12, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Cleaning URLs with Subfolders" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Tools UXers Use</h3>
                <p>UX Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 11, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Tools UXers Use" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_ux_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Integrating Validation Errors</h3>
                <p>Enhancing a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 10, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Integrating Validation Errors" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce2_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>JavaScript Numbers</h3>
                <p>JavaScript Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 10, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="JavaScript Numbers" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/JS_Numbers.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>How UXers Think</h3>
                <p>UX Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="How UXers Think" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_ux_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>What Do User Experience Designers Do?</h3>
                <p>UX Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="What Do User Experience Designers Do?" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_ux_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Chrome DevTools Basics</h3>
                <p>Website Optimization</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Chrome DevTools Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_chromeDev_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>DNS Basics</h3>
                <p>Technology Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="DNS Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DNSBasic_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Graphic Basics</h3>
                <p>Technology Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Graphic Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Graphic_Basics.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Workflows</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Workflows" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Working With Remote Repositories</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  9, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Working With Remote Repositories" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Merging</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  7, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Merging" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Branches</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  7, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Branches" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started With Git</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  7, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started With Git" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Why Version Control Matters</h3>
                <p>Git Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul  7, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Why Version Control Matters" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Git_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>What is User Experience (UX)?</h3>
                <p>UX Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jun  6, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="What is User Experience (UX)?" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_ux_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Widgets and Custom Menus</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>May 18, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Widgets and Custom Menus" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Custom Post Types and Fields</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Custom Post Types and Fields" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Customizing WordPress Themes</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Customizing WordPress Themes" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Local WordPress Development</h3>
                <p>Local WordPress Development</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr 26, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Local WordPress Development" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_Local_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>WordPress Themes</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr 15, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="WordPress Themes" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Installing Wordpress</h3>
                <p>How to Make a Website with WordPress</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr 15, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Installing Wordpress" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_BuildSites_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Presentation Skills</h3>
                <p>Soft Skills</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr  5, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Presentation Skills" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SoftSkills_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Important Skills For Professional Success</h3>
                <p>Soft Skills</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Apr  5, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Important Skills For Professional Success" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SoftSkills_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>PHP Inheritance &amp; Interfaces</h3>
                <p>Object-Oriented PHP Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Mar 31, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="PHP Inheritance &amp; Interfaces" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_objectorientedbasics_stage03.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>PHP Properties &amp; Methods</h3>
                <p>Object-Oriented PHP Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Mar 31, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="PHP Properties &amp; Methods" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_objectorientedbasics_stage02.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>PHP Objects and Classes</h3>
                <p>Object-Oriented PHP Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Mar 30, 2014</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="PHP Objects and Classes" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badge_php_objectorientedbasics_stage01.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Website Basics</h3>
                <p>Website Basics</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Nov 22, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Website Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>JavaScript Strings</h3>
                <p>JavaScript Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 28, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="JavaScript Strings" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/JS_Strings1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Introduction Variables</h3>
                <p>JavaScript Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 28, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Introduction Variables" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/JS_var.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Rails Deployment</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 28, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Rails Deployment" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage9.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Building the Profile Page</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 27, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Building the Profile Page" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage8.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Testing the Whole App</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 25, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Testing the Whole App" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage7.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Rails Routing</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 23, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Rails Routing" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Writing Tests</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 22, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Writing Tests" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Selectors</h3>
                <p>CSS Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 15, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Selectors" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_CSS_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Tables</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 14, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Tables" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Tables.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Forms</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 14, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Forms" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Forms.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Lists</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 14, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Lists" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Lists.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started with CSS</h3>
                <p>CSS Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 14, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started with CSS" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_CSS_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Objects</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 12, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Objects" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Objects.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Links</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 12, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Links" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Links.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Text</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Text" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Text.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Introduction</h3>
                <p>HTML</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Introduction" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/HTML_Basics.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Launching the Website</h3>
                <p>Build a Simple Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Launching the Website" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Styling Content</h3>
                <p>Build a Simple Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Styling Content" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Website Basics</h3>
                <p>Build a Simple Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Website Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Customizing Ruby on Rails Forms</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 10, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Customizing Ruby on Rails Forms" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Ruby on Rails Authentication</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct 10, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Ruby on Rails Authentication" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Rails Frontend Development</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  9, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Rails Frontend Development" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started With Rails</h3>
                <p>Build a Simple Ruby on Rails Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  9, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started With Rails" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_SimpleFacebook_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Installing Programs</h3>
                <p>Console Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  9, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Installing Programs" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Console_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Environment and Redirection</h3>
                <p>Console Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  9, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Environment and Redirection" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Console_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Console Processes</h3>
                <p>Console Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Console Processes" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Console_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Console Users and Permission</h3>
                <p>Console Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Console Users and Permission" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Console_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Moving Around in the Console</h3>
                <p>Console Foundations</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Moving Around in the Console" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_DD_Console_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Functions</h3>
                <p>Introduction to Programming</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Functions" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Intro_Programming_Functions.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Objects and Arrays</h3>
                <p>Introduction to Programming</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Objects and Arrays" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Intro_Programming_ObjectsArrays.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Control Structures</h3>
                <p>Introduction to Programming</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Control Structures" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Intro_Programming_ControlStructures.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Basics</h3>
                <p>Introduction to Programming</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Basics" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Intro_Programming_Basics.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Simple PHP Application: Wrapping Up The Project</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  6, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Simple PHP Application: Wrapping Up The Project" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage6.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Working with PHP Functions</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  6, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Working with PHP Functions" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage7.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Integrating With Paypal</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  5, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Integrating With Paypal" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Listing Inventory Items</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  5, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Listing Inventory Items" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Adding a Contact Form</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  4, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Adding a Contact Form" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Creating the Menu and Footer</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  3, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Creating the Menu and Footer" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Getting Started with PHP</h3>
                <p>Build a Simple PHP Application</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Oct  3, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Getting Started with PHP" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_eCommerce_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Corporate Structure</h3>
                <p>How to Start a Business (old)</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Sep 20, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Corporate Structure" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_StartBusiness_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Why Start a Business?</h3>
                <p>How to Start a Business (old)</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Sep 20, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Why Start a Business?" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_StartBusiness_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Preparing to Code WordPress Templates</h3>
                <p>How to Build a WordPress Theme</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug 11, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Preparing to Code WordPress Templates" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_Theme_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>WordPress Theme Functions</h3>
                <p>How to Build a WordPress Theme</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="WordPress Theme Functions" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_Theme_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>WordPress Theme Templates</h3>
                <p>How to Build a WordPress Theme</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  8, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="WordPress Theme Templates" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_Theme_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Content Strategy with WordPress</h3>
                <p>How to Build a WordPress Theme</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  5, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Content Strategy with WordPress" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WP_Theme_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Advanced Techniques</h3>
                <p>Build a Responsive Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  5, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Advanced Techniques" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland2_Stage5.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Responsive Design</h3>
                <p>Build a Responsive Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  5, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Responsive Design" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland2_Stage4.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Adaptive Design</h3>
                <p>Build a Responsive Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  4, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Adaptive Design" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland2_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Fluid Foundation</h3>
                <p>Build a Responsive Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  4, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Fluid Foundation" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland2_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Introduction to Responsive Web Design</h3>
                <p>Build a Responsive Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Aug  4, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Introduction to Responsive Web Design" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland2_Stage1.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Creating a Website Structure</h3>
                <p>Build a Simple Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jul 10, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Creating a Website Structure" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage3.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Text Editors and HTML</h3>
                <p>Build a Simple Website</p>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jun 29, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Text Editors and HTML" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/badges_WebsiteIsland1_Stage2.png" />
            </div>
        </div>
    </li>
    <li class="grid-50 tablet-grid-50">
        <div class="content-block">
            <div class="grid-70 tablet-grid-70 mobile-grid-70 content-meta">
                <strong>Achievement</strong>
                <h3>Newbie</h3>
                <div class="content-actions-container">
                    <span class="icon icon-complete"></span>
                    <strong>Achieved</strong>
                    <p>Jun 17, 2013</p>
                </div>
            </div>
            <div class="grid-30 tablet-grid-30 mobile-grid-30 achievement-hero">
                <img alt="Newbie" src="https://wac.A8B5.edgecastcdn.net/80A8B5/achievement-images/Generic_Newbie.png" />
            </div>
        </div>
    </li>
    </ul>
    </section>
  </body>
</html>