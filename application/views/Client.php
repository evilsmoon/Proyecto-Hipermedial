<div class="content">
    <div class="container">
        <div class="row">
            <?php
            foreach ($get_employeesAtUser as $row) {


            ?>
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            <?php echo   $row->service; ?>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>
                                        <?php echo $row->name;?>
                                        <?php echo $row->last_name;?>
                                    </b></h2>
                                    <p class="text-muted text-sm"><b>email: </b> <?php echo $row->email;?> </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Country: <?php
                                        echo $row->country;
                                        ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> City: <?php
                                        echo $row->city;
                                        ?></li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +<?php echo $row->phone;?></li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="<?php echo base_url(); ?>Client/getUserByIDEmploye/<?php echo $row->ID_Trabajador; ?>" class="btn btn-primary"><i class="fa fas fa-user "></i> View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

            <!-- FIn de -->
        </div>

    </div><!-- /.container-fluid -->
</div>






