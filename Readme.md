// Função:

Ajudar pessoas que compram e vendem na internet a controlar os produtos sem que precise ficar procurando os links no imbaralhado do historico ou favoritos;
Ele tem uma parte superior que contem os protudos armazenados, e uma parte inferior onde é possivel adicionar produtos.



//Entidades:

LOJA: Essa entidade armazena as lojas que forem cadastrada com seus respectivos produtos e um link para que a pessoa possa acessar;
Loja tem 2 ações: 

Atualizar e Listar, visto que a pessoa pode adicionar somente 4 vendas(O intuito seria que a cada nova venda concluida o site recompensa a pessoa com mais espaços, talves seja uma boa ideia para o proximo trabalho...).

Listar pega todos os links das lojas e os listas nas posições respectivas dos seus produtos(INSET).Atualizar os dados e o meio que o site tem de adicionar novos dados(atualizando os que vem ja pre-definidos) e de atualizar os mesmos(UPDATE);

Produto: Essa entidade armazena os produtos em vendas(preço, nome e tipo, sendo que tipo ja tem seus valores pre-definidos), ela tem 2 ações: 

Atualizar e listar, novamente pelo fato da pessoa so conseguir adicionar 4 vendas, a tabela ja vem com 4 espaços pre-preenchidos que quando se adiciona um produto ela é atualizada(UPDATE).Junto do update temos o listar que lista estes produtos em ordem(INSET);

Os arquivos php estao bem simples e é de facil entendimento...