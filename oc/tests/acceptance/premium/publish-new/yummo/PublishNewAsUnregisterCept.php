<?php 
$I = new AcceptanceTester($scenario);
$I->am('a visitor');
$I->wantTo('publish a new ad');

$I->login_admin();

$I->activate_theme('yummo');

$I->click('Logout'); 

$I->amOnPage('/publish-new.html');
$I->see('Publish new advertisement');
$I->fillField('#title','New ad unregister yummo');
$I->fillField('#category-selected','18');
$I->fillField('#location-selected','4');
$I->fillField('#description','This is a new ad from unregister user on the yummo theme');
// $I->attachFile('input[type="file"]', 'photo.jpg');
$I->fillField('#phone','99885522');
$I->fillField('#address','barcelona');
$I->fillField('#price','25');
$I->fillField('#website','https://www.google.com');
$I->fillField('#name','David');
$I->fillField('#email','david@gmail.com');
$I->click('submit_btn');

$I->see('Advertisement is posted. Congratulations!');

$I->amOnPage('/apartment/new-ad-unregister-yummo.html');
$I->see('New ad unregister yummo');
$I->see('This is a new ad from unregister user on the yummo theme');
$I->see('Barcelona');

// Check if user has created
$I->amOnPage('/user/david');
$I->dontSee('Page not found');

$I->login_admin();

$I->activate_theme('default');

$I->click('Logout'); 
