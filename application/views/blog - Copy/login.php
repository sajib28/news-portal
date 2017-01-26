<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                 <?php
                $exc= $this->session->userdata('exception');
                if ($exc) {
                    ?>
                    <div class="alert alert-success">
                        <button class="close" data-close="alert"></button>
                        <span>
                            <?php
                            echo $exc;
                            $this->session->unset_userdata('exception');
                            ?>
                        </span>
                    </div>
                <?php } 
                
                else{
                     $msg= $this->session->userdata('msg');
                    ?>
                 
                  <div class="alert alert-success">
                        <button class="close" data-close="alert"></button>
                        <span>
                            <?php
                            echo $msg;
                            $this->session->unset_userdata('msg');
                            ?>
                        </span>
                    </div>
                
                <?php } ?>
                <form action="<?php echo base_url();?>welcome/user_login_check" method="post">
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="email" name ="email_address" class="form-control" id="email_address" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</section>