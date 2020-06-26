<?php
    include 'database.php';
    $result = mysqli_query( $connect, "SELECT * FROM user" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy User</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <!--for demo wrap-->
        <h1 class="user__title">Our Honorable User</h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php
                        //Check if at least one row is found
                        if ( $result->num_rows > 0 ) {
                            //Loop through results
                            while ( $row = $result->fetch_assoc() ) {
                                //Display customer info
                                $output = '<tr>';
                                $output .= '<td>' . $row['id'] . '</td>';
                                $output .= '<td>' . $row['name'] . '</td>';
                                $output .= '<td>' . $row['email'] . '</td>';
                                $output .= '<td>' . $row['phone'] . '</td>';
                                $output .= '</tr>';

                                //Echo output
                                echo $output;
                            }
                        } else {
                            echo "Sorry, no customers were found";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>


    <!-- follow me template -->
    <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a class="author__link" target="_blank" href="http://talib.rf.gd/">TALIB</a>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>