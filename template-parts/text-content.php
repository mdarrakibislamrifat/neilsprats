<?php
/**
 * Template part for displaying text content
 *
 * @package Astra Child
 */
$provided_content = $args['provided_content'] ?? [
    [ 'paragraph' => 'We do not sell, rent, or share your personal information' ],
    [ 'listTitle' => 'How we use your information:' ],
    [
        'unorderedList' => [
            'item1' => 'Process and deliver your orders securely.',
            'item2' => 'Provide customer support and respond to inquiries.',
            'item3' => 'Improve our services and website experience.',
            'item4' => 'Send updates, promotions, or security alerts.',
        ]
    ],
    [ 'paragraph2' => 'We do not sell, rent, or share your personal information' ],
];
?>
<div class="text-content">
    <?php foreach ( $provided_content as $item ) : ?>

    <div class="content-block">

        <?php if ( isset( $item['paragraph'] ) ) : ?>
        <p class="text-content-paragraph"><?php echo esc_html( $item['paragraph'] ); ?></p>
        <?php endif; ?>
        <div>
            <?php if ( isset( $item['listTitle'] ) ) : ?>
            <h4 class="listTitle"><?php echo esc_html( $item['listTitle'] ); ?></h4>
            <?php endif; ?>

            <?php if ( isset( $item['unorderedList'] ) ) : ?>
            <div class="list_wrapper">


                <?php if ( isset( $item['unorderedList'] ) && is_array( $item['unorderedList'] ) ) : ?>
                <ul class="bulletList">
                    <?php foreach ( $item['unorderedList'] as $listItem ) : ?>
                    <li><?php echo esc_html( $listItem ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php if ( isset( $item['paragraph2'] ) ) : ?>
        <p class="text-content-paragraph"><?php echo esc_html( $item['paragraph2'] ); ?></p>
        <?php endif; ?>

    </div>

    <?php endforeach; ?>
</div>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.text-content {
    display: flex;
    flex-direction: column;
    gap: 24px;
    width: 100%;
}

.content-block {
    display: flex;
    flex-direction: column;
    gap: 0px;
}

.text-content-paragraph {
    font-size: 16px;
    font-weight: 300;
    margin: 0;
}

.list_wrapper {
    display: flex;
    flex-direction: column;

}

.listTitle {
    font-size: 16px;
    font-weight: 500;
    margin: 0;
}

.bulletList {
    padding-left: 20px;
    list-style-type: disc;
    margin: 0;
}
</style>