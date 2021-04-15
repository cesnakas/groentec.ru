<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Производство");
?><h1>Производство</h1>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"personal", 
	array(
		"COMPONENT_TEMPLATE" => "personal",
		"ROOT_MENU_TYPE" => "about",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
<div class="global-block-container">
	<div class="global-content-block">
		<div class="bx_page">
			<p><img src="/upload/proiz.jpg" class="pagePicture"></p>
<p>Для выпуска термомодифицированной продукции под  брендом Groentec был переоборудован участок лесозавода «Судома», где внедрены особые  технологии производства и контроля качества продукции. Заказ размещен на  термомодифицированную продукцию из березы и сосны, в ассортименте на текущий  момент 12 наименований продукции разного размера. </p>
<p>«Лесозавод «Судома» успешно работает на  зарубежных рынках, где термомодифицированные строительные материалы уже давно  известны и востребованы. За годы работы компания заслужила репутацию, которая  гарантирует соблюдение высочайших стандартов качества и самых строгих  требований к производству.</p>
<p><a href="http://sudomawood.ru/" rel="nofollow"><strong>Лесозавод «Судома»</strong></a> –  ориентированное на экспорт предприятие по производству материалов из древесины  для строительной и мебельной отраслей, в том числе термообработанных,  импрегнированных, строганых и брашированных пиломатериалов. Одно из ключевых  направлений деятельности лесозавода – производство продукции из березы.</p>
<p>Это крупнейший в России и Восточной Европе  производитель термообработанных пиломатериалов, сертифицированный FSC. 90 %  продукции лесозавода «Судома» экспортируется. </p>
<p>Мощность по переработке сырья: 150 000 м3 в год.  «Судома» – ключевое предприятие комплекса производств по глубокой  деревопереработке «Дедовичи». Основным поставщиком сырья выступает «Дедовичская  лесная компания».</p>


<h2>О важности ПИЛОМАТЕРИАЛОВ</h2>
<p>Древесина считается одним из наиболее устойчивых и экологически  благоприятных строительных материалов из-за ее способности поглощать углекислый  газ при выращивании, его способности адаптироваться в качестве продукта и того  факта, что по окончании она может быть переработана или использована в качестве  биотоплива. Тем не менее, чтобы это продолжалось, мы должны обеспечить, чтобы  он был получен из хорошо управляемых, надежно сертифицированных лесов, чтобы  исключить риск обезлесения. Незаконная древесина представляет реальную угрозу  для лесной промышленности.</p>
<p>  тесно сотрудничает со своей цепочкой поставок, чтобы гарантировать,  что продукция, производимая и поставляемая Группе, не только отвечает  законодательным требованиям, но и учитывает такие важные факторы, как  устойчивость сырья, снижение содержания углерода в продуктах и &#8203;&#8203;обеспечение  социальных условий. для работников </p>


 
		</div>
	</div>
	<div class="global-information-block">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include", 
			".default", 
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "information_block",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>