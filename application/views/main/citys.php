<style>.description-city{font-size: 14px;margin: 0;}.description-city{margin-bottom: 30px;}</style>
<header class="masthead" style="background-image: url('/public/images/header.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>METRO 2033</h1>
                    <span class="subheading">Фан-сайт вселенyої metro 2033</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="row">
                <?php if (empty($list)): ?>
                <p>Список міст пустий</p>
                <?php else: ?>
                <?php foreach ($list as $val): ?>
                <div class="book-city col-lg-4">
                    <a class="link-books" href="/city/<?php echo $val['id']; ?>">
                                <h3 class="book-title">
                            <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                        </h3>
                    </a>
                    <p class="description-city">
                        <?php echo htmlspecialchars(mb_substr($val['description'],0, 170), ENT_QUOTES); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="clearfix">
                <?php echo $pagination; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
