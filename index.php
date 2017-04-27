<?php
require('classes/Template.php'); // Подключаем файл с классом
$content = "
<h1>Текст заголовка</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Piso igitur hoc modo, vir optimus tuique, ut scis, amantissimus. Ait enim se, si uratur, Quam hoc suave! dicturum. <mark>Duo Reges: constructio interrete.</mark> <b>Immo videri fortasse.</b> </p>

<ol>
	<li>Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas.</li>
	<li>Huius ego nunc auctoritatem sequens idem faciam.</li>
	<li>Utilitatis causa amicitia est quaesita.</li>
</ol>


<ul>
	<li>An potest cupiditas finiri?</li>
	<li>Sit ista in Graecorum levitate perversitas, qui maledictis insectantur eos, a quibus de veritate dissentiunt.</li>
	<li>Laboro autem non sine causa;</li>
	<li>Quid igitur dubitamus in tota eius natura quaerere quid sit effectum?</li>
</ul>
";

$template = new Template('template/index.tpl');
$template->set_tpl('{TITLE}','Проверка шаблонизатора'); // Установка переменной {TITLE}
$template->set_tpl('{BGCOLOR}','#9CCCC8'); // Установка цвета {BGCOLOR}
$template->set_tpl('{CONTENT}', $content); //Установка переменной {CONTENT}
$template->tpl_parse(); // Парсим
echo $template->template; // Выводим страницу
?>
