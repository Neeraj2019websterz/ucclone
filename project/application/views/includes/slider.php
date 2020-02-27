<?php
$active = $imgname[0]->id;

?>

        <div class="container-fluid  pt-5 pb-5">
            <div class="row pt-5">
                <div class="container-fluid p-0">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <?php
                            foreach ($imgname as $slider) {
                                if ($active == $slider->id) {

                                    ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('\assets\banner/' . $slider->banner_name); ?>" class="w-100" height="500">
                                    </div>
                                <?php } ?>
                                <div class="carousel-item">

                                    <img src="<?php echo base_url('\assets\banner/' . $slider->banner_name); ?>" class="w-100" height="500">
                                </div>
                            <?php } ?>

                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
