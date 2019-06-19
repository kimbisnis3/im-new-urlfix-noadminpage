<!-- <div class="content">
    <div class="container">
        <style>
        .empty-cart{
        text-align: center;
            font-size: 54px;
            font-weight: 200;
            padding: 10px;
        border: 5px solid;
        }
        </style>
        <div class="col-md-12 women-dresses" style="margin-bottom : 20px;">
            <div class="title">
                <h2>SHOPPING CART</h2>
            </div>
            <div class="form-artikel">
                <?php  $q = $this->cart->total_items(); ?>
                <?php
                if ($q == 0) {
                echo "<div class='empty-cart'>YOUR CART IS EMPTY</div>";
                }
                ?>
                <table id="table" border="0" class="table">
                    <?php
                    // All values of cart store in "$cart".
                    if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        <th align="center">No</th>
                        <th align="center">Name</th>
                        <th align="center">Price</th>
                        <th align="center">Qty</th>
                        <th style="witdh:20px" align="center">Amount</th>
                        <th align="center">Cancel</th>
                    </tr>
                    <?php
                    echo form_open('shop/update_cart');
                    $grand_total = 0;
                    $i = 1;
                    foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
                    <tr>
                        <td align="center">
                            <?php echo $i++; ?>
                        </td>
                        <td align="left">
                            <?php echo $item['name']; ?>
                        </td>
                        <td align="left">
                            Rp. <?php echo number_format($item['price'] ); ?>
                        </td>
                        <td align="left">
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                        </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td align="left">
                            Rp. <?php echo number_format($item['subtotal']) ?>
                        </td>
                        <td align="center">
                            <a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url('shop/remove/'. $item['rowid']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                <?php
                                // cancle image.
                                ?>
                            </a>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php // "clear cart" button call javascript confirmation message ?>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-total" style=""><b>Total: Rp. <?php echo number_format($grand_total); ?></b></td>
                        <td colspan="4" align="right">
                            <a href="<?php echo base_url('shop/delete'); ?>" type="button" class ='btn btn-danger empty' value="Clear Cart" >Clear Cart</a>
                            <?php //submit button. ?>
                            <input type="submit" role="button" class="btn btn-success" value="Update Cart">
                            <?php echo form_close(); ?>

                            <input type="button" class ='btn btn-info' value="Checkout" onclick="window.location = 'billing/guest'">
                        </td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="holder-box"></div>
    </div>
</div>
<script src="">
</script>
 -->
<div class="body">
    <div class="container">
        <div class="page">
            <main class="page-content" data-cart>
                <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
                        <meta itemprop="position" content="0" />
                    </li>
                    <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="<?php echo base_url(); ?>shop" class="breadcrumb-label" itemprop="item">Your Cart</a>
                        <meta itemprop="position" content="1" />
                    </li>
                </ul>
                <h1 class="page-heading" data-cart-page-title>
                Your Cart (<?php  echo $this->cart->total_items() ?> item)
                </h1>
                <div class="loadingOverlay"></div>
                <div data-cart-content>
                    <table class="cart" data-cart-quantity="1">
                        <thead class="cart-header">
                            <tr>
                                <th class="cart-header-item">Item</th>
                                <th class="cart-header-item">Price</th>
                                <th class="cart-header-item cart-header-quantity">Quantity</th>
                                <th class="cart-header-item">Total</th>
                            </tr>
                        </thead>
                        <tbody class="cart-list">
                            <?php
                            echo form_open('shop/update_cart');
                            $grand_total = 0;
                            $i = 1;
                            foreach ($cart as $item):
                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                            ?>
                            <tr class="cart-item" data-item-row>
                                <!-- <td class="cart-item-block cart-item-figure">
                                    <img class="cart-item-image lazyload" data-sizes="auto" src="https://cdn11.bigcommerce.com/s-4b0htg/stencil/7ab98780-51eb-0137-79d3-0242ac110003/e/54f12650-d33b-0136-1167-6fe0491fb18e/img/loading.svg" data-src="https://cdn11.bigcommerce.com/s-4b0htg/images/stencil/100x100/products/699/3304/KTM_Global-Black__23193.1498640465.jpg?c=2" alt="KTM 2016 2017 Graphics Kit by SK Designs Australia" title="KTM 2016 2017 Graphics Kit by SK Designs Australia">
                                </td> -->
                                <td class="cart-item-block cart-item-title">
                                    <!-- <p class="cart-item-brand">KTM</p> -->
                                    <h4 class="cart-item-name"><?php echo $item['name']; ?></h4>
                                    <!-- <dl class="definitionList">
                                        <dt class="definitionList-key">Product Selection:</dt>
                                        <dd class="definitionList-value">
                                        Full Graphics Kit
                                        </dd>
                                    </dl>
                                    <a href="#" data-item-edit="d376d658-fa25-4d07-93be-cd6186c49f3a">Change</a> -->
                                    
                                </td>
                                <td class="cart-item-block cart-item-info">
                                    <span class="cart-item-label">Price</span>
                                    <span class="cart-item-value ">RP <?php echo number_format($item['price'] ); ?></span>
                                </td>
                                <td class="cart-item-block cart-item-info cart-item-quantity">
                                    <span class="cart-item-label">Price</span>
                                    <span class="cart-item-value "><?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="4" style="text-align: center"'); ?></span>
                                </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                <td class="cart-item-block cart-item-info">
                                    <span class="cart-item-label">Total</span>
                                    <strong class="cart-item-value ">RP. <?php echo number_format($item['subtotal']) ?></strong>
                                    <a class="cart-remove icon" data-cart-itemid="d376d658-fa25-4d07-93be-cd6186c49f3a" href="<?php echo base_url('shop/remove/'. $item['rowid']); ?>" >
                                    <svg><use xlink:href="#icon-close"></use></svg>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div data-cart-totals>
                <ul class="cart-totals">
                    <li class="cart-total">
                        <div class="cart-total-label">
                            <strong>Grand total:</strong>
                        </div>
                        <div class="cart-total-value cart-total-grandTotal">
                            <span>RP. <?php echo number_format($grand_total); ?></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-actions">
                <span>
                    <a style="margin: 10px; background-color: #269abc; border-color: #1b6d85;" class="button button--primary" href="<?php echo base_url('billing/guest'); ?>" title="Click here to proceed to checkout">Check out</a>
                </span>
                <span>
                    <input type="submit" style="margin: 10px;" class="button button--primary" title="Click here to proceed to checkout" value="Update Cart"></input>
                </span>
                <?php echo form_close(); ?>
                <span>
                    <a style="margin: 10px; background-color: #d9534f; border-color: #d43f3a" class="button button--primary" href="<?php echo base_url('shop/delete'); ?>" title="Click here to proceed to checkout">Clear Cart</a>
                </span>
            </div>
            <!-- snippet location cart -->
        </main>
    </div>
</div>
</div>