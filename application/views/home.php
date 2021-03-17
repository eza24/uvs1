 <!-- Nav Bar End -->
        <div class="container firstSlide">
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

    <!-- Сонин-->
    <div class="newspaper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                        <h2>Сонин</h2>
                    </div>
                    <section class="center slider responsive">
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="news-img">
                                <img src="<?php echo base_url(); ?>assets/img/news.png" />
                                <div class="news-title">
                                    <a href="" tabindex="-1">Ярилцлага-</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>



   