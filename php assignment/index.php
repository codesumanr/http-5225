<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header>
        <?php
        include('reusables/nav.php');
        ?>
    </header>

    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col" style="padding: 30px;">
                        <h1>Welcome to the Library</h1>
                        <p>Explore our collection of books.</p>
                        <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
                    </div>
                </div>

                <div class="row">
                    <?php
                    include('reusables/connection.php');
                    ?>

                    <?php
                    $query = "SELECT * FROM books";
                    $books = mysqli_query($connect, $query);

                    foreach ($books as $book) {
                        echo '<div class="col-md-4">
                                <div class="card book-card">
                                    <img src="images/' . $book['cover_image'] . '" class="card-img-top" alt="Cover of ' . $book['title'] . '">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $book['title'] . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Author: ' . $book['author'] . '</h6>
                                        <h6 class="card-subtitle mb-2">Genre: ' . $book['genre'] . '</h6>
                                        <p class="card-text">' . $book['description'] . '</p>
                                        <p class="card-text p-text">Published Year: ' . $book['published_year'] . '</p>
                                        <form action="book_details.php" method="GET">
                                            <input type="hidden" name="book_id" value="' . $book['id'] . '">
                                            <button type="submit" class="btn btn-submit">View Details</button>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <?php
    include('reusables/footer.php');
    ?>

</body>
</html>