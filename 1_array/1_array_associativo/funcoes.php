function sacar(array $conta, float $valorASacar)
{
if ($valorASacar > $conta['saldo']) {
exibeMensagem("Você não tem saldo suficiente");
} else {
$conta['saldo'] -= $valorASacar;
}

return $conta;
}

function exibeMensagem(string $mensagem)
{
echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar)
{
if ($valorADepositar > 0) {
$conta['saldo'] += $valorADepositar;
} else {
exibeMensagem("Depositos precisam ser positivos");
}
return $conta;
}