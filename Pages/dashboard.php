<?php
// include 'add.php';
include_once 'dbconnect.php';
$result = mysqli_query($conn, "SELECT * FROM produit");
if (isset($_POST['update'])) {
    $idp = $POST['custId'];
    
    mysqli_query($conn, "UPDATE produit set  reference='" . $_POST['reference'] . "',nom='" . $_POST['nameP'] . "', descriptions='" . $_POST['descriptions'] . "' ,prix='" . $_POST['price'] . "',quantite='" . $_POST['quantiteP'] . "',stockCritique='" . $_POST['qritiqueQT'] . "',images='" . $_POST['imageP'] . "' WHERE id_p=$id_p");

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.min.css">
    <title>Cietec dashboard</title>
</head>

<body>

    <!--popups-->

    <!--popups-->
    <div class="dashboard">
        <div class="imgCenter">
            <img id="logo" src="../images/logo.png">
        </div>
        <div class="dbMenu">
            <img src="../images/Dbchart.svg">
            <img src="../images/Maps.svg">
            <img src="../images/Shopping.svg">
            <img src="../images/Messages.svg">
            <img src="../images/Files.svg">
        </div>
    </div>
    <div class="divHolder">
        <div class="respNavbar">
            <div class="respNavbarHldr">
                <div class="brgrMenu">
                    <img src="../images/brgrMenu.svg" alt="brgrMenu">
                </div>
                <h2 id="RDashboard">dashboard</h2>
                <div class="rightMenuNav">
                    <div class="dropOpen">
                        <img id="dropOpenImg" src="../images/drop_down.svg" alt="dropDownMenu">
                    </div>
                    <div class="rightMenu">
                        <div class="searchRSP">
                            <div class="search">
                                <input type="text" id="searchInput" placeholder="Search">
                                <img src="../images/search.svg">
                            </div>
                        </div>
                        <div class="notificationRSP">
                            <img src="../images/notificationON.svg" alt="notification">
                        </div>
                        <div class="userRSP">
                            <img src="../images/signUP.svg" alt="signUP">
                        </div>
                        <div class="supportRSP">
                            <img src="../images/support.svg" alt="support" style="margin-left: 11px;">
                        </div>
                        <img id="dropUpmenu" src="../images/dropDownMenu.svg" alt="drop_down_Menu">
                    </div>
                </div>
            </div>
        </div>
        <div class="navBar">
            <h1 id="DbText">dashboard</h1>
            <div class="searchDiv">
                <div class="search">
                    <input type="text" id="searchInput" placeholder="Search">
                    <img src="../images/search.svg">
                </div>
                <img src="../images/sortBy.svg">
            </div>
            <div class="support">
                <img src="../images/support.svg" alt="support" style="margin-left: 11px;">
                <h4 style="margin-right: 17px;">Support</h4>
            </div>
            <div class="userDiv">
                <h4>user name</h4>
                <img src="../images/signUP.svg" alt="signUP">
                <img src="../images/notificationON.svg" alt="notification">
            </div>
        </div>
        <h4 style="width: 87vw;margin-top: 50px; margin-bottom: 20px;">Overview</h4>
        <div class="statistics">
            <div class="news">
                <div class="texts">
                    <h2>Welcome back Julie</h2>
                    <h3>Since your last login on the system, there were:</h3>
                    <h4>21 new charts</h4>
                    <h4>15 new reports</h4>
                    <h4>45 new Messages</h4>
                </div>
                <div class="undrawFile">
                    <img src="../images/undraw_file_analysis_8k9b.svg" alt="undraw_file_analysis_8k9b">
                </div>
            </div>

            <div class="upcoming">
                <div class="textUpComming">
                    <h6>upcoming</h6>
                    <div class="todayCont">
                        <p>Today</p>
                        <span><img src="../images/drop_down.svg" alt="drop_down"></span>
                    </div>
                </div>
                <div class="event">
                    <img src="../images/eventColor.svg" alt="eventColor">
                    <span>
                        <h6>Team meeting</h6>
                        <p>10 AM - 11 AM</p>
                    </span>
                </div>
                <div class="event">
                    <img src="../images/eventRed.svg" alt="eventColor">
                    <span>
                        <h6>Team meeting</h6>
                        <p>10 AM - 11 AM</p>
                    </span>
                </div>
                <div class="event">
                    <img src="../images/eventprpl.svg" alt="eventColor">
                    <span>
                        <h6>Team meeting</h6>
                        <p>10 AM - 11 AM</p>
                    </span>
                </div>
                <div class="moreContainer"><img src="../images/MoreButton.svg" alt="MoreButton"></div>
            </div>
            <div class="upcoming2">
                <h6 style="display: flex;">Total inventory usage<span id="option"><img src="../images/option.svg" alt="option"></span></h6>
                <svg id="crcls">
                    <circle cx="42px" cy="42px" r="42px"></circle>
                    <circle cx="42px" cy="42px" r="42px"></circle>
                </svg>
                <h3>70%</h3>
                <div class="statIvtr">
                    <div id="frst"></div>
                    <p class="txtStat">218 items</p>
                    <div id="scnd"></div>
                    <p class="txtStat">32 are left</p>
                </div>
            </div>
        </div>
        <div id="txtInventory">
            <div style="display: flex;align-items: baseline;">
                <h4 style="font-size: 25px;">218</h4>
                <p style=" font-size: 14px; margin-left: 0.5vw;"> products are in the inventory</p>
            </div>
            <button class="addProduct">
                <img src="../images/add-box.svg" alt="add-box">
                <h4>add product</h4>
            </button>
        </div>
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="tableHolder">
                <table>
                    <tr>
                        <th>Action</th>
                        <th>Reference</th>
                        <th>Name of the product</th>
                        <th>Peaces</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Time</th>
                        </tr)>
                    <tr class="devider">
                    </tr>
                    <!-- <img id="testMenu2" src="../images/Tracé 5.svg" alt=""> -->
                    <tr>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <td id="optionPopUp">
                                <div class="optionTd">
                                    <img id="editIcon" src="../images/editIcon.svg" alt="edit icon" class="editBtn">
                                    <img id="deleteIcon" src="../images/deleteIcon.svg" alt="delete icon">
                                </div>
                            </td>
                            <input type="hidden" id="custId" name="custId" value="<?=$id= $row["id_p"]; ?>">
                            <td><?= $row["reference"]; ?></td>
                            <td><?= $row["nom"]; ?></td>
                            <td><?= $row["quantite"]; ?></td>
                            <td> <?= $row["descriptions"]; ?></td>
                            <td><?= $row["prix"] . 'dh'; ?>
                            <td> <?= $row["date_entree"]; ?></td>
                    </tr>
                    <tr class="devider">
                    </tr>
                    <tr>
                    <?php
                            $i++;
                        }
                    ?>
                <?php } ?>
                </table>
            </div>
    </div>

    <!--models-->
    <form method="POST" action="dashboard.php" class="editForm ">
        <div id="testModel">
            <div class="popup">
                <h1>Add Product</h1>
                <div class="popup1">
                    <div class="firstInputs">
                        <div class="ref">
                            <label for="text">References</label>
                            <input type="text" id="textref" placeholder="type here..." name="reference">
                        </div>
                        <div class="nameP">
                            <label for="text">Name of product</label>
                            <input type="text" id="manep" placeholder="type here..." name="nameP">
                        </div>
                    </div>
                    <div id="Pimage">
                        <img id="output" src="../images/noImg.png" alt="">
                        <input id="imgPlcHldr" type="file" onchange=" loadFile(event)" placeholder="type here..." name="imageP">
                    </div>
                </div>
                <div class="popup2">
                    <div class="price">
                        <label for="text">Price</label>
                        <input type="text" id="textPrice" placeholder="type here..." name="price">
                    </div>
                    <div class="quntite">
                        <label for="text">Quantity</label>
                        <input type="text" id="textQuantite" placeholder="type here..." name="quantiteP">
                    </div>
                    <div class="critiqueQ">
                        <label for="text" style="font-size: 15px;">Critical Quantity</label>
                        <input type="text" id="textCQ" placeholder="type here..." name="qritiqueQT">
                    </div>
                </div>
                <div class="description">
                    <label for="textarea">Description</label>
                    <textarea id="textarea" cols="30" rows="10" name="description" placeholder="type here..."></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Cancel" id="cancel">
                    <input type="submit" value="AddProduct" name="AddProduct">
                </div>
            </div>
        </div>
    </form>

    <!-- model update -->
    <form method="POST" action="dashboard.php" class="editForm">
        <div id="updateModel">
            <div class="popup">
                <h1>Update Product</h1>
                <div class="popup1">
                    <div class="firstInputs">
                        <div class="ref">
                            <label for="text">References</label>
                            <input type="text" class="textref" placeholder="type here..." name="reference">
                        </div>
                        <div class="nameP">
                            <label for="text">Name of product</label>
                            <input type="text" class="namePr" placeholder="type here..." name="nameP">
                        </div>
                    </div>
                    <div id="Pimage">
                        <img id="output" src="../images/noImg.png" alt="">
                        <input class="imgPlcHldr" type="file" onchange=" loadFile(event)" placeholder="type here..." name="imageP">
                    </div>
                </div>
                <div class="popup2">
                    <div class="price">
                        <label for="text">Price</label>
                        <input type="text" class="textPrice" placeholder="type here..." name="price">
                    </div>
                    <div class="quntite">
                        <label for="text">Quantity</label>
                        <input type="text" class="textQuantite" placeholder="type here..." name="quantiteP">
                    </div>
                    <div class="critiqueQ">
                        <label for="text" style="font-size: 15px;">Critical Quantity</label>
                        <input type="text" class="textCQ" placeholder="type here..." name="qritiqueQT">
                    </div>
                </div>
                <div class="description">
                    <label for="textarea">Description</label>
                    <textarea class="textarea" cols="30" rows="10" name="description" placeholder="type here..."></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Cancel" id="cancel">
                    <input type="submit" value="UpdateProduct" name="Update" >
                </div>
            </div>
        </div>
    </form>
    <!-- model updete -->


    <div id="testModel2">
        <div class="container">
            <div class="popup">
                <h1> Are you sure ?</h1>
                <div class="popup1" id="popup1delete">
                    <input type="submit" value="Cancel" id="cancel2">
                    <div class="delete">
                        <img src="image/Icon_material-delete.svg" alt="">
                        <input type="submit" value="delete product">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("body > div.divHolder > div.respNavbar > div > div.rightMenuNav > div.dropOpen").addEventListener("click", function() {
            document.querySelector("body > div.divHolder > div.respNavbar > div > div.rightMenuNav > div.rightMenu").style.display = "flex";
        })
        document.querySelector("#dropUpmenu").addEventListener("click", function() {
            document.querySelector("body > div.divHolder > div.respNavbar > div > div.rightMenuNav > div.rightMenu").style.display = "none";
        })
        document.querySelector("body > div.divHolder > div.respNavbar > div > div.brgrMenu").addEventListener("click", function() {
            document.querySelector("body > div.dashboard").style.left = "0";
        })
        document.querySelector("body").addEventListener("click", function() {
            // document.querySelector("body > div.dashboard").style.left="-120px";
        })



        document.querySelector("#txtInventory > button").addEventListener("click", function() {
            document.querySelector("#testModel").style.display = "flex";
            document.querySelector("body").style.overflowY = "hidden";
            document.querySelector("#testModel > div > h1").innerHTML = "Add product";
            document.querySelector("#testModel > div > div.button > input[type=submit]:nth-child(2)").value = "Add";

        })

        document.querySelector("#deleteIcon").addEventListener("click", function() {
            document.querySelector("#testModel2").style.display = "flex";
            document.querySelector("body").style.overflowY = "hidden";
        })

        document.querySelector("#editIcon").addEventListener("click", function() {
            document.querySelector("#updateModel").style.display = "flex";
            document.querySelector("body").style.overflowY = "hidden";
            // document.querySelector("#testModel > div > h1").innerHTML = "Edit product";
            // document.querySelector("#testModel > div > div.button > input[type=submit]:nth-child(2)").value = "done";

        })

        document.querySelector("#cancel").addEventListener("click", function() {
            document.querySelector("#testModel").style.display = "none";
            document.querySelector("body").style.overflowY = "auto";
        })

        document.querySelector("#cancel2").addEventListener("click", function() {
            document.querySelector("#testModel2").style.display = "none";
            document.querySelector("body").style.overflowY = "auto";
        })


        var testMenu2 = document.querySelector("#testMenu2");
        var editIcon = document.querySelector("#editIcon");
        var deleteIcon = document.querySelector("#deleteIcon");
        var option11 = document.querySelector("#optionPopUp");
        var click = document.querySelector("#optionPopUp > img:nth-child(3)")

        option11.addEventListener("click", function() {

            testMenu2.style.display = "block";
            editIcon.style.display = "block";
            deleteIcon.style.display = "block";

        })
        option11.addEventListener("click", function(event) {
            if (event.target == option11) {
                testMenu2.style.display = "none";
                editIcon.style.display = "none";
                deleteIcon.style.display = "none";
            }
        })

        var editBtn = document.querySelectorAll(".editBtn");
        editBtn.forEach((e) => {
            e.onclick = function() {
                alert("pr_ref");
                document.querySelector("#updateModel").style.display = "flex";
            document.querySelector("body").style.overflowY = "hidden";
                
                // content.style.filter = "blur(15px)";
                // aside.style.filter = "blur(15px)";
                // editModal.style.transform = "translateY(0)";

                tr = this.parentElement.parentElement.parentElement;
                pr_ref = tr.children[1].innerHTML;
                pr_name = tr.children[2].innerHTML;
                // pr_image = tr.children[3].firstElementChild.src;
                pr_price = tr.children[5].innerHTML;
                pr_qty = tr.children[3].innerHTML;
                pr_stockCritique = tr.children[6].innerHTML;
                pr_description = tr.children[4].innerHTML;
                // alert(pr_ref);
                document.querySelector(".textref").value = pr_ref;
                document.querySelector(".namePr").value = pr_name;
                // document.querySelector(".imgPlcHldr").value = pr_image;
        
                document.querySelector(".textPrice").value = pr_price;
                document.querySelector(".textQuantite").value = pr_qty;
                document.querySelector(".textCQ").value = pr_stockCritique;
                document.querySelector(".textarea").value = pr_description;

                
                

                // document.querySelectorAll(".editForm  .firstInputs  .ref div+label+input")[1].value = pr_ref;
                
                    
                // document.querySelectorAll(".editForm label+input")[2].value = pr_name;
                // document.querySelectorAll(".editForm label+input")[3].value = pr_image;
                // document.querySelectorAll(".editForm label+select")[4].value = pr_price;
                // document.querySelectorAll(".editForm label+input")[5].value = pr_qty;
                // document.querySelectorAll(".editForm label+input")[6].value = pr_stockCritique;
                // document.querySelectorAll(
                //     ".editForm label+textarea"
                // )[7].value = pr_description;
                // document.querySelector("#imgThumb").src = pr_image;
            };
        });
    </script>
</body>

</html>