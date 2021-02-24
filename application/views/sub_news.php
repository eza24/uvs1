</div>
<?php
  $query = $this->db->query('select * from news where id='.$slug.'');
  $row = $query->row();

  $title = $row->title;
  $bodys = $row->bodys;
  $pic = $row->picture;
  $ognoo = $row->date;
//   $comments = $row->comments;

?>
    <div class="single-news" style="margin-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="category-details">
                        <div class="category">
                            Мэдээ
                        </div>
                        <div class="date">
                            <?php echo $ognoo; ?>
                        </div>
                        <h1><?php echo $title?></h1>
                    </div>
                    <img src="<?php echo base_url(); ?>admin/public/upload/<?php echo $pic?>">
                    <div class="contents">
                        <?php echo $bodys?>
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- <p>ahhhhhhhhhhhhhsffffffffffffffffff</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 post-text">
                   
                   
                </div>
            </div>
        </div>
    </div>