<?php
include_once 'TEMPLATES/topo.php';
include_once 'TEMPLATES/menu.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'quemsomos':
        include 'quemsomos.php';
        break;
    case 'servicos':
        include 'servicos.php';
        break;
    case 'clientes':
        include 'clientes.php';
        break;
    case 'faleconosco':
        include 'faleconosco.php';
        break;
    default:
        echo "<h2>Bem-vindo à Simas Turbo</h2><p>A melhor oficina mecânica da Paraíba!</p>";
}

include_once 'TEMPLATES/rodape.php';
?>
