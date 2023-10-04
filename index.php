<?php
session_start();
include('includes/header.php')
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php
                if(isset($_SESSION['status'])){
                    echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                <div class="card-header">
                    <h4>
                    <form action="Search_R.php" method="POST">
                        <input type="text" name="condit" class="form-control" />
                        <button type="submit" name="search">Searching</button>
                        </form>
                    </h4>
                </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S1.no</th>
                                <th>Book Name</th>
                                <th>Author</th>
                                <th>Publication</th>
                                <th>Publication Year</th>
                                <th>Collection</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('dbcon.php');
                            $ref_table = "Book";
                            $fetchdatat = $database->getReference($ref_table)->getValue();

                            if($fetchdatat>0){
                                $i = 1;
                                foreach($fetchdatat as $key => $row){
                                    ?>
                                        <tr>
                                            <td><?=$i++; ?></td>
                                            <td><?=$row['BookName_EN'];?></td>
                                            <td><?=$row['Author'];?></td>
                                            <td><?=$row['Publication'];?></td>
                                            <td><?=$row['Publication_Year'];?></td>
                                            <td><?=$row['Collection'];?></td>
                                        </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="7">No record Found<td>
                                <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php')
?>