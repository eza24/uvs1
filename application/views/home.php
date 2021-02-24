 <!-- Nav Bar End -->
 <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <div class="row tn-slider">
                        <?php 
                            $query = $this->db->query('select * from news where status=1 and types=1 limit 3');
                            foreach ($query->result() as $row){       
                                $id = $row->id;
                                $pic = $row->picture;
                                $title = $row->title;
                                $date = $row->date;
                                $comments = $row->comments;
                        ?>
                        <div class="col-md-12">
                            <div class="single-blog row no-gutters style-four border_one">
                                <div class="col-12 col-sm-4 blog-text" style="padding: 20px;">
                                    <h1>
                                        <a href="<?php echo base_url(); ?>index.php/home/sub_news/<?php echo $id?>"><?php echo $title;?></a>
                                    </h1>
                                    <div class="meta-bottom d-flex">
                                        <a href="<?php echo base_url(); ?>index.php/home/sub_news/<?php echo $id?>"><?php echo $comments;?></a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8 blog-image">
                                    <div class="thumb">
                                        <a href="<?php echo base_url(); ?>index.php/home/sub_news/<?php echo $id?>">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/upload/<?php echo $pic;?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- </section> -->
    <!-- Нийтлэл-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sn-related">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                            <h2>Нийтлэл</h2>
                        </div>
                        <div class="row sn-slider">
                            <?php 
                                $query = $this->db->query('select * from article where status=1 order by sort asc');
                                foreach ($query->result() as $row){       
                                    $id = $row->id;
                                    $pic = $row->picture;
                                    $title = $row->title;
                                    $date = $row->date;
                                    $comments = $row->comments;
                            ?>
                            <div class="col-md-4" style="padding:10px">
                                <div class="single-blog row no-gutters style-four border_one">
                                    <div class="col-12 col-sm-5">
                                        <div class="thumb">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>admin/public/upload/<?php echo $pic;?>" alt="" style="width: 150px; height: 210px;" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7" style="padding: 10px;margin: auto;">
                                        <div class="short_details">
                                            <div class="meta-top d-flex">
                                                <a href="#"><?php echo $title;?></a>
                                            </div>
                                            <!-- <a class="d-block" href="single-blog.html">
                                                <h4>Brought all day </h4>
                                            </a>
                                            <div class="meta-bottom d-flex">
                                                <a href="#">March 12 , 2019 . </a>
                                                <a class="dark_font" href="#">By Alen Mark</a> -->
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Ярилцлага-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sn-related">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                            <h2>Ярилцлага</h2>
                        </div>
                        <div class="row sn-slider">
                            <?php 
                                $query = $this->db->query('select * from interview where status=1 order by sort asc');
                                foreach ($query->result() as $row){       
                                    $id = $row->id;
                                    $pic = $row->picture;
                                    $title = $row->title;
                                    $date = $row->date;
                                    $comments = $row->comments;
                            ?>
                            
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img width="350" height="260" src="<?php echo base_url(); ?>admin/public/upload/<?php echo $pic;?>" />
                                    <div class="sn-title">
                                        <a href=""><?php echo $title;?></a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Сонин-->
    <div class="single-news1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sn-related">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                            <h2>Сонин</h2>
                        </div>
                        <div class="row sn-slider">
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-1.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-2.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-3.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-4.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-1.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-2.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-3.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sn-img">
                                    <img src="<?php echo base_url(); ?>assets/img/news-350x223-4.jpg" />
                                    <div class="sn-title">
                                        <a href="">Interdum et fames ac ante</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

   