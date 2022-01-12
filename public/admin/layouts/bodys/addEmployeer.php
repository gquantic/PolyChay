<div class="row" style="height: 100px;display: flex;align-items: center;">
    <div class="col-xl-5 col-lg-5">
        <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Добавить сотрудника</h3>
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
                           <div class="input-group-text">ФИО</div>
                       </div>
                       <input type="text" class="form-control" id="form-name" placeholder="" value="">
                   </div>
               </div>
           </div>

           <div class="col-md-12 mt-2">
               <div class="card p-3" style="border-radius: 8px;">
                   <h6 class="mb-3" style="font-family: 'Gilroy Bold';">Реквизиты личной дебетовой карты</h6>
                   <div class="d-flex align-items-center">
                       <span class="opacity">Номер карты</span>
                       <input type="text" id="form-card" class="wrapper ml-3">
                   </div>
               </div>
           </div>

           <div class="col-md-12 mt-4">
               <div class="card p-3" style="border-radius: 8px;">
                   <h6 class="mb-3" style="font-family: 'Gilroy Bold';">Реквизиты для выпуска виртуальной банковской карты сервиса "Быстрый чай"</h6>
                   <div class="d-flex align-items-center">
                       <span class="opacity">Электронная почта</span>
                       <input type="text" id="form-email" class="wrapper ml-3">
                   </div>
                   <div class="d-flex align-items-center mt-2">
                       <span class="opacity">Зарегистрирован</span>
                       <input type="text" id="form-regdate" class="wrapper ml-3">
                   </div>
                   <div class="d-flex align-items-center mt-2">
                       <span class="opacity">Дата рождения</span>
                       <input type="text" id="form-birth" class="wrapper ml-3">
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
                "/profile/action/addEmployeer.php",
                {
                    "name": $('#form-name').val(),
                    "card": $('#form-card').val(),
                    "email": $('#form-email').val(),
                    "regdate": $('#form-regdate').val(),
                    "birth": $('#form-birth').val()
                },
                function (data) {
                    // console.log(data);
                    if (data == 'success') {
                        $('#form-add').html('Сотрудник добавлен');
                        setTimeout(function(){
                            window.location.href = "dashboard";
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