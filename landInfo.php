<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" href="stylesheet/result.css" />
        <link rel="stylesheet" href="stylesheet/landInfo.css" />
    </head>

    <body>
        <div class="header">
            <!-- <a href="#default" class="logo">  -->
                <img src="img/agrilogo.png" width="65" height="50">
            <!-- </a> -->
            <div class="header-right">
                <a class="active" href="#home">Home</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
        </div>

        <div id="landInfo_box">
            <form>
                <div id="information-a">
                    <h3> Land Information </h3> <br><br>
                
                    <label> Name of Owner: </label> <input type="text" name="owner"> <br><br>
                    <label> Contact Number: </label> <input type="text" name="owner"> <br><br>
                    <label> Location/Address: </label> <input type="text" name="owner"> <br><br>
                    <label> Land Area (in sq.m): </label> <input type="text" name="owner"> <br><br>
                    <label> Amount: </label> <input type="text" name="owner"> <br>
                </div>

                <div id="information-b">
                    <label> Please attach certificate of land ownership: </label>
                    <input type = "file" name = "certificate"> <br><br>
                    <label> Attach here image of your land area: </label>
                    <input type = "file" name = "certificate"> 
                </div>

                <div id="information-c">
                   <button name="upload"> Upload </button>
                   <button name="cancel"> Cancel </button>
                </diV>
            </form>
        </div>
    </body>
</html>