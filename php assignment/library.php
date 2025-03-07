<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library | Book Details</title>
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

                <?php
                // Get the book ID from the query parameter
                $book_id = $_GET['book_id'];
                include('reusables/connection.php');

                // Fetch the book details
                $query = "SELECT * FROM books WHERE id = '$book_id'";
                $book = mysqli_query($connect, $query);
                $book_details = mysqli_fetch_assoc($book);

                if ($book_details) {
                    echo '<div class="row">
                            <div class="col" style="padding: 30px;">
                                <h1>' . $book_details['title'] . '</h1>
                                <h6 class="text-muted">By ' . $book_details['author'] . '</h6>
                            </div>
                          </div>';

                    echo '<div class="row">
                            <div class="col-md-4">
                                <img src="images/' . $book_details['cover_image'] . '" class="img-fluid" alt="Cover of ' . $book_details['title'] . '">
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $book_details['title'] . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Author: ' . $book_details['author'] . '</h6>
                                        <h6 class="card-subtitle mb-2">Genre: ' . $book_details['genre'] . '</h6>
                                        <p class="card-text">' . $book_details['description'] . '</p>
                                        <p class="card-text"><strong>Published Year:</strong> ' . $book_details['published_year'] . '</p>
                                    </div>
                                </div>
                            </div>
                          </div>';
                } else {
                    echo '<div class="row">
                            <div class="col" style="padding: 30px;">
                                <h1>Book Not Found</h1>
                                <p>The book you are looking for does not exist.</p>
                            </div>
                          </div>';
                }
                ?>
            </div>
        </div>
    </main>

    <?php
    include('reusables/footer.php');
    ?>

</body>
</html>