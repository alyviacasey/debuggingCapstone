<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toybox</title>
    <link rel="stylesheet" href="/css/style.css"> 
    <link rel="stylesheet" href="/css/reset.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/stars.js" defer></script>
</head>

<body>
    <header>
    <div class = "banner">
    </div>
    <div class = "nav">
            <a href = "index.php">Home</a>
            <a href = "carnival.php">Carnival</a>
            <a href = "store.php">Shop</a>
                            <a href = "profile.php">lcasey1</a>
                <a href = "includes/logout.inc.php">LOGOUT</a>
                </div>
</header>
    <div class = "wrapper">
                <div class = "admin">
            <h2>ADMIN PANEL</h2>
            <br>
            <section class = "admin-forms">
                <div class = "admin-form">
                    <h3>Toy Model Creator</h3>
                    <br>
                    <form action = "includes/admin-model.inc.php" method = "post">
                        <h4>Theme</h4>
                        <p>Choose an adjective to describe the toy model</p>
                        <input type = "text" name = "theme" rows="10" cols="30" placeholder = "Birthday"> <br>
                        <br>
                        <h4>Model Name</h4>
                        <p>Choose an noun to describe the toy model</p>
                        <input type = "text" name = "model" placeholder = "Bear"> <br>
                        <br>
                        <h4>Model Material</h4>
                        <input type="radio" id="plush" name="material" value="Plush">
                        <label for="plush">Plush</label> &nbsp; &nbsp;
                        <input type="radio" id="plastic" name="material" value="Plastic">
                        <label for="plastic">Plastic</label> <br>
                        <br>
                        <h4>Rarity</h4>
                        <p>Select a rarity for this pet</p>
                        <input type="hidden" id="rarity" name="rarity" value="0">
                        <div class = "stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <br>
                        <button type = "submit" name = "create">SUBMIT</button>
                    </form>
                </div>
                <div class = "admin-form">
                    <h3>GiftBox Model Creator</h3>
                    <br>
                    <form action = "includes/admin-box.inc.php" method = "post">
                        <h4>Name</h4>
                        <p>Choose an name/theme for your box.</p>
                        <input type = "text" name = "theme" rows="10" cols="30" placeholder = "Birthday"> Box<br>
                        <br>
                        <h4>Price</h4>
                        <p>Enter an integer for how many coins the box will cost.</p>
                        <input type = "text" name = "price" placeholder = "100"> <br>
                        <br>
                        <button type = "submit" name = "create">SUBMIT</button>
                    </form>
                </div>
            </section>

            <br> <br>
            <section class = "admin-tables">
                <h3>GiftBox Models</h3>
                <br>
                <div class = "box-table">
                    <table>
                        <tr>
                        <th>Model ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Contents</th>
                        <th> </th>
                        <th> </th>
                        </tr>

                                                    <tr>
                            <td>3</td>
                            <td>Birthday Box</td>
                            <td>20</td>
                            <td style = "width: 10em;">
                                                                Birthday Bunny,                                                                 Birthday Dinosaur,                                                                 Birthday Bear,                                  
                                <br> <br>
                                <form action = "includes/admin-contents.inc.php" method = "post">
                                    <select id="contents" name="contents">
                                                                                    <option value="4">Birthday Bunny</option>
                                                                                        <option value="5">Birthday Dinosaur</option>
                                                                                        <option value="7">Birthday Bear</option>
                                                                                </select> 
                                    <input type = "hidden" name = "boxid" value = "3">
                                    <button type = "submit" name = "set">ADD / REMOVE</button>
                                </form>
                            </td>
                            <td>
                                <form action = "includes/admin-box.inc.php" method = "post" enctype="multipart/form-data">
                                    <input type = "hidden" name = "boxid" value = "3"> 
                                    <label for = "file" class = "custom-file">
                                        <input type="file" name="boxfile3" id="file">
                                        <i class="fa fa-cloud-upload"></i> Upload Image
                                    </label> <br> <br>
                                    <button type = "submit" name = "boximage">SAVE</button>
                                </form>
                            </td>
                            <td> 
                                <form action = "includes/admin-box.inc.php" method = "post">
                                    <input type = "hidden" name = "boxids" value = "3"> <br>
                                    <button type = "submit" name = "delete">DELETE</button>
                                </form>
                            </td>
                        </tr>
                                            </table>      
                </div>
                <br> <br>
                <h3>Toy Models</h3>
                <br>
                <div class = "toy-table">
                    <table>
                        <tr>
                        <th>Model ID</th>
                        <th>Name</th>
                        <th>Material</th>
                        <th>Rarity</th>
                        <th> </th>
                        <th> </th>
                        </tr>

                                                    <tr>
                            <td>4</td>
                            <td>Birthday Bunny</td>
                            <td>Plush</td>
                            <td>5</td>
                            <td>
                                <form action = "includes/admin-model.inc.php" method = "post" enctype="multipart/form-data">
                                    <input type = "hidden" name = "toyid" value = "4"> 
                                    <label for = "file" class = "custom-file">
                                        <input type="file" name="toyfile4" id="file">
                                        <i class="fa fa-cloud-upload"></i> Upload Image
                                    </label> <br> <br>
                                    <button type = "submit" name = "toyimage">SAVE</button>
                                </form>
                            </td>
                            <td> 
                                <form action = "includes/admin-model.inc.php" method = "post">
                                    <input type = "hidden" name = "toyid" value = "4"> <br>
                                    <button type = "submit" name = "delete">DELETE</button>
                                </form>
                            </td>
                            </tr>
                                                    <tr>
                            <td>5</td>
                            <td>Birthday Dinosaur</td>
                            <td>Plastic</td>
                            <td>5</td>
                            <td>
                                <form action = "includes/admin-model.inc.php" method = "post" enctype="multipart/form-data">
                                    <input type = "hidden" name = "toyid" value = "5"> 
                                    <label for = "file" class = "custom-file">
                                        <input type="file" name="toyfile5" id="file">
                                        <i class="fa fa-cloud-upload"></i> Upload Image
                                    </label> <br> <br>
                                    <button type = "submit" name = "toyimage">SAVE</button>
                                </form>
                            </td>
                            <td> 
                                <form action = "includes/admin-model.inc.php" method = "post">
                                    <input type = "hidden" name = "toyid" value = "5"> <br>
                                    <button type = "submit" name = "delete">DELETE</button>
                                </form>
                            </td>
                            </tr>
                                                    <tr>
                            <td>7</td>
                            <td>Birthday Bear</td>
                            <td>Plush</td>
                            <td>2</td>
                            <td>
                                <form action = "includes/admin-model.inc.php" method = "post" enctype="multipart/form-data">
                                    <input type = "hidden" name = "toyid" value = "7"> 
                                    <label for = "file" class = "custom-file">
                                        <input type="file" name="toyfile7" id="file">
                                        <i class="fa fa-cloud-upload"></i> Upload Image
                                    </label> <br> <br>
                                    <button type = "submit" name = "toyimage">SAVE</button>
                                </form>
                            </td>
                            <td> 
                                <form action = "includes/admin-model.inc.php" method = "post">
                                    <input type = "hidden" name = "toyid" value = "7"> <br>
                                    <button type = "submit" name = "delete">DELETE</button>
                                </form>
                            </td>
                            </tr>
                                            </table>      
                </div>
            </section>
        </div>

        <!-- If user is not an admin... -->

            </div>
</body>
</html>