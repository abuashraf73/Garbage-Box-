<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Garbage Box</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php include 'header.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Seller Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php
                    // Include config file
                    require_once '../../config/config.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM sale_request";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sl No</th>";
                                        echo "<th>Seller Name</th>";
                                        echo "<th>Product Name</th>";
                                        echo "<th>Quantity (K.G.)</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Phone</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Status</th>";
                                        // echo "<th>Status</th>";
                                   
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['sl_no'] . "</td>";
                                        echo "<td>" . $row['seller_id'] . "</td>";
                                        echo "<td>" . $row['product_id'] . "</td>";
                                        echo "<td>" . '<input type="text" class="quantity" data-id="'.$row['sl_no'].'" value='.$row['quantity'].'><br/>' ."</td>";
                                         echo "<td>" . '<input type="text" class="price" data-id="'.$row['sl_no'].'" value='.$row['price'].'><br/>' ."</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        //Mizan  class="bkash" data-id="'.$row['id'].'" 
                                        echo "<td>" . '<input type="text" class="status" data-id="'.$row['sl_no'].'" value='.$row['status'].'><br/>' ."</td>";

                                        
                                        //     echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                        //     echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                        //     echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        // echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
            </div>
        </div>
           
           
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        
        $('.quantity').on('change',function(){
            var $this = $(this);
            $.ajax({
                url:'../../api/quantity.php'+'?quantity='+$this.val()+'&sl_no='+$this.attr('data-id'),
            }).done(function(data){
                console.log(data);
            }).fail(function (data) {
                console.log(data);
            }); 
        });
        
        $('.status').on('change',function(){
            var $this = $(this);
            $.ajax({
                url:'../../api/seller_status_change.php'+'?status='+$this.val()+'&sl_no='+$this.attr('data-id'),
            }).done(function(data){
                console.log(data);
            }).fail(function (data) {
                console.log(data);
            }); 
        });
        $('.price').on('change',function(){
            var $this = $(this);
            $.ajax({
                url:'../../api/seller_price_change.php'+'?price='+$this.val()+'&sl_no='+$this.attr('data-id'),
            }).done(function(data){
                console.log(data);
            }).fail(function (data) {
                console.log(data);
            }); 
        });
    });
    
    
    //});
    </script>

</body>

</html>
