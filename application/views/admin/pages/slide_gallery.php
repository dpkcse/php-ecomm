<div class="row">
    <?php foreach ($each_slide_img as $value) { ?>
        <div class="col-sm-4 col-md-3">
            <div class="card slide_ga_img" style="height:180px;width:248px">
                <div class="select_forslide">
                <label class="css-input switch switch-info">
                    <input type="checkbox"><span></span>
                </label>
                </div>
                <div class="card-block gallery_content">
                    <img src="<?php echo base_url().$value->slide_img; ?>" style="max-width:100%;max-height:100%" alt="">
                    <!-- <p>Card's content..</p> -->
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- .col-sm-6 -->
</div>