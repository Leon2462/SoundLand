<div class="card" align="center" style="width: 50rem;margin:50px auto; background-color:#FFFFFF99;border: 6px solid #00000099;padding: 10px; border-radius: 25px;">
 <h5 class="card-title">Личный кабинет</h5>
    <div class="card-body" align="left">
        <?php if( $edit ){ ?>
            <?php if( $edited ){ ?>
                <div class="alert alert-success">
                    <span>Сохранено!</span>
                </div>
            <?php } ?>

            <form method="POST" enctype="multipart/form-data">
                <p>
                    <div class="row">
                        <div class="col">
                            <span>Аватар: </span>
                            <input class="form-control" type="file" name="avatar" accept="image/*">
                        </div>
                        <div class="col">
                            <span>Текущий аватар: </span>
                            <img src="<?=htmlspecialchars($user->icon)?>" style="width: 100px">
                        </div>
                    </div>
                </p>
                <p>
                    <span>Почта: </span>
                    <input class="form-control" type="text" value="<?=htmlspecialchars($user->login)?>" disabled>
                </p>
                <p>
                    <span>Никнейм: </span>
                    <input class="form-control" type="text" name="User[nickname]" value="<?=htmlspecialchars($user->nickname)?>">
                </p>
                <p>
                    <span>Роль: </span>
                    <input class="form-control" type="text" value="<?=htmlspecialchars($user->role)?>" disabled>
                </p>
                <button class="btn btn-dark" type="submit">Сохранить</button>
            </form>
        <?php }else{ ?>
            <p>
                <span>Аватар: </span>
                <img src="<?=htmlspecialchars($user->icon)?>" style="width: 100px;">
            </p>
            <p>
                <span>Почта: </span>
                <?=$user->login?>
            </p>
            <p>
                <span>Никнейм: </span>
                <?=$user->nickname?>
            </p>
            <p>
                <span>Роль: </span>
                <?=$user->role?>
            </p>
            <a href="?edit=1" class="btn btn-dark">Редактировать данные</a>
        <?php } ?>
    </div>
</div>