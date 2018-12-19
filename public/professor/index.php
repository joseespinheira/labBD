
<head>
    <title>Professor</title>
</head>

<!-- importando o cabeçario geral -->
<?php include "../layout/header.html"; ?>

<?php  

        /*require '../bd/conexao_mongo.php';*/
echo extension_loaded("mongo") ? "loaded\n" : "not loaded\n";
echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
echo "<br>";
print_r(get_loaded_extensions());
echo "<br>";

//$client = new Mongo("mongodb://localhost:27017");
$m = new \MongoDB\Driver\Manager( 'mongodb://localhost:27017' );
echo "ooo";


$user = "jose";
$pwd = 'abc123@';

$mongo = new \MongoDB\Driver\Manager('mongodb://${user}:${pwd}@127.0.0.1:27017/c9');





































$connection = new Mongo();

echo "jds";




class CreateCollection {
    protected $cmd = array();

    function __construct($collectionName) {
        $this->cmd["create"] = (string)$collectionName;
    }
    function setCappedCollection($maxBytes, $maxDocuments = false) {
        $this->cmd["capped"] = true;
        $this->cmd["size"]   = (int)$maxBytes;

        if ($maxDocuments) {
            $this->cmd["max"] = (int)$maxDocuments;
        }
    }
    function usePowerOf2Sizes($bool) {
        if ($bool) {
            $this->cmd["flags"] = 1;
        } else {
            $this->cmd["flags"] = 0;
        }
    }
    function setFlags($flags) {
        $this->cmd["flags"] = (int)$flags;
    }
    function getCommand() {
        return new MongoDB\Driver\Command($this->cmd);
    }
    function getCollectionName() {
        return $this->cmd["create"];
    }
}


$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bson = MongoDB\BSON\fromPHP($value);
echo MongoDB\BSON\toJSON($bson), "\n";

$createCollection = new CreateCollection("cappedCollection");
$createCollection->setCappedCollection(64 * 1024);

try {
    $command = $createCollection->getCommand();
    $cursor = $manager->executeCommand("databaseName", $command);
    $response = $cursor->toArray()[0];
    var_dump($response);

    $collstats = ["collstats" => $createCollection->getCollectionName()];
    $cursor = $manager->executeCommand("databaseName", new MongoDB\Driver\Command($collstats));
    $response = $cursor->toArray()[0];
    var_dump($response);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}





























echo "aqui  ";
if (class_exists('mongodb')) {
    echo "aqui  ";
   // MongoDB is installed
}
else {
    echo "ali  ";
   // MongoDB is not installed
}

echo "aqui";

/*try 
{
    $m = new Mongo(); // connect
    $db = $m->selectDB("c9");
}
catch ( MongoConnectionException $e ) 
{
    echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
    exit();
}*/

phpinfo();








        $dados = pg_query($mysqllink,"select * from pessoa");
	    $linha = pg_fetch_assoc($dados);
        $total = pg_num_rows($dados);
?>
                <div class="card">
                    <div class="card-header">Professor</div>
                    <div class="card-body">
                        <a href="/pessoa/create.php" class="btn btn-success btn-sm" title="Add New Pessoa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mat. Pessoa</th><th>Nome</th><th>Sexo</th><th>User</th><th>Senha</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if($total){do {
                                    ?>
                                        <tr>
                                            <td><?php echo $linha['matricula_pessoa']   ?> </td>
                                            <td><?php echo $linha['nome']  ?> </td>
                                            <td><?php echo $linha['sexo']  ?> </td>
                                            <td><?php echo $linha['user']  ?> </td>
                                            <td><?php echo $linha['senha']  ?> </td>
                                            <td>
                                                <a href="<?php echo "../bd/pessoa/show.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-info btn-sm">  Visualizar <a/>
                                                <a href="<?php echo "../bd/pessoa/edit.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-primary btn-sm">  Editar <a/>
                                                <a href="<?php echo "../bd/pessoa/excluir.php?id=" . $linha['matricula_pessoa'] ?>" class="btn btn-danger btn-sm">  Excluir <a/>
                                            </td>
                                        </tr>
                                    <?php
                                    } while ($linha = pg_fetch_assoc($dados));
                                    pg_free_result($dados);}
                                    pg_close($mysqllink);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require "../layout/footer.html"; ?>
