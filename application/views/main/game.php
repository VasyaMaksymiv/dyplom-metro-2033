<style>
        .game-info p {margin-top: -10px;font-size: 16px;padding: 0;margin: 0;}
        .game-info p span {font-family:monospace;font-size: 14px;}
        .game-info h3{font-size: 20px;font-weight: 700;}
        .des-game p span {font-family:monospace;font-size: 16px;}
        .des-game p {font-size: 18px;}
</style>
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
                    <img src="/public/materials/games/<?php echo $data['id']; ?>.jpg" alt="">
                </div>
                <div class="col-lg-8 game-info">
                    <h3>
                        <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
                    </h3>
                    <p class=""><span>рік випусику: </span>
                        <?php echo htmlspecialchars($data['year'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>розробник: </span>
                        <?php echo htmlspecialchars($data['developer'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>видавець: </span>
                        <?php echo htmlspecialchars($data['public'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>тип видання: </span>
                        <?php echo htmlspecialchars($data['type_public'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>платформа: </span>
                        <?php echo htmlspecialchars($data['platform'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>мова інтефейсу: </span>
                        <?php echo htmlspecialchars($data['lan_interface'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>мова озвучки: </span>
                        <?php echo htmlspecialchars($data['lan_voice'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>ОС: </span>
                        <?php echo htmlspecialchars($data['oc'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>прцесор: </span>
                        <?php echo htmlspecialchars($data['processor'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>оперативна пам'ять: </span>
                        <?php echo htmlspecialchars($data['ram'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>відеокарта: </span>
                        <?php echo htmlspecialchars($data['video_card'], ENT_QUOTES); ?>
                    </p>
                    <p class=""><span>пам'ять на диску: </span>
                        <?php echo htmlspecialchars($data['memory'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 des-game">
                    <p>
                    <span>описання ігри:</span>
                        <?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>
                    </p>
                    <p>
                    <span>особливості ігри:</span>
                        <?php echo htmlspecialchars($data['features'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
