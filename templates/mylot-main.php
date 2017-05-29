<?php
/** @var Bind[] $rates */
?>
<section class="rates container">
    <h2>Мои ставки</h2>
    <table class="rates__list">
        <?php
        foreach ($rates as $bind):
            $lot = $bind->getLot();
        ?>
        <tr class="rates__item">
            <td class="rates__info">
                <div class="rates__img">
                    <img src="<?=$lot->img_path?>" width="54" height="40" alt="Сноуборд">
                </div>
                <h3 class="rates__title"><a href="/lot.php?id=<?=htmlspecialchars($lot->id)?>"><?=htmlspecialchars($lot->name)?></a></h3>
            </td>
            <td class="rates__category">
                <?=htmlspecialchars($lot->getCategory()->name)?>
            </td>
            <td class="rates__timer">
                <div class="timer timer--finishing"><?=htmlspecialchars($lot->end_date)?></div>
            </td>
            <td class="rates__price">
                <?=htmlspecialchars($lot->getCurrentBet())?> р
            </td>
            <td class="rates__time">
                <?=htmlspecialchars(formatTime($bind->date))?>
            </td>
        </tr>
        <?php endforeach;?>
        </table>
</section>
