</div>

    <div class="single-news" style="margin-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h3>Сонин</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sn-container" style="position:relative">
                        <?php 
                            $query = $this->db->query('select * from article where status=1 and types=1 limit 1');
                            foreach ($query->result() as $row){       
                                $id = $row->id;
                                $pic = $row->picture;
                                $title = $row->title;
                                $date = $row->date;
                                $comments = $row->comments;
                        ?>
                        <div class="sn-img">
                            <img src="<?php echo base_url(); ?>assets/img/news-825x525.jpg" />
                        </div>
                        <div class="details">
                            <h2><?php echo $title;?></h2>
                            <div class="date"><?php echo $date;?></div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php 
                            $query = $this->db->query('select * from article where status=1 and types=0 order by sort asc');
                            foreach ($query->result() as $row){       
                                $id = $row->id;
                                $pic = $row->picture;
                                $title = $row->title;
                                $date = $row->date;
                                $comments = $row->comments;
                        ?>
                    
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-1.jpg">
                                    <div class="mn-title">
                                        <a href="<?php echo base_url()."index.php/n/$id" ?>"><?php echo $title;?></a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="youtube-area video-padding d-none d-sm-block single-news">
        <div class="container">
            <div class="row">
                <div class="col-12 sn-related">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                            <h2>LIVE</h2>
                        </div>
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <video controls>
                                <source src="<?php echo base_url(); ?>assets/assets1/video/news2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="<?php echo base_url(); ?>assets/assets1/video/news1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="<?php echo base_url(); ?>assets/assets1/video/news3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="<?php echo base_url(); ?>assets/assets1/video/news1.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="<?php echo base_url(); ?>assets/assets1/video/news3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-12">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <video controls>
                                    <source src="<?php echo base_url(); ?>assets/assets1/video/news2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                        <h4>Old Spondon News - 2020 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="<?php echo base_url(); ?>assets/assets1/video/news1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Banglades News Video </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="<?php echo base_url(); ?>assets/assets1/video/news3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="<?php echo base_url(); ?>assets/assets1/video/news1.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Spondon News -2019 </h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="<?php echo base_url(); ?>assets/assets1/video/news3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
