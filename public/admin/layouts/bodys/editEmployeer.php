<div class="row" style="height: 100px;display: flex;align-items: center;">
    <div class="col-xl-5 col-lg-5">
        <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Анкета агента</h3>
        <div class="card corpcard">
            <input type="file" id="profileimage" hidden>
            <label for="profileimage">
                <div class="w-100 mt-2 d-flex justify-content-start align-items-center btn btn-default">
                    <img src="/profile/assets/img/deflogo.png" alt="" width="70px" style="margin-right: 15px;">
                    <h2>Загрузить фото</h2>
                    <svg class="iconafter" transform="translate(3 -2)" width="15px" height="15px"><use  xlink:href="#icon-paper-clip"></use></svg>
                </div>
            </label>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 text-right">
        <a href="userstatistic?id=<?=$_GET['id'];?>"><button id="form-add" class="btn btn-warning">Назад к статистике</button></a>
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-12 mt-5">
        <hr>
    </div>
</div>


<div class="row mt-3">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12 hidden">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ID</div>
                        </div>
                        <input type="text" class="form-control" id="form-id" placeholder="" value="<?=$user['id'];?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">ФИО</div>
                        </div>
                        <input type="text" class="form-control" id="form-name" placeholder="" value="<?=$user['name'];?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Номер банковской карты</div>
                        </div>
                        <input type="text" class="form-control" id="form-card" placeholder="" value="<?=$user['card'];?>">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button id="form-edit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form-edit').on('click', function () {
        $('#form-edit').html('<i class="fas fa-pulse fa-spinner"></i>');

        setTimeout( function() {
            $.post(
                "/admin/action/editEmployeer.php",
                {
                    "id": $('#form-id').val(),
                    "name": $('#form-name').val(),
                    "card": $('#form-card').val()
                },
                function (data) {
                    // console.log(data);
                    if (data == 'success') {
                        $('#form-edit').html('Сохранено');
                        setTimeout(function(){
                            $('#form-edit').html('Сохранить');
                        }, 800);
                    } else {
                        $('#form-edit').html('Неизвестная ошибка');
                        setTimeout(function(){
                            $('#form-edit').html('Сохранить');
                        }, 1500);
                    }
                }
            );
        }, 500);
    });
</script>