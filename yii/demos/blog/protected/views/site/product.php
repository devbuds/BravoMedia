<?php

echo "<div class=\"productList\">";
foreach ($result as $row) {

    ?>
<!-- div containing one product with all its properties-->
<div  itemtype="http://schema.org/Product"  class="productListItem odd">

        <meta content="<?= CHtml::encode( $row['name'] ) ?>" itemprop="name">
        <div class="CSthumbnail ">
        
                  <!--	image container -->
           		<div class="imageLink">
                		<div class="imageWrapper">
                    <a href="#">
                        <img alt="lifevest image"  src="<?= Yii::app()->request->getBaseUrl(true).'/images/'.CHtml::encode( $row['image'] )?>"   class="img-responsive block-center" itemprop="image">
                    </a>
                 	</div>
            		 </div>
            		 
                <!--  Title and shoping button container -->
                <div itemscope="" itemprop="offers" class="caption">
                    <meta content="<?= CHtml::encode( $row['name'] ) ?>" itemprop="product title">
                    <p class="productTitle"><a class="bold" href="#"><?= CHtml::encode( $row['name'] ) ?></a></p>
                    <p class="köpbutton"><a role="button"  itemprop="url" href="#">SHOP NOW</a></p>               	   
                </div>
               
        </div>       
</div>
    
<?php  } ?>
</div> <!--  !productList -->