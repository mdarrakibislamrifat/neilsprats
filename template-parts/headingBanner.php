<div id="bannerWrapper">
        <div class="whoWeAreWrapper">
            <div class="heading">
                <img src="http://localhost/neilsPart/wp-content/uploads/2025/09/Group-1000006018.png" alt="png"
                    width="76" height="62">
                <h2 class="titleOne">
                    <?php echo esc_html($args['heading']?? 'banner heading'); ?>
                </h2>
            </div>
            <p class="description">
                <?php echo esc_html( $args['tagline'] ?? '' ); ?>
            </p>
        </div>
</div>

<style>
    #bannerWrapper {
    width: 100%;
    height: auto;
    padding:64px 10px;
    background: linear-gradient(to right, #EDDDA9, #EDDDA9, #D4AF37);
    display:flex;
    align-items:center;
    justify-content:center;
}
#bannerWrapper .whoWeAreWrapper{
    width:100%;
    max-width:670px;
    text-align:center;
}
#bannerWrapper .whoWeAreWrapper .titleOne{
    margin:12px 0 24px 0;
}

</style>