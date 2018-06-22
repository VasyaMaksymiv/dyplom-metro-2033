<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/addgame" method="post">
                            <div class="form-group">
                                <label>Назва</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Рік видання</label>
                                <input class="form-control" type="text" name="year">
                            </div>
                            <div class="form-group">
                                <label>Розробник</label>
                                <input class="form-control" type="text" name="developer">
                            </div>
                            <div class="form-group">
                                <label>Видавець</label>
                                <input class="form-control" type="text" name="public">
                            </div>
                            <div class="form-group">
                                <label>Тип видання</label>
                                <input class="form-control" type="text" name="type_public">
                            </div>
                            <div class="form-group">
                                <label>Платформа</label>
                                <input class="form-control" type="text" name="platform">
                            </div>
                            <div class="form-group">
                                <label>Мова інтерфейсу</label>
                                <input class="form-control" type="text" name="lan_interface">
                            </div>
                            <div class="form-group">
                                <label>Мова озвучки</label>
                                <input class="form-control" type="text" name="lan_voice">
                            </div>
                            <div class="form-group">
                                <label>ОС</label>
                                <input class="form-control" type="text" name="oc">
                            </div>
                            <div class="form-group">
                                <label>Процесор</label>
                                <input class="form-control" type="text" name="processor">
                            </div>
                            <div class="form-group">
                                <label>Оперативна пам'ять</label>
                                <input class="form-control" type="text" name="ram">
                            </div>
                            <div class="form-group">
                                <label>Відеокарта</label>
                                <input class="form-control" type="text" name="video_card">
                            </div>
                            <div class="form-group">
                                <label>Місце на диску</label>
                                <input class="form-control" type="text" name="memory">
                            </div>
                            <div class="form-group">
                                <label>Описання ігри</label>
                                <textarea class="form-control" rows="8" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Особливості ігри</label>
                                <textarea class="form-control" rows="8" name="features"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Зображення</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавити</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>