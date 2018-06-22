<style>
    .des-wep p {margin: 0; font-size: 18px;}
    .des-wep p span {font-family:monospace;font-size: 18px;}
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
                <div class="col-lg-8 ">
                   <h3>
                        <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
                    </h3> <br>
                    <img width="450px" height="250px" src="/public/materials/weapons/<?php echo $data['id']; ?>.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 des-wep">
                   <p ><span>клас: </span>
                        <?php echo htmlspecialchars($data['class'], ENT_QUOTES); ?>
                    </p>
                    <p><span>пошкодження від вистрілi: </span>
                        <?php echo htmlspecialchars($data['damage'], ENT_QUOTES); ?>
                    </p>
                    <p><span>набоїв в магазині: </span>
                        <?php echo htmlspecialchars($data['score'], ENT_QUOTES); ?>
                    </p>
                    <p><span>режим стрільби: </span>
                        <?php echo htmlspecialchars($data['shooting_mode'], ENT_QUOTES); ?>
                    </p>
                    <p ><span>тип набоїв: </span>
                        <?php echo htmlspecialchars($data['ammunition'], ENT_QUOTES); ?>
                    </p>
                    <p ><span>доступні модифікації: </span>
                        <?php echo htmlspecialchars($data['modifications'], ENT_QUOTES); ?>
                    </p>
                    <p ><span>середня ціна в патронах: </span>
                        <?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?>
                    </p>
                    <p>
                       <span>Описання:</span>
                        <?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>
                    </p>
                    <p ><span>перваги: </span>
                        <?php echo htmlspecialchars($data['advantages'], ENT_QUOTES); ?>
                    </p>
                    <p><span>недоліки: </span>
                        <?php echo htmlspecialchars($data['limitations'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
