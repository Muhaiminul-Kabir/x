<?php  
    include 'admin_module.php';
?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lift</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/adlog.css">
</head>

<body class="gradient-custom" style="position: relative;">

    <div class="container-fluid  ">
        <div class="row   p-2 mt-3 justify-content-center">
            <div class="col-2 mx-3" style="height: 100%;">
                <p class="text-light">admin_983je</p>
                <div class="btn-group-vertical " role="group" aria-label="Button group with nested dropdown" ">
                    <button onclick=" myB1()" type="button" id="b1" class="btn btn-block text-white btn-secondery border-white mx-2 px-5">Dashboard</button>
                    <button onclick="myB2()" type="button" id="b2" class="btn btn-block text-white btn-transparent border-white mx-2">Orders</button>
                    <button onclick="myB3()" type="button" id="b3" class="btn btn-block text-white btn-transparent border-white mx-2">Products</button>

                    <button onclick="myB4()" type="button" id="b4" class="btn btn-block text-white btn-transparent border-white mx-2">Forms</button>
                    <button onclick="myB5()" type="button" id="b5" class="btn btn-block text-white btn-transparent border-white mx-2">Feedbacks</button>
                </div>
                <br><br><br><br>
                <div class="btn-group-vertical " role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-block btn-danger text-light mx-2 px-4">Log out</button>
                </div>
            </div>
            <!-- Panel -->
            <div class="col-9 shadow-lg p-3  rounded " style="color: white;height:550px;">

                <div class="row p-2" id="d1">

                    <?php include 'ad_dash.php' ?>





                </div>

                <div class="row p-2" id="d2">

                    <?php include 'ad_order.php' ?>

                </div>


                <div class="row p-2 " style="color:white;" id="d3">

                    <?php include 'ad_products.php' ?>

                </div>

                <div class="row p-2" id="d4">

                    <?php include 'ad_add.php' ?>

                </div>


                <div class="row p-2" id="d5">

                    <?php include 'ad_msg.php' ?>

                </div>


            </div>


        </div>
    </div>


    <!--Error-->
    <div class="bg-dark text-light rounded" style="display:none;position: absolute; top:20%;left:30%;height:200px;width:500px;">ggggggggg</div>


    <script>
        const divs = ['d1', 'd2', 'd3', 'd4', 'd5']
        let i = 0
        document.getElementById('d1').style.display = 'block';
        document.getElementById('d2').style.display = 'none';
        document.getElementById('d3').style.display = 'none';
        document.getElementById('d4').style.display = 'none';
        document.getElementById('d5').style.display = 'none';



        const toggleTo2 = document.getElementById("b2");
        const toggleTo1 = document.getElementById("b1");
        const toggleTo3 = document.getElementById("b3");
        const toggleTo4 = document.getElementById("b4");
        const toggleTo5 = document.getElementById("b5");

        const div1 = document.getElementById("d1");
        const div2 = document.getElementById("d2");
        const div3 = document.getElementById("d3");
        const div4 = document.getElementById("d4");
        const div5 = document.getElementById("d5");

        const hide = el => el.style.setProperty("display", "none");
        const show = el => el.style.setProperty("display", "block");

        hide(d2);

        toggleTo2.addEventListener("click", () => {
            hide(d1);
            
            hide(div3);
            hide(div4);
            hide(div5);
            show(div2);
        });

        toggleTo1.addEventListener("click", () => {
            hide(div2);
            hide(div3);
            hide(div4);
            hide(div5);
            
            show(div1);
        });
        
        toggleTo3.addEventListener("click", () => {
            hide(div2);
            hide(div1);
            hide(div4);
            hide(div5);
            
            show(div3);
        });

        toggleTo4.addEventListener("click", () => {
            hide(div2);
            hide(div1);
            hide(div3);
            hide(div5);
            
            show(div4);
        });
        
        toggleTo5.addEventListener("click", () => {
            hide(div2);
            hide(div1);
            hide(div4);
            hide(div3);
            
            show(div5);
        });


        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function myFunction1() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable1");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }


        function myFunction2() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable2");
            tr = table.getElementsByTagName("div");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("div")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>


</body>



</html>