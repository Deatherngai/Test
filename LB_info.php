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
                            <?php
                            include('dbcon.php');
                            $ref_table = "Library";
                            $fetchdatat = $database->getReference($ref_table)->getValue();
                            if($fetchdatat>0){
                                $i = 1;
                                foreach($fetchdatat as $key => $row){
                                        echo $key;
                                        $i++;
                                    }
                            }else{
                                echo "";
                            }
                            ?>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php')
?>