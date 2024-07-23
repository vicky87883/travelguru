<div id="promo" class="section white">
    <div class="container">
        <div class="content center">
            <h5 class="t-black">AROUND THE WORLD</h5>
            <span class="line gold"></span>
            <h2 class="t-black">It's time to <span class="t-gold">travel</span></h2>
            <h6>Take a look at the most exclusive & most visited locations in the world by travelguru- hand-picked just
                for you.<br> Start traveling the world today!</h6>
            <div class="section white">
                <div class="container" id="posts">
                    <div class="content center">
                        <div class="row text-justify">
                        <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <!-- Info Box -->
                            <div class="col-lg-4 left">
                                <div class="post-item">
                                    <img src="<?php echo ($row['image']); ?>" alt="exodus" class="img-fluid main">
                                    <a href="blog-detail.php">
                                        <h4 class="t-black"><?php echo ($row['heading']); ?></h4>
                                    </a>
                                    <div class="info-box-detail left">
                                        <div class="post-info">By: <a class="author t-gold">Angela Manscori</a></div>
                                        <div class="post-views">
                                            <img src="assets/img/user1.jpg" alt="exodus" class="img-fluid">
                                            <img src="assets/img/user2.jpg" alt="exodus" class="img-fluid">
                                            <img src="assets/img/user3.jpg" alt="exodus" class="img-fluid">
                                            <span class="count"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End -->
                            <?php
                        }

                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>