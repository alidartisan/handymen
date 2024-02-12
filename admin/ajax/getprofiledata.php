<?php
    require "../config.php";
    $id = $_GET['id'];
    $msgs = "";
    $query = mysqli_query($conn, "SELECT * FROM profile WHERE user_id = '$id'");
    if(mysqli_num_rows($query)){
        while($row = mysqli_fetch_assoc($query)){
            ?>

            <div class="card">
                <div class="card-body">
                    <div class="profile-bg position-relative overflow-hidden rounded-top" style="height: 150px;">
                        <div class="bg-overlay bg-dark bg-gradient"></div>

                        <div class="position-relative p-3 text-end">
                            <button type="button" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil me-1"></i>
                                Edit</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="position-relative d-inline-block mx-auto mt-n5 mb-4">
                            <div class="avatar-lg">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-thumbnail">
                            </div>
                            <a href="#" class="d-block position-absolute bottom-0 end-0">
                                <div class="avatar-sm">
                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                        <i class="mdi mdi-pencil"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h5 class="font-size-16 mb-1"><?=$row['full_name']?></h5>
                        <p class="text-muted mb-0 "><?=$row['email']?></p>
                    </div>
                    <hr class="my-4">
                    <div>
                        <h5 class="font-size-16">Info :</h5>

                        <div class="mt-4">
                            <p class="text-muted mb-1">Address:</p>
                            <h5 class="font-size-14 text-truncate "><?=$row['address']?></h5>
                        </div>

                        <div class="mt-4">
                            <p class="text-muted mb-1">Phone:</p>
                            <h5 class="font-size-14 text-truncate "><?=$row['phone']?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <?php
        }
    }else{
        echo "no data found.";
    }