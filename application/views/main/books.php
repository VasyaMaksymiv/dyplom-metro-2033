<style>.book-block{font-size: 18px;margin: 0px;margin-bottom: 30px;}.book-block p {font-size: 14px;margin-top: 0px;margin-bottom: 0px;}.book-block h3{font-size: 16px;margin-top: 5px;}.des{margin-top: 0px;}</style>
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
                <p>Список книг пуст</p>
                <?php else: ?>
                <?php foreach ($list as $val): ?>
                <div class="book-block col-lg-4">
                   <img class="books-img" src="/public/books/<?php echo $val['id']; ?>.jpg" alt="">
                    <a class="link-books" href="/book/<?php echo $val['id']; ?>">
                                <h3 class="book-title">
                            <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                        </h3>
                    </a>
                    <p> <span>автор:</span>
                        <?php echo htmlspecialchars($val['author'], ENT_QUOTES); ?>
                    </p>
                    <p class="des">
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
