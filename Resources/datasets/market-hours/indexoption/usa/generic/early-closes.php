<!-- Code generated by market-hour-code-generator.py -->
<?php 
$content = file_get_contents(DOCS_RESOURCES."/datasets/market-hours/index/usa/generic/early-closes.html");
echo str_replace("market:", "Option market:", $content)
?>