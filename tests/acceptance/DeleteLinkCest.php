<?php 

class DeleteLinkCest
{
    public function errorWhenAttemptDeleteWithoutLogin(AcceptanceTester $I)
    {
        // Arrange / Act
        $I->amOnPage('/index.php?action=deleteMovie&id=1');

        // Assert
        $I->see('error');
    }

    public function oneLessRecordAfterDeleteUrlVisited(AcceptanceTester $I)
    {
        // I need to login first
        $I->amOnPage('/index.php?action=login');

        $I->fillField('username', 'admin');
        $I->fillField('password', 'admin');

        $I->click('LOGIN');


        // Arrange / Act
        $I->amOnPage('/index.php?action=deleteMovie&id=1');

        // Assert
        $I->seeNumRecords(3, 'movie');
    }

}
