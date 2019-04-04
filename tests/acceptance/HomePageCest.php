<?php 

class HomePageCest
{
    public function homepageWorking(AcceptanceTester $I)
    {
        // Act - request URL '/'
        $I->amOnPage('/');

        // Assert

        // you may need to change text/case - to match text appearing on _your_ home page :-)
        // we should see this text somewhere in the contents of the Request
        $I->see('home page');

        // use CSS selector to specify that it is in an <h1> that we expected to see this text
        $I->see('home page', 'body h1');
    }

}
