<?php
/**
 * Partner Logos Section Template Part
 *
 * @package Astra Child Theme
 */


$partner_logos = [
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon1.png'), 'alt' => 'Brand 1' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon2.png'), 'alt' => 'Brand 2' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon3.png'), 'alt' => 'Brand 3' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon4.png'), 'alt' => 'Brand 4' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon5.png'), 'alt' => 'Brand 5' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon6.png'), 'alt' => 'Brand 6' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon7.png'), 'alt' => 'Brand 7' ],
    [ 'image' => home_url('/wp-content/uploads/2025/09/brandIcon8.png'), 'alt' => 'Brand 8' ],
];
?>


<section class="partnerLogoSection">
    <div class="partnerLogoSectionWrapper">
        <?php foreach ( $partner_logos as $partner ) : ?>
            <img 
                src="<?php echo esc_url( $partner['image'] ); ?>" 
                alt="<?php echo esc_attr( $partner['alt'] ); ?>" 
                class="partner-logo-img" 
            />
        <?php endforeach; ?>
    </div>
</section>
<style>
    .partnerLogoSection{
        width:100%;
        padding:10px;
        display: flex;
        align-items:center;
        justify-content:center;
    }
    .partnerLogoSectionWrapper{
        width:100%;
        height:auto;
        max-width:1400px;
        display: flex;
        flex-wrap:wrap;
        align-items:center;
        justify-content:center;
        gap:5%;
        row-gap:20px;
    }
    .partner-logo-img{
        width:20%;
        height:100%;
        max-height:102px;
    }
</style>
