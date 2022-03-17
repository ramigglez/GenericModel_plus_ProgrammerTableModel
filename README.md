# GenericModel_plus_ProgrammerTableModel

## Generic Model Methods

<ol>
    <li>__construct ($table,$className,$properties = null)</li>
    <li>setClassName ($cn)</li>
    <li>setExclude ($e)</li>
    <li>getClassName ()</li>
    <li>getExclude ()</li>
    <li>getAttributes () | PRIVATE</li>
    <li>parse ($obj = null) | PRIVATE</li>
    <li>fill ($obj)</li>
    <li>insert ($obj = null)</li>
    <li>update ($obj)</li>
    <li>__get ($attributeName)</li>
    <li>__set ($attributeName, $value)</li>
</ol>

## Programmer Model Methods

<ol>
    <li>__construct ($properties = null)</li>
    <li>setId ($id)</li>
    <li>setNames ($names)</li>
    <li>setLastNames ($ln)</li>
    <li>setEmail ($email)</li>
    <li>setWebsite ($website)</li>
    <li>setDateIn ($datein)</li>
    <li>getId ()</li>
    <li>getNames ()</li>
    <li>getLastNames ()</li>
    <li>getEmail ()</li>
    <li>getWebsite ()</li>
    <li>getDateIn ()</li>
</ol>

## how to get Method

<pre>
    require_once './GenericCrud/Connection/Strings/Strings.php';
    require_once './GenericCrud/Connection/Connection.php';
    require_once './GenericCrud/Crud/Crud.php';
    require_once './GenericModel/GenericModel.php';
    require_once './Programmer/Programmer.php';

    $programmerModel = new Programmer;

    $programmerModel->setConnection(
        (
            new Connection(
                [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'data_base' => 'crud_users',
                    'port' => '3306',
                    'password' => 'Ramigglez.$%^20@',
                    'user_name' => 'root',
                    'charset' => 'utf8mb4'
                ]
            )
        )->connect()
    );

    $list = $programmerModel->get();

    var_dump($list);
</pre>

## how to insert Method

<pre>
    require_once './GenericCrud/Connection/Strings/Strings.php';
    require_once './GenericCrud/Connection/Connection.php';
    require_once './GenericCrud/Crud/Crud.php';
    require_once './GenericModel/GenericModel.php';
    require_once './Programmer/Programmer.php';

    $programmerModel = new Programmer;

    $programmerModel->setConnection(
        (
            new Connection(
                [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'data_base' => 'crud_users',
                    'port' => '3306',
                    'password' => 'Ramigglez.$%^20@',
                    'user_name' => 'root',
                    'charset' => 'utf8mb4'
                ]
            )
        )->connect()
    );

    $programmerModel->setNames('Coda 4');
    $programmerModel->setLastNames('Boda');
    $programmerModel->setEmail('coda@boda.com');
    $programmerModel->setWebsite('codaboda.com');
    $programmerModel->setDateIn('Mar 17 07:44 2022');
    $id = $programmerModel->insert();

    echo "SE INSERTO EL PROGRAMADOR CON EL ID : $id";
</pre>

## how to search By Field

<pre>
    require_once './GenericCrud/Connection/Strings/Strings.php';
    require_once './GenericCrud/Connection/Connection.php';
    require_once './GenericCrud/Crud/Crud.php';
    require_once './GenericModel/GenericModel.php';
    require_once './Programmer/Programmer.php';

    ######################################################Search By id###############################################
    $programmerModel = new Programmer;

    $programmerModel->setConnection(
        (
            new Connection(
                [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'data_base' => 'crud_users',
                    'port' => '3306',
                    'password' => 'Ramigglez.$%^20@',
                    'user_name' => 'root',
                    'charset' => 'utf8mb4'
                ]
            )
        )->connect()
    );

    $rowId = $programmerModel->where('id','=',5)->get();

    
    var_dump($rowId);
    
    ####################################################Search by Email################################################
    

    $programmerModel2 = new Programmer;

    $programmerModel2->setConnection(
        (
            new Connection(
                [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'data_base' => 'crud_users',
                    'port' => '3306',
                    'password' => 'Ramigglez.$%^20@',
                    'user_name' => 'root',
                    'charset' => 'utf8mb4'
                ]
            )
        )->connect()
    );

    $rowEmail = $programmerModel2->where('email','=','coda@boda.com')->get();

    
    var_dump($rowEmail);
    

    /**
    * PLAY WITH THE CODE 
    * AND SEE ALL THE SEARCHES
    * THAT YOU CAN MAKE =)
    */
</pre>