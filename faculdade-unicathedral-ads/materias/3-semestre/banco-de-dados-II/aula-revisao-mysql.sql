-- =====================================================
-- AULA DE REVISÃO - BANCO DE DADOS MYSQL (4 HORAS)
-- Tema: Sistema de Gerenciamento de Biblioteca
-- =====================================================

-- =====================================================
-- PARTE 1: CRIAÇÃO E POPULAÇÃO DO BANCO DE DADOS
-- =====================================================

-- Criar e selecionar o banco de dados
DROP DATABASE IF EXISTS biblioteca;
CREATE DATABASE biblioteca CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE biblioteca;

-- Tabela: autores
CREATE TABLE autores (
    id_autor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(50),
    data_nascimento DATE,
    biografia TEXT
);

-- Tabela: categorias
CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE,
    descricao TEXT
);

-- Tabela: livros
CREATE TABLE livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    id_autor INT NOT NULL,
    id_categoria INT NOT NULL,
    isbn VARCHAR(13) UNIQUE,
    ano_publicacao YEAR,
    editora VARCHAR(100),
    numero_paginas INT,
    quantidade_estoque INT DEFAULT 0,
    preco DECIMAL(10,2),
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

-- Tabela: usuarios
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(200),
    data_cadastro DATE NOT NULL,
    ativo BOOLEAN DEFAULT TRUE
);

-- Tabela: emprestimos
CREATE TABLE emprestimos (
    id_emprestimo INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_livro INT NOT NULL,
    data_emprestimo DATE NOT NULL,
    data_devolucao_prevista DATE NOT NULL,
    data_devolucao_real DATE,
    status ENUM('Ativo', 'Devolvido', 'Atrasado') DEFAULT 'Ativo',
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro)
);

-- Tabela: avaliacoes
CREATE TABLE avaliacoes (
    id_avaliacao INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_livro INT NOT NULL,
    nota INT CHECK (nota BETWEEN 1 AND 5),
    comentario TEXT,
    data_avaliacao DATE NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro)
);

-- =====================================================
-- INSERÇÃO DE DADOS
-- =====================================================

-- Inserir autores
INSERT INTO autores (nome, nacionalidade, data_nascimento, biografia) VALUES
('Machado de Assis', 'Brasileira', '1839-06-21', 'Considerado o maior escritor brasileiro de todos os tempos'),
('Clarice Lispector', 'Brasileira', '1920-12-10', 'Escritora e jornalista nascida na Ucrânia e naturalizada brasileira'),
('Jorge Amado', 'Brasileira', '1912-08-10', 'Um dos mais famosos e traduzidos escritores brasileiros'),
('Gabriel García Márquez', 'Colombiana', '1927-03-06', 'Escritor, jornalista e Nobel de Literatura'),
('J.K. Rowling', 'Britânica', '1965-07-31', 'Autora da série Harry Potter'),
('George Orwell', 'Britânica', '1903-06-25', 'Escritor, jornalista e ensaísta'),
('Jane Austen', 'Britânica', '1775-12-16', 'Romancista inglesa conhecida por suas críticas sociais'),
('Paulo Coelho', 'Brasileira', '1947-08-24', 'Escritor e poeta brasileiro'),
('Agatha Christie', 'Britânica', '1890-09-15', 'Escritora de romances policiais'),
('Fernando Pessoa', 'Portuguesa', '1888-06-13', 'Poeta, filósofo e escritor português');

-- Inserir categorias
INSERT INTO categorias (nome, descricao) VALUES
('Romance', 'Narrativas longas que exploram relações humanas e emoções'),
('Ficção Científica', 'Literatura especulativa baseada em ciência e tecnologia'),
('Mistério', 'Histórias focadas em resolver crimes ou enigmas'),
('Fantasia', 'Narrativas com elementos mágicos e mundos imaginários'),
('Biografia', 'Relatos sobre a vida de pessoas reais'),
('Autoajuda', 'Livros para desenvolvimento pessoal'),
('História', 'Narrativas sobre eventos e períodos históricos'),
('Poesia', 'Expressão artística através de versos'),
('Literatura Brasileira', 'Obras da literatura nacional'),
('Clássicos', 'Obras consagradas e atemporais');

