<div class="container w-50 border border-primary" style="margin-top:2rem;">


        <input type="hidden" id="type" value="seller">

        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">name</span>
            <input type="text" id="name" aria-label="username" class="form-control" name="username" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Email</span>
            <input type="text" id="email" aria-label="email" class="form-control" name="email" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Pic</span>
            <input type="text" id="pic" aria-label="pic" class="form-control" name="pic" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Password</span>
            <input type="text" id="password" aria-label="password" class="form-control" name="password" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Shop Name</span>
            <input type="text" id="shop_name" aria-label="shop_name" class="form-control" name="shop_name" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Shop Phone</span>
            <input type="text" id="shop_phone" aria-label="shop_phone" class="form-control" name="shop_phone" required>
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Shop Location</span>
            <input type="text" id="shop_location" aria-label="shop_location" class="form-control" name="shop_location" required>
        </div>
        
        <div class="input-group my-4">
            <button id="create" class="btn btn-primary m-auto" style="width: -webkit-fill-available;">Create User</button>
        </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
<script>

    $('#create').click(function(e) {
            e.preventDefault();
            let data = {
                'type': $('#type').val(),
                'name': $('#name').val(),
                'email': $('#email').val(),
                'pic': $('#pic').val(),
                'password': $('#password').val(),
                'shop_name': $('#shop_name').val(),
                'shop_phone': $('#shop_phone').val(),
                'shop_location': $('#shop_location').val()
            };

            $.ajax({
                type: "post",
                url: "/api/create-seller",
                data: JSON.stringify(data),
                success: function(response) {
                    window.location.replace("/");
            }
            });

    });
</script>