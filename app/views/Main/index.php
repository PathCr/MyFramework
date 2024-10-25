<?php
use S_Sait\View;
/** @var View $this */
?>

<?php if (!empty($slides)): ?>
    <div class="container-fluid my-carousel">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
             data-bs-interval="5000">
            <div class="carousel-indicators">
                <?php for ($i = 0; $i < count($slides); $i++): ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>"
                        <?php if ($i == 0) echo 'class="active"' ?>
                            aria-current="true" aria-label="Slide <?= $i ?>"></button>
                <?php endfor; ?>
            </div>
            <div class="carousel-inner">
                <?php $i = 1;
                foreach ($slides as $slide): ?>
                    <div class="carousel-item <?php if ($i == 1) echo 'active' ?>">
                        <img src="<?= PATH . $slide->img ?>" class="d-block w-100" alt="">
                    </div>
                    <?php $i++; endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>
<?php endif; ?>

<?php if (!empty($products)): ?>
<section class="featured-products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title"><?php get_Phrase('main_index_featured_products')?></h3>
            </div>

            <?php
            $this->getPart('parts/products_loop', compact('products'));
            ?>

        </div>
    </div>
</section>

<?php endif;?>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title"><?php get_Phrase('main_index_section-title_our_advantages');?></h3>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-shipping-fast"></i></p>
                    <p><?php get_Phrase('main_index_text-center_fa-shipping');?></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-cubes"></i></p>
                    <p><?php get_Phrase('main_index_text-center_fa-cubes');?></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-hand-holding-usd"></i></p>
                    <p><?php get_Phrase('main_index_text-center_fa-hand');?></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <p class="text-center"><i class="fas fa-user-cog"></i></p>
                    <p><?php get_Phrase('main_index_text-center_fa-user');?></p>
                </div>
            </div>

        </div>
    </div>
</section>









































