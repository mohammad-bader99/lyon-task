
<div class="text-center my-5">
        <h1 class="border-bottom border-3 m-auto w-50"><?=$data->name;?></h1>
</div>
<div id="media" class="container w-100 row">
    <div class="text-center align-middle w-50 h-50">
        <img src="resources/views/photos/<?=$data->profile_picture;?>" style="height:25rem;width:25rem;" class="p-3 border border-primary" alt="user image">
    </div>
    <div class="text-center w-50 m-auto">
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">name</span>
            <input id="name" type="text" aria-label="username"  class="form-control" name="username" value="<?=$data->name;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Email</span>
            <input id="email" type="text" aria-label="email"  class="form-control" name="email" value="<?=$data->email;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Password</span>
            <input id="password" type="text" aria-label="password"  class="form-control" name="password" value="<?=$data->password;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">shop name</span>
            <input id="shop_name" type="text" aria-label="password"  class="form-control" name="password" value="<?=$data->shop_name;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">shop phone</span>
            <input id="shop_phone" type="text" aria-label="password"  class="form-control" name="password" value="<?=$data->shop_phone;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">shop location</span>
            <input id="shop_location" type="text" aria-label="password"  class="form-control" name="password" value="<?=$data->shop_location;?>">
        </div>
        <div class="input-group my-4 d-flex justify-content-around">
            <button id="update-button" class="btn btn-warning"><i class="fa-solid fa-eye"> Update user</i></button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>

        $('#update-button').click(function() {

        
        let data = {
        'name':$('#name').val(),
        'email': $('#email').val(),
        'password': $('#password').val(),
        'shop_name':$('#shop_name').val(),
        'shop_phone':$('#shop_phone').val(),
        'shop_location':$('#shop_location').val()
        };

        $.ajax({
            type: "put",
            url: "/api/update-user",
            data: JSON.stringify(data),
            success:function(){
                window.location.replace("http://lyon.local/show-sellers");
            }
        });

        });

    </script>