<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="flashcard.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet">
    <title>Flash Cards</title>

    <style>
        .swiper {
            width: 480px;
            height: 640px;
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-size: 28px;
            font-weight: bold;
            color: #fff;
            background-color: #9BB8CD;
            text-align:center; 
            padding-left:30px;
            padding-right:30px;
        }
    </style>
</head>

<body>
    <!-- container -->
    <div class="container">
        <div class="content-container">
            <div class="slide-body">
                <div class="slide-container">
                    <div class="slide-content">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php

                                $isbn = $_POST['selectedisbn'];
                                // connect to db and fetch the ISBN
                                $link = mysqli_connect('localhost', 'root', '', 'cse309_final_project');
                                $queryFetchBook = "SELECT * FROM `word` WHERE `bookIsbn` = '$isbn'";

                                $result = mysqli_query($link, $queryFetchBook);

                                while ($row = mysqli_fetch_array($result)):
                                    ;
                                    $word = $row[2];
                                    $meaning = $row[3];
                                    echo
                                        '<div class="swiper-slide">Word: ' . $word . '<br><br>Meaning: ' . $meaning . '.</div>';
                                endwhile;
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            effect: "cards",
            grabCursor: true,
        });
    </script>

    <!-- <script>
        fetch('https://api.dictionaryapi.dev/api/v2/entries/en/'.$row).then((data) => {
            console.log(data);
        })
    </script> -->
</body>

</html>