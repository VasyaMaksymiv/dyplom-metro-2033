<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <?php echo $title; ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/addweapon" method="post">
                            <div class="form-group">
                                <label>Назва</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Клас зброї</label>
                                <input class="form-control" type="text" name="class">
                            </div>
                            <div class="form-group">
                                <label>Урон</label>
                                <input class="form-control" type="text" name="damage">
                            </div>
                            <div class="form-group">
                                <label>Магазин</label>
                                <input class="form-control" type="text" name="score">
                            </div>
                            <div class="form-group">
                                <label>Режим стрільби</label>
                                <input class="form-control" type="text" name="shooting_mode">
                            </div>
                            <div class="form-group">
                                <label>Патрони</label>
                                <input class="form-control" type="text" name="ammunition">
                            </div>
                            <div class="form-group">
                                <label>Модифікації</label>
                                <input class="form-control" type="text" name="modifications">
                            </div>
                            <div class="form-group">
                                <label>Середня ціна</label>
                                <input class="form-control" type="text" name="price">
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Переваги</label>
                                <textarea class="form-control" rows="8" name="advantages"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Недостатки</label>
                                <textarea class="form-control" rows="8" name="limitations"></textarea>
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
