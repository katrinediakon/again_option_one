<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>