





<!DOCTYPE html>


<html>

<head>
    <title>Online Librabry Management</title>
    <style>
        #card {

            border: 2px solid black;
            box-shadow: 3px 2px 3px gray;
            width: 200px;
            padding: 20px;
            margin: 20px;
            margin-bottom: auto;
            text-align: center;
          background-color: rgb(187, 118, 61);

        }

        #container {
            justify-content: center;

            display: grid;
            grid-template-columns: 3fr 9fr;
            align-items: center;
            display: flex;
        }

        header {
            text-align: center;
            font-size: 50px;
            padding-top: 50px;


        }

        main {
            text-align: center;
        }

        h1 {

            font-size: 30px;
            text-align: center;
            padding-top: 50px;
            color:black;
        }

        .card-deck {
            display: flex;
            justify-content: center;

        }

        body {

            background-image: url("Assets/photo5.jpg"   );
          

        }
        header{
            color:white;
        }
    </style>
</head>

<body>

    <header>
        Vidhya Bharti College
    </header>


    <h1 >Online Librabry Management</h1>
    <div class="card-deck">
        <div id="container">
            <div id="card">


                <a href="adminlogin.php" <button><img src="Assets/download.jpg" width="100px"
                        height="100px"></button></a>
                <div id="card footer">
                    <h3>Admin</h3>



                </div>
            </div>
        </div>
        <div id="container">
            <div id="card">
                <a href="studentlogin.php" <button> <img src="Assets/student.png" width="100px"
                        height="100px"></button></a>
                <div id="card footer">
                    <h3>Student</h3>

                </div>

            </div>


</body>

</html>