</div>

    <div class="single-news" style="margin-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <h3>Нийтлэл</h3>
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