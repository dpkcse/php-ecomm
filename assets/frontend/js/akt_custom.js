function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}

function findIndexOfObj(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] == value) {
            return array.indexOf(array[i]);
        }
    }
    return false;
}
function findvalOfObj(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] == value) {
            return array[i];
        }
    }
    return false;
}



var user_id = $('#userStatus').attr('data-id');
var user_wish_list = [];

if((localStorage.getItem('myCart')) == null || ""){
    var cartProduct = [];
}else{
    var cartProduct = JSON.parse(localStorage.getItem('myCart'));
}
function addToCart(proId){
    var findObj = findvalOfObj(myAllProducts, 'product_id', proId);
    var findObjCart = findvalOfObj(cartProduct, 'product_id', proId);
    var findindexOf = findIndexOfObj(cartProduct, 'product_id', proId);

    if (findObj !== false){
        if(findObjCart !== false){
            cartProduct[findindexOf].qty = cartProduct[findindexOf].qty + 1;
            localStorage.setItem('myCart', JSON.stringify(cartProduct));
            cartProduct = JSON.parse(localStorage.getItem('myCart'));
            headcartOption();
        }else{
            findObj["qty"] = 1;
            cartProduct.push(findObj);
            localStorage.setItem('myCart', JSON.stringify(cartProduct));
            cartProduct = JSON.parse(localStorage.getItem('myCart'));
            headcartOption();
        }
        console.log(77, JSON.parse(localStorage.getItem('myCart')));
    }else{
        console.log(findObj);
    }
}


$(function(){
    if(pageTitle == 'customer_wishlist'){
        $('#wishListDesign').html("");
    }

    headcartOption();
    getWishlistforUser();

});

function headcartOption(){
    var totalPrice = 0;
    if(cartProduct.length > 0){

        $.each(cartProduct, function(k,v){
            if(v.product_new_price !== null){
                if(v.product_new_price > 0){

                    var price = v.product_new_price * v.qty;
                }else{
                    var price = v.product_price * v.qty;
                }
                totalPrice = totalPrice + price;
                document.getElementById("totalAmountOfcart").innerText = totalPrice ;
                document.getElementById("dropdownTotalmini").innerText = totalPrice ;

                $('.miniCartItem'+v.product_id+'').remove();
                $('#cartItemListmini').append(minicartItemhtml(v,price));
                if( pageTitle == 'shopping_cart'){

                    $('#cookieProducts').append(shoppingProductHtml(v,price));
                    $('#grandTotal').text('Tk. '+totalPrice);
                    $('#subTotal').text('Tk. '+totalPrice);
                }
            }


        });
        $('.cartItemCount').text(cartProduct.length);
    }else{
        document.getElementById("totalAmountOfcart").innerText = 0 ;
        document.getElementById("dropdownTotalmini").innerText = 0 ;
        $('.cartItemCount').text(cartProduct.length);
        $('#grandTotal').text('Tk. 0');
        $('#subTotal').text('Tk. 0');
    }
}


function minicartItemhtml(data,price){
    var html  = '<div class="row miniCartItem'+data.product_id+'">';
        html +=     '<div class="col-xs-4">';
        html +=             '<div class="image"> <a href="#"><img src="'+baseUrl+''+data.product_image+'" alt=""></a> </div>';
        html +=     '</div>';
        html +=     '<div class="col-xs-7">';
        html +=         '<h3 class="name"><a href="#">'+data.product_name+'</a></h3>';
        html +=         '<div class="price">Tk. '+price+'</div>';
        html +=      '</div>';
        html +=      '<div class="col-xs-1 action"> <a onclick="removeCart('+data.product_id+')"><i class="fa fa-trash"></i></a> </div>';
        html += '</div>';

        return html;
}

function removeCart(id){
    $('.miniCartItem'+id+'').html('');
    var findindexOf = findIndexOfObj(cartProduct, 'product_id', id);
    cartProduct.splice(findindexOf, 1);
    localStorage.setItem('myCart', JSON.stringify(cartProduct));
    cartProduct = JSON.parse(localStorage.getItem('myCart'));
    headcartOption();
}

