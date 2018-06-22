<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/addmutant" method="post">
                            <div class="form-group">
                                <label>des</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Факти</label>
                                <textarea class="form-control" rows="8" name="facts"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Тактика бою</label>
                                <textarea class="form-control" rows="8" name="battl"></textarea>
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