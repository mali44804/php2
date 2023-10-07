<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$product_query = "SELECT * from `category` where status = '1' ";
$conn_query = mysqli_query($connection,$product_query);
if(mysqli_num_rows($conn_query)>0){
?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>All Categories </h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($pro_data=mysqli_fetch_assoc($conn_query)){ 
                ?>
                <tr>
                    <th scope="row"><?php echo $pro_data['ID']?></th>
                    <td><?php echo $pro_data['cname']?></td>
                    <td><?php echo $pro_data['status']?></td>
                    
                    <td ><a href="" class="btn btn-success">Update</a></td>
                    <td ><a href="" class="btn btn-danger">Delete</a></td>
                    
                </tr>
                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td ><a href="" class="btn btn-success">Update</a></td>
                    <td ><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td ><a href="" class="btn btn-success">Update</a></td>
                    <td ><a href="" class="btn btn-danger">Delete</a></td>

                </tr> -->
                <?php
            }
} 
        
        ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>