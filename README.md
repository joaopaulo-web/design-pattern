# Estudo sobre Design Pattern em PHP.
 
Neste repositório, você encontrará exemplos de implementação de alguns design patterns em PHP. Os padrões escolhidos para estudo são: Singleton, Factory, Observer e Facade. 

Esses padrões são amplamente utilizados no desenvolvimento de software para resolver problemas recorrentes e promover a reutilização de código.

## Padrões de Design

### Singleton

O padrão Singleton é utilizado quando desejamos garantir que uma classe tenha apenas uma instância em todo o sistema. Isso é útil quando precisamos de um ponto central de acesso a recursos compartilhados ou quando queremos limitar a criação de objetos de uma determinada classe.

### Factory

O padrão Factory é utilizado para criar objetos de diferentes classes derivadas de uma mesma classe base, sem a necessidade de expor a lógica de criação diretamente ao cliente. O objetivo é fornecer uma interface comum para a criação de objetos, permitindo a criação flexível e desacoplada.

### Observer

O padrão Observer é utilizado quando temos um relacionamento de dependência um para muitos entre objetos. Quando um objeto muda de estado, todos os seus dependentes são notificados e atualizados automaticamente. Isso permite a implementação de uma comunicação eficiente entre objetos, sem acoplamento direto.

### Facade

O padrão Facade é utilizado para fornecer uma interface simplificada para um conjunto complexo de subsistemas. Ele oculta a complexidade interna e fornece uma interface única e simplificada para o cliente, facilitando a utilização desses subsistemas.



## Tecnologias utilizadas

- PHP

## Como utilizar este repositório

Cada design pattern está organizado em seu próprio diretório dentro deste repositório. Dentro de cada diretório, você encontrará o código-fonte e um arquivo README.md explicando a implementação específica do padrão.
