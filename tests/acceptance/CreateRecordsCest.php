<?php 

class CreateRecordsCest
{
    public function testInitialRecordsInDatabaseAsExpected(AcceptanceTester $I)
    {
        $I->seeNumRecords(4, 'movie');  //executed on db_books database

    }

    public function createRecordAfterValidLogin(AcceptanceTester $I)
    {
        // Arrange / Act

        // go to login form
        $I->amOnPage('/index.php?action=login');

        // enter data into fields
        $I->fillField('username', 'admin');
        $I->fillField('password', 'admin');

        // Act - submit form
        $I->click('LOGIN');

        // go to New Movie form page
        $I->amOnPage('/index.php?action=newMovieForm');

        $I->fillField('title', 'Rocky II');
        $I->fillField('price', '4');

        $I->click('Submit');


        $I->seeNumRecords(5, 'movie');  //executed on db_books database
    }

    public function errorWhenAttemptToCreateRecordWithoutLoggingIn(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php?action=newMovieForm');
        $I->fillField('title', 'Rocky II');
        $I->fillField('price', '4.99');

        $I->click('Submit');

        $I->see('error');

    }
}




