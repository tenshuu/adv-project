<<div class="site-index">
    <div class="jumbotron">
        <h1>Актуальные объявления</h1>
    </div>
    <div class="row">
        <?foreach($advs as $adv) :?>
        <div class="col-lg-4">
            <h2><?=$advs->title?></h2>
            <p><?=$advs->ad?></p>
            <p><a class="btn btn-default" href="<?=$adv->alias?>">Узнать больше</a></p>
        </div>
        <?endforeach;?>
    </div>
</div>