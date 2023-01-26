<div class="container w-50 border border-primary" style="margin-top:8rem;">


        <input type="hidden" id="type" value="buyer">

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
                'password': $('#password').val()
            };

            $.ajax({
                type: "post",
                url: "/api/create-buyer",
                data: JSON.stringify(data),
                success: function(response) {
                    window.location.replace("/");
            }
            });

    });
</script>