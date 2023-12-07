<?php
  include('D:\xampp\htdocs\oximo websites\Admin_parts\config\dbcon.php');
  include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\header.php');
?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Projects</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Projects Dashboard</li>
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
                                            <th>Location</th>
                                            <th>Type Of Project</th>
                                            <th>Year</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>architecture</th>
                                            <th>Age</th>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <th>architecture</th>
                                            <td>61</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <th>engineering</th>
                                            <td>63</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <th>master planning</th>
                                            <td>66</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <th>interior design</th>
                                            <td>22</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <th>architecture</th>
                                            <td>33</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <th>master planning</th>
                                            <td>61</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <th>architecture</th>
                                            <td>59</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <th>interior design</th>
                                            <td>55</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <th>master planning</th>
                                            <td>39</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <th>architecture</th>
                                            <td>23</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <th>architecture</th>
                                            <td>30</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <th>architecture</th>
                                            <td>22</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <th>architecture</th>
                                            <td>36</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <th>architecture</th>
                                            <td>43</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <th>architecture</th>
                                            <td>19</td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <th>architecture</th>
                                            <td>66</td>
                                           <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square' style="color:black;"></i></a></td>
                                            <td><a href='#=<?php echo $product_id ?>' class='text-light'><i class='fa-solid fa-trash' style="color:black;"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <?php
	    include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\footer.php');
	    include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\scripts.php');
    ?>
