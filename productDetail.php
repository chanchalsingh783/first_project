<?php include('partials/menu.php'); ?>
    <section class="product-view">
        <div class="container">
            <h1 class="main-heading"><span class="position-relative">Product Details</span></h1>
            <div id="productDetail"></div>
        </div>
    </section>



<?php include('partials/footer.php'); ?>

<?php
    $data = file_get_contents('./data/product.json');
?>
<script>
    $(document).ready(function() {
        const productData = <?php echo $data; ?>;
        function display_propduct()
        {                
            const data = localStorage.getItem('set_product');
            if(data)
            {
                keys = JSON.parse(data);
                let product_container = document.querySelector('#productDetail');
                product_container.innerHTML = "";
                productData.filter(elem => elem.id === parseInt(keys.id)).map(product=>{

                    const {img, title, size, design, material, brand, origin, weight, color, length} = product
                  
                    product_container.innerHTML += `
                        <div class="card-body">
                            <div class="row pd-row">
                                <div class="col-lg-6 m-auto">
                                    <div class="product-imgs">
                                        <div class="product-display"> 
                                            <div class="img-showcase">  
                                                <img src=${img} alt="" class="img-fluid d-block"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-auto">
                                    <div class="Product-details">
                                        <div class="row">
                                            <div class="col-lg-12">   
                                                <h1>${title}</h1>
                                            </div>
                                            <div class="col-lg-12"> 
                                                <h4 class="">Product Information</h4>
                                                <p>Size - <span> ${size} </span></p>
                                                <p>Design - <span>${design}</span></p>
                                                <p>Material - <span>${material}</span></p>
                                                <p>Brand - <span>${brand}</span></p>
                                                <p>Country - <span>${origin} </span></p>
                                                <p>Weight - <span> ${weight}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    `;
                })
            }
        }
        display_propduct();
    }); 
</script>