-- Inserir livros
INSERT INTO livros (titulo, id_autor, id_categoria, isbn, ano_publicacao, editora, numero_paginas, quantidade_estoque, preco) VALUES
('Dom Casmurro', 1, 1, '9788535911664', 1899, 'Companhia das Letras', 256, 15, 35.90),
('Memórias Póstumas de Brás Cubas', 1, 9, '9788535911671', 1881, 'Companhia das Letras', 368, 12, 39.90),
('A Hora da Estrela', 2, 1, '9788520925683', 1977, 'Rocco', 88, 20, 29.90),
('A Paixão Segundo G.H.', 2, 9, '9788520936320', 1964, 'Rocco', 176, 8, 32.90),
('Capitães da Areia', 3, 9, '9788535914079', 1937, 'Companhia das Letras', 280, 18, 42.90),
('Gabriela, Cravo e Canela', 3, 1, '9788535914086', 1958, 'Companhia das Letras', 424, 10, 49.90),
('Cem Anos de Solidão', 4, 1, '9788501012340', 1967, 'Record', 432, 25, 54.90),
('O Amor nos Tempos do Cólera', 4, 1, '9788501012357', 1985, 'Record', 480, 14, 52.90),
('Harry Potter e a Pedra Filosofal', 5, 4, '9788532530787', 1997, 'Rocco', 264, 30, 34.90),
('Harry Potter e a Câmara Secreta', 5, 4, '9788532530794', 1998, 'Rocco', 288, 28, 36.90),
('Harry Potter e o Prisioneiro de Azkaban', 5, 4, '9788532530800', 1999, 'Rocco', 348, 26, 39.90),
('1984', 6, 2, '9788535914849', 1949, 'Companhia das Letras', 416, 22, 44.90),
('A Revolução dos Bichos', 6, 2, '9788535914856', 1945, 'Companhia das Letras', 152, 19, 29.90),
('Orgulho e Preconceito', 7, 1, '9788544001769', 1813, 'Penguin', 424, 16, 39.90),
('Emma', 7, 1, '9788544001776', 1815, 'Penguin', 512, 11, 42.90),
('O Alquimista', 8, 6, '9788576657668', 1988, 'HarperCollins', 208, 35, 32.90),
('Brida', 8, 6, '9788576657675', 1990, 'HarperCollins', 240, 17, 34.90),
('Assassinato no Expresso do Oriente', 9, 3, '9788595084742', 1934, 'HarperCollins', 256, 13, 37.90),
('Morte no Nilo', 9, 3, '9788595084759', 1937, 'HarperCollins', 368, 11, 39.90),
('Livro do Desassossego', 10, 8, '9788535911688', 1982, 'Companhia das Letras', 544, 9, 59.90);

-- Inserir usuários
INSERT INTO usuarios (nome, email, telefone, endereco, data_cadastro, ativo) VALUES
('Ana Silva Santos', 'ana.silva@email.com', '(11) 98765-4321', 'Rua das Flores, 123 - São Paulo/SP', '2023-01-15', TRUE),
('Bruno Costa Oliveira', 'bruno.costa@email.com', '(21) 97654-3210', 'Av. Atlântica, 456 - Rio de Janeiro/RJ', '2023-02-20', TRUE),
('Carla Mendes Souza', 'carla.mendes@email.com', '(31) 96543-2109', 'Rua da Paz, 789 - Belo Horizonte/MG', '2023-03-10', TRUE),
('Daniel Ferreira Lima', 'daniel.lima@email.com', '(41) 95432-1098', 'Av. Curitiba, 321 - Curitiba/PR', '2023-04-05', TRUE),
('Eduarda Rocha Alves', 'eduarda.rocha@email.com', '(51) 94321-0987', 'Rua Gaúcha, 654 - Porto Alegre/RS', '2023-05-12', TRUE),
('Felipe Martins Cruz', 'felipe.martins@email.com', '(61) 93210-9876', 'Quadra 10, 987 - Brasília/DF', '2023-06-18', TRUE),
('Gabriela Nunes Ribeiro', 'gabriela.nunes@email.com', '(71) 92109-8765', 'Rua da Bahia, 147 - Salvador/BA', '2023-07-22', TRUE),
('Henrique Dias Barbosa', 'henrique.dias@email.com', '(85) 91098-7654', 'Av. Beira Mar, 258 - Fortaleza/CE', '2023-08-30', FALSE),
('Isabela Cardoso Freitas', 'isabela.cardoso@email.com', '(81) 90987-6543', 'Rua Recife, 369 - Recife/PE', '2023-09-14', TRUE),
('João Pedro Araújo', 'joao.araujo@email.com', '(62) 89876-5432', 'Av. Goiás, 741 - Goiânia/GO', '2023-10-08', TRUE),
('Larissa Fernandes Gomes', 'larissa.gomes@email.com', '(27) 88765-4321', 'Rua Vitória, 852 - Vitória/ES', '2023-11-19', TRUE),
('Marcos Vieira Teixeira', 'marcos.vieira@email.com', '(84) 87654-3210', 'Av. Natal, 963 - Natal/RN', '2023-12-25', TRUE),
('Natália Pereira Santos', 'natalia.pereira@email.com', '(11) 86543-2109', 'Rua Paulista, 159 - São Paulo/SP', '2024-01-30', TRUE),
('Otávio Castro Moreira', 'otavio.castro@email.com', '(21) 85432-1098', 'Av. Copacabana, 357 - Rio de Janeiro/RJ', '2024-02-14', TRUE),
('Patricia Ramos Silva', 'patricia.ramos@email.com', '(31) 84321-0987', 'Rua Minas, 486 - Belo Horizonte/MG', '2024-03-20', TRUE);

