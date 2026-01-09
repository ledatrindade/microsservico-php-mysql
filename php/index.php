<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

echo '<h2>Dashboard de Alunos</h2>';

// Conexão com o MySQL no container
$servername = "db";
$username = "root";
$password = "Senha123";
$database = "meubanco";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Falha na conexão: " . $link->connect_error);
}

// Inserir um novo registro aleatório
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

$query_insert = "INSERT INTO dados (Nome, Sobrenome, Endereco, Cidade, Host) 
                 VALUES ('$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$host_name')";

$link->query($query_insert);

// Buscar todos os registros
$result = $link->query("SELECT * FROM dados");

// Mostrar tabela HTML
echo '<table border="1" cellpadding="10" cellspacing="0">';
echo '<tr>
        <th>AlunoID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Endereco</th>
        <th>Cidade</th>
        <th>Host</th>
      </tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row['AlunoID'].'</td>';
        echo '<td>'.$row['Nome'].'</td>';
        echo '<td>'.$row['Sobrenome'].'</td>';
        echo '<td>'.$row['Endereco'].'</td>';
        echo '<td>'.$row['Cidade'].'</td>';
        echo '<td>'.$row['Host'].'</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="6">Nenhum registro encontrado</td></tr>';
}
echo '</table>';

$link->close();
?>
