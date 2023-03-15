 window.onload = () => {

     toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": false,
         "progressBar": false,
         "positionClass": "toast-top-right",
         "preventDuplicates": false,
         "onclick": null,
         "showDuration": "300",
         "hideDuration": "1000",
         "timeOut": "3000",
         "extendedTimeOut": "1000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
     }

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });

     displayPrice();
    $(document).on( "change keyup", "#search, #priceSelect, .chbBrand", function(e) {

        let word = $("#search").val()
        let route = $(".route").val();
        let id = $(".idCat").val();

        let sort = $('#priceSelect').val();
        let filter = $('.chbBrand');
        let brands = [];

        for (let i of filter){
            if(i.checked){
                brands.push(i.value);
            }
        }

        if (sort=='asc' || sort=='desc'){
            data = {
                'word':word,
                'sort':sort,
                'brands':brands
            }
        }
        else{
            data = {
                'word':word,
                'brands':brands
            }
        }

        $.ajax({
            url:'/products/'+route+'/'+id,
            method:'get',
            dataType:"json",
            data:data,
            success:function(data){
                //console.log(data)
                displayProducts(data);
            },
            error:function(xhr){
                console.log(xhr);
            }
        })
    });

    $('.btn-cart').on('click', (e)=>{
        e.preventDefault();
        let id = $('.btn-cart').data('id');

        $.ajax({
            url:"/cart",
            method:'post',
            dataType: 'json',
            data:{
                'id':id,
            },
            success:function(data){
                toastr.success('Product successfully added to cart.')
                displayPrice();
            },
            error:function(xhr){
                toastr.error('There was an error processing your request.')
                console.log(xhr);
            }
        })
    })

     $(document).on('click', '.item-delete', function(e){
         e.preventDefault();

         let id = $(this).data('delete');
         console.log(id);

         $.ajax({
             url: "/cart/"+id,
             method: 'DELETE',
             success: function (data) {
                 $('#cart_item_' + id).remove();
                 displayPrice();
             },
             error: function (xhr) {
                 console.log(xhr);
             }
         })
     })

     $(document).on('show.bs.modal', '.modal', function (e){
         let orderId = $(this).data('orderid');
         //console.log(orderId);

         $.ajax({
             url: "/orders",
             method: 'get',
             dataType:'json',
             data:{
                 "id":orderId
             },
             success: function (data) {
                 //console.log(data);
                 displayProductsOrder(data);
             },
             error: function (xhr) {
                 console.log(xhr);
             }
         })
     })


}

 function displayProducts(data){
     var ispis="";

     let arr = data.data;
     //console.log(data)
     if(!arr.length){
         $('.pag-style').html('');
         $('#displayProducts').html(`<p class="alert alert-danger">There are no products for given search values.</p>`);
         return;
     }

         for(let i of arr){
             ispis+=`<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-2 d-flex flex-column">`

                 if(i.admin_img==null){
                     ispis+=`<img src="../../assets/img/${i.img}" alt="${i.name}" class="img-fluid">`
                 }
                 else{
                     ispis+=`<img src="../../storage/products/${i.img}" alt="${i.name}" class="img-fluid">`
                 }

                 ispis+=`<p class="text-uppercase text-muted">${i.brandName}</p>
                            <p>${i.name}</p>
                            <div class="flex-fill d-flex flex-column justify-content-end">
                                <a href="/single-product/${i.route}/${i.id}"><small>See details</small></a>
                                <p class="m-0">€${i.price}</p>
                            </div>
                        </div>`;
         }

         let pagination = `<ul class="pagination">`;
         let links = data.links;
         //console.log(links)
        for (let l of links) {
            if (l.url == null) {
                let arrLabel = l.label.split(' ')
                //console.log(arrLabel)
                if (arrLabel[0] == '&laquo;' && arrLabel[1] == 'Previous') {
                    pagination += `<li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>`
                }

                if (arrLabel[0] == 'Next' && arrLabel[1] == '&raquo;') {
                    pagination += `<li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>`
                }
            }

            if(l.url!=null){
                if(l.active){
                    pagination+=`<li class="page-item active"><a class="page-link text-muted" href="${l.url}">${l.label}</a></li>`
                }
                else{
                    pagination+=`<li class="page-item"><a class="page-link" href="${l.url}">${l.label}</a></li>`
                }

            }
        }

        $('.pag-style').html(pagination);
        $('#displayProducts').html(ispis);
 }

 function displayPrice(){
     $.ajax({
         url:'/cart',
         method:'get',
         dataType:"json",
         success:function(data){
             console.log(Object.values(data))

             data = Object.values(data);
             let price=0;

             for (let i of data){
                 price+=i.price*i.quantity;
             }

             if (price == 0){
                 $('.display-cart').html('<p class="alert alert-danger">No products in cart.<p>');
             }

             $('#cart-page-display-price').html('€'+price+',00');
             $('.price small').html('€'+price+',00');
         },
         error:function(xhr){
             console.log(xhr);
         }
     })
 }

 function displayProductsOrder(data){
    let ispis=`<table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                <tbody>`;

    for (let i of data){
        ispis+=` <tr class="align-middle">
                      <td>${i.id}</td>
                      <td>${i.name}</td>
                      <td> €${i.price}</td>
                      <td>${i.quantity}</td>`
        if(i.admin_img==null){
            ispis+=`<td><img src="../../assets/img/${i.img}" alt="${i.name}" class="w-50"/></td>`
        }
        else{
            ispis+=`<td><img src="../../storage/products/${i.img}" alt="${i.name}" class="w-50"/></td>`
        }
        ispis+=`</tr>`
    }

    ispis+=`</tbody></table>`

     $('.modal-body').html(ispis);
 }



