<?php 
    $is_image = $url =='/apple/image';
    $is_info = $url=='/apple/info';
    $is_menu_info = $url=='/apple/menu';
?>

<!--
<ul class="nav nav-pills">
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/apple/menu">Яблоко</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "Яблоки" : ' ' ?>"  href="/apple/image"> Картинка</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/apple/info">Описание</a>
  </li>
</ul>
-->

<?php if ($is_image){ ?>
    <img src="/images/apple.jpg" alt="">
<?php } else if ($is_info) { ?>
  Круглое, наливное, краснобокое яблоко. У него сверху блестящая кожица, а внутри белая мякоть и черные зернышки. Яблоко приятно пахнет. Этот аромат ни с чем не спутаешь. <br>

  Бывают яблоки красные, зеленые и желтые. Большие и маленькие, и совсем мелкие, их называют ранетками. Когда они висят на ветках, так и хочется быстрее сорвать и попробовать на вкус. <br>

  Они сочные. Надкусишь, а сок так и брызжет. В яблоках много витаминов, они полезные. Их нужно есть каждый день, тогда будешь здоров.
<?php } else if ($is_menu_info) {?>
    Тут я расскажу про Яблоки
    <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $is_image ? "Яблоки" : ' ' ?>"  href="/apple/image"> Картинка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/apple/info">Описание</a>
            </li>
        </ul>
<?php } ?>