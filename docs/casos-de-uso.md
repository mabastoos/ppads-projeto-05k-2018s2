# Casos de uso

# CDU001 - Logar

## Fluxo principal
1.O usuário entrará com seu nome de usuário e senha.

2.O sistema validará os dados informados e logará o usuário em uma sessão.

3.O sistema levará o usuário a tela inicial do aplicativo.

# CDU002 - Efetuar Pedido

## Fluxo principal
1.O usuário seleciona na tela principal os produtos que deseja solicitar

2.O sistema agrupa todos os itens selecionados e suas quantidades em um "carrinho de compras".

3.O usuário seleciona a opção "finalizar pedido".

4.O sistema contabiliza os valores dos produtos selecionados em uma comanda virtual agregada a conta do usuário.

  ## Fluxo Alternativo 1: Cliente não finaliza a compra.
  1.O usuário abre o carrinho de compra.
   
  2.Ele seleciona a opção “Voltar às Compras”
  
  3.O usuário continua sua compras.
  
  4.Volta para o item 2 do fluxo principal.
  
  ## Fluxo Alternativo 2: Cliente cancela a compra.
  1.O usuário abre o carrinho de compras
  
  2.O usuário seleciona a opção cancelar compras
  
  3.O sistema retira os itens adicionados do carrinho zerando-o.

  

# CDU003 - Retirar Código

## Fluxo principal
1.O sistema, após o usuário ter finalizado a compra, vai gerar um código e irá apresentá-lo na tela.

2.O usuário apresentará o código para receber seu pedido quando o atendente chegar com o pedido.



# CDU004 – Envio de email

## Fluxo Principal
1.O usuário realiza o pedido.

2.O código do pedido é gerado.

3.O usuário recebe email de "Foodmack" com a descrição do pedido e o código do pedido.

4.0 o restaurante recebe o mesmo email no email responsavel por mostrar aos funcionarios quais pedidos foram realizados.


  ## Fluxo Alternativo 1: 
  1.O usuário pode selecionar email enviados de caminho com spam, e nao receber o email.
  
  2.0 
  

