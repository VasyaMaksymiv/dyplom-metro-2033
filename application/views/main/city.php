<style>
    .city-info p {margin: 0; font-size: 18px;}
    .city-info p span {font-family:monospace;font-size: 18px;}
    .city-info h3{font-size: 45px;}
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
                <div class="col-lg-12 city-info">
                    <h3>
                        <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
                    </h3>
                    <p><span>держава: </span>
                        <?php echo htmlspecialchars($data['state'], ENT_QUOTES); ?>
                    </p>
                    <p><span>притулок: </span>
                        <?php echo htmlspecialchars($data['place'], ENT_QUOTES); ?>
                    </p>
                    <p><span>статус: </span>
                        <?php echo htmlspecialchars($data['status'], ENT_QUOTES); ?>
                    </p>
                    <p><span>загрози: </span>
                        <?php echo htmlspecialchars($data['threats'], ENT_QUOTES); ?>
                    </p>
                    <hr>
                    <p><span>про місто: </span>
                        <?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>
                    </p>
                    <hr>
                    <p><span>згадується в книжках: </span>
                        <?php echo htmlspecialchars($data['appearance'], ENT_QUOTES); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
