const express = require('express');
const cors = require('cors');
const sqlite3 = require('sqlite3').verbose();

const app = express();
const porta = 3000;

app.use(cors()); 
app.use(express.json()); 

// --- 1. CONEXÃO COM O BANCO ---
const db = new sqlite3.Database('./database.sqlite', (err) => {
    if (err) {
        console.error("Erro ao conectar no banco:", err.message);
    } else {
        console.log("Conectado ao banco SQLite!");
        db.run(`CREATE TABLE IF NOT EXISTS usuarios (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nome TEXT NOT NULL,
            email TEXT NOT NULL
        )`);
    }
});

// --- 2. AS ROTAS DO CRUD ---

// R - Read (Ler todos os usuários)
app.get('/usuarios', (req, res) => {
    const sql = `SELECT * FROM usuarios`;
    // db.all busca todas as linhas que baterem com o SQL
    db.all(sql, [], (err, rows) => {
        if (err) return res.status(400).json({ erro: err.message });
        res.json(rows); // Devolve os dados em formato JSON
    });
});

// C - Create (Criar um novo usuário)
app.post('/usuarios', (req, res) => {
    // Pega o nome e email que vieram no corpo (body) da requisição
    const { nome, email } = req.body; 
    const sql = `INSERT INTO usuarios (nome, email) VALUES (?, ?)`;
    
    // db.run apenas executa a ação (não retorna linhas)
    db.run(sql, [nome, email], function(err) {
        if (err) return res.status(400).json({ erro: err.message });
        res.json({ mensagem: "Usuário criado!", id: this.lastID, nome, email });
    });
});

// U - Update (Atualizar um usuário existente)
app.put('/usuarios/:id', (req, res) => {
    const { nome, email } = req.body;
    const id = req.params.id; // Pega o ID que veio na URL
    const sql = `UPDATE usuarios SET nome = ?, email = ? WHERE id = ?`;
    
    db.run(sql, [nome, email, id], function(err) {
        if (err) return res.status(400).json({ erro: err.message });
        res.json({ mensagem: "Usuário atualizado com sucesso!" });
    });
});

// D - Delete (Deletar um usuário)
app.delete('/usuarios/:id', (req, res) => {
    const id = req.params.id;
    const sql = `DELETE FROM usuarios WHERE id = ?`;
    
    db.run(sql, id, function(err) {
        if (err) return res.status(400).json({ erro: err.message });
        res.json({ mensagem: "Usuário deletado com sucesso!" });
    });
});


// --- 3. LIGANDO O SERVIDOR ---
app.listen(porta, () => {
    console.log(`API rodando na porta ${porta}`);
});