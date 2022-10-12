<?php
function component($productname, $productprice, $productimage,$productid){
    $element = "
    <div class='col-md-3 sm-3 mt-3'>
                <form action='product.php' method='POST'>
                    <div class='card shadow'>

                        <div>
                            <img src='$productimage'width='100%' class='img-fluid card-ing-top'>
                        </div>
                        <div class='card-body'>
                            <h4 class='card-title'>$productname</h4>
                            <div class='ratting'>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star'></i>
                                <i class='fa fa-star-half'></i>
                                <i class='fa fa-star-half'></i>
                                <p>
                                    pad decription 
                                </p>
                                <h4><span class='price'>$productprice shs</span></h4>
                                <button type='submit' class='btn btn-warning' name='add'>Add to cart<i
                                        class='fa fa-shopping-cart'></i></button>
                                <input type='hidden' name='product_id' value='$productid'>        
                            </div>
                        </div>

                    </div>
                </form>
            </div>
    ";
    echo $element;
}


function cartElement($productprice,$productimage,$productname,$productid){
    $element="
    <form action='cart.php?action=remove&id=$productid' method='POST' class='cart-items'>
                        <div class='border rounded'>
                            <div class='row bg-white'>
                                <div class='col-md-3' >
                                    <img src='$productimage'alt='' class='img-fluid'>
                                </div>
                                <div class='col-md-6'>
                                    <h5 class='pt-2'>$productname</h5>
                                    <small class='text-secondary'>Seller:dailytution</small>
                                    <h5 class='pt-2'>$productprice shs</h5>
                                    <button type='submit' class='btn btn-warning'>Save for Later</button>
                                    <button type='submit' class='btn btn-danger mx-2'  name='remove'>Remove</button>
                                </div>
                                <div class='col-md-3 py-5'>
                                    <div>
                                        <button type='button' class='btn bg-light rounded-circle'><i class='fa fa-minus'></i></button>
                                        <input type='text' value='1' class='form-control w-25 d-inline' name='' id=''>
                                        <button type='button' class='btn bg-light rounded-circle'><i class='fa fa-plus'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
    ";
    echo $element;
}