<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/addbook" method="post">
                            <div class="form-group">
                                <label>Назва книги</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Автор</label>
                                <input class="form-control" type="text" name="author">
                            </div>
                            <div class="form-group">
                                <label>Видавництво</label>
                                <input class="form-control" type="text" name="edition">
                            </div>
                            <div class="form-group">
                                <label>Рік видання</label>
                                <input class="form-control" type="text" name="year_edition">
                            </div>
                            <div class="form-group">
                                <label>Мова</label>
                                <input class="form-control" type="text" name="language">
                            </div>
                            <div class="form-group">
                                <label>Описання книги</label>
                                <textarea class="form-control" rows="8" name="description"></textarea>
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