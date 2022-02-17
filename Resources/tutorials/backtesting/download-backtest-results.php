<?php

$getDownloadBacktestResultsText = function($textToPrepend="") {
	echo "<p>{$textToPrepend} and then, under the <span class='tab-name'>Overview</span> tab, click <span class='button-name'>Download Results</span> to download the backtest results. The file that's downloaded contains a JSON object that holds the following data from the backtest results page:</p>

        <ul>
            <li>Runtime statistics</li>
            <li>Charts</li>
            <li>The data in the <span class='tab-name'>Overview</span> tab</li>
            <li>The data in the <span class='tab-name'>Orders</span> tab</li>
        </ul>";
}

?>