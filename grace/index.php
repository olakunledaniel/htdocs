<?php
    require_once 'core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
    include 'includes/headerfull.php';
    include 'includes/leftbar.php';
    
    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $db->query($sql);
?>

            
         <!--main content-->
            <div class="col-sm-8">
                <div class="row text-center">
                    <h2><b>Featured products</b></h2>
                    <?php while($product = mysqli_fetch_assoc($featured)) : ?>
                    <div class="col-sm-6 col-md-4">
                        <h4><?= $product['title']; ?></h4>
                        <?php $photos = explode(',', $product['image']); ?>
                        <img src="<?= $photos[0]; ?>" alt="watch" class="img-responsive img-thumbnail">
                        <p class="list_price text-danger">List Price: <s>₦<?= $product['list_price']; ?></s></p>
                        <p class="price">Our Price: ₦<?= $product['price']; ?></p>
                        <button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            
            
<?php 
    include 'includes/rightbar.php';
    include 'includes/footer.php';
?>
        <br><br>
    
            
            
            
    