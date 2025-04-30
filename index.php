<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>PHP Variables</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">FirstName?</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favoritepet">Favorite Pet?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>

            <?php 

            $author = "Mahatma Gandhi";
            
            // switch ($author){
            //     case "George Washington":
            //         echo "You have only one way to convince others, listen to them.";
            //         break;
            //     case "Abraham Lincoln":
            //         echo "Great men are ordinary men with extra ordinary determination.";
            //         break;
            //     case "Mahatma Gandhi":
            //         echo "To double your successes, you might have to double your failure rate.";
            //         break;
            //     default:
            //         echo "No quotes for this author!";
            // }
            // echo " - " . $author;
            // echo "<br/>";
            
            // This does the same thing as the switch statement
            $result = "No quotes for this author: " . $author;
            $result = match ($author) {
                "George Washington" => "You have only one way to convince others, listen to them.",
                "Abraham Lincoln" => "Great men are ordinary men with extra ordinary determination.",
                "Mahatma Gandhi" => "To double your successes, you might have to double your failure rate."
            };
            echo $result . " - " . $author;
            echo "<br/>";


            $bool = true;
            $a = 1;
            $b = 4;

            if ($a < $b && $bool) {
                echo $a . " is less than " . $b;
            } else if ($a > $b && $bool){
                echo $b . " is less than " . $a;
            } else {
                echo "Boolean is " . ($bool?"true":"false");
            }
            echo "<br/>";

            $a = "Hello";
            $b = "World!";
            echo $a . " " . $b;

            ?>

        </form>
    </main>
</body>
</html>