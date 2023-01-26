
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
            <input id="name" type="text" aria-label="username" disabled class="form-control" name="username" value="<?=$data->name;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Email</span>
            <input type="text" aria-label="email" disabled class="form-control" name="email" value="<?=$data->email;?>">
        </div>
        <div class="input-group my-4">
            <span class="input-group-text" style="width:8rem;">Password</span>
            <input type="text" aria-label="password" disabled class="form-control" name="password" value="<?=$data->password;?>">
        </div>
        
        <div class="input-group my-4 d-flex justify-content-around">
            <a href="/update-buyer-form?name=<?=$data->name;?>" class="btn btn-warning"><i class="fa-solid fa-eye"> Update user</i></a>
            <button id="delete-button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete user</button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script>

        $('#delete-button').click(function() {

            let data = {
             'name':$('#name').val(),
            };

            $.ajax({
                type: "delete",
                url: "/api/delete-user",
                data: JSON.stringify(data),
                success:function(){
                    window.location.replace("http://lyon.local/show_buyers");
                }
            });
            
        });

    </script>