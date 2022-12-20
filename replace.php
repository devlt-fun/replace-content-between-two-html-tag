<?php
//Example replace a content between <h1>(.*?)</h1>
preg_replace('/(<h1.*?>).*?(<\/h1>)/', '$1'.$seoContent.'$2', $orgContent)
?>
