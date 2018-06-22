<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/editmutant/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Назва мутанта</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Факти</label>
                                <textarea class="form-control" rows="8" name="facts"><?php echo htmlspecialchars($data['facts'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="facts"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Тактика бою</label>
                                <textarea class="form-control" rows="8" name="facts"><?php echo htmlspecialchars($data['battl'], ENT_QUOTES); ?></textarea>
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