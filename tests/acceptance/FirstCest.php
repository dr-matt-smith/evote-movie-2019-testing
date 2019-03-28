<?php 

class FirstCest
{
    public function homepageWorking(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        // you may need to change text/case - to match text appearing on _your_ home page :-)
        $I->see('home page');
    }

}
