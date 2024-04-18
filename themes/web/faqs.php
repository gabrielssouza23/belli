<?php
echo $this->layout("_theme");
?>
<?php
$this->start("specific-script");
?>
<script src="themes/web/assets/js/scripts-faqs.js"></script>
<?php
$this->end();
?>

<?php
    //var_dump($faqs);
    foreach ($faqs as $faq){
        echo "<div class=\"faq\">
               <h1 class=\"faq-question\">{$faq->question}</h1>
               <p class=\"faq-answer\">{$faq->answer}</p>
              </div>";
    }
?>

<?php
//foreach ($faqs as $faq):
    ?>
<!--    <div class="faq">
        <h1 class="faq-question"><?php /*= //$faq->question; */?></h1>
        <p class="faq-answer"><?php /*= //->answer; */?></p>
    </div>-->
<?php
//endforeach;
?>

<!--<div class="faq">
    <h1 class="faq-question">Pergunta 1</h1>
    <p class="faq-answer">Resposta 1</p>
</div>
<div class="faq">
    <h1 class="faq-question">Pergunta 2</h1>
    <p class="faq-answer">Resposta 2</p>
</div>
<div class="faq">
    <h1 class="faq-question">Pergunta 2</h1>
    <p class="faq-answer">Resposta 2</p>
</div>-->

