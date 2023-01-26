<div class="text-center" style="margin :5rem;">
        <h1 class="border-bottom border-3 m-auto w-50">Sellers</h1>
</div>
<div class="container my-5 ml-5">

    <table class="table border-success my-3">
    <thead>
        <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">profile_pic</th>
        <th scope="col">password</th>
        <th scope="col">shop name</th>
        <th scope="col">shop phone</th>
        <th scope="col">shop location</th>
        </tr>
    </thead>
    <tbody>

    <?PHP foreach ($data as $record) :?>
        <tr class="my-3">
        <th scope="row"><?=$record->name;?></th>
        <td><?=$record->email;?></td>
        <td><img src="<?=$record->profile_picture;?>" alt="user_img" style="width:1rem;height:1rem;"></td>
        <td><?=$record->password;?></td>
        <td><?=$record->shop_name;?></td>
        <td><?=$record->shop_phone;?></td>
        <td><?=$record->shop_location;?></td>
        <td><a href="/display_seller?name=<?=$record->name;?>" class="btn btn-danger" style="width:5rem;">show</a></td>
        <td></td>
        </tr>
    <?PHP endforeach?> 

    </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>

        $('#update-form-button').click(function(e){
            e.preventDefault;
            $('#single-record-form').addClass('d-none');
            $('#update-form').removeClass('d-none');
        });

        $('#update-button').click(function() {

 
            let data = {
             'id':$('#transaction_id').val(),
             'item_qty': $('#item_qty').val(),
             'item_price': $('#item_price').val(),
             'total':$('#item_price').val()* $('#item_qty').val()
            };

            $.ajax({
                type: "put",
                url: "/api/update-transaction",
                data: JSON.stringify(data),
                success:function(){
                    window.location.replace("http://htu-project.local/user-record");
                }
            });
            
        });$('#delete_button').click(function() {
 
            let data = {
             'name':$('#transaction_id').val(),
            };

            $.ajax({
                type: "delete",
                url: "/api/delete-transaction",
                data: JSON.stringify(data),
                success:function(){
                    window.location.replace("http://htu-project.local/user-record");
                }
            });
            
        });

    </script>

