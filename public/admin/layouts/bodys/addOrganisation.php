<div class="row" style="height: 100px;display: flex;align-items: center;">
    <div class="col-xl-5 col-lg-5">
        <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Добавить организацию</h3>
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
        <button id="form-add" class="btn btn-warning">Добавить</button>
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
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Название</div>
                        </div>
                        <input type="text" class="form-control" id="form-name" placeholder="" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Электронная почта</div>
                        </div>
                        <input type="text" class="form-control" id="form-email" placeholder="" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <select id="form-type" style="width: 100%;height:40px;padding-left:7px;border-radius:14px;border-top-right-radius: 14px;border-bottom-right-radius: 14px;border:none;">
                            <option value="Ресторан">Ресторан</option>
                            <option value="Ресторан">Кафе</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Город</div>
                        </div>
                        <input type="text" class="form-control" id="form-city" placeholder="" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Улица</div>
                        </div>
                        <input type="text" class="form-control" id="form-street" placeholder="" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Ответственное лицо</div>
                        </div>
                        <input type="text" class="form-control" id="form-person" placeholder="" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <b class="text-danger ml-2">Пароль будет выслан по указаной почте.</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form-add').on('click', function () {
        $('#form-add').html('<i class="fas fa-pulse fa-spinner"></i>');

        setTimeout( function() {
            $.post(
                "/admin/action/addOrganisation.php",
                {
                    "name": $('#form-name').val(),
                    "email": $('#form-email').val(),
                    "type": $('#form-type').val(),
                    "city": $('#form-city').val(),
                    "street": $('#form-street').val(),
                    "person": $('#form-person').val()
                },
                function (data) {
                    // console.log(data);
                    if (data == 'success') {
                        $('#form-add').html('Организация добавлена');
                        setTimeout(function(){
                            window.location.href = "/admin/";
                        }, 800);
                    } else {
                        console.log(data);
                        $('#form-add').html('Неизвестная ошибка');
                        setTimeout(function(){
                            $('#form-add').html('Добавить');
                        }, 1500);
                    }
                }
            );
        }, 500);
    });
</script>