<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/editweapon/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Назва книги</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Клас зброї</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['class'], ENT_QUOTES); ?>" name="class">
                            </div>
                            <div class="form-group">
                                <label>Урон</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['damage'], ENT_QUOTES); ?>" name="damage">
                            </div>
                            <div class="form-group">
                                <label>Магазин</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['score'], ENT_QUOTES); ?>" name="score">
                            </div>
                            <div class="form-group">
                                <label>Режим стрільби</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['shooting_mode'], ENT_QUOTES); ?>" name="shooting_mode">
                            </div>
                            <div class="form-group">
                                <label>Патрони</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['ammunition'], ENT_QUOTES); ?>" name="ammunition">
                            </div>
                            <div class="form-group">
                                <label>Модифікації</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['modifications'], ENT_QUOTES); ?>" name="modifications">
                            </div>
                            <div class="form-group">
                                <label>Середня ціна</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?>" name="price">
                            </div>
                            <div class="form-group">
                                <label>Описання</label>
                                <textarea class="form-control" rows="8" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Переваги</label>
                                <textarea class="form-control" rows="8" name="advantages"><?php echo htmlspecialchars($data['advantages'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Недостатки</label>
                                <textarea class="form-control" rows="8" name="limitations"><?php echo htmlspecialchars($data['limitations'], ENT_QUOTES); ?></textarea>
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