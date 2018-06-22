<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/addcity" method="post">
                            <div class="form-group">
                                <label>Назва</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Держава</label>
                                <input class="form-control" type="text" name="state">
                            </div>
                            <div class="form-group">
                                <label>Місце</label>
                                <input class="form-control" type="text" name="place">
                            </div>
                            <div class="form-group">
                                <label>Статус</label>
                                <input class="form-control" type="text" name="status">
                            </div>
                            <div class="form-group">
                                <label>Загрози</label>
                                <input class="form-control" type="text" name="threats">
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Описується в книжках</label>
                                <textarea class="form-control" rows="8" name="appearance"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавити</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>