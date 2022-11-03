<?php
$getSetEnvText = function($isDesktopDocs, $projectLink)
{
    echo "
<p>Follow these steps to set the library environment:</p>
<ol>
    <li><a href='{$projectLink}'>Open a project</a>.</li>
    ";
    if ($isDesktopDocs)
    {
        echo "
    <li>In the left navigation menu, click the&nbsp;<img class='inline-icon' src='https://cdn.quantconnect.com/i/tu/local-lab-projects-tab.jpg'> <span class='icon-name'>Project</span>&nbsp;icon.</li>    
        "; 
    }
    echo "
    <li>In the Project panel, click the <span class='field-name'>LEAN Environment</span> field and then select an environment from the drop-down menu.</li>
</ol>
    ";
}
?>