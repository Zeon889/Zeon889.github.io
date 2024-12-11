<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Work - Zeon Obert</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="images/ProfilePict.jpg" alt="Profile Picture" />
            <h1>Zeon Obert</h1>
            <br />
            <h3><a href="ProfilePage.html">Home</a></h3>
            <h3><a href="MyWork.php">My Work</a></h3>
            <h3><a href="Contact.html">Contact</a></h3>

        </div>
        <div class="right" style="align-content:center">
            <div class="content">
            <h1 class="Header" style="text-align:center">My Work</h1>

            <table class="work" style="width:100%">
                <tr>
                    <th style="width:33%; height:100px">Visibility Limited</th>
                    <td colspan="2">
                        Visibility Limited is a game I am working with 8 others to create for UW - Stout's Winter SGX event.
                        We have 12 weeks to create and polish before we showcase what we have created.
                        I am the programming lead within the team.
                        I specifically have worked on the starting screen, the pause menu, shadows, and room collisions.
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td><img id="VisImg1" src="images/VisLim.png" alt="Visibility Limited Main Menu" width="278" height="200"></td>
                    <td><img id="VisImg2" src="images/GamePause.png" alt="Visibility Limited Pause Menu" width="278" height="200"></td>
                    <td><img id="VisImg3" src="images/Flashlight.png" alt="Visibility Limited, Lights and Shadows Example" width="278" height="200"></td>
                </tr>
                <tr id="description">
                    <td style="font-size:12px; font-style:italic">Visibility Limited Main Menu</td>
                    <td style="font-size:12px; font-style:italic">Visibility Limited Pause Menu</td>
                    <td style="font-size:12px; font-style:italic">Visibility Limited, Lights and Shadow Example</td>
                </tr>
                <tr>
                    <td><img id="VisScp1" src="images/DialogScript.png" alt="Visibility Limited Character Dialog Script" width="278" height="200"></td>
                    <td><img id="VisScp2" src="images/MenuScript.png" alt="Visibility Limited Menu Spript" width="278" height="200"></td>
                    <td><img id="VisScp3" src="images/RespawnScript.png" alt="Visibility Limited Respawn Corountine" width="278" height="200"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-style:italic">Visibility Limited Character Dialog Script</td>
                    <td style="font-size:12px; font-style:italic">Visibility Limited Menu Spript</td>
                    <td style="font-size:12px; font-style:italic">Visibility Limited Respawn Coroutine</td>
                </tr>
            </table>
            <br />
            <table class="work">
                <tr>
                    <th style="width:33%; height: 100px">Web Programming</th>
                    <td colspan="2">
                        I am taking a Web and Internet Programming course where I am creating websites and coding them completely
                        by hand. In this course I'm using HTML, CSS, PHP, SQL, and Java. And fun fact, this whole website was created my me!
                    </td>
                </tr>
                <tr>
                    <td><img id="CSImg1" src="images/AboutMe1.png" alt="About Me Page" width="278" height="200"></td>
                    <td><img id="CSImg2" src="images/BracletShop.png" alt="Braclet Shop Page" width="278" height="200"></td>
                    <td><img id="CSImg3" src="images/Form.png" alt="Braclet Shop Submit Form" width="278" height="200"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-style:italic">About Me Page</td>
                    <td style="font-size:12px; font-style:italic">Braclet Shop Page</td>
                    <td style="font-size:12px; font-style:italic">Braclet Shop Submit Form</td>
                </tr>
                <tr>
                    <td><img id="CSScp1" src="images/AboutMe.png" alt="About Me HTML" width="278" height="200"></td>
                    <td><img id="CSScp2" src="images/MoviePhp.png" alt="Movie Review PHP" width="278" height="200"></td>
                    <td><img id="CSScp3" src="images/ShopCSS.png" alt="Braclet Shop CSS" width="278" height="200"></td>
                </tr>
                <tr>
                    <td style="font-size:12px; font-style:italic">About Me HTML</td>
                    <td style="font-size:12px; font-style:italic">Movie Review PHP</td>
                    <td style="font-size:12px; font-style:italic">Braclet Shop CSS</td>
                </tr>
                <tr></tr>
            </table>
            <br />

            <!-- Query Text Box -->
            <table style="text-align:center">
                <tr>
                    <td>
                        <form method="GET" action="">
                            <label for="customQuery">SQL Query:</label><br />
                            <textarea id="customQuery" name="customQuery" placeholder="Enter your SQL query here..." rows="4" cols="50"><?php echo htmlspecialchars($customQuery); ?></textarea>
                            <br />
                            <button type="submit">Run Query</button>
                        </form>
                    </td>
                    <td><img id="sql" src="images/SQLDataSS.png" alt="About Me HTML" width="278" height="200"></td>
                <tr>
            </table>
            <br />
            <h3>Favorite Music Database</h3>
            <table class="schema" border="1">
                <tr><th>Table Names</th>
                    <th>Fields (columns)</th>
                </tr>
                <tr><td>Song</td>
                    <td>id, song_title, song_year, genre_id, band_id</td>
                </tr>
                <tr><td>Genre</td>
                    <td>genre_id, genre_name</td>
                </tr>   
                <tr><td>Album</td>
                    <td>album_id, song_id, band_id, album_title, album_songamount</td>
                </tr>
                <tr><td>Band</td>
                    <td>band_id, band_name</td>
                </tr>
                <tr><td>Band_Albums</td>
                    <td>id, band_id1, album1, album2, album3, album4, album5, album6, album7</td>
                </tr>
                <tr><td>Members</td>
                    <td>id, first_name, last_name, band_id</td>
                </tr>
            </table>

<?php
// Database connection
$servername = "sql3.freemysqlhosting.net";
$username = "sql3749885";
$password = "R6zRFzJHn8";
$dbname = "sql3749885";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize query
$customQuery = isset($_GET['customQuery']) ? trim($_GET['customQuery']) : '';
$queryResults = [];

// If a custom SQL query is provided, execute it
if (!empty($customQuery)) {
    try {
        // Run the custom query
        $result = $conn->query($customQuery);

        // If the query returns rows, fetch them
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $queryResults[] = $row;
            }
        }
    } catch (Exception $e) {
        $error = "Error executing query: " . htmlspecialchars($e->getMessage());
    }
}
?>


<!-- Results Table -->
<h3>Search Results</h3>
<?php if (!empty($queryResults)): ?>
    <table class="results" border="1">
        <thead>
            <tr>
                <th>Song Title</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Band</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($queryResults as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['song_title']); ?></td>
                    <td><?php echo htmlspecialchars($row['song_year']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['band_id']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No results found for "<?php echo htmlspecialchars($search); ?>".</p>
<?php endif; ?>


            <br />
            <p>I will add classes and projects over time, this is my most updated work</p>
            <br />
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    </div>
    
<script>
    const links = document.querySelectorAll("a");

    // Get current URL
    const currentURL = window.location.href;

    // Loop through the links and add 'active' class to the matching link
    links.forEach(link => {
        if (link.href === currentURL) {
            link.classList.add("active");
        }
    });

    const modal = document.getElementById("myModal");
    const modalImg = document.getElementById("img01");
    const caption = document.getElementById("caption");
    const images = document.querySelectorAll("img");

    images.forEach(img => {
        img.addEventListener("click", () => {
            modal.style.display = "block";
            modalImg.src = img.src;
            caption.innerText = img.alt;
        });
    });

    const closeModal = document.querySelector(".close");
    closeModal.onclick = () => {
        modal.style.display = "none";
    };

</script>
</body>
</html>

