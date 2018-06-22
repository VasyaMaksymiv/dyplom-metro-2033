<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/editcity/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Назва Міста</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Держава</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['state'], ENT_QUOTES); ?>" name="state">
                            </div>
                            <div class="form-group">
                                <label>Місце</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['place'], ENT_QUOTES); ?>" name="place">
                            </div>
                            <div class="form-group">
                                <label>Статус</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['status'], ENT_QUOTES); ?>" name="status">
                            </div>
                            <div class="form-group">
                                <label>Загрози</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['threats'], ENT_QUOTES); ?>" name="threats">
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Описується в книгах</label>
                                <textarea class="form-control" rows="8" name="appearance"><?php echo htmlspecialchars($data['appearance'], ENT_QUOTES); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Зберегти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>