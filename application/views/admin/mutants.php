<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Мутанти</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>Список мутантів пустий</p>
                        <?php else: ?>
                            <table class="table">
                                <tr>
                                    <th>Назва</th>
                                    <th>Редагувати</th>
                                    <th>Видалити</th>
                                </tr>
                                <?php foreach ($list as $val): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                                        <td><a href="/admin/editmutant/<?php echo $val['id']; ?>" class="btn btn-primary">Редагувати</a></td>
                                        <td><a href="/admin/deletemutant/<?php echo $val['id']; ?>" class="btn btn-danger">Видалити</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php echo $pagination; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>