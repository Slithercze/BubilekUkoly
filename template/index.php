<?php
require_once "Template.php";
echo "Nefunguje to";

$page = new Template("page.html");

$page->assign("title","Hello");
$page->assign("caption", "World!");
$page->assign("message", "Už to funguje!");
$page->show();