<?php
/* Template Name: Custom Cart */
get_header(); 
?>

<style>
.cart-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem 1rem;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
}
.woocommerce table.shop_table {
    width: 100%;
    border-collapse: collapse;
}
.woocommerce table.shop_table th,
.woocommerce table.shop_table td {
    padding: 1rem;
    border: 1px solid #eee;
}
.woocommerce .cart-collaterals {
    margin-top: 2rem;
}
@media screen and (max-width: 768px) {
    .woocommerce table.shop_table thead {
        display: none;
    }
    .woocommerce table.shop_table tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid #ddd;
    }
    .woocommerce table.shop_table td {
        display: flex;
        justify-content: space-between;
        padding: 0.75rem;
        border: none;
        border-bottom: 1px solid #eee;
    }
}
</style>

<div class="cart-container">
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>

<?php get_footer(); ?>
