# evote - login - Acceptance and Unit Testing


## Overview

The steps below are a quickstart setup for Codeception, using settings that have been created for you.

You could, of course, setup Codeception yourself from scratch using the files and instructions at the Codeception project website:

- [https://codeception.com/](https://codeception.com/)


## Setup Codeception from Matt's Moodle files

1. Download the 'bdd.zip' file from the module Moodle page

1. Unzip the file and copy the contents into your PHP web project:

    - file `codecept.phar`
    
    - file `codeception.yml`
    
    - directory `/tests`

1. Rename file `codecept.phar` to `codecept` (if you wish - it means you can type `php codecept` rather than `php codecept.phar` ...)

1. Test Unit testing is working by running Codeception:

    - `php codecept run unit`
    
    ```bash
         php codecept run unit
        Codeception PHP Testing Framework v2.5.2
        Powered by PHPUnit 6.5.13 by Sebastian Bergmann and contributors.
        Running with seed: 
        
        
        Unit Tests (1) 
        -------------------------------------------------
        TICK - FirstUnitTest: One plus one equals two (0.00s)        
        -------------------------------------------------
        Time: 213 ms, Memory: 10.00MB
        
        OK (1 test, 1 assertion)
    ```
    
1. Test Acceptance testing is working by:

    - running your web server in one terminal window
    
        ```bash
            php -S localhost:8000 -t public
        ```
        
    - running Codeception acceptance tests by typing `php codecept run unit`
    
       ```bash
           php codecept run acceptance
           Codeception PHP Testing Framework v2.5.2
           Powered by PHPUnit 6.5.13 by Sebastian Bergmann and contributors.
           Running with seed: 
           
           
           Acceptance Tests (1) 
           -------------------------------------------------
           TICK - FirstCest: Homepage working (0.02s)
           -------------------------------------------------
           Time: 210 ms, Memory: 12.00MB
           
           OK (1 test, 1 assertion)
       ```
    
1. Run all tests, with step-by-step details for Acceptance tests with the `--steps` option:

    - `php codecept run --steps`
    
        ```bash
            Acceptance Tests (1) 
            -------------------------------------------------
            FirstCest: Homepage working
            Signature: FirstCest:homepageWorking
            Test: tests/acceptance/FirstCest.php:homepageWorking
            Scenario --
              I am on page "/"
              I see "home page"
              PASSED 
        ```
    
## Configuring for _your_ database
    
1. Database credentials 

    - edit the credentials in file `codeception.yml` to match your database name / user / password
    
    ```yaml
       dsn: 'mysql:host=localhost;dbname=evote'
       user: 'root'
       password: 'passpass'
       dump: 'tests/_data/dump.sql'
    ```
    
1. SQL dump:

    - create / copy the SQL to create your database tables, and insert initial fixtures test data as file to match the `dump` configuration location
    
    - i.e. `tests/_data/dump.sql` 
    
    - in most cases this will be the same as the contents of your `/db` folder, if you have been following Matt's examples ...
    
That's it - you should now have a Codeception configuration that will reset the database to match your `dump` SQL contents before each test is ruin


NOTE: Since testing involves resetting the database each time, it is common practice to use a DIFFERENT database schema for your testing, than your **live** website database. You can do this easily, just change the name of the datanase in the `dsn` configuration, e.g. add the suffix `test`:

    ```yaml
       dsn: 'mysql:host=localhost;dbname=evotetest'
    ```

    
    