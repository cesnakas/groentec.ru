<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");
?><h1>О магазине</h1>
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
			<p><img src="/upload/about.jpg" class="pagePicture"></p>
<p>GROENTEC - уникальный продукт для качественной жизни!</p>
<p>GROENTEC ведущий производитель термически  модифицированной древесины в соответствии с международной стандартами и лучшими  экспертами в этой области. </p>
<p>Мы использует инновационный производственный  подход и передовые методы.</p>
<p>Дерево - живой материал с дышащей структурой, мы  сохраняем и продеваем эту жизненную силу. </p>
<p>Благодаря безопасному методу производства,  который не наносит вреда природе и здоровью, ниши деревянные изделия намного  более устойчивы к суровым климатическим и физическим условиям.</p>
<p>Мы дает новую жизнь древесине благодаря  экологическому процессу, который обеспечивает долговечность продукции. Мы сохраняем  физическую текстуру древесины, высокую эстетическую ценность, обеспечивая  превосходную стабильность размеров. </p>
<p>Мы используем наш обширный опыт, накопленный в  отрасли, чтобы поставлять самые лучшие пиломатериалы и обрабатывать их в  соответствии со строгими стандартами. Мы используем только лучшее  сертифицировано сырье - FSC® и PEFC.</p>
<p>Мы финансово защищенная и профессиональная  компания, которая не подведет вас. </p>
<p>Передовые производственные линии, инновационный  подход, мировые стандарты и критерии производства, превосходный сервис,  качественная продукция, которая обладает выносливостью, устойчивостью и  продуманной линией дизайна, основа ценности бренда GROENTEC.</p>





 
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