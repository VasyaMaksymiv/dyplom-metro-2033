<style> .book-info h3{font-size: 20px;font-weight: 700;}.book-info p {margin-top: 0px;font-size: 18px;padding: 0;margin: 0;}.book-info p span {font-family:monospace;font-size: 18px;} .des-book p span {font-family:monospace;font-size: 18px;} .des-book p {font-size: 18px;}</style>
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
                <div class="col-lg-4">
                    <img src="/public/books/<?php echo $data['id']; ?>.jpg" alt="">
                </div>
                <div class="col-lg-6 book-info">
                    <h3>
                        <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
                    </h3>
                    <p class="book-author"><span>автор: </span>
                        <?php echo htmlspecialchars($data['author'], ENT_QUOTES); ?>
                    </p>
                    <p class="book-author"><span>видавництво: </span>
                        <?php echo htmlspecialchars($data['edition'], ENT_QUOTES); ?>
                    </p>
                    <p class="book-author"><span>мова: </span>
                        <?php echo htmlspecialchars($data['language'], ENT_QUOTES); ?>
                    </p>
                    <p class="book-author"><span>рік видання: </span>
                        <?php echo htmlspecialchars($data['year_edition'], ENT_QUOTES); ?>
                    </p>
                    <p class="book-author"><span>Кількість сторінок: </span>300</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 des-book">
                    <p>
                    <span>Описання книги:</span>
                        <?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
