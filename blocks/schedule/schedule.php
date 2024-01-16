<?php
$loc = get_field('lokalizacje');
$i = 0;
$ii = 0;
?>
<div id="schedule">
    <div class="schedule__wrap">
    <?php if($loc) { ?>
        <ul class="sch-nav tab">
            <?php foreach($loc as $item) { ?>
                <li class="tablinks <?php echo $i == 0 ? 'active' : false; ?>" onclick="tab(event, '<?php echo $item['lokalizacja']; ?>')"><span><?php echo $item['lokalizacja']; ?></span></li>
            <?php $i++; } ?>
        </ul>
    <?php } ?>
    <?php if($loc) { ?>
        <div class="sch-content">
            <?php foreach($loc as $item) { ?>
            <div id="<?php echo $item['lokalizacja']; ?>" class="tabcontent <?php echo $ii == 0 ? 'active' : false; ?>">
                <div class="kal">
                    <div class="kal_wrap kal-head">
                        <div class="tr pon"><span>Poniedziałek  </span></div>
                        <div class="tr wt"> <span>Wtorek  </span></div>
                        <div class="tr sr"><span>Środa  </span></div>
                        <div class="tr czw"><span>Czwartek  </span></div>
                        <div class="tr pt"><span>Piątek  </span></div>
                        <div class="tr sob"><span>Sobota  </span></div>
                        <div class="tr nd"><span>Niedziela  </span></div>
                    </div>
                    <div class="kal_wrap kal-body">
                        <div class="tr pon">
                            <?php if($item['tydzie']['poniedzialek']) : ?>
                                <div class="tr tr-mobile"> <span>Poniedziłek</span></div>
                                <?php foreach($item['tydzie']['poniedzialek'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr wt">
                            <?php if($item['tydzie']['wtorek']) : ?>
                                <div class="tr tr-mobile"> <span>Wtorek</span></div>
                                <?php foreach($item['tydzie']['wtorek'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr sr">
                            <?php if($item['tydzie']['sroda']) : ?>
                                <div class="tr tr-mobile"> <span>Środa</span></div>
                                <?php foreach($item['tydzie']['sroda'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr czw">
                            <?php if($item['tydzie']['czwartek']) : ?>
                                <div class="tr tr-mobile"> <span>Czwartek</span></div>
                                <?php foreach($item['tydzie']['czwartek'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr pt">
                             <?php if($item['tydzie']['piatek']) : ?>
                                <div class="tr tr-mobile"> <span>Piątek</span></div>
                                <?php foreach($item['tydzie']['piatek'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr sob">
                            <?php if($item['tydzie']['sobota']) : ?>
                                <div class="tr tr-mobile"> <span>Sobota</span></div>
                                <?php foreach($item['tydzie']['sobota'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="tr nd">
                            <?php if($item['tydzie']['niedziela']) : ?>
                                <div class="tr tr-mobile"> <span>Niedziela</span></div>
                                <?php foreach($item['tydzie']['niedziela'] as $pon) : ?>
                                    <div class="ev">
                                        <?php echo $pon['godzina'] ? '<span>' . $pon['godzina'] . '</span>' : false; ?>
                                        <?php echo $pon['nazwa_zajcia'] ? '<h5>' . $pon['nazwa_zajcia'] . '</h5>' : false; ?>
                                        <?php echo $pon['krotki_opis'] ? '<p>' . $pon['krotki_opis'] . '</p>' : false; ?>
                                        <?php if($pon['link']) : ?>
                                          <?php echo '<a href="' . $pon['link']['url'] . '">' . $pon['link']['title'] . '</a>'; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $ii++ ;} ?>
            </div>
    <?php } ?>
    </div>
</div>

<!-- <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div> -->


<!-- 
<div class="accordion js">
                    <h3 class="question h5">
                        <span><?php echo $acc['accordion_name']; ?></span>
                    </h3>
                    <div class="answer">
                        <div>
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                </div> -->