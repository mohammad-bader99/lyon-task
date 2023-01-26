<div class="text-center" style="margin :5rem;">
        <h1 class="border-bottom border-3 m-auto w-50">buyers</h1>
</div>
<div class="container my-5 ml-5">

    <table class="table border-success my-3">
    <thead>
        <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">profile_pic</th>
        <th scope="col">password</th>
        </tr>
    </thead>
    <tbody>

    <?PHP foreach ($data as $record) :?>
        <tr class="my-3">
        <th scope="row"><?=$record->name;?></th>
        <td><?=$record->email;?></td>
        <td><img src="<?=$record->profile_picture;?>" alt="user_img" style="width:1rem;height:1rem;"></td>
        <td><?=$record->password;?></td>
        <td><a href="/display_buyer?name=<?=$record->name;?>" class="btn btn-danger" style="width:5rem;">show</a></td>
        <td></td>
        </tr>
    <?PHP endforeach?> 

    </tbody>
    </table>
</div>


