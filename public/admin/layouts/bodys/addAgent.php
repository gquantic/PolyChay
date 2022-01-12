
<div class="row" style="height: 100px;display: flex;align-items: center;">
    <div class="col-xl-5 col-lg-5">
        <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Добавить агента</h3>
    </div>
    <div class="col-xl-3 col-lg-3 text-right">
        <button id="form-add" class="btn btn-warning">Добавить агента</button>
    </div>
</div>



<div class="row mt-3">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="font-family: 'Gilroy Bold';">Имя</div>
                        </div>
                        <input type="text" class="form-control" id="form-name" placeholder="" value="">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="font-family: 'Gilroy Bold';">Фамилия</div>
                        </div>
                        <input type="text" class="form-control" id="form-surname" placeholder="" value="">
                    </div>
                  <!--  <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="font-family: 'Gilroy Bold';">Телефон</div>
                        </div>
                        <input type="text" class="form-control" id="form-phone" placeholder="" value="">
                    </div> -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="font-family: 'Gilroy Bold';">Город</div>
                        </div>
                        <input type="text" class="form-control" id="form-town" placeholder="" value="">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="font-family: 'Gilroy Bold';">Статус</div>
                        </div>
                        <input type="text" class="form-control" id="form-status" placeholder="" value="">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button id="form-add" type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form-add').on('click', function () {
        $('#form-add').html('<i class="fas fa-pulse fa-spinner"></i>');
        setTimeout( function() {
            $.post(
                "/profile/action/addAgent.php",
                {
                    "name": $('#form-name').val(),
                    "surname": $('#form-surname').val(),
                   /* "phone": $('#form-phone').val(),*/
                    "town": $('#form-town').val(),
                    "status": $('#form-status').val(),
                },
                function (data) {
                    // console.log(data);
                    if (data == 'success') {
                        $('#form-add').html('Агент добавлен');
                        setTimeout(function(){
                            window.location.href = "referals";
                        }, 800);
                    } else {
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