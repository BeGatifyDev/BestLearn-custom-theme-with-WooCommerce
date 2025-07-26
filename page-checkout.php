<?php
/* Template Name: Custom Checkout */
get_header(); 
?>

<style>
.checkout-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 1rem;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
}
.woocommerce form.checkout {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}
.woocommerce form.checkout .col2-set,
.woocommerce form.checkout #order_review {
    flex: 1 1 100%;
}
@media screen and (min-width: 768px) {
    .woocommerce form.checkout .col2-set {
        flex: 1 1 60%;
    }
    .woocommerce form.checkout #order_review {
        flex: 1 1 35%;
    }
}
.woocommerce-checkout-review-order-table th,
.woocommerce-checkout-review-order-table td {
    padding: 1rem;
    border: 1px solid #eee;
}
</style>

<div class="checkout-container">
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</div>

<?php get_footer(); ?>
