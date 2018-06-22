<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/editgame/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Назва</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Рік видання</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['year'], ENT_QUOTES); ?>" name="year">
                            </div>
                            <div class="form-group">
                                <label>Розробник</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['developer'], ENT_QUOTES); ?>" name="developer">
                            </div>
                            <div class="form-group">
                                <label>Видавець</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['public'], ENT_QUOTES); ?>" name="public">
                            </div>
                            <div class="form-group">
                                <label>Тип видання</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['type_public'], ENT_QUOTES); ?>" name="type_public">
                            </div>
                            <div class="form-group">
                                <label>Платформа</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['platform'], ENT_QUOTES); ?>" name="platform">
                            </div>
                            <div class="form-group">
                                <label>Мова інтерфейсу</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['lan_interface'], ENT_QUOTES); ?>" name="lan_interface">
                            </div>
                            <div class="form-group">
                                <label>Мова озвучки</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['lan_voice'], ENT_QUOTES); ?>" name="lan_voice">
                            </div>
                            <div class="form-group">
                                <label>ОС</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['oc'], ENT_QUOTES); ?>" name="oc">
                            </div>
                            <div class="form-group">
                                <label>Процесор</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['processor'], ENT_QUOTES); ?>" name="processor">
                            </div>
                            <div class="form-group">
                                <label>Оперативна пам'ять</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['ram'], ENT_QUOTES); ?>" name="ram">
                            </div>
                            <div class="form-group">
                                <label>Відеокарта</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['video_card'], ENT_QUOTES); ?>" name="video_card">
                            </div>
                            <div class="form-group">
                                <label>Місце на диску</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['memory'], ENT_QUOTES); ?>" name="memory">
                            </div>
                            <div class="form-group">
                                <label>Описання ігри</label>
                                <textarea class="form-control" rows="8" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Особливості ігри</label>
                                <textarea class="form-control" rows="8" name="features"><?php echo htmlspecialchars($data['features'], ENT_QUOTES); ?></textarea>
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