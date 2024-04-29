<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
    <link rel="stylesheet" href="./event-list.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <div class="container">
                <ul class="nav-links">
                    <li><a href="./../index.html">HOME</a></li>
                    <li><a href="/GroupProject/admin/admin.php">ADMIN</a></li>


                </ul>
                <div class="cont">
                    <ul class="nav-items">
                   
                    </ul>
                    <ul>
                        <div class="profile">
                            <img src="./../circle.png" alt="Profile Icon">
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="events-container">
        <div class="top-row">
            <div class="title">Events</div>
            <button class="add-event">Add Event</button> <!-- Add Event Button -->
        </div>

        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "event";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, date, description FROM events";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card' data-name='" . htmlspecialchars($row['name'], ENT_QUOTES) . "' data-description='" . htmlspecialchars($row['description'], ENT_QUOTES) . "' data-date='" . $row['date'] . "'>
                <div class='card-row'>
                    <div class='card-left-col'>
                        <img src='./icons/event-icon.png'>
                    </div>
                    <div class='card-right-col'>
                        <div class='event-title'>" . $row['name'] . "</div>
                        <div class='event-description'>" . $row['description'] . "</div>
                        <div class='event-date'>" . $row['date'] . "</div>
                    </div>
                </div>
              </div>";

            }
        } else {
            echo "0 results";
        }
        ?>


        <div id="eventModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <form action="add-event.php" method="post" class="event-form">
                    <h2>Add Event</h2>
                    <div class="form-group">
                        <label for="name">Event Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Event Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" required></textarea>
                    </div>

                    <button type="submit">Add Event</button>
                </form>
            </div>
        </div>


        <div id="viewEventModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Event Details</h2>
                <div class="form-group">
                    <label>Event Name:</label>
                    <div id="modalName"></div>
                </div>
                <div class="form-group">
                    <label>Event Date:</label>
                    <div id="modalDate"></div>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <div id="modalDescription"></div>
                </div>
            </div>
        </div>


    </div>


    <br><br><br>
    <div class="footer">
        <br><br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Get in Touch</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 E Colombo, Sri Lanka</p>
                            <p><i class="fa fa-envelope"></i>example@gmail.com</p>
                            <p><i class="fa fa-phone"></i>011-5681225</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Follow Us</h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Organization Info</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Volunteer Opportunities</h2>
                        <ul>
                            <li><a href="#">Opportunity 1</a></li>
                            <li><a href="#">Opportunity 2</a></li>
                            <li><a href="#">Opportunity 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer End-->

    <!--bottom footer start-->
    <footer class="bottom-footer">
        <p>&copy; 2024 Example | Designed by Example</p>
    </footer>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("eventModal");
        var btn = document.querySelector(".add-event");
        var span = document.getElementsByClassName("close-button")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.card');
        const modal = document.getElementById('viewEventModal');
        const closeModal = modal.querySelector('.close-button');
        const modalName = document.getElementById('modalName');
        const modalDate = document.getElementById('modalDate');
        const modalDescription = document.getElementById('modalDescription');

        cards.forEach(card => {
            card.addEventListener('click', function () {
                modalName.textContent = this.getAttribute('data-name');
                modalDate.textContent = this.getAttribute('data-date');
                modalDescription.textContent = this.getAttribute('data-description');
                modal.style.display = 'block';
            });
        });

        closeModal.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
    });

</script>


</html>
