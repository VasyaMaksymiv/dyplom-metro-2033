<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/editbook/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Назва книги</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Автор</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['author'], ENT_QUOTES); ?>" name="author">
                            </div>
                            <div class="form-group">
                                <label>Видавництво</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['edition'], ENT_QUOTES); ?>" name="edition">
                            </div>
                            <div class="form-group">
                                <label>Рік видання</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['year_edition'], ENT_QUOTES); ?>" name="year_edition">
                            </div>
                            <div class="form-group">
                                <label>Мова</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['language'], ENT_QUOTES); ?>" name="language">
                            </div>
                            <div class="form-group">
                                <label>Описання книги</label>
                                <textarea class="form-control" rows="8" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Зображення</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Зберегти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>