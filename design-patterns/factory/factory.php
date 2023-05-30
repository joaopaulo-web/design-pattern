<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory</title>
</head>
<body>
    <div class="container">
        <h1>
        <?php
/**
 * Classe responsável por conter as propriedades dos livros.
 */
class Book{
    //Nome do livro
    private $bookName;
    //Autor do livro
    private $bookAuthor;

    /**
     * Método responsável por atribuir as propriedades aos parâmetros que serão digitados pelo usuário
     */
    public function __construct($name, $author){
        $this -> bookName = $name;
        $this -> bookAuthor = $author;
    }

    /**
     * Método responsável por permitir que o usuário tenha acesso visual ao nome do livro e o autor
     */
    public function getAuthorName(){
        return $this -> bookName . ' - ' . $this -> bookAuthor;
    }
}

    /**
     * Classe responsável por fabricar os livros
     */
    class factoryBook{
        /**
         * Método responsável por criar os objetos livros da classe Book, recebendo dois parâmetros name do livro e seu author.
         */
        public static function create($name, $author){
            return new Book($name, $author);
        }
    }

    // book1: usa o método create da classe factoryBook para criar um novo objeto da classe book
    $book1 = factoryBook::create('Livro teste 1','Teste Autor 1');

    // Imprime na tela o nome do livro e nome do autor por via do método público getAuthorName
    echo $book1 -> getAuthorName();
    ?>
        </h1>
    </div>
</body>
</html>