function updateQty(id,value){

    var findObj = findvalOfObj(myAllProducts, 'product_id', id);
    var findObjCart = findvalOfObj(cartProduct, 'product_id', id);
    var findindexOf = findIndexOfObj(cartProduct, 'product_id', id);

    cartProduct[findindexOf].qty = value;
    localStorage.setItem('myCart', JSON.stringify(cartProduct));
    cartProduct = JSON.parse(localStorage.getItem('myCart'));
    headcartOption();
}

function addToWishlist(id){
    if(user_id !== undefined){
        var data = {
            userId : user_id,
            productId : id
        }

        if(user_wish_list.indexOf(id) == -1){
            $.ajax({
                url: baseUrl+ '/frontend/createWishlist',
                type: 'POST',
                data: data,
                error: function() {
                   console.log('failed')
                },
                success: function(data) {
                    user_wish_list.push(id);
                }
             });
        }else{
            alert('This product already exists in wishlist');
        }

    }else{
        alert('If you want this product add your wishlist ? Then you have to login.');
    }
}

function getWishlistforUser(){
    if(user_id !== undefined){
        var data ={
            userId :user_id
        }
        $.ajax({
            url: baseUrl+ '/frontend/getCustomerWishList',
            type: 'POST',
            data: data,
            error: function() {
               console.log('failed')
            },
            success: function(data) {
                let res = JSON.parse(data);
                 $.each(res,function(k,v){
                    user_wish_list.push(parseInt(v.product_id));
                    if(pageTitle == 'customer_wishlist'){
                        $.each(myAllProducts, function(ka,va){
                            if(va.product_id == v.product_id){
                                $('#wishListDesign').append(drawWishlistdesign(va));
                            }
                        });
                    }
                 });
            }
         });
    }
}

function drawWishlistdesign(va){
    var design = '<tr id="wishViewId'+va.product_id+'">';
        design +=   '<td class="col-md-2"><img src="'+baseUrl+''+va.product_image+'" alt="imga"></td>';
        design +=   '<td class="col-md-7">';
        design +=      '<div class="product-name"><a href="#">'+va.product_name+'</a></div>';
        design +=      '<div class="rating">';
        design +=          '<i class="fa fa-star rate"></i>';
        design +=          '<i class="fa fa-star rate"></i>';
        design +=          '<i class="fa fa-star rate"></i>';
        design +=          '<i class="fa fa-star rate"></i>';
        design +=          '<i class="fa fa-star non-rate"></i>';
        design +=          '<span class="review">( 06 Reviews )</span>';
        design +=      '</div>';
        if(va.product_new_price > 0){

            design +=      '<div class="price">Tk.'+va.product_new_price+'<span>Tk. '+va.product_price+'</span>';
        }else{
            design +=      '<div class="price">Tk.'+va.product_price+'';

        }
        design +=      '</div>';
        design +=   '</td>';
        design +=   '<td class="col-md-2">';
        design +=      '<a onclick="addToCart('+va.product_id+')" class="btn-upper btn btn-primary">Add to cart</a>';
        design +=   '</td>';
        design +=   '<td class="col-md-1 close-btn">';
        design +=      '<a onclick="removeToWishlist('+va.product_id+','+user_id+')" class=""><i class="fa fa-times"></i></a>';
        design +=   '</td>';
        design +='</tr>';

        return design;
}


function removeToWishlist(proid, customerid){
    var data = {
        productId : proid,
        customerId : customerid
    }

    $.ajax({
        url: baseUrl+ '/frontend/removeCustomerWishlist',
        type: 'POST',
        data: data,
        error: function() {
           console.log('failed')
        },
        success: function(res) {
            if(res == "success"){
                $('#wishViewId'+data.productId).remove();
                removeA(user_wish_list, parseInt(data.productId));
            }
        }
     });
}

// $(function() {
//     $('.cate_pagination').pagination({
//         items: 500,
//         itemsOnPage: 12,
//         displayedPages: 5,
//         currentPage: 1,
//         edges: 2,
//         cssStyle: 'light-theme'
//     });
// });
