<?php
session_start();
include('includes/header.php')
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4>Library Information</h4>
                </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                            <?php
                            include('dbcon.php');
                            $ref_table = "Library";
                            $fetchdatat = $database->getReference($ref_table)->getValue();
                            if($fetchdatat>0){
                                $i = 1;
                                foreach($fetchdatat as $key => $row){
                                    ?>
                                    <tr><td>Library</td><td><?=$row['Library']?></td></tr>
                                    <tr><td>Location</td><td><?=$row['Location']?></td></tr>
                                    <tr><td>Contact</td><td><?=$row['Contact']?></td></tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr><td colspan="2">No records<td></tr>
                                <?php
                            }
                            ?>
                            </table>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php')
?>