<style>
    .des-mutant h3{font-size: 35px;font-weight: 700;}
    .des-mutant p span {font-family:monospace;font-size: 18px;} .mutant-facts {font-size: 18px; margin-bottom: 0px;}
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
                <div class="col-lg-12 des-mutant">
                   <h3>
                        <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
                    </h3>
                    <img src="/public/materials/mutants/<?php echo $data['id']; ?>.jpg" alt="">
                </div>
                <div class="col-lg-12 des-mutant">
                   <p class="mutant-facts"><span>описання: </span>
                        <?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>
                    </p> <hr>
                    <p class="mutant-facts"><span>тактика бою: </span>
                        <?php echo htmlspecialchars($data['battl'], ENT_QUOTES); ?>
                    </p> <hr>
                    <p class="mutant-facts"><span>Факти: </span>
                        <?php echo htmlspecialchars($data['facts'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
                        
        </div>
    </div>
</div>