-- Inserir empréstimos
INSERT INTO emprestimos (id_usuario, id_livro, data_emprestimo, data_devolucao_prevista, data_devolucao_real, status) VALUES
-- Empréstimos devolvidos
(1, 1, '2024-01-10', '2024-01-24', '2024-01-23', 'Devolvido'),
(2, 9, '2024-01-15', '2024-01-29', '2024-01-28', 'Devolvido'),
(3, 7, '2024-01-20', '2024-02-03', '2024-02-02', 'Devolvido'),
(4, 12, '2024-02-01', '2024-02-15', '2024-02-14', 'Devolvido'),
(5, 16, '2024-02-05', '2024-02-19', '2024-02-18', 'Devolvido'),
-- Empréstimos ativos (dentro do prazo)
(6, 3, '2024-12-20', '2025-01-03', NULL, 'Ativo'),
(7, 10, '2024-12-22', '2025-01-05', NULL, 'Ativo'),
(9, 14, '2024-12-25', '2025-01-08', NULL, 'Ativo'),
(10, 5, '2024-12-28', '2025-01-11', NULL, 'Ativo'),
-- Empréstimos atrasados
(1, 2, '2024-11-01', '2024-11-15', NULL, 'Atrasado'),
(2, 8, '2024-11-10', '2024-11-24', NULL, 'Atrasado'),
(11, 18, '2024-11-15', '2024-11-29', NULL, 'Atrasado'),
-- Mais empréstimos devolvidos
(12, 6, '2024-03-05', '2024-03-19', '2024-03-18', 'Devolvido'),
(13, 11, '2024-04-10', '2024-04-24', '2024-04-25', 'Devolvido'),
(14, 13, '2024-05-15', '2024-05-29', '2024-05-28', 'Devolvido'),
(15, 17, '2024-06-20', '2024-07-04', '2024-07-03', 'Devolvido'),
(1, 15, '2024-07-25', '2024-08-08', '2024-08-07', 'Devolvido'),
(3, 19, '2024-08-30', '2024-09-13', '2024-09-12', 'Devolvido'),
(5, 4, '2024-09-05', '2024-09-19', '2024-09-20', 'Devolvido'),
(7, 20, '2024-10-10', '2024-10-24', '2024-10-23', 'Devolvido');

-- Inserir avaliações
INSERT INTO avaliacoes (id_usuario, id_livro, nota, comentario, data_avaliacao) VALUES
(1, 1, 5, 'Uma obra-prima da literatura brasileira! A narrativa de Machado é genial.', '2024-01-25'),
(2, 9, 5, 'Simplesmente mágico! Harry Potter marcou minha infância.', '2024-01-30'),
(3, 7, 5, 'Gabriel García Márquez é um mestre. Cem Anos de Solidão é inesquecível.', '2024-02-05'),
(4, 12, 5, 'Assustadoramente atual. Orwell previu muita coisa que vivemos hoje.', '2024-02-16'),
(5, 16, 4, 'Inspirador! O Alquimista me fez refletir sobre meus sonhos.', '2024-02-20'),
(1, 2, 5, 'Brás Cubas é um narrador único. Machado revolucionou a literatura.', '2024-11-20'),
(12, 6, 4, 'Jorge Amado retrata o Brasil de forma única. Muito bom!', '2024-03-20'),
(13, 11, 5, 'A série Harry Potter só melhora! Prisioneiro de Azkaban é fantástico.', '2024-04-26'),
(14, 13, 4, 'A Revolução dos Bichos é uma alegoria poderosa sobre poder e corrupção.', '2024-05-30'),
(15, 17, 5, 'Paulo Coelho toca a alma. Brida é lindo!', '2024-07-05'),
(1, 15, 5, 'Jane Austen é atemporal. Emma é divertido e profundo.', '2024-08-09'),
(3, 19, 5, 'Agatha Christie é a rainha do mistério! Não consegui parar de ler.', '2024-09-14'),
(5, 4, 4, 'Clarice Lispector é intensa. A Paixão Segundo G.H. me desafiou.', '2024-09-22'),
(7, 20, 5, 'Fernando Pessoa é genial! O Livro do Desassossego é profundo.', '2024-10-25'),
(9, 14, 5, 'Orgulho e Preconceito é perfeito! Romance clássico impecável.', '2024-12-27');


