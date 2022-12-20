<?php
//Example replace a content between <h1>(.*?)</h1>
preg_replace('/<h1[^>]*>([\s\S]*?)<\/h1[^>]*>/', '<h1>'.$seoContent.'</h1>', $orgContent);
?>
