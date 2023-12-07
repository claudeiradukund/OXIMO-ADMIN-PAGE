
  <?php
  include('D:\xampp\htdocs\oximo websites\Admin_parts\config\dbcon.php');
  include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\header.php');
?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Team Member</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Team Member Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Projects Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Education Degree</th>
                                            <th>Person Information</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>ID</td>
                                            <td>Name</td>
                                            <td>Education Degree</td>
                                            <td>Person Information</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                           <td>ID</td>
                                           <td>Name</td>
                                           <td>Education Degree</td>
                                           <td>Person Information</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                           <td>ID</td>
                                            <td>Name</td>
                                            <td>Education Degree</td>
                                            <td>Person Information</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                           <td>ID</td>
                                            <td>Name</td>
                                            <td>Education Degree</td>
                                            <td>Person Information</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>ID</td>
                                            <td>Name</td>
                                            <td>Education Degree</td>
                                            <td>Person Information</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    <?php
	    include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\footer.php');
	    include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\scripts.php');
    ?>
