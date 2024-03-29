<div class="global-block-container">
	<div class="global-content-block">
		<div class="blog-banner banner-wrap banner-no-bg">
			<div class="banner-animated banner-elem">
				<div class="tb">
					<div class="text-wrap tc">
						<div class="tb">
							<div class="tr">
								<div class="tc">
									<?if(!empty($arResult["ACTIVE_FROM"])):?>
										<div class="date"><?=CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($arResult["ACTIVE_FROM"], CSite::GetDateFormat()));?></div>
									<?endif;?>
									<?if(!empty($arResult["NAME"])):?>
										<h1 class="ff-medium"><?=$arResult["NAME"]?></h1>
									<?endif;?>
									<?if(!empty($arResult["PREVIEW_TEXT"])):?>
										<div class="descr"><?=$arResult["PREVIEW_TEXT"]?></div>
									<?endif;?>
								</div>
							</div>
							<div class="social">
								<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,telegram"></div>
							</div>
						</div>
					</div>
					<?if(!empty($arResult["RESIZE_DETAIL_PICTURE"])):?>
						<div class="image tc">
							<img src="<?=$arResult["RESIZE_DETAIL_PICTURE"]["src"]?>" alt="<?=$arResult["NAME"]?>">
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
		<div class="detail-text-wrap">
			<?=$arResult["DETAIL_TEXT"]?>
			<div class="btn-simple-wrap">
				<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="btn-simple btn-small"><?=GetMessage("NEWS_BACK")?></a>
			</div>
		</div>
		<?if(count($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) == 1):?>
		<div class="fotorama" data-width="100%" data-maxwidth="800" data-nav="thumbs" data-allowfullscreen="true" data-loop="true">
  			<img src="<?=$arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["FILE_VALUE"]["SRC"]?>">
  		</div>
  		<?else:?>
		<div class="fotorama" data-width="100%" data-maxwidth="800" data-nav="thumbs" data-allowfullscreen="true" data-loop="true">
			<?foreach($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTO"]["FILE_VALUE"] as $arVal):?>
  			<img src="<?=$arVal["SRC"]?>">
  			<?endforeach?>
		</div>
		<?endif?>
	</div>
	<?global $arrFilter; $arrFilter["!ID"] = $arResult["ID"];?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"blogDetail",
		array_merge($arParams, array("NEWS_COUNT" => 3, "FILTER_NAME" => "arrFilter", "INCLUDE_IBLOCK_INTO_CHAIN" => "N", "ADD_SECTIONS_CHAIN" => "N", "ADD_ELEMENT_CHAIN" => "N", "SET_TITLE" => "N", "DISPLAY_TOP_PAGER" => "N", "DISPLAY_BOTTOM_PAGER" => "N")),
		$component
	);?>
</div>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
<script src="//yastatic.net/share2/share.js" charset="utf-8"></script>
